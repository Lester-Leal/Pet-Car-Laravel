

<?php $__env->startSection('title', 'Invoices'); ?>

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
                            <?php echo $__env->make('admin.invoices.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = 'Invoice';
                            ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>CUSTOMER</th>
                                        <th>INVOICE NUMBER</th>
                                        <th>SERVICES</th>
                                        <th>TOTAL COST</th>
                                        <th>DUE DATE</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $id = $invoice->id;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo e($invoice->user->name); ?>

                                            </td>
                                            <td>
                                                <?php echo e($invoice->invoice_number); ?>

                                            </td>
                                            <td>
                                                <?php $__currentLoopData = $invoice->invoice_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span class="badge badge-info">
                                                        <?php echo e($invoice_detail->service->name); ?>

                                                    </span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                            <td>
                                                <?php echo e($invoice->invoice_detail->sum('amount')); ?>

                                            </td>
                                            <td>
                                                <?php echo e(date('d-F-Y', strtotime($invoice->due_date))); ?>

                                            </td>


                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    

                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#delete<?php echo e($id); ?>">
                                                        <i class="fas fa-trash"></i>

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php echo $__env->make('admin.invoices.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mphat\Desktop\LARAVEL PROJECTS\pet_care\resources\views/admin/invoices/index.blade.php ENDPATH**/ ?>