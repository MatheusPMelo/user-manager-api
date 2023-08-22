<?php

namespace App\Core\Services;

use App\Core\Repositories\Contracts\IUserRepository;
use App\Core\Services\Contracts\IUserService;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class UserService implements IUserService
{
    /**
     * @var IUserRepository
     */

    protected $userRepository;

    public function __construct(IUserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function getAll(): ?Collection
    {
        return $this->userRepository->getAll();
    }

    public function getById(int $id): ?User
    {
        return $this->userRepository->getById($id);
    }

    public function create(array $data): ?User
    {
        return $this->userRepository->create($data);
    }

    public function update(array $data, int $id): ?User
    {
        return $this->userRepository->update($id, $data);
    }

    public function delete(int $id): ?User
    {
        return $this->userRepository->delete($id);
    }


}
