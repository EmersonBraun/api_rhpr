<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminemailRequest;
use App\Repositories\AdminemailRepository;

class AdminemailController extends Controller
{
    protected $repository;
    public function __construct(AdminemailRepository $repository)
	{
        $this->repository = $repository;
    }

    /**
    * @OA\Get(
    *     tags={"adminemail"},
    *     path="api/v1/adminemail",
    *     description="Return a list with adminemails",
    *     @OA\Response(
    *         response=200,
    *         description="A list with adminemails",
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
    *     tags={"adminemail"},
    *     path="api/v1/adminemail",
    *     description="Create new adminemail",
    *     @OA\Response(
    *         response=200,
    *         description="A created adminemail",
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
    public function store(AdminemailRequest $request)
    {
        $response = $this->repository->create($request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Get(
    *     tags={"adminemail"},
    *     path="api/v1/adminemail",
    *     description="Return a specific adminemail",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminemail",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="A specific adminemail",
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
    *     tags={"adminemail"},
    *     path="api/v1/adminemail",
    *     description="Update a specific adminemail",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminemail",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Updated adminemail",
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
    public function update(AdminemailRequest $request, $id)
    {
        $response = $this->repository->findAndUpdate($id, $request->all());
        return response()->json($response->data, $response->status, $response->headers, $response->options);
    }

    /**
    * @OA\Delete(
    *     tags={"adminemail"},
    *     path="api/v1/adminemail",
    *     description="Remove a specific adminemails",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminemail",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Deleted adminemail",
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
    *     tags={"adminemail"},
    *     path="api/v1/adminemail/restore",
    *     description="Restore a specific adminemail",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminemail",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Restored adminemail",
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
    *     tags={"adminemail"},
    *     path="api/v1/adminemail/forceDelete",
    *     description="Remove permanently adminemail",
    *     @OA\Parameter(
    *         name="id",
    *         type="int",
    *         description="Number identification of adminemail",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Removed permantly adminemail",
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
