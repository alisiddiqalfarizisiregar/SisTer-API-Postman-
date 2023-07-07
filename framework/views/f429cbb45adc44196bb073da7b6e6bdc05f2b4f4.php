
<?php $__env->startSection('content'); ?>
  
<div class="card" style="margin:20px;">
  <div class="card-header">halaman anggota</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Nama : <?php echo e($students->name); ?></h5>
        <p class="card-text">Nim : <?php echo e($students->address); ?></p>
        <p class="card-text">no telp: <?php echo e($students->mobile); ?></p>
  </div>
    </hr>
  </div>
</div>
<?php echo $__env->make('students.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\SEMESTER 3\TEKNO.WEB\kecak\resources\views/students/show.blade.php ENDPATH**/ ?>