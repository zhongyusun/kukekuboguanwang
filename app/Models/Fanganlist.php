<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fanganlist extends Model
{
    protected $fillable=['title','name','keywords','description'];

    public function fangan(){
        return $this->hasMany(Fangan::class);
    }
}
