<?php $__env->startSection('main-content'); ?>
        <!-- Start Services
    ============================================= -->
    <div id="services" class="services-area bg-theme-small default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2><?php echo e($titles->service_title); ?></h2>
                        <p>
                            <?php echo e($titles->service_text); ?>

                        </p>
                    </div>
                </div>
            </div>
            <div class="services-box text-center">
                <div class="row">
                    <!-- Single Item -->


                        <?php $__empty_1 = true; $__currentLoopData = $categories2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                              <div class="col-lg-3 col-md-6 single-item">
                                <a href="<?php echo e(route('singleService',[$cat->slug])); ?>">
                                    <div class="single-item">
                                        <div class="item">
                                            <img src="<?php echo e(asset('uploads/service/icon/'.$cat->ico)); ?>" alt="">
                                            <h5><?php echo e($cat->title); ?></h5>
                                            <p>
                                                <?php echo e(Str::limit(strip_tags( $cat->description))); ?>

                                            </p>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                             <p>No Services Avaiable</p>
                            <?php endif; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\laravelhellobizer\resources\views/frontend/service.blade.php ENDPATH**/ ?>