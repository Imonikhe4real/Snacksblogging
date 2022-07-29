<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fishroll extends Model
{
    protected $fillable =  [
     'fullnames','email','snacks','phone','comment'
    ];
}
