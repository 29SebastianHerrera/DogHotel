<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    protected $fillable=['owner','dog','dog2','description'];
}