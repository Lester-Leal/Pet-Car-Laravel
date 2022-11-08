

<?php $__env->startSection('title', 'appointments'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <?php echo $__env->yieldContent('title'); ?>
                    </h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content">
        <div class="container-fluid">
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
                                        <th>DATE</th>
                                        <th>START TIME</th>
                                        <th>END TIME</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $appointments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appointment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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

                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">

                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#approve<?php echo e($id); ?>">
                                                        <i class="fas fa-check-circle"></i>
                                                        Approve
                                                    </a>
                                                </div>
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
            </div>
        </div>
    </div>

    <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mphat\Desktop\LARAVEL PROJECTS\pet_care\resources\views/admin/appointments/index.blade.php ENDPATH**/ ?>