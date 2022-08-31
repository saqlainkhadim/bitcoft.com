<a class="das-nav nav-item <?php echo e(menuActive('user.home')); ?> " href="<?php echo e(route('user.home')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/db_nav_icon_1.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Dashboard'); ?></span>
    </div>
</a>


<a class="das-nav nav-item <?php echo e(menuActive(['user.invest-history'])); ?>" href="<?php echo e(route('user.invest-history')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/db_nav_icon_5.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Invest History'); ?></span>
    </div>
</a>


<a class="das-nav nav-item <?php echo e(menuActive(['user.addFund', 'user.addFund.confirm'])); ?>" href="<?php echo e(route('user.addFund')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_acc_3.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Add Fund'); ?></span>
    </div>
</a>


<a class="das-nav nav-item <?php echo e(menuActive(['user.fund-history', 'user.fund-history.search'])); ?>" href="<?php echo e(route('user.fund-history')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/db_nav_icon_3.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Fund History'); ?></span>
    </div>
</a>




<a class="das-nav nav-item <?php echo e(menuActive(['user.money-transfer'])); ?>" href="<?php echo e(route('user.money-transfer')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_3.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Transfer'); ?></span>
    </div>
</a>



<a class="das-nav nav-item <?php echo e(menuActive(['user.transaction', 'user.transaction.search'])); ?>" href="<?php echo e(route('user.transaction')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_1.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Transaction'); ?></span>
    </div>
</a>





<a class="das-nav nav-item  <?php echo e(menuActive(['user.payout.money','user.payout.preview'])); ?>" href="<?php echo e(route('user.payout.money')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/refferal_3.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Payout'); ?> </span>
    </div>
</a>

<a class="das-nav nav-item  <?php echo e(menuActive(['user.payout.history','payout.history.search'])); ?>" href="<?php echo e(route('user.payout.history')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/feature_2.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Payout History'); ?></span>
    </div>
</a>

<a class="das-nav nav-item <?php echo e(menuActive(['user.referral'])); ?>" href="<?php echo e(route('user.referral')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_acc_4.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('My Referral'); ?></span>
    </div>
</a>


<a class="das-nav nav-item <?php echo e(menuActive(['user.referral.bonus', 'user.referral.bonus.search'])); ?>" href="<?php echo e(route('user.referral.bonus')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/db_nav_icon_4.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Referral Bonus'); ?></span>
    </div>
</a>


<a class="das-nav nav-item <?php echo e(menuActive(['user.profile'])); ?>" href="<?php echo e(route('user.profile')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/feature_1.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Profile Settings'); ?></span>
    </div>
</a>


<a class="das-nav nav-item <?php echo e(menuActive(['user.ticket.list', 'user.ticket.create', 'user.ticket.view'])); ?>" href="<?php echo e(route('user.ticket.list')); ?>">
    <div class="icon-wrapper">
        <div class="nav-icon">
            <img src="<?php echo e(asset($themeTrue.'images/icon/feature_3.png')); ?>" alt="Icon Missing">
        </div>
        <span><?php echo app('translator')->get('Support Ticket'); ?></span>
    </div>
</a>
<?php /**PATH C:\xampp\htdocs\hyippro\project\resources\views/themes/deepblue/partials/sidebar.blade.php ENDPATH**/ ?>