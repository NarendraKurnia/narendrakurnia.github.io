<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<p>
  <?php echo $__env->make('admin/client/tambah', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</p>
<form action="<?php echo e(asset('admin/client/proses')); ?>" method="post" accept-charset="utf-8">
<?php echo e(csrf_field()); ?>

<div class="row">

  <div class="col-md-12">
    <div class="btn-group">
      <button class="btn btn-danger" type="submit" name="hapus" onClick="check();" >
          <i class="fa fa-trash"></i>
      </button> 
        <button type="button" class="btn btn-success " data-toggle="modal" data-target="#Tambah">
            <i class="fa fa-plus"></i> Tambah Baru
        </button>
   </div>
</div>
</div>

<div class="clearfix"><hr></div>
<div class="table-responsive mailbox-messages">
    <div class="table-responsive mailbox-messages">
<table id="example1" class="display table table-bordered" cellspacing="0" width="100%">
<thead>
    <tr class="bg-info">
        <th width="5%">
          <div class="mailbox-controls">
                <!-- Check all button -->
               <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="far fa-square"></i>
                </button>
            </div>
        </th>
        <th width="10%">GAMBAR</th>
        <th width="20%">NAMA</th>
        <th width="20%">EMAIL</th>
        <th width="20%">USERNAME</th>
        <th width="10%">STATUS</th>
        <th>ACTION</th>
</tr>
</thead>
<tbody>

    <?php $i=1; foreach($client as $client) { ?>

        <td class="text-center">
        <div class="icheck-primary">
                  <input type="checkbox" class="icheckbox_flat-blue " name="id_client[]" value="<?php echo $client->id_client ?>" id="check<?php echo $i ?>">
                   <label for="check<?php echo $i ?>"></label>
        </div>
        <small class="text-center"><?php echo $i ?></small>
    </td>
      <td class="text-center">
        <?php if($client->gambar != "") { ?>
            <img src="<?php echo e(asset('assets/upload/client/'.$client->gambar)); ?>" class="img img-fluid img-thumbnail">
        <?php }else{ echo '<small class="btn btn-sm btn-warning">Tidak ada</small>'; } ?>
    </td>

    <td><?php echo $client->nama_client ?></td>
    <td><?php echo $client->email ?></td>
    <td><?php echo $client->username ?></td>
    <td><?php echo $client->status_client ?></td>
    <td>
        <div class="btn-group">
        <a href="<?php echo e(asset('admin/client/edit/'.$client->id_client)); ?>" 
          class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

          <a href="<?php echo e(asset('admin/client/delete/'.$client->id_client)); ?>" class="btn btn-danger btn-sm  delete-link">
            <i class="fa fa-trash"></i></a>
        </div>

    </td>
</tr>

<?php $i++; } ?>

</tbody>
</table>
</div>
</div>
</form><?php /**PATH C:\MAMP\htdocs\cbt\resources\views/admin/client/index.blade.php ENDPATH**/ ?>