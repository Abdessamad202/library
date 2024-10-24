<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => ['title' => 'Sign Up Page']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Sign Up Page']); ?>
    <div class="container-fluid vh-100">
        <div class="row h-100">
            <div class="col-6 p-0 h-100">
                <img src="<?php echo e(asset('imgs/652393.jpg')); ?>" class="w-100 h-100" alt="">
            </div>
        <!-- </div> -->
        <!-- <div class="row"> -->
            <div class="col-6 d-flex flex-column justify-content-center" >
                <h2 class="text-center  mb-3">Create An Account To Start</h2>
                <form action="<?php echo e(route("signup.store")); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-floating mb-3">
                        <input type="text" name="fname" class="form-control " id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">First Name</label>
                    </div>
                    <?php $__errorArgs = ["fname"];
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
                        <input type="text" name="lname" class="form-control " id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Last Name</label>
                    </div>
                    <?php $__errorArgs = ["fname"];
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
                    <div class="form-floating mb-3">
                        <input type="password" name="password_confirmation" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password Confirmation</label>
                    </div>
                    <div class="d-flex mb-3">
                        <button type="submit" style="background-color: #42b72a;" class="btn btn-success flex-grow-1"><strong>SING-UP</strong></button>
                    </div>
                </form>
                <div class="d-flex mt-2 justify-content-center">
                    <a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="<?php echo e(route("login.index")); ?>"
                        ><strong>Login To Your Account If You Have One</strong></a
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
<?php endif; ?><?php /**PATH C:\Users\kecha\Documents\Laravel\library\library\resources\views/login/sign-up.blade.php ENDPATH**/ ?>