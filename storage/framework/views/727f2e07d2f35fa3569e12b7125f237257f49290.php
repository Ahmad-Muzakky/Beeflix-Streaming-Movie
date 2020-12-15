
  <div class='container'>
      <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="gallery">
                        <img src="<?php echo e(assets('$movie->image')); ?>" alt="">
                        <div class="judul"><?php echo e($movie->name); ?></div>
                        <Ul><a href="/detail">View Detail</a></Ul>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
            