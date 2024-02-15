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
                    <x-dashboard.pageheadingdashboard title="Dashboard"></x-dashboard.pageheadingdashboard>
                    <div class="{{-- container-xl  --}}px-4 mt-n10 mb-4">
                        <div class="card mb-4">
                            <div class="card-header" style="text-align: center">Liste des produits Enrégistrer</div>
                            <div class="card-body p-0">
                                {{-- @isset($allprod)
                                    <x-table_body_list :header="$header">
                                        @foreach ($allprod as $post)
                                            <tr>
                                                
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->landOwner_propertyName }}</td>
                                                <td>{{ $post->address }}</td>
                                                <td>{{ $post->department }}</td>
                                                <td>{{ $post->communes }}</td>
                                                <td>{{ $post->borough }}</td>
                                                <td>{{ $post->area }}</td>
                                                <td>{{ $post->price }}</td>
                                                <td>{{ $post->price_min }}</td>
                                                <td>{{ $post->ground_type }}</td>
                                                <td class="description-column">{{ $post->description }}</td>
                                                <td><a href="{{ route('property_detail', ['id' => $post->id, 'price' => $post->price]) }}"
                                                        class="badge text-dark"
                                                        style="background-color: rgb(14 165 233)"><img src="assets/icons8-eye-96.png" alt="voir" width="30" height=25></a>
                                                    <a href="{{ route('view.prod.update', ['id' => $post->id]) }}"
                                                        class="badge text-dark"
                                                        style="background-color: rgb(14 165 233)"><img src="assets/icons8-edit-100.png" alt="modifier" width="30" height=25></a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </x-table_body_list>
                                    <div style="display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    margin: 20px;">
                                        <button class="btn-act1">Voir plus</button>
                                    </div>
                                @endisset --}}
                                @include('include.listprod2')
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
    <x-dashboard_modal title="Prêt à partir ?"
        message='Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre
    session en cours.'
        path="{{ route('Logout') }}"></x-dashboard_modal>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/dashboard/js/sb-admin-2.min.js"></script>

</body>

</html>
