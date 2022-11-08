

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
                                                    <span class="badge badge-info mr-1">
                                                        <?php echo e($invoice_detail->service->name); ?>(<?php echo e(number_format($invoice_detail->amount)); ?>)
                                                    </span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                            <td>
                                                <?php echo e($invoice->invoice_detail->sum('amount')); ?>

                                            </td>
                                            <td>
                                                <?php echo e(date('d-F-Y', strtotime($invoice->due_date))); ?>

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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/customers/invoices/index.blade.php ENDPATH**/ ?>