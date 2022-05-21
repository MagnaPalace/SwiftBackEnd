<?php

namespace App\Repositories\User;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{

    public function store(array $attributes) {
        $user = new User([
            User::USER_ID => $attributes[User::USER_ID],
            User::NAME => $attributes[User::NAME],
            User::COMMENT => $attributes[User::COMMENT],
        ]);
        $user->save();
        return $user;
    }

    public function all() {
        $users = User::query()
            ->get();
        return $users;
    }

}
