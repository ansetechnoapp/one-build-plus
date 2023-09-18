<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    <x-head></x-head>
    
    <body class="dark:bg-slate-900">
        <!-- Loader Start -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader End -->
        <!-- Start Navbar -->
        <x-navbar></x-navbar><!--end header-->
        <!-- End Navbar -->

        <!-- Start Hero -->
        <section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div class="container">
                <div class="grid grid-cols-1 text-center mt-10">
                    <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Trouvez le logement de vos rêves</h3>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <div class="relative">
            <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        @include('include.formsearch')<!--end container-->
        <!-- End Hero -->
        
        <!-- Start -->
        <section class="relative lg:py-24 py-16">
            <div class="container">
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                    @isset($posts)

                    @foreach ($posts as $post)
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                        <div class="relative">
                            <img src="assets/images/property/1.jpg" alt="">

                            <div class="absolute top-4 end-4">
                                <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="pb-6">
                                <a href="{{ route('property_detail', ['id' => $post->id, 'price' => $post->price]) }}" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">{{ $post->address }}</a>
                            </div>

                            <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>{{ $post->communes }}</span>
                                </li>

                                <li class="flex items-center me-4">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>{{ $post->borough }}</span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                    <span>{{ $post->area }}</span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Prix</span>
                                    <p class="text-lg font-medium">{{ $post->price }} fcfa</p>
                                </li>

                                <li>
                                    <span class="text-slate-400">Rating</span>
                                    <ul class="text-lg font-medium text-amber-400 list-none">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline text-black dark:text-white">5.0(30)</li> 
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div><!--end property content-->
                    @endforeach
                    
                    @endisset
                </div><!--en grid-->

                {{-- <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                    <div class="md:col-span-12 text-center">
                        <nav>
                            <ul class="inline-flex items-center -space-x-px">
                                <li>
                                    <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                        <i class="uil uil-angle-left text-[20px]"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">1</a>
                                </li>
                                <li>
                                    <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">2</a>
                                </li>
                                <li>
                                    <a href="#" aria-current="page" class="z-10 w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-white bg-green-600 shadow-sm dark:shadow-gray-700">3</a>
                                </li>
                                <li>
                                    <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">4</a>
                                </li>
                                <li>
                                    <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                        <i class="uil uil-angle-right text-[20px]"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> --}}<!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start Footer -->
        <x-footer></x-footer><!--end footer-->
        <!-- End Footer -->
        <!-- Switcher -->
        <div class="fixed top-1/4 -left-2 z-3">
            <span class="relative inline-block rotate-90">
                <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
                <label class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                    <i class="uil uil-moon text-[20px] text-yellow-500 mt-1"></i>
                    <i class="uil uil-sun text-[20px] text-yellow-500 mt-1"></i>
                    <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] start-[2px] w-7 h-7"></span>
                </label>
            </span>
        </div>
        <!-- Switcher -->

        <!-- LTR & RTL Mode Code -->
        <div class="fixed top-[40%] -left-3 z-50">
            <a href="#" id="switchRtl">
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden" >LTR</span>
                <span class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
            </a>
        </div>
        <!-- LTR & RTL Mode Code -->

        <!-- Back to top -->
        <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-green-600 text-white justify-center items-center"><i class="uil uil-arrow-up"></i></a>
        <!-- Back to top -->

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>

<!-- Mirrored from shreethemes.in/OBP/layouts/grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jul 2023 15:52:37 GMT -->
</html>