<?php $__env->startSection('title',trans('Dashboard')); ?>
<?php $__env->startSection('content'); ?>

    <?php $__env->startPush('navigator'); ?>
        <!-- PAGE-NAVIGATOR -->
        <section id="page-navigator">
            <div class="container-fluid">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('user.home')); ?>"><?php echo app('translator')->get('Home'); ?></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0)"
                                                       class="cursor-inherit"><?php echo e(trans('Dashboard')); ?></a></li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- /PAGE-NAVIGATOR -->
    <?php $__env->stopPush(); ?>


    <!-- DASHBOARD -->
    <section id="dashboard">
        <div class="dashboard-wrapper wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.35s">
            <div class="audit-information">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="content-wrapper">
                            <div class="content-container">
                                <div class="content-main-block d-flex h-fill">
                                    <div class="content-icon flex-fill">
                                        <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_1.png')); ?>"
                                             alt="Icon Missing">
                                    </div>
                                    <div class="content-block flex-fill d-flex flex-column justify-content-center">
                                        <h6 class="h6 font-weight-medium"><?php echo app('translator')->get('Main Balance'); ?></h6>
                                        <h4 class="h4 mt-10">
                                            <sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup><?php echo e(getAmount($walletBalance, config('basic.fraction_number'))); ?>

                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="content-wrapper">
                            <div class="content-container">
                                <div class="content-main-block d-flex h-fill">
                                    <div class="content-icon flex-fill">
                                        <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_2.png')); ?>"
                                             alt="Icon Missing">
                                    </div>
                                    <div class="content-block flex-fill d-flex flex-column justify-content-center">
                                        <h6 class="h6 font-weight-medium"><?php echo app('translator')->get('Interest Balance'); ?></h6>
                                        <h4 class="h4 mt-10">
                                            <sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup><?php echo e(getAmount($interestBalance, config('basic.fraction_number'))); ?>

                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="content-wrapper">
                            <div class="content-container">
                                <div class="content-main-block d-flex h-fill">
                                    <div class="content-icon flex-fill">
                                        <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_3.png')); ?>"
                                             alt="Icon Missing">
                                    </div>
                                    <div class="content-block flex-fill d-flex flex-column justify-content-center">
                                        <h6 class="h6 font-weight-medium"><?php echo app('translator')->get('Total Deposit'); ?></h6>
                                        <h4 class="h4 mt-10">
                                            <sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup><?php echo e(getAmount($totalDeposit, config('basic.fraction_number'))); ?>

                                        </h4>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="content-wrapper">
                            <div class="content-container">
                                <div class="content-main-block d-flex h-fill">
                                    <div class="content-icon flex-fill">
                                        <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_4.png')); ?>"
                                             alt="Icon Missing">
                                    </div>
                                    <div class="content-block flex-fill d-flex flex-column justify-content-center">
                                        <h6 class="h6 font-weight-medium"><?php echo app('translator')->get('Total Earn'); ?></h6>
                                        <h4 class="h4 mt-10">
                                            <sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup><?php echo e(getAmount($totalInterestProfit, config('basic.fraction_number'))); ?>

                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chart-information mt-50 mb-50">
                <div class="row">
                    <div class="col-xl-6">
                        <div id="container" class="apexcharts-canvas"></div>
                    </div>

                    <div class="col-xl-6">
                        <div class="progress-wrapper">
                            <div class="progress-container d-flex flex-column flex-sm-row justify-content-start">

                                <div class="circular-progress cp_1">
                                    <svg class="radial-progress"
                                         data-percentage="<?php echo e(getPercent($roi['totalInvest'], $roi['completed'])); ?>"
                                         viewBox="0 0 80 80">
                                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                        <circle class="complete" cx="40" cy="40" r="35"
                                                style="stroke-dashoffset: 39.58406743523136;"></circle>
                                        <text class="percentage" x="50%" y="53%"
                                              transform="matrix(0, 1, -1, 0, 80, 0)"><?php echo e(getPercent($roi['totalInvest'], $roi['completed'])); ?>

                                            %
                                        </text>
                                    </svg>
                                    <h6 class="h6 text-center"><?php echo app('translator')->get('Invest Completed'); ?></h6>
                                </div>


                                <div class="circular-progress cp_3">
                                    <svg class="radial-progress"
                                         data-percentage="<?php echo e(100 - getPercent($roi['expectedProfit'], $roi['returnProfit'])); ?>"
                                         viewBox="0 0 80 80">
                                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                        <circle class="complete" cx="40" cy="40" r="35"
                                                style="stroke-dashoffset: 39.58406743523136;"></circle>
                                        <text class="percentage" x="50%" y="53%"
                                              transform="matrix(0, 1, -1, 0, 80, 0)"><?php echo e(100 - getPercent($roi['expectedProfit'], $roi['returnProfit'])); ?>

                                            %
                                        </text>
                                    </svg>

                                    <h6 class="h6 text-center"><?php echo app('translator')->get('ROI Speed'); ?></h6>
                                </div>

                                <div class="circular-progress cp_2">
                                    <svg class="radial-progress"
                                         data-percentage="<?php echo e(getPercent($roi['expectedProfit'], $roi['returnProfit'])); ?>"
                                         viewBox="0 0 80 80">
                                        <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                                        <circle class="complete" cx="40" cy="40" r="35"
                                                style="stroke-dashoffset: 147.3406954533613;"></circle>
                                        <text class="percentage" x="50%" y="53%"
                                              transform="matrix(0, 1, -1, 0, 80, 0)"><?php echo e(getPercent($roi['expectedProfit'], $roi['returnProfit'])); ?>

                                            %
                                        </text>
                                    </svg>

                                    <h6 class="h6 text-center"><?php echo app('translator')->get('ROI Redeemed'); ?></h6>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="h4 text-center mt-50 mb-50"><?php echo app('translator')->get('Account Statistics'); ?></h4>
            <div class="balance-information">
                <div class="row">
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="content-wrapper">
                            <div class="content-container">
                                <div class="d-flex flex-column align-items-center h-fill">
                                    <div class="content-icon flex-fill">
                                        <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_acc_1.png')); ?>"
                                             alt="Icon Missing">
                                    </div>
                                    <div
                                        class="content-block flex-fill d-flex flex-column justify-content-center text-center">
                                        <h6 class="h6 mt-15 mb-15 font-weight-medium"><?php echo app('translator')->get('Total Invest'); ?></h6>
                                        <h4 class="h4">
                                            <sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup><?php echo e(getAmount($roi['totalInvestAmount'])); ?>

                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="content-wrapper">
                            <div class="content-container">
                                <div class="d-flex flex-column align-items-center h-fill">
                                    <div class="content-icon flex-fill">
                                        <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_acc_2.png')); ?>"
                                             alt="Icon Missing">
                                    </div>
                                    <div
                                        class="content-block flex-fill d-flex flex-column justify-content-center text-center">
                                        <h6 class="h6 mt-15 mb-15 font-weight-medium"><?php echo app('translator')->get('Total Payout'); ?></h6>
                                        <h4 class="h4">
                                            <sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup><?php echo e(getAmount($totalPayout)); ?>

                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="content-wrapper">
                            <div class="content-container">
                                <div class="d-flex flex-column align-items-center h-fill">
                                    <div class="content-icon flex-fill">
                                        <img src="<?php echo e(asset($themeTrue.'images/icon/feature_3.png')); ?>"
                                             alt="Icon Missing">
                                    </div>
                                    <div
                                        class="content-block flex-fill d-flex flex-column justify-content-center text-center">
                                        <h6 class="h6 mt-15 mb-15 font-weight-medium"><?php echo app('translator')->get('Total Ticket'); ?></h6>
                                        <h4 class="h4"><?php echo e($ticket); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6 col-xl-3">
                        <div class="content-wrapper">
                            <div class="content-container">
                                <div class="d-flex flex-column align-items-center h-fill">
                                    <div class="content-icon flex-fill">
                                        <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_acc_4.png')); ?>"
                                             alt="Icon Missing">
                                    </div>
                                    <div
                                        class="content-block flex-fill d-flex flex-column justify-content-center text-center">
                                        <h6 class="h6 mt-15 mb-15 font-weight-medium"><?php echo app('translator')->get('Total Referral Bonus'); ?></h6>

                                        <h4 class="h4">
                                            <sup><?php echo e(trans(config('basic.currency_symbol'))); ?></sup><?php echo e(getAmount($depositBonus + $investBonus)); ?>

                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="refferal-information mt-50 mb-50">

                <div class="row mb-50">
                    <div class="col-xl-<?php echo e(($latestRegisteredUser) ? '12':'6'); ?>">
                        <div class="form-group form-block mb-50 pr-15 pl-15">
                            <h5 class="mb-15"><?php echo app('translator')->get('Referral Link'); ?></h5>
                            <div class="input-group mb-50">
                                <input type="text" value="<?php echo e(route('register.sponsor',[Auth::user()->username])); ?>"
                                       class="form-control form-control-lg bg-transparent" id="sponsorURL"
                                       readonly>
                                <div class="input-group-append">
                                            <span class="input-group-text copytext" id="copyBoard"
                                                  onclick="copyFunction()">
                                                <i class="fa fa-copy"></i>
                                            </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php if($latestRegisteredUser): ?>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <div class="content-wrapper bg-5">
                                <div class="img-container d-none d-sm-block">
                                    <img class="img-fill" src="<?php echo e(asset($themeTrue.'images/shapes/shape-img-3.png')); ?>"
                                         alt="Shape Image">
                                </div>
                                <div class="content-container d-flex">
                                    <div class="media align-items-center">
                                        <div class="content-icon">
                                            <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_ref_1.png')); ?>"
                                                 alt="Icon Missing">
                                        </div>
                                        <div class="media-body ml-20">
                                            <h5 class="mb-15"><?php echo app('translator')->get('Latest Registered Partner'); ?></h5>
                                            <h6><?php echo e($latestRegisteredUser->username); ?> <span class="pl-2"><?php echo app('translator')->get('Email'); ?>
                                                    : <?php echo e($latestRegisteredUser->email); ?></span></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="col-md-6 col-lg-6 col-xl-6">
                        <div class="content-wrapper bg-5">
                            <div class="img-container d-none d-sm-block">
                                <img class="img-fill" src="<?php echo e(asset($themeTrue.'images/shapes/shape-img-3.png')); ?>"
                                     alt="Shape Image">
                            </div>
                            <div class="content-container d-flex">
                                <div class="media align-items-center">
                                    <div class="content-icon">
                                        <img src="<?php echo e(asset($themeTrue.'images/icon/dashboard_ref_2.png')); ?>"
                                             alt="Icon Missing">
                                    </div>
                                    <div class="media-body ml-20">
                                        <h5 class="mb-15"><?php echo app('translator')->get('The last Referral Bonus'); ?></h5>
                                        <h6 class="text-uppercase">
                                            <strong><?php echo e(trans($basic->currency_symbol)); ?></strong> <?php echo e($lastBonus); ?></h6>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </section>
    <!-- /DASHBOARD -->
