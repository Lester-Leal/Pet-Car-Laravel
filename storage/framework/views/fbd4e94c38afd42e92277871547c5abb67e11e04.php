

<?php $__env->startSection('title', 'Years'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                PERIOD MANAGEMENT: ANNUAL
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
                          <?php echo $__env->make('period.annually.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = "annuals";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $annuals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $annual): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $annual->id;
                                    ?>
                                    <tr  data-toggle="collapse" href="#top<?php echo e($id); ?>">
                                        
                                        <td>
                                            <?php echo e(date('F Y', strtotime($annual->month_from))); ?> - <?php echo e(date('F Y', strtotime($annual->month_to))); ?>

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
                         
                        </div>
                        <!-- /.card-body -->
                      </div> 
                </div>
            </div>
        </div>
    </div>
    
      <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/period/annually/index.blade.php ENDPATH**/ ?>