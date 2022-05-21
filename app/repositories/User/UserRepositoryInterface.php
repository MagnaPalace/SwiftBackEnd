<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{

    public function store(array $attributes);

    public function all();

}
