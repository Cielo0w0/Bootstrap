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

    // const TOP=[
    //     0=>0,
    //     1=>1,
    // ];

    protected $fillable = ['photo','product_type_id','product_name','discript','color','size','price','top','sort'];

    public function type(){
        return $this->hasOne('App\ProductType','id','product_type_id');
    }

    // 只要有資料透過 Model 進行存取(新增/修改/使用)

    public function setSizeAttribute($vaule){
        $this->attributes['size'] = json_encode($vaule);
    }


    // public function getSizeAttribute($vaule){
    //     return $this->attributes['size'] = json_decode($vaule);
    // }
}
