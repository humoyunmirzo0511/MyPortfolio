<!DOCTYPE html>
<html lang="en">

<head>
    <!-- common meta tags -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="shortcut icon" href="{{asset('portfolio/images/logo/faveicon.jpg" type="image/x-icon')}}">
    <!--=== fontaswesome ===-->
    <link rel="stylesheet" href="{{asset('portfolio/assets/fontaswesome/css/all.min.css')}}"/>
    <link rel="stylesheet" href="{{asset('portfolio/assets/fontaswesome/css/fontawesome.min.css')}}"/>
    <link rel="preconnect" href="fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400;1,500;1,600&family=Roboto+Slab:wght@300;400;500;600;700&display=swap"
        rel="stylesheet"/>
    <!--=== owl carousel css === -->
    <link rel="stylesheet" href="{{asset('portfolio/css/vendor/slick.css')}}">
    <!--=== main css ===-->
    <link rel="stylesheet" href="{{asset('portfolio/css/tailwind.css')}}"/>
    <link rel="stylesheet" href="{{asset('portfolio/css/custom.css')}}"/>
    <title>Humoyunmirzo.tech</title>
    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem("color-theme") === "dark" || (!("color-theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
            document.documentElement.classList.add("dark");
        } else {
            document.documentElement.classList.remove("dark");
        }
    </script>
</head>

<body>
<!-- PRELOADER -->
<div id="preloader">
    <div class="loader_line"></div>
</div>
<!-- /PRELOADER -->

<div class="bg-homeBg min-h-screen dark:bg-homeBg-dark bg-no-repeat bg-center bg-cover bg-fixed md:pb-16 w-full">
    <div class="z-50">
        <!-- container start -->
        <div class="container">
            <!-- header start for large screens -->
            <header class="flex justify-between items-center fixed top-0 left-0 w-full lg:static z-[1111111111]">
                <div
                    class="flex justify-between w-full px-4 lg:px-0 bg-[#F3F6F6] lg:bg-transparent lg:dark:bg-transparent dark:bg-black">
                    <div class="flex justify-between w-full items-center space-x-4 lg:my-8 my-5">
                        <!-- website logo -->
                        <a class="text-5xl font-semibold" href="/">
                            <img class="h-[26px] lg:h-[32px]" src="{{asset('portfolio/images/logo/logo.png')}}"
                                 alt="logo"/>
                        </a>
                        <div class="flex items-center">
                            <!-- light and dark mode button -->
                            <button id="theme-toggle-mobile" type="button"
                                    class="dark-light-btn lg:hidden w-[44px] h-[44px] ml-2">
                                <i id="theme-toggle-dark-icon-mobile" class="fa-solid text-xl fa-moon hidden"></i>
                                <i id="theme-toggle-light-icon-mobile" class="fa-solid fa-sun text-xl hidden"></i>

                            </button>
                            <!-- mobile toggle button -->
                            <button id="menu-toggle" type="button" class="menu-toggle-btn">
                                <i id="menu-toggle-open-icon" class="fa-solid fa-bars text-xl "></i>
                                <i id="menu-toggle-close-icon" class="fa-solid fa-xmark text-xl hidden  "></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- header items two for large screens -->
                <nav class="hidden lg:block">

                    <ul class="flex my-12">
                        <li>
                            <a class="@if(request()->path() == "/")menu-item-two-active @else menu-item-two @endif" href="/">
                                    <span class="mr-2 text-base">
                                        <i class="fa-regular fa-user"></i>
                                    </span> About </a>
                        </li>
                        <li>
                            <a class="@if(request()->path() == "resume")menu-item-two-active @else menu-item-two @endif" href="/resume">
                                    <span class="mr-2 text-base">
                                        <i class="fa-regular fa-file-lines"></i>
                                    </span> Resume </a>
                        </li>
                        <li>
                            <a class="@if(request()->path() == "works  ")menu-item-two-active @else menu-item-two @endif" href="/works  ">
                                    <span class="mr-2 text-base">
                                        <i class="fas fa-briefcase"></i>
                                    </span> Works </a>
                        </li>
{{--                        <li>--}}
{{--                            <a class="@if(request()->path() == "blog")menu-item-two-active @else menu-item-two @endif" href="/blog">--}}
{{--                                    <span class="mr-2 text-base">--}}
{{--                                        <i class="fa-brands fa-blogger"></i>--}}
{{--                                    </span> Blogs </a>--}}
{{--                        </li>--}}
                        <li>
                            <a class="@if(request()->path() == "contact")menu-item-two-active @else menu-item-two @endif" href="/contact">
                                    <span class="mr-2 text-base">
                                        <i class="fa-solid fa-address-book"></i>
                                    </span> Contact </a>
                        </li>
                        <li>
                            <!-- light and dark mode button -->
                            <button id="theme-toggle" type="button" class="dark-light-btn w-[44px] h-[44px] ml-2">
                                <i id="theme-toggle-dark-icon" class="fa-solid text-xl fa-moon hidden"></i>
                                <i id="theme-toggle-light-icon" class="fa-solid fa-sun text-xl hidden"></i>
                            </button>
                        </li>
                    </ul>
                </nav>

                <!-- mobile menu start -->
                <nav id="navbar" class="hidden lg:hidden">
                    <ul
                        class="block rounded-b-[20px] shadow-md absolute left-0 top-20 z-[22222222222222] w-full bg-white dark:bg-[#1d1d1d]">
                        <li>
                            <a class="@if(request()->path() == "/")mobile-menu-items-active @else mobile-menu-items @endif" href="/">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-regular fa-user"></i>
                                    </span> About </a>
                        </li>
                        <li>
                            <a class="@if(request()->path() == "resume")mobile-menu-items-active @else mobile-menu-items @endif" href="/resume">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-regular fa-file-lines"></i>
                                    </span> Resume </a>
                        </li>
                        <li>
                            <a class="@if(request()->path() == "works ")mobile-menu-items-active @else mobile-menu-items @endif" href="/works   ">
                                    <span class="mr-2 text-xl">
                                        <i class="fas fa-briefcase"></i>
                                    </span> Works </a>
                        </li>
{{--                        <li>--}}
{{--                            <a class="@if(request()->path() == "blog")mobile-menu-items-active @else mobile-menu-items @endif" href="/blog">--}}
{{--                                    <span class="mr-2 text-xl">--}}
{{--                                        <i class="fa-brands fa-blogger"></i>--}}
{{--                                    </span> Blogs </a>--}}
{{--                        </li>--}}
                        <li>
                            <a class="@if(request()->path() == "contact")mobile-menu-items-active @else mobile-menu-items @endif" href="/contact">
                                    <span class="mr-2 text-xl">
                                        <i class="fa-solid fa-address-book"></i>
                                    </span> Contact </a>
                        </li>
                    </ul>
                </nav>
                <!-- mobile menu end -->
            </header>
            <!-- header  end -->
