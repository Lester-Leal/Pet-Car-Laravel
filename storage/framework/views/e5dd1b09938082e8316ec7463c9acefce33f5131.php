<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <title>VMS | <?php echo $__env->yieldContent('title'); ?></title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/fontawesome-free/css/all.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?php echo e(asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/jqvmap/jqvmap.min.css')); ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/dist/css/adminlte.min.css')); ?>">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/daterangepicker/daterangepicker.css')); ?>">
    <!-- summernote -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
    <link rel="stylesheet"
        href="<?php echo e(asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/plugins/toastr/toastr.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/dist/css/loader.css')); ?>" />
    <link rel="stylesheet"
        href="<?php echo e(url('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css')); ?>" />
    <?php echo $__env->yieldPushContent('custom-styles'); ?>
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
                    <a class="nav-link" href="<?php echo e(route('logout')); ?>" role="button">
                        <i class="fas fa-power-off"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <span class="brand-text font-weight-light">
                    <h2>
                        <span class="text-primary">
                            V<span class="text-danger">M</span>S
                        </span>
                    </h2>
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
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <?php if(in_array(Auth::user()->role, [1, 2, 3])): ?>
                            
                            <li class="nav-item ">
                                <a href=""
                                    class="nav-link <?php echo e(request()->Is('admin/categories*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fa fa-list"></i>
                                    <p>
                                        Categories
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.services.index')); ?>"
                                    class="nav-link  <?php echo e(request()->Is('admin/services') ? 'active' : ''); ?>">
                                    <i class="nav-icon fa fa-shopping-bag"></i>
                                    <p>
                                        Services
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.customers.index')); ?>"
                                    class="nav-link  <?php echo e(request()->Is('admin/customers') ? 'active' : ''); ?>">
                                    <i class="nav-icon fa fa-user"></i>
                                    <p>
                                        Customers
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.pets.index')); ?>"
                                    class="nav-link <?php echo e(request()->Is('admin/pets*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-paw"></i>
                                    <p>
                                        Pets
                                    </p>
                                </a>
                            </li>
                            <?php if(Auth()->user()->role == 1): ?>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('admin.users.index')); ?>"
                                        class="nav-link <?php echo e(request()->Is('admin/users*') ? 'active' : ''); ?>">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                            Users
                                        </p>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.diagnosis.index')); ?>"
                                    class="nav-link <?php echo e(request()->Is('admin/diagnosis*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-wave-square "></i>
                                    <p>
                                        Medical History
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.schedules.index')); ?>"
                                    class="nav-link <?php echo e(request()->Is('admin/schedules*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-clock"></i>
                                    <p>
                                        Schedules
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item <?php echo e(request()->Is('admin/transactions*') ? 'menu-open' : ''); ?>">
                                <a href="#"
                                    class="nav-link <?php echo e(request()->Is('admin/transactions*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Transactions
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('admin.transactions.index')); ?>"
                                            class="nav-link <?php echo e(request()->Is('admin/transactions') ? 'active' : ''); ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Bill statement</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo e(route('admin.transaction.report', ['period' => 'Daily'])); ?>"
                                            class="nav-link <?php echo e(request()->Is('admin/transactions/report*') ? 'active' : ''); ?>">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>
                                                Sales report
                                            </p>
                                        </a>

                                    </li>




                                </ul>

                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.invoices.index')); ?>"
                                    class="nav-link <?php echo e(request()->Is('admin/invoices*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-clipboard"></i>
                                    <p>
                                        Invoices
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.appointments')); ?>"
                                    class="nav-link <?php echo e(request()->Is('admin/appointments*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-calendar-check"></i>
                                    <p>
                                        Appointments
                                    </p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.settings')); ?>"
                                    class="nav-link <?php echo e(request()->Is('admin/settings*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>
                                        Settings
                                    </p>
                                </a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a href="<?php echo e(route('customer.services')); ?>"
                                    class="nav-link  <?php echo e(request()->Is('customer/services') ? 'active' : ''); ?>">
                                    <i class="nav-icon fa fa-shopping-bag"></i>
                                    <p>
                                        Services
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('customer.pets')); ?>"
                                    class="nav-link <?php echo e(request()->Is('customer/pets*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-paw"></i>
                                    <p>
                                        Pets
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('customer.diagnosis')); ?>"
                                    class="nav-link <?php echo e(request()->Is('customer/diagnosis*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-wave-square "></i>
                                    <p>
                                        Diagnosis
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('customer.schedules')); ?>"
                                    class="nav-link <?php echo e(request()->Is('customer/schedules*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-clock"></i>
                                    <p>
                                        Schedules
                                    </p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('customer.invoices')); ?>"
                                    class="nav-link <?php echo e(request()->Is('customer/invoices*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-clipboard"></i>
                                    <p>
                                        Invoices
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('customer.transactions')); ?>"
                                    class="nav-link <?php echo e(request()->Is('customer/transactions*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-book"></i>
                                    <p>
                                        Transaction
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('customer.appointments.index')); ?>"
                                    class="nav-link <?php echo e(request()->Is('admin/appointments*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-calendar-check"></i>
                                    <p>
                                        Appointments
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('customer.settings')); ?>"
                                    class="nav-link <?php echo e(request()->Is('customer/settings*') ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>
                                        Settings
                                    </p>
                                </a>
                            </li>
                        <?php endif; ?>


                        <li class="nav-item">
                            <a href="<?php echo e(route('logout')); ?>" class="nav-link">
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
            <?php echo $__env->yieldContent('body'); ?>
        </div>
        <!-- /.content-wrapper -->


    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="<?php echo e(asset('assets/plugins/jquery/jquery.min.js')); ?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo e(asset('assets/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo e(asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
    <!-- ChartJS -->
    <script src="<?php echo e(asset('assets/plugins/chart.js/Chart.min.js')); ?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo e(asset('assets/plugins/sparklines/sparkline.js')); ?>"></script>
    <!-- JQVMap -->
    <script src="<?php echo e(asset('assets/plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo e(asset('assets/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
    <!-- daterangepicker -->
    <script src="<?php echo e(asset('assets/plugins/moment/moment.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/daterangepicker/daterangepicker.js')); ?>"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo e(asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
    <!-- Summernote -->
    <script src="<?php echo e(asset('assets/plugins/summernote/summernote-bs4.min.js')); ?>"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo e(asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/pdfmake/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/pdfmake/vfs_fonts.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/plugins/toastr/toastr.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/dist/js/loader.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/dist/js/jquery.duplicate.js')); ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo e(asset('assets/dist/js/adminlte.js')); ?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo e(asset('assets/dist/js/demo.js')); ?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo e(asset('assets/dist/js/pages/dashboard.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            <?php if(session('success')): ?>
                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: '<?php echo e(session('success')); ?>',
                    showConfirmButton: false,
                    timer: 2000,
                });
            <?php endif; ?>

            <?php if(session('error')): ?>
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: '<?php echo e(session('error')); ?>',
                    showConfirmButton: false,
                    timer: 2000,
                });
            <?php endif; ?>
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
<?php /**PATH C:\Users\mphat\Desktop\LARAVEL PROJECTS\pet_care\resources\views/layout/app.blade.php ENDPATH**/ ?>