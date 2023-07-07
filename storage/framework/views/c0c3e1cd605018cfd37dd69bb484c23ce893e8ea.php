
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">buat anggota baru</div>
  <div class="card-body">
       
      <form action="<?php echo e(url('student')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Nama</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>alamat</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>no telp</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\semester 3\teknologi web\kecak\resources\views/students/create.blade.php ENDPATH**/ ?>