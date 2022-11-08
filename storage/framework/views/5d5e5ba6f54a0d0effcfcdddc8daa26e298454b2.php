

<?php $__env->startSection('title', 'Appointments'); ?>

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
                        <div class="card-header">
                            Remaining: <span class="badge badge-success"><?php echo e($remaining); ?></span>
                            <a href="<?php echo e(route('customer.appointments.calendar')); ?>"
                                class="btn btn-warning float-right ml-1">
                                <i class="fas fa-calendar"></i>
                                View calendar
                            </a>
                            <?php if($status1 != 0 && $status != 0): ?>
                                <a href="#" class="btn btn-primary float-right" data-toggle="modal"
                                    data-target="#add">
                                    <i class="fas fa-plus-circle"></i>
                                    Create
                                </a>
                                <?php echo $__env->make('customers.appointments.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </div>


                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = 'Appointment';
                            ?>

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
                                                        data-toggle="modal" data-target="#delete<?php echo e($id); ?>">
                                                        <i class="fas fa-trash"></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php echo $__env->make('deleteModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/customers/appointments/index.blade.php ENDPATH**/ ?>