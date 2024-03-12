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
                    <x-dashboard.pageheadingdashboard
                        title="Account Settings - Profile"></x-dashboard.pageheadingdashboard>
                    <div class="container-xl px-4 mt-4">
                        @include('include.dashboard.account.navdashboardaccount')
                        <hr class="mt-0 mb-4">
                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Profile Picture</div>
                                    <div class="card-body text-center">
                                        <form action="{{ route('admin.save.profil.img') }}" method="POST"
                                            enctype="multipart/form-data" id="uploadForm">
                                            @csrf
                                            <div id="preview-container" style="position: relative;">
                                                <div id="loading-message"
                                                    style="position: absolute;
                                            top: 50%;
                                            left: 50%;
                                            transform: translate(-50%, -50%);
                                            display: none;
                                            background-color: black;
                                            width: 100%;">
                                                    Chargement en cours...</div>
                                                @if ($donnees['user']->img)
                                                    <img id="preview" class="img-account-profile rounded-circle mb-2"
                                                        style="max-width: 100%;" src="{{ asset('storage/' . (isset($donnees['user']->img) ? $donnees['user']->img : '')) }}">
                                                @else
                                                    <img id="preview" class="img-account-profile rounded-circle mb-2"
                                                        style="max-width: 100%;"
                                                        src="https://sb-admin-pro.startbootstrap.com/assets/img/illustrations/profiles/profile-1.png">
                                                @endif

                                            </div>
                                            <div class="small font-italic text-muted mb-4">
                                                <div
                                                    style="position: relative;
                                            overflow: hidden;">
                                                    <label for="imageInput"
                                                        style="display: inline-block;
                                                padding: 8px 12px;
                                                background-color: #3498db;
                                                color: #fff;
                                                cursor: pointer;">Choisir
                                                        un fichier</label>
                                                    <input type="file" name="img" id="imageInput"
                                                        style="position: absolute;
                                                top: 0;
                                                left: 0;
                                                font-size: 100px;
                                                opacity: 0;
                                                cursor: pointer;"
                                                        onchange="previewImage()">
                                                </div>
                                                @if ($errors->has('img'))
                                                    <div class="alert alert-danger">
                                                        {{ $errors->first('img') }}</div>
                                                @endif
                                                {{-- JPG or PNG no larger than 5 MB --}}
                                            </div>
                                            <button class="btn btn-primary" type="submit">Enregistrer l'image</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Détails du compte</div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('admin.saveprofilandupdate') }}">
                                            @csrf
                                            <!-- Form Group (username)-->
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (first name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputFirstName">Prénom</label>
                                                    <input class="form-control" name="firstName" id="inputFirstName"
                                                        type="text" placeholder="Enter your first name"
                                                        value="{{ $donnees['user']->firstName }}" required>
                                                    @if ($errors->has('firstName'))
                                                        <div class="alert alert-danger">
                                                            {{ $errors->first('firstName') }}</div>
                                                    @endif
                                                </div>
                                                <!-- Form Group (last name)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputLastName">Nom de
                                                        famille</label>
                                                    <input class="form-control" name="lastName" id="inputLastName"
                                                        type="text" placeholder="Enter your last name"
                                                        value="{{ $donnees['user']->lastName }}" required>
                                                    @if ($errors->has('lastName'))
                                                        <div class="alert alert-danger">
                                                            {{ $errors->first('lastName') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- Form Row        -->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (location)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputLocation">Localisation</label>
                                                    <input class="form-control" id="inputLocation" name="address"
                                                        type="text" placeholder="Enter your location"
                                                        value="{{ $donnees['user']->address }}" required>
                                                    @if ($errors->has('address'))
                                                        <div class="alert alert-danger">
                                                            {{ $errors->first('address') }} </div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- Form Group (email address)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="inputEmailAddress">Adresse
                                                    électronique</label>
                                                <input class="form-control" id="inputEmailAddress" name="email"
                                                    type="email" placeholder="Enter your email address"
                                                    value="{{ $donnees['user']->email }}" required>
                                                @if ($errors->has('email'))
                                                    <div class="alert alert-danger">{{ $errors->first('email') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Form Row-->
                                            <div class="row gx-3 mb-3">
                                                <!-- Form Group (phone number)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputPhone">Numéro de
                                                        téléphone</label>
                                                    <input class="form-control" id="inputPhone" name="phone"
                                                        type="number" placeholder="Enter your phone number"
                                                        value="{{ $donnees['user']->phone }}" required>
                                                    @if ($errors->has('phone'))
                                                        <div class="alert alert-danger">
                                                            {{ $errors->first('phone') }}</div>
                                                    @endif
                                                </div>
                                                <!-- Form Group (birthday)-->
                                                <div class="col-md-6">
                                                    <label class="small mb-1" for="inputBirthday">Jour de
                                                        naissance</label>
                                                    <input class="form-control" id="inputBirthday" type="date"
                                                        name="birthday" placeholder="Enter your birthday"
                                                        value="{{ $donnees['user']->birthday }}" required>
                                                    @if ($errors->has('birthday'))
                                                        <div class="alert alert-danger">
                                                            {{ $errors->first('birthday') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                            <!-- Save changes button-->
                                            <button type="submit" class="btn btn-primary">Enregistrer les
                                                modifications</button>
                                        </form>
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
    <script>
        function previewImage() {
            var input = document.getElementById('imageInput');
            var previewContainer = document.getElementById('preview-container');
            var loadingMessage = document.getElementById('loading-message');
            var preview = document.getElementById('preview');

            var file = input.files[0];

            if (file) {
                loadingMessage.style.display = 'block';

                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;

                    // Hide the loading message once the image is loaded
                    preview.onload = function() {
                        loadingMessage.style.display = 'none';
                    };
                };

                reader.readAsDataURL(file);
            }
        }
    </script>

</body>

</html>
