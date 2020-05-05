<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\InactiveRequest;
use App\Repositories\InactiveRepository;

class InactiveController extends Controller
{
    protected $repository;
    public function __construct(InactiveRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"inactive"},
    *     path="api/v1/inactive",
    *     description="Return a list with inactives",
    *     @OA\Response(
    *         response=200,
    *         description="A list with inactives",
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
    *     tags={"inactive"},
    *     path="api/v1/inactive",
    *     description="Create new inactive",
    *     @OA\Response(
    *         response=200,
    *         description="A created inactive",
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
    public function store(InactiveRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"inactive"},
    *     path="api/v1/inactive",
    *     description="Return a specific inactive",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inactive",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific inactive",
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
    *     tags={"inactive"},
    *     path="api/v1/inactive",
    *     description="Update a specific inactive",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inactive",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated inactive",
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
    public function update(InactiveRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"inactive"},
    *     path="api/v1/inactive",
    *     description="Remove a specific inactives",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inactive",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted inactive",
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
    *     tags={"inactive"},
    *     path="api/v1/inactive/restore",
    *     description="Restore a specific inactive",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inactive",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored inactive",
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
    *     tags={"inactive"},
    *     path="api/v1/inactive/forceDelete",
    *     description="Remove permanently inactive",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inactive",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly inactive",
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
