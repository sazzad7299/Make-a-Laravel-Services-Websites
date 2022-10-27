<?php $__env->startSection('main-content'); ?>
    <!-- Start Blog
    ============================================= -->
    <div id="blog" class="blog-area bg-gray default-padding bottom-less">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                <h2><?php echo e($titles->blog_title); ?></h2>
                    <p><?php echo e($titles->blog_text); ?> </p>
                    </div>
                </div>
            </div>
            <div class="blog-items">
                <div class="row">
                    <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="item">
                            <div class="thumb">
                                <a href="<?php echo e(url('news/'.$blog->slug)); ?>">
                                    <img src="<?php echo e(asset('uploads/blog/medium/'.$blog->image)); ?>" alt="Thumb">
                                    <div class="post-type">
                                        <i class="fas fa-image"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="info">
                                <h4>
                                    <a href="<?php echo e(url('news/'.$blog->slug)); ?>"><?php echo e($blog->title); ?></a>
                                </h4>
                                <div class="meta">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-calendar-alt "></i>  <?php echo e(date('d M, Y', strtotime($blog->created_at))); ?></a></li>
                                        <li><a href="<?php echo e(route('singleCat',[$blog->category->slug])); ?>"><i class="fas fa-flag"></i> <?php echo e($blog->category->name); ?></a></li>
                                    </ul>
                                </div>
                                <p style="display: block;overflow:hidden">
                                    <?php echo e(Str::limit(strip_tags( $blog->description))); ?>

                                    <a href="<?php echo e(url('news/'.$blog->slug)); ?>">Read more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-12 col-md-12 pagi-area">
                        <nav aria-label="navigation">
                            <ul class="pagination">
                                <?php echo e($blogs->links()); ?>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\laravelhellobizer\resources\views/frontend/blog.blade.php ENDPATH**/ ?>