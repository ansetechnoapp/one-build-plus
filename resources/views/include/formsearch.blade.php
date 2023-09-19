{{-- <style>
    .select {
        position: relative;
        display: inline-block;
    }

    .select select {
        font-family: 'Arial';
        display: inline-block;
        padding: 5px 21px;
        outline: 0;
        border: 0px solid #000000;
        border-radius: 2px;
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
    }

    .select select::-ms-expand {
        display: none;
    }

    .select select:hover,
    .select select:focus {
        color: #000000;
        background-color: #dddddd4f;
    }

    .select select:disabled {
        opacity: 0.5;
        pointer-events: none;
    }

    select>option {
        background-color: #dddddd4f;
    }
</style> --}}

<div class="container">
    <div class="grid grid-cols-1 justify-center">
        <div class="relative {{-- -mt-32 --}}" style="margin-top: -4rem !important">
            <div class="grid grid-cols-1">
                <ul class="inline-block sm:w-fit w-full flex-wrap justify-center text-center p-4 bg-white dark:bg-slate-900 rounded-t-xl border-b dark:border-gray-800"
                    id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                    <li role="presentation" class="inline-block">
                        <button
                            class="px-6 py-2 text-base font-medium rounded-md w-full hover:text-green-600 transition-all duration-500 ease-in-out news1tyle_button"
                            id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab"
                            aria-controls="buy-home" aria-selected="true">Recherchez votre propriétés</button>
                    </li>
                </ul>

                <div id="StarterContent"
                    class="p-6 bg-white dark:bg-slate-900 rounded-ss-none rounded-se-none md:rounded-se-xl rounded-xl shadow-md dark:shadow-gray-700">
                    <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                        <form method="POST" action="{{ route('search.prod') }}">
                            @csrf
                            <div class="registration-form text-dark text-start">
                                <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">

                                    <div style="height: auto;">
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white"
                                            style="text-transform: uppercase;">type de terrain:</label>
                                        <div class="select"
                                            style="
                                        margin-top: 15px;
                                        background-color: #dddddd4f;
                                        height: 60%;
                                        border-left: 1px solid #dddddd;
                                        display: flex;
                                        align-items: center;">
                                            <i class="uil uil-estate icons"
                                                style="color: red; font-size: 20px;margin: 0px 0px 0px 10px;"></i>
                                            <select class="" name="ground_type" data-trigger
                                                aria-label="Default select example"
                                                style="cursor: pointer;
                                                width: 100%;
                                                background-color: #ffffff00;
                                                color: #101010a8;
                                                font-weight: bold;
                                                border: none;
                                                outline: none;">
                                                @isset($ground_type)
                                                <option>sélectionnez un type de terrain</option>
                                                @foreach ($ground_type as $result)                                 
                                                <option name="{{$result->ground_type}}">{{$result->ground_type}}</option>
                                                @endforeach  
                                                @endisset
                                            </select>
                                        </div>
                                    </div> 
                                    <div style="height: auto;">
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white"
                                            style="text-transform: uppercase;">commune:</label>
                                        <div class="select"
                                            style="
                                        margin-top: 15px;
                                        background-color: #dddddd4f;
                                        height: 60%;
                                        border-left: 1px solid #dddddd;
                                        display: flex;
                                        align-items: center;">
                                            <i class="uil uil-estate icons"
                                                style="color: red; font-size: 20px;margin: 0px 0px 0px 10px;"></i>
                                            <select class="" name="communes" data-trigger
                                                aria-label="Default select example"
                                                style="cursor: pointer;
                                                width: 100%;
                                                background-color: #ffffff00;
                                                color: #101010a8;
                                                font-weight: bold;
                                                border: none;
                                                outline: none;">
                                                @isset($commune)
                                                <option value="">selectionnez une commune</option>
                                                @foreach ($commune as $result)                                 
                                                <option name="{{$result->communes}}">{{$result->communes}}</option>
                                                @endforeach  
                                                @endisset
                                            </select>
                                        </div>
                                    </div>
                                    <div style="height: auto;">
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white"
                                            style="text-transform: uppercase;">prix min:</label>
                                        <div class="select"
                                            style="
                                        margin-top: 15px;
                                        background-color: #dddddd4f;
                                        height: 60%;
                                        border-left: 1px solid #dddddd;
                                        display: flex;
                                        align-items: center;">
                                            <i class="uil uil-estate icons"
                                                style="color: red; font-size: 20px;margin: 0px 0px 0px 10px;"></i>
                                            <input type="number"
                                                style="
                                            width: 100%;
                                            background-color: #ffffff00;
                                            color: #101010a8;
                                            font-weight: bold;
                                            border: none;
                                            outline: none;"
                                                placeholder="prix minimal" name="price_min" value="">
                                        </div>
                                    </div>
                                    <div style="height: auto;">
                                        <label for="buy-properties"
                                            class="form-label font-medium text-slate-900 dark:text-white"
                                            style="text-transform: uppercase;">prix max:</label>
                                        <div class="select"
                                            style="
                                        margin-top: 15px;
                                        background-color: #dddddd4f;
                                        height: 60%;
                                        border-left: 1px solid #dddddd;
                                        display: flex;
                                        align-items: center;">
                                            <i class="uil uil-estate icons"
                                                style="color: red; font-size: 20px;margin: 0px 0px 0px 10px;"></i>
                                            <input type="number"
                                                style="
                                            width: 100%;
                                            background-color: #ffffff00;
                                            color: #101010a8;
                                            font-weight: bold;
                                            border: none;
                                            outline: none;"
                                                placeholder="prix maximal" name="price_max" value="">
                                        </div>
                                    </div>
                                    



                                    <div class="lg:mt-6">
                                        <input type="submit" id="search-buy" name="search"
                                            class="btn bg-red-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white searchbtn submit-btn w-full !h-12 rounded"
                                            value="Recherchez">
                                    </div>
                                </div>
                                <!--end grid-->
                            </div>
                            <!--end container-->
                        </form>
                    </div>
                </div>



            </div>

        </div>
    </div>

</div>
