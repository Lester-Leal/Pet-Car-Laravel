<?php $__env->startSection('title', 'Bill Statements'); ?>

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
                            <?php echo $__env->make('admin.transactions.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = 'Transaction';
                            ?>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>

                                        <th>CUSTOMER</th>
                                        <th>INVOICE NUMBER</th>
                                        <th>SERVICES</th>
                                        <th>TOTAL PAID</th>
                                        <th>DATE</th>

                                        <th>ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php
                                            $id = $transaction->id;
                                        ?>
                                        <tr>
                                            <td>
                                                <?php echo e($transaction->user->name); ?>

                                            </td>
                                            <td>
                                                <?php echo e($transaction->invoice->invoice_number); ?>

                                            </td>
                                            <td>
                                                <?php $__currentLoopData = $transaction->Invoice->invoice_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice_detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <span class="badge badge-info">
                                                        <?php echo e($invoice_detail->service->name); ?>

                                                    </span>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </td>
                                            <td>
                                                <?php echo e($transaction->amount); ?>

                                            </td>
                                            <td>
                                                <?php echo e(date('d-F-Y, H:m', strtotime($transaction->created_at))); ?>

                                            </td>


                                            <td>
                                                <div class="btn-group" role="group" aria-label="Button group">
                                                    
                                                    <a class="btn btn-success"
                                                        href="<?php echo e(route('admin.transactions.show', ['transaction' => $id])); ?>"
                                                        title="generate receipt">
                                                        <i class="fas fa-eye"></i>

                                                    </a>
                                                    &nbsp; &nbsp;
                                                    <a class="btn btn-danger" href="#" role="button"
                                                        data-toggle="modal" data-target="#delete<?php echo e($id); ?>">
                                                        <i class="fas fa-trash"></i>

                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php echo $__env->make('admin.transactions.edit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <Script>
        $('body').on('change', '#user_id', function() {
            var id = $(this).val();

            $.ajax({
                type: "get",
                url: "<?php echo e(route('admin.getInvoice')); ?>",
                data: {
                    id: id
                },
                beforeSend: () => {
                    Loader.open();
                },
                success: function(response) {
                    Loader.close();
                    $('#invoice_id').html(response);
                }
            });
        });

        $('body').on('change', '#invoice_id', function() {
            var id = $(this).val();

            $.ajax({
                type: "get",
                url: "<?php echo e(route('admin.getAmount')); ?>",
                data: {
                    id: id
                },
                beforeSend: () => {
                    Loader.open();
                },
                success: function(response) {
                    Loader.close();
                    $('#total_cost').val(response);
                }
            });
        });

        $('body').on('click', '#transactionButton', function(e) {
            e.preventDefault();
            var total = parseInt($('#total_cost').val());
            var amount_paid = parseInt($('#amount_paid').val());


            if (amount_paid >= total) {
                $('#transactionForm').submit()
            } else {
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    title: 'Amount paid is less than amount supposed to be paid',
                    showConfirmButton: false,
                    timer: 3000,
                });
            }
        });
    </Script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/admin/transactions/index.blade.php ENDPATH**/ ?>