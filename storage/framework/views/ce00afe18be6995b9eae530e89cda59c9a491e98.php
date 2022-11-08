
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  <title><?php echo $__env->yieldContent('title'); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/fontawesome-free/css/all.min.css")); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")); ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css")); ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/jqvmap/jqvmap.min.css")); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/dist/css/adminlte.min.css")); ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css")); ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/daterangepicker/daterangepicker.css")); ?>">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/summernote/summernote-bs4.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/toastr/toastr.min.css")); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('assets/dist/css/loader.css')); ?>"/>
  <?php echo $__env->yieldPushContent('custom-styles'); ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
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
    <a href="<?php echo e(route('dashboard')); ?>" class="brand-link">
      <span class="brand-text font-weight-light">
        <h2>
          <span class="text-primary">
              MAN<span class="text-danger">A</span>SO
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
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item ">
            <a href="<?php echo e(route('dashboard')); ?>" class="nav-link <?php echo e((request()->Is('dashboard*')) ? 'active': ''); ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

           <li class="nav-item <?php echo e((request()->Is('projects*')) ? 'menu-open': ''); ?>">
            <a href="#" class="nav-link <?php echo e((request()->Is('projects*')) ? 'active': ''); ?>">
              <i class="nav-icon fas fa-file-contract"></i>
              <p>
                Projects Tracking
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
             <?php
               $projects = DB::table('projects')->get();
             ?>
             <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             <li class="nav-item <?php echo e((request()->Is('projects/tracking/'.$project->id.'/*')) ? 'menu-open': ''); ?>">
               <a href="#" class="nav-link <?php echo e((request()->Is('projects/tracking/'.$project->id.'/*')) ? 'active': ''); ?>">
                 <i class="far fa-circle nav-icon"></i>
                 <p><?php echo e($project->name); ?></p>
                 <i class="right fas fa-angle-left"></i>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                  <a href="<?php echo e(route('projects.tracking.activity', $project->id)); ?>" class="nav-link <?php echo e((request()->Is('projects/tracking/'.$project->id.'/activity')) ? 'active': ''); ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Activity tracking
                    </p>
                  </a>
                </li>

                <li class="nav-item">
                  <a href="<?php echo e(route('projects.tracking.indicator', $project->id)); ?>" class="nav-link <?php echo e((request()->Is('projects/tracking/'.$project->id.'/indicator')) ? 'active': ''); ?>">
                    <i class="far fa-circle nav-icon"></i>
                    <p>
                      Indicator tracking
                    </p>
                  </a>
                </li>



               </ul>
             </li>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
          </li>

         <li class="nav-item">
            <a href="<?php echo e(route('membership')); ?>" class="nav-link  <?php echo e((request()->Is('memberships')) ? 'active': ''); ?>">
              <i class="nav-icon far fa-user"></i>
              <p>
                 Membership
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(route('catchment')); ?>" class="nav-link <?php echo e((request()->Is('catchment*')) ? 'active': ''); ?>">
              <i class="nav-icon fas fa-globe"></i>
              <p>
               Catchment
              </p>
            </a>
          </li>

          <li class="nav-item <?php echo e((request()->Is('settings*')) ? 'menu-open': ''); ?>">
            <a href="#" class="nav-link <?php echo e((request()->Is('settings*')) ? 'active': ''); ?>">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Settings
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ">
              <li class="nav-item">
                <a href="<?php echo e(route('users')); ?>" class="nav-link <?php echo e((request()->Is('settings/users')) ? 'active': ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Management</p>
                </a>
              </li>
              <li class="nav-item <?php echo e((request()->Is('settings/projects*')) ? 'menu-open': ''); ?>">
                <a href="#" class="nav-link <?php echo e((request()->Is('settings/projects*')) ? 'active': ''); ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Management</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?php echo e(route('setting.projects')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects')) ? 'active': ''); ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Projects</p>
                    </a>
                  </li>

                  <li class="nav-item <?php echo e((request()->Is('settings/projects/program-level*')) ? 'menu-open': ''); ?>">
                    <a href="#" class="nav-link <?php echo e((request()->Is('settings/projects/program-level*')) ? 'active': ''); ?>">
                      <i class="nav-icon fas fa-circle"></i>
                      <p>
                        Programs Data
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">

                      <li class="nav-item">
                        <a href="<?php echo e(route('projects.outcomes')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/program-level/outcomes')) ? 'active': ''); ?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Outcomes
                          </p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="<?php echo e(route('projects.intermediate.outcomes')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/program-level/intermediate-outcomes')) ? 'active': ''); ?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Inter-mediate outcomes
                          </p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="<?php echo e(route('projects.output')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/program-level/output') ) ? 'active': ''); ?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Outputs
                          </p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="<?php echo e(route('projects.activities')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/program-level/activities') ) ? 'active': ''); ?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Activity
                          </p>
                        </a>
                      </li>





                    </ul>

                  </li>

                  <li class="nav-item <?php echo e((request()->Is('settings/projects/indicators*')) ? 'menu-open': ''); ?>">
                    <a href="#" class="nav-link <?php echo e((request()->Is('settings/projects/indicators*')) ? 'active': ''); ?>">
                      <i class="nav-icon fas fa-circle"></i>
                      <p>
                        Indicators
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">

                      <li class="nav-item">
                        <a href="<?php echo e(route('indicators.outcomes')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/indicators/outcomes')) ? 'active': ''); ?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Outcomes
                          </p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="<?php echo e(route('indicators.intermediate.outcomes')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/indicators/intermediate-outcomes')) ? 'active': ''); ?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Inter-mediate outcomes
                          </p>
                        </a>
                      </li>

                      <li class="nav-item">
                        <a href="<?php echo e(route('indicators.output')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/indicators/output') ) ? 'active': ''); ?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Outputs
                          </p>
                        </a>
                      </li>


                    </ul>

                  </li>

                  <li class="nav-item">
                    <a href="<?php echo e(route('implementation_plan')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/implementation-plans')) ? 'active': ''); ?>">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Implementation Plan</p>
                    </a>
                  </li>


                  
                  <li class="nav-item <?php echo e((request()->Is('settings/projects/period*')) ? 'menu-open': ''); ?>">
                    <a href="#" class="nav-link <?php echo e((request()->Is('settings/projects/period*')) ? 'active': ''); ?>">
                      <i class="nav-icon fas fa-circle"></i>
                      <p>
                       Period Management
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="<?php echo e(route('period.monthly')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/period/monthly')) ? 'active': ''); ?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p>Monthly</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="<?php echo e(route('period.quartely')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/period/quarterly')) ? 'active': ''); ?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Quarterly
                          </p>
                        </a>

                      </li>

                      <li class="nav-item">
                        <a href="<?php echo e(route('period.annually')); ?>" class="nav-link <?php echo e((request()->Is('settings/projects/period/annually')) ? 'active': ''); ?>">
                          <i class="far fa-circle nav-icon"></i>
                          <p>
                            Annually
                          </p>
                        </a>

                      </li>

                    </ul>

                  </li>

                  

                </ul>
              </li>

            </ul>
          </li>

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
<script src="<?php echo e(asset("assets/plugins/jquery/jquery.min.js")); ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo e(asset("assets/plugins/jquery-ui/jquery-ui.min.js")); ?>"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")); ?>"></script>
<!-- ChartJS -->
<script src="<?php echo e(asset("assets/plugins/chart.js/Chart.min.js")); ?>"></script>
<!-- Sparkline -->
<script src="<?php echo e(asset("assets/plugins/sparklines/sparkline.js")); ?>"></script>
<!-- JQVMap -->
<script src="<?php echo e(asset("assets/plugins/jqvmap/jquery.vmap.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/jqvmap/maps/jquery.vmap.usa.js")); ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo e(asset("assets/plugins/jquery-knob/jquery.knob.min.js")); ?>"></script>
<!-- daterangepicker -->
<script src="<?php echo e(asset("assets/plugins/moment/moment.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/daterangepicker/daterangepicker.js")); ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo e(asset("assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")); ?>"></script>
<!-- Summernote -->
<script src="<?php echo e(asset("assets/plugins/summernote/summernote-bs4.min.js")); ?>"></script>
<!-- overlayScrollbars -->
<script src="<?php echo e(asset("assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/datatables/jquery.dataTables.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/datatables-responsive/js/dataTables.responsive.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/datatables-buttons/js/dataTables.buttons.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/jszip/jszip.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/pdfmake/pdfmake.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/pdfmake/vfs_fonts.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/datatables-buttons/js/buttons.html5.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/datatables-buttons/js/buttons.print.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/datatables-buttons/js/buttons.colVis.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/sweetalert2/sweetalert2.min.js")); ?>"></script>
<script src="<?php echo e(asset("assets/plugins/toastr/toastr.min.js")); ?>"></script>
<script src="<?php echo e(asset('assets/dist/js/loader.js')); ?>"></script>
<script src="<?php echo e(asset('assets/dist/js/jquery.duplicate.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset("assets/dist/js/adminlte.js")); ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo e(asset("assets/dist/js/demo.js")); ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo e(asset("assets/dist/js/pages/dashboard.js")); ?>"></script>
<?php echo $__env->yieldPushContent('custom-scripts'); ?>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
  });
</script>
</body>
</html>
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/layout/app.blade.php ENDPATH**/ ?>