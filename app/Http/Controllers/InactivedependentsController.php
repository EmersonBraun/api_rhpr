<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\InactivedependentsRequest;
use App\Repositories\InactivedependentsRepository;

class InactivedependentsController extends Controller
{
    protected $repository;
    public function __construct(InactivedependentsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"inactivedependents"},
    *     path="api/v1/inactivedependents",
    *     description="Return a list with inactivedependents",
    *     @OA\Response(
    *         response=200,
    *         description="A list with inactivedependents",
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
    *     tags={"inactivedependents"},
    *     path="api/v1/inactivedependents",
    *     description="Create new inactivedependents",
    *     @OA\Response(
    *         response=200,
    *         description="A created inactivedependents",
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
    public function store(InactivedependentsRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"inactivedependents"},
    *     path="api/v1/inactivedependents",
    *     description="Return a specific inactivedependents",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inactivedependents",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific inactivedependents",
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
    *     tags={"inactivedependents"},
    *     path="api/v1/inactivedependents",
    *     description="Update a specific inactivedependents",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inactivedependents",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated inactivedependents",
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
    public function update(InactivedependentsRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"inactivedependents"},
    *     path="api/v1/inactivedependents",
    *     description="Remove a specific inactivedependents",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inactivedependents",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted inactivedependents",
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
    *     tags={"inactivedependents"},
    *     path="api/v1/inactivedependents/restore",
    *     description="Restore a specific inactivedependents",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inactivedependents",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored inactivedependents",
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
    *     tags={"inactivedependents"},
    *     path="api/v1/inactivedependents/forceDelete",
    *     description="Remove permanently inactivedependents",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of inactivedependents",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly inactivedependents",
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
