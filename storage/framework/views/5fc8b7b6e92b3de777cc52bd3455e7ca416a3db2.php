

<?php $__env->startSection('title', 'Categories'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>
                        Categories
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
                            <?php echo $__env->make('admin.categories.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = 'Category';
                            ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>NAME</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $id = $category->id;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo e($category->name); ?>

                                            </td>

                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    <a class="btn btn-warning" href="#" role="button"
                                                        data-toggle="modal" data-target="#edit<?php echo e($id); ?>">
                                                        <i class="fas fa-edit"></i>
                                                        Edit
                                                    </a>

                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#delete<?php echo e($id); ?>">
                                                        <i class="fas fa-trash"></i>
                                                        Delete
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php echo $__env->make('admin.categories.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mphat\Desktop\LARAVEL PROJECTS\pet_care\resources\views/admin/categories/index.blade.php ENDPATH**/ ?>