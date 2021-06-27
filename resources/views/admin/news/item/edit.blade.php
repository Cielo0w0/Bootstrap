@extends('layouts.app')

@section('page-title','最新消息品項編輯')


@section('css')
    <style>
        .card-header h2{
            margin-bottom: 0
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ asset('admin/home') }}">Home</a></li>
                <li class="breadcrumb-item" active>最新消息管理</li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/news/item') }}">最新消息品項管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">最新消息品項編輯</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>最新消息品項編輯</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ asset('/admin/news/item/update') }}/{{ $record->id }}" method="POST"enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="news_type_id">分類</label>
                                <select class="form-control" id="news_type_id" name="news_type_id">
                                    @foreach ($type as $item)
                                        <option @if ($record->type ==$item) selected @endif value="{{ $item->id }}">{{ $item->news_type_name}}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="title">標題</label>
                                <input type="text" class="form-control" id="title" name="title"value="{{ $record->title }}">
                            </div>

                            <div class="form-group row">
                                <label class="col-12" for="">產品主要圖片</label>
                                <div class="col-md-3">
                                    <img class="w-100" src="{{ $record->photo }}" alt="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photo">修改產品主要圖片</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>

                            <hr>

                            <div class="form-group">
                                <label for="content">內容</label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="10" >{{ $record->content}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">編輯</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
