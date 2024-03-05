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
                        <nav class="nav nav-borders">
                            <a class="nav-link active ms-0" href="{{ route('admin.faq_form') }}">FORMULAIRE FAQ</a>

                            <a class="nav-link" href="{{ route('admin.faq_title_form') }}">FORMULAIRE TITRE FAQ</a>

                        </nav>
                        <hr class="mt-0 mb-4">
                        <!-- Wizard card example with navigation-->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <!-- Wizard navigation-->
                                <div class="nav nav-pills nav-justified flex-column flex-xl-row nav-wizard"
                                    id="cardTab" role="tablist">
                                    <!-- Wizard navigation item 1-->
                                    <a class="nav-item nav-link active" href="#wizard1">
                                        {{-- <div class="wizard-step-icon">1</div> --}}
                                        <div class="wizard-step-text">
                                            {{-- <div class="wizard-step-text-name">Account Setup</div> --}}
                                            <div class="wizard-step-text-details">Enrégistrement titre FAQ</div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="cardTabContent">
                                    <!-- Wizard tab pane item 1-->
                                    <div class="tab-pane py-5 py-xl-10 fade show active" id="wizard1" role="tabpanel"
                                        aria-labelledby="wizard1-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                {{-- <h3 class="text-primary">Step 1</h3> --}}
                                                @if (isset($allprodupdate))
                                                <h1 class="card-title mb-4">mettre a jour la catégorie : {{$allprodupdate->title}}
                                                </h1>
                                                    <form action="{{route('admin.Updatesavefaqs.title')}}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputtitle">Catégories</label>
                                                                <input class="form-control" id="inputtitle"
                                                                    type="text" value="{{$allprodupdate->title}}"
                                                                    name="title" required>
                                                                    <input type="hidden" name="id" value="{{$allprodupdate->id}}">
                                                                @if ($errors->has('title'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('title') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <hr class="my-4">
                                                        <div class="d-flex justify-content-between">
                                                            <button class="btn btn-primary"
                                                                type="submit">Valider</button>
                                                        </div>
                                                    </form>
                                                @else
                                                    <form action="{{ route('admin.save_form_title_faq') }}" method="POST"
                                                        enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="row gx-3">
                                                            <div class="mb-3 col-md-6">
                                                                <label class="small mb-1"
                                                                    for="inputtitle">Catégories</label>
                                                                <input class="form-control" id="inputtitle"
                                                                    type="text" placeholder="Enter votre titre"
                                                                    name="title" required>
                                                                @if ($errors->has('title'))
                                                                    <div class="alert alert-danger">
                                                                        {{ $errors->first('title') }}</div>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <hr class="my-4">
                                                        <div class="d-flex justify-content-between">
                                                            <button class="btn btn-primary"
                                                                type="submit">Valider</button>
                                                        </div>
                                                    </form>
                                                @endif

                                            </div>
                                        </div>
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
            @include('include.dashboard.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('include.dashboard.footer2')

</body>

</html>
