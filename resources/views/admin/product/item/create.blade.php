@extends('layouts.app')

@section('page-title','產品品項新增')


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
                <li class="breadcrumb-item"active>產品管理</li>
                <li class="breadcrumb-item"><a href="{{ asset('/admin/product/item') }}">產品品項管理</a></li>
                <li class="breadcrumb-item active" aria-current="page">產品品項新增</li>
            </ol>
        </nav>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>產品品項新增</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ asset('/admin/product/item/store') }}" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="top" style="margin: 0 30px 0 0">是否置頂</label>
                                <input type="checkbox" class="form-check-input" id="top" name="top" value="1">
                                <label class="form-check-input" for="top"></label>
                                {{-- <select class="form-control" id="top" name="top">
                                    @foreach ($top as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select> --}}
                            </div>

                            <div class="form-group">
                                <label for="photo">產品主要圖片</label>
                                <input type="file" multiple class="form-control" id="photo" name="photo" required>
                            </div>

                            <div class="form-group">
                                <label for="product_type_id">產品種類</label>
                                <select class="form-control" id="product_type_id" name="product_type_id">
                                    @foreach ($type as $item)
                                        <option value="{{ $item->id }}">{{ $item-> type_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="product_name">產品名稱</label>
                                <input type="text" class="form-control" id="product_name" name="product_name">
                            </div>

                            <div class="form-group">
                                <label for="discript">產品介紹</label>
                                <textarea class="form-control" name="discript" id="discript" cols="30" rows="10"></textarea>
                                {{-- <input type="text" class="form-control" id="discript" name="discript"> --}}
                            </div>

                            <div class="form-group">
                                <label for="color">顏色</label>
                                {{-- <input type="color"class="form-control" id="color" name="color"> --}}
                                <select class="form-control" id="color" name="color">
                                    @foreach ( $color as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="size">尺寸</label><br>
                                <label><input type="checkbox"  name="size[]" value="XS" style="margin: 0 3px 0 0 ">XS</label>
                                <label><input type="checkbox"  name="size[]" value="S" style="margin: 0 3px 0 15px ">S</label>
                                <label><input type="checkbox"  name="size[]" value="M" style="margin: 0 3px 0 15px ">M</label>
                                <label><input type="checkbox"  name="size[]" value="L" style="margin: 0 3px 0 15px ">L</label>
                                <label><input type="checkbox"  name="size[]" value="XL" style="margin: 0 3px 0 15px ">XL</label>
                                <label><input type="checkbox"  name="size[]" value="XL" style="margin: 0 3px 0 15px ">XXL</label>
                                {{-- <select class="form-control" id="size" name="size">
                                    @foreach ($size as $item)
                                        <option value="{{ $item }}">{{ $item }}</option>
                                    @endforeach
                                </select> --}}
                            </div>

                            <div class="form-group">
                                <label for="price">價格</label>
                                <input type="text" class="form-control" id="price" name="price">
                            </div>


                            {{-- <div class="form-group">
                                <label for="photos">產品其他圖片</label>
                                <input type="file" multiple class="form-control" id="photos" name="photos[]">
                            </div> --}}


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
