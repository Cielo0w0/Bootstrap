<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsType;

class NewsTypeController extends Controller
{
    function __construct()
    {
        $this->index ='admin.news.type.index';
        $this->create ='admin.news.type.create';
        $this->edit ='admin.news.type.edit';
        $this->show ='admin.news.type.show';

    }

    public function index(){

        $lists = NewsType::with('news')->get();

        return view($this->index, compact('lists'));
    }

    public function create(){
        return view($this->create);
    }

    public function store(Request $request){

        NewsType::create([
            'news_type_name' => $request -> news_type_name
        ]);

        return redirect('/admin/news/type')->with('message','新增最新消息種類成功!');
    }

    public function edit($id){
        $record =NewsType::find($id);

        return view($this->edit,compact('record'));
    }

    public function update(Request $request,$id){
        $old_record =NewsType::find($id);
        $old_record->news_type_name=$request->news_type_name;
        $old_record->save();

        return redirect('/admin/news/type')->with('message','編輯最新消息種類成功!');
    }

    public function delete(Request $request,$id){
        $old_record =NewsType::with('news')->find($id);

        if ( $old_record ->news->count()!=0) {
            return redirect('/admin/news/type')->with('message',
            '無法刪除該最新消息種類 !   該最新消息種類內還有'.$old_record->news->count().'筆最新消息品項，請先刪除');
        }elseif($old_record ->news->count()===0){
            $old_record->delete();
            return redirect('/admin/news/type')->with('message','刪除最新消息種類成功!');
        }

    }
}
