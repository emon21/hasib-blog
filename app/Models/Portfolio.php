<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $fillable =['category_id','portfolio_name','portfolio_description','portfolio_picture'];

    public function categoryrel()
    {
      return $this->Hasone('App\Models\Portfolio_Category','id','category_id');
    }
}
