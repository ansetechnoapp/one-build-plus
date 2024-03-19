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
    <section class="md:h-screen py-36 flex items-center relative overflow-hidden zoom-image">
        <div
            class="absolute inset-0 image-wrap z-1 bg-[url('../../{{$path_manager}}assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black z-2" id="particles-snow"></div>
        <div class="container z-3">
            <div class="flex justify-center">
                <div
                    class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                    <a href="{{ route('home') }}"><img src="{{$path_manager}}assets/images/logo-dark.png" class="mx-auto"
                            alt=""></a>
                    <div class="text-center">
                        <h5 class="my-6 text-xl font-semibold">Inscription</h5>
                    </div>
                    <form class="ltr:text-left rtl:text-right" method="POST" action="{{ route('sign.up.step2') }}">
                        @csrf
                        <div class="grid grid-cols-1">
                            <div class="mb-4">
                                <label class="font-medium" for="LoginPassword">Nom:</label>
                                <input id="LoginPassword" name="lastName" type="text" class="form-input mt-2"
                                    placeholder="Nom" value="{{ Session::get('user_lastName') }}" required>
                                    @if ($errors->has('lastName'))
                                    <div class="alert alert-danger">{{ $errors->first('lastName') }}</div>
                                @endif
                            </div>

                            <div class="mb-4">
                                <label class="font-medium" for="LoginPassword">prénom:</label>
                                <input id="LoginPassword" type="text" name="firstName" class="form-input mt-3"
                                    placeholder="prénom" value="{{ Session::get('user_firstName') }}" required>
                                    @if ($errors->has('firstName'))
                                    <div class="alert alert-danger">{{ $errors->first('firstName') }}</div>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="font-semibold" for="LoginEmail">Adresse électronique:</label>
                                <input id="LoginEmail" type="email" class="form-input mt-3"
                                    placeholder="name@example.com" name="email"
                                    value="{{ Session::get('user_email') }}" required>
                                    @if ($errors->has('email'))
                                    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                            {{-- <div class="mb-4">
                                 <div class="flex items-center w-full mb-0">
                                    <input
                                        class="form-checkbox accent-green-600 rounded w-4 h-4 me-2 border border-inherit"
                                        type="checkbox" value="" id="AcceptT&C">
                                    <label class="form-check-label text-slate-400" for="AcceptT&C">I Accept <a
                                            href="#" class="text-green-600">Terms And Condition</a></label>
                                </div> 
                            </div> --}}
                            <div class="flex">
                                <div class="p-1 w-1/2">
                                    <a href="#" class="btn bg-red-600 rounded-md w-full">précédant</a>
                                </div>
                                <div class="p-1 w-1/2">
                                    <button type="submit"
                                        class="btn bg-red-600 hover:bg-green-700 text-white rounded-md w-full">suivant</button>
                                </div>
                            </div>
                            <div class="text-center">
                                <span class="text-slate-400 me-2">vous avez déja un compte ? </span> <a
                                    href="{{ route('auth-login') }}"
                                    class="text-black dark:text-white font-bold">Connexion</a>
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
    <script src="{{$path_manager}}assets/libs/particles.js/particles.js"></script>
    <script src="{{$path_manager}}assets/libs/feather-icons/feather.min.js"></script>
    <script src="{{$path_manager}}assets/js/plugins.init.js"></script>
    <script src="{{$path_manager}}assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>
