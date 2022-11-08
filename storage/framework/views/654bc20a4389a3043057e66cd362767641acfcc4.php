<?php $__env->startSection('title', 'Activity Tracking'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
              <span class=" text-uppercase"><?php echo e($projectname->name); ?> / Activity tracking</span>
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
                                    <th></th>

                                    <th>PROJECT</th>
                                    <th>OBJECTIVE</th>
                                    <th>OUTCOME</th>
                                    <th>INTERMEDIATE OUTCOME</th>
                                    <th>OUTPUT</th>
                                    <th>ACTIVITY</th>
                                    <th>RESPONSIBLE PERSON</th>

                                    <th>

                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $activity->id
                                    ?>
                                    <tr>
                                        <td class=" text-center">
                                            <?php if($activity->status==0): ?>
                                                <i class="fa fa-dot-circle text-danger"></i>
                                            <?php else: ?>
                                            <i class="fa fa-dot-circle text-success"></i>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e($activity->projects->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($activity->objectives->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($activity->outcomes->outcome); ?>

                                        </td>

                                        <td>
                                            <?php if(!empty($activity->intermediateoutcomes_id)): ?>
                                            <?php echo e($activity->intermediateoutcomes->outcome); ?>

                                            <?php else: ?>
                                            <span class="text-warning">N/A</span>
                                            <?php endif; ?>
                                        </td>

                                        <td>
                                            <?php echo e($activity->outputs->output); ?>

                                        </td>

                                        <td>
                                            <?php echo e($activity->activity); ?>

                                        </td>

                                        <td>
                                            <?php echo e($activity->person); ?>

                                        </td>

                                       
                                        <td>
                                            <div class="btn-group">
                                                <a href="<?php echo e(route('projects.tracking.activity.view', [$projectname->id, $id])); ?>" class="btn btn-info btn-sm" >
                                                    <i class="fa fa-eye"></i>
                                                    View
                                                </a>
                                                <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#track<?php echo e($id); ?>">
                                                    <i class="fa fa-plus-circle"></i>
                                                    Tracking
                                                </a>
                                            </div>

                                        </td>

                                    </tr>
                                     <?php echo $__env->make('tracking.activities.track', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/tracking/activities/index.blade.php ENDPATH**/ ?>