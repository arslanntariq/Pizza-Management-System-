<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="/css/main.css" rel="stylesheet">
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/scss/app.scss','resources/js/app.js']); ?>
    </head>
    <body>

      <?php echo $__env->yieldContent('data'); ?>

      <footer>
        <p>Copyright 2023 Pizza House</p>
      </footer>
    </body>
</html><?php /**PATH C:\xampp\htdocs\pizzahouse\resources\views/layouts/layout.blade.php ENDPATH**/ ?>