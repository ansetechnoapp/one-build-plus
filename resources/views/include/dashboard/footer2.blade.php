
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
<script src="{{ $sub_path_admin }}assets/dashboard/vendor/jquery/jquery.min.js"></script>
<script src="{{ $sub_path_admin }}assets/dashboard/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="{{ $sub_path_admin }}assets/dashboard/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="{{ $sub_path_admin }}assets/dashboard/js/sb-admin-2.min.js"></script>
