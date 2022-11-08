<?php $__env->startSection('title', 'Community Led Monitoring Reporting'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                CLM MONITORING AND SUPERVISION CHECK LIST
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

                          <form action="<?php echo e(route('createClm', $event->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                              <label for="">Did the activity happen?</label>
                              <select class="form-control" name="status" id="status" required>
                                <option value="1">Yes</option>
                                <option value="2">No</option>
                              </select>
                            </div>

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
                                                    <input type="hidden" name="event_id" value="<?php echo e($event->id); ?>">
                                                    <?php echo e($vision->name); ?>

                                                </td>

                                                <td>
                                                    <input type="radio" name="option[<?php echo e($key); ?>]" value="Satisfactory" class="form-control" <?php if($vision->list_option=="Satisfactory"): ?>checked <?php endif; ?>>
                                                </td>

                                                <td>
                                                    <input type="radio" name="option[<?php echo e($key); ?>]" value="Unsatisfactory" class="form-control" <?php if($vision->list_option=="Unsatisfactory"): ?>checked <?php endif; ?>>
                                                </td>


                                                <td>
                                                    <input type="radio" name="option[<?php echo e($key); ?>]" value="Not observed" class="form-control" <?php if($vision->list_option=="Not observed"): ?>checked <?php endif; ?>>
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

<?php $__env->startPush('custom-scripts'); ?>
    <script>
        $('body').on('change','#status', function () {
            if ($(this).val()==1) {
                $('#activities').slideDown('slow');
            }else{
                $('#activities').slideUp('slow');
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/projects/clm/create.blade.php ENDPATH**/ ?>