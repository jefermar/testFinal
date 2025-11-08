<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;

trait CrudTrait
{
    protected $service;
    protected $storeRequest;
    protected $updateRequest;
    protected $resourceName = 'Recurso';

    /**
     * Configura el trait con el servicio y requests correspondientes
     */
    protected function configureCrud($service, $storeRequest = null, $updateRequest = null, $resourceName = 'Recurso')
    {
        $this->service = $service;
        $this->storeRequest = $storeRequest;
        $this->updateRequest = $updateRequest;
        $this->resourceName = $resourceName;
    }

    /**
     * Listado de todos los recursos
     */
    public function index(): JsonResponse
    {
        $resources = $this->service->all();
        return response()->json($resources);
    }

    /**
     * Mostrar un recurso específico
     */
    public function show($id): JsonResponse
    {
        $resource = $this->service->show($id);
        
        if (!$resource) {
            return response()->json(['message' => 'No encontrado'], 404);
        }
        
        return response()->json($resource);
    }

    /**
     * Crear un nuevo recurso
     */
    public function store(): JsonResponse
    {
        $request = app($this->storeRequest);
        $resource = $this->service->create($request->validated());
        
        return response()->json([
            'message' => "{$this->resourceName} agregado correctamente.",
            'data' => $resource
        ], 201);
    }

    /**
     * Actualizar un recurso existente
     */
    public function update($id): JsonResponse
    {
        $request = app($this->updateRequest);
        $resource = $this->service->update($id, $request->validated());
        
        if (!$resource) {
            return response()->json(['message' => 'No encontrado'], 404);
        }
        
        return response()->json([
            'message' => 'Actualizado correctamente.',
            'data' => $resource
        ]);
    }

    /**
     * Eliminar un recurso
     */
    public function destroy($id): JsonResponse
    {
        $resource = $this->service->delete($id);
        
        if (!$resource) {
            return response()->json(['message' => 'No encontrado.'], 404);
        }
        
        return response()->json(['message' => 'Eliminado correctamente.']);
    }
}