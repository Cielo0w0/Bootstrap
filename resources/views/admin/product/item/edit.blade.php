@extends('layouts.app')

@section('page-title','產品品項編輯')


@section('css')
<style>
    .card-header h2 {
        margin-bottom: 0
    }

    .del-img-btn {
        position: absolute;
        right: 10px;
        top: -9px;
        width: 20px;
        height: 20px;
        background-color: rgb(252, 76, 76);
        color: white;
        text-align: center;
        font-weight: 600;
        line-height: 22px;
        border-radius: 50%;
        cursor: pointer;
    }
</style>
@endsection

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ asset('admin/home') }}">Home</a></li>
            <li class="breadcrumb-item" active>產品管理</li>
            <li class="breadcrumb-item"><a href="{{ asset('/admin/product/item') }}">產品品項管理</a></li>
            <li class="breadcrumb-item active" aria-current="page">產品品項編輯</li>
        </ol>
    </nav>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>產品品項編輯</h2>
                </div>
                <div class="card-body">
                    <form action="{{ asset('/admin/product/item/update') }}/{{ $record->id }}" method="post"
                        enctype="multipart/form-data">
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
                            <label for="sort">排序</label>
                            <input type="text" class="form-control" id="sort" name="sort"
                                value="{{ $record->sort}}">
                            <small id="" class="form-text text-muted">數字越大，產品排序越前</small>
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

                        <div class="form-group row">
                            <label class="col-12" for="">產品其他圖片</label>
                            @foreach ($record->photos as $photo)
                            <div class="col-md-3">
                                {{-- 點選到圖片刪除按鈕時，將該圖片的ID記錄下來，傳到後端 --}}
                                {{-- 後端根據ID找到該筆資料，進行刪除 --}}
                                <div data-id="{{ $photo->id }}" class="del-img-btn">x</div>
                                <img class="w-100" src="{{ $photo->photo }}" alt="">
                            </div>
                            @endforeach
                        </div>

                        <div class="form-group">
                            <label for="photos">新增產品其他圖片</label>
                            <input type="file" class="form-control" id="photos" name="photos[]" multiple>
                        </div>


                        <hr>

                        <div class="form-group">
                            <label for="product_type_id">產品種類</label>
                            <select class="form-control" id="product_type_id" name="product_type_id" required>
                                @foreach ($type as $item)
                                <option @if($item->id === $record->type->id ) selected @endif
                                    value="{{ $item->id }}">{{ $item->type_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_name">產品名稱</label>
                            <input type="text" class="form-control" id="product_name" name="product_name"
                                value="{{ $record->product_name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="discript">產品介紹</label>
                            <textarea class="form-control" name="discript" id="discript" cols="30"
                                rows="10" required>{{ $record->discript }}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="color">顏色</label>
                            <select class="form-control" id="color" name="color">
                                @foreach ( $color as $item)
                                <option @if ($record->color ==$item) selected @endif value="{{ $item }}">{{ $item }}
                                </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="size">尺寸</label><br>
                            <label><input type="checkbox" name="size[]" value="XS" style="margin: 0 3px 0 0 ">XS</label>
                            <label><input type="checkbox" name="size[]" value="S"
                                    style="margin: 0 3px 0 15px ">S</label>
                            <label><input type="checkbox" name="size[]" value="M"
                                    style="margin: 0 3px 0 15px ">M</label>
                            <label><input type="checkbox" name="size[]" value="L"
                                    style="margin: 0 3px 0 15px ">L</label>
                            <label><input type="checkbox" name="size[]" value="XL"
                                    style="margin: 0 3px 0 15px ">XL</label>
                            <label><input type="checkbox" name="size[]" value="XL"
                                    style="margin: 0 3px 0 15px ">XXL</label>
                        </div>

                        <div class="form-group">
                            <label for="price">價格</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value="{{ $record->price }}" required>
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
<script>
    // js
    var del_btns = document.querySelectorAll('.del-img-btn');
    del_btns.forEach(function(delbtn){
        delbtn.addEventListener('click',function(){
            var id = this.getAttribute('data-id');
            var parent_element = this.parentElement;

            var formdata = new FormData();
            formdata.append('_token','{{  csrf_token()  }}');
            formdata.append('id',id);

            var yes = confirm('是否確認刪除此圖片?')
            if (yes) {
                fetch('/admin/product/item/deleteImage',{
                    'method' : 'POST',
                    'body':formdata
                })
                .then(function(response){
                    return response.text();
                })
                .then(function(result){
                    if (result=='success') {
                        alert('刪除成功!')
                        parent_element.remove();
                    }
                });
            }
        });
    });


</script>
@endsection
