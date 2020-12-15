<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    public function categories(){
      return $this->belongsToMany('App\Models\Category');
    }

    public function orders(){
      return $this->belongsToMany('App\Models\Order');
    }
}
