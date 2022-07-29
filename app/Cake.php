<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cake extends Model
{
    protected $fillable = [
       'fullnames','email','snacks','phone','comment'
    ];
}
