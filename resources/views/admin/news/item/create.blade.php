@extends('layouts.app')

@section('page-title','最新消息新增')


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
                <li class="breadcrumb-item"active>最新消息管理</li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/news/item') }}">最新消息品項管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">最新消息種類新增</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>最新消息新增</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ asset('/admin/news/item/store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="news_type_id">最新消息種類</label>
                                <select class="form-control" id="news_type_id" name="news_type_id" required>
                                    @foreach ($type as $item)
                                        <option value="{{ $item->id }}">{{ $item->news_type_name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label for="title">標題</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="photo">圖片</label>
                                <input type="file" class="form-control" id="photo" name="photo">
                            </div>

                            <div class="form-group">
                                <label for="content">內容</label>
                                <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">新增</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')

@endsection
