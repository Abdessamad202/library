<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Home Page']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Home Page']); ?>
    <?php echo $__env->make("partial.header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="scroll-section">
        <div class="row justify-content-center align-items-center">
            <h2 class="mb-3">Recommended</h2>
            <div class="col-3 ">
                <div class="card show">
                    <img src="<?php echo e(asset("imgs/psych-money-cover.jpg")); ?>" alt="">
                    <div class="content">
                        <div class="title">psychology of money</div>
                        <div class="autor">name of the autor</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <h2 class="mb-3">Categories</h2>
            <div class="col-3">
                <div class="card">
                    <img src="psych-money-cover.jpg" alt="">
                    <div class="content">
                        <div class="title">psychology of money</div>
                        <div class="autor">name of the autor</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make("partial.aside", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->make("partial.bookside", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\kecha\Documents\Laravel\library\library\resources\views/home.blade.php ENDPATH**/ ?>