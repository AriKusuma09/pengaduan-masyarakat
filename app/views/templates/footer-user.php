    <!-- <footer class="bg-primary footer-user ">

    </footer> -->
    
    <!-- Logout Modal -->
    <div class="modal fade" id="ModalLogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <form action="<?= BASE_URL ?>auth/logout/" method="post" >

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Are you sure want to log out ?</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <button class="btn btn-danger">Logout!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>


<!-- Bootstrap core JavaScript-->
<script src="<?= BASE_URL ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= BASE_URL ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= BASE_URL ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="<?= BASE_URL ?>assets/js/script.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= BASE_URL ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= BASE_URL ?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= BASE_URL ?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?= BASE_URL ?>assets/js/demo/chart-pie-demo.js"></script>


</body>
</html>