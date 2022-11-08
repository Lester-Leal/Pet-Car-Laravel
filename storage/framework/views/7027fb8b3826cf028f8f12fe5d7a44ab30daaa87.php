

<?php $__env->startSection('title', 'Appointments Calendar'); ?>

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
                            <div class="" id="calendar_view">

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.card -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <Script>
        $(document).ready(function() {
            var calendar = $('#calendar_view').fullCalendar({
                editable: true,
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month'
                },
                events: '<?php echo e(route('customer.appointments.calendar.get')); ?>',

            });
        });
    </Script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\mphat\Desktop\LARAVEL PROJECTS\pet_care\resources\views/customers/appointments/calendar.blade.php ENDPATH**/ ?>