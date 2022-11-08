<?php $__env->startSection('title', 'TIMS'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                TIMS ACTIVITY
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

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>District</th>
                                    <th>Facilitator</th>
                                    <th>Date of event</th>
                                    <th>Topic</th>
                                    <th>Status</th>
                                    <th>

                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $eventplans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $eventplan->id;
                                    ?>
                                    <tr  data-toggle="collapse" href="#top<?php echo e($id); ?>">

                                        <td>
                                            <?php echo e($eventplan->district->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($eventplan->facilitator); ?>

                                        </td>


                                        <td>
                                            <?php echo e(date("d-F-Y", strtotime($eventplan->event_date))); ?>

                                        </td>
                                        <td>
                                            <?php echo e($eventplan->topic); ?>

                                        </td>



                                        <td class="text-center">
                                            <?php if($eventplan->status==1): ?>
                                                <span class="text-success">Done</span>
                                            <?php elseif($eventplan->status==2): ?>
                                                <span class="text-danger">Not done</span>
                                            <?php else: ?>
                                                <span class="text-warning">pending</span>
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <a href="<?php echo e(route('tims.activity', $eventplan->id)); ?>" class="btn btn-warning btn-sm">
                                                <i class="fa fa-plus-circle"></i>
                                                Record data
                                            </a>
                                        </td>



                                    </tr>

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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/projects/tims/index.blade.php ENDPATH**/ ?>