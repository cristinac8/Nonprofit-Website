<?php $__env->startSection('content'); ?>

    <section id="banner-stories" class="arrow-down-section">
        <h3 class="header--section">
            <?php echo e(__('post.list_of_campaign')); ?>

        </h3>
    </section>

    <section class="stories all--campaign mt-5 pt-3" id="post">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-md-4">
                        <div class="box--stories">
                            <div class="image">
                                <img src="<?php echo e(asset("campaign/".$campaign->photo)); ?>" alt="">
                            </div>
                            <div class="entry">
                                <h3>
                                    <?php if(App::currentLocale() == 'en'): ?>
                                        <?php echo e($campaign->title); ?>

                                    <?php else: ?>
                                        <?php echo e($campaign->titleRO); ?>

                                    <?php endif; ?>
                                </h3>
                                <p>
                                    <?php if(App::currentLocale() == 'en'): ?>
                                        <?php echo e(substr($campaign->description, 0, 50)); ?>...
                                    <?php else: ?>
                                        <?php echo e(substr($campaign->descriptionRO, 0, 50)); ?>...
                                    <?php endif; ?>
                                </p>
                                <a href="<?php echo e(url('campaign/'.$campaign->id)); ?>" class="btn btn--donate"><?php echo e(__('home.donate')); ?> </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="center d-flex justify-content-center my-5">
                    <?php echo $campaigns->links(); ?>

                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/donation-website/resources/views/client/campaigns.blade.php ENDPATH**/ ?>