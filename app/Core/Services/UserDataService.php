<?php

namespace App\Core\Services;

use App\Core\Repositories\Contracts\IUserDataRepository;
use App\Core\Services\Contracts\IUserDataService;
use Illuminate\Database\Eloquent\Model;

class UserDataService implements IUserDataService
{

    /* @var IUserDataRepository */
    protected $userDataRepository;

    public function __construct(IUserDataRepository $userDataRepository)
    {
        $this->userDataRepository = $userDataRepository;
    }

    public function create(array $data): ?Model
    {
        return $this->userDataRepository->create($data);
    }

    public function update(int $id, array $data): ?Model
    {
        return $this->userDataRepository->update($id, $data);
    }
}
