<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\OpmpmprRequest;
use App\Repositories\OpmpmprRepository;

class OpmpmprController extends Controller
{
    protected $repository;
    public function __construct(OpmpmprRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"opmpmpr"},
    *     path="api/v1/opmpmpr",
    *     description="Return a list with opmpmprs",
    *     @OA\Response(
    *         response=200,
    *         description="A list with opmpmprs",
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
    *     tags={"opmpmpr"},
    *     path="api/v1/opmpmpr",
    *     description="Create new opmpmpr",
    *     @OA\Response(
    *         response=200,
    *         description="A created opmpmpr",
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
    public function store(OpmpmprRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"opmpmpr"},
    *     path="api/v1/opmpmpr",
    *     description="Return a specific opmpmpr",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmpmpr",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific opmpmpr",
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
    *     tags={"opmpmpr"},
    *     path="api/v1/opmpmpr",
    *     description="Update a specific opmpmpr",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmpmpr",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated opmpmpr",
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
    public function update(OpmpmprRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"opmpmpr"},
    *     path="api/v1/opmpmpr",
    *     description="Remove a specific opmpmprs",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmpmpr",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted opmpmpr",
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
    *     tags={"opmpmpr"},
    *     path="api/v1/opmpmpr/restore",
    *     description="Restore a specific opmpmpr",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmpmpr",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored opmpmpr",
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
    *     tags={"opmpmpr"},
    *     path="api/v1/opmpmpr/forceDelete",
    *     description="Remove permanently opmpmpr",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of opmpmpr",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly opmpmpr",
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
