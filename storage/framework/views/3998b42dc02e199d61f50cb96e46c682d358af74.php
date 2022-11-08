<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('body'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">
                  <?php echo e($indicator->projects->name); ?>

              </h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">


          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <a name="" id="" class="btn btn-danger" href="<?php echo e(route('dashboard.filter', $indicator->projects->id)); ?>" role="button">
                      <i class=" fa fa-arrow-left"></i>
                       Back
                  </a>
                  <div class="card-tools">

                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>
                                    <strong>
                                        Objective
                                    </strong>
                                </th>
                                <td>
                                    <?php echo e($indicator->objectives->name); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <strong>
                                        Program Level
                                    </strong>
                                </th>
                                <td>
                                    <?php echo e($indicator->indicator_type); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <strong>
                                        Outcome
                                    </strong>
                                </th>
                                <td>
                                    <?php echo e($indicator->outcomes->outcome); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <strong>
                                        Output
                                    </strong>
                                </th>
                                <td>
                                    <?php if(!empty($indicator->output_id)): ?>
                                        <?php echo e($indicator->outputs->output); ?>

                                    <?php else: ?>
                                        <i class="text-warning">
                                            N/A
                                        </i>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <strong>
                                        Indicator
                                    </strong>
                                </th>
                                <td>
                                    <?php echo e($indicator->indicator); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <strong>
                                        Baseline
                                    </strong>
                                </th>
                                <td>
                                    <?php echo e($indicator->baseline); ?>

                                </td>
                            </tr>

                            <tr>
                                <th>
                                    <strong>
                                        Frequency
                                    </strong>
                                </th>
                                <td>
                                    <?php echo e($indicator->period); ?>

                                </td>
                            </tr>
                        </tr>



                        </tbody>
                    </table>
                    <hr>
                    <table class="table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th>
                                    <strong>
                                        Target number
                                    </strong>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Period</th>
                                <th>Target number</th>
                            </tr>

                                    <?php if($indicator->period=="Annually"): ?>
                                        <?php $__currentLoopData = $indicator->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                           <tr>
                                               <td>
                                                <?php echo e($detail->period); ?>

                                               </td>
                                               <td>
                                                <?php echo e($detail->target); ?>

                                               </td>
                                           </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <?php $__currentLoopData = $indicator->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php echo e($detail->periods->name); ?>

                                            </td>
                                            <td>
                                                <?php echo e($detail->target); ?>

                                            </td>
                                        </tr>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>


                        </tbody>
                    </table>
                    <hr>
                    <table class=" table table-bordered mt-4">
                        <thead>
                            <tr>
                                <th colspan="5">
                                    <strong>
                                        ACTUAL PERFOMANCE
                                    </strong>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <th>Period</th>
                                <th>Perfomance</th>
                                <th>Status</th>
                                <th>Deliverables</th>
                                <th>Explaination</th>
                            </tr>

                                    <?php if($indicator->trackings->count()>0): ?>
                                        <?php $__currentLoopData = $indicator->trackings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicator_tracking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($indicator_tracking->period); ?></td>
                                                <td><?php echo e($indicator_tracking->progress); ?></td>
                                                <td>
                                                    <?php if($indicator_tracking->status==1): ?>
                                                        <span class="badge badge-success">
                                                            Done
                                                        </span>
                                                    <?php elseif($indicator_tracking->status==2): ?>
                                                        <span class="badge badge-danger">
                                                            Not done
                                                        </span>
                                                    <?php elseif($indicator_tracking->status==3): ?>
                                                        <span class="badge badge-warning">
                                                            Pending
                                                        </span>
                                                    <?php elseif($indicator_tracking->status==4): ?>
                                                        <span class="badge badge-info">
                                                            In progress
                                                        </span>
                                                    <?php endif; ?>
                                                </td>
                                                <td>
                                                    <?php echo e($indicator_tracking->deliverables); ?>

                                                </td>
                                                <td>
                                                    <?php echo e($indicator_tracking->explaination); ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>

                                    <tr>
                                        <td colspan="5">
                                            <div class="alert alert-warning">
                                                No progress yet
                                            </div>
                                        </td>

                                    </tr>

                                    <?php endif; ?>

                        </tbody>
                    </table>
                </div><!-- /.card-body -->
              </div>

            </section>

          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/dashboard/indicators/index.blade.php ENDPATH**/ ?>