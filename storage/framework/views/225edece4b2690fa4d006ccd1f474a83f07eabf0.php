
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo e(asset('assets/img/apple-icon.png')); ?>">
    <link rel="icon" type="image/png" href="<?php echo e(asset('assets/img/favicon.png')); ?>">
    <title>
        Admin Login
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700"/>
    <!-- Nucleo Icons -->
    <link href="<?php echo e(asset('assets/css/nucleo-icons.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('assets/css/nucleo-svg.css')); ?>" rel="stylesheet"/>
    <!-- Font Awesome Icons -->
    <script src="<?php echo e(asset('https://kit.fontawesome.com/42d5adcbca.js')); ?>" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="<?php echo e(asset('assets/css/material-dashboard.css?v=3.0.0')); ?>" rel="stylesheet"/>
</head>

<body class="bg-primary">
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100"
         style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <span class="mask bg-gradient-dark opacity-6"></span>
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card z-index-0 fadeIn3 fadeInBottom">
                        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Sign in</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <form role="form" action="<?php echo e(url('admin/login')); ?>" class="text-start" method="post">
                                <div class="input-group input-group-static my-3">
                                    <label class="">Email</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="input-group input-group-static mb-3">
                                    <label class="">Password</label>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in
                                    </button>
                                </div>





                                <?php echo csrf_field(); ?>

                            </form>

                            <?php if($msg = Session::get('error')): ?>
                                <div class="alert alert-info text-white text-center">
                                    <?php echo e($msg); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>

</html>
<?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/donation-website/resources/views/admin/login.blade.php ENDPATH**/ ?>