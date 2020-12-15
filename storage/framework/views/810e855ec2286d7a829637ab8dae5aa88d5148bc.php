<html lang="en">
<head>
   
</head>
<body style="background-color:#BD392B;">
<div class='logo'>BeeFlix</div>
        <nav>
            <ul>
            <li><a href="/list"><-Back</a></li>
            <li><a href="/list">List Movie</a></li>
            </ul>
        </nav>
    
    
    
</body>
</html>
<?php echo $__env->make('layout.detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layout.detailstyle', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>