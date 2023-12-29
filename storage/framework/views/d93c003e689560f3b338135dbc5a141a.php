<?php $__env->startSection('data'); ?>
<div class="flex-center position-ref full-height">
    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>">Login</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="content">
        <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            Bawa Pizzas
        </div>
        <p class="mssg"><?php echo e(session('mssg')); ?></p>
        <?php if(session('pizza_details')): ?>
            <div class="pizza-details">
                <h2>Your Pizza Details</h2>
                <p>Type: <?php echo e(session('pizza_details.type')); ?></p>
                <p>Base: <?php echo e(session('pizza_details.base')); ?></p>
                <p>Toppings: <?php echo e(implode(', ', session('pizza_details.toppings'))); ?></p>
            </div>
            <?php
                session()->forget('pizza_details');
            ?>
        <?php endif; ?>

        <p class="mssg"><?php echo e(session('mssg')); ?></p>

        <a href="<?php echo e(route('pizzas.create')); ?>">Order a Pizza</a>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\pizzahouse\resources\views/welcome.blade.php ENDPATH**/ ?>