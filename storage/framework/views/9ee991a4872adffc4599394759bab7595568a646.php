<header id="home">

    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-fixed dark no-background bootsnav">

        <div class="container">

            <!-- Start Atribute Navigation -->
            <div class="attr-nav button">
                <ul>
                    <li>
                        <a href="<?php echo e(route('quote')); ?>">free quote</a>
                    </li>
                </ul>
            </div>
            <!-- End Atribute Navigation -->

            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="/">
                    <img src="<?php echo e(asset('assets/img/logo.png')); ?>" class="logo logo-scrolled" alt="Logo">
                </a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                    <li class="dropdown dropdown-right">
                        <a href="<?php echo e(route('service')); ?>" class="dropdown-toggle smooth-menu" data-toggle="dropdown" >Service</a>
                        <ul class="dropdown-menu">
                            <?php $__empty_1 = true; $__currentLoopData = $categories2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                              <?php if(($cat->children->count()==0)): ?>
                              <li><a href="<?php echo e(route('singleService',[$cat->slug])); ?>"><?php echo e($cat->title); ?></a></li>
                              <?php else: ?>
                              <li class="dropdown dropdown-right"><a href="<?php echo e(route('singleService',[$cat->slug])); ?>" class="dropdown-toggle smooth-menu" data-toggle="dropdown"><?php echo e($cat->title); ?></a>
                                <ul  class="dropdown-menu">

                                    <?php $__currentLoopData = $cat->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><a href="<?php echo e(route('singleService',[$child->slug])); ?>"> <?php echo e($child->title); ?></a></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                              <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                             <p>No Services Avaiable</p>
                            <?php endif; ?>


                        </ul>
                    </li>
                    <li>
                        <a class="smooth-menu" href="<?php echo e(route('portfolio')); ?>">Portfolio</a>
                    </li><li>
                        <a class="smooth-menu" href="<?php echo e(route('project')); ?>">Project</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="<?php echo e(route('blog')); ?>">Blog</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="<?php echo e(route('about')); ?>">About</a>
                    </li>
                    <li>
                        <a class="smooth-menu" href="<?php echo e(route('contact')); ?>">Contact</a>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>

    </nav>
    <!-- End Navigation -->

</header>
<?php /**PATH E:\wamp64\www\laravelhellobizer\resources\views/frontend/layouts/header.blade.php ENDPATH**/ ?>