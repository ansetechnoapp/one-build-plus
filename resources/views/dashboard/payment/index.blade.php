<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">
    
<x-head></x-head>

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
            <div class="absolute inset-0 image-wrap z-1 bg-[url('../../assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover"></div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black z-2" id="particles-snow"></div>
            <div class="container z-3">
                <div class="flex justify-center">
                    <div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                        <a href="index.html"><img src="assets/images/logo-dark.png" class="mx-auto" alt=""></a>
                        
                        <div class="text-center">
                            <h5 class="my-6 text-xl font-semibold">Formulaire paiements</h5>
                        </div>
                        
                        <form class="ltr:text-left rtl:text-right" method="POST" action="{{ route('generateDevisForProperty') }}">
                            @csrf
                            <div class="grid grid-cols-1">
                                
                                <input type="hidden" name="user_id" value="{{Auth::user()->id}}" required>
                                <input type="hidden" name="id" value="{{$id}}" required>
                                <input type="hidden" name="payment_frequency" value="{{$payment_frequency}}">
                                <div class="mb-4">
                                    <label class="font-medium" for="LoginEmail">Montant:</label>
                                    <input id="LoginEmail" type="number" class="form-input mt-3" name="price" placeholder="montant" value="{{$price}}" readonly required>
                                </div>
                                <div class="mb-4">
                                    <label><h1>option supplémentaire</h1></label>
                                </div>                             
                                <div class="mb-4">
                                    <label><input type="checkbox" name="registration_andf" value="oui"> <span> Enrégistrement ANDF </span></label>
                                </div>
                                <div class="mb-4">
                                    <label><input type="checkbox" name="formality_fees" value="oui"> <span> Frais de formalité </span></label>
                                </div>
                                <div class="mb-4">
                                    <label><input type="checkbox" name="notary_fees" value="oui"> <span> Frais notarié </span></label>
                                </div>
                                <div class="mb-4">
                                    <button type="submit" class="btn bg-red-600 hover:bg-green-700 text-white rounded-md w-full">Valider</button>
                                </div>
                                
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
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

<!-- Mirrored from shreethemes.in/OBP/layouts/auth-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jul 2023 15:52:06 GMT -->
</html>