<?php

namespace App\Core\Repositories\Contracts;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

interface IUserRepository
{
    public function getAll() : ? Collection;
    public function getById(int $id) : ? User;
    public function create(array $data) : ? Model;
    public function update(int $id, array $data) : ? User;
    public function delete(int $id) : ? User;
}
