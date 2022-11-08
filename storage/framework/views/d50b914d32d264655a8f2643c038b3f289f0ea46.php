

<?php $__env->startSection('title', 'Activities'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                ACTIVITIES
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
                           <?php echo $__env->make('activityModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = "activities";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>NAME</th>
                                    <th>PROJECT</th>
                                    <th>ACTIVITY TYPE</th>
                                    <th>FREQUENCY</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $activity->id
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo e($activity->name); ?>

                                        </td>
                                        
                                        <td>
                                            <?php echo e($activity->projects->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($activity->activity_type); ?>

                                        </td>
                                        <td>
                                            <?php echo e($activity->frequency); ?>

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
                                    
                                     <?php echo $__env->make('activityEditModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                     <?php echo $__env->make('deleteModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                           
                          </table>
                          <?php echo $__env->make('activityModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            var project_id = $(this).val();
            $.ajax({
                type: "get",
                url: "<?php echo e(route('events.activities.getObjective')); ?>",
                data: {id:project_id},
                beforeSend:function (){
                    Loader.open();
                    $('#objective').html('');
                },
                success: function (response) {
                    $.each(response.objectives, function (key, value) { 
                         $('#objective').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });

                    Loader.close();
                }
            });
        });

        $('body').on('click', '#activity_button', function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            let data = $("#activity_form").serialize();

            $.ajax({
                type: "POST",
                url: "<?php echo e(route('events.activities')); ?>",
                data: data,
                beforeSend: function () {
                    Loader.open()
                  },
                success: function () {

                    Loader.close();
                    $('#budget').val('');
                    $('#activity').val('');
                    $('#number_of_times').val('')
                    Swal.fire({
                        position: 'top-end',
                        icon: 'success',
                        title: 'Added successfully',
                        showConfirmButton: false,
                        timer: 2000,
                    });

                    $('#example1').load(location.href+' #example1');
                }
            });
            
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/activities.blade.php ENDPATH**/ ?>