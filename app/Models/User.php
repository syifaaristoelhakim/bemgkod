<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements AuthenticatableContract
{
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
=======
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    //
}
>>>>>>> 93ec40fb9ce0bf162a9eda8c756b06cdd03c2c9a
