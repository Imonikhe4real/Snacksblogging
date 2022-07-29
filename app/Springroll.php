<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Springroll extends Model
{
    protected $fillable = [
      'fullnames','email','snacks','phone','comment'
    ];
}
