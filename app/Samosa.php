<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Samosa extends Model
{
    protected $fillable = [
      'fullnames','email','snacks','phone','comment'
    ];
}
