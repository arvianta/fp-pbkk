<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getUserList(Request $request)
    {
        $data = $this->userService->getUserList($request);

        return view('dashboard.admin.userlist', $data);
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone_number' => 'required|string|max:18',
            'role_id' => 'required|integer',
            'age' => 'nullable|integer',
            'height' => 'nullable|numeric',
            'weight' => 'nullable|numeric',
        ]);

        $result = $this->userService->updateUser($id, $validatedData);

        if ($result['status'] === 'success') {
            return redirect()->back()->with('status', $result['message']);
        } else {
            return redirect()->route('user.list')->with('error', $result['message']);
        }
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

    // public function photoUpload(Request $request, $id)
    // {
    //     $validatedData = $request->validate([
    //         'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     $result = $this->userService->photoUpload($id, $validatedData);

    //     if ($result['status'] === 'success') {
    //         return back()->with('status', $result['message']);
    //     } else {
    //         return redirect()->route('user.list')->with('error', $result['message']);
    //     }
    // }

    public function deleteUser($id)
    {
        $result = $this->userService->deleteUser($id);

        if ($result['status'] === 'success') {
            return redirect()->route('admin.userlist')->with('status', $result['message']);
        } else {
            return redirect()->route('admin.userlist')->with('error', $result['message']);
        }
    }
}
