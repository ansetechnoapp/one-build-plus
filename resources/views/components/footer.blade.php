<footer class="relative bg-slate-900 dark:bg-slate-800 mt-24">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="relative py-16">
                <!-- Subscribe -->
                <div class="relative w-full">
                    <div
                        class="relative -top-40 bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700 overflow-hidden">
                        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                            <div class="ltr:md:text-left rtl:md:text-right text-center z-1">
                                <h3
                                    class="md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                                    S'abonner à la newsletter !</h3>
                                <p class="text-slate-400 max-w-xl mx-auto">Abonnez-vous pour recevoir les dernières mises à jour et informations.</p>
                            </div>

                            <div class="subcribe-form z-1">
                                <form class="relative max-w-lg md:ms-auto" method="POST" action="{{ route('subscribe') }}">
                                    <input type="email" id="subcribe" name="emailsubcribe"
                                        class="rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700"
                                        placeholder="Enter your email :">
                                    <button type="submit" disabled
                                        class="btn bg-red-600 hover:bg-green-700 text-white rounded-full">S'abonner
                                    </button>
                                </form>
                                <!--end form-->
                            </div>
                        </div>

                        <div class="absolute -top-5 -start-5">
                            <div
                                class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45">
                            </div>
                        </div>

                        <div class="absolute -bottom-5 -end-5">
                            <div
                                class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90">
                            </div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] -mt-24">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img src="assets/images/logo-light.png" alt="">
                            </a>
                            <p class="mt-6 text-gray-300">Une plateforme idéale pour acheter ou vendre un bien immobilier sécurisé.</p>

                        </div>
                        <!--end col-->

                        <div class="lg:col-span-2 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="aboutus"
                                        class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> A propos de nous</a></li>
                                <li class="mt-[10px]"><a href="auth-login"
                                        class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Login</a></li>
                            </ul>
                        </div>
                        <!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                            <ul class="list-none footer-list mt-6">
                                <li><a href="terms"
                                        class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Conditions d'utilisation</a></li>

                                <li class="mt-[10px]"><a href="privacy"
                                        class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Politique de confidentialité</a></li>

                                
                                <li class="mt-[10px]"><a href="contact"
                                        class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Contact</a></li>
                            </ul>
                        </div>
                        <!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Coordonnées</h5>


                           

                            <div class="flex mt-6">
                                <i data-feather="mail" class="w-5 h-5 text-green-600 me-3"></i>
                                <div class="">
                                    <a href="mailto:{{env('APP_EMAIL')}}"
                                        class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">{{env('APP_EMAIL')}}</a>
                                </div>
                            </div>

                            <div class="flex mt-6">
                                <i data-feather="phone" class="w-5 h-5 text-green-600 me-3"></i>
                                <div class="">
                                    <a href="tel:{{env('APP_TEL')}}"
                                        class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">{{env('APP_TEL')}}</a>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end grid-->
                </div>
                <!-- Subscribe -->
            </div>
        </div>
    </div>
    <!--end container-->

    <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
        <div class="container text-center">
            <div class="grid md:grid-cols-2 items-center gap-6">
                <div class="ltr:md:text-left rtl:md:text-right text-center">
                    <p class="mb-0 text-gray-300">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> <i class="mdi mdi-heart text-red-600"></i> ONE BUILD PLUS
                        <a href="#" target="_blank" class="text-reset">(OBP)</a>
                    </p>
                </div>

                <ul class="list-none ltr:md:text-right rtl:md:text-left text-center">
                    <li class="inline"><a href="#" target="_blank"
                        class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-red-600 dark:hover:bg-red-600"><i
                            data-feather="facebook" class="h-4 w-4"></i></a></li>
                </ul>
                <!--end icon-->
            </div>
            <!--end grid-->
        </div>
        <!--end container-->
    </div>
</footer>