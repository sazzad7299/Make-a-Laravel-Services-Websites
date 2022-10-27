<?php $__env->startSection('main-content'); ?>
    <!-- Start Blog
    ============================================= -->
    <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2><?php echo e($titles->portfolio_title); ?></h2>
                        <p><?php echo e($titles->portfolio_text); ?> </p>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">

                    <?php $__currentLoopData = $portfolio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="<?php echo e(route('singlePortfolio',[$item->slug])); ?>">
                                    <img src="<?php echo e(asset('uploads/portfolio/medium/'.$item->image)); ?>" alt="Thumb">
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="<?php echo e(route('singlePortfolio',[$item->slug])); ?>"><?php echo e($item->title); ?></a>
                                </h4>
                                <p>
                                    <?php echo e(Str::limit(strip_tags( $item->desc))); ?>

                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\laravelhellobizer\resources\views/frontend/portfolio.blade.php ENDPATH**/ ?>