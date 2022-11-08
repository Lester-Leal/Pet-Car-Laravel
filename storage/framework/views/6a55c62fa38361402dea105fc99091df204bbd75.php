<?php $__env->startSection('title', 'Reciept'); ?>

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
                            <a href="#" onclick="Print()" class="btn btn-primary">
                                <i class="fas fa-print"></i>
                                Print
                            </a>
                            <a href="<?php echo e(route('admin.transactions.index')); ?>" class="btn btn-secondary float-right">
                                <i class="fas fa-arrow-left"></i>
                                Back
                            </a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" id="printableArea">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="<?php echo e(asset('assets/images/logo2.png')); ?>" width="140" height="140">
                                </div>
                                <div class="col-md-6 text-right">
                                    <span class="text-success">
                                        <?php echo e(date('d-M-Y, H:m', strtotime($transaction->created_at))); ?>

                                    </span>
                                    <br>
                                    <span class="text-info">
                                        <?php echo e($transaction->Invoice->invoice_number); ?>

                                    </span>

                                </div>
                            </div>

                            <div class="row mt-4">
                                <div class="col-md-12">
                                    <span class=" text-primary">CUSTOMER DETAILS</span>
                                    <hr style="margin: 1px">
                                    <span class=" text-muted">

                                        <?php echo e($transaction->user->name); ?><br>
                                        <?php echo e($transaction->user->address); ?>

                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                    <hr>
                                    <span><h4>SERVICES</h4></span>
                                    <table class="table">
                                        <thead>
                                            <th>Name</th>

                                            <th>Price</th>

                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $transaction->Invoice->invoice_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($invoice_detail->service->name); ?></td>
                                                    <td><?php echo e(number_format($invoice_detail->service->price)); ?></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th class="text-right">
                                                    TOTAL
                                                </th>
                                                <td class="text-danger">
                                                    <?php echo e(number_format($transaction->invoice->invoice_detail->sum('amount'))); ?>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/admin/transactions/receipt.blade.php ENDPATH**/ ?>