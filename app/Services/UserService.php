<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function createUser(array $data)
    {
        $data['hash_password'] = Hash::make($data['password']);
        unset($data['password']);
        unset($data['password_confirmation']);

        return $this->userRepository->create($data);
    }
}
