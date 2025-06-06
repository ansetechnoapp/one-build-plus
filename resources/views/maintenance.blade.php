<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
<head>
        <meta charset="UTF-8" />
        <title>Hously - Tailwind CSS Real Estate Website Landing Page Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta content="Real Estate Website Landing Page" name="description" />
        <meta content="Real Estate, buy, sell, Rent, tailwind Css" name="keywords" />
        <meta name="author" content="Shreethemes" />
        <meta name="website" content="https://shreethemes.in/" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="version" content="1.4.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />

        <!-- Css -->
        <!-- Main Css -->
        <link href="assets/libs/%40iconscout/unicons/css/line.css" type="text/css" rel="stylesheet" />
        <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/tailwind.css" />

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
        <section class="md:h-screen py-36 flex items-center justify-center relative overflow-hidden zoom-image">
            <div class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black z-2" id="particles-snow"></div>
            <div class="container relative z-3 text-center">
                <div class="grid grid-cols-1">
                    <img src="assets/images/logo-icon-64.png" class="mx-auto" alt="">
                    <h1 class="text-white mb-6 mt-8 md:text-5xl text-3xl font-bold">We Are Back Soon...</h1>
                    <p class="text-white/70 text-lg max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-10">
                    <div class="text-center">
                        <span id="maintenance" class="timer text-white text-[56px] tracking-[1px]"></span>
                        <span class="block text-base font-semibold uppercase text-white">Minutes</span>
                    </div>
                </div><!--end grid-->

                <div class="grid grid-cols-1 mt-8">
                    <div class="text-center subcribe-form">
                        <form class="relative mx-auto max-w-xl">
                            <input type="email" id="subemail" name="name" class="pt-4 pe-40 pb-4 ps-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/70 dark:bg-slate-900/70 border dark:border-gray-700" placeholder="Enter your email id..">
                            <button type="submit" class="btn absolute top-[2px] end-[3px] h-[46px] bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-full">Subcribe Now</button>
                        </form><!--end form-->
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section -->

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