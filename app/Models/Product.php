<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['classify_id','name','picture','trait','parameter','pics','pic','pic_list','title','keywords','description'];


    public function classify(){
        return $this->belongsTo(Classify::class);
    }
}
