<?php

namespace App\Services\Impl;

use App\Models\Publication;
use App\Services\PublicationService;

class PublicationServiceImpl implements PublicationService
{
    function all()
    {
        return Publication::included()->filter()->sort()->getOrPaginate();
    }

    function show($id)
    {
        return Publication::with(['course', 'computer'])->find($id);
    }

    function create(array $data)
    {
        return Publication::create($data);
    }

    function update($id, array $data)
    {
        $Publication = Publication::find($id);
        if (!$Publication) {
            return null;
        }

        $Publication->update($data);
        return $Publication;
    }

    function delete($id)
    {
        $Publication = Publication::find($id);
        if (!$Publication) {
            return false;
        }

        return $Publication->delete();
    }
}
