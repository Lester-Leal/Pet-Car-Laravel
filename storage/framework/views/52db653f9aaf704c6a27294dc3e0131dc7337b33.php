

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
                                    <th>PURPOSE LEVEL</th>
                                    <th>COMPONENT</th>
                                    <th>SUB COMPONENT</th>
                                    <th>OUTCOME</th>
                                    <th>OUTPUT</th>
                                    <th>DATE</th>
                                    <th>TARGET</th>
                                    <th>BUDGET</th>
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
                                            <?php echo e($implementation->purpose_level); ?>

                                        </td>
                                        <td>
                                            <?php echo e($implementation->components->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($implementation->subcomponents->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($implementation->outcomes->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($implementation->outputs->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($implementation->implementation_date); ?>

                                        </td>

                                        <td>
                                            <?php echo e($implementation->target); ?>

                                        </td>
                                        <td class="text-success" style="cursor: pointer" data-toggle="modal" data-target="#budget<?php echo e($id); ?>">
                                            <strong>
                                                MWK<?php echo e(number_format($implementation->resources->sum('amount'), 2)); ?>

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
                                    
                                    <?php echo $__env->make('implementation.budget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

    $('body').on('change','#component', function () {
        if ($(this).val()=="") {
            $('#component_panel').slideUp();
        }else{
            $('#component_panel').slideDown();
        }
    });

    $('body').on('change','#subcomponent', function () {
        if ($(this).val()=="") {
            $('#subcomponent_panel').slideUp();
        }else{
            $('#subcomponent_panel').slideDown();
        }
    });

    $('body').on('change','#subcomponent_outcome', function () {
        if ($(this).val()=="") {
            return false
        }
        else
        {
            if ($(this).val()=="None") {
                $('#subcomponent_outcome_panel').slideUp();
            }
            if ($(this).val()=="Outcome") {
                $('#subcomponent_outcome_panel').slideDown();
                $('#subcomponent_outcome_label').html("Outcome");

                $.ajax({
                    type: "get",
                    url: "<?php echo e(route('getoutcome')); ?>",
                    data: "data",
                    beforeSend:function(){
                        Loader.open();
                        $('#subcomponent_outcome_value').html('');

                    },
                    success: function (response) {
                        Loader.close();
                       $.each(response.outcomes, function (key, value) { 
                            $('#subcomponent_outcome_value').append("<option value='"+value.id+"'>"+value.name+"</option>")
                       }); 
                    }
                });
            }

            if ($(this).val()=="Output") {
                $('#subcomponent_outcome_panel').slideDown();
                $('#subcomponent_outcome_label').html("Output");
                $.ajax({
                    type: "get",
                    url: "<?php echo e(route('getoutput')); ?>",
                    data: "data",
                    beforeSend:function(){
                        Loader.open();
                        $('#subcomponent_outcome_value').html('');

                    },
                    success: function (response) {
                        Loader.close();
                       $.each(response.outputs, function (key, value) { 
                            $('#subcomponent_outcome_value').append("<option value='"+value.id+"'>"+value.name+"</option>")
                       }); 
                    }
                });
            }
        }
    });
        
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/implementation/index.blade.php ENDPATH**/ ?>