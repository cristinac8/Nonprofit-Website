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
                        <form action="<?php echo e(url('admin/users')); ?>" method="post">
                            <div class="form">
                                <div class="form-group input-group input-group-outline mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>

                                <div class="form-group input-group input-group-outline mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>

                                <div class="form-group input-group input-group-outline mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="form-group input-group input-group-static mb-3">
                                    <label for="" class="">DATE OF BIRTH</label>
                                    <input type="date" class="form-control" name="date" required>
                                </div>

                                <div class="form-group input-group input-group-static  mb-3">
                                    <label for="" class="ms-0">Gender</label>
                                    <select name="gender" id="" class="form-control ">
                                        <option value="1">Male</option>
                                        <option value="0">Female</option>
                                    </select>
                                </div>

                                <div class="form-group input-group input-group-static  mb-3">
                                    <label for="" class="ms-0">Role</label>
                                    <select name="role" id="" class="form-control ">
                                        <option value="0">Client</option>
                                        <option value="1">Admin</option>
                                    </select>
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
                            <h6 class="text-white text-capitalize ps-3">Data Master Users</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Name
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7">
                                        Email
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7">Date
                                        of Birth
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7">
                                        Gender
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7">
                                        Role
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bold opacity-7">
                                        Action
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-sm font-weight-normal"><?php echo e($user->name); ?></td>
                                        <td class="text-sm font-weight-normal"><?php echo e($user->email); ?></td>
                                        <td class="text-sm font-weight-normal"><?php echo e($user->dateOfBirth); ?></td>
                                        <td class="text-sm font-weight-normal"><?php echo e($user->gender == 1 ? 'Male' : 'Female'); ?></td>
                                        <td class="text-sm font-weight-normal"><?php echo e($user->role == 1 ? 'Admin' : 'Client'); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('admin/users/'.$user->id.'/delete')); ?>" title="Delete" class="btn btn-warning btn-sm"><i class="fas fa-trash-alt"></i></a>
                                            <a href="<?php echo e(url('admin/users/'.$user->id.'/update')); ?>" title="Update" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                                <?php echo $users->links(); ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/XAMPP/xamppfiles/htdocs/donation-website/resources/views/admin/users.blade.php ENDPATH**/ ?>