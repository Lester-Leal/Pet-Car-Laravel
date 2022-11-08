<div class="modal fade" id="budget<?php echo e($id); ?>">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
              RESOURCES
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="<?php echo e(route('users')); ?>">
          <?php echo csrf_field(); ?>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
  
              <div class="row">
                <div class="col-md-4 bg-info p-2">
                  <strong>
                    ITEM 
                  </strong>
                </div>
                <div class="col-md-4 bg-success p-2">
                  <strong>
                    QUANTITY
                  </strong>
                </div>
                <div class="col-md-4 bg-warning p-2">
                  <strong>
                    AMOUNT
                  </strong>
                </div>
              </div>
              <hr style="margin: 0px">
  
              <?php $__currentLoopData = $event->resources; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resource): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                
              <div class="row">
                <div class="col-md-4 bg-info">
                  <?php echo e($resource->item); ?>

                </div>
                <div class="col-md-4 bg-success">
                  <?php echo e($resource->quantity); ?>

                </div>
                <div class="col-md-4 bg-warning">
                  MWK <?php echo e(number_format($resource->amount, 2)); ?>

                </div>
              </div>
              <hr style="margin: 0px">
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <div class="row">
                <div class="col-md-4">
                  
                </div>
                <div class="col-md-4">
                  
                </div>
                <div class="col-md-4 bg-warning p-2">
                  <strong>
                    MWK<?php echo e(number_format($event->resources->sum('amount'), 2)); ?>

                  </strong>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/events/budget.blade.php ENDPATH**/ ?>