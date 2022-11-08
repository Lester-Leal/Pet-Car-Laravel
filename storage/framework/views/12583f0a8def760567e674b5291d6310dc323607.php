

<?php $__env->startSection('title', 'details'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                More details for T/A <span class="text-success"><?php echo e($catchment->traditional_authority); ?></span> in <span class="text-success"><?php echo e($catchment->district->name); ?></span>
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
                            <a href="<?php echo e(route('catchment')); ?>" class="btn btn-danger ">
                                <i class="fas fa-arrow-left"></i>
                                  Back
                            </a>
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#add">
                                <i class="fas fa-plus-circle"></i>
                                  Add
                            </a>
                            <?php echo $__env->make('catchmentModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                          </div>
                           
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <?php
                                $page = "catchmentDetails";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>GROUP VILLAGE HEADMAN</th>
                                    <th>VILLAGE</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $detail->id;
                                    ?>
                                    <tr  data-toggle="collapse" href="#top<?php echo e($id); ?>">
                                        <td>
                                            <?php echo e($detail->group_village_headman); ?>

                                        </td>
                                        <td>
                                            <?php echo e($detail->village); ?>

                                        </td>
                                        
                                       
                                        <td>
                                            <div class="btn-group more" data-id="<?php echo e($id); ?>" role="group" aria-label="Button group">
                                               
                                               <a  class="btn btn-warning btn-sm" href="#" role="button" data-toggle="modal" data-target="#edit<?php echo e($id); ?>">
                                                    <i class="fas fa-edit"></i>
                                                     Edit
                                                </a>
                                                
                                                <a class="btn btn-danger btn-sm" href="#" role="button" data-toggle="modal" data-target="#delete<?php echo e($id); ?>">
                                                    <i class="fas fa-trash"></i>
                                                     Delete
                                                </a> 
                                                
                                            </div>
                                        </td>
                                    </tr>
                                    
                                    <?php echo $__env->make('catchmentEditDetailsModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/catchmentMore.blade.php ENDPATH**/ ?>