
<div class="modal fade" id="addreport" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

            <form method="POST" action="<?php echo e(route('tims.activity', $event->id)); ?>">
                <?php echo csrf_field(); ?>

                <input type="hidden" name="id" value="<?php echo e($event->id); ?>">
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="form-group">
                      <label for="">Did the activity happen?</label>
                      <select class="form-control" name="status" id="status">
                        <option value="1">Yes</option>
                        <option value="2">No</option>
                      </select>
                    </div>
                    <div id="activity">

                        <div class="btn-group" >
                            <button class="btn btn-default btn-sm" type="button" data-duplicate-add="issues">
                                <i class="fa fa-plus-circle"></i>
                            </button>
                            <button class="btn btn-default btn-sm" type="button" data-duplicate-remove="issues">
                               <i class="fa fa-times-circle"></i>
                           </button>
                        </div>
                        <hr style="margin-top: 1px">
                        <div class="row" data-duplicate="issues">
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="item">Issue</label>
                                  <input type="text"
                                    class="form-control" name="issue[]" id="item" aria-describedby="helpId" placeholder="">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="item">Type of platform</label>
                                  <input type="text"
                                    class="form-control" name="platform[]" id="item" aria-describedby="helpId" placeholder="">

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                  <label for="item">Head count of who attended</label>
                                  <input type="text"
                                    class="form-control" name="head_count[]" id="item" aria-describedby="helpId" placeholder="">

                                </div>
                            </div>


                        </div>

                        <div class="btn-group" >
                            <button class="btn btn-default btn-sm" type="button" data-duplicate-add="concern">
                                <i class="fa fa-plus-circle"></i>
                            </button>
                            <button class="btn btn-default btn-sm" type="button" data-duplicate-remove="concern">
                               <i class="fa fa-times-circle"></i>
                           </button>
                        </div>
                        <hr style="margin-top: 1px">
                        <div class="row" >
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label for="item">
                                    Any harmful Cultural practices identified which increase the risk to getting TB and HIV? Specify?
                                  </label>
                                  <input type="text"
                                    class="form-control mb-2" name="practice[]" id="item" aria-describedby="helpId" placeholder="" data-duplicate="concern">

                                </div>
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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/projects/tims/activity/create.blade.php ENDPATH**/ ?>