<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $fillable = [
      'fullnames','email','snacks','phone','comment'
    ];
}
