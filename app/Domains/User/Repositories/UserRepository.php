<?php

namespace App\Domains\User\Repositories;

use App\Domains\User\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function all()
    {
        return User::all();
    }

    public function findById(int $id)
    {
        return User::find($id);
    }

    public function store(array $data)
    {
        return User::create($data);
    }
}
