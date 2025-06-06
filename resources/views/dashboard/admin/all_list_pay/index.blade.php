@include('include.sub_path_admin')
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
                        <div class="card mb-4">
                            <div class="card-header">Historique de vos devis</div>
                            <div class="card-body p-0">
                                <!-- Billing history table-->
                                <div class="table-responsive table-billing-history">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-gray-200" scope="col">Identification de la transaction</th>
                                                <th class="border-gray-200" scope="col">email</th>
                                                <th class="border-gray-200" scope="col">nom</th>
                                                <th class="border-gray-200" scope="col">prénom</th>
                                                <th class="border-gray-200" scope="col">Montant</th>
                                                <th class="border-gray-200" scope="col">Statut</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($listShowAllFedapay)
                                                @foreach ($listShowAllFedapay as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->user->email }}</td>
                                                        <td>{{ $item->user->lastName }}</td>
                                                        <td>{{ $item->user->firstName  }} FCFA</td>
                                                        <td>{{ $item->montant }}</td>
                                                        <td>
                                                            @isset($item->fedapay->statut)
                                                                {{$item->fedapay->statut}}
                                                            @endisset
                                                            @empty($item->fedapay->statut)
                                                                Non payer
                                                            @endempty
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                            @empty($listShowAllFedapay)
                                            <tr>
                                                <td> Aucun article ajouter. <a href="{{route('home')}}">Cliquer ici pour voir nos produit</a></td>
                                            </tr>
                                            @endempty

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
