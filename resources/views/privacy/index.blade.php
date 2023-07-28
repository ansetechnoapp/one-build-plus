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
                    <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Politique de confidentialité</h3>
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

        <!-- Start Terms & Conditions -->
        <section class="relative lg:py-24 py-16">
            <div class="container">
                <div class="md:flex justify-center">
                    <div class="md:w-3/4">
                        <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <h5 class="text-xl font-medium mb-4">Vue d'ensemble :</h5>
                            <p class="text-slate-400">Il semble que seuls des fragments du texte original subsistent dans les textes Lorem Ipsum utilisés aujourd'hui. On peut supposer qu'au fil du temps, certaines lettres ont été ajoutées ou supprimées à divers endroits du texte.</p>
                            <p class="text-slate-400">Dans les années 1960, le texte est soudain connu au-delà du cercle professionnel des typographes et des maquettistes lorsqu'il est utilisé pour les feuilles Letraset (lettres adhésives sur film transparent, populaires jusque dans les années 1980). Des versions du texte ont ensuite été incluses dans des programmes de PAO tels que PageMaker, etc.</p>
                            <p class="text-slate-400">There is now an abundance of readable dummy texts. These are usually used when a text is required purely to fill a space. These alternatives to the classic Lorem Ipsum texts are often amusing and tell short, funny or nonsensical stories.</p>
                        
                            <h5 class="text-xl font-medium mb-4 mt-8">Nous utilisons vos informations pour :</h5>
                            <ul class="list-unstyled text-slate-400 mt-4">
                                <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle me-2"></i>Solutions de marketing numérique pour demain</li>
                                <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle me-2"></i>Notre agence de marketing talentueuse et expérimentée</li>
                                <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle me-2"></i>Créez votre propre peau en fonction de votre marque</li>
                                <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle me-2"></i>Solutions de marketing numérique pour demain</li>
                                <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle me-2"></i>Notre agence de marketing talentueuse et expérimentée</li>
                                <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle me-2"></i>Créez votre propre peau en fonction de votre marque</li>
                            </ul>

                            <h5 class="text-xl font-medium mb-4 mt-8">Informations fournies volontairement :</h5>
                            <p class="text-slate-400">Dans les années 1960, le texte est soudain connu au-delà du cercle professionnel des typographes et des maquettistes lorsqu'il est utilisé pour les feuilles Letraset (lettres adhésives sur film transparent, populaires jusque dans les années 1980). Des versions du texte ont ensuite été incluses dans des programmes de PAO tels que PageMaker, etc.</p>

                            <div class="mt-8">
                                <a href="#" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">Imprimer</a>
                            </div>
                        </div>
                    </div><!--end -->
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End Terms & Conditions -->

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
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>

</html>