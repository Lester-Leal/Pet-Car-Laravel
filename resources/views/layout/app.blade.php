<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>VMS | @yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/toastr/toastr.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/loader.css') }}" />
    <link rel="stylesheet"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css') }}" />
    @stack('custom-styles')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->

                <!-- Messages Dropdown Menu -->

                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" role="button">
                        <i class="fas fa-power-off"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{url('dashboard')}}" class="brand-link">
                <span class="brand-text font-weight-light">
                    <h4>
                        <span class="text-primary">
                            <b>Dog <span class="text-danger"> &</span> <span class="text-success">Cat </span>Clinic</b>
                        </span>
                    </h4>
                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->

                <!-- SidebarSearch Form -->
                <div class="form-inline mt-2">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        @if (in_array(Auth::user()->role, [1, 2, 3]))

                        <li class="nav-item ">
                            <a href="{{ route('dashboard') }}"
                                class="nav-link {{ request()->Is('dashboard*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>

                            <li class="nav-item ">
                                <a href="{{ route('admin.categories.index') }}"
                                    class="nav-link {{ request()->Is('admin/categories*') ? 'active' : '' }}">
                                    <i class="nav-icon fa fa-list"></i>
                                    <p>
                                        Categories
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="{{ route('admin.services.index') }}"
                                    class="nav-link  {{ request()->Is('admin/services') ? 'active' : '' }}">
                                    <i class="nav-icon fa fa-shopping-bag"></i>
                                    <p>
                                        Services
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.customers.index') }}"
                                    class="nav-link  {{ request()->Is('admin/customers') ? 'active' : '' }}">
                                    <i class="nav-icon fa fa-user"></i>
                                    <p>
                                        Customers
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.pets.index') }}"
                                    class="nav-link {{ request()->Is('admin/pets*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-paw"></i>
                                    <p>
                                        Pets
                                    </p>
                                </a>
                            </li>
                            @if (Auth()->user()->role == 1)
                                <li class="nav-item">
                                    <a href="{{ route('admin.users.index') }}"
                                        class="nav-link {{ request()->Is('admin/users*') ? 'active' : '' }}">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Users
                                        </p>
                                    </a>
                                </li>
                            @endif

                            <li class="nav-item">
                                <a href="{{ route('admin.diagnosis.index') }}"
                                    class="nav-link {{ request()->Is('admin/diagnosis*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-wave-square "></i>
                                    <p>
                                        Medical History
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.schedules.index') }}"
                                    class="nav-link {{ request()->Is('admin/schedules*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-clock"></i>
                                    <p>
                                        Schedules
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.invoices.index') }}"
                                    class="nav-link {{ request()->Is('admin/invoices*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-clipboard"></i>
                                    <p>
                                        Invoices
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item {{ request()->Is('admin/transactions*') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ request()->Is('admin/transactions*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Transactions
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.transactions.index') }}"
                                            class="nav-link {{ request()->Is('admin/transactions') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Bill statement</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.transaction.report', ['period' => 'Daily']) }}"
                                            class="nav-link {{ request()->Is('admin/transactions/report*') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Sales report
                                            </p>
                                        </a>
                                    </li>
                                </ul>

                            </li>

                            <li class="nav-item">
                                <a href="{{ route('admin.appointments') }}"
                                    class="nav-link {{ request()->Is('admin/appointments*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-calendar-check"></i>
                                    <p>
                                        Appointments
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="{{ route('admin.settings') }}"
                                    class="nav-link {{ request()->Is('admin/settings*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>
                                        Settings
                                    </p>
                                </a>
                            </li>
                        @else
                            <li class="nav-item">
                                <a href="{{ route('customer.services') }}"
                                    class="nav-link  {{ request()->Is('customer/services') ? 'active' : '' }}">
                                    <i class="nav-icon fa fa-shopping-bag"></i>
                                    <p>
                                        Services
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('customer.pets') }}"
                                    class="nav-link {{ request()->Is('customer/pets*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-paw"></i>
                                    <p>
                                        Pets
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('customer.diagnosis') }}"
                                    class="nav-link {{ request()->Is('customer/diagnosis*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-wave-square "></i>
                                    <p>
                                        Diagnosis
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('customer.schedules') }}"
                                    class="nav-link {{ request()->Is('customer/schedules*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-clock"></i>
                                    <p>
                                        Schedules
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('customer.invoices') }}"
                                    class="nav-link {{ request()->Is('customer/invoices*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-clipboard"></i>
                                    <p>
                                        Invoices
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('customer.transactions') }}"
                                    class="nav-link {{ request()->Is('customer/transactions*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Transaction
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('customer.appointments.index') }}"
                                    class="nav-link {{ request()->Is('admin/appointments*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-calendar-check"></i>
                                    <p>
                                        Appointments
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('customer.settings') }}"
                                    class="nav-link {{ request()->Is('customer/settings*') ? 'active' : '' }}">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>
                                        Settings
                                    </p>
                                </a>
                            </li>
                        @endif


                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link">
                                <i class="nav-icon fa fa-power-off"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('body')
        </div>
        <!-- /.content-wrapper -->


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('assets/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/dist/js/loader.js') }}"></script>
    <script src="{{ asset('assets/dist/js/jquery.duplicate.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('assets/dist/js/pages/dashboard.js') }}"></script>
    @stack('scripts')
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            @if (session('success'))
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: '{{ session('success') }}',
                    showConfirmButton: false,
                    timer: 2000,
                });
            @endif

            @if (session('error'))
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: '{{ session('error') }}',
                    showConfirmButton: false,
                    timer: 2000,
                });
            @endif
        });


        function Print() {
            var printContents = document.getElementById("printableArea").innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }
    </script>
</body>

</html>
