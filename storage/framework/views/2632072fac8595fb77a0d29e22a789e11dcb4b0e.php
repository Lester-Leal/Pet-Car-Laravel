<?php $__env->startSection('title', 'activity_tracking Tracking'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
              VIEW PROGRESS
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
                            <a name="" id="" class="btn btn-danger" href="<?php echo e(route('projects.tracking.activity', $projectname->id)); ?>" role="button">
                                <i class="fa fa-arrow-circle-left"></i>
                                Back
                            </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>

                                    <th>Status</th>
                                    <th>Deliverables</th>
                                    <th>Explaination</th>

                                    <th>

                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $activity_trackings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity_tracking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $activity_tracking->id;
                                    ?>
                                    <tr  data-toggle="collapse" href="#top<?php echo e($id); ?>">



                                        <td>
                                           <?php if($activity_tracking->status==1): ?>
                                                <span class=" badge badge-success">Done</span>
                                           <?php elseif($activity_tracking->status==2): ?>
                                                <span class=" badge badge-danger">Not done</span>
                                            <?php elseif($activity_tracking->status==3): ?>
                                                <span class=" badge badge-warning">Pending</span>
                                            <?php elseif($activity_tracking->status==4): ?>
                                                <span class=" badge badge-primary">In progress</span>
                                           <?php endif; ?>
                                        </td>


                                        <td class="text-center">
                                           <?php if(!empty($activity_tracking->deliverables)): ?>
                                                <?php echo e($activity_tracking->deliverables); ?>


                                           <?php else: ?>
                                           <span class="text-warning">---</span>
                                           <?php endif; ?>
                                        </td>

                                        <td class="text-center">
                                            <?php if(!empty($activity_tracking->explaination)): ?>
                                                 <?php echo e($activity_tracking->explaination); ?>


                                            <?php else: ?>
                                            <span class="text-warning">---</span>
                                            <?php endif; ?>
                                         </td>

                                        <td>
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit<?php echo e($id); ?>">
                                                    <i class="fa fa-edit"></i>
                                                    edit
                                                </a>

                                            </div>

                                        </td>



                                    </tr>
                                    <?php echo $__env->make('tracking.activities.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/tracking/activities/view.blade.php ENDPATH**/ ?>