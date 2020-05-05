<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EffectivegraduatesRequest;
use App\Repositories\EffectivegraduatesRepository;

class EffectivegraduatesController extends Controller
{
    protected $repository;
    public function __construct(EffectivegraduatesRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"effectivegraduates"},
    *     path="api/v1/effectivegraduates",
    *     description="Return a list with effectivegraduates",
    *     @OA\Response(
    *         response=200,
    *         description="A list with effectivegraduates",
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
    *     tags={"effectivegraduates"},
    *     path="api/v1/effectivegraduates",
    *     description="Create new effectivegraduates",
    *     @OA\Response(
    *         response=200,
    *         description="A created effectivegraduates",
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
    public function store(EffectivegraduatesRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"effectivegraduates"},
    *     path="api/v1/effectivegraduates",
    *     description="Return a specific effectivegraduates",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of effectivegraduates",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific effectivegraduates",
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
    *     tags={"effectivegraduates"},
    *     path="api/v1/effectivegraduates",
    *     description="Update a specific effectivegraduates",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of effectivegraduates",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated effectivegraduates",
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
    public function update(EffectivegraduatesRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"effectivegraduates"},
    *     path="api/v1/effectivegraduates",
    *     description="Remove a specific effectivegraduates",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of effectivegraduates",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted effectivegraduates",
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
    *     tags={"effectivegraduates"},
    *     path="api/v1/effectivegraduates/restore",
    *     description="Restore a specific effectivegraduates",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of effectivegraduates",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored effectivegraduates",
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
    *     tags={"effectivegraduates"},
    *     path="api/v1/effectivegraduates/forceDelete",
    *     description="Remove permanently effectivegraduates",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of effectivegraduates",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly effectivegraduates",
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
