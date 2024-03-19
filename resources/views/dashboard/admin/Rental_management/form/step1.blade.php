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
                                                    <form action="{{ route('admin.rent.form.save.prod.step1') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="location" value="oui" required>
                                                        <input type="hidden" name="prod_id"
                                                            value="{{ $allprodupdate->id }}">
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputaddress">Entrer les
                                                                    détaille sur la localisation de la
                                                                    propiété</label>
                                                                <input class="form-control" id="inputaddress"
                                                                    type="text" name="address"
                                                                    value="{{ $allprodupdate->address }}" required>
                                                                @if ($errors->has('address'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('address') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <labeL class="small mb-1"
                                                                    for="inputlandOwner_propertyName">Nom,prénom du
                                                                    propriétaire ou le nom de la propriété</labeL>
                                                                <input class="form-control"
                                                                    id="inputlandOwner_propertyName" type="text"
                                                                    name="landOwner_propertyName"
                                                                    value="{{ $allprodupdate->landOwner_propertyName }}"
                                                                    required>
                                                                @if ($errors->has('landOwner_propertyName'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('landOwner_propertyName') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <labeL class="small mb-1"
                                                                    for="inputarea">Supéficie</labeL>
                                                                <input class="form-control" id="inputarea"
                                                                    type="text" value="{{ $allprodupdate->area }}"
                                                                    name="area" required>
                                                                @if ($errors->has('area'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('area') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="col-md-6 mb-md-0">
                                                                <label class="small mb-1" for="inputborough">Statut du
                                                                    produit</label>
                                                                <select class="form-control" name="status"
                                                                    id="">
                                                                    <option
                                                                        value="{{ $allprodupdate->status }}"selected>
                                                                        {{ $allprodupdate->status }}</option>
                                                                    <option value="disponible">Disponible</option>
                                                                    <option value="loué">loué</option>
                                                                    <option value="en maintenance">en maintenance
                                                                    </option>
                                                                    <option value="vendu">Vendu</option>
                                                                </select>
                                                                @if ($errors->has('status'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('status') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1"
                                                                    for="departement">Département</label>
                                                                <select class="form-control" id="departement"
                                                                    name="department" onchange="afficherCommunes()"
                                                                    required>
                                                                    <!-- Option par défaut -->
                                                                    <option
                                                                        value="{{ $allprodupdate->department }}"selected>
                                                                        {{ $allprodupdate->department }}</option>

                                                                    <!-- Liste des départements -->
                                                                    <option value="Alibori">Département de l'Alibori
                                                                    </option>
                                                                    <option value="Atacora">Département de l'Atacora
                                                                    </option>
                                                                    <option value="Atlantique">Département de
                                                                        l'Atlantique</option>
                                                                    <option value="Borgou">Département du Borgou
                                                                    </option>
                                                                    <option value="Collines">Département des Collines
                                                                    </option>
                                                                    <option value="Couffo">Département du Couffo
                                                                    </option>
                                                                    <option value="Donga">Département de la Donga
                                                                    </option>
                                                                    <option value="Littoral">Département du Littoral
                                                                    </option>
                                                                    <option value="Mono">Département du Mono</option>
                                                                    <option value="Ouémé">Département de l'Ouémé
                                                                    </option>
                                                                    <option value="Plateau">Département du Plateau
                                                                    </option>
                                                                    <option value="Zou">Département du Zou</option>
                                                                </select>
                                                                @if ($errors->has('department'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('department') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="communes">Commune</label>
                                                                <select class="form-control" id="communes"
                                                                    name="communes" required>
                                                                    <option
                                                                        value="{{ $allprodupdate->communes }}"selected>
                                                                        {{ $allprodupdate->communes }}</option>
                                                                </select>
                                                                @if ($errors->has('communes'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('communes') }}</div>
                                                                @endif
                                                            </div>

                                                        </div>
                                                        <hr class="my-4">
                                                        <div class="d-flex justify-content-between">
                                                            <button class="btn btn-primary"
                                                                type="submit">Valider</button>
                                                        </div>
                                                    </form>
                                                @else
                                                    <form action="{{ route('admin.rent.form.save.prod.step1') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="location" value="oui"
                                                            required>
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputaddress">Entrer
                                                                    les détaille sur la localisation de la
                                                                    propiété</label>
                                                                <input class="form-control" id="inputaddress"
                                                                    type="text" name="address" value="{{ Session::get('stp1_address') }}" required>
                                                                @if ($errors->has('address'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('address') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <labeL class="small mb-1"
                                                                    for="inputlandOwner_propertyName">Nom,prénom du
                                                                    propriétaire ou le nom de la propriété</labeL>
                                                                <input class="form-control"
                                                                    id="inputlandOwner_propertyName" type="text"
                                                                    name="landOwner_propertyName" value="{{ Session::get('stp1_landOwner_propertyName') }}" required>
                                                                @if ($errors->has('landOwner_propertyName'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('landOwner_propertyName') }}
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <labeL class="small mb-1"
                                                                    for="inputarea">Supéficie</labeL>
                                                                <input class="form-control" id="inputarea"
                                                                    type="text" placeholder="Supéficie"
                                                                    name="area" value="{{ Session::get('stp1_area') }}" required>
                                                                @if ($errors->has('area'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('area') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputborough">Statut du
                                                                    produit</label>
                                                                <select class="form-control" name="status"
                                                                    id="">
                                                                    <option disabled selected> choix</option>
                                                                @if (Session::get('stp1_status') != null)
                                                                    <option value="{{ Session::get('stp1_status') }}"
                                                                        selected> {{ Session::get('stp1_status') }}
                                                                    </option>
                                                                @endif
                                                                    <option value="disponible">Disponible</option>
                                                                    <option value="loué">loué</option>
                                                                    <option value="en maintenance">en maintenance
                                                                    </option>
                                                                </select>
                                                                @if ($errors->has('status'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('status') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1"
                                                                    for="departement">Département</label>
                                                                <select class="form-control" id="departement"
                                                                    name="department" onchange="afficherCommunes()"
                                                                    required>
                                                                    <!-- Option par défaut -->
                                                                    <option disabled selected>
                                                                        Sélectionnez un département</option>
                                                                    @if (Session::get('stp1_department') != null)
                                                                        <option
                                                                            value="{{ Session::get('stp1_department') }}"
                                                                            selected>
                                                                            {{ Session::get('stp1_department') }}
                                                                        </option>
                                                                    @endif

                                                                    <!-- Liste des départements -->
                                                                    <option value="Alibori">Département de l'Alibori
                                                                    </option>
                                                                    <option value="Atacora">Département de l'Atacora
                                                                    </option>
                                                                    <option value="Atlantique">Département de
                                                                        l'Atlantique</option>
                                                                    <option value="Borgou">Département du Borgou
                                                                    </option>
                                                                    <option value="Collines">Département des Collines
                                                                    </option>
                                                                    <option value="Couffo">Département du Couffo
                                                                    </option>
                                                                    <option value="Donga">Département de la Donga
                                                                    </option>
                                                                    <option value="Littoral">Département du Littoral
                                                                    </option>
                                                                    <option value="Mono">Département du Mono</option>
                                                                    <option value="Ouémé">Département de l'Ouémé
                                                                    </option>
                                                                    <option value="Plateau">Département du Plateau
                                                                    </option>
                                                                    <option value="Zou">Département du Zou</option>
                                                                </select>
                                                                @if ($errors->has('department'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('department') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1"
                                                                    for="communes">Commune</label>
                                                                <select class="form-control" id="communes"
                                                                    name="communes" required>
                                                                    <option disabled selected>Sélectionnez un
                                                                        département
                                                                        avant la communes</option>
                                                                    @if (Session::get('stp1_communes') != null)
                                                                        <option
                                                                            value="{{ Session::get('stp1_communes') }}"
                                                                            selected>
                                                                            {{ Session::get('stp1_communes') }}
                                                                        </option>
                                                                    @endif
                                                                </select>
                                                                @if ($errors->has('communes'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('communes') }}</div>
                                                                @endif
                                                            </div>

                                                        </div>
                                                        <hr class="my-4">
                                                        <div class="d-flex justify-content-between">
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
