<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function getClientImgAttribute($image)
    {
        if ($image == null) {
            return asset('storage/client/default.jpg');
        }
        // else{
        //             return asset($this->$image->std_picture);

        //         }
             //   return $this->location.$image;
                return asset('storage/client/'.$image);
    }
}
