@extends('layouts.app')

@section('page-title','最新消息管理 - 最新消息種類')


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
                <li class="breadcrumb-item"><a href="{{asset('/admin/home')}}">首頁</a></li>
                <li class="breadcrumb-item"active>最新消息管理</li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/news/type') }}">最新消息種類管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">最新消息種類新增</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>最新消息管理 - 最新消息種類</h2>
                    </div>


                    <div class="card-body">

                        <a href="{{ asset('/admin/news/type/create') }}" class="btn btn-success mb-3">新增</a>

                        <table id="my-datatable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>最新消息種類名稱</th>
                                    <th>最新消息總數</th>
                                    <th style="width:100px">操作</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($lists as $item )
                                    <tr>
                                        <td>{{ $item->news_type_name }}</td>
                                        <td>{{ $item->news->count() }}</td>
                                        <td>
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ asset('/admin/news/type/edit') }}/{{$item->id}}">編輯</a>

                                            <form style="display: inline-block"
                                                action="{{ asset('/admin/news/type/delete') }}/{{$item->id}}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm">刪除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>最新消息種類名稱</th>
                                    <th>最新消息總數</th>
                                    <th style="width:100px">操作</th>
                                </tr>
                            </tfoot>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#my-datatable').DataTable();
        });
    </script>
@endsection
