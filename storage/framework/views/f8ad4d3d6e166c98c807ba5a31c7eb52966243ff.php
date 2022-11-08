<?php $__env->startSection('title', 'Medical Records'); ?>

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
                            <?php echo $__env->make('admin.diagnosis.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = 'Diagnosis';
                            ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>DOCTOR</th>
                                        <th>CUSTOMER</th>
                                        <th>PET NAME</th>
                                        <th>SERVICE</th>
                                        <th>DIAGNOSIS</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $diagnoses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $diagnosis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $id = $diagnosis->id;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo e($diagnosis->doctor->name); ?>

                                            </td>
                                            <td>
                                                <?php echo e($diagnosis->user->name); ?>

                                            </td>
                                            <td>
                                                <?php echo e($diagnosis->pet->name); ?>

                                            </td>
                                            <td>
                                                <?php echo e($diagnosis->service->name); ?>

                                            </td>

                                            <td>
                                                <?php echo e($diagnosis->result); ?>

                                            </td>

                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    <a class="btn btn-warning" href="#" role="button"
                                                        data-toggle="modal" data-target="#edit<?php echo e($id); ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    &nbsp; &nbsp;
                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#delete<?php echo e($id); ?>">
                                                        <i class="fas fa-trash"></i>

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php echo $__env->make('admin.diagnosis.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
<?php $__env->startPush('scripts'); ?>
    <script>
        $('body').on('change', '#customer_id', function() {
            var id = $(this).val();
            $.ajax({
                type: "get",
                url: "<?php echo e(route('admin.getPets')); ?>",
                data: {
                    id: id
                },
                beforeSend: () => {
                    Loader.open();
                },

                success: function(response) {
                    Loader.close();
                    $('#pet_id').html(response);
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/admin/diagnosis/index.blade.php ENDPATH**/ ?>