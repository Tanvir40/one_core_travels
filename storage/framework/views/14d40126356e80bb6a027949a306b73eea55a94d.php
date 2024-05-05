

<style>

    .text-left-on-video {
        position: absolute;
        top: 10%;
        left: 0;
        width: 50%; /* Adjust width as needed */
        padding: 20px; /* Adjust padding as needed */
        color: white; /* Text color */
        z-index: 1; /* Ensure text is above the video */
    }
        @media(min-aspect-ratio:16/9) {
            .bg-video{
                width:100%;
                height:auto;
                z-index: -1;
            }
        }
</style>    
<div class="bravo-form-search-all hero-block hero-v1 bg-video bg-img-hero-bottom gradient-overlay-half-black-gradient text-center z-index-2">
<video autoplay loop muted playsinline class="bg-video">
        <source src="<?php echo e(asset('makkah.mp4')); ?>" type="video/mp4">
        <!-- Add other video formats here if needed -->
        Your browser does not support the video tag.
    </video>
    <div class="text-left-on-video">
        <div class="container space-2 space-top-xl-4">
            <h1 class="font-size-60 font-size-xs-30 text-white font-weight-bold"><?php echo e($title ?? ''); ?></h1>
            <p class="font-size-20 font-weight-normal text-white"><?php echo e($sub_title ?? ''); ?></p>
        </div>
    </div>
    <div class="container space-2 space-top-xl-4">
        <?php if(empty($hide_form_search)): ?>
            <div class="mb-lg-n1">
                <ul class="nav tab-nav-rounded flex-nowrap pb-2 pb-md-4 tab-nav <?php if(!empty($single_form_search)): ?> d-none <?php endif; ?>" role="tablist">
                    <?php if(!empty($service_types)): ?>
                        <?php $number = 0; ?>
                        <?php $__currentLoopData = $service_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $allServices = get_bookable_services();
                                if(empty($allServices[$service_type])) continue;
                                $module = new $allServices[$service_type];
                            ?>
                            <li class="nav-item" role="bravo_<?php echo e($service_type); ?>">
                                <a class="nav-link font-weight-medium <?php if($number == 0): ?> active <?php endif; ?> pl-md-5 pl-3" id="bravo_<?php echo e($service_type); ?>-tab" data-toggle="pill" href="#bravo_<?php echo e($service_type); ?>" role="tab" aria-controls="bravo_<?php echo e($service_type); ?>" aria-selected="true">
                                    <div class="d-flex flex-column flex-md-row  position-relative text-white align-items-center">
                                        <figure class="ie-height-40 d-md-block mr-md-3">
                                            <i class="icon <?php echo e($module->getServiceIconFeatured()); ?> font-size-3"></i>
                                        </figure>
                                        <span class="tabtext mt-2 mt-md-0 font-weight-semi-bold">
                                              <?php echo e(!empty($modelBlock["title_for_".$service_type]) ? $modelBlock["title_for_".$service_type] : $module->getModelName()); ?>

                                        </span>
                                    </div>
                                </a>
                            </li>
                            <?php $number++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </ul>
                <div class="tab-content hero-tab-pane">
                    <?php if(!empty($service_types)): ?>
                        <?php $number = 0; ?>
                        <?php $__currentLoopData = $service_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service_type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                                $allServices = get_bookable_services();
                                if(empty($allServices[$service_type])) continue;
                            ?>
                            <div class="tab-pane fade <?php if($number == 0): ?> active show <?php endif; ?>" id="bravo_<?php echo e($service_type); ?>" role="tabpanel" aria-labelledby="bravo_<?php echo e($service_type); ?>-tab">
                                <div class="card border-0 tab-shadow">
                                    <div class="card-body">
                                        <?php echo $__env->make(ucfirst($service_type).'::frontend.layouts.search.form-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </div>
                                </div>
                            </div>
                            <?php $number++; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<?php /**PATH C:\wamp64\www\one_core_travels\themes/Mytravel/Template/Views/frontend/blocks/form-search-all-service/style_1.blade.php ENDPATH**/ ?>