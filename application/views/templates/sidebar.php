            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">


                    <div class="user-sidebar text-center">
                        <div class="dropdown">
                            <div class="user-img">
                                <img src="<?= base_url();?>assets/images/users/avatar-7.jpg" alt="" class="rounded-circle">
                                <span class="avatar-online bg-success"></span>
                            </div>
                            <div class="user-info">
                                <h5 class="mt-3 font-size-16 text-white">
                                    <?php
                                    echo $this->session->userdata('name');
                                    //echo 'Superadmin';
                                    ?> 
                                    </h5>
                                <span class="font-size-13 text-white-50">
                                    <?php
                                    echo $this->session->userdata('role_name');
                                    //echo 'Superadmin';
                                    ?>
                                    </span>
                            </div>
                        </div>
                    </div>



                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title"></li>
                            <li class="app-dashboard">
                                <a href="<?= base_url();?>portal/#app/dashboard" class="waves-effect">
                                    <i class="dripicons-home"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="app-feed">
                                <a href="<?= base_url();?>portal/#app/feed" class="waves-effect">
                                    <i class="dripicons-feed"></i>
                                    <span>Transaksi</span>
                                </a>
                            </li>
                            <!-- <li class="app-feed-search">
                                <a href="<?= base_url();?>portal/#app/feed/search" class="waves-effect">
                                    <i class="dripicons-search"></i>
                                    <span>Search</span>
                                </a>
                            </li> -->
                            <li class="menu-title">Master Data</li>

                            <li class="app-seller app-seller-add">
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-user-group"></i>
                                    <span>Data Seller</span>
                                </a>
                                <ul class="sub-menu app-seller app-seller-add app-report_status" aria-expanded="false">
                                    <li>
                                        <a class="app-seller" href="<?= base_url();?>portal/#app/seller">List Seller</a>
                                    </li>
                                    <li>
                                        <a class="app-seller-tunda" href="<?= base_url();?>portal/#app/seller/tunda">Tunda Seller</a>
                                    </li>
                                    <li>
                                        <a class="app-seller-add" href="<?= base_url();?>portal/#app/seller/add">Tambah Seller</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="app-hac">
                                <a href="<?= base_url();?>portal/#app/hac" class=" waves-effect">
                                    <i class="dripicons-code"></i>
                                    <span>Stok Produk</span>
                                </a>
                            </li>

                            <li class="app-page app-page-add">
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="dripicons-article"></i>
                                    <span>Page</span>
                                </a>
                                <ul class="sub-menu app-page app-page-add app-report_status" aria-expanded="false">
                                    <li>
                                        <a class="app-page" href="<?= base_url();?>portal/#app/page">List Page</a>
                                    </li>
                                    <li>
                                        <a class="app-page-add" href="<?= base_url();?>portal/#app/page/add">Tambah Page</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-title">Report</li>

                            <li class="app-feed-my_daily">
                                <a href="<?= base_url();?>portal/#app/feed/my_daily" class=" waves-effect">
                                    <i class="dripicons-article"></i>
                                    <span>Penjualan</span>
                                </a>
                            </li>

                            <li class="app-feed-my_daily">
                                <a href="<?= base_url();?>portal/#app/feed/my_daily" class=" waves-effect">
                                    <i class="dripicons-article"></i>
                                    <span>Pembelian</span>
                                </a>
                            </li>

                            <li class="menu-title">Account</li>

                            <li class="profile">
                                <a href="<?= base_url();?>#profile" class=" waves-effect">
                                    <i class="dripicons-user"></i>
                                    <span>Profile</span>
                                </a>
                            </li>

                            <li>
                                <a href="<?= base_url();?>login/logout" class=" waves-effect">
                                    <i class="dripicons-exit"></i>
                                    <span>Logout</span>
                                </a>
                            </li>

                            <li class="menu-title">Application</li>

                            <li class="app-about">
                                <a href="<?= base_url();?>portal/#app/about" class=" waves-effect">
                                    <i class="dripicons-message"></i>
                                    <span>Tentang</span>
                                </a>
                            </li>

                            <li class="app-help">
                                <a href="<?= base_url();?>portal/#app/help" class=" waves-effect">
                                    <i class="dripicons-question"></i>
                                    <span>Bantuan?</span>
                                </a>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->
