<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function __construct()
    {
        $this->index = 'admin.product.item.index';
        $this->create = 'admin.product.item.create';
        $this->edit = 'admin.product.item.edit';
        $this->show = 'admin.product.item.show';
    }


    public function index()
    {
        $lists = Product::get();
        return view('admin.product.item.index', compact('lists'));
    }


    public function create()
    {

        $type = ProductType::get();
        $color = Product::COLOR;
        $size = Product::SIZE;
        $top = Product::TOP;

        return view($this->create, compact('type', 'color', 'size', 'top'));
    }

    public function store(Request $request)
    {
        // 如果IMG有檔案
        if ($request->hasFile('img')) {
            $path = FileController::imageUpload($request->file('img'), 'product');
        }

        Product::create([
            'type'=>$request->type,
            'product_type_id'=>date("Y-m-d"),
            'title'=>$request->title,
            // 把圖片存的路徑寫入img : http://127.0.0.1:8000/upload/圖片檔案名稱.副檔名  (*上面註1)
            // ( 將圖片儲存的路徑存入資料庫 )
            'img'=>$path??'',
            'content'=>$request->content,

        ]);
    }
}
