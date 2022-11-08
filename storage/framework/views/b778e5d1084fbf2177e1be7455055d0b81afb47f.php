

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
                    <form action="<?php echo e(route('admin.settings')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="card">
                            <div class="card-header">
                                <div class="form-group">
                                    <label for="appointments_per_day">Number of appointments per day</label>
                                    <input type="number" name="appointments_per_day" id="appointments_per_day"
                                        class="form-control" placeholder="" aria-describedby="helpId" min="3"
                                        value="<?php echo e(@$number->appointments_per_day); ?>" required>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pet_care\resources\views/admin/settings/index.blade.php ENDPATH**/ ?>