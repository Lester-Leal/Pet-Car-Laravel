

<?php $__env->startSection('title', 'Pets'); ?>

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
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = 'Pets';
                            ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NAME</th>
                                        <th>BREED</th>

                                        <th>CATEGORY</th>
                                        <th>AGE</th>
                                        <th>GENDER</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $pets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $id = $pet->id;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo e($pet->name); ?>

                                            </td>
                                            <td>
                                                <?php echo e($pet->bleed); ?>

                                            </td>

                                            <td>
                                                <?php echo e($pet->category->name); ?>

                                            </td>

                                            <td>
                                                <?php echo e($pet->age); ?>

                                            </td>
                                            <td>
                                                <?php echo e($pet->gender); ?>

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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/customers/pets/index.blade.php ENDPATH**/ ?>