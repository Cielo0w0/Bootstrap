@extends('layout.layout')

@section('title', '購物車4')

@section('css')
<link rel="stylesheet" href="{{asset('/css/shoppingcart_D.css')}}">
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
    <div class="w-25 line-lg d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color:rgb(16,185,129);border-radius: 60%;font-size: 1.125rem;line-height: 40px;color: white;">
            3
        </div>
        <span style="margin-top: 8px;">填寫資料</span>
    </div>
    <!-- 第四步 -->
    <div class="w-25  d-flex flex-column align-items-center justify-content-center mx-auto">
        <div class="circle number d-flex align-items-center justify-content-center"
            style=" width: 40px; height: 40px; background-color:rgb(16,185,129);border-radius: 60%;font-size: 1.125rem;line-height: 40px;color:  white;">
            4
        </div>
        <span style="margin-top: 8px;">完成訂購</span>
    </div>
</div>
@endsection

@section('content')
<!-- 訂單成立&訂單明細-->
<div class="success" style="padding: 20px 0;">
    <h1 class="w-100 text-center" style="font-size: 3rem;line-height: 1;font-weight: 700; margin: 0;">
        訂單成立
    </h1>
    <!-- 訂單明細 -->
    <div class="list">
        <h2 style="font-size: 1.5rem; line-height: 2rem; color: #374151;">訂單明細</h2>
        <!-- 第一層 -->
        <div class="item-1 d-flex justify-content-between" style="padding:24px 32px 0 0;margin-top: 24px;">
            <!-- 左邊資訊 -->
            <div class="d-flex align-items-center ">
                <img src="/img.food1.jpg'" class="" style="width: 60px; height: 60px; border-radius: 50%;">

                <div class="d-flex flex-column align-items-start justify-content-center " style="margin-left: 12px;">
                    <span class="" style="font-weight: 500;">Chicken momo</span>
                    <span class=""
                        style="font-size: .75rem; line-height: 1rem;font-weight: 300;color: rgba(156,163,175);">#41551</span>
                </div>
            </div>
            <!-- 右邊資訊 -->
            <div class="d-flex ">
                <!-- 數量 -->
                <div class="d-flex justify-content-center align-items-center" style="padding-right: 32px;">
                    <div class="" style="font-size: .875rem; line-height: 1.25rem;">x 1</div>
                </div>

                <!-- 價格 -->
                <div class="pr-8 d-flex  justify-content-center align-items-center">
                    <span class="" style="font-size: .75rem; line-height: 1rem;font-weight: 500; ">$10.50</span>
                </div>
            </div>
        </div>

        <!-- 第二層 -->
        <div class="item-2 d-flex justify-content-between"
            style="padding-top:24px ;margin: 24px 32px 0 0;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
            <!-- 左邊資訊 -->
            <div class="d-flex align-items-center ">
                <img src="https://i.imgur.com/Uv2Yqzo.jpg" class=""
                    style="width: 60px; height: 60px; border-radius: 50%;">

                <div class="d-flex flex-column align-items-start justify-content-center " style="margin-left: 12px;">
                    <span class="" style="font-weight: 500;">Spicy Mexican potatoes</span>
                    <span class=""
                        style="font-size: .75rem; line-height: 1rem;font-weight: 300;color: rgba(156,163,175);">#66999</span>
                </div>
            </div>
            <!-- 右邊資訊 -->
            <div class="d-flex ">
                <!-- 數量 -->
                <div class="d-flex justify-content-center align-items-center" style="padding-right: 32px;">
                    <div class="" style="font-size: .875rem; line-height: 1.25rem;">x 1</div>
                </div>

                <!-- 價格 -->
                <div class="pr-8 d-flex  justify-content-center align-items-center">
                    <span class="" style="font-size: .75rem; line-height: 1rem;font-weight: 500; ">$10.50</span>
                </div>
            </div>
        </div>

        <!-- 第三層 -->
        <div class="item-3 d-flex justify-content-between"
            style="padding-top:24px ;margin: 24px 32px 0 0;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
            <!-- 左邊資訊 -->
            <div class="d-flex align-items-center ">
                <img src="https://i.imgur.com/xbTAITF.jpg" class=""
                    style="width: 60px; height: 60px; border-radius: 50%;">

                <div class="d-flex flex-column align-items-start justify-content-center " style="margin-left: 12px;">
                    <span class="" style="font-weight: 500;">Breakfast</span>
                    <span class=""
                        style="font-size: .75rem; line-height: 1rem;font-weight: 300;color: rgba(156,163,175);">#86577</span>
                </div>
            </div>
            <!-- 右邊資訊 -->
            <div class="d-flex ">
                <!-- 數量 -->
                <div class="d-flex justify-content-center align-items-center" style="padding-right: 32px;">
                    <div class="" style="font-size: .875rem; line-height: 1.25rem;">x 1</div>
                </div>

                <!-- 價格 -->
                <div class="pr-8 d-flex  justify-content-center align-items-center">
                    <span class="" style="font-size: .75rem; line-height: 1rem;font-weight: 500; ">$10.50</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 寄送資料 -->
