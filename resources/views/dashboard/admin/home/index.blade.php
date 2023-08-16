<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">


        @include('include.dashboard.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
                    <div class="container-xl px-4 mt-n10 mb-4">
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
                                            <div class="wizard-step-text-details">Enrégistrement</div>
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
                                                <h1 class="card-title mb-4">Saisir les informations relatives au bien
                                                </h1>
                                                @include('include.dashboard.form_save_prod')
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Wizard tab pane item 2-->
                                    {{-- <div class="tab-pane py-5 py-xl-10 fade" id="wizard2" role="tabpanel" aria-labelledby="wizard2-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Step 2</h3>
                                                <h5 class="card-title mb-4">Enter your billing details</h5>
                                                <form data-bitwarden-watching="1">
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="small mb-1" for="inputBillingName">Name on card</label>
                                                            <input class="form-control" id="inputBillingName" type="text" placeholder="Enter the name as it appears on your card" value="Valerie Luna">
                                                        </div>
                                                        <div class="mb-3 col-md-6">
                                                            <label class="small mb-1" for="inputBillingCCNumber">Card number</label>
                                                            <input class="form-control" id="inputBillingCCNumber" type="text" placeholder="Enter your credit card number" value="4444 3333 2222 1111">
                                                        </div>
                                                    </div>
                                                    <div class="row gx-3">
                                                        <div class="col-md-4 mb-4 mb-md-0">
                                                            <label class="small mb-1" for="inputOrgName">Card expiry month</label>
                                                            <input class="form-control" id="inputOrgName" type="text" placeholder="Enter expiry month" value="06">
                                                        </div>
                                                        <div class="col-md-4 mb-4 mb-md-0">
                                                            <label class="small mb-1" for="inputLocation">Card expiry year</label>
                                                            <input class="form-control" id="inputLocation" type="text" placeholder="Enter expiry year" value="2024">
                                                        </div>
                                                        <div class="col-md-4 mb-0">
                                                            <label class="small mb-1" for="inputLocation">CVV Number</label>
                                                            <input class="form-control" id="inputLocation" type="password" placeholder="Enter CVV number" value="111">
                                                        </div>
                                                    </div>
                                                    <hr class="my-4">
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-light" type="button">Previous</button>
                                                        <button class="btn btn-primary" type="button">Next</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- Wizard tab pane item 3-->
                                    {{-- <div class="tab-pane py-5 py-xl-10 fade" id="wizard3" role="tabpanel" aria-labelledby="wizard3-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Step 3</h3>
                                                <h5 class="card-title mb-4">Choose when you want to receive email notifications</h5>
                                                <form>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" id="checkAccountChanges" type="checkbox" checked="">
                                                        <label class="form-check-label" for="checkAccountChanges">Changes made to your account</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" id="checkAccountGroups" type="checkbox" checked="">
                                                        <label class="form-check-label" for="checkAccountGroups">Changes are made to groups you're part of</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" id="checkProductUpdates" type="checkbox" checked="">
                                                        <label class="form-check-label" for="checkProductUpdates">Product updates for products you've purchased or starred</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" id="checkProductNew" type="checkbox" checked="">
                                                        <label class="form-check-label" for="checkProductNew">Information on new products and services</label>
                                                    </div>
                                                    <div class="form-check mb-2">
                                                        <input class="form-check-input" id="checkPromotional" type="checkbox">
                                                        <label class="form-check-label" for="checkPromotional">Marketing and promotional offers</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" id="checkSecurity" type="checkbox" checked="" disabled="">
                                                        <label class="form-check-label" for="checkSecurity">Security alerts</label>
                                                    </div>
                                                    <hr class="my-4">
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-light" type="button">Previous</button>
                                                        <button class="btn btn-primary" type="button">Next</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <!-- Wizard tab pane item 4-->
                                    {{-- <div class="tab-pane py-5 py-xl-10 fade" id="wizard4" role="tabpanel" aria-labelledby="wizard4-tab">
                                        <div class="row justify-content-center">
                                            <div class="col-xxl-6 col-xl-8">
                                                <h3 class="text-primary">Step 4</h3>
                                                <h5 class="card-title mb-4">Review the following information and submit</h5>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Username:</em></div>
                                                    <div class="col">username</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Name:</em></div>
                                                    <div class="col">Valerie Luna</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Organization Name:</em></div>
                                                    <div class="col">Start Bootstrap</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Location:</em></div>
                                                    <div class="col">San Francisco, CA</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Email Address:</em></div>
                                                    <div class="col">name@example.com</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Phone Number:</em></div>
                                                    <div class="col">555-123-4567</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Birthday:</em></div>
                                                    <div class="col">06/10/1988</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Credit Card Number:</em></div>
                                                    <div class="col">**** **** **** 1111</div>
                                                </div>
                                                <div class="row small text-muted">
                                                    <div class="col-sm-3 text-truncate"><em>Credit Card Expiration:</em></div>
                                                    <div class="col">06/2024</div>
                                                </div>
                                                <hr class="my-4">
                                                <div class="d-flex justify-content-between">
                                                    <button class="btn btn-light" type="button">Previous</button>
                                                    <button class="btn btn-primary" type="button">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{ route('Logout') }}">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="assets/dashboard/vendor/jquery/jquery.min.js"></script>
    <script src="assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/dashboard/js/sb-admin-2.min.js"></script>

</body>

</html>
