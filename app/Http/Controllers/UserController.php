<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;

use App\Models\User;
use App\Services\Impl\UserServiceImpl as ImplUserServiceImpl;
use App\Services\UserServiceImpl;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use CrudTrait;

    public function __construct(ImplUserServiceImpl $UserService)
    {
        $this->configureCrud(
            service: $UserService,
            storeRequest: StoreUserRequest::class,
            updateRequest: UpdateUserRequest::class,
            resourceName: 'User'
        );
    }
}