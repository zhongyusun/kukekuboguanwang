<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogroll extends Model
{
    protected $fillable=['name','site','link','phone','email','qq'];
}
