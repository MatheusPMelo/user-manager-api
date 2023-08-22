<?php

namespace App\Core\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;

interface IUserDataRepository
{
    public function create(array $data): ?Model;
    public function update(int $id, array $data): ?Model;
}
