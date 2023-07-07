
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit anggota</div>
  <div class="card-body">
       
      <form action="<?php echo e(url('student/' .$students->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($students->id); ?>" id="id" />
        <label>Nama</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($students->name); ?>" class="form-control"></br>
        <label>anggota</label></br>
        <input type="text" name="address" id="address" value="<?php echo e($students->address); ?>" class="form-control"></br>
        <label>no telp</label></br>
        <input type="text" name="mobile" id="mobile" value="<?php echo e($students->mobile); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\semester 3\teknologi web\kecak\resources\views/students/edit.blade.php ENDPATH**/ ?>