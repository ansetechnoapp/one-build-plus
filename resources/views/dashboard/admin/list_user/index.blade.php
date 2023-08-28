<!DOCTYPE html>
<html lang="en">

<x-dashboard.head title="SB Admin 2 - Dashboard"></x-dashboard.head>

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
                        <div class="card mb-4">
                            <div class="card-header">Liste des produits Enrégistrer</div>
                            <div class="card-body p-0">
                                <!-- Billing history table-->
                                <div class="table-responsive table-billing-history">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-gray-200" scope="col">N</th>
                                                <th class="border-gray-200" scope="col">Nom</th>
                                                <th class="border-gray-200" scope="col">Prénom</th>
                                                <th class="border-gray-200" scope="col">email</th>
                                                <th class="border-gray-200" scope="col">Numéro</th>
                                                <th class="border-gray-200" scope="col">addresse</th>
                                                <th class="border-gray-200" scope="col">Date de naissance</th>
                                                <th class="border-gray-200" scope="col" style="width: 5%">Activation
                                                    ou Désactivation</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($alluser)

                                                @foreach ($alluser as $post)
                                                    <tr>
                                                        <td>{{ $post->id }}</td>
                                                        <td>{{ $post->lastName }}</td>
                                                        <td>{{ $post->firstName }}</td>
                                                        <td>{{ $post->email }}</td>
                                                        <td>{{ $post->phone }}</td>
                                                        <td>{{ $post->address }}</td>
                                                        <td>{{ $post->birthday }}</td>

                                                        @if ($post->isactive === '2')
                                                            <td>
                                                                <a
                                                                    href="{{ route('user.activate', ['user_id' => $post->id]) }}">Activer</a>
                                                            </td>
                                                        @endif
                                                        @if ($post->isactive === '1')
                                                            <td>
                                                                <a
                                                                    href="{{ route('user.disable', ['user_id' => $post->id]) }}">Désativer</a>
                                                            </td>
                                                        @endif
                                                        @if ($post->isactive === '0')
                                                            <td>
                                                                <a href="#">Compte Non Activer</a>
                                                            </td>
                                                        @endif

                                                        {{-- <td><a href="#" class="badge text-dark"
                                                                style="background-color: rgb(14 165 233)">Désactiver</a></td> --}}
                                                    </tr>
                                                @endforeach

                                            @endisset

                                        </tbody>
                                    </table>
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
