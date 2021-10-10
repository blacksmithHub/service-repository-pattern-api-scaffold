<?php

namespace App\Repositories\Contracts;

use App\Repositories\Support\BaseContracts\{
    AllInterface as All,
    CreateInterface as Create,
    FindInterface as Find,
    UpdateInterface as Update,
    DeleteInterface as Delete,
    SearchInterface as Search
};

interface UserRepositoryInterface extends All, Create, Find, Update, Delete, Search
{
    /**
     * Here you insert custom functions.
     */
}
