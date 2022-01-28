<?php $__env->startSection('content'); ?>

    <section id="campaign-item">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="main">
                        <div class="image">
                            <img src="<?php echo e(asset('campaign/'.$campaign->photo)); ?>" alt="">
                        </div>
                        <h3 class="title my-3">
                            <?php if(App::currentLocale() == 'en'): ?>
                                <?php echo e($campaign->title); ?>

                            <?php else: ?>
                                <?php echo e($campaign->titleRO); ?>

                            <?php endif; ?>
                        </h3>
                        <div class="description article">
                            <?php if(App::currentLocale() == 'en'): ?>
                                <?php echo e($campaign->description); ?>

                            <?php else: ?>
                                <?php echo e($campaign->descriptionRO); ?>

                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="donation">
                        <h3 class="mb-3">Donația ta contează!</h3>

                        <?php if(session()->has('client')): ?>
                            <form action="<?php echo e(route('donation.make')); ?>" id="form-donation"
                                  method="post"
                                  class="require-validation"
                                  data-cc-on-file="false"
                                  data-stripe-publishable-key="<?php echo e(env('STRIPE_KEY')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="title_donation" value="<?php echo e($campaign->title); ?>">
                                <div class="form-row wrap--amount d-flex flex-row row">
                                    <div class="col-md-6">
                                        <label for="amount-5" class="amount active">
                                            <input id="amount-5" checked name="donation_amount" type="radio" value="5">
                                            <label for="amount-5">5 USD</label>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="amount" for="amount-10">
                                            <input id="amount-10" name="donation_amount" type="radio" value="15">
                                            <label for="amount-10">15 USD</label>
                                        </label>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="amount" for="amount-15">
                                            <input id="amount-15" name="donation_amount" type="radio" value="35">
                                            <label for="amount-15">35 USD</label>
                                        </label>
                                    </div>
                                    <div class="col-md-6 d-flex">
                                        <label class="amount cst-lab" for="amount-cst">
                                            <input id="amount-cst" name="donation_amount" type="radio" value="10">
                                            <input id="amount-cst" name="donation_amount_cst" type="number" min="35"
                                                   value="" class="w-50">
                                            <label for="amount-cst">USD</label>
                                        </label>
                                    </div>
                                    <input type="hidden" id="cst" name="cstOrNo" value="0">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="" class="mb-1">Mulțumim că ai ales să te implici!</label>
                                    <textarea name="text" class="form-control" id="" cols="30" rows="5" placeholder="Poți lăsa un gând bun ce va aduce un zâmbet :)"></textarea>
                                </div>
                                <input type="hidden" name="campaign_id" value="<?php echo e($campaign->id); ?>">
                                <input type="hidden" name="user_id" value="<?php echo e(session('client')['id']); ?>">
                                <script>
                                    $(document).ready(function () {
                                        let iterCst = false;

                                        $('#form-donation').on('change', 'input[name=donation-amount]:checked', function () {

                                            let value = $(this).val();
                                            $('#amount-cst').val('')
                                            if (value > 0) {
                                                $('#cst').val('0')
                                            } else {
                                                $('#cst').val('1')
                                            }
                                        });

                                        $('.amount').click(function () {
                                            $('.amount').removeClass('active');
                                            $(this).addClass('active');
                                        })


                                    });
                                </script>
                                <div class='form-row row'>
                                    <div class='col-md-12 error form-group hide'>
                                        <div class='alert-danger alert'>Te rugăm să verifici datele introduse și să reîncerci.
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-warning w-100 mt-3">Trimite</button>
                            </form>
                        <?php else: ?>
                            <div class="alert alert-primary text-center">
                                Trebuie să te <a href="<?php echo e(url('login')); ?>" class="">Loghezi</a> pentru a putea face o donație. <br>Dacă nu ai deja un cont poți crea unul.
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('client.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/donation-website/resources/views/client/campaign-item.blade.php ENDPATH**/ ?>