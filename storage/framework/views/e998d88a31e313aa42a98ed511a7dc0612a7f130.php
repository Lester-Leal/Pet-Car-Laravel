<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('body'); ?>
<?php require_once(base_path('vendor').'/vms_chartDashboard/dashboard.blade.php');?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                <div class="row">

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card bg-green text-black mb-4">
                            <div class="card-body"><h3 class="mb-0 number-font" align='center'><?php echo e($users); ?></h3> &nbsp;<h4 class="mb-0 number-font" align='center'>Customers</h4> </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-black stretched-link" href="<?php echo e(url('admin/customers')); ?>"></a>
                                <div class="small text-black">View Details &nbsp;<i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card bg-danger text-black mb-4">
                            <div class="card-body"><h3 class="mb-0 number-font" align='center'><?php echo e($patients); ?></h3> &nbsp; <h4 class="mb-0 number-font" align='center'>Patients</h4> </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-black stretched-link" href="<?php echo e(url('admin/pets')); ?>"></a>
                                <div class="small text-black">View Details &nbsp;<i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card bg-primary text-black mb-4">
                            <div class="card-body">
                                <h3 class="mb-0 number-font" align='center'>
                                    <?php if($total_paid == null): ?>
                                    0.00
                                    <?php else: ?>
                                        <?php echo e(number_format($total_paid->sum('amount'), 2)); ?>

                                    <?php endif; ?>
                                </h3>
                                &nbsp;
                                <h4 class="mb-0 number-font" align='center'>Total Sales</h4>
                            </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-black stretched-link" href="<?php echo e(url('admin/transactions')); ?>"></a>
                                <div class="small text-black">View Details &nbsp;<i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                        <div class="card bg-danger text-black mb-4">

                            <div class="card-body"><h3 class="mb-0 number-font" align='center'><?php echo e($appointments); ?></h3> &nbsp; <h4 class="mb-0 number-font" align='center'>Appointments</h4> </div>
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-black stretched-link" href="<?php echo e(url('admin/appointments')); ?>"></a>
                                <div class="small text-black">View Details &nbsp;<i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

            <div class="content-header">
                <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                    <h4 class="m-0">Scheduled Appointments</h4>
                    </div><!-- /.col -->
                </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Appointment Table -->

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-body">

                                    <table id="example1" class="table table-bordered table-striped">

                                        <thead>
                                            <tr>
                                                <th>CUSTOMER</th>
                                                <th>TITLE</th>
                                               
                                                <th>START TIME</th>
                                                <th>END TIME</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $appointment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php
                                                    $id = $appointment->id;
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo e($appointment->user->name); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e($appointment->title); ?>

                                                    </td>
                                                    <td>
                                                        <?php echo e(date('d-F-Y H:m', strtotime($appointment->start))); ?>

                                                    </td>

                                                    <td>
                                                        <?php echo e(date('d-F-Y H:m', strtotime($appointment->end))); ?>

                                                    </td>
                                                    
                                                    <td>
                                                        <?php if($appointment->status == 0): ?>
                                                            <span class="text-warning">Pending</span>
                                                        <?php elseif($appointment->status == 1): ?>
                                                            <span class="text-warning">Accepted</span>
                                                        <?php else: ?>
                                                            <span class="text-warning">Rejected</span>
                                                        <?php endif; ?>
                                                    </td>

                                                    
                                                </tr>
                                                <?php echo $__env->make('admin.appointments.approve', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </tbody>

                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-xl-6">
                            <div class="card text-black mb-4">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Monthly Appointment</b></h5>
                                    &nbsp;
                                    <?php echo $result[0];?>

                                </div>

                            </div>
                        </div>



                    </div>
                </div>
            </div>


        </section>
        <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/dashboard.blade.php ENDPATH**/ ?>