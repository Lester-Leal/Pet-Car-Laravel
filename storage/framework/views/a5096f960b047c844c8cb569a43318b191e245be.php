<?php $__env->startSection('title', 'TIMS ACTIVITY'); ?>

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
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <span class=" text-bold text-capitalize">
                                Activity details
                            </span>
                            <a href="" class="btn btn-primary float-right" data-target="#addreport" data-toggle="modal">
                                <i class="fas fa-plus-circle"></i>
                                  Create
                            </a>
                            <?php echo $__env->make('projects.tims.activity.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>

                        <div class="card-body">
                            <?php if($event->tims_issue->count()>0): ?>
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center active">
                                    KEY ISSUES PRESENTED

                                </li>


                                <?php $__currentLoopData = $event->tims_issue; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <li class="list-group-item">
                                    <span class="badge badge-danger mr-3">
                                        <?php echo e($key+1); ?>

                                    </span>
                                        <?php echo e($issue->issue); ?>


                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>

                            <ul class="list-group mt-4">
                                <li class="list-group-item d-flex justify-content-between align-items-center active">
                                    CONCERNS FROM THE MANASO DISTRICT TEAM
                                </li>
                                <?php $__currentLoopData = $event->tims_practice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $concern): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li class="list-group-item">
                                        <span class="badge badge-warning mr-3">
                                            <?php echo e($key+1); ?>

                                        </span>
                                            <?php echo e($concern->practice); ?>


                                    </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>

                            <ul class="list-group mt-4">
                                <li class="list-group-item d-flex justify-content-between align-items-center active">
                                    ATTENDED PARTICIPANTS

                                </li>
                                <?php $__currentLoopData = $event->participant->where('status', 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $participant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <li class="list-group-item">
                                    <span class="badge badge-success mr-3">
                                        <?php echo e($key+1); ?>

                                    </span>
                                        <?php echo e($participant->name); ?>


                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </ul>

                            <?php else: ?>
                                <div class="alert alert-warning" role="alert">
                                  <h4 class="alert-heading"></h4>
                                  <p></p>
                                  <p class="mb-0">
                                    No data has been collected yet
                                  </p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                          <strong class=" text-capitalize text-bold">
                            Participants
                          </strong>

                          <a href="" class="btn btn-primary float-right" data-target="#add" data-toggle="modal">
                              <i class="fas fa-plus-circle"></i>
                                Add participants
                          </a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="POST" action="<?php echo e(route('recordClm', $event->id)); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('patch'); ?>
                                <table class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>Name</th>
                                          <th>Gender</th>

                                          <th></th>



                                      </tr>
                                  </thead>
                                  <tbody>
                                      <?php $__currentLoopData = $event->participant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $part): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                          <tr  data-toggle="collapse">

                                              <td>
                                                  <?php echo e($part->name); ?>

                                              </td>

                                              <td>
                                                  <?php echo e($part->gender); ?>

                                              </td>



                                              <input type="hidden" name="id[]" value="<?php echo e($part->id); ?>">
                                              <td class="text-center" for="checkbox<?php echo e($event->id); ?>" style="cursor: pointer">
                                                  <?php if($part->status==1): ?>
                                                      <i class="fa fa-check fa-1x text-success"></i>
                                                  <?php else: ?>

                                                        <input class="form-check-input ml-1" name="status[]" id="checkbox<?php echo e($event->id); ?>" type="checkbox" value="<?php echo e($part->id); ?>" aria-label="<?php echo e($part->name); ?>" style="cursor: pointer">


                                                  <?php endif; ?>

                                              </td>



                                          </tr>

                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                  </tbody>

                                </table>
                                <div class="row">
                                    <div class="col-md-6"></div>
                                    <div class="col-md-6">
                                        <?php if($event->participant->where('status','!=', 1)->count()>0): ?>
                                        <button type="submit" class="btn btn-warning float-lg-right">
                                            <i class="fa fa-plus-circle"></i>
                                            Save Participants
                                        </button>
                                        <?php endif; ?>
                                    </div>
                                </div>
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
            $('#activity').slideDown();
        }else{
            $('#activity').slideUp();
        }
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/projects/tims/activity/index.blade.php ENDPATH**/ ?>