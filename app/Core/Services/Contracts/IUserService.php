<?php

namespace App\Core\Services\Contracts;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

interface IUserService
{
    public function getAll(): ?Collection;

    public function getById(int $id): ?User;

    public function create(array $data): ?User;

    public function update(array $data, int $id): ?User;

    public function delete(int $id): ?User;
}
