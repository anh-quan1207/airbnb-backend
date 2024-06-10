<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository
{
    public function create($data)
    {
        return User::create([
            'user_name' => $data['user_name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'] ?? null,
            'gender' => $data['gender'],
            'birthday' => $data['birthday'] ?? null,
            'hash_password' => $data['hash_password'],
        ]);
    }
}
