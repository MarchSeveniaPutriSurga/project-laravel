<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Dashboard</title>
    <link rel="stylesheet" href="{{ asset('assets/public/vendor/fontawesome-free/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/basecamp/trix@master/dist/trix.css">

    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/basecamp/trix@master/dist/trix.js"></script>

    <link href="{{ asset('assets/public/css/sb-admin-2.css') }}" rel="stylesheet" />

    {{-- Trix Editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"]{
            display: none;
        }
    </style>
</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink fa-3x"></i>
                </div>
                <div class="sidebar-brand-text mx-3">My Dashboard</div>
            </a>
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ Request::is('dashboard*') ? 'active' : ''}}" aria-current="page">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item {{ Request::is('dashboard/homes*') ? 'active' : ''}}">
                <a class="nav-link" href="/dashboard/homes">
                    <i class="fa-solid fa-gears"></i>
                    <span>My Home</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item {{ Request::is('dashboard/profiles*') ? 'active' : ''}}">
                <a class="nav-link" href="/dashboard/profiles">
                    <i class="fa-solid fa-gears"></i>
                    <span>My Recipe</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item {{ Request::is('dashboard/contacts*') ? 'active' : ''}}">
                <a class="nav-link" href="/dashboard/contacts">
                    <i class="fa-solid fa-gears"></i>
                    <span>My Contact</span></a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item {{ Request::is('dashboard/footer*') ? 'active' : ''}}">
                <a class="nav-link" href="/dashboard/footer">
                    <i class="fa-solid fa-gears"></i>
                    <span>My Footer</span></a>
            </li>
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle" src="{{ asset('assets/public/assets/undraw_profile.svg') }} " alt="..." />
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item">
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </a>
                            </div>
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                        @yield('container')
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; Your Website 2021</span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

    <script src="{{ asset('assets/public/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/public/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/public/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('assets/public/js/sb-admin-2.min.js') }}"></script>

    <script src="{{ asset('assets/public/vendor/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('assets/public/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets/public/js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>