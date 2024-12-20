
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo e($title); ?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('assets/admin/dist/css/adminlte.min.css')); ?>">
</head>
<body class="hold-transition login-page">

<?php echo $__env->make($content, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- jQuery -->
<script src="<?php echo e(asset('assets/admin/plugins/jquery/jquery.min.js')); ?> "></script>
<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('assets/admin/dist/js/adminlte.min.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\cbt\resources\views/login/layout.blade.php ENDPATH**/ ?>