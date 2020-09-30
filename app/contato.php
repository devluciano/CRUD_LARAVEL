<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contato extends Model
{
    protected $fillable = [
        'name', 'email','phone','genre'
    ];
}
