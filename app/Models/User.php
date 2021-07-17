<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //テーブル名
    protected $table = 'Users';

    protected $fillable =
    [
        'id',
        'username',
        'mail',
        'password'
    ];

}
