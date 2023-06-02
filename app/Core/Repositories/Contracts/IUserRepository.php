<?php 

namespace App\Core\Repositories\Contracts;

use App\Models\User;

interface IUserRepository
{
    public function getAll() : ? User;
    public function getById(int $id) : ? User;
    public function create(array $data) : ? User;
    public function update(int $id, array $data) : ? User;
    public function delete(int $id) : ? User;
}