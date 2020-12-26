<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable =['title', 'description','image','short_description','upload_time','user_id','category_id'];
}
