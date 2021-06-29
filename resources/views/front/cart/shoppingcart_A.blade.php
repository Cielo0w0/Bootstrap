@extends('layouts.layout')

@section('title', '購物車1')

@section('css')
<link rel="stylesheet" href="{{asset('/css/shoppingcart_A.css')}}">
@endsection

@section('step')
<!-- 順序 -->
<div class="order d-flex mx-auto text-center"
    style="padding: 24px 0;border-width:  0 0 1px 0 ; border-style: solid; border-color: #e5e7eb;">
    <!-- 第一步 -->
    <div class="w-25 active d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color: rgb(16,185,129);border-radius: 60%;font-size: 1.125rem;line-height: 40px;color: white;">
            1
        </div>
        <span style="margin-top: 8px;">確認購物車</span>
    </div>
    <!-- 第二步 -->
    <div class="w-25 line-a line-b d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color: white;border-radius: 60%;font-size: 1.125rem;line-height: 40px;color: rgb(75,85,99);">
            2
        </div>
        <span style="margin-top: 8px;">付款與運送方式</span>
    </div>

    <!-- 第三步 -->
    <div class="w-25 line-a d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color: white;border-radius: 60%;font-size: 1.125rem;line-height: 40px;color: rgb(75,85,99);">
            3
        </div>
        <span style="margin-top: 8px;">填寫資料</span>
    </div>
    <!-- 第四步 -->
    <div class="w-25  d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color: white;border-radius: 60%;font-size: 1.125rem;line-height: 40px;color: rgb(75,85,99);">
            4
        </div>
        <span style="margin-top: 8px;">完成訂購</span>
    </div>
</div>
@endsection

