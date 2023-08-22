<?php

namespace App\Core\Repositories;

use App\Core\Repositories\Contracts\IUserRepository;
use App\Models\User;
use App\Core\Utils\BasicRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;


class UserRepository extends BasicRepository implements IUserRepository
{
    public function getAll(): ?Collection
    {
        return $this->getEntityInstance()->with('userData')->get();
    }

    public function getById(int $id): ?User
    {
        return parent::__byKey($id);
    }

    public function create(array $data): ?Model
    {

        return parent::__save($data);
    }

    public function update(int $id, array $data): ?User
    {
        return parent::__updateByKey($id, $data);
    }

    public function delete(int $id): ?User
    {
        return parent::__delete($id);
    }

    protected function getEntityInstance(): Model
    {
        return new User();
    }
}
