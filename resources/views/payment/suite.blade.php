<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<x-head title="One Build Plus - Dashboard" pathManager={{$path_manager}}></x-head>

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
    <section class="md:h-screen py-36 flex items-center relative overflow-hidden zoom-image">
        <div
            class="absolute inset-0 image-wrap z-1 bg-[url('../../{{$path_manager}}assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black z-2" id="particles-snow"></div>
        <div class="container z-3">
            <div class="flex justify-center">
                <div
                    class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                    <a href="{{route('home')}}"><img src="{{$path_manager}}assets/images/logo-dark.png" class="mx-auto" alt=""></a>

                    <div class="text-center">
                        <h5 class="my-6 text-xl font-semibold">Formulaire paiements</h5>
                    </div>

                    <form class="ltr:text-left rtl:text-right" method="POST" action="{{ route('paymnt.form2') }}">
                        @csrf
                        <div class="grid grid-cols-1">
                            <input type="hidden" name="lastName" value="{{ Session::get('user_lastName') }}">
                            <input type="hidden" name="firstName" value="{{ Session::get('user_firstName') }}">
                            <input type="hidden" name="payment_frequency"
                                value="
                            {{ Session::get('payment_frequency') }}
                            ">
                            <input type="hidden" name="id" value="{{ Session::get('prod_id') }}">
                            <div class="mb-4">
                                <label class="font-medium" for="LoginEmail">prix:</label>
                                <input id="input_price" type="number" class="form-input mt-3" name="price"
                                    value="{{ Session::get('prod_price') }}" readonly required>
                            </div>
                            <div class="mb-4">
                                <label>
                                    <h1>option supplémentaire</h1>
                                </label>
                            </div>



                            <div class="mb-4">
                                <label>
                                    <input type="checkbox" id="input_registration_andf">
                                    <input type="hidden" id="input_hidden_registration_andf" value="0"
                                        name="registration_andf"> <span> Enrégistrement ANDF </span></label>
                            </div>
                            <div class="mb-4">
                                <label>
                                    <input type="checkbox" id="input_formality_fees">
                                    <input type="hidden" id="input_hidden_formality_fees" value="0"
                                        name="formality_fees"> <span> Frais de
                                        formalité </span></label>
                            </div>
                            <div class="mb-4">
                                <label>
                                    <input type="checkbox" id="input_notary_fees">
                                    <input type="hidden" id="input_hidden_notary_fees" value="0"
                                        name="notary_fees">
                                    <span> Frais notarié
                                    </span></label>
                            </div>

                            <div class="mb-4">
                                <label class="font-medium">Montant Total:</label>
{{-- @dd() --}}
                                @if (Session::get('prod_price') < Session::get('montant'))
                                    <input id="montant_total" type="number" name="montant" class="form-input mt-3"
                                        value="{{ Session::get('montant') }}" readonly required>
                                @endif

                                @if (Session::get('prod_price') >= Session::get('montant'))
                                    <input id="montant_total" type="number" name="montant" class="form-input mt-3"
                                        value="{{ Session::get('prod_price') }}" readonly required>
                                @endif
                            </div>

                            <div class="flex">
                                <div class="p-1 w-1/2">
                                    <a href="{{ route('form.one') }}"
                                        class="btn bg-red-600 hover:bg-green-700 text-white rounded-md w-full">précédant</a>
                                </div>
                                <div class="p-1 w-1/2">
                                    <button
                                        class="btn bg-red-600 hover:bg-green-700 text-white rounded-md w-full">suivant</button>
                                </div>
                            </div>

                        </div>

                </div>
                </form>
            </div>
        </div>
        </div>
    </section><!--end section -->



    <div class="fixed bottom-3 end-3 z-10">
        <a href="#" class="back-button btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full"><i
                data-feather="arrow-left" class="h-4 w-4"></i></a>
    </div>

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

    <!-- JAVASCRIPTS -->
    @include('include.scriptForPagePayment')
    <!-- JAVASCRIPTS -->
</body>

</html>
