
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            
            <form method="POST" action="<?php echo e(route('event.type')); ?>">
                <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="container-fluid">
                   <div class="form-group">
                     <label for="name">Name</label>
                     <input type="text"
                       class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" required>
                   </div>
                   
                    <div class="form-group">
                      <label for="project_id">Project</label>
                      <select class="form-control" name="project_id" id="project" required>
                          <option value="">Select one</option>
                          <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($project->id); ?>">
                                  <?php echo e($project->name); ?>

                              </option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="purpose_id">Purpose</label>
                      <select class="form-control" name="purpose_id" id="purpose_id">
                        <option>Select one</option>
                        <?php $__currentLoopData = $purposes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purpose): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($purpose->id); ?>">
                                <?php echo e($purpose->name); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="component_id">Component</label>
                      <select class="form-control" name="component_id" id="component_id">
                        <option value="">Select one</option>
                      </select>
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
<?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/eventtypes/create.blade.php ENDPATH**/ ?>