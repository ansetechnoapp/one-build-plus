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
    <section
        class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">A propos de one
                    build plus</h3>
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
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                @include('include.1sectioncontainer')
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            @include('include.2sectioncontainer')
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start CTA -->
    <section class="relative py-24 bg-[url('../../assets/images/bg/01.html')] bg-no-repeat bg-center bg-fixed bg-cover">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="container">
            <div class="grid lg:grid-cols-12 grid-cols-1 md:text-left text-center justify-center">
                <div class="lg:col-start-2 lg:col-span-10">
                    <div class="grid md:grid-cols-3 grid-cols-1 items-center">

                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value"
                                    data-target="1548">1010</span>+</h1>
                            <h5 class="counter-head text-white text-lg font-medium">Les propriétés se vendent</h5>
                        </div><!--end counter box-->


                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value"
                                    data-target="25">2</span>+</h1>
                            <h5 class="counter-head text-white text-lg font-medium">Prix obtenu</h5>
                        </div><!--end counter box-->


                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value"
                                    data-target="9">0</span>+</h1>
                            <h5 class="counter-head text-white text-lg font-medium">Années d'expérience</h5>
                        </div><!--end counter box-->
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End CTA -->

    <!-- Start -->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Rencontrez l'équipe
                    des agents</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Une grande plateforme pour acheter, vendre.</p>
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">

                @isset($membersOBP)
                    @foreach ($membersOBP as $item)
                        <div class="lg:col-span-3 md:col-span-6">
                            <div class="group text-center">
                                <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                                    @if ($item->img)
                                        <img 
                                            src="{{ asset('storage/' . (isset($item->img) ? $item->img : '')) }}">
                                    @else
                                        <img 
                                            src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-1.png">
                                            @endif
                                        <div
                                            class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out">
                                        </div>

                                        <ul
                                            class="list-none absolute start-0 end-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                            <li class="inline"><a href="#"
                                                    class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i
                                                        data-feather="facebook" class="h-4 w-4"></i></a></li>
                                            <li class="inline"><a href="#"
                                                    class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i
                                                        data-feather="instagram" class="h-4 w-4"></i></a></li>
                                            <li class="inline"><a href="#"
                                                    class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white"><i
                                                        data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                        </ul><!--end icon-->
                                </div>

                                <div class="content mt-3">
                                    <a href="#"
                                        class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out">{{ $item->lastName }}
                                        {{ $item->firstName }}</a>
                                    <p class="text-slate-400">{{ $item->Profession }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endisset
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Ce que disent nos
                    clients ?</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Une plateforme idéale pour acheter, vendre.</p>
            </div><!--end grid-->

            <div class="flex justify-center relative mt-8">
                <div class="relative w-full">
                    <div class="tiny-three-item">
                        @isset($selectCommment)
                            @foreach ($selectCommment as $item)
                                <div class="tiny-slide">
                                    <div class="text-center mx-3">
                                        <p class="text-lg text-slate-400 italic"> " {{ $item->Message }}. " </p>

                                        <div class="text-center mt-5">
                                            {{-- <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                            </ul> --}}

                                            <img src="assets/images/client/01.jpg"
                                                class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto"
                                                alt="">
                                            <h6 class="mt-2 fw-semibold">{{ $item->user->lastName }}
                                                {{ $item->user->firstName }}</h6>
                                            <span class="text-slate-400 text-sm">{{ $item->user->Profession }}</span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endisset

                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            @include('include.3sectioncontainer')
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
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-green-600 text-white justify-center items-center"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

<!-- Mirrored from shreethemes.in/OBP/layouts/aboutus.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jul 2023 15:53:11 GMT -->

</html>
