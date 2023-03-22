<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 mb-4">
            <div class="card">
                <a href="/profile/<?php echo e($post->user->id); ?>">
                    <img src="/storage/<?php echo e($post->image); ?>" alt="" class="card-img-top">
                </a>
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="/profile/<?php echo e($post->user->id); ?>" style="text-decoration:none;">
                            <span class="text-dark"><?php echo e($post->user->username); ?></span>
                        </a>
                    </h5>
                    <p class="card-text"><?php echo e($post->caption); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <?php echo e($posts->links()); ?>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dineth/Documents/Dineth/Programming/Web/Laravel/Instagram-Clone-Using-Laravel/resources/views/posts/index.blade.php ENDPATH**/ ?>