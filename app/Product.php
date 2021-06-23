<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    const COLOR=[
        'pink'=>'粉色',
        'purple'=>'紫色',
        'yellow'=>'黃色',
        'blue'=>'藍色',
    ];

    const SIZE=[
        'SM'=>'SM',
        'M'=>'M',
        'L'=>'L',
        'XL'=>'XL'
    ];

    const TOP=[
        0=>0,
        1=>1,
    ];

    protected $fillable = ['photo','product_type_id','product_name','discript','color','size','price','top'];

    public function type(){
        return $this->hasOne('App\ProductType','id','product_type_id');
    }
}
