<?php $__env->startSection('content'); ?>

    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-md-4">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Add New</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(url('admin/blogs')); ?>" method="post" enctype="multipart/form-data">
                            <div class="form">
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="form-label">Title En</label>
                                    <input type="text" class="form-control" name="titleEN" required>
                                </div>
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Description En</label>
                                    <textarea name="descriptionEN" class="form-control" id="" cols="30"
                                              rows="10"></textarea>
                                </div>

                                <div class="form-group input-group-static input-group mb-3">
                                    <label for="">Image</label>
                                    <input type="file" class="form-control" name="image" required>
                                </div>

                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="form-label">Titlu RO</label>
                                    <input type="text" class="form-control" name="titleRO">
                                </div>
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">Descriere RO</label>
                                    <textarea name="descriptionRO" class="form-control" id="" cols="30"
                                              rows="10"></textarea>
                                </div>

                                <?php echo csrf_field(); ?>


                                <button class="btn btn-primary">Submit</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                            <h6 class="text-white text-capitalize ps-3">Data Master Stories</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        #
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Title
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><img src="<?php echo e(asset('stories/'.$blog->photo)); ?>" width="150" alt=""></td>
                                        <td><?php echo e($blog->title); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('admin/blogs/'.$blog->id.'/delete')); ?>"
                                               class="btn btn-warning btn-icon-only" title="Delete">
                                                <i class="material-icons">delete</i>
                                            </a>
                                            <a href="<?php echo e(url('admin/blogs/'.$blog->id.'/update')); ?>"
                                               class="btn btn-info btn-icon-only" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </a>
                                            <a target="_blank" href="<?php echo e(url('stories/'.$blog->url)); ?>"
                                               class="btn btn-secondary btn-icon-only" title="View">
                                                <i class="material-icons">circle</i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/donation-website/resources/views/admin/blogs.blade.php ENDPATH**/ ?>