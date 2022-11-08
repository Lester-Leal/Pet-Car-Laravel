<?php $__env->startSection('title', 'catchments'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                ADD CATCHMENT
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
                          <a href="<?php echo e(route('catchment')); ?>" class="btn btn-danger float-right">
                              <i class="fas fa-arrow-left"></i>
                                Back
                          </a>

                        </div>
                        <!-- /.card-header -->
                        <form method="POST" action="">
                            <?php echo csrf_field(); ?>
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Region</label>
                                            <select class="form-control" name="region_id" id="region" required>
                                                <option selected>--- Select Region ---</option>
                                                <?php $__currentLoopData = $regions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $region): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($region->id); ?>">
                                                        <?php echo e($region->name); ?>

                                                    </option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="district">District</label>
                                        <select class="custom-select" name="district_id" id="get_district" required>
                                            <option value="">Select one</option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">T/A</label>
                                        <input type="text" name="traditional_authority" id="" class="form-control" placeholder="" aria-describedby="helpId" required>

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Healthy Facility</label>
                                        <input type="text" name="facility" id="" class="form-control" placeholder="" aria-describedby="helpId">

                                    </div>
                                </div>
                            </div>

                            <div class="village" style="display: none">


                                <div class="text-right">
                                        <div class="btn-group" role="group" aria-label="Button group">
                                            <a name="" data-duplicate-add="vgl" class="btn btn-default btn-small" href="#" role="button">
                                                <i class="fa fa-plus-circle"></i>
                                            </a>
                                            <a name="" data-duplicate-remove="vgl" class="btn btn-default btn-small" href="#" role="button">
                                                <i class="fa fa-times-circle"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <hr>

                                <div class="row" data-duplicate="vgl">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <label for="">Group Village Headman</label>
                                        <input type="text" name="group_village_headman[]" id="" class="form-control" placeholder="" aria-describedby="helpId" required>

                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="my-input">Village</label>
                                            <input id="my-input" class="form-control" type="text" name="village[]" required>
                                        </div>
                                    </div>


                                    </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success">
                                            <i class="fa fa-check-circle"></i>
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </form>
                        <!-- /.card-body -->
                      </div>
                </div>
            </div>
        </div>
    </div>

      <!-- /.card -->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('custom-scripts'); ?>
    <script>

        $('body').on('change', '#region', function(){
            var region_id = $(this).val();
            $('#get_district').html('');
            $.ajax({
                type: "get",
                url: "<?php echo e(route('catchment.get_districts')); ?>",
                data: {id:region_id},
                beforeSend: function () {
                    Loader.open();
                 },
                success: function (response) {

                    if(response.count>0){
                        $.each(response.districts, function (key, value) {
                         $('#get_district').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });

                    Loader.close();

                    $(".village").slideDown();
                    }else{
                        Loader.close();

                    $(".village").slideUp();
                    }
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/catchmentAdd.blade.php ENDPATH**/ ?>