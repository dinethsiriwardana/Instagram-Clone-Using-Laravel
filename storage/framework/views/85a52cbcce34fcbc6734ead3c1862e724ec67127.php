<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-3 p-5" >
            <img src="/assets/profile.jpg" class="rounded-circle">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>
                    <?php echo e($user->username); ?>

                </h1>
                <a href="/p/create">Add New Post</a>
            </div>
            <div class="d-flex">
                <div class = "pe-5"><strong>128 </strong>posts</div>
                <div class = "pe-5"><strong>492 </strong>followers</div>
                <div class = "pe-5"><strong>337 </strong>following</div>
            </div>
            <div class="pt-4"><b><?php echo e($user->profile->title); ?></b></div>
            <div>
                <?php echo e($user->profile->description); ?>

            </div>
            <div>
              <a href="http://<?php echo e($user->profile->url); ?>" target="_blank" rel="noopener noreferrer"><?php echo e($user->profile->url); ?></a> 
            </div>
        </div>
    </div>
    <div class="row">
        <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-4">
            <img src="/storage/<?php echo e($post->image); ?>" class="w-100 pt-1" srcset="">
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dineth/Documents/Dineth/Programming/Web/Laravel/Instagram-Clone-Using-Laravel/resources/views/profiles/index.blade.php ENDPATH**/ ?>