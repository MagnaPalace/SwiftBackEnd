<?php

namespace App\Http\Controllers;

use App\Repositories\User\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    const ROUTE_STORE = 'store';
    const ROUTE_ALL = 'all';

    protected $repository;

    public function __construct(UserRepository $userRepository)
    {
        $this->repository = $userRepository;
    }

    /**
     * ユーザーの保存
     *
     * @param Request $request
     * @return void
     */
    public function store(Request $request) {
        $result = $this->repository->store($request->all());
        return response()->json($result);
    }

    /**
     * ユーザーの取得
     *
     * @return void
     */
    public function all() {
        $result = $this->repository->all();
        return response()->json($result);
    }

}
