        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title d-flex align-items-center px-3 py-4">
            
                    <h5 class="m-0 me-2">Settings</h5>

                    <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center mb-0">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="<?= base_url();?>assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="layout-1">
                    </div>

                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="light-mode-switch" checked>
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="<?= base_url();?>assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="layout-2">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input theme-choice" type="checkbox" id="dark-mode-switch" data-bsStyle="<?= base_url();?>assets/css/bootstrap-dark.min.css" data-appStyle="<?= base_url();?>assets/css/app-dark.min.css">
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
            
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script type="text/javascript">
            var base_url = '<?= base_url();?>';
        </script>
        <!-- JAVASCRIPT -->
        <script src="<?= base_url();?>assets/libs/jquery/jquery.min.js"></script>
        <script src="<?= base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="<?= base_url();?>assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="<?= base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
        <script src="<?= base_url();?>assets/libs/node-waves/waves.min.js"></script>

        <!-- Required datatable js -->
        <script src="<?= base_url();?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?= base_url();?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Sweet Alerts js -->
        <script src="<?= base_url();?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
        <script src="<?= base_url();?>assets/js/jquery.number.min.js"></script>

        <script src="<?= base_url();?>assets/js/routes.js?v=3.2"></script>

        <script src="<?= base_url();?>assets/js/app.js?v=1.1"></script>

        <script src="<?= base_url();?>assets/js/custom.js?v=2.2"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

        <script type="text/javascript">
            $('#side-menu li a').on('click', function(){
                $('body').removeClass('sidebar-enable');
                $('#side-menu li a').removeClass('active');
                $(this).addClass('active');
            });
        </script>

    </body>
</html>
