<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>one build plus - Nous garantissons la sécurité de vos biens immobiliers et éducatifs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta content="Real Estate Website Landing Page" name="description" />
    <meta content="Real Estate, buy, sell, Rent, tailwind Css" name="keywords" />
    <meta name="author" content="Shreethemes" />
    <meta name="website" content="https://shreethemes.in/" />
    <meta name="email" content="support@shreethemes.in" />
    <meta name="version" content="1.4.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

   
    <link rel="shortcut icon" href="assets/images/logo-dark.ico" />

    <!-- Css -->
    <link href="{{$sub_path_admin}}assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <link href="{{$sub_path_admin}}assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="{{$sub_path_admin}}assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="{{$sub_path_admin}}assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
    <link href="{{$sub_path_admin}}assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{$sub_path_admin}}assets/css/tailwind.css" />
    <link rel="stylesheet" href="{{$sub_path_admin}}assets/css/style.css" />

</head>

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
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Questions
                    fréquemment posées</h3>
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

    <!-- Start Section-->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-4 md:col-span-5">
                    <div class="rounded-md shadow dark:shadow-gray-700 p-6 sticky top-20">

                        <ul class="list-unstyled sidebar-nav mb-0 py-0" id="navmenu-nav">
                            @isset($uniqueTitles)
                                @foreach ($uniqueTitles as $data)
                                    <li class="navbar-item p-0"><a href="#generalfaq{{ $data->id }}"
                                            class="text-base font-medium navbar-link">{{ $data->title }}</a></li>
                                @endforeach
                            @endisset
                        </ul>

                    </div>
                </div>
                <div class="lg:col-span-8 md:col-span-7">
                    @isset($listFaq)
                        {!! $listFaq !!}
                    @endisset
                </div>
            </div><!--end <grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16" style="grid-column: span 20 / span 10 !important;">
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
    <x-modal title="Suppression"
        message="Sélectionnez 'Supprimmer' ci-dessous si vous êtes prêt à supprimmer l'élément." btn1="Supprimer"
        btn2="Annuler"></x-modal>
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
    <script src="{{$sub_path_admin}}assets/libs/gumshoejs/gumshoe.polyfills.min.js"></script>
    <script src="{{$sub_path_admin}}assets/libs/tobii/js/tobii.min.js"></script>
    <script src="{{$sub_path_admin}}assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{$sub_path_admin}}assets/js/plugins.init.js"></script>
    <script src="{{$sub_path_admin}}assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>
