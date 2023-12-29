

<?php $__env->startSection('data'); ?>
<div class="wrapper pizza-details">
  <h1>Order for <?php echo e($pizza->name); ?></h1>
  <p class="type">Type - <?php echo e($pizza->type); ?></p>
  <p class="base">Base - <?php echo e($pizza->base); ?></p>
  <p class="toppings">Extra toppings:</p>
  <ul>
    <?php $__currentLoopData = $pizza->toppings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topping): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($topping); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </ul>
  
  <p>Status: <?php echo e($pizza->status); ?></p>

  <?php if($pizza->status !== 'complete'): ?>
    <form action="<?php echo e(route('pizzas.complete', $pizza->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PATCH'); ?>
      <button>Complete Order</button>
    </form>
  <?php endif; ?>
</div>
<a href="<?php echo e(route('pizzas.index')); ?>" class="back"><- Back to all pizzas</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pizzahouse\resources\views/pizzas/show.blade.php ENDPATH**/ ?>