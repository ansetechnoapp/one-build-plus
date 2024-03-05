<!DOCTYPE html>
<html lang="en">

<x-dashboard.head title="One Build Plus - Dashboard" subpathadmin={{$sub_path_admin}}></x-dashboard.head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        @include('include.dashboard.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('include.dashboard.navBar_dashboard')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <x-dashboard.pageheadingdashboard title="Dashboard"></x-dashboard.pageheadingdashboard>
                    <div class="container-xl px-4 mt-n10 mb-4">
                        <nav class="nav nav-borders">
                            <a class="nav-link active ms-0" href="{{ route('admin.dashboard.admin') }}">Enrégistrement des
                                biens immobiliers</a>

                            <a class="nav-link" href="{{ route('admin.dashboard.admin.Rental_management') }}">Enrégistrement
                                des biens locatif</a>

                        </nav>
                        <hr class="mt-0 mb-4">
                        <!-- Wizard card example with navigation-->
                        <div class="card">

                            <div class="card-body">
                                <div class="tab-content" id="cardTabContent">
                                    <!-- Wizard tab pane item 1-->
                                    <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel"
                                        aria-labelledby="wizard1-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                {{-- <h3 class="text-primary">Step 1</h3> --}}
                                                <h1 class="card-title mb-4">Saisir les informations relatives au produit
                                                </h1>
                                                @if (!isset($allprodupdate))
                                                    <form action="{{ route('admin.form.save.prod.step2') }}" method="POST"
                                                        enctype="multipart/form-data" onsubmit="return checkPrices()">
                                                        @csrf
                                                        <div class="row gx-3">
                                                            <div class="col-md-6 mb-md-0">
                                                                <label class="small mb-1" for="inputprice">prix</label>
                                                                <input class="form-control" id="inputprice"
                                                                    type="text" placeholder="prix" name="price"
                                                                    required value="{{ Session::get('stp2_price') }}">
                                                                <div class="alert alert-danger" style="display: none;">
                                                                    Le prix minimum doit être inférieur au prix</div>
                                                                @if ($errors->has('price'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('price') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6 mb-0">
                                                                <label class="small mb-1" for="inputprice_min">Dernier
                                                                    prix</label>
                                                                <input class="form-control" id="inputprice_min"
                                                                    type="text"placeholder="price min"
                                                                    name="price_min" value="{{ Session::get('stp2_price_min') }}" required>
                                                                <div class="alert alert-danger" style="display: none;">
                                                                    Le prix minimum doit être inférieur au prix</div>
                                                                @if ($errors->has('price_min'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('price_min') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputborough">Arrondissement</label>
                                                                <input class="form-control" id="inputborough"
                                                                    type="text" placeholder="Arrondissement"
                                                                    name="borough" value="{{ Session::get('stp2_borough') }}" required>
                                                                @if ($errors->has('borough'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('borough') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <labeL class="small mb-1" for="inputground_type">Type de
                                                                    terre</labeL>
                                                                <select class="form-control" id="inputground_type"
                                                                    name="ground_type" required>
                                                                    <option selected disabled>sélectionnez un type de terrain</option>
                                                                    @if ( Session::get('stp2_ground_type')  != null)
                                                                    <option value="{{Session::get('stp2_ground_type')}}" selected >{{Session::get('stp2_ground_type')}}</option>
                                                                    @endif
                                                                    <option value="Domaine habitable">Domaine habitable
                                                                    </option>
                                                                    <option value="Domaine semi-habitable">Domaine
                                                                        semi-habitable</option>
                                                                    <option value="Domaine agricole sans plantation">
                                                                        Domaine agricole sans plantation</option>
                                                                    <option value="Domaine agricole avec plantation">
                                                                        Domaine agricole avec plantation</option>
                                                                </select>
                                                                @if ($errors->has('ground_type'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('ground_type') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="small mb-1"
                                                                for="inputdescription">Desription</label>
                                                            <textarea class="form-control" id="inputdescription"
                                                                placeholder="mettre tous les informations supplémentaire concernant le produit" name="description" required
                                                                cols="10" rows="10">{{ Session::get('stp2_description') }}</textarea>
                                                            @if ($errors->has('description'))
                                                                <div class="alert alert-danger">
                                                                    {{ $errors->first('description') }}</div>
                                                            @endif
                                                        </div>
                                                        <hr class="my-4">
                                                        <div class="d-flex justify-content-between">
                                                            <a class="btn btn-primary" href="{{ route('admin.dashboard.admin') }}">précédant</a>
                                                            <button class="btn btn-primary" type="submit"
                                                                id="submitBtn">Valider</button>
                                                        </div>
                                                    </form>
                                                @endif
                                                @if (isset($allprodupdate))
                                                <form action="{{ route('admin.form.save.prod.step2') }}" method="POST" enctype="multipart/form-data" onsubmit="return checkPrices()">
                                                    @csrf
                                                    <input type="hidden" value="{{ $allprodupdate->id }}" name="prod_id">

                                                    <div class="row gx-3">
                                                        <div class="col-md-6 mb-md-0">
                                                            <label class="small mb-1" for="inputprice">prix</label>
                                                            <input class="form-control" id="inputprice" type="text" value="{{ $allprodupdate->price }}"
                                                                name="price" required>
                                                                 <div class="alert alert-danger" style="display: none;">Le prix minimum doit être inférieur au prix</div>
                                                            @if ($errors->has('price'))
                                                                <div class="alert alert-danger">{{ $errors->first('price') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="col-md-6 mb-0">
                                                            <label class="small mb-1" for="inputprice_min">Dernier prix</label>
                                                            <input class="form-control" id="inputprice_min" type="text" value="{{ $allprodupdate->price_min }}"
                                                                name="price_min" required>
                                                                 <div class="alert alert-danger" style="display: none;">Le prix minimum doit être inférieur au prix</div>
                                                            @if ($errors->has('price_min'))
                                                                <div class="alert alert-danger">{{ $errors->first('price_min') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>
                                            
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="small mb-1" for="inputborough">Arrondissement</label>
                                                            <input class="form-control" id="inputborough" type="text" value="{{ $allprodupdate->borough }}"
                                                                name="borough" required>
                                                            @if ($errors->has('borough'))
                                                                <div class="alert alert-danger">{{ $errors->first('borough') }}</div>
                                                            @endif
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <labeL class="small mb-1" for="inputground_type">Type de terre</labeL>
                                                            <select class="form-control" id="inputground_type" name="ground_type" required>
                                                                <option value="{{ $allprodupdate->ground_type }}"selected>{{ $allprodupdate->ground_type }}
                                                                </option>
                                                                <option value="Domaine habitable">Domaine habitable</option>
                                                                <option value="Domaine semi-habitable">Domaine semi-habitable</option>
                                                                <option value="Domaine agricole sans plantation">Domaine agricole sans plantation</option>
                                                                <option value="Domaine agricole avec plantation">Domaine agricole avec plantation</option>
                                                            </select>
                                                            @if ($errors->has('ground_type'))
                                                                <div class="alert alert-danger">{{ $errors->first('ground_type') }}</div>
                                                            @endif
                                                        </div>
                                                    </div>

                                            
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputdescription">Desription</label>
                                                        <textarea class="form-control" id="inputdescription"
                                                            placeholder="mettre tous les informations supplémentaire concernant le produit" name="description" required
                                                            cols="10" rows="10">{{ $allprodupdate->description }}</textarea>
                                                        @if ($errors->has('description'))
                                                            <div class="alert alert-danger">{{ $errors->first('description') }}</div>
                                                        @endif
                                                    </div>
                                                    <hr class="my-4">
                                                    <div class="d-flex justify-content-between">
                                                        <a class="btn btn-primary" href="{{ route('admin.dashboard.admin', ['id' => $allprodupdate->id]) }}">précédant</a>
                                                        <button class="btn btn-primary" type="submit" id="submitBtn">Valider</button>
                                                    </div>
                                                </form>
                                                @endif
                                                @include('include.dashboard.script_for_form_save_prod_and_update')
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('include.dashboard.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('include.dashboard.footer2')

</body>

</html>
