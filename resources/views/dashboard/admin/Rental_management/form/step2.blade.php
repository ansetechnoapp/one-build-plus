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
                                            <div class="col-xxl-6 {{-- col-xl-8 --}}">
                                                {{-- <h3 class="text-primary">Step 1</h3> --}}
                                                <h1 class="card-title mb-4">Saisir les informations relatives au
                                                    propriété loacatif
                                                </h1>
                                                @if (isset($allprodupdate))
                                                    <form action="{{ route('admin.rent.form.save.prod.step2') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="location" value="oui" required>
                                                        <input type="hidden" name="prod_id"
                                                            value="{{ $allprodupdate->id }}">
                                                        

                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputborough">Arrondissement</label>
                                                                <input class="form-control" id="inputborough"
                                                                    type="text"
                                                                    value="{{ $allprodupdate->borough }}"
                                                                    name="borough" required>
                                                                @if ($errors->has('borough'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('borough') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputborough">type de
                                                                    location</label>
                                                                <select class="form-control" name="locationType">
                                                                    <option
                                                                        value="{{ $allprodupdate->locationType }}"selected>
                                                                        {{ $allprodupdate->locationType }}</option>
                                                                    <option name="maison">maison</option>
                                                                    <option name="appartemant">appartemant</option>
                                                                    <option name="sanitaire">sanitaire</option>
                                                                    <option name="non sanitaire">non sanitaire</option>
                                                                    <option name="autre">autre</option>
                                                                </select>
                                                                @if ($errors->has('locationType'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('locationType') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">

                                                                <label class="small mb-1"
                                                                    for="inputnumber_of_bedrooms">nombre de
                                                                    chambre</label>
                                                                <input class="form-control"
                                                                    id="inputnumber_of_bedrooms" type="number"
                                                                    name="number_of_bedrooms"
                                                                    value="{{ $allprodupdate->number_of_bedrooms }}"
                                                                    required>
                                                                @if ($errors->has('number_of_bedrooms'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('number_of_bedrooms') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <labeL class="small mb-1"
                                                                    for="inputnumber_of_bathrooms">nombre de salle de
                                                                    bain</labeL>
                                                                <input class="form-control"
                                                                    id="inputnumber_of_bathrooms" type="number"
                                                                    name="number_of_bathrooms"
                                                                    value="{{ $allprodupdate->number_of_bathrooms }}"
                                                                    required>
                                                                @if ($errors->has('number_of_bathrooms'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('number_of_bathrooms') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3">
                                                            <div class="col-md-6 mb-md-0">
                                                                <label class="small mb-1" for="inputprice">Loyer
                                                                    mensuel</label>
                                                                <input class="form-control" id="inputprice"
                                                                    type="text" placeholder="prix" name="price" value="{{ $allprodupdate->price }}"
                                                                    required>
                                                                @if ($errors->has('price'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('price') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="small mb-1"
                                                                for="inputdescription">Desription</label>
                                                            <textarea class="form-control" id="inputdescription"
                                                                placeholder="mettre tous les informations supplémentaire concernant le produit" name="description" required
                                                                cols="10" rows="10">{{ $allprodupdate->description }}</textarea>
                                                            @if ($errors->has('description'))
                                                                <div class="alert alert-danger">
                                                                    {{ $errors->first('description') }}</div>
                                                            @endif
                                                        </div>
                                                        <hr class="my-4">
                                                        <div class="d-flex justify-content-between">
                                                            <a class="btn btn-primary" href="{{ route('admin.dashboard.admin.Rental_management', ['id' => $allprodupdate->id]) }}">précédant</a>
                                                            <button class="btn btn-primary"
                                                                type="submit">Valider</button>
                                                        </div>
                                                    </form>
                                                @else
                                                    <form action="{{ route('admin.rent.form.save.prod.step2') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="location" value="oui"
                                                            required>

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
                                                                <label class="small mb-1" for="inputborough">type de
                                                                    location</label>
                                                                <select class="form-control" name="locationType">
                                                                    <option disabled selected> Fait votre choix</option>
                                                                @if (Session::get('stp2_locationType') != null)
                                                                    <option value="{{ Session::get('stp2_locationType') }}"
                                                                        selected> {{ Session::get('stp2_locationType') }}
                                                                    </option>
                                                                @endif
                                                                    <option name="maison">maison</option>
                                                                    <option name="appartemant">appartemant</option>
                                                                    <option name="sanitaire">sanitaire</option>
                                                                    <option name="non sanitaire">non sanitaire</option>
                                                                    <option name="autre">autre</option>
                                                                </select>
                                                                @if ($errors->has('locationType'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('locationType') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">

                                                                <label class="small mb-1"
                                                                    for="inputnumber_of_bedrooms">nombre de
                                                                    chambre</label>
                                                                <input class="form-control"
                                                                    id="inputnumber_of_bedrooms" type="number"
                                                                    name="number_of_bedrooms" value="{{ Session::get('stp2_number_of_bedrooms') }}" required>
                                                                @if ($errors->has('number_of_bedrooms'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('number_of_bedrooms') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <labeL class="small mb-1"
                                                                    for="inputnumber_of_bathrooms">nombre de salle de
                                                                    bain</labeL>
                                                                <input class="form-control"
                                                                    id="inputnumber_of_bathrooms" type="number"
                                                                    name="number_of_bathrooms" value="{{ Session::get('stp2_number_of_bathrooms') }}" required>
                                                                @if ($errors->has('number_of_bathrooms'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('number_of_bathrooms') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3">
                                                            <div class="col-md-6 mb-md-0">
                                                                <label class="small mb-1" for="inputprice">Loyer
                                                                    mensuel</label>
                                                                <input class="form-control" id="inputprice"
                                                                    type="text" placeholder="prix" name="price" value="{{ Session::get('stp2_price') }}"
                                                                    required>
                                                                @if ($errors->has('price'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('price') }}</div>
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
                                                            <a class="btn btn-primary" href="{{ route('admin.dashboard.admin.Rental_management') }}">précédant</a>
                                                            <button class="btn btn-primary"
                                                                type="submit">Valider</button>
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
