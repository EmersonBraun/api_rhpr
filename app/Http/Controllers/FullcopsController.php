<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\FullcopsRequest;
use App\Repositories\FullcopsRepository;

class FullcopsController extends Controller
{
    protected $repository;
    public function __construct(FullcopsRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"fullcops"},
    *     path="api/v1/fullcops",
    *     description="Return a list with fullcops",
    *     @OA\Response(
    *         response=200,
    *         description="A list with fullcops",
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
    *     tags={"fullcops"},
    *     path="api/v1/fullcops",
    *     description="Create new fullcops",
    *     @OA\Response(
    *         response=200,
    *         description="A created fullcops",
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
    public function store(FullcopsRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"fullcops"},
    *     path="api/v1/fullcops",
    *     description="Return a specific fullcops",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of fullcops",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific fullcops",
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
    *     tags={"fullcops"},
    *     path="api/v1/fullcops",
    *     description="Update a specific fullcops",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of fullcops",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated fullcops",
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
    public function update(FullcopsRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"fullcops"},
    *     path="api/v1/fullcops",
    *     description="Remove a specific fullcops",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of fullcops",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted fullcops",
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
    *     tags={"fullcops"},
    *     path="api/v1/fullcops/restore",
    *     description="Restore a specific fullcops",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of fullcops",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored fullcops",
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
    *     tags={"fullcops"},
    *     path="api/v1/fullcops/forceDelete",
    *     description="Remove permanently fullcops",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of fullcops",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly fullcops",
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
