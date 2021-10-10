<?php

namespace App\Http\Controllers;

use App\Services\Contracts\UserServiceInterface;
use App\Http\Requests\User\{
    StoreRequest,
    ShowRequest,
    UpdateRequest,
    DestroyRequest,
    SearchRequest
};

class UserController extends Controller
{
    /**
     * The service instance.
     *
     * @var \App\Services\Contracts\UserServiceInterface
     */
    protected $service;

    /**
     * Create the controller instance and resolve its service.
     * 
     * @param \App\Services\Contracts\UserServiceInterface $service
     */
    public function __construct(UserServiceInterface $service)
    {
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->service->index();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\User\StoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $validatedRequest = $request->validated();
        return $this->service->store($validatedRequest);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Requests\User\ShowRequest  $request
     * @param  int|string  $id
     * @return \Illuminate\Http\Response
     */
    public function show(ShowRequest $request, $id)
    {
        return $this->service->show($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\User\UpdateRequest  $request
     * @param  int|string  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, $id)
    {
        $validatedRequest = $request->validated();
        return $this->service->update($id, $validatedRequest);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Requests\User\DestroyRequest  $request
     * @param  int|string $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DestroyRequest $request, $id)
    {
        return $this->service->destroy($id);
    }

    /**
     * Search for specific resources in the database.
     *
     * @param  \App\Http\Requests\User\SearchRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function search(SearchRequest $request)
    {
        $validatedRequest = $request->validated();
        return $this->service->search($validatedRequest);
    }
}
