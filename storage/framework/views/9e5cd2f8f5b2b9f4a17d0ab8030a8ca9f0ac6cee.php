<?php $__env->startSection('main-content'); ?>



    <?php $__currentLoopData = $project; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="banner-area content-double banner-top-padding text-dark  small-text" <?php if($loop->iteration % 2==0): ?>
        style="background-color: #f1f1f1 ;"
    <?php endif; ?> >
        <div class="box-table">
            <div class="box-cell">
                <div class="container">
                    <div class="double-items">
                        <div class="row align-center">
                            <div class="col-lg-6 left-info simple-video">
                                <div class="content" data-animation="animated fadeInUpBig">
                                    <h1><?php echo e($item->title); ?></h1>
                                    <p>
                                        <?php echo Str::limit(strip_tags( $item->desc),500); ?>

                                    </p>
                                    <a class="btn circle btn-gray effect btn-sm" href="#">View More</a>

                                </div>
                            </div>
                            <div class="col-lg-6 right-info">
                                <img src="<?php echo e(asset('uploads/project/large/'.$item->image)); ?>" alt="Thumb">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <!-- End Banner -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\laravelhellobizer\resources\views/frontend/project.blade.php ENDPATH**/ ?>