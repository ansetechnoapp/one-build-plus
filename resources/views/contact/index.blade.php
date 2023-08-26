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

    <!-- Start Section-->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-7 md:col-span-6">
                    <img src="assets/images/svg/contact.svg" alt="">
                </div>

                <div class="lg:col-span-5 md:col-span-6">
                    <div class="lg:me-5">
                        <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
                            <h3 class="mb-6 text-2xl leading-normal font-medium">Prenez contact avec nous !</h3>

                            <form method="POST" action="{{ route('form.contact') }}" name="myForm"
                                id="myForm"{{--  onsubmit="return validateForm()" --}}>
                                @csrf
                                @if (isset($message))
                                    <p class="mb-0" id="error-msg" style="opacity: 1;">
                                    <div class="alert alert-warning error_message"
                                        style="background-color: rgb(22 163 74 / 12%) !important;color: #000000d9;">
                                        {{ $message }}</div>
                                    </p>
                                @else
                                @endif
                                {{-- <p class="mb-0" id="error-msg"></p> --}}
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <label for="name" class="font-medium">Votre nom :
                                        </label>
                                        <input name="name" id="name" type="text" class="form-input mt-2"
                                            placeholder="votre nom complet :">
                                        @if ($errors->has('name'))
                                            <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                                        @endif
                                    </div>

                                    <div class="lg:col-span-6 mb-5">
                                        <label for="email" class="font-medium">Votre Email :</label>
                                        <input name="email" id="email" type="email" class="form-input mt-2"
                                            placeholder="Votre Email :">
                                        @if ($errors->has('email'))
                                            <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <label for="subject" class="font-medium">Votre question :</label>
                                        <input name="subject" id="subject" class="form-input mt-2"
                                            placeholder="Sujet :">
                                        @if ($errors->has('subject'))
                                            <div class="alert alert-danger">{{ $errors->first('subject') }}</div>
                                        @endif
                                    </div>

                                    <div class="mb-5">
                                        <label for="comments" class="font-medium">Votre commentaire : </label>
                                        <textarea name="comments" id="comments" class="form-input mt-2 textarea" placeholder="Message :"></textarea>
                                        @if ($errors->has('comments'))
                                            <div class="alert alert-danger">{{ $errors->first('comments') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <button class="btn bg-red-600 rounded-md w-full" type="submit">Envoyer le
                                        message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <div class="text-center px-6">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-phone"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Téléphone</h5>
                        <p class="text-slate-400 mt-3">La séquence phraséologique de la est maintenant de sorte que
                            beaucoup de campagne et de bénéfice</p>

                        <div class="mt-5">
                            <a href="tel:+152534-468-854"
                                class="btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500">{{ env('APP_TEL') }}</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-envelope"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium"> Email </h5>
                        <p class="text-slate-400 mt-3">La séquence phraséologique de la est maintenant de sorte que
                            beaucoup de campagne et de bénéfice</p>

                        <div class="mt-5">
                            <a href="{{ env('MAIL_USERNAME') }}"
                                class="btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500">{{ env('MAIL_USERNAME') }}</a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-map-marker"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Lieu de travail</h5>
                        <p class="text-slate-400 mt-3">{{ env('APP_ADDRESS_WORK') }}</p>

                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Section-->

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
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>
