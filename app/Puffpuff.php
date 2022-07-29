<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puffpuff extends Model
{
    protected $fillable = [
      'fullnames','email','snacks','phone','comment'
    ];
}
