<?php

namespace App\Core\Services;

use App\Core\Repositories\Contracts\IUserRepository;
use App\Core\Services\Contracts\IUserService;
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

   public function getAll(): Collection
   {
      return $this->userRepository->getAll();
   }

   public function getById(int $id): ?User
   {
      return User::find($id);
   }

   public function create(array $data): ?User
   {
      return User::create($data);
   }

   public function update(int $id, array $data): ?User
   {
      $user = User::find($id);
      $user->update($data);
      return $user;
   }

   public function delete(int $id): ?User
   {
      $user = User::find($id);
      $user->delete();
      return $user;
   }
}
