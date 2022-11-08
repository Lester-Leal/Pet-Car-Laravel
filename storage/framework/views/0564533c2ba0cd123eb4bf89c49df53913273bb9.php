
<div class="modal fade" id="track<?php echo e($id); ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">TRACK INDICATOR</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

            <form method="POST" action="<?php echo e(route('projects.tracking.indicator', $indicator->project_id)); ?>">
                <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="container-fluid">
                    <input type="hidden" name="indicator_id" value="<?php echo e($id); ?>">
                    <input type="hidden" name="indicator_type" value="<?php echo e($indicator->period); ?>">

                    <?php if($indicator->period=="Annually"): ?>
                        <div class="row">

                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="period">frequency</label>
                                    <input type="text" name="period" id="period" class="form-control" placeholder="" aria-describedby="helpId" value="Annual" readonly>
                                  </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="progress">progress</label>
                                  <input type="number" name="progress" id="progress" class="form-control" placeholder="" aria-describedby="helpId" min="1" required>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class="form-group">
                                  <label for="">Status</label>
                                  <select class="form-control" name="status" id="" required>
                                    <option value="">Select one</option>
                                    <option value="1">Done</option>
                                    <option value="2">Not done</option>
                                    <option value="3">pending</option>
                                    <option value="4">In progress</option>
                                  </select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="deliverables">Deliverables</label>
                                  <input type="text" name="deliverables" id="deliverables" class="form-control" placeholder="" aria-describedby="helpId">

                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                  <label for="deliverables">Explaination</label>
                                  <input type="text" name="explaination" id="deliverable" class="form-control" placeholder="" aria-describedby="helpId">

                                </div>
                            </div>

                        </div>
                      <?php else: ?>
                      <?php $__currentLoopData = $indicator->detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <div class="row">
                          <div class="col-md-2">
                            

                            <div class="form-group">
                              <label for="period">frequency</label>
                              <input type="text" name="period[]" id="period" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($detail->periods->name); ?>" readonly>
                            </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                                <label for="target">Progress</label>
                                <input type="text" name="progress[]" id="target" class="form-control" placeholder="" aria-describedby="helpId" value="" required>

                              </div>
                          </div>

                          <div class="col-md-2">
                            <div class="form-group">
                              <label for="">Status</label>
                              <select class="form-control" name="status[]" id="" required>
                                <option value="">Select one</option>
                                <option value="1">Done</option>
                                <option value="2">Not done</option>
                                <option value="3">pending</option>
                                <option value="4">In progress</option>
                              </select>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="deliverables">Deliverables</label>
                              <input type="text" name="deliverables[]" id="deliverables" class="form-control" placeholder="" aria-describedby="helpId">

                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                              <label for="deliverables">Explaination</label>
                              <input type="text" name="explaination[]" id="deliverable" class="form-control" placeholder="" aria-describedby="helpId">

                            </div>
                        </div>

                      </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      <?php endif; ?>

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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/tracking/indicators/track.blade.php ENDPATH**/ ?>