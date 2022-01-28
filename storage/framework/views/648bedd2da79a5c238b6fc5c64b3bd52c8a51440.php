<?php $__env->startSection('content'); ?>

    <section id="banner-stories" class="arrow-down-section">
        <h3 class="header--section">
            <?php if(App::currentLocale() == 'en'): ?>
                <?php echo e($story->title); ?>

            <?php else: ?>
                <?php echo e($story->titleRO); ?>

            <?php endif; ?>
        </h3>
    </section>

    <section id="campaign-item" class="pt-5 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main">
                        <div class="image">
                            <img src="<?php echo e(asset('stories/'.$story->photo)); ?>" alt="">
                        </div>
                        <div class="description article my-4">
                            <?php if(App::currentLocale() == 'en'): ?>
                                <?php echo e($story->entry); ?>

                            <?php else: ?>
                                <?php echo e($story->entryRO); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/donation-website/resources/views/client/story.blade.php ENDPATH**/ ?>