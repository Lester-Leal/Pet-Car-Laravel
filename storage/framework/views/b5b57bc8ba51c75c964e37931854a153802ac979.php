

<?php $__env->startSection('title', 'Settings'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        <?php echo $__env->yieldContent('title'); ?>
                    </h1>
                </div>

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo e(route('customer.settings.update')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('patch'); ?>
                        <div class="card">
                            <div class="card-header">
                                <div class="form-group">
                                    <label for="appointments_per_day">Name</label>
                                    <input type="text" name="name" id="appointments_per_day" class="form-control"
                                        placeholder="" aria-describedby="helpId" value="<?php echo e($user->name); ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control" placeholder=""
                                        aria-describedby="helpId" value="<?php echo e($user->email); ?>" required>

                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder=""
                                        aria-describedby="helpId" value="<?php echo e($user->phone); ?>" required>

                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea class="form-control" name="address" id="address" rows="3" required><?php echo e($user->address); ?></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="" class="form-control"
                                        placeholder="" aria-describedby="helpId">

                                </div>
                                <button name="" id="" class="btn btn-primary" href="#" type="submit">
                                    Update
                                </button>
                            </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/customers/settings/index.blade.php ENDPATH**/ ?>