<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Casecategory extends Model
{
    protected $fillable=['title','name','keywords','description','pic'];
    public function cases(){
        return $this->hasMany(Cases::class);
    }
}
