<?php

namespace App\Http\Service;

use App\Http\Repository\UserRepository;
use Illuminate\Http\Request;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getUserList(Request $request)
    {
        $query = $this->userRepository->getQuery();
        
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
    
        $users = $query->paginate(10);

        $data = [
            'title' => 'User List',
            'users' => $users,
            'query' => $request->input('query'),
            'sort_by' => $request->input('sort_by'),
        ];

        return $data;
    }

    public function updateUser($id, array $validatedData)
    {
        $user = $this->userRepository->findUserById($id);

        if (!$user) {
            return ['status' => 'error', 'message' => 'User not found'];
        }

        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->phone_number = $validatedData['phone_number'];
        $user->role_id = $validatedData['role_id'];
        $user->age = $validatedData['age'];
        $user->height = $validatedData['height'];
        $user->weight = $validatedData['weight'];

        $this->userRepository->saveUser($user);

        return ['status' => 'success', 'message' => 'User updated successfully'];
    }

    // public function photoUpload($id, $request)
    // {
    //     $user = $this->userRepository->findUserById($id);

    //     if (!$user) {
    //         return ['status' => 'error', 'message' => 'User not found'];
    //     }

    //     $request->validate([
    //         'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    //     ]);

    //     if ($request->hasFile('profile_picture')) {
    //         $picturePath = $request->file('profile_picture')->store('public/pictures');
    //         $user->profile_picture = str_replace('public/', '', $picturePath);
    //     }

    //     if ($request->type === 'delete') {
    //         $user->profile_picture = null;
    //     }

    //     $this->userRepository->saveUser($user);

    //     return ['status' => 'success', 'message' => "User's profile picture updated successfully"];
    // }

    public function deleteUser($id)
    {
        $result = $this->userRepository->deleteUserById($id);

        if ($result) {
            return ['status' => 'success', 'message' => 'User deleted successfully'];
        } else {
            return ['status' => 'error', 'message' => 'User not found'];
        }
    }
}