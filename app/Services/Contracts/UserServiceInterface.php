<?php

namespace App\Services\Contracts;

use App\Services\Support\BaseContracts\{
    IndexInterface as Index,
    StoreInterface as Store,
    ShowInterface as Show,
    UpdateInterface as Update,
    DestroyInterface as Destroy,
    SearchInterface as Search
};

interface UserServiceInterface extends Index, Store, Show, Update, Destroy, Search
{
    /**
     * Here you insert custom functions.
     */
}
