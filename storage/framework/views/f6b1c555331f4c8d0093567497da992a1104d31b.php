<?php $__env->startSection('content'); ?>
<div class="container">
   <div class="row m-5 ">
        <div class="col-5 m-5">
            <img src="/storage/<?php echo e($post->image); ?>" alt="" class="w-100">
        </div>
        <div class="col-4 m-5">
            <div>
                <div class="d-flex align-items-center">
                    <div class="pe-3 pb-2">

                        <img src="<?php echo e($post->user->profile->profileImage()); ?>" class="rounded-circle w-100 " style="max-width: 40px">
                    </div>
                    <div>
                        <h5>
                            <b>
                                <a href="/profile/<?php echo e($post->user->id); ?>" style="text-decoration:none;">
                                    <span class="text-dark" >
                                        <?php echo e($post->user->username); ?>

                                    </span>
                                </a>
                            </b>
                                <a href="#" class="ps-3">Follow</a>
                                
                        </h5>
                       
                    </div>

                </div>
                <hr>
                <p>
                    <b>
                        <a href="/profile/<?php echo e($post->user->id); ?>" style="text-decoration:none;">
                            <span class="text-dark"  >
                                <?php echo e($post->user->username); ?>

                            </span>
                         </a>
                    </b> 
                    <?php echo e($post->caption); ?>

                </p>

            </div>
        </div>
   </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dineth/Documents/Dineth/Programming/Web/Laravel/Instagram-Clone-Using-Laravel/resources/views/posts/show.blade.php ENDPATH**/ ?>