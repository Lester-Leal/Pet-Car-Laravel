<?php $__env->startSection('title', 'Membership'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                MEMBERSHIP
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
                          <div class="btn-group float-right">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add">
                                <i class="fas fa-plus-circle"></i>
                                  Add
                            </a>
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#import">
                              <i class="fas fa-plus-circle"></i>
                                Import
                          </a>
                          </div>
                           <?php echo $__env->make('membership.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                           <?php echo $__env->make('membership.import', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-md-3">
                                        <div class="small-box bg-success">
                                          <div class="inner">
                                            <h3>
                                            <?php echo e($memberships->where("status", "PAID")->count()); ?>

                                            </h3>
                                            <p>
                                                PAID
                                            </p>
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-md-3">
                                        <div class="small-box bg-danger">
                                          <div class="inner">
                                            <h3>
                                            <?php echo e($memberships->where("status", Null)->count()); ?>

                                            </h3>
                                            <p>
                                                NOT PAID
                                            </p>
                                          </div>
                                        </div>
                                      </div>

                                <div class="col-md-6"></div>
                            </div>
                            <?php
                                $page = "memberships";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>CONTACT DETAILTS</th>
                                    <th>N0. OF MALE</th>
                                    <th>NO. OF FEMALE</th>
                                    <th>DISTRICT</th>
                                    <th>SPECIALIZATION</th>
                                    <th>STATUS</th>
                                    <th>CERTIFICATE ISSUED</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $memberships; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $membership): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $membership->id
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo e($membership->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($membership->contact); ?>

                                        </td>
                                        <td>
                                            <?php echo e($membership->male); ?>

                                        </td>
                                        <td>
                                            <?php echo e($membership->female); ?>

                                        </td>
                                        <td>
                                            <?php echo e($membership->district); ?>

                                        </td>
                                        <td>
                                            <?php echo e($membership->specialization); ?>

                                        </td>
                                        <td>
                                            <?php if($membership->status=="PAID"): ?>
                                                <span class="text-success">Paid</span>
                                            <?php else: ?>
                                            <span class="text-danger">Not paid</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e($membership->certificate); ?>

                                        </td>

                                        <td>
                                            <div class="btn-group more" data-id="<?php echo e($id); ?>" role="group" aria-label="Button group">
                                                <a class="btn btn-warning btn-sm" href="#" role="button" data-toggle="modal" data-target="#edit<?php echo e($id); ?>">
                                                    <i class="fas fa-edit"></i>
                                                    Edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#" role="button" data-toggle="modal" data-target="#delete<?php echo e($id); ?>">
                                                    <i class="fas fa-trash"></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </td>
                                    </tr>

                                     <?php echo $__env->make('membership.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php $__env->startPush('custom-scripts'); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/membership/index.blade.php ENDPATH**/ ?>