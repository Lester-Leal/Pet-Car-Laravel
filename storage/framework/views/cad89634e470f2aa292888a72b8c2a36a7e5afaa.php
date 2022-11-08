
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            
            <form method="POST" action="<?php echo e(route('events')); ?>">
                <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="container-fluid">

                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text"
                        class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" required>
                    </div>
                   
                    <div class="form-group">
                      <label for="project_id">Type</label>
                      <select class="form-control" name="type_id" id="project" required>
                          <option value="">Select one</option>
                          <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($type->id); ?>">
                                  <?php echo e($type->name); ?>

                              </option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="purpose_id">Activity</label>
                      <select class="form-control" name="activity_id" id="activity_id">
                        <option>Select one</option>
                        <?php $__currentLoopData = $activities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $activity): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($activity->id); ?>">
                                <?php echo e($activity->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      </select>
                    </div>

                     <div class="form-group">
                       <label for="participants">Number of Participants</label>
                       <input type="number"
                         class="form-control" name="participants" id="participants" aria-describedby="helpId" placeholder="">
                       
                     </div>

                     <div class="btn-group" >
                         <button class="btn btn-default btn-sm" type="button" data-duplicate-add="resource">
                             <i class="fa fa-plus-circle"></i>
                         </button>
                         <button class="btn btn-default btn-sm" type="button" data-duplicate-remove="resource">
                            <i class="fa fa-plus-circle"></i>
                        </button>
                     </div>
                     <hr style="margin-top: 1px">
                     <div class="row" data-duplicate="resource">
                         <div class="col-md-4">
                             <div class="form-group">
                               <label for="item">Item</label>
                               <input type="text"
                                 class="form-control" name="item[]" id="item" aria-describedby="helpId" placeholder="" required>
                               
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                               <label for="quantity">Quantity</label>
                               <input type="number"
                                 class="form-control" name="quantity[]" id="quantity" aria-describedby="helpId" placeholder="" required>
                               
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                               <label for="amount">Amount</label>
                               <input type="number"
                                 class="form-control" name="amount[]" id="amount" aria-describedby="helpId" placeholder="" required>
                               
                             </div>
                         </div>
                     </div>
                    

                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/events/create.blade.php ENDPATH**/ ?>