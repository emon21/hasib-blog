<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Animal extends Model
{
    use HasFactory;

    public function bodyParts()
    {
        return $this->hasMany('App\Models\BodyPart');
    }
}
