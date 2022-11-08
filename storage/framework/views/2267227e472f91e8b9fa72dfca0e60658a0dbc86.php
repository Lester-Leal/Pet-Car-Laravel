<?php $__env->startSection('title', 'Project Output'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                PROJECT OUTPUT
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
                                Add
                          </a>
                           <?php echo $__env->make('output.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = "projectOutput";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>PROJECT</th>
                                    <th>OBJECTIVE</th>
                                    <th>OUTCOME</th>
                                    <th>INTERMEDIATE OUTCOME</th>
                                    <th>OUTPUT</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $outputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $output): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $output->id
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo e($output->projects->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($output->objectives->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($output->outcomes->outcome); ?>

                                        </td>

                                        <td>
                                            <?php if(!empty($output->intermediateoutcome_id)): ?>
                                                <?php echo e($output->intermediateoutcomes->outcome); ?>

                                            <?php else: ?>
                                                <span class=" text-bold text-warning">N/A</span>
                                            <?php endif; ?>
                                        </td>
                                        <td>
                                            <?php echo e($output->output); ?>

                                        </td>


                                        <td>
                                            <div class="btn-group more" data-id="<?php echo e($id); ?>" role="group" aria-label="Button group">
                                                <a class="btn btn-warning btn-sm" href="#" role="button" data-toggle="modal" data-target="#edit<?php echo e($id); ?>">
                                                    <i class="fas fa-edit"></i>
                                                     edit
                                                </a>
                                                <a class="btn btn-danger btn-sm" href="#" role="button" data-toggle="modal" data-target="#delete<?php echo e($id); ?>">
                                                    <i class="fas fa-trash"></i>
                                                     Delete
                                                </a>

                                            </div>
                                        </td>
                                    </tr>

                                     <?php echo $__env->make('output.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php $__env->startPush('custom-scripts'); ?>
    <script>
        $('body').on('change', '#project_id', function () {
            var data = $(this).val();

            $.ajax({
                type: "get",
                url: "<?php echo e(route('getObjective')); ?>",
                data: {id:data},
                beforeSend: function () {
                    Loader.open();
                    $('#objective_id').html("");
                 },
                success: function (response) {
                    Loader.close();
                    $('#objective_id').append('<option value="">Select one</option>');
                    $.each(response.objectives, function (key, value) {
                        $('#objective_id').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                }
            });
        });

        $('body').on('change','#objective_id', function () {
            var data = $(this).val();

            $.ajax({
                type: "get",
                url: "<?php echo e(route('getOutcome')); ?>",
                data: {id:data},
                beforeSend: function () {
                    Loader.open();
                    $('#outcome_id').html("");
                 },
                success: function (response) {
                    Loader.close();
                    $('#outcome_id').append('<option value="">Select one</option>');
                    $.each(response.outcomes, function (key, value) {
                        $('#outcome_id').append('<option value="'+value.id+'">'+value.outcome+'</option>');
                    });
                }
            });
        });

        $('body').on('change','#outcome_id', function () {
            var data = $(this).val();

            $.ajax({
                type: "get",
                url: "<?php echo e(route('getIntermediateOutcome')); ?>",
                data: {id:data},
                beforeSend: function () {
                    Loader.open();
                    $('#intermediateoutcome_id').html("");

                 },
                success: function (response) {
                    Loader.close();
                    $.each(response.intermediateoutcomes, function (key, value) {
                        $('#intermediateoutcome_id').append('<option value="'+value.id+'">'+value.outcome+'</option>');
                    });

                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/output/index.blade.php ENDPATH**/ ?>