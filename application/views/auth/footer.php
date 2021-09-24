    <!-- JAVASCRIPT -->
    <script src="<?= base_url();?>assets/libs/jquery/jquery.min.js"></script>
    <script src="<?= base_url();?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url();?>assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="<?= base_url();?>assets/libs/simplebar/simplebar.min.js"></script>
    <script src="<?= base_url();?>assets/libs/node-waves/waves.min.js"></script>
    <script src="<?= base_url();?>assets/libs/sweetalert2/sweetalert2.min.js"></script>

    <script src="<?= base_url();?>assets/js/app.js"></script>
    <script type="text/javascript">
    	$('form').on('submit', function(){
    		$('#btn_login').html('PROCESSING...');
    	});

        $('#btn_register').on('click', function(){
            Swal.fire(
              'Belum punya akun?',
              'Silahkan kontak administrator via halaman bantuan untuk mendapatkan akun!',
              'warning'
            );
        });

        $('#btn_forgot_password').on('click', function(){
            Swal.fire(
              'Lupa password?',
              'Silahkan kontak administrator via halaman bantuan untuk mendapatkan password kembali!!',
              'warning'
            );
        });
    </script>

</body>

</html>