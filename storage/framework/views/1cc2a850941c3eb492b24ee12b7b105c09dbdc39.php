<?php $__env->startSection('content'); ?>
    <section id="banner-stories" class="arrow-down-section">
        <h3 class="header--section">
            <?php echo e(__('profile.history_page')); ?>

        </h3>
    </section>

    <section id="profile" class="mt-5 p-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 history">
                    <h4><?php echo e(__('profile.history_donation')); ?></h4>
                    <div class="row">
                        <?php $__currentLoopData = $donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4">
                                <div class="box--stories">
                                    <div class="image">
                                        <img src="<?php echo e(asset("campaign/".$donation->campaign->photo)); ?>" alt="">
                                    </div>
                                    <div class="entry">
                                        <h3>
                                            <?php if(App::currentLocale() == 'en'): ?>
                                                <?php echo e($donation->campaign->title); ?>

                                            <?php else: ?>
                                                <?php echo e($donation->campaign->titleRO); ?>

                                            <?php endif; ?>
                                        </h3>
                                        <p><?php echo e(__('profile.you_donate')); ?>: <?php echo e('$'.number_format($donation->amount,2)); ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="pagination d-flex justify-content-center mt-5">
                        <?php echo $donations->links(); ?>

                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-center"><?php echo e(__('profile.account')); ?></h4>
                    <div class="profile-box p-3">
                        <table class="table table-bordered">
                            <tr>
                                <th><?php echo e(__('profile.name')); ?></th>
                                <td><?php echo e($user->name); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('profile.email')); ?></th>
                                <td><?php echo e($user->email); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('profile.phone')); ?></th>
                                <td><?php echo e($user->phone); ?></td>
                            </tr>
                            <tr>
                                <th><?php echo e(__('profile.birth_day')); ?></th>
                                <td><?php echo e(date('d F Y', strtotime($user->dateOfBirth))); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/donation-website/resources/views/client/profile.blade.php ENDPATH**/ ?>