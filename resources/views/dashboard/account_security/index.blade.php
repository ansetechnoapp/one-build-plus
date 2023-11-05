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
                    <x-dashboard.pageheadingdashboard title="Account Settings - Profile"></x-dashboard.pageheadingdashboard>
                    <div class="container-xl px-4 mt-4">
                        <!-- Account page navigation-->
                        @include('include.dashboard.account.navdashboardaccount')
                        <hr class="mt-0 mb-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <!-- Change password card-->
                                <div class="card mb-4">
                                    <div class="card-header">Modification du mot de passe</div>
                                    <div class="card-body">
                                        @isset($parametre1)
                                        <div class="alert alert-success">{{ $parametre1 }}
                                        </div>
                                        @endisset
                                        <form data-bitwarden-watching="1" method="POST"
                                            action="{{ route('account.security.ChangePassword') }}">
                                            @csrf
                                            <!-- Form Group (current password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="currentPassword">Mot de passe
                                                    actuel</label>
                                                <input class="form-control" id="currentPassword" name="oldPassword"
                                                    type="password" placeholder="Enter current password" required>
                                                @if ($errors->has('oldPassword'))
                                                    <div class="alert alert-danger">{{ $errors->first('oldPassword') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Form Group (new password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="newPassword">Nouveau mot de passe</label>
                                                <input class="form-control" id="newPassword" name="newPassword"
                                                    type="password" placeholder="Enter new password" required>
                                                @if ($errors->has('newPassword'))
                                                    <div class="alert alert-danger">{{ $errors->first('newPassword') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <!-- Form Group (confirm password)-->
                                            <div class="mb-3">
                                                <label class="small mb-1" for="confirmPassword">Confirmer le mot de
                                                    passe</label>
                                                <input class="form-control" id="confirmPassword" name="comfirm_password"
                                                    type="password" placeholder="Confirm new password" required>
                                                @if ($errors->has('comfirm_password'))
                                                    <div class="alert alert-danger">{{ $errors->first('comfirm_password') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <button class="btn btn-primary" type="submit">Enrégistrer</button>
                                        </form>
                                    </div>
                                </div>
                                <!-- Security preferences card-->
                                {{-- <div class="card mb-4">
                                    <div class="card-header">Préférences de sécurité</div>
                                    <div class="card-body">
                                        <!-- Account privacy optinos-->
                                        <h5 class="mb-1">Confidentialité du compte</h5>
                                        <p class="small text-muted">En réglant votre compte sur privé, les informations
                                            de votre profil et vos messages ne seront pas visibles par les utilisateurs
                                            en dehors de vos groupes d'utilisateurs.</p>
                                        <form>
                                            <div class="form-check">
                                                <input class="form-check-input" id="radioPrivacy1" type="radio"
                                                    name="radioPrivacy" checked="">
                                                <label class="form-check-label" for="radioPrivacy1">Public (les
                                                    messages sont accessibles à tous les utilisateurs)</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="radioPrivacy2" type="radio"
                                                    name="radioPrivacy">
                                                <label class="form-check-label" for="radioPrivacy2">Privé (les
                                                    messages ne sont accessibles qu'aux utilisateurs de votre
                                                    groupe)</label>
                                            </div>
                                        </form>
                                        <hr class="my-4">
                                        <!-- Data sharing options-->
                                        <h5 class="mb-1">Partage des données</h5>
                                        <p class="small text-muted">Le partage des données d'utilisation peut nous
                                            aider à améliorer nos produits et à mieux servir nos utilisateurs lorsqu'ils
                                            naviguent dans notre application.
                                            Lorsque vous acceptez de partager vos données d'utilisation avec nous, les
                                            rapports de crash et les analyses d'utilisation seront automatiquement
                                            envoyés à notre équipe de développement pour investigation.</p>
                                        <form>
                                            <div class="form-check">
                                                <input class="form-check-input" id="radioUsage1" type="radio"
                                                    name="radioUsage" checked="">
                                                <label class="form-check-label" for="radioUsage1">Oui, partager les
                                                    données et les rapports d'accidents avec les développeurs
                                                    d'applications</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="radioUsage2" type="radio"
                                                    name="radioUsage">
                                                <label class="form-check-label" for="radioUsage2">Non, limiter le
                                                    partage de mes données avec les développeurs d'applications</label>
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-lg-4">
                                <!-- Two factor authentication card-->
                                {{-- <div class="card mb-4">
                                    <div class="card-header">Authentification à deux facteurs</div>
                                    <div class="card-body">
                                        <p>Ajoutez un niveau de sécurité supplémentaire à votre compte en activant
                                            l'authentification à deux facteurs. Nous vous enverrons un message texte
                                            pour vérifier vos tentatives de connexion sur des appareils et des
                                            navigateurs non reconnus..</p>
                                        <form>
                                            <div class="form-check">
                                                <input class="form-check-input" id="twoFactorOn" type="radio"
                                                    name="twoFactor" checked="">
                                                <label class="form-check-label" for="twoFactorOn">On</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" id="twoFactorOff" type="radio"
                                                    name="twoFactor">
                                                <label class="form-check-label" for="twoFactorOff">Off</label>
                                            </div>
                                            <div class="mt-3">
                                                <label class="small mb-1" for="twoFactorSMS">Numéro SMS</label>
                                                <input class="form-control" id="twoFactorSMS" type="tel"
                                                    placeholder="Enter a phone number" value="555-123-4567">
                                            </div>
                                        </form>
                                    </div>
                                </div> --}}
                                <!-- Delete account card-->
                                <div class="card mb-4">
                                    <div class="card-header">Supprimer le compte</div>
                                    <div class="card-body">
                                        <p>La suppression de votre compte est une action permanente qui ne peut être
                                            annulée. Si vous êtes sûr de vouloir supprimer votre compte, sélectionnez le
                                            bouton ci-dessous.</p>
                                        <button class="btn btn-danger-soft text-danger" type="button">Je comprends,
                                            supprimer mon compte</button>
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout dashboard_modal-->
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
