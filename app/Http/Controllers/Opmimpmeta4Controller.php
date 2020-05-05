<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Opmimpmeta4Request;
use App\Repositories\Opmimpmeta4Repository;

class Opmimpmeta4Controller extends Controller
{
    protected $repository;
    public function __construct(Opmimpmeta4Repository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"opmimpmeta4"},
    *     path="api/v1/opmimpmeta4",
    *     description="Return a list with opmimpmeta4s",
    *     @OA\Response(
    *         response=200,
    *         description="A list with opmimpmeta4s",
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
    *     tags={"opmimpmeta4"},
    *     path="api/v1/opmimpmeta4",
    *     description="Create new opmimpmeta4",
    *     @OA\Response(
    *         response=200,
    *         description="A created opmimpmeta4",
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
    public function store(Opmimpmeta4Request $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"opmimpmeta4"},
    *     path="api/v1/opmimpmeta4",
    *     description="Return a specific opmimpmeta4",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmimpmeta4",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific opmimpmeta4",
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
    *     tags={"opmimpmeta4"},
    *     path="api/v1/opmimpmeta4",
    *     description="Update a specific opmimpmeta4",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmimpmeta4",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated opmimpmeta4",
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
    public function update(Opmimpmeta4Request $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"opmimpmeta4"},
    *     path="api/v1/opmimpmeta4",
    *     description="Remove a specific opmimpmeta4s",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmimpmeta4",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted opmimpmeta4",
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
    *     tags={"opmimpmeta4"},
    *     path="api/v1/opmimpmeta4/restore",
    *     description="Restore a specific opmimpmeta4",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmimpmeta4",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored opmimpmeta4",
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
    *     tags={"opmimpmeta4"},
    *     path="api/v1/opmimpmeta4/forceDelete",
    *     description="Remove permanently opmimpmeta4",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmimpmeta4",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly opmimpmeta4",
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
