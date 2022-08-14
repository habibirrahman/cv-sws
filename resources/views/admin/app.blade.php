<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <title>Admin CV. Sumber Waras Suskes</title>
    <meta name="author" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('favicon.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('favicon.png') }}" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>

    <!-- Template Main CSS File -->
    <link href="{{ asset('dashboard/css/styles.css') }}" rel="stylesheet" />
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ route('admin') }}">CV. Sumber Waras Suskes</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="{{ route('landing-page.index') }}">Landing Page</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            Logout
                        </a>
                    </form>
                </div>
            </li>
        </ul>
    </nav>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Page</div>
                        <a class="nav-link" href="{{ route('admin') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="{{ route('admin.about-us') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>
                            About Us
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Login sebagai:</div>
                    @yield('user')
                </div>
            </nav>
        </div>

        <div id="layoutSidenav_content">

            @yield('content')

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        @php ($year = date('Y'))
                        <div class="text-muted">Copyright &copy; CV. Sumber Waras Suskes {{ $year }}</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- Vendor JS Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="{{ asset('dashboard/assets/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('dashboard/assets/demo/chart-bar-demo.js') }}"></script>
    <script src="{{ asset('dashboard/assets/demo/datatables-demo.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('dashboard/js/scripts.js') }}"></script>
</body>

</html>
