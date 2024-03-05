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
                                            <div class="wizard-step-text-details">Entrer Votre Avis</div>
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
                                                <h1 class="card-title mb-4">Avis client</h1>
                                                <form action="{{ route('dashboard.update.commentUser') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputProfession">Profession</label>
                                                        <input class="form-control" id="inputProfession" type="text"
                                                            placeholder="entrer votre profession" value="{{Auth::user()->Profession}}" name="profession" required>
                                                        @if ($errors->has('Profession'))
                                                            <div class="alert alert-danger">{{ $errors->first('Profession') }}</div>
                                                        @endif
                                                    </div>
                                                    <input type="hidden" name="commentId" value="{{$infoComment->id}}">
                                                    <div class="row gx-3">
                                                        <div class="mb-3 col-md-6">
                                                            <label class="small mb-1" for="inputland_owner">Non et
                                                                Prénom</label>
                                                            <input class="form-control" id="inputland_owner"
                                                                type="text" placeholder="{{Auth::user()->lastName}} {{Auth::user()->firstName}}" name="land_owner" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="small mb-1" for="inputMessage">Message</label>
                                                        <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="message" required>{{$infoComment->Message}}</textarea>
                                                        @if ($errors->has('Message'))
                                                            <div class="alert alert-danger">{{ $errors->first('Message') }}</div>
                                                        @endif
                                                    </div>
                                                    <div class="d-flex justify-content-between">
                                                        <button class="btn btn-primary" type="submit"{{--  disabled --}}>Enrégistrer</button>
                                                    </div>
                                                </form>
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
            @include('include.dashboard.footer') 
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    @include('include.dashboard.footer2')

</body>

</html>
