<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ActivedependentsRequest;
use App\Repositories\ActivedependentsRepository;

class ActivedependentsController extends Controller
{
    protected $repository;
    public function __construct(ActivedependentsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"activedependents"},
    *     path="api/v1/activedependents",
    *     description="Return a list with activedependents",
    *     @OA\Response(
    *         response=200,
    *         description="A list with activedependents",
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
    *     tags={"activedependents"},
    *     path="api/v1/activedependents",
    *     description="Create new activedependents",
    *     @OA\Response(
    *         response=200,
    *         description="A created activedependents",
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
    public function store(ActivedependentsRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"activedependents"},
    *     path="api/v1/activedependents",
    *     description="Return a specific activedependents",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of activedependents",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific activedependents",
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
    *     tags={"activedependents"},
    *     path="api/v1/activedependents",
    *     description="Update a specific activedependents",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of activedependents",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated activedependents",
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
    public function update(ActivedependentsRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"activedependents"},
    *     path="api/v1/activedependents",
    *     description="Remove a specific activedependents",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of activedependents",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted activedependents",
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
    *     tags={"activedependents"},
    *     path="api/v1/activedependents/restore",
    *     description="Restore a specific activedependents",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of activedependents",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored activedependents",
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
    *     tags={"activedependents"},
    *     path="api/v1/activedependents/forceDelete",
    *     description="Remove permanently activedependents",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of activedependents",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly activedependents",
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
