<!doctype html>
<html lang="en">
<head>  
    <?php echo $__env->make("includes.head", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
<body>

    <header>
         <?php echo $__env->make("includes.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>
    <main>
    <?php echo $__env->yieldContent('content'); ?>
    </main>
    <footer class="text-muted py-5">
     <?php echo $__env->make("includes.footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </footer>
     <script src="https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>


</body>

</html><?php /**PATH C:\xampp\htdocs\laravel\ecommerce\resources\views/layouts/default.blade.php ENDPATH**/ ?>