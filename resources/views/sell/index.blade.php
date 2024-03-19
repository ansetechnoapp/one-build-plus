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
        <x-navbar></x-navbar><!--end header-->
        <!-- End Navbar -->

        <!-- Start Hero -->
        <section class="relative table w-full py-32 lg:py-36 bg-[url('../../{{$path_manager}}assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div class="container">
                <div class="grid grid-cols-1 text-center mt-10">
                    <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Sell Faster. Save Thousands.</h3>
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

        <!-- Start -->
        <section class="relative lg:py-24 py-16">
            <div class="container">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">How It Works</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                </div><!--end grid-->

                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                    <!-- Content -->
                    <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                                <i class="uil uil-estate"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h5 class="text-xl font-medium">Evaluate Property</h5>
                            <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                                <i class="uil uil-bag"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h5 class="text-xl font-medium">Meeting with Agent</h5>
                            <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->

                    <!-- Content -->
                    <div class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-transparent overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                            <div class="absolute top-2/4 -translate-y-2/4 start-0 end-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                                <i class="uil uil-key-skeleton"></i>
                            </div>
                        </div>

                        <div class="mt-6">
                            <h5 class="text-xl font-medium">Close the Deal</h5>
                            <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will not be distracted from making.</p>
                        </div>
                    </div>
                    <!-- Content -->
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container lg:mt-24 mt-16">
                <div class="grid grid-cols-1 pb-8 text-center">
                    <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Brokerage Calculator</h3>

                    <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                </div><!--end grid-->

                <div class="md:flex justify-center mt-8">
                    <div class="lg:w-3/5 md:w-4/5">
                        <div class="p-6 shadow dark:shadow-gray-700 rounded-md" role="form">
                            <ul class="list-none flex justify-between">
                                <li class="h6">Min $ 10000</li>
                                <li class="h6">Max $ 200000</li>
                            </ul>

                            <div class="row">
                                <div class="col-sm-12 mb-4">
                                    <label for="slider" class="form-label"></label>
                                    <input id="slider" type="range" value="10000" min="10000" max="200000" class="w-full h-2 bg-gray-100 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                                </div><!--end col-->
                            </div><!--end row-->

                            <ul class="list-none text-center md:flex justify-between">
                                <li>
                                    <ul class="text-md-start brokerage-form list-none">
                                        <li class="font-medium"><label class="control-label">Total Value ($)</label></li>
                                        <li><input type="hidden" id="amount" class="form-control"><span class="text-green-600">$</span> <p class="inline-block h5 text-green-600" id="amount-label"></p></li>
                                    </ul>
                                </li>

                                <li class="mt-2 mt-sm-0">
                                    <ul class="text-md-end brokerage-form list-none">
                                        <li class="font-medium"><label class="control-label">Brokerage Fee ($)</label></li>
                                        <li><input type="hidden" id="saving" class="form-control"><span class="text-green-600">$</span> <p class="inline-block h5 text-green-600" id="saving-label"></p></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->

        <!-- Start Footer -->
        <footer class="relative bg-slate-900 dark:bg-slate-800 mt-24">
            <div class="container">
                <div class="grid grid-cols-1">
                    <div class="relative py-16">
                        <!-- Subscribe -->
                        <div class="relative w-full">
                            <div class="relative -top-40 bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700 overflow-hidden">
                                <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                                    <div class="ltr:md:text-left rtl:md:text-right text-center z-1">
                                        <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">Subscribe to Newsletter!</h3>
                                        <p class="text-slate-400 max-w-xl mx-auto">Subscribe to get latest updates and information.</p>
                                    </div>

                                    <div class="subcribe-form z-1">
                                        <form class="relative max-w-lg md:ms-auto">
                                            <input type="email" id="subcribe" name="email" class="rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700" placeholder="Enter your email :">
                                            <button type="submit" class="btn bg-green-600 hover:bg-green-700 text-white rounded-full">Subscribe</button>
                                        </form><!--end form-->
                                    </div>
                                </div>

                                <div class="absolute -top-5 -start-5">
                                    <div class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 ltr:-rotate-45 rtl:rotate-45"></div>
                                </div>

                                <div class="absolute -bottom-5 -end-5">
                                    <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5 rtl:-rotate-90"></div>
                                </div>
                            </div>

                            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] -mt-24">
                                <div class="lg:col-span-4 md:col-span-12">
                                    <a href="#" class="text-[22px] focus:outline-none">
                                        <img src="{{$path_manager}}assets/images/logo-light.png" alt="">
                                    </a>
                                    <p class="mt-6 text-gray-300">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                            
                                </div><!--end col-->
                        
                                <div class="lg:col-span-2 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a href="aboutus.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> About us</a></li>
                                        <li class="mt-[10px]"><a href="features.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Services</a></li>
                                        <li class="mt-[10px]"><a href="pricing.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Pricing</a></li>
                                        <li class="mt-[10px]"><a href="blog.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Blog</a></li>
                                        <li class="mt-[10px]"><a href="auth-login.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Login</a></li>
                                    </ul>
                                </div><!--end col-->
                        
                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                                    <ul class="list-none footer-list mt-6">
                                        <li><a href="terms.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Terms of Services</a></li>
                                        <li class="mt-[10px]"><a href="privacy.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Privacy Policy</a></li>
                                        <li class="mt-[10px]"><a href="listing-one.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Listing</a></li>
                                        <li class="mt-[10px]"><a href="contact.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i class="uil uil-angle-right-b me-1"></i> Contact</a></li>
                                    </ul>
                                </div><!--end col-->
    
                                <div class="lg:col-span-3 md:col-span-4">
                                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Contact Details</h5>
                            
                            
                                    <div class="flex mt-6">
                                        <i data-feather="map-pin" class="w-5 h-5 text-green-600 me-3"></i>
                                        <div class="">
                                            <h6 class="text-gray-300 mb-2">C/54 Northwest Freeway, <br> Suite 558, <br> Houston, USA 485</h6>
                                            <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" data-type="iframe" class="text-green-600 hover:text-green-700 duration-500 ease-in-out lightbox">View on Google map</a>
                                        </div>
                                    </div>

                                    <div class="flex mt-6">
                                        <i data-feather="mail" class="w-5 h-5 text-green-600 me-3"></i>
                                        <div class="">
                                            <a href="mailto:contact@example.com" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">contact@example.com</a>
                                        </div>
                                    </div>
                            
                                    <div class="flex mt-6">
                                        <i data-feather="phone" class="w-5 h-5 text-green-600 me-3"></i>
                                        <div class="">
                                            <a href="tel:+152534-468-854" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">+152 534-468-854</a>
                                        </div>
                                    </div>
                                </div><!--end col-->
                            </div><!--end grid-->
                        </div>
                        <!-- Subscribe -->
                    </div>
                </div>
            </div><!--end container-->

            <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
                <div class="container text-center">
                    <div class="grid md:grid-cols-2 items-center gap-6">
                        <div class="ltr:md:text-left rtl:md:text-right text-center">
                            <p class="mb-0 text-gray-300">© <script>document.write(new Date().getFullYear())</script> OBP. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>

                        <ul class="list-none ltr:md:text-right rtl:md:text-left text-center">
                            <li class="inline"><a href="https://1.envato.market/OBP" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="shopping-cart" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="https://dribbble.com/shreethemes" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="dribbble" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="https://www.behance.net/shreethemes" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i class="uil uil-behance align-baseline"></i></a></li>
                            <li class="inline"><a href="http://linkedin.com/company/shreethemes" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="https://www.facebook.com/shreethemes" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="https://twitter.com/shreethemes" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="mailto:support@shreethemes.in" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="mail" class="h-4 w-4"></i></a></li>
                            <li class="inline"><a href="https://forms.gle/QkTueCikDGqJnbky9" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="file-text" class="h-4 w-4"></i></a></li>
                        </ul><!--end icon-->
                    </div><!--end grid-->
                </div><!--end container-->
            </div>
        </footer><!--end footer-->
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
        <script src="{{$path_manager}}assets/libs/tobii/js/tobii.min.js"></script>
        <script src="{{$path_manager}}assets/libs/feather-icons/feather.min.js"></script>
        <script src="{{$path_manager}}assets/js/plugins.init.js"></script>
        <script src="{{$path_manager}}assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>

<!-- Mirrored from shreethemes.in/OBP/layouts/sell.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jul 2023 15:52:30 GMT -->
</html>