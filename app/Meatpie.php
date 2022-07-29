<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meatpie extends Model
{
    protected $fillable = [
       'fullnames','email','snacks','phone','comment'
    ];
}
