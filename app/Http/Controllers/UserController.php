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
            $path = $request->file('profile_picture')->store('profile_pictures');
            $user->profile_picture = $path;
        }

        $user->save();

        return redirect()->route('login')->with('success', 'User created successfully');
    }

    public function getUserList(Request $request)
    {
        $pagination = 9;
        
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $users = User::where('name', 'LIKE', "%$search_text%")
                ->orWhere('email', 'LIKE', "%$search_text%")
                ->orWhere('phone_number', 'LIKE', "%$search_text%")
                ->orWhere('age', 'LIKE', "%$search_text%")
                ->orWhere('height', 'LIKE', "%$search_text%")
                ->orWhere('weight', 'LIKE', "%$search_text%")
                ->orderBy('name', 'asc')
                ->paginate($pagination);

            return view('users', [
                'title' => 'Users',
                'users' => $users,
                'query' => $search_text,
            ]);
        }
        else {
            $users = User::orderBy('name', 'asc')->paginate($pagination);
            return view('users', [
                'title' => 'Users',
                'users' => $users,
            ]);
        }
    }

    public function editUser(Request $request, $id)
    {
        $user = User::find($id);
    
        if (!$user) {
            return redirect()->route('user.list')->with('error', 'User not found');
        }
    
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone_number' => 'required|string|max:13',
            'role_id' => 'required|integer',
            'age' => 'nullable|integer',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->phone_number = $validated['phone_number'];
        $user->role_id = $validated['role_id'];
        $user->age = $validated['age'];
        $user->height = $validated['height'];
        $user->weight = $validated['weight'];
    
        if ($request->filled('password')) {
            $user->password = bcrypt($validated['password']);
        }
    
        if ($request->hasFile('profile_picture')) {
            $path = $request->file('profile_picture')->store('profile_pictures');
            $user->profile_picture = $path;
        }
    
        $user->save();
    
        return redirect()->route('user.list')->with('success', 'User updated successfully');
    }
    

    public function deleteUser(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return redirect()->route('user.list')->with('error', 'User not found');
        }

        $user->delete();

        return redirect()->route('user.list')->with('success', 'User deleted successfully');
    }
}
