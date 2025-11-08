<?php

namespace App\Http\Controllers;

use App\Http\Requests\Message\StoreMessageRequest;
use App\Http\Requests\Message\UpdateMessageRequest;

use App\Models\Message;
use App\Services\Impl\MessageServiceImpl as ImplMessageServiceImpl;
use App\Services\MessageService;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    use CrudTrait;

    public function __construct(ImplMessageServiceImpl $MessageService)
    {
        $this->configureCrud(
            service: $MessageService,
            storeRequest: StoreMessageRequest::class,
            updateRequest: UpdateMessageRequest::class,
            resourceName: 'Aprendiz'
        );
    }
}