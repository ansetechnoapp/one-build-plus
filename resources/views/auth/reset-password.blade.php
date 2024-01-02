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
    <section class="md:h-screen py-36 flex items-center relative overflow-hidden zoom-image">
        <div
            class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover">
        </div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black z-2" id="particles-snow"></div>
        <div class="container z-3">
            <div class="flex justify-center">
                <div
                    class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                    <a href="index.html"><img src="assets/images/logo-dark.png" class="mx-auto" alt=""></a>

                    <div class="text-center">
                        <h5 class="my-6 text-xl font-semibold">Réinitialiser votre mot de passe</h5>
                    </div>
                    <div class="grid grid-cols-1">
                        <p class="text-slate-400 mb-6">Veuillez saisir votre adresse électronique. Vous recevrez un lien
                            pour créer un nouveau mot de passe par courriel.</p>
                        @if ($errors->any())
                            <div>
                                <strong>Whoops!</strong> Il y a eu un problème avec vos entrées.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form class="ltr:text-left rtl:text-right" action="{{ route('password.update') }}"
                            method="POST">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="grid grid-cols-1">
                                <input id="LoginEmail" type="hidden" name="email" class="form-input mt-3"
                                    value="{{ $email }}" required>
                                <div class="mb-4">
                                    <label class="font-medium" for="LoginEmail">Nouveau Mot de passe:</label>
                                    <input id="LoginEmail" type="password" name="password" class="form-input mt-3"
                                        placeholder="mot de passe" required>
                                    @if ($errors->has('password'))
                                        <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <label class="font-medium" for="LoginEmail">retaper le mot de passe:</label>
                                    <input id="LoginEmail" type="password" name="password_confirmation"
                                        class="form-input mt-3" placeholder="retapez" required>
                                    @if ($errors->has('password_confirmation'))
                                        <div class="alert alert-danger">{{ $errors->first('password_confirmation') }}
                                        </div>
                                    @endif
                                </div>

                                <div class="mb-4">
                                    <button type="submit"
                                        class="btn bg-red-600 hover:bg-green-700 rounded-md w-full">Envoyer</button>
                                    @if ($errors->has('status'))
                                        <div class="alert alert-danger">{{ $errors->first('status') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
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
    <script src="assets/libs/particles.js/particles.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

<!-- Mirrored from shreethemes.in/OBP/layouts/auth-re-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jul 2023 15:53:32 GMT -->

</html>
