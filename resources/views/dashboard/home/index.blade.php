<!DOCTYPE html>
<html lang="en">

<x-dashboard.head title="One Build Plus - Dashboard"></x-dashboard.head>
{{-- <script src="https://cdn.fedapay.com/checkout.js?v=1.1.7"></script> --}}

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
                                                <th class="border-gray-200" scope="col">Identification de la
                                                    transaction</th>
                                                <th class="border-gray-200" scope="col">Date</th>
                                                <th class="border-gray-200" scope="col">price produit</th>
                                                <th class="border-gray-200" scope="col">Montant</th>
                                                <th class="border-gray-200" scope="col">Statut</th>
                                                <th class="border-gray-200" scope="col">Payer</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @isset($listDevis)
                                                @foreach ($listDevis as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->dateDevis }}</td>
                                                        <td>{{ $item->prod->price }} FCFA</td>
                                                        <td>{{ $item->montant }}</td>
                                                        <td>
                                                            <form action="{{ route('devis') }}" method="POST">
                                                                @csrf <!-- Ajoutez le jeton CSRF pour la protection -->
                                                                <input type="hidden" name="devis_id"
                                                                    value="{{ $item->id }}">
                                                                <input type="hidden" name="prod_id"
                                                                    value="{{ $item->prod_id }}">
                                                                <button type="submit" class="badge text-dark"
                                                                    style="background-color: rgb(14 165 233);border: none;">Imprimer</button>
                                                            </form>
                                                            {{-- <a href="#" class="badge text-dark" style="background-color: rgb(14 165 233)">Imprimer</a> --}}
                                                        </td>
                                                        <td>

                                                            @isset($item->fedapay->statut)
                                                                @if ($item->fedapay->statut == 'en attente')
                                                                    <a href="{{ $item->fedapay->fedapayTransactionUrl }}"
                                                                        class="badge text-dark"
                                                                        style="background-color: rgb(14 165 233)">paiement en
                                                                        attente</a>
                                                                @else
                                                                    <form action="{{ route('paymentdevis') }}" method="POST">
                                                                        @csrf
                                                                        <input type="hidden" name="devis_id"
                                                                            value="{{ $item->id }}">
                                                                        <input type="hidden" name="prod_id"
                                                                            value="{{ $item->prod_id }}">
                                                                        <input type="hidden" name="montant"
                                                                            value="{{ $item->montant }}">
                                                                        <input type="hidden" name="email"
                                                                            value="{{ Auth::user()->email }}">
                                                                        <input type="hidden" name="firstName"
                                                                            value="{{ Auth::user()->firstName }}">
                                                                        <input type="hidden" name="lastName"
                                                                            value="{{ Auth::user()->lastName }}">
                                                                        <input type="hidden" name="phone"
                                                                            value="{{ Auth::user()->phone }}">
                                                                        <input type="hidden" name="prod_id"
                                                                            value="{{ $item->prod_id }}">
                                                                        <button type="submit" class="badge text-dark"
                                                                            style="background-color: rgb(14 165 233);border: none;">payer</button>
                                                                    </form>
                                                                @endif
                                                            @endisset
                                                            @empty($item->fedapay->statut)
                                                                <form action="{{ route('paymentdevis') }}" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="devis_id"
                                                                        value="{{ $item->id }}">
                                                                    <input type="hidden" name="prod_id"
                                                                        value="{{ $item->prod_id }}">
                                                                    <input type="hidden" name="montant"
                                                                        value="{{ $item->montant }}">
                                                                    <input type="hidden" name="email"
                                                                        value="{{ Auth::user()->email }}">
                                                                    <input type="hidden" name="firstName"
                                                                        value="{{ Auth::user()->firstName }}">
                                                                    <input type="hidden" name="lastName"
                                                                        value="{{ Auth::user()->lastName }}">
                                                                    <input type="hidden" name="phone"
                                                                        value="{{ Auth::user()->phone }}">
                                                                    <input type="hidden" name="prod_id"
                                                                        value="{{ $item->prod_id }}">
                                                                    <button type="submit" class="badge text-dark"
                                                                        style="background-color: rgb(14 165 233);border: none;">payer</button>
                                                                </form>
                                                            @endempty


                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset
                                            @empty($listDevis)
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
