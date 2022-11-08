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
        <form method="POST" action="<?php echo e(route('implementation_plan')); ?>">
          <?php echo csrf_field(); ?>

          <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                      <div class="col-md-6">
                         <div class="form-group">
                           <label for="">Plan type</label>
                           <select class="form-control" name="plan_type" id=""  required>
                             <option value="">Select one</option>
                             <option>Annual plan</option>
                             <option>Project activity plan</option>
                           </select>
                         </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="purpose_level">Purpose level</label>
                          <input type="text" name="purpose_level" id="purpose_level" class="form-control" placeholder="" aria-describedby="helpId" required>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                            <label for="component">Component</label>
                            <select class="form-control" name="component_id" id="component" required>
                              <option value="">Select one</option>
                              <?php $__currentLoopData = $components; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $component): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($component->id); ?>">
                                  <?php echo e($component->name); ?>

                                </option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>

                          <div class="form-group" style="display: none" id="component_panel">
                            <label for="component_outcome">Outcome</label>
                            <select class="form-control" name="component_outcome" required>
                              <option value="">Select One</option>
                              <option>None</option>
                              <?php $__currentLoopData = $outcomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outcome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($outcome->id); ?>">
                                  <?php echo e($outcome->name); ?>

                                </option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                          </div>

                         
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="subcomponent_id">Sub Component</label>
                          <select class="form-control" name="subcomponent_id" id="subcomponent" required>
                            <option>Select one</option>
                              <?php $__currentLoopData = $subcomponents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcomponent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($subcomponent->id); ?>">
                                  <?php echo e($subcomponent->name); ?>

                                </option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                        </div>

                        <div class="form-group" style="display: none" id="subcomponent_panel">
                          <label for="component_outcome">Outcome/Outcome?</label>
                          <select class="form-control" name="subcomponent_outcome" id="subcomponent_outcome" required>
                            <option value="">Select One</option>
                            <option>None</option>
                            <option>Outcome</option>
                            <option>Output</option>
                          </select>
                        </div>

                        <div class="form-group" style="display: none" id="subcomponent_outcome_panel">
                          <label for="" id="subcomponent_outcome_label"></label>
                          <select class="form-control" name="subcomponent_outcome_value" id="subcomponent_outcome_value">
                            
                          </select>
                        </div>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="outcome">Outcome</label>
                        <select class="form-control" name="outcome_id" id="outcome" required>
                          <option value="">Select One</option>
                          <?php $__currentLoopData = $outcomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outcome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($outcome->id); ?>">
                              <?php echo e($outcome->name); ?>

                            </option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="output">Output</label>
                        <select class="form-control" name="output_id" id="output">
                          <option value="">Select one</option>
                          <?php $__currentLoopData = $outputs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $output): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($output->id); ?>">
                                <?php echo e($output->name); ?>

                              </option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          <option></option>
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="target">Target</label>
                    <input type="text" name="target" id="target" class="form-control" placeholder="" aria-describedby="helpId" required>
                   
                  </div>

                  <div class="form-group">
                    <label for="implementation_date">Implementation date</label>
                    <input type="date" name="implementation_date" id="implementation_date" class="form-control" placeholder="" aria-describedby="helpId" required>
                    
                  </div>

                  <div class="btn-group" role="group" aria-label="Button group">
                   <button class="btn btn-default btn-sm" type="button" data-duplicate-add="resources">
                    <i class="fa fa-plus-circle"></i>   
                  </button> 
                  <button class="btn btn-default btn-sm" type="button" data-duplicate-remove="resources">
                    <i class="fa fa-times-circle"></i>   
                  </button> 
                  </div>
                  <hr style="margin:0px">

                  <div class="row" data-duplicate="resources">
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="item">Item</label>
                        <input type="text" name="item[]" id="item" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" name="quantity[]" id="quantity" class="form-control" placeholder="" aria-describedby="helpId">
                        
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="number" name="amount[]" id="amount" class="form-control" placeholder="" aria-describedby="helpId">
                      </div>
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
  </div><?php /**PATH /home/codelab8/manaso.codelab265.net/resources/views/implementation/create.blade.php ENDPATH**/ ?>