<?php

namespace App\Core\Services\Contracts;

use Illuminate\Database\Eloquent\Model;

interface IUserDataService
{
    public function create(array $data): ?Model;

    public function update(int $id, array $data): ?Model;
}
