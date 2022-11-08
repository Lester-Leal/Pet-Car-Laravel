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
        <form method="POST" action="<?php echo e(route('indicators')); ?>">
          <?php echo csrf_field(); ?>

          <div class="modal-body">
              <div class="card">
                <div class="card-body">
                    <div class="form-group">
                      <label for="project_id">Project</label>
                      <select class="form-control" name="project_id" id="project_id" required>
                        <option>Select one</option>

                            <?php $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($project->id); ?>">
                                    <?php echo e($project->name); ?>

                                </option> 
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                      </select>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="project_id">Component</label>
                          <select class="form-control" name="component_id" id="component" required>
                            <option>Select one</option>
     
                          </select>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="project_id">Sub component</label>
                          <select class="form-control" name="subcomponent_id" id="subcomponent" required>
                            <option>Select one</option>
     
                            
                          </select>
                        </div>
    
                      </div>
                    </div>

                    <input type="hidden" name="output" value="Outcome" id="output_data">

                    <div class="form-group" id="outcome_panel">
                      <label for="project_id">Outcome</label>
                      <select class="form-control" name="" id="outcome">
                        <option>yes</option>
                        <option>no</option>
 
                        
                      </select>
                    </div>

                    <div class="form-group" id="inter-mediate_panel" style="display: none">
                      <label for="project_id">inter-mediate outcome</label>
                      <select class="form-control" id="inter-mediate">
                        <option>yes</option>
                        <option>no</option>
                      </select>
                    </div>
                    <div class="form-group" id="output_panel" style="display: none">
                      <label for="project_id">Output</label>
                      <select class="form-control"  id="output">
                        <option>yes</option>
                      </select>
                    </div>
                   
                    <div id="indicator_panel">
                    <div class="form-group">
                      <label for="definition">Definition</label>
                      <input id="definition" class="form-control" type="text" name="definition">
                    </div>

                    <div class="form-group">
                      <label for="project_id">Indicator Type</label>
                      <select class="form-control" name="type"  required>
                        <option value="">Select one</option>
                        <option>Quantitative</option>
                        <option>Qualitative</option>
                        
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="project_id">Target</label>
                      <select class="form-control" name="target"  required>
                        <option value="">Select one</option>
                        <option>Anually</option>
                        <option>Quaterly</option>
                        <option>LOA</option>
                        
                      </select>
                    </div>
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
  </div><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/indicatorsModal.blade.php ENDPATH**/ ?>