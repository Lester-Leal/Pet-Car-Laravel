

<?php $__env->startSection('title', 'Project Intermediate Outcomes'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                INTER-MEDIATE OUTCOME
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
                                $page = "intermediates";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>PROJECT</th>
                                    <th>OUTCOME</th>
                                   
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $intermediates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $intermediate): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $intermediate->id
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo e($intermediate->project->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($intermediate->name); ?>

                                            
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
                          <?php echo $__env->make('intermediateModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                        </div>
                        <!-- /.card-body -->
                      </div> 
                </div>
            </div>
        </div>
    </div>
    
      <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/intermediates.blade.php ENDPATH**/ ?>