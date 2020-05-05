<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PmcmRequest;
use App\Repositories\PmcmRepository;

class PmcmController extends Controller
{
    protected $repository;
    public function __construct(PmcmRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"pmcm"},
    *     path="api/v1/pmcm",
    *     description="Return a list with pmcms",
    *     @OA\Response(
    *         response=200,
    *         description="A list with pmcms",
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
    *     tags={"pmcm"},
    *     path="api/v1/pmcm",
    *     description="Create new pmcm",
    *     @OA\Response(
    *         response=200,
    *         description="A created pmcm",
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
    public function store(PmcmRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"pmcm"},
    *     path="api/v1/pmcm",
    *     description="Return a specific pmcm",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of pmcm",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific pmcm",
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
    *     tags={"pmcm"},
    *     path="api/v1/pmcm",
    *     description="Update a specific pmcm",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of pmcm",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated pmcm",
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
    public function update(PmcmRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"pmcm"},
    *     path="api/v1/pmcm",
    *     description="Remove a specific pmcms",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of pmcm",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted pmcm",
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
    *     tags={"pmcm"},
    *     path="api/v1/pmcm/restore",
    *     description="Restore a specific pmcm",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of pmcm",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored pmcm",
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
    *     tags={"pmcm"},
    *     path="api/v1/pmcm/forceDelete",
    *     description="Remove permanently pmcm",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of pmcm",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly pmcm",
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
