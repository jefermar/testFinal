<?php

namespace App\Http\Controllers;

use App\Http\Requests\Profile\StoreProfileRequest;
use App\Http\Requests\Profile\UpdateProfileRequest;

use App\Models\Profile;
use App\Services\Impl\ProfileServiceImpl as ImplProfileServiceImpl;
use App\Services\ProfileService;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use CrudTrait;

    public function __construct(ImplProfileServiceImpl $ProfileService)
    {
        $this->configureCrud(
            service: $ProfileService,
            storeRequest: StoreProfileRequest::class,
            updateRequest: UpdateProfileRequest::class,
            resourceName: 'Aprendiz'
        );
    }
}