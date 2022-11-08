

<?php $__env->startSection('title', 'indicators'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                INDICATORS
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
                          <div class="btn-group float-right">
                            
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add">
                                <i class="fas fa-plus-circle"></i>
                                  Add
                            </a>
                            <?php echo $__env->make('indicatorsModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          </div>
                           
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = "indicators";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>PROJECT</th>
                                    <th>COMPONENT</th>
                                    <th>SUB COMPONENT</th>
                                    <th>OUTPUT</th>
                                    <th>INDICATOR</th>
                                    <th>TYPE</th>
                                    <th>TARGET</th>

                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $indicators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $indicator->id;
                                    ?>
                                    <tr  data-toggle="collapse" href="#top<?php echo e($id); ?>">
                                        <td>
                                            <?php echo e($indicator->subcomponent->component->project->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($indicator->subcomponent->component->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($indicator->subcomponent->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($indicator->output); ?>

                                        </td>

                                        <td>
                                            <?php echo e($indicator->definition); ?>

                                        </td>

                                        <td>
                                            <?php echo e($indicator->type); ?>

                                        </td>

                                        <td>
                                            <?php echo e($indicator->target); ?>

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
                                    
                                    
                                    <?php echo $__env->make('deleteModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
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
        $('body').on('change', '#project_id', function(){
               var id = $(this).val();

               $.ajax({
                   method: 'get',
                   url: '<?php echo e(route('getComponents')); ?>',
                   data: {id:id},
                   beforeSend: function(){
                        $('#component').html('');
                        Loader.open();
                   },
                   success: function(data){

                       $.each(data.components, function (key, value) { 
                         $('#component').append('<option value="'+value.id+'">'+value.name+'</option>');
                       });
                    Loader.close();
                   }
               })
        })

        $('body').on('change', '#component', function(){
               var id = $(this).val();

               $.ajax({
                   method: 'get',
                   url: '<?php echo e(route('getSubComponents')); ?>',
                   data: {id:id},
                   beforeSend: function(){
                        $('#subcomponent').html('');
                        Loader.open();
                   },
                   success: function(data){

                       $.each(data.components, function (key, value) { 
                         $('#subcomponent').append('<option value="'+value.id+'">'+value.name+'</option>');
                       });
                    Loader.close();
                   }
               })

            
        })

        $('body').on('change','#outcome', function(){
            var data = $(this).val();
            if(data=="no"){
                $('#output_data').val('Inter-mediate outcome');
                $('#inter-mediate_panel').slideDown('fast');
            }else{
                $('#output_data').val('Outcome');
                $('#inter-mediate_panel').slideUp('fast');
            }
        })

        $('body').on('change','#inter-mediate', function(){
            var data = $(this).val();
            if(data=="no"){
                $('#output_data').val('Output');
                $('#output_panel').slideDown('fast');
            }else{
                $('#output_data').val('Inter-mediate outcome');
                $('#output_panel').slideUp('fast');
            }
        })

    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/indicators.blade.php ENDPATH**/ ?>