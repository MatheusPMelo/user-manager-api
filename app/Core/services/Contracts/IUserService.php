<?php 

namespace App\Core\Services\Contracts;

use App\Models\User;

interface IUserService
{
    public function getAll() : ? User;
    public function getById(int $id) : ? User;
    public function create(array $data) : ? User;
    public function update(int $id, array $data) : ? User;
    public function delete(int $id) : ? User;
}