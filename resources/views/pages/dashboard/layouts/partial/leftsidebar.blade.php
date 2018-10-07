<!-- Preloader -->
<div class="preloader">
    <div class="spinner-dots">
        <span class="dot1"></span>
        <span class="dot2"></span>
        <span class="dot3"></span>
    </div>
</div>

<!-- Sidebar -->
<aside class="sidebar sidebar-icons-right sidebar-icons-boxed sidebar-expand-lg">
    <header class="sidebar-header">
        <span class="logo">
          <a href="{{route('home')}}">PT. Taspen (persero)</a>
        </span>
    </header>

    <nav class="sidebar-navigation">
        <ul class="menu">
            <li class="menu-category">Home</li>

            <li class="menu-item {{Request::segment(1) == "" ? "active" : ""}} {{Request::segment(1) == "home" ? "active" : ""}}">
                <a class="menu-link" href="{{route('home')}}">
                    <span class="icon fa fa-home"></span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li class="menu-category">Sistem Informasi</li>

            <li class="menu-item {{Request::segment(1) == "berkas" ? "active open" : ""}}">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-file"></span>
                    <span class="title">Pencatatan Berkas</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item ">
                        <a class="menu-link" href="{{route('berkas.add')}}">
                            <span class="dot"></span>
                            <span class="title">Input Data</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{route('berkas.tampil')}}">
                            <span class="dot"></span>
                            <span class="title">Tampilkan Data</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{Request::segment(1) == "cashflow" ? "active open" : ""}}">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-list"></span>
                    <span class="title">Cash Flow</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('cashflow.tambah')}}">
                            <span class="dot"></span>
                            <span class="title">Tambah</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{route('cashflow.tampil')}}">
                            <span class="dot"></span>"
                            <span class="title">Tampil</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-category">Advanced Setup</li>
            <li class="menu-item {{Request::segment(1) == "jenisSpp" ? "active open" : ""}}">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-car"></span>
                    <span class="title">Jenis SPP</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('jenisSpp.tambah')}}">
                            <span class="dot"></span>
                            <span class="title">Tambah Data</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{route('jenisSpp.tampil')}}">
                            <span class="dot"></span>
                            <span class="title">Tampil Data</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{Request::segment(1) == "spp" ? "active open" : ""}}">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-car"></span>
                    <span class="title">Sumber SPP</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('spp.add')}}">
                            <span class="dot"></span>
                            <span class="title">Tambah Data</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{route('spp.tampil')}}">
                            <span class="dot"></span>
                            <span class="title">Tampil Data</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{Request::segment(1) == "jenisLayanan" ? "active open" : ""}}">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-server"></span>
                    <span class="title">Jenis Layanan</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('jl.tambah')}}">
                            <span class="dot"></span>
                            <span class="title">Tambah Data</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{route('jl.tampil')}}">
                            <span class="dot"></span>
                            <span class="title">Tampil Data</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="menu-item {{Request::segment(1) == "jenisTransfer" ? "active open" : ""}}">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-server"></span>
                    <span class="title">Jenis Prioritas</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="{{route('jenisTransfer.tambah')}}">
                            <span class="dot"></span>
                            <span class="title">Tambah Data</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="{{route('jenisTransfer.tampil')}}">
                            <span class="dot"></span>
                            <span class="title">Tampil Data</span>
                        </a>
                    </li>
                </ul>
            </li>



            <li class="menu-category">Administrasi</li>


            <li class="menu-item">
                <a class="menu-link" href="#">
                    <span class="icon fa fa-user"></span>
                    <span class="title">Pengguna</span>
                    <span class="arrow"></span>
                </a>

                <ul class="menu-submenu">
                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">Sidebar</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">Header</span>
                        </a>
                    </li>

                    <li class="menu-item">
                        <a class="menu-link" href="#">
                            <span class="dot"></span>
                            <span class="title">Footer</span>
                        </a>
                    </li>
                </ul>
            </li>

        </ul>
    </nav>
</aside>
<!-- END Sidebar -->
