<?php $__env->startSection('main-content'); ?>
    <!-- Start Contact Area
        ============================================= -->
    <div id="contact" class="contact-us-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="site-heading text-center">
                        <h2>Find Out How We Can Increase Your Profit</h2>
                        <p>Schedule a meeting to discuss how Bizcope can help you to double, triple or quadruple your sales
                            and revenue. So, tell us what you want – simply fill in the form below and we’ll be in touch
                            with you shortly 😎
                            Phone: +8801636787936
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- <div class="form-header">
                        <h3>Schedule a Brief Meeting to Discuss

                        </h3>
                    </div> -->
                <div class="pricing-item">
                    <ul>
                        <li class="pricing-header">
                            <h2>Schedule a Brief Meeting to Discuss</h2>
                            <?php if(Session::has('success')): ?>
                                <p style="font-size: 20px; color: green;padding-top: 20px;"><?php echo Session('success'); ?></p>
                            <?php endif; ?>
                        </li>
                        <form action="<?php echo e(route('freequotesend')); ?>" class="free-quote" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control" placeholder="Your Name"name="name">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <input type="email" class="form-control" placeholder="Email Address" name="email">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <input type="text" class="form-control" placeholder="Facebook Page/Website Url"
                                        name="url">
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <select name="mainservice" id="mainservice" class="form-control" rel="2">
                                        <option value="" style="display: none" selected>Select Services</option>
                                        <?php $__currentLoopData = $frontServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($service->parent_id == null): ?>
                                                <option value="<?php echo e($service->id); ?>" rel="<?php echo e($service->id); ?>"
                                                    class="mainservice"> <?php echo e($service->title); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                    </select>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <select name="subservice" id="subservice" class="form-control">


                                    </select>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <textarea class="form-control" id="comments" name="comments" placeholder="Tell Us About Project *" rows="5"></textarea>
                                </div>
                            </div>
                            <li class="footer">
                                <button class="btn circle btn-theme border btn-sm">Send</button>
                            </li>
                        </form>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\wamp64\www\laravelhellobizer\resources\views/frontend/free-quote.blade.php ENDPATH**/ ?>