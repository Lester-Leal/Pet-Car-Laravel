

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
                        <div class="card-header">
                            <a href="#" class="btn btn-primary float-right" data-toggle="modal" data-target="#add">
                                <i class="fas fa-plus-circle"></i>
                                Create
                            </a>
                            <?php echo $__env->make('admin.pets.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = 'Pets';
                            ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>PETS NAME</th>
                                        <th>OWNER</th>
                                        <th>BREED</th>
                                        <th>CATEGORY</th>
                                        <th>AGE</th>
                                        <th>GENDER</th>
                                        <th>HEIGHT</th>
                                        <th>WEIGHT</th>
                                        <th>STATUS</th>

                                        <th></th>
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
                                                <?php echo e($pet->user->name); ?>

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

                                            <td>
                                                <?php if($pet->status == 1): ?>
                                                    <span class="badge badge-success">Inpatient</span>
                                                <?php else: ?>
                                                    <span class="badge badge-danger">Outpatient</span>
                                                <?php endif; ?>
                                            </td>

                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    <a class="btn btn-warning" href="#" role="button"
                                                        data-toggle="modal" data-target="#edit<?php echo e($id); ?>">
                                                        <i class="fas fa-edit"></i>

                                                    </a>

                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#delete<?php echo e($id); ?>">
                                                        <i class="fas fa-trash"></i>

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php echo $__env->make('admin.pets.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/admin/pets/index.blade.php ENDPATH**/ ?>