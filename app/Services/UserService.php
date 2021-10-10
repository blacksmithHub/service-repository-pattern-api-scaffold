<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Services\Contracts\UserServiceInterface;
use App\Http\Resources\{
    UserResource,
    UserResourceCollection
};

class UserService extends Service implements UserServiceInterface
{
    /**
     * Resource class of the service.
     * 
     * @var \App\Http\Resources\UserResource
     */
    protected $resourceClass = UserResource::class;

    /**
     * Collection class of the service.
     * 
     * @var \App\Http\Resources\UserResourceCollection
     */
    protected $collectionClass = UserResourceCollection::class;

    /**
     * Create the service instance and inject its repository.
     *
     * @param App\Repositories\Contracts\UserRepositoryInterface
     */
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
