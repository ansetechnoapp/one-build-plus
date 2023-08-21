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
                            <div class="card-header">Historique de vos devis</div>
                            <div class="card-body p-0">
                                <!-- Billing history table-->
                                <div class="table-responsive table-billing-history">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-gray-200" scope="col">Identification de la transaction</th>
                                                <th class="border-gray-200" scope="col">Date</th>
                                                <th class="border-gray-200" scope="col">Montant</th>
                                                <th class="border-gray-200" scope="col">Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($listDevis)
                                            @foreach ($listDevis as $item)
                                            <tr>
                                                <td>#39201</td>
                                                <td>{{ $item->dateDevis}}</td>
                                                <td>29.99 FCFA</td>
                                                <td>
                                                    <form action="{{ route('devis') }}" method="POST" >
                                                        @csrf <!-- Ajoutez le jeton CSRF pour la protection -->
                                                        <input type="hidden" name="devis_id" value="{{ $item->id }}">
                                                        <input type="hidden" name="prod_id" value="{{ $item->prod_id }}">
                                                        <button type="submit" class="badge text-dark" style="background-color: rgb(14 165 233);border: none;">Imprimer</button>
                                                    </form>
                                                    {{-- <a href="#" class="badge text-dark" style="background-color: rgb(14 165 233)">Imprimer</a> --}}</td>
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