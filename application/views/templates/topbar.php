            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">

                           <!-- LOGO -->
                     <div class="navbar-brand-box">
                        <a href="<?= base_url();?>#home" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="<?= base_url();?>assets/images/logo-sm.png" alt="" height="30">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url();?>assets/images/logo-dark.png" alt="" height="35">
                            </span>
                        </a>

                        <a href="<?= base_url();?>#home" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="<?= base_url();?>assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="<?= base_url();?>assets/images/logo-light.png" alt="" height="20">
                            </span>
                        </a>
                    </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>
                        <a href="" class="btn btn-sm px-3 font-size-20 header-item waves-effect d-md-none" style="line-height: 62px; padding-left: 5px !important"><?= master_title();?></a>

                        <div class="topbar-social-icon me-3 d-none d-md-block">
                            <ul class="list-inline title-tooltip m-0">
                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" title="Back" onclick="window.history.back();">
                                     <i class="mdi mdi-arrow-left"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="javascript:void(0)" title="Refresh" class="btn-refresh">
                                     <i class="mdi mdi-refresh"></i>
                                    </a>
                                </li>
                            
                                <!-- <li class="list-inline-item">
                                    <a href="<?= base_url();?>#admin/good_purchase/add" title="Add Good Purchase">
                                     <i class="mdi mdi-book-plus-outline"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="<?= base_url();?>#admin/dir_good_purchase/add"title="Add Direct Good Purchase">
                                     <i class="mdi mdi-bookmark-plus-outline"></i>
                                    </a>
                                </li>

                                <li class="list-inline-item">
                                    <a href="<?= base_url();?>#admin/truck_cost" title="Truck Cost">
                                     <i class="mdi mdi-bus-double-decker"></i>
                                    </a>
                                </li> -->
                            </ul>
                        </div>
            
                    </div>

                     <!-- Search input -->
                     <div class="search-wrap" id="search-wrap">
                        <div class="search-bar">
                            <input class="search-input form-control" placeholder="Search" />
                            <a href="javascript:void(0)" class="close-search toggle-search" data-target="#search-wrap">
                                <i class="mdi mdi-close-circle"></i>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex">
                        <div class="dropdown d-inline-block" style="vertical-align: middle !important;">
                            <div class="spinner-grow text-primary" id="loading_indicator" role="status" style="margin-top: 18px">
                              <span class="visually-hidden">Loading...</span>
                            </div>
                        </div>
                        
                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item toggle-search noti-icon waves-effect" data-target="#search-wrap">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="<?= base_url();?>assets/images/users/avatar-7.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1"><?= $this->session->userdata('name');?></span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="<?= base_url();?>#profile"><i class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="<?= base_url();?>#app/feed/my_daily"><i class="mdi mdi-wallet-outline font-size-16 align-middle me-1"></i> My Daily</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="<?= base_url();?>login/logout"><i class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-cog-outline font-size-20"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </header>