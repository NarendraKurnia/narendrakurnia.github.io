<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(asset('admin/client/proses_edit')); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<?php echo e(csrf_field()); ?>

<input type="hidden" name="id_client" value="<?php echo $client->id_client ?>">
<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Nama lengkap</label>
	<div class="col-sm-9">
		<input type="text" name="nama_client" class="form-control" placeholder="Nama lengkap" value="<?php echo $client->nama_client ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Email</label>
	<div class="col-sm-9">
		<input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $client->email ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Username</label>
	<div class="col-sm-9">
		<input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $client->username ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Password</label>
	<div class="col-sm-9">
		<input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $client->password ?>" required>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Status Client</label>
	<div class="col-sm-9">
		<select name="status_client" class="form-control">
			<option value="Aktif">Aktif</option>
			<option value="Non-aktif" <?php if($client->status_client=="Non-aktif") { echo 'selected'; } ?>>Non-aktif</option>
		</select>
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right">Upload foto profil</label>
	<div class="col-sm-9">
		<input type="file" name="gambar" class="form-control" placeholder="Upload Foto" value="<?php echo e(old('gambar')); ?>">
	</div>
</div>

<div class="form-group row">
	<label class="col-sm-3 control-label text-right"></label>
	<div class="col-sm-9">
		<div class="form-group pull-right btn-group">
			<input type="submit" name="submit" class="btn btn-primary " value="Simpan Data">
			<input type="reset" name="reset" class="btn btn-success " value="Reset">
			<a href="<?php echo e(asset('admin/client')); ?>" class="btn btn-danger">Kembali</a>
		</div>
	</div>
	<div class="clearfix"></div>
</div>
</form>

<?php /**PATH C:\xampp\htdocs\cbt\resources\views/admin/client/edit.blade.php ENDPATH**/ ?>