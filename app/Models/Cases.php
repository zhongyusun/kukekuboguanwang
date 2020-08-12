<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cases extends Model{
        protected $fillable=['casecategory_id','name','title','keywords','pic','pic_list','content','description'];

        public function casecategory(){
            return $this->belongsTo(Casecategory::class);
        }
}
