

<?php $__env->startSection('title', 'active projects'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                ACTIVE PROJECTS
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
                           
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = "activeProjects";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>PROJECT</th>
                                    <th>CATCHMENT</th>
                                    <th>TARGET</th>
                                    <th>IMPLEMENTER</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $activeprojects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activeproject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $activeproject->id
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo e($activeproject->project->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($activeproject->catchment->region->name); ?>/
                                            <?php echo e($activeproject->catchment->district->name); ?>/
                                            <?php echo e($activeproject->catchment->traditional_authority); ?>

                                        </td>

                                        <td>
                                            <?php echo e($activeproject->target->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($activeproject->implementer); ?>

                                        </td>
                                        
                                       
                                        <td>
                                            <div class="btn-group more" data-id="<?php echo e($id); ?>" role="group" aria-label="Button group">
                                                
                                               <a  class="btn btn-warning btn-sm" href="#" role="button" data-toggle="modal" data-activeproject="#edit<?php echo e($id); ?>">
                                                    <i class="fas fa-edit"></i>
                                                     Reporting
                                                </a>
                                                
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
                          <?php echo $__env->make('projectsModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
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
            type: "get",
            url: "<?php echo e(route('projects.getTarget')); ?>",
            data: { id:id },
            beforeSend: function () {
                Loader.open()
                $('#target_id').html('');
              },
            success: function (data) {
                $.each(data.targets, function (key, value) { 
                     $("#target_id").append('<option value="'+value.id+'">'+value.name+'</option>')
                });
                Loader.close();
                
            }
        });
        
    })
</script> 
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/projects.blade.php ENDPATH**/ ?>