<div class="navbar">
            <div class="container">
                <!-- Nav Header -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand navbar-brand-image" href="#">
                        <img src="{{ asset('/koprasi/assets/img/logo.png')}}" alt="Site Logo">
                    </a>
                </div>
                <!-- End Nav Header -->
                <div class="navbar-collapse collapse">
                    <!-- Header Nav Right -->
                    <ul class="nav navbar-nav noticebar navbar-left">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="navbar-visible-collapsed">&nbsp;Notifikasi&nbsp;</span>
                                <span class="badge">3</span>
                            </a>
                            <ul class="dropdown-menu noticebar-menu" role="menu">
                                <li class="nav-header">
                                    <div class="pull-left">
                                        Notifikasi
                                    </div>
                                    <div class="pull-right">
                                        <a href="javascript:;">Tandai Telah Dibaca</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="./page-notifications.html" class="noticebar-item">
                                        <span class="noticebar-item-image">
                                            <i class="fa fa-cloud-upload text-success"></i>
                                        </span>
                                        <span class="noticebar-item-body">
                                            <strong class="noticebar-item-title">Judul Notifikasi</strong>
                                            <span class="noticebar-item-text">Deskripsi Singkat Notifikasi.</span>
                                            <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 12 menit yang lalu</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="./page-notifications.html" class="noticebar-item">
                                        <span class="noticebar-item-image">
                                            <i class="fa fa-ban text-danger"></i>
                                        </span>
                                        <span class="noticebar-item-body">
                                            <strong class="noticebar-item-title">Judul Notifikasi</strong>
                                            <span class="noticebar-item-text">Deskripsi Singkat Notifikasi.</span>
                                            <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 menit yang lalu</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="noticebar-menu-view-all">
                                    <a href="#">Lihat Seluruh Notifikasi</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="./page-notifications.html" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="navbar-visible-collapsed">&nbsp;Pesan&nbsp;</span>
                            </a>
                            <ul class="dropdown-menu noticebar-menu" role="menu">
                                <li class="nav-header">
                                    <div class="pull-left">
                                        Pesan
                                    </div>
                                    <div class="pull-right">
                                        <a href="javascript:;">Pesan Baru</a>
                                    </div>
                                </li>
                                <li>
                                    <a href="#" class="noticebar-item">
                                        <span class="noticebar-item-image">
                                            <img src="assets/img/avatars/avatar-1-md.png" style="width: 50px" alt="">
                                        </span>
                                        <span class="noticebar-item-body">
                                            <strong class="noticebar-item-title">Judul Pesan</strong>
                                            <span class="noticebar-item-text">Isi dari pesan...</span>
                                            <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 menit yang lalu</span>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="noticebar-item">
                                        <span class="noticebar-item-image">
                                            <img src="assets/img/avatars/avatar-1-md.png" style="width: 50px" alt="">
                                        </span>
                                        <span class="noticebar-item-body">
                                            <strong class="noticebar-item-title">Judul Pesan</strong>
                                            <span class="noticebar-item-text">Isi dari pesan...</span>
                                            <span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 menit yang lalu</span>
                                        </span>
                                    </a>
                                </li>
                                <li class="noticebar-menu-view-all">
                                    <a href="#">Lihat Semua Pesan</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End Header Nav Right -->
                    <!-- Header Nav Left -->
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown navbar-profile">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                                <img src="{{ asset('/koprasi/assets/img/avatars/avatar-1-xs.png')}}" class="navbar-profile-avatar" alt="">
                                <span class="navbar-profile-label">Username &nbsp;</span>
                                <i class="fa fa-caret-down"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-user"></i>
                                        &nbsp;&nbsp;Profil Saya
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-dollar"></i>
                                        &nbsp;&nbsp;Informasi &amp; Harga
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-cogs"></i>
                                        &nbsp;&nbsp;Pengaturan
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="/login">
                                        <i class="fa fa-sign-out"></i>
                                        &nbsp;&nbsp;Keluar
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- End Header Nav Left -->
                </div>
            </div>
        </div>