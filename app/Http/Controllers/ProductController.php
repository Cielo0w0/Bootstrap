<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImg;
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
        $lists = Product::get()->sortByDesc('sort');
        return view('admin.product.item.index', compact('lists'));
    }




    public function create()
    {
        $type = ProductType::get();

        $color = Product::COLOR;
        // $top = Product::TOP;

        return view($this->create, compact('type', 'color'));
    }



    public function store(Request $request)
    {
        $requestData = $request->all();

        //單圖片
        if ($request->hasFile('photo')) {
            $requestData['photo'] = FileController::imageUpload($request->file('photo'));
        }


        $new_record = Product::create($requestData);



        // 多圖片
        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $item) {
                $path = FileController::imageUpload($item);

                ProductImg::create([
                    'photo' => $path,
                    'product_id' => $new_record->id,
                ]);
            }
        }

        return redirect('/admin/product/item')->with('message', '新增產品成功!');
    }


    public function edit($id)
    {
        $record = Product::with('photos')->find($id);
        $type = ProductType::get();

        $color = Product::COLOR;
        // $top = Product::TOP;

        return view($this->edit, compact('record', 'type', 'color'));
    }




    public function update(Request $request, $id)
    {

        $old_record = Product::with('photos')->find($id);
        $requestData = $request->all();

        // 單圖片
        if ($request->hasFile('photo')) {
            File::delete(public_path() . $old_record ->photo);
            $path = FileController::imageUpload($request->file('photo'));
            $requestData['photo'] = $path;
        }
        $old_record ->update($requestData);

        // 多圖片
         if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $file) {
                $path = FileController::imageUpload($file, 'product');

                ProductImg::create([
                    'product_id' => $old_record->id,
                    'photo' => $path,
                ]);
            }
        }
        // if ($request->hasFile('photo')) {
        //     // 刪除舊照片
        //     File::delete(public_path() . $old_record->photo);

        //     $file = $request->file('photo');
        //     if (!is_dir('upload/')) {
        //         mkdir('upload/');
        //     }
        //     $extenstion = $request->photo->getClientOriginalExtension();
        //     $filename = md5(uniqid(rand())) . '.' . $extenstion;
        //     $path = '/upload/' . $filename;
        //     move_uploaded_file($file, public_path() . $path);

        //     $old_record->photo = $path;
        // }

        // $old_record->product_type_id = $request->product_type_id;
        // $old_record->product_name = $request->product_name;
        // $old_record->discript = $request->discript;
        // $old_record->color = $request->color;
        // $old_record->color = $request->color;
        // $old_record->size = $request->size;
        // $old_record->price = $request->price;
        // $old_record->top = $request->top;
        // $old_record->sort = $request->sort;
        // $old_record->save();

        return redirect('/admin/product/item')->with('message', '編輯最新消息成功!');
    }






    // 這個是整筆刪除的時候，要把圖片檔案從資料庫刪除
    public function delete(Request $request, $id)
    {

        $old_record = Product::with('photos')->find($id);

        File::delete(public_path(). $old_record->photo);
        // 刪除其他照片
        foreach( $old_record->photos as $photo){
            // 刪除其他圖片的檔案
            File::delete(public_path().$photo->photo);
            // 刪除其他圖片的資料
            $photo->delete();
        }

        $old_record->delete();
        return redirect('/admin/product/item')->with('message', '刪除最新消息成功!');
    }


    // 這個是 編輯時按叉叉 刪掉單一張照片
    public function deleteImage(Request $request)
    {
        $old_record = ProductImg::find($request->id);

        if (file_exists(public_path() . $old_record->photo)) {
            File::delete(public_path() . $old_record->photo);
        }

        $old_record->delete();
        
        return 'success';
    }
}
