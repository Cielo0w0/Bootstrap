@extends('layouts.app')

@section('page-title','產品品項管理')


@section('css')
<style>
    .card-header h2 {
        margin-bottom: 0
    }
</style>
@endsection

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('/admin/home')}}">首頁</a></li>
            <li class="breadcrumb-item active">產品管理</li>
            <li class="breadcrumb-item active" aria-current="page">產品品項管理</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>產品品項管理</h2>
                </div>

                <div class="card-body">

                    <a href="{{ asset('/admin/product/item/create') }}" class="btn btn-success mb-3">新增</a>

                    <table id="my-datatable" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>是否置頂</th>
                                <th>圖片</th>
                                <th>產品種類</th>
                                <th>產品名稱</th>
                                <th>產品介紹</th>
                                <th>顏色</th>
                                <th>尺寸</th>
                                <th>價格</th>
                                <th style="width:100px">操作</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($lists as $item )
                            <tr>
                                <td>
                                    @if ( $item->top === 1 )
                                    是
                                    @else
                                    否
                                    @endif
                                </td>
                                <td>{{ $item->photo??''}}</td>
                                <td>{{ $item->type->type_name??''}}</td>
                                <td>{{ $item->product_name }}</td>
                                <td>{{ $item->discript }}</td>
                                <td>{{ $item->color }}</td>
                                <?php
                                $sizes = json_decode($item->size);
                                ?>
                                <td>
                                    @foreach ( $sizes as $size)
                                    {{ $size }},
                                    @endforeach

                                    {{-- {{ $item->size }} --}}

                                    {{-- @foreach ( $item->size as $size)
                                    {{ $size }}
                                    @endforeach --}}
                                </td>
                                <td>{{ $item->price }}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm"
                                        href="{{ asset('/admin/product/item/edit') }}/{{$item->id}}">編輯</a>

                                    <form style="display: inline-block"
                                        action="{{ asset('/admin/product/item/delete') }}/{{$item->id}}" method="POST">
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
                                <th>是否置頂</th>
                                <th>圖片</th>
                                <th>產品種類</th>
                                <th>產品名稱</th>
                                <th>產品介紹</th>
                                <th>顏色</th>
                                <th>尺寸</th>
                                <th>價格</th>
                                <th>操作</th>
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
            $('#my-datatable').DataTable({
                'ordering':false,
            });
        });
</script>
@endsection
