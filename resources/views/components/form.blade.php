<div class="container">
    <div class="grid grid-cols-1 justify-center">
        <div class="relative -mt-32">
            <div class="grid grid-cols-1">
                <ul class="inline-block sm:w-fit w-full flex-wrap justify-center text-center p-4 bg-white dark:bg-slate-900 rounded-t-xl border-b dark:border-gray-800"
                    id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                    <li role="presentation" class="inline-block">
                        <button
                            class="px-6 py-2 text-base font-medium rounded-md w-full hover:text-green-600 transition-all duration-500 ease-in-out news1tyle_button"
                            id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab"
                            aria-controls="buy-home" aria-selected="true">Buy</button>
                    </li>
                </ul>

                <div id="StarterContent"
                    class="p-6 bg-white dark:bg-slate-900 rounded-ss-none rounded-se-none md:rounded-se-xl rounded-xl shadow-md dark:shadow-gray-700">
                    <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                        <form action="#">
                            <div class="registration-form text-dark text-start">
                                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                                    {{-- <div>
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white">Select
                                            Categories:</label>
                                        <div class="" style="background-color: aqua;">
                                            <i class="uil uil-estate icons"></i>
                                            <select class="" data-trigger
                                                name="choices-catagory" 
                                                aria-label="Default select example">
                                                <option>Houses</option>
                                                <option>Apartment</option>
                                                <option>Offices</option>
                                                <option>Townhome</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white">Select
                                            Categories:</label>
                                        <div class="" style="background-color: aqua;">
                                            <i class="uil uil-estate icons"></i>
                                            <select class="" data-trigger
                                                name="choices-catagory" 
                                                aria-label="Default select example">
                                                <option>Houses</option>
                                                <option>Apartment</option>
                                                <option>Offices</option>
                                                <option>Townhome</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white">Select
                                            Categories:</label>
                                        <div class="" style="background-color: aqua;">
                                            <i class="uil uil-estate icons"></i>
                                            <select class="" data-trigger
                                                name="choices-catagory" 
                                                aria-label="Default select example">
                                                <option>Houses</option>
                                                <option>Apartment</option>
                                                <option>Offices</option>
                                                <option>Townhome</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div>
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white">Select
                                            Categories:</label>
                                        <div class="" style="background-color: aqua;">
                                            <i class="uil uil-estate icons"></i>
                                            <select class="" data-trigger
                                                name="choices-catagory" 
                                                aria-label="Default select example">
                                                <option>Houses</option>
                                                <option>Apartment</option>
                                                <option>Offices</option>
                                                <option>Townhome</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                    
                                    
                                    

                                   {{--  <style> .ertt:focus {
                                        border-color: blue;
                                        box-shadow: 0 0 5px blue;
                                        background-color: blue;
                                      }</style> --}}
                                    <div style="height: auto;">
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white">Select
                                            Categories:</label>
                                        <div class="" style="
                                        margin-top: 15px;
                                        background-color: #dddddd4f;
                                        height: 70%;
                                        border-left: 1px solid #dddddd;
                                        display: flex;
                                        align-items: center;">
                                            <i class="uil uil-estate icons" style="color: red; font-size: 20px;margin: 0px 10px;"></i>
                                            <select class="ertt" data-trigger
                                                aria-label="Default select example"
                                                style="cursor: pointer;
                                                width: 100%;
                                                background-color: #ffffff00;
                                                color: #101010a8;
                                                font-weight: bold;">
                                                <option>Houses</option>
                                                <option>Apartment</option>
                                                <option>Offices</option>
                                                <option>Townhome</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="height: auto;">
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white">Select
                                            Categories:</label>
                                        <div class="" style="
                                         margin-top: 15px;
                                        background-color: #dddddd4f;
                                        height: 70%;
                                        border-left: 1px solid #dddddd;
                                        display: flex;
                                        align-items: center;
                                        color: #101010a8;
                                                font-weight: bold;">
                                            <i class="uil uil-estate icons" style="color: red;font-size: 20px;margin: 0px 10px;"></i>
                                            <select class="" data-trigger
                                                aria-label="Default select example"
                                                style="cursor: pointer;
                                                width: 100%;
                                                background-color: #ffffff00;">
                                                <option>Houses</option>
                                                <option>Apartment</option>
                                                <option>Offices</option>
                                                <option>Townhome</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="height: auto;">
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white">Select
                                            Categories:</label>
                                        <div class="" style="
                                         margin-top: 15px;
                                        background-color: #dddddd4f;
                                        height: 70%;
                                        border-left: 1px solid #dddddd;
                                        display: flex;
                                        align-items: center;
                                        color: #101010a8;
                                                font-weight: bold;">
                                            <i class="uil uil-estate icons" style="color: red;font-size: 20px;margin: 0px 10px;"></i>
                                            <select class="" data-trigger
                                                aria-label="Default select example"
                                                style="cursor: pointer;
                                                width: 100%;
                                                background-color: #ffffff00;">
                                                <option>Houses</option>
                                                <option>Apartment</option>
                                                <option>Offices</option>
                                                <option>Townhome</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="height: auto;">
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white">Select
                                            Categories:</label>
                                        <div class="" style="
                                        margin-top: 15px;
                                        background-color: #dddddd4f;
                                        height: 70%;
                                        border-left: 1px solid #dddddd;
                                        display: flex;
                                        align-items: center;
                                        color: #101010a8;
                                                font-weight: bold;">
                                            <i class="uil uil-estate icons" style="color: red;font-size: 20px;margin: 0px 10px;"></i>
                                            <select class="" data-trigger
                                                aria-label="Default select example"
                                                style="cursor: pointer;
                                                width: 100%;
                                                background-color: #ffffff00;">
                                                <option>Houses</option>
                                                <option>Apartment</option>
                                                <option>Offices</option>
                                                <option>Townhome</option>
                                            </select>
                                        </div>
                                    </div>

                                    

                                    <div class="lg:mt-6">
                                        <input type="submit" id="search-buy" name="search"
                                            class="btn bg-red-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded"
                                            value="Search">
                                    </div>
                                </div>
                                <!--end grid-->
                            </div>
                            <!--end container-->
                        </form>
                    </div>
                </div>
            </div>
            <!--end grid-->
        </div>
    </div>
    <!--end grid-->
</div>