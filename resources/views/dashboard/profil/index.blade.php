<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                                stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> --}}
                            </div>
                            Account Settings - Profile
                        </h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="container-xl px-4 mt-4">
                        @include('include.dashboard.account.navdashboardaccount')
                        <hr class="mt-0 mb-4">
                        <div class="row">
                            {{-- <div class="col-xl-4">
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Profile Picture</div>
                                    <div class="card-body text-center">
                                        <img class="img-account-profile rounded-circle mb-2"
                                            src="assets/img/illustrations/profiles/profile-1.png" alt="">
                                        <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB
                                        </div>
                                        <button class="btn btn-primary" type="button">Upload new image</button>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-xl-8">
                                <!-- Account details card-->
                                <div class="card mb-4">
                                    <div class="card-header">Détails du compte</div>
                                    <div class="card-body">
                                        <form method="POST" action="{{ route('saveprofilandupdate') }}">
                                            @csrf
                                            @foreach ($donnees as $donnee)
                                                <!-- Form Group (username)-->
                                                <!-- Form Row-->
                                                <div class="row gx-3 mb-3">
                                                    <!-- Form Group (first name)-->
                                                    <div class="col-md-6">
                                                        <label class="small mb-1" for="inputFirstName">Prénom</label>
                                                        <input class="form-control" name="firstName" id="inputFirstName"
                                                            type="text" placeholder="Enter your first name"
                                                            value="{{ $donnee->firstName }}" required>
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
                                                            value="{{ $donnee->lastName }}" required>
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
                                                        <label class="small mb-1"
                                                            for="inputLocation">Localisation</label>
                                                        <input class="form-control" id="inputLocation" name="address"
                                                            type="text" placeholder="Enter your location"
                                                            value="{{ $donnee->address }}" required>
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
                                                        value="{{ $donnee->email }}" required>
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
                                                            value="{{ $donnee->phone }}" required>
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
                                                            value="{{ $donnee->birthday }}" required>
                                                        @if ($errors->has('birthday'))
                                                            <div class="alert alert-danger">
                                                                {{ $errors->first('birthday') }}</div>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- Save changes button-->
                                                <button type="submit" class="btn btn-primary">Enregistrer les
                                                    modifications</button>
                                            @endforeach
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
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    @include('include.dashboard.logoutModal')

    <!-- Bootstrap core JavaScript-->
    <script src="assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/dashboard/js/sb-admin-2.min.js"></script>

</body>

</html>
