<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    const ROUTE_STORE = 'store';

    protected $repository;

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    public function store(Request $request) {
        \Log::debug("message");
        \Log::debug($request);
    }

}
