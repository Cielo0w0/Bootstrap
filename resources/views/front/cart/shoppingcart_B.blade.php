@extends('layouts.layout')

@section('title', '購物車2')

@section('css')
<link rel="stylesheet" href="{{asset('/css/shoppingcart_B.css')}}">
@endsection

@section('step')
<!-- 順序 -->
<div class="order d-flex mx-auto text-center" style="padding: 24px 0;">
    <!-- 第一步 -->
    <div class="w-25 active d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color: rgb(16,185,129);border-radius: 60%;font-size: 1.125rem;line-height: 40px;color: white;">
            1
        </div>
        <span style="margin-top: 8px;">確認購物車</span>
    </div>
    <!-- 第二步 -->
    <div class="w-25 line-ga d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color: rgb(16,185,129);border-radius: 60%;font-size: 1.125rem;line-height: 40px;color: white;">
            2
        </div>
        <span style="margin-top: 8px;">付款與運送方式</span>
    </div>

    <!-- 第三步 -->
    <div class="w-25 line-b line-a d-flex flex-column align-items-center justify-content-center mx-auto">
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
<!-- 付款方式-->
<form action="{{ asset('cart/cartB/check') }}" method="POST" class="payment" id="payment">
    @csrf
    <div class="list d-flex flex-column"
        style="padding-top:24px ;margin-top: 24px;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
        <!-- 付款方式:標題 -->
        <h2 style="font-size: 1.5rem; line-height: 2rem; color: #374151;">付款方式 </h2>
        <!-- 付款方式:選項 -->
        @php
        $payment = Session::get('payment');
        @endphp

        <div class="d-flex flex-column align-items-start justify-content-center">
            <!-- 方式一 -->
            <div class="d-flex align-items-center"
                style="padding-top: 1.25rem; padding-bottom: 1.25rem;margin: 0 0 0 1.5rem;">
                <input type="radio" class="form-radio" name="payment" value="Credit" @if ($payment=="Credit" ) checked
                    @endif required>
                <span class="d-flex " style="margin-left: .5rem;font-size: 1.25rem;  line-height: 1.75rem;"> 信用卡付款
                </span>
            </div>
            <!-- 方式二 -->
            <div class="d-flex align-items-center"
                style="padding: 1.25rem 0 0 ; padding-bottom: 1.25rem;border-width: 1px 0 1px 0;border-color: #e5e7eb;border-style: solid;margin: 0 0 0 1.5rem; width: calc(100% - 1.5rem);">
                <input type="radio" class="form-radio" name="payment" value="ATM" @if ($payment=="ATM" ) checked @endif
                    required>
                <span class="d-flex " style="margin-left: .5rem;font-size: 1.25rem;  line-height: 1.75rem;"> 網路 ATM
                </span>
            </div>
            <!-- 方式三 -->
            <div class="d-flex align-items-center"
                style="padding-top: 1.25rem; padding-bottom: 1.25rem;margin: 0 0 0 1.5rem;">
                <input type="radio" class="form-radio" name="payment" value="CVS" @if ($payment=="CVS" ) checked @endif
                    required>
                <span class="d-flex " style="margin-left: .5rem;font-size: 1.25rem;  line-height: 1.75rem;">超商代碼 </span>
            </div>
        </div>
    </div>

    <!-- 運送方式 -->
    <div class="list d-flex flex-column shipment"
        style="padding-top:24px ;margin-top: 24px;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
        <!-- 運送方式:標題 -->
        <h2 style="font-size: 1.5rem; line-height: 2rem; color: #374151;"> 運送方式 </h2>
        <!-- 運送方式:選項 -->
        @php
        $shipment = Session::get('shipment');
        @endphp

        <div class="d-flex flex-column align-items-start justify-content-center">
            <!-- 方式一 -->
            <div class="d-flex align-items-center"
                style="padding-top: 1.25rem; padding-bottom: 1.25rem;margin: 0 0 0 1.5rem;">
                <input type="radio" class="form-radio" name="shipment" value="Home" @if ($shipment=="Home" ) checked
                    @endif required>
                <span class="d-flex " style="margin-left: .5rem;font-size: 1.25rem;  line-height: 1.75rem;">黑貓宅配 </span>
            </div>
            <!-- 方式二 -->
            <div class="d-flex align-items-center"
                style="padding: 1.25rem 0 0 ; padding-bottom: 1.25rem;border-width: 1px 0 0px 0;border-color: #e5e7eb;border-style: solid;margin: 0 0 0 1.5rem; width: calc(100% - 1.5rem);">
                <input type="radio" class="form-radio" name="shipment" value="C2C" @if ($shipment=="C2C" ) checked
                    @endif required>
                <span class="d-flex " style="margin-left: .5rem;font-size: 1.25rem;  line-height: 1.75rem;">超商店到店
                </span>
            </div>
        </div>
    </div>
</form>

<!-- 總結帳 -->
<div class="count d-flex justify-content-end flex-column align-items-end"
    style="padding-top:24px ;margin-top: 24px;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
    <div class="d-flex justify-content-between align-items-center w-25">
        <span class=""
            style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">數量:</span>
        <span class=""
            style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">{{  $qty }}</span>
    </div>
    <div class="d-flex justify-content-between align-items-center w-25">
        <span class=""
            style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">小計:</span>
        <span class="" style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
            ${{ number_format($subTotal) }}</span>
    </div>
    <div class="d-flex justify-content-between align-items-center w-25">
        <span class=""
            style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">運費:</span>
        <span class="" style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
            ${{  $shippingFee }}</span>
    </div>
    <div class="d-flex justify-content-between align-items-center w-25">
        <span class=""
            style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">總計:</span>
        <span class="" style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
            ${{ number_format($total) }}</span>
    </div>
</div>
<!-- 上一步&下一步 -->
<div class="next d-flex justify-content-between flex-row align-items-center"
    style="padding-top:24px ;margin-top: 24px;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
    <!-- 上 -->
    <a href="{{ asset('/cart/cartA') }}">
        <button type="button" class="btn btn-primary btn-lg"
            style="padding:0 48px;height: 3rem;border-radius: .25rem;background-color: unset; color: rgb(59,130,246);border-width: 2px;border-style: solid;">
            上一步
        </button>
    </a>
    <!-- 下 -->
    <button type="button" class="btn btn-primary btn-lg" id="next"
        style="padding:0 48px;height: 3rem;border-radius: .25rem;border-width: 2px;background-color: rgb(59,130,246);">
        下一步
    </button>

</div>
@endsection

@section('js')
<script>
    document.querySelector('#next').addEventListener('click',function(){
        var paymentBtns = document.querySelector('input[name="payment"]:checked');
        var shipmentBtns = document.querySelector('input[name="shipment"]:checked');
        console.log(paymentBtns,shipmentBtns);
        if (paymentBtns&&shipmentBtns) {
            document.querySelector('#payment').submit();
        }else{
            alert('請先選擇付款方式')
        }

    });
</script>
@endsection
