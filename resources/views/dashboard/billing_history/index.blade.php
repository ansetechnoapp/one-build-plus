<!DOCTYPE html>
<html lang="en">

<x-dashboard.head title="One Build Plus - Dashboard"></x-dashboard.head>

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
                    <x-dashboard.pageheadingdashboard title="Paramètres du compte - Profil"></x-dashboard.pageheadingdashboard>
                    <div class="container-xl px-4 mt-4">
                        <!-- Account page navigation-->
                        @include('include.dashboard.account.navdashboardaccount')
                        <hr class="mt-0 mb-4">
                        <div class="card mb-4">
                            <div class="card-header">Historique de la facturation</div>
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
                                            <tr>
                                                <td>#39201</td>
                                                <td>06/15/2021</td>
                                                <td>$29.99</td>
                                                <td><span class="badge bg-light text-dark">Pending</span></td>
                                            </tr>
                                            <tr>
                                                <td>#38594</td>
                                                <td>05/15/2021</td>
                                                <td>$29.99</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                            </tr>
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

    @include('include.dashboard.footer2')

</body>

</html>