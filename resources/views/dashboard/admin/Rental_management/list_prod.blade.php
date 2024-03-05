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
                    <div class="{{-- container-xl  --}}px-4 mt-n10 mb-4">
                        <div class="card mb-4">
                            <div class="card-header">Liste des produits Enrégistrer</div>
                            <div class="card-body p-0">
                                <!-- Billing history table-->
                                <div class="table-responsive table-billing-history">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-gray-200" scope="col">N</th>
                                                <th class="border-gray-200" scope="col">propriétaire</th>
                                                <th class="border-gray-200" scope="col">addresse</th>
                                                <th class="border-gray-200" scope="col">département</th>
                                                <th class="border-gray-200" scope="col">commune</th>
                                                <th class="border-gray-200" scope="col">arrondissement</th>
                                                <th class="border-gray-200" scope="col">superficie</th>
                                                <th class="border-gray-200" scope="col">prix</th>
                                                <th class="border-gray-200" scope="col">type location</th>
                                                <th class="border-gray-200" scope="col">voir</th>
                                                <th class="border-gray-200" scope="col">Modifier</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($allprod)

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
                                                        <td>{{ $post->locationType }}</td>
                                                        <td><a href="{{ route('property_detail', ['id' => $post->id, 'price' => $post->price]) }}"
                                                                class="badge text-dark"
                                                                style="background-color: rgb(14 165 233)">Afficher</a></td>
                                                        <td><a href="{{ route('admin.dashboard.admin.Rental_management', ['id' => $post->id]) }}"
                                                                class="badge text-dark"
                                                                style="background-color: rgb(14 165 233)">Modifier</a></td>
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

    @include('include.dashboard.footer2')

</body>

</html>
