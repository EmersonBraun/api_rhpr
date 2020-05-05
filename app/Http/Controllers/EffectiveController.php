<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EffectiveRequest;
use App\Repositories\EffectiveRepository;

class EffectiveController extends Controller
{
    protected $repository;
    public function __construct(EffectiveRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"effective"},
    *     path="api/v1/effective",
    *     description="Return a list with effectives",
    *     @OA\Response(
    *         response=200,
    *         description="A list with effectives",
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
    *     tags={"effective"},
    *     path="api/v1/effective",
    *     description="Create new effective",
    *     @OA\Response(
    *         response=200,
    *         description="A created effective",
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
    public function store(EffectiveRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"effective"},
    *     path="api/v1/effective",
    *     description="Return a specific effective",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of effective",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific effective",
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
    *     tags={"effective"},
    *     path="api/v1/effective",
    *     description="Update a specific effective",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of effective",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated effective",
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
    public function update(EffectiveRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"effective"},
    *     path="api/v1/effective",
    *     description="Remove a specific effectives",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of effective",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted effective",
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
    *     tags={"effective"},
    *     path="api/v1/effective/restore",
    *     description="Restore a specific effective",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of effective",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored effective",
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
    *     tags={"effective"},
    *     path="api/v1/effective/forceDelete",
    *     description="Remove permanently effective",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of effective",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly effective",
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
