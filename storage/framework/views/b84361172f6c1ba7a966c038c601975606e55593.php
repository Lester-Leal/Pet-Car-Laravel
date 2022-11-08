<div class="modal fade" id="add">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">
              ADD
          </h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" action="<?php echo e(route('events.activities')); ?>">
          <?php echo csrf_field(); ?>

          <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text"
                      class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="">
                    
                  </div>
                  <div class="row">
                      <div class="col-md-6">

                        

                         <div class="form-group">
                           <label for="">Project</label>
                           <select class="form-control" name="project_id" id="project_id">
                             <option value="">Select one</option>
                             <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <option value="<?php echo e($project->id); ?>">
                                  <?php echo e($project->name); ?>

                               </option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select>
                         </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="objective">Type</label>
                          <select id="activity_type" class="form-control" name="activity_type" required>
                            <option value="">Select One</option>
                            <option>
                              Training
                            </option>
                            <option>
                              Survey
                            </option>
                          </select>
                        </div>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="">Frequency</label>
                    <select class="form-control" name="frequency" id="" required>
                      <option value="">Select One</option>
                      <option>Monthly</option>
                      <option>Quarterly</option>
                      <option>Annual</option>
                    </select>
                  </div> 
                </div>
              </div>
          </div>
        

        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-check-circle"></i>
            Save
          </button>
        </div>
      </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/activityModal.blade.php ENDPATH**/ ?>