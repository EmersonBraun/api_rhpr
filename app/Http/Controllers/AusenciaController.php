<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AusenciaRequest;
use App\Repositories\AusenciaRepository;

class AusenciaController extends Controller
{
    protected $repository;
    public function __construct(AusenciaRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"ausencia"},
    *     path="api/v1/ausencia",
    *     description="Return a list with ausencias",
    *     @OA\Response(
    *         response=200,
    *         description="A list with ausencias",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function index()
    {
        $response = $this->repository->all();
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Post(
    *     tags={"ausencia"},
    *     path="api/v1/ausencia",
    *     description="Create new ausencia",
    *     @OA\Response(
    *         response=200,
    *         description="A created ausencia",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function store(AusenciaRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"ausencia"},
    *     path="api/v1/ausencia",
    *     description="Return a specific ausencia",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ausencia",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific ausencia",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function show($id)
    {
        $response = $this->repository->findOrFail($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"ausencia"},
    *     path="api/v1/ausencia",
    *     description="Update a specific ausencia",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ausencia",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated ausencia",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function update(AusenciaRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"ausencia"},
    *     path="api/v1/ausencia",
    *     description="Remove a specific ausencias",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ausencia",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted ausencia",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function destroy($id)
    {
        $response = $this->repository->findAndDelete($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Put(
    *     tags={"ausencia"},
    *     path="api/v1/ausencia/restore",
    *     description="Restore a specific ausencia",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ausencia",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored ausencia",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function restore($id)
    {
        $response = $this->repository->findAndRestore($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"ausencia"},
    *     path="api/v1/ausencia/forceDelete",
    *     description="Remove permanently ausencia",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of ausencia",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly ausencia",
    *     ),
    *     @OA\Response(
    *         response=400,
    *         description="An error happened"
    *     ),
    *     @OA\Response(
    *         response=422,
    *         description="Missing Data"
    *     ),
    *     @OA\Response(
    *         response=501,
    *         description="Not implemented"
    *     ),
    * )
    */
    public function forceDelete($id)
    {
        $response = $this->repository->findAndDestroy($id);
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

}
