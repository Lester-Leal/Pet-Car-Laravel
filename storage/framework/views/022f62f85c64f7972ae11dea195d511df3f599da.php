
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title">ADD</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
            
            <form method="POST" action="<?php echo e(route('period.annually')); ?>">
                <?php echo csrf_field(); ?>
            <div class="modal-body">
                <div class="container-fluid">
                 <div class="form-group">
                   <label for="month_from">From</label>
                   <input type="month" name="month_from" id="month_from" class="form-control" placeholder="" aria-describedby="helpId">

                 </div>

                 <div class="form-group">
                   <label for="month_to">To</label>
                   <input type="month" name="month_to" id="month_to" class="form-control" placeholder="" aria-describedby="helpId">
                  
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
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/period/annually/create.blade.php ENDPATH**/ ?>