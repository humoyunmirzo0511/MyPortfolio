<x-box>
    @php
        $tags = \Illuminate\Support\Facades\DB::table('tags')->get();
        $portfolios = \Illuminate\Support\Facades\DB::table('portfolios')->get();
    @endphp
        <!-- portfolio page contant start -->
    <section class="bg-white  lg:rounded-2xl dark:bg-[#111111]">
        <div class="container mb-8 px-4 sm:px-5 md:px-10 lg:px-[60px]">
            <div class="py-12">
                <h2 class="after-effect after:left-48 mt-12 lg:mt-0">Portfolio</h2>

                <!-- fillter group buttons -->
                <ul
                    class="button-group isotop-menu-wrapper mt-[30px] flex w-full justify-start md:justify-end flex-wrap font-medium">
                    <li class="fillter-btn mr-4 md:mx-4 is-checked" data-filter="*">All</li>
                    @foreach($tags as $tag)
                        <li class="fillter-btn mr-4 md:mx-4" data-filter=".type{{$tag->id}}">{{$tag->title}}</li>
                    @endforeach
                </ul>
            </div>
            <!-- End py-12 -->

            <div id="isotop-gallery-wrapper" class="mymix portfolio_list-two  three-col ">
                <div class="grid-sizer"></div>


                @foreach($portfolios as $portfolio)
                    <!-- portfolio items one start -->
                    <div class="portfolio_list-two-items isotop-item custom type{{$portfolio->tags}}">
                        <div class="rounded-lg bg-[#fff0f0] p-6 dark:bg-transparent dark:border-[2px] border-[#212425]">
                            <div class="overflow-hidden rounded-lg">
                                <a href="#portfilo{{$portfolio->tags}}" rel="modal:open">
                                    <img
                                        class="w-full cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 rounded-lg h-auto"
                                        src="{{asset("admin/img/portfolio/$portfolio->image")}}"
                                        alt="portfolio image')}}"/>
                                </a>
                            </div>
                            <span
                                class="pt-5 text-[14px] font-normal text-gray-lite block dark:text-[#A6A6A6]">{{\Illuminate\Support\Facades\DB::table('tags')->find($portfolio->tags)->title}}</span>
                            <h2
                                class="font-medium cursor-pointer text-xl duration-300 transition hover:text-[#FA5252] dark:hover:text-[#FA5252] dark:text-white mt-2">
                                <a href="#portfilo{{$portfolio->tags}}"
                                   rel="modal:open"> {{$portfolio->title}} </a>
                            </h2>
                        </div>
                    </div>

                    <!-- modal start for item one  -->
                    <div id="portfiloOne" class="modal-container modal">
                        <div
                            class="overflow-y-scroll scroll-hide-1700  max-h-[60vh] lg:max-h-[80vh] dark:scrollbarDark scrollbarLight">
                            <h2 class="text-[#ef4060] dark:hover:text-[#FA5252] text-4xl text-center font-bold">
                                UI/UX Project
                            </h2>
                            <div class="grid grid-cols-1 lg:grid-cols-2 my-6 pr-3">
                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                        <i class="fa-regular fa-file-lines sm:text-lg hidden sm:block mr-4 md:text-xl"></i>
                                        Project :&nbsp;
                                        <span class="font-medium"> Website</span>
                                    </p>
                                    <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                        <i class="fa-solid fa-code text-lg mr-2 hidden sm:block"></i>
                                        Langages :&nbsp;
                                        <span class="font-medium">Photoshop, Figma</span>
                                    </p>
                                </div>

                                <div class="space-y-2">
                                    <p class="dark:text-white flex items-center mt-2 lg:mt-0 text-[15px] sm:text-lg">
                                        <i class="fa-regular fa-user text-lg mr-2 hidden sm:block"></i>
                                        Client :&nbsp; <span class="font-medium">Envato</span>
                                    </p>
                                    <p class="dark:text-white flex items-center text-[15px] sm:text-lg">
                                        <i class="fa-solid fa-arrow-up-right-from-square text-lg mr-2 hidden sm:block"></i>
                                        Preview :&nbsp;
                                        <span
                                            class="font-medium transition-all duration-300 ease-in-out hover:text-[#ef4060]">
                          <a href="https://www.envato.com" target="_blank" rel="noopener noreferrer">www.envato.com</a>
                        </span>
                                    </p>
                                </div>
                            </div>

                            <p class="dark:text-white text-2line font-normal text-[15px] sm:text-sm">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Mollitia placeat magnam possimus iusto blanditiis pariatur
                                labore explicabo quo repellat hic dolorum numquam
                                asperiores, voluptatum fugiat reiciendis aspernatur, non,
                                odio aperiam voluptas ex tempora vitae. Dolor, consequatur
                                quidem! Quas magni distinctio dolorum dolore natus, vel
                                numquam accusamus. Nostrum eligendi recusandae qui tempore
                                deserunt!
                            </p>
                            <div class="pr-3">
                                <img class="w-full md:h-[450px] h-auto object-cover rounded-xl mt-6"
                                     src="{{asset('portfolio/images/work_images/1.jpg')}}" alt="portfolio image"/>
                            </div>
                        </div>
                        <a href="portfiloTwo.html#close-modal" rel="modal:close"
                           class="close bg-close-light dark:bg-close-dark">Close</a>
                    </div>
                @endforeach
            </div>
        </div>

        {{--        <!-- footer start -->--}}
        {{--        <footer class="overflow-hidden rounded-b-2xl bg-[#f8fbfb] dark:bg-[#212425]">--}}
        {{--            <p class="text-center py-6 text-gray-lite dark:text-color-910">--}}
        {{--                © 2022 All Rights Reserved by--}}
        {{--                <a class="hover:text-[#FA5252] duration-300 transition" href="https://themeforest.net/user/ib-themes"--}}
        {{--                   target="_blank" rel="noopener noreferrer">ib-themes</a>.--}}
        {{--            </p>--}}
        {{--        </footer>--}}
        {{--        <!-- footer ends -->--}}
    </section>
    <!-- portfolio ends  -->
</x-box>
