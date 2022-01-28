<?php $__env->startSection('content'); ?>

    <section id="carousel">
        <div class="">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo e(asset('images/society_01.jpg')); ?>" class="d-block w-100" alt="Slider 1">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('images/society_02.jpg')); ?>" class="d-block w-100" alt="slider 2">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo e(asset('images/society_03.jpg')); ?>" class="d-block w-100" alt="slider 2">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                        data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <section id="quote">
        <div class="container">
            <div class="row">
                <div class="col-md-9 d-flex flex-rows">
                    <div class="ico">
                        <i class="fas fa-quote-left"></i>
                    </div>
                    <div class="text">
                        <?php echo e(__('home.banner_quote')); ?>

                    </div>
                </div>
                <div class="col-md-3 d-flex align-self-center justify-content-center">
                    <a href="" class="btn btn--quote"><?php echo e(__('home.read_our_stories')); ?></a>
                </div>
            </div>
        </div>
    </section>

    <section id="new-campaign">
        <div class="container">
            <h3 class="header--section"><?php echo e(__('home.new_campaign')); ?></h3>
            <div class="row">
                <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <div class="box--campaign">
                            <div class="image">
                                <a href="<?php echo e(url('campaigns/'.$campaign->id)); ?>">
                                    <img src="<?php echo e(asset('campaign/'.$campaign->photo)); ?>" alt="">
                                </a>
                            </div>
                            <div class="text">
                                <a href="<?php echo e(url('campaigns/'.$campaign->id)); ?>" class="title-box--campaign">
                                    <?php if(App::currentLocale() == 'en'): ?>
                                        <?php echo e($campaign->title); ?>

                                    <?php else: ?>
                                        <?php echo e($campaign->titleRO); ?>

                                    <?php endif; ?>
                                </a>
                                <a href="<?php echo e(url('campaigns/'.$campaign->id)); ?>"
                                   class="btn btn-donate--campaign"><?php echo e(__('home.donate')); ?></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="wrap-center mt-5 d-flex justify-content-center">
                <a href="<?php echo e(url('campaigns')); ?>" class="btn btn--campaign"><?php echo e(__('home.load_more_campaigns')); ?></a>
            </div>
        </div>
    </section>

    <section id="get-involved" class="arrow-down-section">
        <h3 class="header--section"><?php echo e(__('home.how_can_get_involved')); ?></h3>
        <p class="sub-header--section"><?php echo e(__('home.learn_how_you_can_get_involved')); ?></p>
    </section>

    <section id="involved-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="image img-main">
                        <img src="<?php echo e(asset('images/society_02.jpg')); ?>" alt="">
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="header--section"><?php echo e(__('home.send_provisions')); ?></h3>
                    <p>
                        <?php echo app('translator')->get('home.send_package_quote'); ?>
                    </p>
                </div>
            </div>

            <div class="features mt-4">
                <div class="row">
                    <div class="col-md-3">
                        <div class="box--feature">
                            <div class="image"
                                 style="background: url('<?php echo e(asset("images/donations/donation_01.jpg")); ?>')">
                                <div class="text">
                                    <?php echo e(__('home.income_caption')); ?>

                                </div>
                                <h3 class="title--feature"><?php echo e(__('home.income_tax')); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box--feature">
                            <div class="image"
                                 style="background: url('<?php echo e(asset("images/donations/donation_01.jpg")); ?>')">
                                <div class="text">
                                    <?php echo e(__('home.volunteer_caption')); ?>

                                </div>
                                <h3 class="title--feature"><?php echo e(__('home.volunteer')); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box--feature">
                            <div class="image"
                                 style="background: url('<?php echo e(asset("images/donations/donation_01.jpg")); ?>')">
                                <div class="text">
                                    <?php echo e(__('home.be_a_partner_caption')); ?>

                                </div>
                                <h3 class="title--feature"><?php echo e(__('home.be_a_partner')); ?></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box--feature">
                            <div class="image"
                                 style="background: url('<?php echo e(asset("images/donations/donation_01.jpg")); ?>')">
                                <div class="text">
                                    <?php echo e(__('home.donate_caption')); ?>

                                </div>
                                <h3 class="title--feature"><?php echo e(__('home.donate')); ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="support mt-4">
                <h3 class="text-center header--section"><?php echo app('translator')->get('home.something_everyone'); ?></h3>
                <div class="row">
                    <div class="col-md-4">
                        <div class="box--support d-flex">
                            <img src="<?php echo e(asset('images/home.svg')); ?>" alt="">
                            <h3 class="text"><?php echo e(__('home.Church_Religion')); ?></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box--support d-flex">
                            <img src="<?php echo e(asset('images/school.svg')); ?>" alt="">
                            <h3 class="text"><?php echo e(__('home.School_Education')); ?></h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box--support d-flex">
                            <img src="<?php echo e(asset('images/home2.svg')); ?>" alt="">
                            <h3 class="text"><?php echo e(__('home.Animals_Wildlife')); ?></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="banner-stories" class="arrow-down-section">
        <h3 class="header--section"><?php echo e(__('home.stories')); ?></h3>
        <p class="sub-header--section"><?php echo e(__('home.stories_info_caption')); ?></p>
    </section>

    <section id="stories">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $stories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $story): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="box--stories">
                            <div class="image">
                                <img src="<?php echo e(asset("stories/".$story->photo)); ?>" alt="">
                            </div>
                            <div class="entry">
                                <h3>
                                    <?php if(App::currentLocale() == 'en'): ?>
                                        <?php echo e($story->title); ?>

                                    <?php else: ?>
                                        <?php echo e($story->titleRO); ?>

                                    <?php endif; ?>
                                </h3>
                                <span class="date"><?php echo e(date('F d, Y', strtotime($story->created_at))); ?></span>
                                <p>
                                    <?php if(App::currentLocale() == 'en'): ?>
                                        <?php echo e(substr($story->entry, 0, 120)); ?>...
                                    <?php else: ?>
                                        <?php echo e(substr($story->entryRO, 0, 120)); ?>...
                                    <?php endif; ?>
                                </p>
                                <a href="<?php echo e(url('stories/'.$story->url)); ?>" class="read--more"><?php echo e(__('home.read_more')); ?> &raquo;</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="wrap-center">
                <a href="<?php echo e(url('post-stories')); ?>" class="btn btn--stories"><?php echo e(__('home.read_our_stories')); ?></a>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/donation-website/resources/views/client/home.blade.php ENDPATH**/ ?>