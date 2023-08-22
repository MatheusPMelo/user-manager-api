<?php

namespace App\Core\Repositories;

use App\Core\Repositories\Contracts\IUserDataRepository;
use App\Core\Utils\BasicRepository;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserData;

class UserDataRepository extends BasicRepository implements IUserDataRepository
{

    public function create(array $data): ?Model
    {
        return parent::__save($data);
    }

    public function update(int $id, array $data): ?Model
    {
        return parent::__updateByKey($id, $data);
    }

    protected function getEntityInstance(): Model
    {
        return new UserData();
    }
}
