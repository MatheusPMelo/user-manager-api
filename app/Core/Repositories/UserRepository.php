<?php

namespace App\Core\Repositories;

use App\Core\Repositories\Contracts\IUserRepository;
use App\Models\User;

class UserRepository implements IUserRepository
{
   public function getAll(): ?User
   {
      return User::all();
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
