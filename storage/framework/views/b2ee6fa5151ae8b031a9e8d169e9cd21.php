

<?php $__env->startSection('data'); ?>
<div class="wrapper pizza-index">
  <h1>Pizza Orders</h1>
  <?php $__currentLoopData = $pizzas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pizza): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="/pizzas/<?php echo e($pizza->id); ?>"><?php echo e($pizza->name); ?></a></h4>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pizzahouse\resources\views/pizzas/index.blade.php ENDPATH**/ ?>