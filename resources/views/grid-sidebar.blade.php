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
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet">
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
        <!-- Start Navbar -->
        <nav id="topnav" class="defaultscroll is-sticky">
            <div class="container">
                <!-- Start Logo container-->
                <a class="logo" href="index.html">
                    <span class="inline-block dark:hidden">
                        <img src="assets/images/logo-dark.png" class="l-dark" height="24" alt="">
                        <img src="assets/images/logo-light.png" class="l-light" height="24" alt="">
                    </span>
                    <img src="assets/images/logo-light.png" height="24" class="hidden dark:inline-block" alt="">
                </a>
                <!-- End Logo container-->

                <!-- Start Mobile Toggle -->
                <div class="menu-extras">
                    <div class="menu-item">
                        <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- End Mobile Toggle -->

                <!--Login button Start-->
                <ul class="buy-button list-none mb-0">
                    <li class="inline mb-0">
                        <a href="auth-login.html" class="btn btn-icon bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full"><i data-feather="user" class="h-4 w-4 stroke-[3]"></i></a>
                    </li>
                    <li class="sm:inline ps-1 mb-0 hidden">
                        <a href="auth-signup.html" class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-full">Signup</a>
                    </li>
                </ul>
                <!--Login button End-->

                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu justify-end nav-light">
                        <li class="has-submenu parent-menu-item">
                            <a href="javascript:void(0)">Home</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="index.html" class="sub-menu-item">Hero One</a></li>
                                <li><a href="index-two.html" class="sub-menu-item">Hero Two</a></li>
                                <li><a href="index-three.html" class="sub-menu-item">Hero Three</a></li>
                                <li><a href="index-four.html" class="sub-menu-item">Hero Four</a></li>
                                <li><a href="index-five.html" class="sub-menu-item">Hero Five </a></li>
                            </ul>
                        </li>
                
                        <li><a href="buy.html" class="sub-menu-item">Buy</a></li>
                
                        <li><a href="sell.html" class="sub-menu-item">Sell</a></li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Listing</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Grid View </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="grid.html" class="sub-menu-item">Grid Listing</a></li>
                                        <li><a href="grid-sidebar.html" class="sub-menu-item">Grid Sidebar </a></li>
                                        <li><a href="grid-map.html" class="sub-menu-item">Grid With Map</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> List View </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="list.html" class="sub-menu-item">List Listing</a></li>
                                        <li><a href="list-sidebar.html" class="sub-menu-item">List Sidebar </a></li>
                                        <li><a href="list-map.html" class="sub-menu-item">List With Map</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Property Detail </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="property-detail.html" class="sub-menu-item">Property Detail</a></li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>

                        <li class="has-submenu parent-parent-menu-item">
                            <a href="javascript:void(0)">Pages</a><span class="menu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="aboutus.html" class="sub-menu-item">About Us</a></li>
                                <li><a href="features.html" class="sub-menu-item">Featues</a></li>
                                <li><a href="pricing.html" class="sub-menu-item">Pricing</a></li>
                                <li><a href="faqs.html" class="sub-menu-item">Faqs</a></li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Auth Pages </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="auth-login.html" class="sub-menu-item">Login</a></li>
                                        <li><a href="auth-signup.html" class="sub-menu-item">Signup</a></li>
                                        <li><a href="auth-re-password.html" class="sub-menu-item">Reset Password</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="terms.html" class="sub-menu-item">Terms of Services</a></li>
                                        <li><a href="privacy.html" class="sub-menu-item">Privacy Policy</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="blogs.html" class="sub-menu-item"> Blogs</a></li>
                                        <li><a href="blog-sidebar.html" class="sub-menu-item"> Blog Sidebar</a></li>
                                        <li><a href="blog-detail.html" class="sub-menu-item"> Blog Detail</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu parent-menu-item"><a href="javascript:void(0)"> Special </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="comingsoon.html" class="sub-menu-item">Comingsoon</a></li>
                                        <li><a href="maintenance.html" class="sub-menu-item">Maintenance</a></li>
                                        <li><a href="404.html" class="sub-menu-item">404! Error</a></li>
                                    </ul>  
                                </li>
                            </ul>
                        </li>
                
                        <li><a href="contact.html" class="sub-menu-item">Contact</a></li>
                    </ul><!--end navigation menu-->
                </div><!--end navigation-->
            </div><!--end container-->
        </nav><!--end header-->
        <!-- End Navbar -->

        <!-- Start Hero -->
        <section class="relative table w-full py-32 lg:py-36 bg-[url('../../assets/images/bg/01.html')] bg-no-repeat bg-center bg-cover">
            <div class="absolute inset-0 bg-black opacity-80"></div>
            <div class="container">
                <div class="grid grid-cols-1 text-center mt-10">
                    <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Grid View Layout</h3>
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
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                    <div class="lg:col-span-4 md:col-span-6">
                        <div class="shadow dark:shadow-gray-700 p-6 rounded-xl bg-white dark:bg-slate-900 sticky top-20">
                            <form>
                                <div class="grid grid-cols-1 gap-3">
                                    <div>
                                        <label for="searchname" class="font-medium">Search Properties</label>
                                        <div class="relative mt-2">
                                            <i class="uil uil-search text-lg absolute top-[8px] start-3"></i>
                                            <input name="search" id="searchname" type="text" class="form-input border border-slate-100 dark:border-slate-800 ps-10" placeholder="Search">
                                        </div>
                                    </div>
                                    
                                    <div>
                                        <label class="font-medium">Categories</label>
                                        <select class="form-select form-input border border-slate-100 dark:border-slate-800 block w-full mt-1">
                                            <option value="re">Residential</option>
                                            <option value="la">Land</option>
                                            <option value="co">Commercial</option>
                                            <option value="ind">Industrial</option>
                                            <option value="inv">Investment</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="font-medium">Location</label>
                                        <select class="form-select form-input border border-slate-100 dark:border-slate-800 block w-full mt-1">
                                            <option value="NY">New York</option>
                                            <option value="MC">North Carolina</option>
                                            <option value="SC">South Carolina</option>
                                        </select>
                                    </div>

                                    <div>
                                        <input type="submit" class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md w-full" value="Apply Filter">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!--end col-->

                    <div class="lg:col-span-8 md:col-span-6">
                        <div class="grid lg:grid-cols-2 grid-cols-1 gap-[30px]">
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/1.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/2.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">59345 STONEWALL DR, Plaquemine, LA 70764, USA</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/3.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">3723 SANDBAR DR, Addis, LA 70710, USA</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/4.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/5.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/6.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/7.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">2141 Fiero Street, Baton Rouge, LA 70808</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/8.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">9714 Inniswold Estates Ave, Baton Rouge, LA 70809</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/9.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">1433 Beckenham Dr, Baton Rouge, LA 70808, USA</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/10.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">1574 Sharlo Ave, Baton Rouge, LA 70820, USA</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/11.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">2528 BOCAGE LAKE DR, Baton Rouge, LA 70809, USA</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
        
                            <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                                <div class="relative">
                                    <img src="assets/images/property/12.jpg" alt="">
        
                                    <div class="absolute top-4 end-4">
                                        <a href="javascript:void(0)" class="btn btn-icon bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-slate-100 dark:text-slate-700 focus:text-red-600 dark:focus:text-red-600 hover:text-red-600 dark:hover:text-red-600"><i class="mdi mdi-heart mdi-18px"></i></a>
                                    </div>
                                </div>
        
                                <div class="p-6">
                                    <div class="pb-6">
                                        <a href="property-detail.html" class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">1533 NICHOLSON DR, Baton Rouge, LA 70802, USA</a>
                                    </div>
        
                                    <ul class="py-6 border-y border-slate-100 dark:border-gray-800 flex items-center list-none">
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-compress-arrows text-2xl me-2 text-green-600"></i>
                                            <span>8000sqf</span>
                                        </li>
        
                                        <li class="flex items-center me-4">
                                            <i class="uil uil-bed-double text-2xl me-2 text-green-600"></i>
                                            <span>4 Beds</span>
                                        </li>
        
                                        <li class="flex items-center">
                                            <i class="uil uil-bath text-2xl me-2 text-green-600"></i>
                                            <span>4 Baths</span>
                                        </li>
                                    </ul>
        
                                    <ul class="pt-6 flex justify-between items-center list-none">
                                        <li>
                                            <span class="text-slate-400">Price</span>
                                            <p class="text-lg font-medium">$5000</p>
                                        </li>
        
                                        <li>
                                            <span class="text-slate-400">Rating</span>
                                            <ul class="text-lg font-medium text-amber-400 list-none">
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                                <li class="inline text-black dark:text-white">5.0(30)</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div><!--end property content-->
                        </div><!--en grid-->
        
                        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                            <div class="md:col-span-12 text-center">
                                <nav>
                                    <ul class="inline-flex items-center -space-x-px">
                                        <li>
                                            <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                                <i class="uil uil-angle-left text-[20px]"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">1</a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">2</a>
                                        </li>
                                        <li>
                                            <a href="#" aria-current="page" class="z-10 w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-white bg-green-600 shadow-sm dark:shadow-gray-700">3</a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">4</a>
                                        </li>
                                        <li>
                                            <a href="#" class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                                <i class="uil uil-angle-right text-[20px]"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div><!--end grid-->
                    </div>
                </div>
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
                                        <img src="assets/images/logo-light.png" alt="">
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
                            <p class="mb-0 text-gray-300">© <script>document.write(new Date().getFullYear())</script> Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                        </div>

                        <ul class="list-none ltr:md:text-right rtl:md:text-left text-center">
                            <li class="inline"><a href="https://1.envato.market/hously" target="_blank" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i data-feather="shopping-cart" class="h-4 w-4"></i></a></li>
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
        <script src="assets/libs/choices.js/public/assets/scripts/choices.min.js"></script>
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
    </body>
</html>