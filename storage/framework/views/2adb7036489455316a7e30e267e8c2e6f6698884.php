<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
      MANASO :: LOGIN
  </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="shortcut icon" href="<?php echo e(asset('assets/images/logo.png')); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/fontawesome-free/css/all.min.css")); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css")); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset("assets/dist/css/adminlte.min.css")); ?>">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <?php if(session('error')): ?> 
    <div class="alert alert-danger">
        <i class="fas fa-bell"></i>
            <?php echo e(session('error')); ?>

    </div>
  <?php endif; ?>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1">
          <strong>
              <span class="text-primary">
                  MAN<span class="text-danger">A</span>SO
              </span>
          </strong>
     </a>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12 text-center">
                <img src="<?php echo e(asset("assets/images/logo.png")); ?>" alt="" width="100" height="110">
            </div>
        </div>
      <p class="login-box-msg mt-3">Sign in to start your session</p>

      <form action="<?php echo e(route("login")); ?>" method="post">
        <?php echo csrf_field(); ?>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
        </div>
        </div>
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger mb-3"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
         
        </div>
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger mb-3"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          
        </div>
        
        <div class="social-auth-links text-center mt-2 mb-3">
            <button name="login_button" type="submit" class="btn btn-block btn-primary">
                <i class="mr-2"></i> Sign in
            </button>
            
        </div>
    </form>
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo e(asset("assets/plugins/jquery/jquery.min.js")); ?>"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset("assets/plugins/bootstrap/js/bootstrap.bundle.min.js")); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset("assets/dist/js/adminlte.min.js")); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\Developer\Desktop\laravel Projects\manaso\resources\views/login.blade.php ENDPATH**/ ?>