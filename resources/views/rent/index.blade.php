<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<x-head title="One Build Plus - Dashboard" pathManager={{$path_manager}}></x-head>

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
    <x-navbar></x-navbar>
    <!--end header-->
    <!-- End Navbar -->

    <!-- Start Hero -->
    <section
        class="relative table w-full py-32 lg:py-36 bg-[url('../../{{$path_manager}}assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Trouvez le
                    logement de vos rêves</h3>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <div class="relative">
        <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>

    @include('include.form_search_rent')

    <!--end container-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Tous nos logements
                    disponibles</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Une plateforme idéale pour acheter et vendre.</p>
            </div>
            <!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                @isset($allprod)
                    @foreach ($allprod as $data)
                        <div
                            class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                            <div class="relative">

                                @if ($data->img)
                                            <img style="height: 265px !important" src="{{ asset('storage/' . (isset($data->img->main_image) ? $data->img->main_image : '')) }}"
                                                alt="Image du produit">
                                        @else
                                            Aucune image disponible
                                        @endif

                                {{-- <div class="absolute top-4 end-4">
                            <a href="javascript:void(0)"
                                class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i
                                    class="mdi mdi-heart mdi-18px"></i></a>
                        </div> --}}
                            </div>

                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="{{ route('property_detail', ['id' => $data->id, 'price' => $data->price]) }}"
                                        class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">
                                        {{ $data->address }}</a>
                                </div>

                                <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                    <li class="flex items-center me-4">
                                        <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                        <span>{{ $data->communes }}</span>
                                    </li>

                                    <li class="flex items-center me-4">
                                        <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                        <span>{{ $data->borough }}</span>
                                    </li>

                                    <li class="flex items-center">
                                        <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                        <span>{{ $data->area }}</span>
                                    </li>
                                </ul>

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Prix</span>
                                        <p class="text-lg font-medium">{{ $data->price }} fcfa</p>
                                    </li>

                                    {{-- <li>
                                        <span class="text-slate-400">Evaluation</span>
                                        <ul class="text-lg font-medium text-amber-400 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline text-black dark:text-white">5.0(30)</li>
                                        </ul>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    @endforeach
                @endisset

                <!--end property content-->
            </div>
            <!--en grid-->

            {{-- <div class="md:flex justify-center text-center mt-6">
                <div class="md:w-full">
                    <a href="grid.html"
                        class="btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500">Voir
                        plus de propriétés <i class="uil uil-arrow-right ms-1"></i></a>
                </div>
            </div> --}}
        </div>
        <!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Avantages pour
                    l'acheteur
                </h3>

                <p class="text-slate-400 max-w-xl mx-auto">Une plateforme idéale pour acheter et vendre.</p>
            </div>
            <!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <!-- Content -->
                <div
                    class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-estate"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Consultation gratuite</h5>
                        <p class="text-slate-400 mt-3">Si la distribution des lettres et des "mots" est aléatoire, le
                            lecteur ne sera pas distrait par le fait d'avoir à faire des choix. ne sera pas distrait de
                            faire.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div
                    class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-bag"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Programmes de rabais pour les acheteurs</h5>
                        <p class="text-slate-400 mt-3">Si la distribution des lettres et des "mots" est aléatoire, le
                            lecteur ne sera pas distrait par le fait d'avoir à faire des choix. ne sera pas distrait de
                            faire.</p>
                    </div>
                </div>
                <!-- Content -->

                <!-- Content -->
                <div
                    class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-key-skeleton"></i>
                        </div>
                    </div>

                    <div class="mt-6">
                        <h5 class="text-xl font-medium">Économiser de l'argent</h5>
                        <p class="text-slate-400 mt-3">Si la distribution des lettres et des "mots" est aléatoire, le
                            lecteur ne sera pas distrait par le fait d'avoir à faire des choix. ne sera pas distrait de
                            faire.</p>
                    </div>
                </div>
                <!-- Content -->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-4 md:col-span-5">
                    <div class="sticky top-20">
                        <ul class="flex-column text-center p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md"
                            id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-base font-medium rounded-md w-full text-white hover:text-green-600 transition-all duration-500 ease-in-out"
                                    id="letter-tab" data-tabs-target="#letter" type="button" role="tab"
                                    aria-controls="letter" aria-selected="true">Contactez OBP pour la vente de votre parcelle</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-base font-medium rounded-md w-full text-white mt-3 transition-all duration-500 ease-in-out"
                                    id="schedule-tab" data-tabs-target="#schedule" type="button" role="tab"
                                    aria-controls="schedule" aria-selected="false">Planification de visite</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-base font-medium rounded-md w-full text-white mt-3 transition-all duration-500 ease-in-out"
                                    id="offer-tab" data-tabs-target="#offer" type="button" role="tab"
                                    aria-controls="offer" aria-selected="false">OBP peut décider de payer ou non votre parcelle</button>
                            </li>
                            <li role="presentation">
                                <button
                                    class="px-4 py-2 text-base font-medium rounded-md w-full text-white mt-3 transition-all duration-500 ease-in-out"
                                    id="inspection-tab" data-tabs-target="#inspection" type="button" role="tab"
                                    aria-controls="inspection" aria-selected="false">Paiement de votre domaine</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="lg:col-span-8 md:col-span-7">
                    <div id="myTabContent">
                        <div class="" id="letter" role="tabpanel" aria-labelledby="letter-tab">
                            <img src="{{$path_manager}}assets/images/svg/Agent_Monochromatic.svg" alt="">
                            <div class="mt-6">
                                <h5 class="font-medium text-xl">Contactez OBP pour la vente de votre parcelle</h5>
                                <p class="text-slate-400 mt-3">OBP est là pour faciliter la vente de votre parcelle. Contactez-nous dès maintenant pour discuter des détails de votre propriété. Notre équipe d'experts est prête à vous guider tout au long du processus, vous assurant une expérience transparente et efficace.</p>
                            </div>
                        </div>
                        <div class="hidden " id="schedule" role="tabpanel" aria-labelledby="schedule-tab">
                            <img src="{{$path_manager}}assets/images/svg/presentation_Flatline.svg" alt="">
                            <div class="mt-6">
                                <h5 class="font-medium text-xl">Planification de visite</h5>
                                <p class="text-slate-400 mt-3">Une fois que nous avons discuté des détails de votre parcelle, planifions une visite sur place. C'est l'occasion idéale pour nos experts de découvrir les caractéristiques uniques de votre propriété et de répondre à toutes vos questions. Nous cherchons à comprendre chaque aspect pour présenter au mieux votre bien.</p>
                            </div>
                        </div>
                        <div class="hidden " id="offer" role="tabpanel" aria-labelledby="offer-tab">
                            <img src="{{$path_manager}}assets/images/svg/session_Flatline.svg" alt="">
                            <div class="mt-6">
                                <h5 class="font-medium text-xl">OBP peut décider de payer ou non votre parcelle</h5>
                                <p class="text-slate-400 mt-3">Après la visite, notre équipe évaluera la parcelle en fonction de plusieurs critères. OBP peut décider d'acquérir votre propriété en fonction de sa pertinence pour notre portefeuille immobilier. Soyez assuré que nous traiterons chaque proposition avec professionnalisme et transparence.</p>
                            </div>
                        </div>
                        <div class="hidden " id="inspection" role="tabpanel" aria-labelledby="inspection-tab">
                            <img src="{{$path_manager}}assets/images/svg/Startup_Flatline.svg" alt="">
                            <div class="mt-6">
                                <h5 class="font-medium text-xl">Paiement de votre domaine</h5>
                                <p class="text-slate-400 mt-3">Si nous décidons d'acquérir votre parcelle, le processus de paiement sera rapidement mis en place. Nous travaillerons avec vous pour finaliser les détails financiers de manière efficace et sécurisée. Notre engagement est de garantir une transaction fluide et équitable pour toutes les parties impliquées.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
        <!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 text-center">
                <h3
                    class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                    Vous avez des questions ? Prenez contact avec nous !</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Une plateforme idéale pour acheter et vendre.</p>

                <div class="mt-6">
                    <a href="contact.html" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md"><i
                            class="uil uil-phone align-middle me-2"></i> Contactez-nous</a>
                </div>
            </div>
            <!--end grid-->
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
        class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-green-600 text-white justify-center items-center"><i
            class="uil uil-arrow-up"></i></a>
    <!-- Back to top -->

    <!-- JAVASCRIPTS -->
    <script src="{{$path_manager}}assets/libs/tobii/js/tobii.min.js"></script>
    <script src="{{$path_manager}}assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{$path_manager}}assets/js/plugins.init.js"></script>
    <script src="{{$path_manager}}assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>
