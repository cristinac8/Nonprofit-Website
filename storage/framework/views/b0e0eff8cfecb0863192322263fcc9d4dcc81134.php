<?php $__env->startSection('content'); ?>

    <section id="banner-stories" class="arrow-down-section">
        <h3 class="header--section">
            <?php echo e(__('post.list_of_stories')); ?>

        </h3>
    </section>

    <section class="stories all--campaign mt-5 pt-3" id="post">
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
                                <div class="">
                                    <?php if(App::currentLocale() == 'en'): ?>
                                        <?php echo e(substr($story->entry, 0, 150)); ?>...
                                    <?php else: ?>
                                        <?php echo e(substr($story->entryRO, 0, 150)); ?>...
                                    <?php endif; ?>
                                </div>
                                <a href="<?php echo e(url('stories/'.$story->url)); ?>" class="read--more"><?php echo e(__('home.read_more')); ?> &raquo;</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="center d-flex justify-content-center my-5">
                    <?php echo $stories->links(); ?>

                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/donation-website/resources/views/client/stories.blade.php ENDPATH**/ ?>