<?php

namespace App\Http\Controllers;

use App\Http\Requests\Publication\StorePublicationRequest;
use App\Http\Requests\Publication\UpdatePublicationRequest;

use App\Models\Publication;

use App\Services\Impl\PublicationServiceImpl as ImplPublicationServiceImpl;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    use CrudTrait;

    public function __construct(ImplPublicationServiceImpl $PublicationService)
    {
        $this->configureCrud(
            service: $PublicationService,
            storeRequest: StorePublicationRequest::class,
            updateRequest: UpdatePublicationRequest::class,
            resourceName: 'Aprendiz'
        );
    }
}