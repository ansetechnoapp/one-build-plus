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
                                                    <form action="{{ route('admin.rent.form.save.prod.step3') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="location" value="oui" required>
                                                        <input type="hidden" name="prod_id"
                                                            value="{{ $allprodupdate->id }}">
                                                        
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputimage">Entrer une
                                                                    image</label>
                                                                <input type="file" name="main_image" required>
                                                                @if ($errors->has('main_image'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('main_image') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputimage">Inserer une
                                                                    image</label>
                                                                <input type="file" name="img1" required>
                                                                @if ($errors->has('img1'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('img1') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputimage">Inserer une
                                                                    image</label>
                                                                <input type="file" name="img2">
                                                                @if ($errors->has('img2'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('img2') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputimage">Inserer une
                                                                    image</label>
                                                                <input type="file" name="img3">
                                                                @if ($errors->has('img3'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('img3') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputimage">Inserer une
                                                                    image</label>
                                                                <input type="file" name="img4">
                                                                @if ($errors->has('img4'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('img4') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <hr class="my-4">
                                                        <div class="d-flex justify-content-between">
                                                            <a class="btn btn-primary" href="{{ route('admin.rent.form.view.prod.step2', ['id' => $allprodupdate->id]) }}">précédant</a>
                                                            <button class="btn btn-primary"
                                                                type="submit">Valider</button>
                                                        </div>
                                                    </form>
                                                @else
                                                    <form action="{{ route('admin.rent.form.save.prod.step3') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="location" value="oui"
                                                            required>
                                                        
                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputimage">Entrer une
                                                                    image</label>
                                                                <input type="file" name="main_image" required>
                                                                @if ($errors->has('main_image'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('main_image') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputimage">Inserer une
                                                                    image</label>
                                                                <input type="file" name="img1" required>
                                                                @if ($errors->has('img1'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('img1') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputimage">Inserer une
                                                                    image</label>
                                                                <input type="file" name="img2">
                                                                @if ($errors->has('img2'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('img2') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputimage">Inserer une
                                                                    image</label>
                                                                <input type="file" name="img3">
                                                                @if ($errors->has('img3'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('img3') }}</div>
                                                                @endif
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1" for="inputimage">Inserer une
                                                                    image</label>
                                                                <input type="file" name="img4">
                                                                @if ($errors->has('img4'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('img4') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <hr class="my-4">
                                                        <div class="d-flex justify-content-between">
                                                            <a class="btn btn-primary"
                                                                href="{{ route('admin.rent.form.view.prod.step2') }}">précédant</a>
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
