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
                            <a class="nav-link active ms-0" href="{{route('admin.faq_form')}}">FORMULAIRE FAQ</a>
                            
                            <a class="nav-link" href="{{route('admin.faq_title_form')}}">FORMULAIRE TITRE FAQ</a>
                            
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
                                            <div class="wizard-step-text-details">FORMULAIRE FAQ</div>
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
                                                <h1 class="card-title mb-4">Saisir les informations
                                                </h1>
                                                @include('include.dashboard.admin.form_save_faq')
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
