@extends('layouts.template')

@section('page-title','首頁')

@section('css')
<style></style>
@endsection


@section('main')
<!-- swiper -->
<div class="swiper">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="http://www.mashup.com.tw/taie/product/dimg/pro_5b67c70e00942.jpg" class="d-block " alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://www.mashup.com.tw/taie/product/dimg/pro_5b67c70e00942.jpg" class="d-block " alt="...">
            </div>
            <div class="carousel-item">
                <img src="http://www.mashup.com.tw/taie/product/dimg/pro_5b67c70e00942.jpg" class="d-block " alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
{{--
<main> --}}
<div class="introduce d-flex flex-column align-items-center justify-content-center">

    <!-- section1 -->
    <div class="introduce-container section1">
        <!-- 上方文字 -->
        <div class="section1-top-text ">
            <h1 class="mb-3 font-weight-normal text-center">
                Raw Denim Heirloom Man Braid
            </h1>
            <p class="mx-auto text-center" style="color:rgb(75,85,99)">
                Blue bottle crucifix vinyl
                post-ironic four dollar toast vegan taxidermy. Gastropub indxgo juice poutine, ramps microdosing
                banh mi
                pug.
            </p>
            <div class="d-flex justify-content-center">
                <div class="line bg-bule "></div>
            </div>
        </div>


        <!-- 卡片 -->
        <div class="row bg-white d-flex">
            <!-- 第一張 -->
            <div
                class="card col-md-4 d-flex justify-content-center align-items-center flex-column no-gutters text-center">
                <div class="card-logo d-flex justify-content-center align-items-center ">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                    </svg>
                </div>
                <h5 class="card-title">Shooting Stars</h5>
                <p class="card-text no-gutters" style="color:rgb(75,85,99)">
                    Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.
                </p>
                <a href="#" class="card-link">Learn More ➜</a>
            </div>

            <!-- 第二張 -->
            <div
                class="card col-md-4 d-flex justify-content-center align-items-center flex-column no-gutters text-center">
                <div class="card-logo d-flex justify-content-center align-items-center ">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <circle cx="6" cy="6" r="3"></circle>
                        <circle cx="6" cy="18" r="3"></circle>
                        <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                    </svg>
                </div>
                <h5 class="card-title">The Catalyzer</h5>
                <p class="card-text no-gutters" style="color:rgb(75,85,99)">
                    Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.
                </p>
                <a href="#" class="card-link">Learn More ➜</a>
            </div>

            <!-- 第三張 -->
            <div
                class="card col-md-4 d-flex justify-content-center align-items-center flex-column no-gutters text-center">
                <div class="card-logo d-flex justify-content-center align-items-center ">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" class="w-10 h-10" viewBox="0 0 24 24">
                        <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </div>
                <h5 class="card-title">Neptune</h5>
                <p class="card-text no-gutters" style="color:rgb(75,85,99)">
                    Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.
                </p>
                <a href="#" class="card-link">Learn More ➜</a>
            </div>

            <!-- 下方按鈕 -->
            <button type="button" class="btn btn-primary btn-lg flex mx-auto ">
                Button
            </button>
        </div>
    </div>


    <!-- section2 -->
    <div class="introduce-container section2">
        <!-- 上方文字 -->
        <div class="section2-text d-flex flex-wrap">
            <h1 class=" col-12 col-lg-4">
                Master Cleanse Reliac Heirloom
            </h1>
            <p class="col-12 col-lg-8" style="color:rgb(75,85,99)">
                Whatever cardigan tote bag tumblr hexagon
                brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't
                heard of them
                man bun deep jianbing selfies heirloom.
            </p>
        </div>

        <!-- 各種版型 -->
        <div class="img-group d-flex flex-wrap flex-row">

            <div class="img-left d-flex flex-wrap w-50 bg-white flex-row">
                <div class="w-50">
                    <img alt="gallery" class="w-100" src="https://dummyimage.com/500x300">
                </div>
                <div class="w-50">
                    <img alt="gallery" class="w-100" src="https://dummyimage.com/501x301">
                </div>
                <div class="w-100">
                    <img alt="gallery" class="w-100" src="https://dummyimage.com/600x360">
                </div>
            </div>

            <div class="img-right d-flex flex-wrap w-50 bg-white">
                <div class="w-100">
                    <img alt="gallery" class="w-100 " src="https://dummyimage.com/601x361">
                </div>
                <div class="w-50">
                    <img alt="gallery" class="w-100" src="https://dummyimage.com/502x302">
                </div>
                <div class="w-50">
                    <img alt="gallery" class="w-100" src="https://dummyimage.com/503x303">
                </div>
            </div>
        </div>
    </div>


    <!-- section3 -->
    <div class="introduce-container section3  d-flex flex-column justify-content-center align-items-center">
        <!-- 上方文字 -->
        <div class="section3-top-text">
            <h1 class="mb-3  text-center" style="margin-bottom: .5rem;">
                Pricing
            </h1>
            <p class="mx-auto text-center" style="margin-bottom: 0;color: rgb(107,114,128);">
                Banh mi cornhole echo park skateboard authentic crucifix neutra tilde lyft biodiesel artisan
                direct trade mumblecore 3 wolf moon twee
            </p>
        </div>

        <!-- 下方表單 -->
        <div class=" price mx-auto bg-light d-flex justify-content-center flex-column" style="color:rgb(75,85,99)">
            <table class="text-left">
                <thead class="thead1">
                    <tr>
                        <th class="px-4 py-3"> Plan </th>
                        <th class="px-4 py-3">Speed</th>
                        <th class="px-4 py-3">Storage </th>
                        <th class="px-4 py-3">Price</th>
                        <th class=""></th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-bottom" style="background-color:white;">
                        <td class="px-4 py-3">Start</td>
                        <td class="px-4 py-3">5 Mb/s</td>
                        <td class="px-4 py-3">15 GB</td>
                        <td class="px-4 py-3 ">Free</td>
                        <td class="text-center">
                            <input name="plan" type="radio">
                        </td>
                    </tr>
                    <tr class="border-bottom" style="background-color:white;">
                        <td class="px-4 py-3">Pro</td>
                        <td class="px-4 py-3">25 Mb/s</td>
                        <td class="px-4 py-3">25 GB</td>
                        <td class="px-4 py-3">$24</td>
                        <td class="text-center">
                            <input name="plan" type="radio">
                        </td>
                    </tr>
                    <tr class="border-bottom" style="background-color:white;">
                        <td class=" px-4 py-3">Business</td>
                        <td class=" px-4 py-3">36 Mb/s</td>
                        <td class=" px-4 py-3">40 GB</td>
                        <td class=" px-4 py-3">$50</td>
                        <td class=" text-center">
                            <input name="plan" type="radio">
                        </td>
                    </tr>
                    <tr class="border-bottom" style="background-color:white;">
                        <td class=" px-4 py-3">Exclusive</td>
                        <td class=" px-4 py-3">48 Mb/s</td>
                        <td class=" px-4 py-3">120 GB</td>
                        <td class=" px-4 py-3">$72
                        </td>
                        <td class=" text-center">
                            <input name="plan" type="radio">
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- 下方按鈕 -->
            <div class="section3-link d-flex justify-content-between  align-content-center"
                style="background-color:white ;margin-top: 16px; padding-left: 16px;">

                <a href="#" class="card-link ">Learn More ➜</a>
                <a class="btn btn-primary " href="#" role="button" style="width: 100px; height: 40px;">Button</a>

            </div>
        </div>
    </div>


    <!-- section4 -->
    <div class="introduce-container section4">
        <!-- 上方文字 -->
        <div class="section4-text d-flex flex-wrap">
            <h1 class=" col-12 col-lg-4">
                Pitchfork Kickstarter Taxidermy
            </h1>
            <p class="col-12 col-lg-8" style="color: rgb(107,114,128);">
                Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom
                prism food truck ugh squid celiac humblebrag.
            </p>
        </div>
        <!-- 下方card -->
        <div class="card-group-4 d-flex flex-wrap justify-content-between flex-row">
            @foreach ($newslists as $item)
            {{-- 卡片 --}}
            <div class="col-12 col-md-6 col-xl-3" style="padding: 16px;">
                <div class="card" style="padding: 24px;">
                    <img src="{{ $item->photo??''}}" class="card-img-top" alt="..."
                        style="margin-bottom: 24px;display: block;object-fit: cover;object-position: center;height: 230px">
                    <div class="card-body" style="padding: 0;">
                        <h3 class="card-small-title"
                            style="letter-spacing: .1em;font-size: .75rem;line-height: 1rem;color: #7866F1;">
                            {{ $item->newstype->news_type_name??''}}</h3>
                        <h5 class="card-title"> {{ $item->title }}</h5>
                        <p class="card-text" style="color:rgb(75,85,99)">{{ $item->content }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>


    <!-- section5 -->
    <div class="introduce-container section5 d-flex flex-column align-items-center">
        <!-- 卡片 -->
        <!-- 第一層 -->
        <div class=" card-group bg-white d-flex flex-row justify-content-start align-items-center mx-auto "
            style="padding-bottom: 40px;">
            <!-- 圖 -->
            <div class="card-logo d-flex justify-content-center align-items-center"
                style="width: 8rem;margin-right: 2.5rem; height: 8rem;">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-10 h-10" viewBox="0 0 24 24" style="width: 4rem;height: 4rem;">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                </svg>
            </div>
            <!-- 文字 -->
            <div class="card d-flex justify-content-center align-items-start flex-column no-gutters text-center"
                style="width: calc(100% - 165px);padding: 0;">
                <h5 class="card-title" style="margin-bottom: 8px;">Shooting Stars</h5>
                <p class="card-text text-left" style="margin-bottom: 0px;color: rgb(107,114,128);">
                    Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.
                </p>
                <a href="#" class="card-link" style="color: rgb(99,102,241);">Learn More ➜</a>
            </div>
        </div>

        <!-- 第二層 -->
        <div class=" card-group bg-white d-flex flex-row justify-content-start align-items-center mx-auto "
            style=" padding-bottom: 40px;margin: 40px 0px 40px 0px;">
            <!-- 文字 -->
            <div class="card d-flex justify-content-center align-items-start flex-column no-gutters text-center"
                style="width: calc(100% - 165px);padding: 0;">
                <h5 class="card-title" style="margin-bottom: 8px;">The Catalyzer</h5>
                <p class="card-text text-left" style="margin-bottom: 0px;color: rgb(107,114,128)">
                    Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.
                </p>
                <a href="#" class="card-link" style="color: rgb(99,102,241);">Learn More ➜</a>
            </div>
            <!-- 圖 -->
            <div class="card-logo d-flex justify-content-center align-items-center"
                style="width: 8rem;margin-left: 2.5rem; height: 8rem;color: rgb(107,114,128)">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-10 h-10" viewBox="0 0 24 24" style="width: 4rem;height: 4rem;">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                </svg>
            </div>


        </div>

        <!-- 第三層 -->
        <div class=" card-group bg-white d-flex flex-row justify-content-start align-items-center mx-auto "
            style=" padding-bottom: 40px;">
            <!-- 圖 -->
            <div class="card-logo d-flex justify-content-center align-items-center"
                style="width: 8rem;margin-right: 2.5rem; height: 8rem;">
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    class="w-10 h-10" viewBox="0 0 24 24" style="width: 4rem;height: 4rem;">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
            </div>

            <!-- 文字 -->
            <div class="card d-flex justify-content-center align-items-start flex-column no-gutters text-center"
                style="width: calc(100% - 165px);padding: 0;">
                <h5 class="card-title" style="margin-bottom: 8px;">The 400 Blows</h5>
                <p class="card-text text-left" style="margin-bottom: 0px;">
                    Blue bottle crucifix vinyl post-ironic four dollar toast vegan taxidermy. Gastropub indxgo
                    juice poutine, ramps microdosing banh mi pug VHS try-hard.
                </p>
                <a href="#" class="card-link" style="color: rgb(99,102,241);">Learn More ➜</a>
            </div>
        </div>


        <!-- 下方按鈕 -->
        <button type="button" class="btn btn-primary btn-lg d-flex mx-auto">
            Button
        </button>
    </div>

    <!-- section6 -->
    <div class="introduce-container section6">
        <div class="section6-card mx-auto d-flex flex-wrap flex-column flex-lg-row" style="background-color: white;">
            <!-- 左邊圖 -->
            <img alt="ecommerce" class="" src="{{ $top_product->photo }}">
            <!-- 右邊資料 -->
            <div class="detail col-12 col-lg-6">
                <!-- 品項名稱 -->
                <h2 class=""
                    style="letter-spacing: .1em; font-size: .875rem; line-height: 1.25rem;color: rgb(107,114,128);margin: 0;">
                    {{ $top_product->type->type_name??'' }}</h2>
                <h1 class="" style="margin-bottom: 4px;">{{ $top_product->product_name }}</h1>
                <!-- 其他資訊 -->
                <div class="informations" style="margin-bottom: 1rem;">
                    <!-- 第一層評價 -->
                    <div class="rate" style="margin-bottom: 16px">
                        <i class="fas fa-star" style="color: #6366F1;width: 1rem;height: 1rem;"></i>
                        <i class="fas fa-star" style="color: #6366F1;width: 1rem;height: 1rem;"></i>
                        <i class="fas fa-star" style="color: #6366F1;width: 1rem;height: 1rem;"></i>
                        <i class="fas fa-star" style="color: #6366F1;width: 1rem;height: 1rem;"></i>
                        <i class="far fa-star" style="color: #6366F1;width: 1rem;height: 1rem;"></i>
                        <span class="" style="margin-left: .75rem;">4 Reviews</span>
                        <span class="link-group" style="margin-left: 12px;padding: 8px 0 8px 12px;">
                            <a class="link">
                                <i class="fab fa-facebook-f" style="color: rgb(107,114,128);"></i>
                            </a>
                            <a class="link">
                                <i class="fab fa-twitter" style="color: rgb(107,114,128)"></i>
                            </a>
                            <a class="link">
                                <i class="fas fa-comment" style="color: rgb(107,114,128)"></i>
                            </a>
                        </span>
                    </div>
                    <!-- 第二層敘述 -->
                    <p class="leading-relaxed" style="color: rgb(75,85,99)">
                        <td>{{ $top_product->discript }}</td>
                    </p>
                    <!-- 第三層顏色 -->
                    <div class="size d-flex flex-row align-items-center"
                        style="margin: 24px 0 20px 0;padding-bottom:20px;">
                        <span class="color" style="margin-right: 12px;">Color</span>
                        <button class="color-btn" style="background-color: white;"></button>
                        <button class="color-btn" style=" background-color: rgb(55,65,81); margin: 0 4px;"></button>
                        <button class="color-btn" style=" background-color:rgb(99,102,241);"></button>
                        <div class="relative">
                            <span class="" style="margin: 0 12px 0 24px ;">Size</span>
                            <select class="bg-white">
                                <option>XS</option>
                                <option>S</option>
                                <option>M</option>
                                <option>L</option>
                                <option>XL</option>
                                <option>XXL</option>
                            </select>
                        </div>
                    </div>
                    <!-- 第四層價格 -->
                    <div class="price d-flex flex-row justify-content-between align-items-center w-100">
                        <span class=""
                            style="font-weight: 500;font-size: 1.5rem;line-height: 2rem;">{{ '$'.$top_product->price }}
                        </span>
                        <div class="team d-flex flex-row ">
                            <button type="button" class="btn btn-primary btn-lg d-flex "
                                style="background-color: rgb(99,102,241);font-size: 1rem; padding:8px 24px;">
                                Button
                            </button>
                            <button
                                style="width: 2.5rem; margin-left: 1rem; height: 2.5rem; border-radius: 20px; border: none;">
                                <i class="fas fa-heart"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- section7 -->
    <div class="introduce-container section7 d-flex flex-row">
        <div class="card-group row d-flex flex-row" style="margin: -16px;">
            @foreach ($lists as $item)
            <!-- 卡片 -->
            <div class="col-xs-12 col-md-6 col-lg-3 bg-white" style="padding: 16px;">
                <img src="{{ $item->photo??''}}" class="card-img-top" alt="..."
                    style="margin-bottom: 16px;border-radius: .25rem;height: 12rem;display: block;object-fit: cover;object-position: center;">
                <div class="card-body" style="padding: 0;">
                    <h3 class="card-small-title"
                        style="letter-spacing: .1em;font-size: .75rem;line-height: 1rem;color: rgb(131,136,181);margin-bottom: 4px;">
                        {{ $item->type->type_name??''}}
                    </h3>
                    <h5 class="card-title"
                        style="font-size: 1.125rem; line-height: 1.75rem; font-weight: 500;margin-bottom:4px ;">
                        {{ $item->product_name }}
                    </h5>
                    <p class="card-text" style="color: rgb(75,85,124);" style="color: rgb(75,85,124);">
                        {{ '$'.$item->price }}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <!-- section8 -->
    <div class="section8  d-flex  justify-content-center align-items-center">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3637.716529069472!2d120.71810775038034!3d24.25169138426785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691a0f76c278fd%3A0x2877808fa5ca752d!2z5LiK55uK6LOH6KiK!5e0!3m2!1szh-TW!2stw!4v1619401770970!5m2!1szh-TW!2stw"
            width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>

        <!-- 回饋 -->
        <form action="{{ asset('admin/contactus/store') }}" method="POST"
            class="introduce-container d-flex bg-white justify-content-end">
            @csrf
            <div class="introduce-container d-flex bg-white justify-content-end">
                <!-- 卡體 -->
                <div class="col-md-6 col-lg-4 bg-white d-flex flex-column d-flex feedback"
                    style="padding: 32px;border-radius: .5rem;--tw-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1),0 2px 4px -1px rgba(0, 0, 0, 0.06); box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);">
                    <!-- 說明 -->
                    <h2 class=""
                        style="font-weight: 500;font-size: 1.125rem;line-height: 1.75rem;margin-bottom: .25rem;">
                        Feedback
                    </h2>
                    <p class="" style="margin-bottom: 1.25rem;line-height: 1.625;color: rgb(103,111,123);">
                        Post-ironic portland shabby chic echo park, banjo fashion axe
                    </p>
                    <!-- 填入信箱 -->
                    <div class="d-flex flex-column" style="margin-bottom:16px;">
                        <label for="email" class=""
                            style="line-height: 1.75rem;font-size: .875rem;color: rgb(103,111,123);">
                            Email
                        </label>
                        <input type="email" id="email" name="email" class="bg-white">
                    </div>
                    <!-- 填入意見 -->
                    <div class="d-flex flex-column" style="margin-bottom:18px ;">
                        <label for="message" class=""
                            style="line-height: 1.75rem;font-size: .875rem;color: rgb(103,111,123);">
                            Message
                        </label>
                        <textarea type="text" id="message" name="message" class=" bg-white "></textarea>
                    </div>
                    <!-- 送出按鈕 -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block"
                        style=" background-color: rgb(99,102,241); margin-bottom: 12px;">
                        Button
                    </button>
                    <p class="" style="font-size: .75rem; line-height: 1rem; margin-bottom: 0;color: rgb(103,111,123);">
                        Chicharrones blog helvetica normcore iceland tousled brook viral artisan.
                    </p>
                </div>
            </div>
        </form>

    </div>
</div>

@endsection


@section('js')

@endsection
