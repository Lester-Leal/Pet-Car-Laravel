<div class="modal fade" id="projectMenu">
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
        <form method="POST" action="">
          <?php echo csrf_field(); ?>

          <div class="modal-body">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-md-4">
                          <a name="" id="" class="btn btn-primary" href="#" role="button">
                              <i class=" fa fa-dot-circle fa-2x"></i>
                              <hr>
                              project
                          </a>
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
  </div>
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/projects/projectsMenu.blade.php ENDPATH**/ ?>