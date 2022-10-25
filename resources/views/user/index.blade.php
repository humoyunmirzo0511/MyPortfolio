<x-box>
    <!-- about page contant start -->
    <div>
        <div class="container lg:rounded-2xl bg-white dark:bg-[#111111] px-4 sm:px-5 md:px-10 lg:px-20">
            <div data-aos="fade" class="aos-init aos-animate">
                <div class="py-12">
                    <!-- about page title -->
                    <h2 class="after-effect after:left-52 mt-12 lg:mt-0"> About Me </h2>
                    <div class="grid grid-cols-12 md:gap-10 pt-4 md:pt-[40px] items-center">
                        <div class="col-span-12 md:col-span-4">
                            <!-- about me image -->
                            <img
                                class="w-full md:w-[330px] md:h-[400px] object-cover overflow-hidden rounded-[35px] mb-3 md:mb-0"
                                src="{{asset('portfolio/images/about/about.jpg')}}" alt="about image"/>
                        </div>
                        <div class="col-span-12 md:col-span-8 space-y-2.5">
                            <!-- who am i content  -->
                            <div class="md:mr-12 xl:mr-16">
                                <h3 class="text-4xl font-medium dark:text-white mb-2.5"> Who am i? </h3>
                                <p class="text-gray-lite dark:text-color-910 leading-7"> I'm Creative Backend developer and Graphic Designer from Uzbekistan, working in web development and social media. I enjoy turning complex problems into simple, beautiful and creative designs. </p>
{{--                                <p class="text-gray-lite leading-7 mt-2.5 dark:text-color-910"> My aim is to--}}
{{--                                    bring across your message and identity in the most creative way. I--}}
{{--                                    created web design for many famous brand companies. </p>--}}
                            </div>

                            <!-- personal info -->
                            <div>
                                <h3 class="text-4xl font-medium my-5 dark:text-white"> Personal Info </h3>
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                    <div class="flex">
                                                    <span
                                                        class="text-oriange dark:bg-color-990 shadow-icon mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                                    </span>
                                        <div class="space-y-1">
                                            <p class="text-xs text-gray-lite dark:text-color-910"> Phone
                                            </p>
                                            <h6 class="font-medium dark:text-white"> +998 99 842 79 79 </h6>
                                        </div>
                                    </div>

                                    <div class="flex">
                                                    <span
                                                        class="text-oriange-lite dark:bg-color-990 shadow-icon mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                                        <i class="fa-solid fa-location-dot"></i>
                                                    </span>
                                        <div class="space-y-1">
                                            <p class="text-xs text-gray-lite dark:text-color-910"> Location
                                            </p>
                                            <h6 class="font-medium dark:text-white"> Andijan Uzbekistan </h6>
                                        </div>
                                    </div>

                                    <div class="flex">
                                                    <span
                                                        class="text-green dark:bg-color-990 shadow-icon mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                                        <i class="fa-solid fa-envelope-open-text"></i>
                                                    </span>
                                        <div class="space-y-1">
                                            <p class="text-xs text-gray-lite dark:text-color-910"> Email
                                            </p>
                                            <h6 class="font-medium dark:text-white"> humoyunmirzo1105@gmail.com </h6>
                                        </div>
                                    </div>

                                    <div class="flex">
                                                    <span
                                                        class="text-color-50 dark:bg-color-990 shadow-icon mr-2.5 flex items-center justify-center rounded-md text-2xl w-12 text-">
                                                        <i class="fa-solid fa-calendar-days"></i>
                                                    </span>
                                        <div class="space-y-1">
                                            <p class="text-xs text-gray-lite dark:text-color-910"> Birthday
                                            </p>
                                            <h6 class="font-medium dark:text-white"> May 11, 2006 </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- whai i do contain -->
                <div class="pb-12">
                    <h3 class="text-[35px] dark:text-white font-medium pb-5"> What I do! </h3>
                    <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
                        <div class="about-box dark:bg-transparent bg-[#fcf4ff]">
                            <img class="w-10 h-10 object-contain block"
                                 src="{{asset('portfolio/images/icons/icon.svg')}}"
                                 alt="icon"/>
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> Ui/Ux Design </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                            </div>
                        </div>

                        <div class="about-box dark:bg-transparent bg-[#fefaf0]">
                            <img class="w-10 h-10 object-contain block"
                                 src="{{asset('portfolio/images/icons/icon1.svg')}}"
                                 alt="icon"/>
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> App Development </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                            </div>
                        </div>

                        <div class="about-box dark:bg-transparent bg-[#fcf4ff]">
                            <img class="w-10 h-10 object-contain block"
                                 src="{{asset('portfolio/images/icons/icon2.svg')}}"
                                 alt="icon"/>
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> Photography </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                            </div>
                        </div>

                        <div class="about-box dark:bg-transparent bg-[#fff4f4]">
                            <img class="w-10 h-10 object-contain block"
                                 src="{{asset('portfolio/images/icons/icon3.svg')}}"
                                 alt="icon"/>
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> Photography </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                            </div>
                        </div>

                        <div class="about-box dark:bg-transparent bg-[#fff0f8]">
                            <img class="w-10 h-10 object-contain block"
                                 src="{{asset('portfolio/images/icons/icon4.svg')}}"
                                 alt="icon"/>
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> Managment </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                            </div>
                        </div>

                        <div class="about-box dark:bg-transparent bg-[#f3faff]">
                            <img class="w-10 h-10 object-contain block"
                                 src="{{asset('portfolio/images/icons/icon5.svg')}}"
                                 alt="icon"/>
                            <div class="space-y-2">
                                <h3 class="dark:text-white text-2xl font-semibold"> Web Development </h3>
                                <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Lorem ipsum dolor
                                    sit amet, consectetuer adipiscing elit, sed diam euismod volutpat. </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- what i do contain end -->
                <div>
                    <div class="bg-[#F8FBFB] dark:bg-[#0D0D0D] max-w-full h-auto py-10 rounded-xl">
                        <h3 class="text-center dark:text-white text-6xl mb-3 font-semibold">Clients</h3>
                        <!-- slider and slider items start -->
                        <div class="slickTwo px-2 pt-8">
                            <div>
                                <img class="overflow-hidden brand-img"
                                     src="{{asset('portfolio/images/slider/brand.png')}}"
                                     alt="brand"/>
                            </div>
                            <div>
                                <img class="overflow-hidden brand-img"
                                     src="{{asset('portfolio/images/slider/brand1.png')}}"
                                     alt="brand"/>
                            </div>
                            <div>
                                <img class="overflow-hidden brand-img"
                                     src="{{asset('portfolio/images/slider/brand2.png')}}"
                                     alt="brand"/>
                            </div>
                            <div>
                                <img class="overflow-hidden brand-img"
                                     src="{{asset('portfolio/images/slider/brand3.png')}}"
                                     alt="brand"/>
                            </div>
                            <div>
                                <img class="overflow-hidden brand-img"
                                     src="{{asset('portfolio/images/slider/brand4.png')}}"
                                     alt="brand"/>
                            </div>
                            <div>
                                <img class="overflow-hidden brand-img"
                                     src="{{asset('portfolio/images/slider/brand5.png')}}"
                                     alt="brand"/>
                            </div>
                        </div>
                        <!-- slider and slider items end -->
                    </div>
                </div><!-- footer section start -->
                {{--<footer class="overflow-hidden rounded-b-2xl" style="background: transparent;">--}}
                {{--    <p class="text-center py-6 text-gray-lite dark:text-color-910"> © 2022 All Rights--}}
                {{--        Reserved by <a class="hover:text-[#FA5252] duration-300 transition"--}}
                {{--                       href="https://themeforest.net/user/ib-themes" target="_blank"--}}
                {{--                       rel="noopener noreferrer"> ib-themes</a>. </p>--}}
                {{--</footer>--}}
                <!-- footer section end -->
            </div>
        </div>
    </div>
    <!-- about section end  -->
</x-box>
