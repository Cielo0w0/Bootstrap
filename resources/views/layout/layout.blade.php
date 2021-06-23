<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  @yield('title')  </title>
    {{-- Bootstrap CDN--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    {{-- font-awesome cdn CDN--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
    {{-- Our CSS --}}
    <link rel="stylesheet" href="{{asset('/css/shoppingcart_A.css')}}">
    @yield('css')

</head>

<body>
    <!-- NAV -->
    <nav class="nav-container navbar navbar-expand-lg navbar-light mx-auto d-flex align-items-center "
        style="z-index: 10;">
        <a class="navbar-brand" href="">
            <img src="./img/logo.svg" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <!-- nav跳出的選項 -->
        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarNavAltMarkup"
            style="z-index: 10; background-color: white;">
            <div class="navbar-nav d-flex justify-content-end align-items-center">
                <a id="nav-btn" class="nav-btn nav-item nav-link active" href="#" style="color: rgb(55,65,81);">Blog
                    <!-- <span class="sr-only">(current)</span> -->
                </a>
                <a id="nav-btn" class="nav-btn nav-item nav-link " href="#" style="color: rgb(55,65,81);">Portfolio</a>
                <a id="nav-btn" class="nav-btn nav-item nav-link " href="#" style="color: rgb(55,65,81);">About</a>
                <a id="nav-btn" class="nav-btn nav-item nav-link " href="#" tabindex="-1" aria-disabled="true"
                    style="color: rgb(55,65,81);">Contact</a>

                <div class="i-con">
                    <i class="shopping-cart fas fa-shopping-cart" style="color: rgb(55,65,81);"></i>
                    <i class="customer fas fa-user-circle" style="color: rgb(55,65,81);"></i>
                </div>
            </div>
        </div>
    </nav>


    <!-- main -->
    <main style="width: 100%; min-height: 966px;background-color: rgb(209,213,219);padding: 48px 0;">
        <div class="shopping-car mx-auto" style="background-color: rgb(243,244,246);border-radius: .5rem;padding: 40px;--tw-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1),0 4px 6px -2px rgba(0, 0, 0, 0.05);
            box-shadow: var(--tw-ring-offset-shadow,0 0 #0000),var(--tw-ring-shadow,0 0 #0000),var(--tw-shadow);">
            <!-- 標題 -->
            <h1 class="" style="font-size: 1.875rem; line-height: 2.25rem;font-weight: 700;margin: 0;">購物車</h1>
            @yield('step')
            @yield('content')
        </div>


    </main>


    <!-- footer -->
    <div class="footer introduce-container mx-auto" style="padding:96px 20px;">
        <div class="footer-up d-flex flex-column flex-md-row  justify-content-start">

            <!-- 公司名稱 -->
            <div class="company d-flex flex-row flex-wrap align-items-center align-items-md-start justify-content-center  justify-content-md-start text-center text-md-left"
                style="width: 256px;">
                <div class="div d-flex align-items-center justify-content-center">
                    <svg class=" text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40"
                        style="height: 2.5rem;">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #162446;
                                }

                                .cls-2 {
                                    fill: #fff;
                                }
                            </style>
                        </defs>
                        <title>資產 2</title>
                        <g id="圖層_2" data-name="圖層 2">
                            <g id="圖層_1-2" data-name="圖層 1">
                                <circle class="cls-1" cx="20" cy="20" r="20"></circle>
                                <path class="cls-2"
                                    d="M20,7l7.13,4.11a7.91,7.91,0,0,1,3.95,6.84v6.8l-8.61-5V18.32l7.37,4.26V18.63a7.89,7.89,0,0,0-3.95-6.85L21.28,9.1V33.25L9,26.14V13.35l5.89,3.4a7.91,7.91,0,0,1,3.95,6.85v4.76l-1.23-.71V24.31a7.92,7.92,0,0,0-4-6.85l-3.42-2v9.94L20,31.11Z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    <span class="" style="margin-left: .75rem;font-size: 1.25rem; line-height: 1.75rem">
                        數位方塊
                    </span>
                </div>
                <p class=""
                    style="margin-top: .5rem;font-size: .875rem; line-height: 1.25rem;color: rgb(107,114,128);width: 256px;">
                    Air plant banjo lyft occupy retro adaptogen indego
                </p>
            </div>

            <!-- 其他連結 -->
            <div
                class="all-link d-flex flex-wrap flex-column flex-md-row justify-content-center justify-content-md-start text-center text-md-left">
                <!-- 群組 -->
                <div class="col-12 col-md-6 col-lg-3 link-group1" style="padding: 0 16px;">
                    <!-- 標題 -->
                    <div class="hf"
                        style=" letter-spacing: .1em;font-size: .875rem; line-height: 1.25rem;margin-bottom: .75rem;">
                        CATEGORIES</div>
                    <!-- 連結 -->
                    <li>
                        <a href="">First Link</a>
                    </li>

                    <li>
                        <a href="">Second Link</a>
                    </li>

                    <li>
                        <a href="">Third Link</a>
                    </li>
                    <li>
                        <a href="">Fourth Link</a>
                    </li>
                </div>
                <!-- 群組 -->
                <div class="col-12 col-md-6 col-lg-3 link-group2" style="padding: 0 16px;">
                    <!-- 標題 -->
                    <div class="hf"
                        style=" letter-spacing: .1em;font-size: .875rem; line-height: 1.25rem;margin-bottom: .75rem;">
                        CATEGORIES</div>
                    <!-- 連結 -->
                    <li>
                        <a href="">First Link</a>
                    </li>

                    <li>
                        <a href="">Second Link</a>
                    </li>

                    <li>
                        <a href="">Third Link</a>
                    </li>
                    <li>
                        <a href="">Fourth Link</a>
                    </li>
                </div>
                <!-- 群組 -->
                <div class="col-12 col-md-6 col-lg-3 link-group3" style="padding: 0 16px;">
                    <!-- 標題 -->
                    <div class="hf"
                        style=" letter-spacing: .1em;font-size: .875rem; line-height: 1.25rem;margin-bottom: .75rem;">
                        CATEGORIES</div>
                    <!-- 連結 -->
                    <li>
                        <a href="">First Link</a>
                    </li>

                    <li>
                        <a href="">Second Link</a>
                    </li>

                    <li>
                        <a href="">Third Link</a>
                    </li>
                    <li>
                        <a href="">Fourth Link</a>
                    </li>
                </div>
                <!-- 群組 -->
                <div class="col-12 col-md-6 col-lg-3 link-group4" style="padding: 0 16px;">
                    <!-- 標題 -->
                    <div class="hf"
                        style=" letter-spacing: .1em;font-size: .875rem; line-height: 1.25rem;margin-bottom: .75rem;">
                        CATEGORIES</div>
                    <!-- 連結 -->
                    <li>
                        <a href="">First Link</a>
                    </li>

                    <li>
                        <a href="">Second Link</a>
                    </li>

                    <li>
                        <a href="">Third Link</a>
                    </li>
                    <li>
                        <a href="">Fourth Link</a>
                    </li>
                </div>
            </div>

        </div>
    </div>

    <div class="footer-down d-flex flex-row mx-auto w-100" style="background-color:rgb(243,244,246);">
        <div class="introduce-container w-100 mx-auto "
            style="padding: 1rem 1.25rem; background-color:rgb(243,244,246) ; ">
            <!-- 左邊的字 -->
            <p class="text-center" style="color: rgb(107,114,128);margin: 0;font-size: .875rem; line-height: 1.25rem;">
                © 2020 Tailblocks —
                <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
                    target="_blank" style="color: rgb(107,114,128);">
                    @knyttneve
                </a>
            </p>
            <!-- 右方link -->
            <span class="link-group d-flex flex-row">
                <a class="link">
                    <i class="fab fa-facebook-f" style="color: rgb(107,114,128); width: 20px;height: 20px; "></i>
                </a>
                <a class="link">
                    <i class="fab fa-twitter"
                        style="color: rgb(107,114,128); width: 20px;height: 20px;margin-left: 12px;"></i>
                </a>
                <a class="link">
                    <i class="fab fa-instagram"
                        style="color: rgb(107,114,128); width: 20px;height: 20px;margin-left: 12px;"></i>
                </a>
                <a class="link">
                    <i class="fab fa-linkedin-in"
                        style="color: rgb(107,114,128); width: 20px;height: 20px;margin-left: 12px;"></i>
                </a>
            </span>
        </div>
    </div>

 {{-- JS CDN--}}
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="{{ asset('/js/Layout.js') }}"></script>

</body>

</html>
