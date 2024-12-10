<p class="text-right">
	<a href="<?php echo e(asset('admin/user')); ?>" class="btn btn-outline-info btn-sm">
		<i class="fa fa-arrow-left"></i> Kembali
	</a>
</p>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<form action="<?php echo e(asset('admin/user/proses-tambah')); ?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<?php echo e(csrf_field()); ?>

                <div class="form-group row">
                    <label class="col-md-3 control-label text-right">Nama lengkap</label>
                    <div class="col-md-9">
                        <input type="text" name="nama" class="form-control" placeholder="Nama lengkap" value="<?php echo e(old('nama')); ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 control-label text-right">Email</label>
                    <div class="col-md-9">
                        <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo e(old('email')); ?>" required>
                    </div>
                </div>              

                <div class="form-group row">
                    <label class="col-md-3 control-label text-right">Username</label>
                    <div class="col-md-9">
                        <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo e(old('username')); ?>" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 control-label text-right">Password</label>
                    <div class="col-md-9">
                        <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo e(old('password')); ?>" required>
                    </div>
                </div>


                <div class="form-group row">
                    <label class="col-md-3 control-label text-right">Level Hak Akses</label>
                    <div class="col-md-9">
                        <select name="akses_level" class="form-control">
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
							<option value="Guru">Guru</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-3 control-label text-right"></label>
                    <div class="col-md-9">
                        <div class="form-group pull-right btn-group">
							<button class="btn btn-success" type="submit" name="submit" value="submit">
								<i class="fa fa-save"></i>Simpan Data User
							</button>
                            <input type="reset" name="reset" class="btn btn-danger " value="Reset">

                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                </form><?php /**PATH C:\MAMP\htdocs\cbt\resources\views/admin/user/tambah.blade.php ENDPATH**/ ?>