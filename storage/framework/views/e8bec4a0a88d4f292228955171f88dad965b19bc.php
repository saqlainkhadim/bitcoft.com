
<li class="ml-20">
    <div class="dropdown account-dropdown">
        <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#">
            <img src="<?php echo e(getFile(config('location.user.path').auth()->user()->image)); ?>" alt="Profile Icon">
        </a>
        <div class="xs-dropdown-menu xs-dropdown-menu3 dropdown-menu dropdown-right">
            <div class="dropdown-content">

                <a class="dropdown-item" href="<?php echo e(route('user.home')); ?>">
                    <div class="media align-items-center">
                        <div class="media-icon">
                            <i class="icofont-dashboard"></i>
                        </div>
                        <div class="media-body ml-15">
                            <h6 class="font-weight-bold"><?php echo e(trans('Dashboard')); ?></h6>
                        </div>
                    </div>
                </a>

                <a class="dropdown-item" href="javascript:void(0)">
                    <div class="media align-items-center">
                        <div class="media-icon">
                            <i class="icofont-money-bag"></i>
                        </div>
                        <div class="media-body ml-15">
                            <h6 class="font-weight-bold"><?php echo e(trans('Deposit Balance')); ?></h6>
                            <p> <?php echo e(trans(config('basic.currency_symbol'))); ?> <span><?php echo e(getAmount(auth()->user()->balance)); ?></span></p>
                        </div>
                    </div>
                </a>

                <a class="dropdown-item"  href="javascript:void(0)">
                    <div class="media align-items-center">
                        <div class="media-icon">
                            <i class="icofont-money-bag"></i>
                        </div>
                        <div class="media-body ml-15">
                            <h6 class="font-weight-bold"><?php echo e(trans('Interest Balance')); ?></h6>
                            <p> <?php echo e(trans(config('basic.currency_symbol'))); ?> <span><?php echo e(getAmount(auth()->user()->interest_balance)); ?></span></p>
                        </div>
                    </div>
                </a>


                <a class="dropdown-item" href="<?php echo e(route('user.profile')); ?>">
                    <div class="media align-items-center">
                        <div class="media-icon">
                            <i class="icofont-gear-alt"></i>
                        </div>
                        <div class="media-body ml-15">
                            <h6 class="font-weight-bold"><?php echo app('translator')->get('My Profile'); ?></h6>
                            <p><i class="icofont-user-alt-7"></i><span class="ml-5"><?php echo app('translator')->get('Set up all necessary info'); ?></span></p>
                        </div>
                    </div>
                </a>

                <a class="dropdown-item" href="<?php echo e(route('user.twostep.security')); ?>">
                    <div class="media align-items-center">
                        <div class="media-icon">
                            <i class="icofont-ssl-security"></i>
                        </div>
                        <div class="media-body ml-15">
                            <h6 class="font-weight-bold"><?php echo app('translator')->get('2FA Security'); ?></h6>
                        </div>
                    </div>
                </a>

                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                    <div class="media align-items-center">
                        <div class="media-icon">
                            <i class="icofont-power"></i>
                        </div>
                        <div class="media-body ml-15">
                            <h6 class="font-weight-bold"><?php echo e(__('Logout')); ?></h6>
                        </div>
                    </div>
                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>

            </div>
        </div>
    </div>
</li>
<?php /**PATH C:\xampp\htdocs\hyippro\project\resources\views/themes/deepblue/partials/profile-menu.blade.php ENDPATH**/ ?>