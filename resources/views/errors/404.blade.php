<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

    <x-head></x-head>
    
    <body class="dark:bg-slate-900">
        
        
        <section class="relative bg-green-600/5">
            <div class="container-fluid relative">
                <div class="grid grid-cols-1">
                    <div class="flex flex-col min-h-screen justify-center md:px-10 py-10 px-4">
                        <div class="text-center">
                            <a href="{{route('home')}}"><img src="{{env('APP_URL')}}/assets/images/logo-dark.png" class="mx-auto" alt=""></a>
                        </div>
                        <div class="title-heading text-center my-auto">
                            <img src="assets/images/error.png" class="mx-auto" alt="">
                            <h1 class="mt-3 mb-6 md:text-4xl text-3xl font-bold">Page non trouvée?</h1>
                            <p class="text-slate-400">Oups, c'est embarrassant. <br>  Il semble que la page que vous cherchiez n'ait pas été trouvée.</p>
                            <p class="text-slate-400">Revenir a la page d'accueil. </p><br>
                            
                            <div class="mt-4">
                                <a href="{{route('home')}}" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md"
                                style="background: black;">OBP Accueil</a>
                            </div>
                        </div>
                        <div class="text-center">
                            <p class="mb-0 text-slate-400">© <script>document.write(new Date().getFullYear())</script> One Build Plus.OBP <a href="#" target="_blank" class="text-reset">cotonou,sodjéatimè</a>.</p>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->

        <div class="fixed bottom-3 end-3 z-10">
            <a href="#" class="back-button btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full"><i data-feather="arrow-left" class="h-4 w-4"></i></a>
        </div>
        
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

        <!-- JAVASCRIPTS -->
        <script src="assets/libs/particles.js/particles.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>