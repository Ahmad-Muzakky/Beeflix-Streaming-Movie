<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    
    <body style="background-color:#BD392B;">
    <div class='logo'>BeeFlix</div>
        <nav>
            <ul>
            <li><a href="#"><-Back</a></li>
            <li><a href="#">List Movie</a></li>
            </ul>
        </nav>
    
    
    
    </body>
</html>

<?php echo $__env->make('layout.content', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>