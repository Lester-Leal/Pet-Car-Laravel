<?php $__env->startSection('title', 'Community Led Monitoring Reporting'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                CLM MONITORING
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
                            <a href="<?php echo e(route('project.clm.monitoring', $event)); ?>" class="btn btn-danger float-left" >
                                <i class="fas fa-arrow-circle-left"></i>
                                  Back
                            </a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">

                          <form action="<?php echo e(route('project.clm.monitoring.create', $event)); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div id="activities">

                                <table id="example1" class="table  table-striped">
                                    <thead>
                                        <tr>
                                            <th>Area Observed</th>
                                            <th>Satisfactory</th>
                                            <th>Unsatisfactory</th>
                                            <th>Not observe</th>
                                            <th>Comment</th>
                                            <th>

                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $visions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $vision): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php
                                                $id = $vision->id;
                                            ?>
                                            <tr  data-toggle="collapse" href="#top<?php echo e($id); ?>">

                                                <td>
                                                    <input type="hidden" name="question[<?php echo e($key); ?>]" value="<?php echo e($vision->id); ?>">
                                                    <input type="hidden" name="event_id" value="<?php echo e($event); ?>">
                                                    <?php echo e($vision->name); ?>

                                                </td>

                                                <td>
                                                    <?php
                                                        $check = $vision->checklist->where('eventplan_id', $event)->first();
                                                    ?>
                                                    <input type="radio" name="option[<?php echo e($key); ?>]" value="Satisfactory"
                                                    class="form-control"  <?php if(!empty($check->list_option) && $check->list_option=="Satisfactory"): ?>checked <?php endif; ?>>
                                                </td>

                                                <td>
                                                    <input type="radio" name="option[<?php echo e($key); ?>]" value="Unsatisfactory" class="form-control" <?php if(!empty($check->list_option) && $check->list_option=="Unsatisfactory"): ?>checked <?php endif; ?>>
                                                </td>


                                                <td>
                                                    <input type="radio" name="option[<?php echo e($key); ?>]" value="Not observed" class="form-control" <?php if(!empty($check->list_option) && $check->list_option=="Not observed"): ?>checked <?php endif; ?>>
                                                </td>


                                                <td>
                                                    <div class="form-group">

                                                      <input type="text" name="comment[<?php echo e($key); ?>]" id="" class="form-control" placeholder="" aria-describedby="helpId">

                                                </td>


                                            </tr>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </tbody>

                                  </table>
                            </div>
                              <button type="submit" class="btn btn-primary">
                                  <i class="fa fa-check-circle"></i>
                                  Save
                              </button>
                            </form>

                        </div>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>
        </div>
    </div>

      <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/projects/clm/monitoring/create.blade.php ENDPATH**/ ?>