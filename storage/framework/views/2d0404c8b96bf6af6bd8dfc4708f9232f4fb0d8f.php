<?php $__env->startSection('title', 'eventplan plan'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                   EVENT PLANNING
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
                          <a href="" class="btn btn-primary float-right" data-target="#add" data-toggle="modal">
                              <i class="fas fa-plus-circle"></i>
                                Add
                          </a>

                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = "eventplans";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Project</th>
                                    <th>District</th>

                                    <th>Facilitator</th>
                                    <th>Date of event</th>
                                    <th>Topic</th>

                                    <th>Participants</th>

                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $eventplans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $eventplan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $eventplan->id;
                                    ?>
                                    <tr  data-toggle="collapse" href="#top<?php echo e($id); ?>">

                                        <td>
                                            <?php echo e($eventplan->project->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($eventplan->district->name); ?>

                                        </td>


                                        <td>
                                            <?php echo e($eventplan->facilitator); ?>

                                        </td>


                                        <td>
                                            <?php echo e(date("d-F-Y", strtotime($eventplan->event_date))); ?>

                                        </td>
                                        <td>
                                            <?php echo e($eventplan->topic); ?>

                                        </td>

                                        <td class="text-success" style="cursor: pointer" data-toggle="modal" data-target="#budget<?php echo e($id); ?>">
                                            <strong>
                                                <?php echo e($eventplan->participant->count()); ?>

                                            </strong>
                                        </td>


                                        <td>
                                            <div class="btn-group more" data-id="<?php echo e($id); ?>" role="group" aria-label="Button group">


                                                <a class="btn btn-danger btn-sm" href="#" role="button" data-toggle="modal" data-target="#delete<?php echo e($id); ?>">
                                                    <i class="fas fa-trash"></i>
                                                     Delete
                                                </a>

                                            </div>
                                        </td>
                                    </tr>


                                     <?php echo $__env->make('deleteModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>

                          </table>
                          <?php echo $__env->make('events.plan.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        $('body').on('change','#participants', function () {
            var data = $(this).val();

            if (data=="Yes") {
                $('#participant_section').slideDown();
            }else{
                $('#participant_section').slideUp();
            }

        });

        $('body').on('change','#project', function () {
            var project = $(this).val();

            if (project=="TIMS") {
                $('#facility_section').slideUp();
                $('#cso_section').slideDown();
                $('#facilitator_number_section').slideDown();
                $('#supervisor_section').slideDown();
                $('#event_section').slideDown();
                $('#target_population_section').slideDown();
                $('#focal_person_section').slideUp();

                $('#participant_name').removeClass('col-md-3').addClass('col-md-2');
                $('#participant_dob').removeClass('col-md-3').addClass('col-md-2');
            }else{
                $('#facility_section').slideDown();
                $('#cso_section').slideUp();
                $('#facilitator_number_section').slideUp();
                $('#supervisor_section').slideUp();
                $('#event_section').slideUp();
                $('#target_population_section').slideUp();
                $('#focal_person_section').slideDown();

                $('#participant_name').removeClass('col-md-2').addClass('col-md-3');
                $('#participant_dob').removeClass('col-md-2').addClass('col-md-3');
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/events/plan/index.blade.php ENDPATH**/ ?>