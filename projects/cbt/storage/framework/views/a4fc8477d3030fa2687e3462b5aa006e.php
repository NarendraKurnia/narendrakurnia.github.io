</div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
<?php if($message = Session::get('sukses')): ?>
// Notifikasi
swal ( "Berhasil" ,  "<?php echo $message ?>" ,  "success" )
<?php endif; ?>

<?php if($message = Session::get('warning')): ?>
// Notifikasi
swal ( "Oops.." ,  "<?php echo $message ?>" ,  "warning" )
<?php endif; ?>

// Popup Delete
$(document).on("click", ".delete-link", function(e){
  e.preventDefault();
  url = $(this).attr("href");
  swal({
    title:"Yakin akan menghapus data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: 'btn btn-danger',
    cancelButtonClass: 'btn btn-success',
    buttonsStyling: false,
    confirmButtonText: "Delete",
    cancelButtonText: "Cancel",
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
  },
  function(isConfirm){
    if(isConfirm){
      $.ajax({
        url: url,
        success: function(resp){
          window.location.href = url;
        }
      });
    }
    return false;
  });
});
// Popup disable
$(document).on("click", ".disable-link", function(e){
  e.preventDefault();
  url = $(this).attr("href");
  swal({
    title:"Yakin akan menonaktifkan data ini?",
    type: "warning",
    showCancelButton: true,
    confirmButtonClass: 'btn btn-danger',
    cancelButtonClass: 'btn btn-success',
    buttonsStyling: false,
    confirmButtonText: "Non Aktifkan",
    cancelButtonText: "Cancel",
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
  },
  function(isConfirm){
    if(isConfirm){
      $.ajax({
        url: url,
        success: function(resp){
          window.location.href = url;
        }
      });
    }
    return false;
  });
});

// Popup approval
$(document).on("click", ".approval-link", function(e){
  e.preventDefault();
  url = $(this).attr("href");
  swal({
    title:"Anda yakin ingin menyetujui data ini?",
    type: "info",
    showCancelButton: true,
    confirmButtonClass: 'btn btn-danger',
    cancelButtonClass: 'btn btn-success',
    buttonsStyling: false,
    confirmButtonText: "Ya, Setujui",
    cancelButtonText: "Cancel",
    closeOnConfirm: false,
    showLoaderOnConfirm: true,
  },
  function(isConfirm){
    if(isConfirm){
      $.ajax({
        url: url,
        success: function(resp){
          window.location.href = url;
        }
      });
    }
    return false;
  });
});
</script>
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- Bootstrap 4 -->
<script src="<?php echo e(asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo e(asset('assets/admin/dist/js/adminlte.min.js')); ?>"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo e(asset('assets/admin/dist/js/demo.js')); ?>"></script> -->
</body>
</html><?php /**PATH C:\xampp\htdocs\cbt\resources\views/admin/layout/footer.blade.php ENDPATH**/ ?>