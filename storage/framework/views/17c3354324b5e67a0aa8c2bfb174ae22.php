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
        
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6 ">
                        <div class="row justify-content-center">
                            <div class="col-8">
                                <img class="card-img-top w-100" src="<?php echo e(asset("imgs/psych-money-cover.jpg")); ?>" alt="..." />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        
                        <h1 class="fw-bold ">Shop item template</h1>
                        <h3 class="">Shop item template</h1>
                        
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium at dolorem quidem modi. Nam sequi consequatur obcaecati excepturi alias magni, accusamus eius blanditiis delectus ipsam minima ea iste laborum vero?</p>
                        <div class="d-flex">
                            
                            <button class="btn btn-outline-dark flex-shrink-0 me-3" type="button">
                                <i class="bi bi-book"></i>
                                Read
                            </button>
                            <button class="btn btn-outline-dark flex-shrink-0  " type="button">
                                <i class="bi bi-file-earmark-arrow-down"></i>
                                Download
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            
                <div class="container px-4 px-lg-5 mt-5">
                    <h2 class="fw-bolder mb-4">Related books</h2>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="<?php echo e(asset("imgs/psych-money-cover.jpg")); ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder">psycho money</h5>
                                        <div class="fw-bold">Autor</div>
                                        <!-- Product price-->
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">read more</a></div>
                                </div>
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
<?php endif; ?><?php /**PATH C:\Users\kecha\Documents\Laravel\library\library\resources\views/book.blade.php ENDPATH**/ ?>