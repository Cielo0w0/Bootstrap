@extends('layouts.layout')

@section('title', '購物車3')

@section('css')
<link rel="stylesheet" href="{{asset('/css/shoppingcart_C.css')}}">
@endsection

@section('step')
<!-- 順序 -->
<div class="order d-flex mx-auto text-center" style="padding: 24px 0;">
    <!-- 第一步 -->
    <div class="w-25 active line-lg d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color: rgb(16,185,129);border-radius: 60%;font-size: 1.125rem;line-height: 40px;color: white;">
            1
        </div>
        <span style="margin-top: 8px;">確認購物車</span>
    </div>
    <!-- 第二步 -->
    <div class="w-25 line-lg d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color: rgb(16,185,129);border-radius: 60%;font-size: 1.125rem;line-height: 40px;color: white;">
            2
        </div>
        <span style="margin-top: 8px;">付款與運送方式</span>
    </div>

    <!-- 第三步 -->
    <div class="w-25 line-ga line-a d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color:rgb(16,185,129);border-radius: 60%;font-size: 1.125rem;line-height: 40px;color: white;">
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
<!-- 寄送資料 -->
<div class="list d-flex flex-column"
    style="padding-top:20px ;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
    <!-- 寄送資料:標題 -->
    <h2 style="font-size: 1.5rem; line-height: 2rem; color: #374151;">寄送資料</h2>
    <form action="{{ asset('/cart/cartC/check') }}" method="POST">
        @csrf
        <!-- 姓名 -->
        <div class="d-flex flex-column w-100">
            <label class="" for="name" style="padding:4px;font-size: 1.25rem; line-height: 1.75rem;margin: 0;">
                姓名</label>
            <input class="" id="name" name="name" type="text" required="" placeholder="王小明" aria-label="Name"
                style="padding:8px 20px;border-width: 2px; border-color: rgb(229,231,235); border-radius: .25rem;background-color: unset;border-style: solid;">
        </div>
        <!-- 電話 -->
        <div class="d-flex flex-column w-100" style="margin-top: 8px;">
            <label class="" for="phone" style="padding:4px;font-size: 1.25rem; line-height: 1.75rem;margin: 0;"> 電話
            </label>
            <input class="" id="phone" name="phone" type="text" required="" placeholder="0912345678"
                aria-label="phone"
                style="padding:8px 20px;border-width: 2px; border-color: rgb(229,231,235); border-radius: .25rem;background-color: unset;border-style: solid;">
        </div>
        <!-- 信箱 -->
        <div class="d-flex flex-column w-100" style="margin-top: 8px;">
            <label class="" for="email" style="padding:4px;font-size: 1.25rem; line-height: 1.75rem;margin: 0;">
                Email
            </label>
            <input class="" id="email" name="email" type="email" required="" placeholder="abc123@gmail.com"
                aria-label="Email"
                style="padding:8px 20px;border-width: 2px; border-color: rgb(229,231,235); border-radius: .25rem;background-color: unset;border-style: solid;">
        </div>
        <!-- 地址 -->
        <div class="d-flex flex-row w-100" style="margin-top: 8px;">
            <label class=" " for="city" style="padding:4px;font-size: 1.25rem; line-height: 1.75rem;margin: 0;"> 地址
            </label>
        </div>
        <div class="input-group city-selector-set">
            <div class=" " style="padding-right:4px ;margin-top:8px ; width:33.33%">
                <!-- 縣市選單 -->
                <select class="county form-control"
                    style="padding:8px 20px;border-width: 2px; border-color: rgb(229,231,235); border-radius: .25rem;background-color: unset;width: 100%;border-style: solid;"></select>
                {{-- <input class=" " id="city" name="city" type="text" required="" placeholder="城市" aria-label="Address"
                style="padding:8px 20px;border-width: 2px; border-color: rgb(229,231,235); border-radius: .25rem;background-color: unset;width: 100%;border-style: solid;"> --}}
            </div>
            <div class="" style="padding-left:4px ; margin-top:8px ; width:33.33%">
                <!-- 區域選單 -->
                <select class="district form-control"
                    style="padding:8px 20px;border-width: 2px; border-color: rgb(229,231,235); border-radius: .25rem;background-color: unset;width: 100%;border-style: solid;"></select>
                {{-- <input class=" " id="zip" name="zip" type="text" required="" placeholder="郵遞區號"  aria-label="Address"
                style="padding:8px 20px;border-width: 2px; border-color: rgb(229,231,235); border-radius: .25rem;background-color: unset;width: 100%;border-style: solid;"> --}}
            </div>
            <div class="" style="padding-left:4px ; margin-top:8px ; width:33.33%">
                <!-- 郵遞區號欄位 (建議加入 readonly 屬性，防止修改) -->
                <input class="zipcode form-control" name="zipcode"type="text" size="3" readonly placeholder="郵遞區號">
            </div>
            <div class="w-100" style="margin-top:8px ;">
                <input class="" id="address" name="address" type="text" required="" placeholder="地址" aria-label="Email"
                    style="padding:8px 20px;border-width: 2px; border-color: rgb(229,231,235); border-radius: .25rem;background-color: unset;width: 100%;border-style: solid;">
            </div>
        </div>


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
                <span class=""
                    style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
                    ${{ number_format($subTotal) }}</span>
            </div>
            <div class="d-flex justify-content-between align-items-center w-25">
                <span class=""
                    style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">運費:</span>
                <span class=""
                    style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
                    ${{  $shippingFee }}</span>
            </div>
            <div class="d-flex justify-content-between align-items-center w-25">
                <span class=""
                    style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">總計:</span>
                <span class=""
                    style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
                    ${{ number_format($total) }}</span>
            </div>
        </div>
        <!-- 上一步&下一步 -->
        <div class="next d-flex justify-content-between flex-row align-items-center"
            style="padding-top:24px ;margin-top: 24px;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
            <!-- 上 -->
            <a href="{{ asset('/cart/cartB') }}">
                <button type="button" class="btn btn-primary btn-lg"
                    style="padding:0 48px;height: 3rem;border-radius: .25rem;background-color: unset; color: rgb(59,130,246);border-width: 2px;border-style: solid;">
                    上一步
                </button>
            </a>
            <!-- 下 -->
            {{-- <a href="{{ asset('/cart/cartD') }}"> --}}
            <button type="submit" class="btn btn-primary btn-lg"
                style="padding:0 48px;height: 3rem;border-radius: .25rem;border-width: 2px;background-color: rgb(59,130,246);">
                前往付款
            </button>
            {{-- </a> --}}
        </div>
    </form>
</div>
@endsection

@section('js')
<script src="{{ asset('js/tw-city-selector.js') }}"></script>
<script>
    new TwCitySelector({
      el: '.city-selector-set',
      elCounty: '.county', // 在 el 裡查找 element
      elDistrict: '.district', // 在 el 裡查找 element
      elZipcode: '.zipcode' // 在 el 裡查找 element
    });
</script>
@endsection
