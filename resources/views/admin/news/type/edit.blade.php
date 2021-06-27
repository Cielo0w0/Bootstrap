@extends('layouts.app')

@section('page-title','最新消息種類編輯')


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
                <li class="breadcrumb-item"><a href="{{ asset('/admin/news/type') }}">最新消息種類管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">最新消息種類新增</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>最新消息種類編輯</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ asset('/admin/news/type/update') }}/{{ $record->id }}" method="post">
                            @csrf

                            <div class="form-group">
                                <label for="news_type_name">最新消息種類名稱</label>
                                <input type="text" class="form-control" id="news_type_name" name="news_type_name" value="{{ $record->news_type_name }}">
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
