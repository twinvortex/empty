<?php

namespace Vortex\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $table = 'users';
    protected $fillable = ['username', 'email', 'password', 'ip'];

}
