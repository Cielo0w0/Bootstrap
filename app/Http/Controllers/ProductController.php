<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


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
        Product::create($request->all());

        if ($request->hasFile('img')) {
            $path = FileController::imageUpload($request->file('img'), 'product');
        }

        return redirect('/admin/product/item')->with('message', '新增產品成功!');
    }


    public function edit($id)
    {
        $record = Product::find($id);
        $type = ProductType::get();

        $color = Product::COLOR;
        $size = Product::SIZE;
        $top = Product::TOP;

        return view($this->edit, compact('record', 'type', 'color', 'size', 'top'));
    }




    public function update(Request $request, $id)
    {

        $old_record = Product::find($id);

        if ($request->hasFile('img')) {
            // 刪除舊照片
            File::delete(public_path(). $old_record->img);

            $file = $request->file('img');
            if (!is_dir('upload/')) {
                mkdir('upload/');
            }
            $extenstion = $request->img->getClientOriginalExtension();
            $filename = md5(uniqid(rand())) . '.' . $extenstion;
            $path = '/upload/' . $filename;
            move_uploaded_file($file, public_path() . $path);

            $old_record->img = $path;
        }

        $old_record->product_type_id = $request->product_type_id;
        $old_record->product_name = $request->product_name;
        $old_record->discript = $request->discript;
        $old_record->color = $request->color;
        $old_record->color = $request->color;
        $old_record->size = $request->size;
        $old_record->price = $request->price;
        $old_record->top = $request->top;
        $old_record->save();

        return redirect('/admin/product/item')->with('message', '編輯最新消息成功!');
    }


    public function delete(Request $request,$id){

        $old_record = Product::find($id);
        $old_record->delete();
        return redirect('/admin/product/item')->with('message','刪除最新消息成功!');
    }

}
