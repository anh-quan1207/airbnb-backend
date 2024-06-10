<?php

namespace App\Services\User;

use App\Repositories\User\UserRepository;
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
