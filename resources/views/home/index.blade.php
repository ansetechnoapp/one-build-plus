<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<x-head></x-head>

<body class="dark:bg-slate-900">
    <!-- Loader Start -->
    {{-- <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div> --}}
    <!-- Loader End -->
    <!-- Start Navbar -->
    <x-navbar></x-navbar>
    <!--end header-->
    <!-- End Navbar -->

    <!-- Hero Start -->
    <section class="relative mt-20">
        <div class="container-fluid md:mx-4 mx-2">
            <div class="relative pt-40 pb-52 table w-full rounded-2xl shadow-md overflow-hidden" id="home">
                <div class="absolute inset-0 bg-black/60"></div>

                <div class="container">
                    <div class="grid grid-cols-1">
                        <div class="ltr:md:text-left rtl:md:text-right text-center">
                            <h1
                                class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">
                                Nous vous aiderons à trouver <br> votre <span
                                    class="text-green-600">Merveilleuse</span> terrain</h1>
                            <p class="text-white/70 text-xl max-w-xl">Une excellente plateforme pour acheter vos propriétés .</p>
                        </div>
                    </div>
                    <!--end grid-->
                </div>
                <!--end container-->
            </div>
        </div>
        <!--end Container-->
    </section>
    <!--end section-->
    <!-- Hero End -->

    <!-- Start -->
    <section class="relative md:pb-24 pb-16">   
        @include('include.formsearch')
        <!--end container-->

        <div class="container lg:mt-24 mt-16"> 
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                @include('include.1sectioncontainer')
            </div>
            <!--end grid-->
        </div>
        
        <!--end container-->

        <div class="container lg:mt-24 mt-16">
            @include('include.2sectioncontainer')
        </div>
        <!--end container-->
        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Propriétés</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Une plateforme idéale pour acheter.</p>
            </div>
            <!--end grid-->

            <div class="grid grid-cols-1 mt-8 relative">
                <div class="tns-outer" id="tns2-ow">
                    <div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button"
                            data-controls="prev" tabindex="-1" aria-controls="tns2"><i
                                class="mdi mdi-chevron-left "></i></button><button type="button"
                            data-controls="next" tabindex="-1" aria-controls="tns2"><i
                                class="mdi mdi-chevron-right"></i></button></div>
                    <div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span
                            class="current">2 to 4</span> of 6</div>
                    <div id="tns2-mw" class="tns-ovh">
                        <div class="tns-inner" id="tns2-iw">
                            <div class="tiny-home-slide-three  tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal"
                                id="tns2" style="transform: translate3d(-16.6667%, 0px, 0px);">
                                <div class="tiny-slide tns-item" id="tns2-item0" aria-hidden="true" tabindex="-1">
                                    <div
                                        class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                                        <div class="relative">
                                            <img src="assets/images/property/1.jpg" alt="">

                                            <div class="absolute top-4 end-4">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                                        class="mdi mdi-heart mdi-18px"></i></a>
                                            </div>
                                        </div>

                                        <div class="p-6">
                                            <div class="pb-6">
                                                <a href="property-detail"
                                                    class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765
                                                    Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                                            </div>

                                            <ul
                                                class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                                <li class="flex items-center me-4">
                                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    <span>8000sqf</span>
                                                </li>

                                                <li class="flex items-center me-4">
                                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    {{-- <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i> --}}
                                                    <span>4 Beds</span>
                                                </li>

                                                <li class="flex items-center">
                                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    {{-- <i class="uil uil-bath text-2xl me-2 text-green-600"></i> --}}
                                                    <span>4 Baths</span>
                                                </li>
                                            </ul>

                                            <ul class="pt-6 flex justify-between items-center list-none">
                                                <li>
                                                    <span class="text-slate-400">Price</span>
                                                    <p class="text-lg font-medium">fcfa5000</p>
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
                                    </div>
                                    <!--end property content-->
                                </div>
                                <div class="tiny-slide tns-item" id="tns2-item0" aria-hidden="true" tabindex="-1">
                                    <div
                                        class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                                        <div class="relative">
                                            <img src="assets/images/property/1.jpg" alt="">

                                            <div class="absolute top-4 end-4">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                                        class="mdi mdi-heart mdi-18px"></i></a>
                                            </div>
                                        </div>

                                        <div class="p-6">
                                            <div class="pb-6">
                                                <a href="property-detail"
                                                    class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765
                                                    Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                                            </div>

                                            <ul
                                                class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                                <li class="flex items-center me-4">
                                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    <span>8000sqf</span>
                                                </li>

                                                <li class="flex items-center me-4">
                                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    {{-- <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i> --}}
                                                    <span>4 Beds</span>
                                                </li>

                                                <li class="flex items-center">
                                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    {{-- <i class="uil uil-bath text-2xl me-2 text-green-600"></i> --}}
                                                    <span>4 Baths</span>
                                                </li>
                                            </ul>

                                            <ul class="pt-6 flex justify-between items-center list-none">
                                                <li>
                                                    <span class="text-slate-400">Price</span>
                                                    <p class="text-lg font-medium">fcfa5000</p>
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
                                    </div>
                                    <!--end property content-->
                                </div>
                                <div class="tiny-slide tns-item" id="tns2-item0" aria-hidden="true" tabindex="-1">
                                    <div
                                        class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                                        <div class="relative">
                                            <img src="assets/images/property/1.jpg" alt="">

                                            <div class="absolute top-4 end-4">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                                        class="mdi mdi-heart mdi-18px"></i></a>
                                            </div>
                                        </div>

                                        <div class="p-6">
                                            <div class="pb-6">
                                                <a href="property-detail"
                                                    class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765
                                                    Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                                            </div>

                                            <ul
                                                class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                                <li class="flex items-center me-4">
                                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    <span>8000sqf</span>
                                                </li>

                                                <li class="flex items-center me-4">
                                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    {{-- <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i> --}}
                                                    <span>4 Beds</span>
                                                </li>

                                                <li class="flex items-center">
                                                    <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    {{-- <i class="uil uil-bath text-2xl me-2 text-green-600"></i> --}}
                                                    <span>4 Baths</span>
                                                </li>
                                            </ul>

                                            <ul class="pt-6 flex justify-between items-center list-none">
                                                <li>
                                                    <span class="text-slate-400">Price</span>
                                                    <p class="text-lg font-medium">fcfa5000</p>
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
                                    </div>
                                    <!--end property content-->
                                </div>

                                <div class="tiny-slide tns-item tns-slide-active" id="tns2-item1">
                                    <div
                                        class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                                        <div class="relative">
                                            <img src="assets/images/property/2.jpg" alt="">

                                            <div class="absolute top-4 end-4">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                                        class="mdi mdi-heart mdi-18px"></i></a>
                                            </div>
                                        </div>

                                        <div class="p-6">
                                            <div class="pb-6">
                                                <a href="property-detail"
                                                    class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">59345
                                                    STONEWALL DR, Plaquemine, LA 70764, USA</a>
                                            </div>

                                            <ul
                                                class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                                <li class="flex items-center me-4">
                                                    <i
                                                        class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    <span>8000sqf</span>
                                                </li>

                                                <li class="flex items-center me-4">
                                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                                    <span>4 Beds</span>
                                                </li>

                                                <li class="flex items-center">
                                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                                    <span>4 Baths</span>
                                                </li>
                                            </ul>

                                            <ul class="pt-6 flex justify-between items-center list-none">
                                                <li>
                                                    <span class="text-slate-400">Price</span>
                                                    <p class="text-lg font-medium">fcfa5000</p>
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
                                    </div>
                                    <!--end property content-->
                                </div>
                                <div class="tiny-slide tns-item tns-slide-active" id="tns2-item1">
                                    <div
                                        class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                                        <div class="relative">
                                            <img src="assets/images/property/2.jpg" alt="">

                                            <div class="absolute top-4 end-4">
                                                <a href="javascript:void(0)"
                                                    class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                                        class="mdi mdi-heart mdi-18px"></i></a>
                                            </div>
                                        </div>

                                        <div class="p-6">
                                            <div class="pb-6">
                                                <a href="property-detail"
                                                    class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">59345
                                                    STONEWALL DR, Plaquemine, LA 70764, USA</a>
                                            </div>

                                            <ul
                                                class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                                <li class="flex items-center me-4">
                                                    <i
                                                        class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                                    <span>8000sqf</span>
                                                </li>

                                                <li class="flex items-center me-4">
                                                    <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                                    <span>4 Beds</span>
                                                </li>

                                                <li class="flex items-center">
                                                    <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                                    <span>4 Baths</span>
                                                </li>
                                            </ul>

                                            <ul class="pt-6 flex justify-between items-center list-none">
                                                <li>
                                                    <span class="text-slate-400">Price</span>
                                                    <p class="text-lg font-medium">fcfa5000</p>
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
                                    </div>
                                    <!--end property content-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--en grid-->
            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div
                    class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <div class="relative">
                        <img src="assets/images/property/1.jpg" alt="">

                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)"
                                class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                    class="mdi mdi-heart mdi-18px"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail"
                                class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765
                                Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                        </div>

                        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                            <li class="flex items-center me-4">
                                <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                <span>8000sqf</span>
                            </li>

                            <li class="flex items-center me-4">
                                {{-- <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i> --}}
                                <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                <span>4 Beds</span>
                            </li>

                            <li class="flex items-center">
                                {{-- <i class="uil uil-bath text-2xl me-2 text-green-600"></i> --}}
                                <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                <span>4 Baths</span>
                            </li>
                        </ul>

                        <ul class="pt-6 flex justify-between items-center list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">fcfa5000</p>
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
                </div>
                <div
                    class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <div class="relative">
                        <img src="assets/images/property/1.jpg" alt="">

                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)"
                                class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                    class="mdi mdi-heart mdi-18px"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail"
                                class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765
                                Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                        </div>

                        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                            <li class="flex items-center me-4">
                                <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                <span>8000sqf</span>
                            </li>

                            <li class="flex items-center me-4">
                                {{-- <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i> --}}
                                <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                <span>4 Beds</span>
                            </li>

                            <li class="flex items-center">
                                {{-- <i class="uil uil-bath text-2xl me-2 text-green-600"></i> --}}
                                <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                <span>4 Baths</span>
                            </li>
                        </ul>

                        <ul class="pt-6 flex justify-between items-center list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">fcfa5000</p>
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
                </div>
                <div
                    class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                    <div class="relative">
                        <img src="assets/images/property/1.jpg" alt="">

                        <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)"
                                class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                    class="mdi mdi-heart mdi-18px"></i></a>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="pb-6">
                            <a href="property-detail"
                                class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765
                                Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                        </div>

                        <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                            <li class="flex items-center me-4">
                                <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                <span>8000sqf</span>
                            </li>

                            <li class="flex items-center me-4">
                                {{-- <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i> --}}
                                <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                <span>4 Beds</span>
                            </li>

                            <li class="flex items-center">
                                {{-- <i class="uil uil-bath text-2xl me-2 text-green-600"></i> --}}
                                <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                <span>4 Baths</span>
                            </li>
                        </ul>

                        <ul class="pt-6 flex justify-between items-center list-none">
                            <li>
                                <span class="text-slate-400">Price</span>
                                <p class="text-lg font-medium">fcfa5000</p>
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
                </div>
                <!--end property content-->
            </div>
            <!--en grid-->
        </div>
        <!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Ce qu'en disent nos clients ?</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Une plateforme idéale pour acheter.</p>
            </div>
            <!--end grid-->

            <div class="flex justify-center relative mt-16">
                <div class="relative lg:w-1/3 md:w-1/2 w-full">
                    <div class="absolute -top-20 md:-start-24 -start-0">
                        <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                    </div>

                    <div class="absolute bottom-28 md:-end-24 -end-0">
                        <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                    </div>

                    <div class="tiny-single-item">
                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " OBP made the processes so easy. OBP
                                    instantly increased the amount of interest and ultimately saved us over fcfa10,000. "
                                </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/01.jpg"
                                        class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                                        alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " I highly recommend OBP as the new way to
                                    sell your home "by owner". My home sold in 24 hours for the asking price. Best fcfa400
                                    you could spend to sell your home. " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/02.jpg"
                                        class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                                        alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " My favorite part about selling my home
                                    myself was that we got to meet and get to know the people personally. This made it
                                    so much more enjoyable! " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/03.jpg"
                                        class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                                        alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " Great experience all around! Easy to use
                                    and efficient. " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/04.jpg"
                                        class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                                        alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " OBP made selling my home easy and stress
                                    free. They went above and beyond what is expected. " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/05.jpg"
                                        class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                                        alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center">
                                <p class="text-xl text-slate-400 italic"> " OBP is fair priced, quick to respond,
                                    and easy to use. I highly recommend their services! " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="assets/images/client/06.jpg"
                                        class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                                        alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container lg:mt-24 mt-16">
            @include('include.3sectioncontainer')
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- End -->

    <!-- Start Footer -->
    <x-footer></x-footer>
    <!--end footer-->
    <!-- End Footer -->
    <!-- Switcher -->
    <div class="fixed top-1/4 -left-2 z-3">
        <span class="relative inline-block rotate-90">
            <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
            <label
                class="label bg-slate-900 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8"
                for="chk">
                <i class="uil uil-moon text-[20px] text-yellow-500 mt-1"></i>
                <i class="uil uil-sun text-[20px] text-yellow-500 mt-1"></i>
                <span
                    class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] start-[2px] w-7 h-7"></span>
            </label>
        </span>
    </div>
    <!-- Switcher -->

    <!-- LTR & RTL Mode Code -->
    <div class="fixed top-[40%] -left-3 z-50">
        <a href="#" id="switchRtl">
            <span
                class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold rtl:block ltr:hidden">LTR</span>
            <span
                class="py-1 px-3 relative inline-block rounded-b-md -rotate-90 bg-white dark:bg-slate-900 shadow-md dark:shadow dark:shadow-gray-800 font-semibold ltr:block rtl:hidden">RTL</span>
        </a>
    </div>
    <!-- LTR & RTL Mode Code -->

    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top"
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-red-600 text-white justify-center items-center"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    <x-script></x-script>
</body>
</html>
