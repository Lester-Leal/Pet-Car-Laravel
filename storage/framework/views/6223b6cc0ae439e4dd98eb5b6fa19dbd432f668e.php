<?php $__env->startSection('title', 'Community Led Monitoring'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                CLM MONITORING AND SUPERVISION
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
                          <a href="<?php echo e(route('active.projects', $eventplan->project_id)); ?>" class="btn btn-danger float-left" >
                              <i class="fas fa-arrow-circle-left"></i>
                                Back
                          </a>

                          <a href="<?php echo e(route('project.clm.monitoring.create', $event)); ?>" class="btn btn-primary float-right" >
                              <i class="fas fa-plus-circle"></i>
                                Create
                          </a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>Area Observed</th>
                                            <th>Satisfactory</th>
                                            <th>Unsatisfactory</th>
                                            <th>Not observe</th>
                                            <th>Comment</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $visions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $vision): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $id = $vision->id;
                                            ?>
                                            <tr  data-toggle="collapse" href="#top<?php echo e($id); ?>">

                                                <td>
                                                    <?php echo e($vision->supervision->name); ?>

                                                </td>

                                                <td class="text-success text-center">
                                                    <?php if($vision->list_option=="Satisfactory"): ?>
                                                        <i class="fa fa-check fa-1x"></i>
                                                   <?php endif; ?>
                                                </td>

                                                <td class="text-success text-center">
                                                    <?php if($vision->list_option=="Unsatisfactory"): ?>
                                                        <i class="fa fa-check fa-1x"></i>
                                                   <?php endif; ?>
                                                </td>


                                                <td class="text-success text-center">
                                                   <?php if($vision->list_option=="Not observed"): ?>
                                                        <i class="fa fa-check fa-1x"></i>
                                                   <?php endif; ?>
                                                </td>


                                                <td>
                                                   <?php echo e($vision->comment); ?>

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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/projects/clm/monitoring/index.blade.php ENDPATH**/ ?>