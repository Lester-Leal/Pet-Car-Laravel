
<div class="modal fade" id="edit<?php echo e($id); ?>" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">EDIT</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

            <form method="POST" action="<?php echo e(route('projects.tracking.indicator', $projectname->id)); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('patch'); ?>
            <div class="modal-body">
                <div class="container-fluid">
                    <input type="hidden" name="id" value="<?php echo e($id); ?>">

                        <div class="row">


                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="progress">progress</label>
                                  <input type="number" name="progress" id="progress" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($indicator_tracking->progress); ?>" min="1" required>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="">Status</label>
                                  <select class="form-control" name="status" id="" required>
                                    <option value="<?php echo e($indicator_tracking->status); ?>">Select one</option>
                                    <option value="1">Done</option>
                                    <option value="2">Not done</option>
                                    <option value="3">pending</option>
                                    <option value="4">In progress</option>
                                  </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="deliverables">Deliverables</label>
                                  <input type="text" name="deliverables" id="deliverables" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($indicator_tracking->deliverables); ?>">

                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="deliverables">Explaination</label>
                                  <input type="text" name="explaination" id="deliverable" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo e($indicator_tracking->explaination); ?>">

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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/tracking/indicators/update.blade.php ENDPATH**/ ?>