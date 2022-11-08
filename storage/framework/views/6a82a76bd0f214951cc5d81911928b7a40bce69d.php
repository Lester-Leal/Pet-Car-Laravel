

<?php $__env->startSection('title', 'events'); ?>

<?php $__env->startSection('body'); ?>
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>
                    events
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
                                $page = "events";
                            ?>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>Activity</th>
                                    <th>Participants</th>
                                    <th>Budget</th>
                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php
                                        $id = $event->id;
                                    ?>
                                    <tr  data-toggle="collapse" href="#top<?php echo e($id); ?>">

                                        <td>
                                            <?php echo e($event->name); ?>

                                        </td>

                                        <td>
                                            <?php echo e($event->types->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($event->activities->name); ?>

                                        </td>
                                        <td>
                                            <?php echo e($event->participants); ?>

                                        </td>
                                        
                                        <td class="text-success" style="cursor: pointer" data-toggle="modal" data-target="#budget<?php echo e($id); ?>">
                                            <strong>
                                                MWK<?php echo e(number_format($event->resources->sum('amount'), 2)); ?>

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
                                    
                                    <?php echo $__env->make('events.budget', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                     <?php echo $__env->make('deleteModal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                           
                          </table>
                          <?php echo $__env->make('events.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?> 
                        </div>
                        <!-- /.card-body -->
                      </div> 
                </div>
            </div>
        </div>
    </div>
    
      <!-- /.card -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/events/index.blade.php ENDPATH**/ ?>