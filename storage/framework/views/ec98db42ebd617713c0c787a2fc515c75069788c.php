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
        <form method="POST" action="<?php echo e(route('setting.projects')); ?>">
          <?php echo csrf_field(); ?>
         
          <div class="modal-body">
              <div class="card">
                <div class="card-body">
                  
                    <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" name="name" class="form-control" placeholder="" aria-describedby="helpId" required>
                      
                    </div>

                    <div class="form-group">
                      <label for="">Goal</label>
                      <input type="text" name="goal" id="" class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="btn-group float-right">
                       <button type="button" data-duplicate-add="objective" class="btn btn-default">
                         <i class="fa fa-plus-circle"></i>
                       </button>
                       <button type="button" data-duplicate-remove="objective" class="btn btn-default">
                         <i class="fa fa-times-circle"></i>
                       </button>
                    </div>
                    <br>
                    <hr>
                    

                    <div class="form-group" data-duplicate="objective">
                      <label for="objective">Objective</label>
                      <input type="text" name="objective[]" id="objective" class="form-control" placeholder="" aria-describedby="helpId">
                      
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
  </div><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/SettingsProjectsModal.blade.php ENDPATH**/ ?>