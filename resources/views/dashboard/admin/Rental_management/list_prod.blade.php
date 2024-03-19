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
                        <div class="container-search">
                            {{-- @include('include.formsearchadmin') --}}
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <div style="text-align: center">Liste des produits Enrégistrer</div>
                            <div style="text-align: end"><a href="{{ route('admin.list.RentalManagement.Allprod') }}" class="btn-act1">tout les produits</a></div>
                            </div>
                            <div class="card-body p-0">
                                @unless ($allprod->isEmpty())
                                    <x-table_body_list :header="$header">
                                        @foreach ($allprod as $post)
                                            @php $i++; @endphp
                                            <tr>
                                                @foreach ($cells as $cell)
                                                    <td>{{ $post->{$cell} }}</td>
                                                @endforeach
                                                <td class="description-column">{{ $post->description }}</td>
                                                <td><a href="{{ route('property_detail', ['id' => $post->id, 'price' => $post->price]) }}"
                                                        class="badge text-dark"
                                                        style="background-color: rgb(14 165 233);margin: 5px;"><img
                                                            src="{{ $sub_path_admin }}assets/icons8-eye-96.png"
                                                            alt="voir" width="30" height=25></a>
                                                    <a href="{{ route('admin.dashboard.admin.Rental_management', ['id' => $post->id]) }}"
                                                        class="badge text-dark"
                                                        style="background-color: rgb(14 165 233);margin: 5px;"><img
                                                            src="{{ $sub_path_admin }}assets/icons8-edit-100.png"
                                                            alt="modifier" width="30" height=25></a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </x-table_body_list>
                                    <style>
                                        .centered-button {
                                            display: flex;
                                            justify-content: center;
                                            align-items: center;
                                            margin: 20px;
                                        }
                                    </style>
                                    <div class="centered-button">

                                        <a href="{{ route('admin.Rental.management.list.prod', ['num' => $i + '5']) }}" class="btn-act1">Voir
                                            plus</a>
                                    </div>


                                    {{-- @include('include.listprod2') --}}
                                </div>
                            </div>

                            {{-- 
                                @include('partials.pagination', ['post' => $allprod])
                                
                                @if (isset($_GET['page']))
                            <div class="pagination-section">
                                {{ $allprod->links() }}
                            </div>
                            @else
                            <div class="centered-button">
                                <a href="{{ route('admin.list_prod', ['page' => '2']) }}" class="btn-act1">2</a>
                                <a href="{{ route('admin.list_prod', ['page' => '3']) }}" class="btn-act1">3</a>
                                <a href="{{ route('admin.list_prod', ['page' => '4']) }}" class="btn-act1">4</a>
                            </div>
                            @endif --}}
                        @else
                            <x-table_body_list :header="$header">
                                @foreach ($allprod as $post)
                                    @php $i++; @endphp
                                    <tr>
                                        <p>aucun résultat</p>
                                    </tr>
                                @endforeach


                            </x-table_body_list>
                        @endunless
                        <!-- Billing history table-->
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
