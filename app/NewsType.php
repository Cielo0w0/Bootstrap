<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsType extends Model
{
    protected $fillable = ['news_type_name'];

    public function news()
    {
        // return $this->hasMany(News::class);
        return $this->hasMany('App\News','news_type_id','id');
    }

}