<div class="success" style="padding: 20px 0;">
    <div class="list2">
        <h2 style="font-size: 1.5rem; line-height: 2rem; color: #374151;">寄送資料
        </h2>
        <div class="d-flex" style="padding-top: 1.5rem;margin-top: .5rem;">
            <label class="" style="width: 5rem;padding: .25rem;font-size: 1.25rem;line-height: 1.75rem; margin:0;"
                for="cus_name">
                姓名
            </label>
            <div class="w-100" style="padding: .25rem;font-size: 1.25rem;line-height: 1.75rem; margin:0;">
                王曉明
            </div>
        </div>
        <div class="d-flex" style="padding-top: 1.5rem;margin-top: .5rem;">
            <label class="" style="width: 5rem;padding: .25rem;font-size: 1.25rem;line-height: 1.75rem; margin:0;"
                for="cus_name">
                電話
            </label>
            <div class="w-100" style="padding: .25rem;font-size: 1.25rem;line-height: 1.75rem; margin:0;">
                0912345678
            </div>
        </div>
        <div class="d-flex" style="padding-top: 1.5rem;margin-top: .5rem;">
            <label class="" style="width: 5rem;padding: .25rem;font-size: 1.25rem;line-height: 1.75rem; margin:0;"
                for="cus_name">
                Email
            </label>
            <div class="w-100" style="padding: .25rem;font-size: 1.25rem;line-height: 1.75rem; margin:0;">
                abc123@gmail.com
            </div>
        </div>
        <div class="d-flex" style="padding-top: 1.5rem;margin-top: .5rem;">
            <label class="" style="width: 5rem;padding: .25rem;font-size: 1.25rem;line-height: 1.75rem; margin:0;"
                for="cus_name">
                地址
            </label>
            <div class="w-100" style="padding: .25rem;font-size: 1.25rem;line-height: 1.75rem; margin:0;">
                409 台中市小鎮村英雄路1號
            </div>
        </div>
    </div>
</div>
<!-- 總結帳 -->
<div class="count d-flex justify-content-end flex-column align-items-end"
    style="padding-top:24px ;margin-top: 24px;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
    <div class="d-flex justify-content-between align-items-center w-25">
        <span class=""
            style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">數量:</span>
        <span class=""
            style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">3</span>
    </div>
    <div class="d-flex justify-content-between align-items-center w-25">
        <span class=""
            style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">小計:</span>
        <span class="" style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
            $24.90</span>
    </div>
    <div class="d-flex justify-content-between align-items-center w-25">
        <span class=""
            style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">運費:</span>
        <span class="" style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
            $24.90</span>
    </div>
    <div class="d-flex justify-content-between align-items-center w-25">
        <span class=""
            style="margin-right: .5rem; font-size: .875rem; color: rgba(156,163,175);line-height: 1.25rem;">總計:</span>
        <span class="" style="color: rgba(31,41,55);font-size: 1.125rem; line-height: 1.75rem;font-weight: 700;">
            $24.90</span>
    </div>
</div>
<!-- 返回&下一步 -->
<div class="next d-flex justify-content-end flex-row align-items-center"
    style="padding-top:24px ;margin-top: 24px;border-width: 1px 0 0 0 ; border-style: solid; border-color: #e5e7eb;">
    <a href="{{ asset('/') }}">
        <button type="button" class="btn btn-primary btn-lg"
            style="padding:0 48px;height: 3rem;border-radius: .25rem;background-color: rgb(59,130,246);">
            返回首頁
        </button>
    </a>
</div>
@endsection
