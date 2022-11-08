<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('body'); ?>
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                      <h1 class="card-title text-capitalize text-danger">
                          <i class="fa fa-circle"></i>
                             <strong>
                                <?php echo e($project_name); ?>

                             </strong>
                      </h1>
                      <!-- tools card -->
                      <div class="card-tools">
                        <!-- button with a dropdown -->
                        <div class="btn-group">
                          <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                            Project
                          </button>
                          <div class="dropdown-menu" role="menu">
                           <?php $__currentLoopData = $project_names; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $projectname): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <a href="<?php echo e(route('dashboard.filter', $projectname->id)); ?>" class="dropdown-item">
                                   <?php echo e($projectname->name); ?>

                               </a>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                          </div>
                        </div>
                        <button type="button" class="btn btn-default btn-sm" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>

                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-info">
                                <div class="inner">
                                  <h3>
                                      <?php if(!empty($activity)): ?>
                                      <?php echo e($activity->where('status', 4)->count()); ?>

                                      <?php else: ?>
                                        0
                                      <?php endif; ?>
                                  </h3>

                                  <p>In progress Activities</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-bag"></i>
                                </div>
                                <a href="<?php echo e(route('dashboard.activity.details',['4', $project->id])); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-success">
                                <div class="inner">
                                  <h3>
                                    <?php if(!empty($activity)): ?>
                                      <?php echo e($activity->where('status', 1)->count()); ?>

                                      <?php else: ?>
                                        0
                                      <?php endif; ?>
                                  </h3>

                                  <p>Done activities</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="<?php echo e(route('dashboard.activity.details',['1', $project->id])); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-warning">
                                <div class="inner">
                                  <h3>
                                    <?php if(!empty($activity)): ?>
                                      <?php echo e($activity->where('status', 3)->count()); ?>

                                      <?php else: ?>
                                        0
                                      <?php endif; ?>
                                  </h3>

                                  <p>Pending Activities</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-person-add"></i>
                                </div>
                                <a href="<?php echo e(route('dashboard.activity.details',['3', $project->id])); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                            <div class="col-lg-3 col-6">
                              <!-- small box -->
                              <div class="small-box bg-danger">
                                <div class="inner">
                                  <h3>
                                    <?php if(!empty($activity)): ?>
                                      <?php echo e($activity->where('status', 2)->count()); ?>

                                    <?php else: ?>
                                        0
                                    <?php endif; ?>
                                  </h3>

                                  <p>Not done Activities</p>
                                </div>
                                <div class="icon">
                                  <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="<?php echo e(route('dashboard.activity.details',['2', $project->id])); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                              </div>
                            </div>
                            <!-- ./col -->
                          </div>
                    </div>
                    <!-- /.card-body -->
                  </div>
              </div>
          </div>

          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-12 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">
                    <i class="fas fa-chart-pie mr-1"></i>
                   INDICATOR
                  </h3>
                  <div class="card-tools">

                  </div>
                </div><!-- /.card-header -->
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Objective</th>
                                <th>Level</th>
                                <th>Indicator</th>
                                <th>Frequency</th>
                                <th>Target Number</th>
                                <th>Actual Performance</th>
                                <th></th>


                            </tr>
                        </thead>
                        <tbody>

                                <?php $__currentLoopData = $indicators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $indicator): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $target = $indicator->detail->sum('target');
                                    $actualtarget = $indicator->trackings->sum('progress');
                                    if ($actualtarget>0){
                                    $percent = round(($actualtarget/$target)*100);
                                    }else{
                                    $percent = 0;
                                    }
                                ?>
                                <tr>
                                    <td><?php echo e($indicator->objectives->name); ?></td>
                                    <td><?php echo e($indicator->indicator_type); ?></td>
                                    <td><?php echo e($indicator->indicator); ?></td>
                                    <td><?php echo e($indicator->period); ?></td>
                                    <td><?php echo e($indicator->detail->sum('target')); ?></td>
                                    <td <?php if($actualtarget>=$target): ?> class="bg-success" <?php elseif($actualtarget<$target && $actualtarget>=($target/2)): ?>class="bg-warning" <?php else: ?> class="bg-danger" <?php endif; ?>><?php echo e($indicator->trackings->sum('progress')); ?>

                                    (%)
                                    </td>
                                    <td>
                                        <a name="" id="" class="btn btn-default text-primary btn-sm" href="<?php echo e(route('dashboard.indicator.details', $indicator->id)); ?>" role="button">
                                            <i class="fas fa-arrow-circle-right"></i>
                                            more info
                                        </a>
                                    </td>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                    </table>
                </div><!-- /.card-body -->
              </div>

            </section>

          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/dashboard/index.blade.php ENDPATH**/ ?>