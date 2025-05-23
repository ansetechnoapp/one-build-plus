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
                    <div class="container-xl px-4 mt-4">



                    </div>



                    <div class="container-xl px-4 mt-n10 mb-4">
                        <nav class="nav nav-borders">
                            <a class="nav-link active ms-0" href="{{ route('admin.dashboard.commentUser') }}">Avis
                                Client</a>
                        </nav>
                        <hr class="mt-0 mb-4">
                        <div class="card mb-4">
                            <div class="card-header">tout les avis clients</div>
                            <div class="card-body p-0">
                                <!-- Billing history table-->
                                <div class="table-responsive table-billing-history">
                                    <table class="table mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-gray-200" scope="col">Profession</th>
                                                <th class="border-gray-200" scope="col">Non et Prénom</th>
                                                <th class="border-gray-200" scope="col">Message</th>
                                                <th class="border-gray-200" scope="col">modifier</th>
                                            </tr>
                                        </thead>
                                        @isset($issetCommentInfoUser)
                                            @foreach ($issetCommentInfoUser as $item)
                                                <tbody>

                                                    <td>{{ $item->user->Profession }}</td>
                                                    <td>{{ $item->user->lastName }} {{ $item->user->firstName }}</td>
                                                    <td>{{ $item->Message }}</td>
                                                    <td>
                                                        @if ($item->Statut == '0')
                                                            <a href="{{ route('admin.comment.update.statut.active', ['id' => $item->id]) }}"
                                                                class="badge text-dark"
                                                                style="background-color: rgb(14 165 233)">Activer</a>
                                                        @else
                                                            <a href="{{ route('admin.comment.update.statut.disable', ['id' => $item->id]) }}"
                                                                class="badge text-dark"
                                                                style="background-color: rgb(14 165 233)">Désactiver</a>
                                                        @endif

                                                    </td>
                                                </tbody>
                                            @endforeach
                                        @endisset
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
