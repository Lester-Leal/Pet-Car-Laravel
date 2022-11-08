<?php $__env->startSection('title', 'implementations'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                IMPLEMENTATION PLAN
            </h1>
            </div>

        </div>
        </div>
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
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = "implementation";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>OBJECTIVE</th>
                                    <th>OUTCOME</th>
                                    <th>OUTPUT</th>
                                    <th>INDICATOR</th>
                                    <th>ACTIVITY</th>
                                    <th>RESPONSIBLE PERSON</th>
                                    <th>START DATE</th>
                                    <th>END DATE</th>

                                    <th></th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $implementations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $implementation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $implementation->id
                                    ?>
                                    <tr>
                                        <td></td>

                                        <td>
                                            <?php echo e($implementation->objectives->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($implementation->projectoutcome->outcome); ?>

                                        </td>



                                            <td class="text-center">
                                                <?php if(!empty($implementation->output_id)): ?>
                                                    <?php echo e($implementation->projectoutput->output); ?>

                                                <?php else: ?>
                                                    <span class="text-danger">
                                                        <i class="fa fa-times fa-1x"></i>
                                                    </span>
                                                <?php endif; ?>

                                             </td>


                                        <td>
                                            <?php if($implementation->stage=="Outcome"): ?>
                                            <?php echo e($implementation->indicators->indicator); ?>

                                            <?php elseif($implementation->stage=="Output"): ?>
                                            <?php echo e($implementation->indicators->indicator); ?>

                                            <?php else: ?>
                                            <?php echo e($implementation->indicators->indicator); ?>

                                            <?php endif; ?>
                                        </td>

                                        <td style="cursor: pointer">
                                                <?php echo e($implementation->activities->activity); ?>

                                        </td>

                                        <td style="cursor: pointer" data-toggle="modal" data-target="#budget<?php echo e($id); ?>">
                                            <?php echo e($implementation->person); ?>

                                        </td>

                                        <td style="cursor: pointer" data-toggle="modal" data-target="#budget<?php echo e($id); ?>">
                                            <?php echo e(date('d/m/y', strtotime($implementation->start_date))); ?>

                                        </td>

                                        <td style="cursor: pointer" data-toggle="modal" data-target="#budget<?php echo e($id); ?>">
                                            <?php echo e(date('d/m/y', strtotime($implementation->end_date))); ?>

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
                          <?php echo $__env->make('implementation.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
        if ($(this).val()=="") {
            $("#level_panel").slideUp();
        }else{
            $("#level_panel").slideDown();
        }
    });



   /*  $('body').on('change','#outcome_id', function () {
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
 */
    $('body').on('change','#level', function () {

        if ($(this).val()=="") {
            $('#outcome_panel').slideUp();
            $('#intermediateoutcome_panel').slideUp();
            $('#output_panel').slideUp();
        }else{

            var data = $('#objective_id').val();

            if ($(this).val()=="Outcome") {
                $('#outcome_panel').slideDown();
                $('#intermediateoutcome_panel').slideUp();
                $('#output_panel').slideUp();

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
        }

        if($(this).val()=="Intermediate outcome"){

            $('#outcome_panel').slideDown();
            $('#intermediateoutcome_panel').slideDown();
            $('#output_panel').slideUp();

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

        }

        if($(this).val()=="Output"){
            $('#outcome_panel').slideDown();
            $('#intermediateoutcome_panel').slideDown();
            $('#output_panel').slideDown();

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

        }
    }

    });

    $('body').on('change','#outcome_id', function () {
       var type = "outcome";
       var data = $(this).val();

        if($('#level').val()=="Outcome"){

        $.ajax({
            type: "get",
            url: "<?php echo e(route('getIndicator')); ?>",
            data: {id:data, type:type},
            beforeSend: function () {
                Loader.open();
                $('#indicator_id').html("");
                $('#activity_id').html("");
             },
            success: function (response) {
                Loader.close();
                $.each(response.indicators, function (key, value) {
                    $('#indicator_id').append('<option value="'+value.id+'">'+value.indicator+'</option>');
                });

                $.each(response.activities, function (key, value) {
                    $('#activity_id').append('<option value="'+value.id+'">'+value.activity+'</option>');
                });

                $('#indicator_activity_panel').slideDown();
            }
        });
        //end
        }else{

            $.ajax({
            type: "get",
            url: "<?php echo e(route('getIntermediateOutcome')); ?>",
            data: {id:data},
            beforeSend: function () {
                Loader.open();
                $('#intermediateoutcome_id').html("");
                $('#output_id').html("");
             },
            success: function (response) {
                Loader.close();
                $('#intermediateoutcome_id').append('<option value="">Select one</option>');
                $.each(response.intermediateoutcomes, function (key, value) {
                    $('#intermediateoutcome_id').append('<option value="'+value.id+'">'+value.outcome+'</option>');
                });

                $('#output_id').append('<option value="">Select one</option>');
                $.each(response.outputs, function (key, value) {
                    $('#output_id').append('<option value="'+value.id+'">'+value.output+'</option>');
                });
            }
            //end
        });
        }
    });

    //intermediate scripting

    $('body').on('change','#intermediateoutcome_id', function () {
        var type = "intermediate";
       var data = $(this).val();


        if ($('#level').val()=="Intermediate outcome") {
            $.ajax({
            type: "get",
            url: "<?php echo e(route('getIndicator')); ?>",
            data: {id:data, type:type},
            beforeSend: function () {
                Loader.open();
                $('#indicator_id').html("");
                $('#activity_id').html("");
             },
            success: function (response) {
                Loader.close();
                $.each(response.indicators, function (key, value) {
                    $('#indicator_id').append('<option value="'+value.id+'">'+value.indicator+'</option>');
                });

                $.each(response.activities, function (key, value) {
                    $('#activity_id').append('<option value="'+value.id+'">'+value.activity+'</option>');
                });

                $('#indicator_activity_panel').slideDown();
            }
        });

        }else{

            $.ajax({
                type: "get",
                url: "<?php echo e(route('getOutput')); ?>",
                data: {id:data},
                beforeSend: function () {
                    Loader.open();
                    $('#output_id').html("");
                },
                success: function (response) {
                    Loader.close();
                    $('#output_id').append('<option value="">Select one</option>');
                    $.each(response.outputs, function (key, value) {
                        $('#output_id').append('<option value="'+value.id+'">'+value.output+'</option>');
                    });
                }
                //end
            });
        }
    });

    //end intermediate

    $('body').on('change','#output_id', function () {
        var type = "output";
        var data = $(this).val();

        $.ajax({
            type: "get",
            url: "<?php echo e(route('getIndicator')); ?>",
            data: {id:data, type:type},
            beforeSend: function () {
                Loader.open();
                $('#indicator_id').html("");
                $('#activity_id').html("");
             },
            success: function (response) {
                Loader.close();
                $.each(response.indicators, function (key, value) {
                    $('#indicator_id').append('<option value="'+value.id+'">'+value.indicator+'</option>');
                });

                $.each(response.activities, function (key, value) {
                    $('#activity_id').append('<option value="'+value.id+'">'+value.activity+'</option>');
                });

                $('#indicator_activity_panel').slideDown();
            }
        });
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/implementation/index.blade.php ENDPATH**/ ?>