<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = ['news_type_id', 'publish_date', 'title', 'photo', 'content'];

    public function newstype()
    {
        // return $this->hasOne(NewsType::class,'news_type_id');
        return $this->hasOne('App\NewsType','id','news_type_id');
    }
}
