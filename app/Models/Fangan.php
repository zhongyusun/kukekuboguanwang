<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fangan extends Model
{
    protected $fillable=['name','title','keywords','pic','fanganlist_id','content','description'];

    public function fanganlist(){
        return $this->belongsTo(Fanganlist::class);
    }
}
