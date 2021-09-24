
    <div class="home-center">
        <div class="home-desc-center">

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="px-2 py-3">
                                    <div class="text-center">
                                        <a href="<?= base_url();?>#dashboard">
                                            <img src="<?= base_url();?>assets/images/logo-dark.png"  alt="logo">
                                        </a>

                                        <h5 class="text-primary mb-2 mt-4">Selamat Datang di Best Beauty Official!</h5>
                                        <p class="text-muted">Silahkan login dengan akun anda</p>
                                    </div>
                                    <form class="form-horizontal mt-4 pt-2" action="" method="POST">
                                        <?= $this->session->flashdata('pesan'); ?>
                                        <?php if (validation_errors()): ?>
                                        <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                              
                                            </button>
                                            <?= validation_errors();?>
                                        </div>
                                        <?php endif ?>
                                        
                                        <div class="mb-3">
                                            <label for="id_number">Nomor ID</label>
                                            <input type="text" class="form-control" name="id_number" placeholder="Masukkan id_number">
                                        </div>

                                        <div class="mb-3">
                                            <label for="userpassword">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Masukkan password">
                                        </div>

                                        <div class="mb-3">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input"
                                                        id="customControlInline">
                                                    <label class="form-label"
                                                        for="customControlInline">Ingat saya</label>
                                                </div>
                                        </div>

                                        <div>
                                            <button class="btn btn-primary w-100 waves-effect waves-light" id="btn_login" type="submit">LOGIN</button>
                                        </div>

                                        <div class="mt-4 text-center">
                                            <a href="javascript:void(0)" id="btn_forgot_password" class="text-muted"><i class="mdi mdi-lock me-1"></i> Lupa password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 text-center text-primary-dark">
                            <p>Belum punya akun?<a href="javascript:void(0)" id="btn_register" class="fw-bold text-primary-dark"> Kontak administrator!</a> </p>
                            <p>© <script>document.write(new Date().getFullYear())</script> Best Beauty Official</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Log In page -->
    </div>

