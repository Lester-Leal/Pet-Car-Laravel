<?php $__env->startSection('title', 'Activity'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                <?php if($status=='4'): ?>
                    IN PROGRESS ACTIVITIES
                <?php elseif($status=='1'): ?>
                    DONE ACTIVITIES
                <?php elseif($status=='2'): ?>
                    NOT DONE ACTIVITIES
                <?php elseif($status=='3'): ?>
                    PENDING ACTIVITIES
                <?php endif; ?>
            </h1>
            </div>

        </div>
        </div>
    </section>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                          <a href="<?php echo e(route('dashboard.filter', $project->id)); ?>" class="btn btn-danger">
                              <i class="fas fa-arrow-left"></i>
                                Back
                          </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = "implementation";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>ACTIVITY</th>
                                    <th>RESPONSIBLE PERSON</th>
                                    <th>START DATE</th>
                                    <th>END DATE</th>
                                    <?php if($status==3): ?>
                                    <th>EXPLANATION</th>
                                    <?php endif; ?>




                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $activity->id
                                    ?>
                                    <tr>


                                        <td>
                                            <?php echo e($activity->activity); ?>

                                        </td>

                                        <td>
                                            <?php echo e($activity->person); ?>

                                        </td>

                                        <td style="cursor: pointer" data-toggle="modal" data-target="#budget<?php echo e($id); ?>">
                                            <?php echo e(date('d/m/y', strtotime($activity->start_date))); ?>

                                        </td>

                                        <td style="cursor: pointer" data-toggle="modal" data-target="#budget<?php echo e($id); ?>">
                                            <?php echo e(date('d/m/y', strtotime($activity->end_date))); ?>

                                        </td>

                                        <?php if($status==3): ?>
                                        <td>
                                            <?php echo e($activity->explaination); ?>

                                        </td>
                                        <?php endif; ?>

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


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/dashboard/activities/index.blade.php ENDPATH**/ ?>