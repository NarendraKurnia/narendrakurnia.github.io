<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<!-- <p>
  <?php echo $__env->make('admin/user/tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</p> -->
<form action="<?php echo e(asset('admin/user/proses')); ?>" method="post" accept-charset="utf-8">
<?php echo e(csrf_field()); ?>

<div class="row">

  <div class="col-md-12">
    <div class="btn-group">
      <button class="btn btn-danger" type="submit" name="hapus" onClick="check();" >
          <i class="fa fa-trash"></i>
      </button> 
        <a href="<?php echo e(asset('admin/user/tambah')); ?>" style="color: white;">
        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#Tambah">
            <i class="fa fa-plus"></i> Tambah User
        </a>
    </div>
</div>
</div>

<table class="table mt-3 table-sm table-bordered">
<thead>
    <tr class="bg-info">
        <th class="text-center">NO</th>
        <th>NAMA</th>
        <th>EMAIL</th>
        <th>USERNAME</th>
        <th>LEVEL</th>
        <th>ACTION</th>
    </tr>
</thead>
<tbody>

    <?php $no=1; foreach($user as $user) { ?>

    <tr>
        <td class="text-center"><?php echo $no ?></td>
        <td><?php echo $user->nama ?></td>
        <td><?php echo $user->email ?></td>
        <td><?php echo $user->username ?></td>
        <td><?php echo $user->akses_level ?></td>
        <td>
            <div class="btn-group">
            <a href="<?php echo e(asset('admin/user/edit/'.$user->id_user)); ?>" 
            class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

            <a href="<?php echo e(asset('admin/user/delete/'.$user->id_user)); ?>" 
            class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i>
            </a>
        </div>
        </td>
    </tr>
<?php $no++; } ?>
</table>
<?php /**PATH C:\MAMP\htdocs\cbt\resources\views/admin/user/index.blade.php ENDPATH**/ ?>