@section('content')
<!-- 訂單明細-->
<!-- border-top-width: 1px; -->
<div class="list">
    <h2 style="font-size: 1.5rem; line-height: 2rem; color: #374151;margin: 20px 0 48px 0 ;">訂單明細</h2>

    @foreach ( $cartProducts as $product)
    <div id="product" class="item-1 d-flex justify-content-between"
        style="padding-bottom:24px ;margin-bottom: 24px;border-width:  0 0 1px 0 ; border-style: solid; border-color: #e5e7eb;">
        <!-- 左邊資訊 -->
        <div class="d-flex align-items-center ">
            <img src="{{$product->attributes->photo}}" class="" style="width: 60px; height: 60px; border-radius: 50%;">

            <div class="d-flex flex-column align-items-start justify-content-center " style="margin-left: 12px;">
                <span class="" style="font-weight: 500;">{{$product->name}}</span>
                {{-- <span class="" style="font-size: .75rem; line-height: 1rem;font-weight: 300;color: rgba(156,163,175);">#41551</span> --}}
            </div>
        </div>
        <!-- 右邊資訊 -->
        <div class="d-flex ">
            <!-- 數量 -->
            <div class="d-flex justify-content-center align-items-center">
                <div class="quantity" style="padding-right: 32px;">
                    <button type="button" class="btn minus-btn" style="padding:0">-</button>
                    <input type="number" value="{{$product->quantity}}" data-price="{{$product->price}}"
                        data-id="{{$product->id}}" class="qty-input"
                        style="width: 2rem;margin:0 .5rem; font-size: .875rem; line-height: 1.25rem; height: 1.5rem;border-width: 1px;border-radius: .25rem; background-color:rgb(243,244,246);border-color: #e5e7eb;text-align:center">
                    <button type="button" class="btn  plus-btn" style="padding:0">+</button>
                </div>
                <div class="price ml-1" data-price="{{$product->price}}"
                    style="font-size: .75rem; line-height: 1rem;font-weight: 500; width: 31px;margin-right: 39px;">$ {{number_format($product->price * $product->quantity)}}
                </div>
            </div>
        </div>
    </div>
    @endforeach



    <!-- 總結帳 -->
    <div class="count d-flex justify-content-end flex-column align-items-end"
        style="margin-top: 24px;border-width: 0px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
        <div class="d-flex justify-content-between align-items-center w-25">
            <div class=""
                style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">
                數量:</div>
            <div class="total-number"
                style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">3
            </div>
        </div>
        <div class="d-flex justify-content-between align-items-center w-25">
            <div class=""
                style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">
                小計:</div>
            <div class="amount"
                style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
                $24.90</div>
        </div>
        <div class="d-flex justify-content-between align-items-center w-25">
            <div class=""
                style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">
                運費:</div>
            <div class="shipping-fee"
                style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
                $60</div>
        </div>
        <div class="d-flex justify-content-between align-items-center w-25">
            <div class=""
                style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">
                總計:</div>
            <div class="total-amount"
                style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
                $24.90</div>
        </div>
    </div>
    <!-- 返回&下一步 -->
    <div class="next d-flex justify-content-between flex-row align-items-center"
        style="padding-top:24px ;margin-top: 24px;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
        <div class="d-flex align-items-center ">
            <i class="fa fa-arrow-left" style="padding-right: .5rem;"></i>
            <a herf="{{asset('/product')}}" class="text-md font-medium text-black-400 ">返回購物</a>
        </div>
        <a href="{{ asset('/cart/cartB') }}">
            <button type="button" class="btn btn-primary btn-lg"
                style="padding:0 48px;height: 3rem;border-radius: .25rem;background-color: rgb(59,130,246);">下一步</button>
        </a>
    </div>
</div>
@endsection

@section('js')
<script>
    function updateQty(element,number){
        var qtyArea = element.parentElement;
        var input = qtyArea.querySelector('input');
        var qty = Number(input.value);
        var newQty =  qty + number;


        // 送資料到購物車
        var formData = new FormData();
        formData.append('_token','{{ csrf_token() }}');
        formData.append('productId',input.getAttribute('data-id'));
        formData.append('newQty',newQty);

        fetch('/cart/update',{
            'method':'post',
            'body':formData
        }).then(function(response){
            return response.text();
        }).then(function(result){
            if(result=="success"){
                if (newQty < 1) {
                    input.value=1
                }else{
                    input.value=newQty
                }
                var price =  qtyArea.nextElementSibling;
                price.innerText= '$'+(price.getAttribute('data-price') * input.value).toLocaleString();
                updateShoppingCart()
            }
        })
    }



    function updateShoppingCart(params){
        // var totalQty = document.querySelector('total-number')
        // var subTotal = document.querySelector('amount')
        // var shipping = document.querySelector('shipping-fee')
        // var total = document.querySelector('total-amount')

        var totalQty = 0;
        var subTotal = 0;
        var shipping = 0;
        var total = 0;

        var inputs = document.querySelectorAll('.qty-input');
        inputs.forEach(function(input){
            totalQty += Number(input.value);
            subTotal += Number(input.value) * input.getAttribute('data-price');
        })
        document.querySelector('.total-number').innerText = totalQty;
        document.querySelector('.amount').innerText = '$'+subTotal.toLocaleString();

        if (subTotal>1000) {
            shipping = 0;
        } else {
            shipping = 60;
        }
        document.querySelector('.shipping-fee').innerText = shipping;

        total=subTotal+shipping;
        document.querySelector('.total-amount').innerText =  total.toLocaleString();

    }


    var plusBtns = document.querySelectorAll('.plus-btn')
    plusBtns.forEach(function(plusBtn){
        plusBtn.addEventListener('click',function(){
            updateQty(this,1)
        });
    });

    var minusBtns = document.querySelectorAll('.minus-btn')
    minusBtns.forEach(function(minusBtn){
        minusBtn.addEventListener('click',function(){
            updateQty(this,-1)
        });
    });

    window.addEventListener('load',function(){
        updateShoppingCart()
    });


    // // 送資料去購物車
    // var formData = new FormData();
    // formData.append('_token','{{ csrf_token() }}');
    // formData.append('productId',input.getAttribute('data-id'));
    // formData.append('newQty',newQty);

    // fetch('/cart/update',{
    //     'method':'post',
    //     'body':formData
    // }).then(function(response){
    //     return response.text();
    // }).then(function(result){
    //   if(result=='sucess'){
    //     if (newQty<1) {
    //         input.value = 1;
    //     } else {
    //         input.value = newQty;
    //     }
    //     var price = qtyArea.nextElementiSidling;
    //     price.innerText = '$'+(price.getAttribute('data-price')*input)
    //   }
    // })

</script>
@endsection
