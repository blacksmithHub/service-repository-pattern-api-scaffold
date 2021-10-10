<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * Get the user record
     * 
     * @return App\Models\User
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
