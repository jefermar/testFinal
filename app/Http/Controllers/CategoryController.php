<?php

namespace App\Http\Controllers;

use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;

use App\Models\Category;

use App\Services\CategoryServiceImpl;
use App\Services\Impl\CategoryServiceImpl as ImplCategoryServiceImpl;
use App\Traits\CrudTrait;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use CrudTrait;

    public function __construct(ImplCategoryServiceImpl $CategoryService)
    {
        $this->configureCrud(
            service: $CategoryService,
            storeRequest: StoreCategoryRequest::class,
            updateRequest: UpdateCategoryRequest::class,
            resourceName: 'Category'
        );
    }
}
