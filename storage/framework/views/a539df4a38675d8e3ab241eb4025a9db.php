<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Login Page']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Login Page']); ?>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-7 p-0 h-100">
                <img src="<?php echo e(asset('imgs/pexels-minan1398-694740.jpg')); ?>" class="w-100 h-100">                </div>
        <!-- </div> -->
        <!-- <div class="row"> -->
            <div class="col-5 d-flex flex-column justify-content-center">
                <h2 class="text-center mb-5">Login to Continue</h2>
                <form action="<?php echo e(route("login.check")); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control " id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                      </div>
                      <?php $__errorArgs = ["email"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e($message); ?></p>
                            
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                      <div class="form-floating mb-3">
                        <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <?php $__errorArgs = ["password"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p class="text-danger"><?php echo e($message); ?></p>
                            
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    <div class="d-flex mb-3">
                        <button type="submit" class="btn btn-primary flex-grow-1"><strong>LOGIN</strong></button>
                    </div>
                </form>
                <div class="d-flex mt-5 justify-content-center">

                    <a
                        name=""
                        id=""
                        style="background-color: #42b72a;"
                        class="btn btn-success"
                        href="<?php echo e(route("signup.index")); ?>"
                        ><strong>Create a New Account</strong></a
                    >
                </div>
                
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?><?php /**PATH C:\Users\kecha\Documents\Laravel\library\library\resources\views/login/login.blade.php ENDPATH**/ ?>