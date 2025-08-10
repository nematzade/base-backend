<?php

namespace App\Domains\User\Repositories;

interface UserRepositoryInterface
{
    public function all();
    public function findById(int $id);
    public function store(array $data);
}
