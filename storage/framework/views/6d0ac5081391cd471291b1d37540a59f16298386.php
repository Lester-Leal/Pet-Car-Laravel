<?php $__env->startSection('title', 'Sale report'); ?>

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

                            <div class="btn-group">
                                <a name="" id="" class="btn btn-danger"
                                    href="<?php echo e(route('admin.transaction.report', ['period' => 'Daily'])); ?>" role="button">
                                    Daily
                                </a>
                                &nbsp; &nbsp;
                                <a name="" id="" class="btn btn-warning"
                                    href="<?php echo e(route('admin.transaction.report', ['period' => 'Weekly'])); ?>" role="button">
                                    Weekly
                                </a>
                                &nbsp; &nbsp;
                                <a name="" id="" class="btn btn-success"
                                    href="<?php echo e(route('admin.transaction.report', ['period' => 'Monthly'])); ?>" role="button">
                                    Monthly
                                </a>
                                &nbsp; &nbsp;
                                <a name="" id="" class="btn btn-info"
                                    href="<?php echo e(route('admin.transaction.report', ['period' => 'Annually'])); ?>" role="button">
                                    Annually
                                </a>
                                &nbsp;
                            </div>
                            <a href="#" onclick="Print()" class="btn btn-primary">
                                <i class="fas fa-print"></i>
                                Print
                            </a>


                        </div>
                        <!-- /.card-header -->
                        <div class="card-body" id="printableArea">
                            <h3>
                                <?php echo e($period); ?> Sales
                            </h3>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">

                                    <table class="table">
                                        <thead>
                                            <th>Customer</th>
                                            <th>Date</th>
                                            <th>Total Amount</th>

                                        </thead>
                                        <tbody>
                                            <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($transaction->user->name); ?></td>
                                                    <td><?php echo e(date('d-F-Y', strtotime($transaction->created_at))); ?></td>
                                                    <td><?php echo e(number_format($transaction->invoice->invoice_detail->sum('amount'))); ?>

                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <th class="text-right" colspan="2">
                                                    TOTAL
                                                </th>
                                                <td class="text-danger">
                                                    <?php echo e(number_format($transactions->sum('amount'))); ?>

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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/admin/transactions/sales/index.blade.php ENDPATH**/ ?>