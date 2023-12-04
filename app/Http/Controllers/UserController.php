<?php

namespace App\Http\Controllers;

use App\Models\User;
use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use function Pest\Laravel\get;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users|max:50',
            'phone_number' => 'required|string|max:13',
            'role_id' => 'required|integer',
            'password' => 'required|min:6',
            'age' => 'nullable|integer', 
            'height' => 'nullable|numeric', 
            'weight' => 'nullable|numeric', 
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $user = new User([
            'id' => Uuid::uuid4()->toString(),
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone_number' => $validated['phone_number'],
            'role_id' => $validated['role_id'],
            'password' => bcrypt($validated['password']),
            'age' => $validated['age'],
            'height' => $validated['height'],
            'weight' => $validated['weight'],
        ]);

        if ($request->hasFile('profile_picture')) {
            $fileName = time().$request->file('profile_picture')->getClientOriginalName();
            $path = $request->file('profile_picture')->storeAs('images', $fileName, 'public');
            $user->profile_picture = $path;
        }

        $user->save();

        return redirect()->route('login')->with('status', 'User created successfully');
    }

    public function getUserList(Request $request)
    {
        $pagination = 8;
        $query = User::query();
    
        if ($request->has('query')) {
            $search_text = $request->input('query');
            $query->where(function ($q) use ($search_text) {
                $q->where('name', 'LIKE', "%$search_text%")
                    ->orWhere('email', 'LIKE', "%$search_text%")
                    ->orWhere('phone_number', 'LIKE', "%$search_text%")
                    ->orWhere('age', 'LIKE', "%$search_text%")
                    ->orWhere('height', 'LIKE', "%$search_text%")
                    ->orWhere('weight', 'LIKE', "%$search_text%");
            });
        }
    
        if ($request->has('sort_by')) {
            $sort_by = $request->input('sort_by');
            if ($sort_by === 'name_asc') {
                $query->orderBy('name', 'asc');
            } elseif ($sort_by === 'name_desc') {
                $query->orderBy('name', 'desc');
            } elseif ($sort_by === 'age_asc') {
                $query->orderBy('age', 'asc');
            } elseif ($sort_by === 'age_desc') {
                $query->orderBy('age', 'desc');
            } elseif ($sort_by === 'height_asc') {
                $query->orderBy('height', 'asc');
            } elseif ($sort_by === 'height_desc') {
                $query->orderBy('height', 'desc');
            } elseif ($sort_by === 'weight_asc') {
                $query->orderBy('weight', 'asc');
            } elseif ($sort_by === 'weight_desc') {
                $query->orderBy('weight', 'desc');
            }
        } else {
            $query->orderBy('name', 'asc');
        }
    
        $users = $query->paginate($pagination);
    
        return $users;
    }
    

    public function editUser($id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->route('user.list')->with('error', 'User not found');
        }
    
        return view('admin.editUser', [
            'title' => 'Edit User',
            'user' => $user,
        ]);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->route('user.list')->with('error', 'User not found');
        }
    
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:18',
            'role_id' => 'required|integer',
            'age' => 'nullable|integer',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
        ]);
        
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone_number = $validated['phone_number'];
        $user->role_id = $validated['role_id'];
        $user->age = $validated['age'];
        $user->height = $validated['height'];
        $user->weight = $validated['weight'];
    
        $user->save();
    
        return back()->with('status', 'User updated successfully');
    }
    
    public function photoUpload(Request $request, $id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->route('user.list')->with('error', 'User not found');
        }

        $request->validate([
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('profile_picture')) {
            $picturePath = $request->file('profile_picture')->store('public/pictures');
            $user->profile_picture = str_replace('public/', '', $picturePath);
        }

        if ($request->type === 'delete') {
            $user->profile_picture = null;
        }

        $user->save();

        return back()->with('status', "User's profile picture updated successfully");
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('admin.userlist')->with('error', 'User not found');
        }
        $user->delete();

        return redirect()->route('admin.userlist')->with('status', 'User deleted successfully');
    }
}
