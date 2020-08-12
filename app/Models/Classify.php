<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classify extends Model
{
    protected $fillable = ['title','name','keywords','description','introduce','pic'];

    public function product(){
        return $this->hasMany(Classify::class);
    }
}
