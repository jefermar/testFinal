<?php

namespace App\Http\Controllers;

use App\Http\Requests\Role\StoreRoleRequest;
use App\Http\Requests\Role\UpdateRoleRequest;

use App\Models\Role;
use App\Services\Impl\RoleServiceImpl as ImplRoleServiceImpl;
use App\Services\RoleService;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    use CrudTrait;

    public function __construct(ImplRoleServiceImpl $RoleService)
    {
        $this->configureCrud(
            service: $RoleService,
            storeRequest: StoreRoleRequest::class,
            updateRequest: UpdateRoleRequest::class,
            resourceName: 'Roles'
        );
    }
}