<?php $__env->stopSection(); ?>


<?php $__env->startPush('script'); ?>

    <script src="<?php echo e(asset($themeTrue.'js/apexcharts.js')); ?>"></script>


    <script>
        "use strict";

        var options = {
            theme: {
                mode: 'dark',
            },

            series: [
                {
                    name: "<?php echo e(trans('Investment')); ?>",
                    color: 'rgba(247, 147, 26, 1)',
                    data: <?php echo $monthly['investment']->flatten(); ?>

                },
                {
                    name: "<?php echo e(trans('Payout')); ?>",
                    color: 'rgba(240, 16, 16, 1)',
                    data: <?php echo $monthly['payout']->flatten(); ?>

                },
                {
                    name: "<?php echo e(trans('Deposit')); ?>",
                    color: 'rgba(255, 72, 0, 1)',
                    data: <?php echo $monthly['funding']->flatten(); ?>

                },
                {
                    name: "<?php echo e(trans('Deposit Bonus')); ?>",
                    color: 'rgba(39, 144, 195, 1)',
                    data: <?php echo $monthly['referralFundBonus']->flatten(); ?>

                },
                {
                    name: "<?php echo e(trans('Investment Bonus')); ?>",
                    color: 'rgba(136, 203, 245, 1)',
                    data: <?php echo $monthly['referralInvestBonus']->flatten(); ?>

                }
            ],
            chart: {
                type: 'bar',
                // height: ini,
                background: '#131e51',
                toolbar: {
                    show: false
                }

            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: '55%',
                    endingShape: 'rounded'
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: <?php echo $monthly['investment']->keys(); ?>,

            },
            yaxis: {
                title: {
                    text: ""
                }
            },
            fill: {
                opacity: 1
            },
            tooltip: {
                colors: ['#000'],
                y: {
                    formatter: function (val) {
                        return "<?php echo e(trans($basic->currency_symbol)); ?>" + val + ""
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#container"), options);
        chart.render();

        function copyFunction() {
            var copyText = document.getElementById("sponsorURL");
            copyText.select();
            copyText.setSelectionRange(0, 99999);
            /*For mobile devices*/
            document.execCommand("copy");
            Notiflix.Notify.Success(`Copied: ${copyText.value}`);
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make($theme.'layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\hyippro\project\resources\views/themes/deepblue/user/dashboard.blade.php ENDPATH**/ ?>