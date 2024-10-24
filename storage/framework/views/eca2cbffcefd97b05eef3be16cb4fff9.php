<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title']));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter((['title']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>
<!doctype html>
<html lang="en">

<head>
    <title><?php echo e($title); ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-icons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/nouislider.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>
    <div class="all">
        <!-- <div class="section"> -->
        <?php echo e($slot); ?>

        
        
        
    </div>

    
    <!-- Bootstrap JavaScript Libraries -->
</body>



<script src="<?php echo e(asset('js/main.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery-3.6.1.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.nice-select.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/slick.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/nouislider.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/jquery.zoom.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/app.js')); ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        // Optional parameters
        //   direction: 'vertical',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // And if we need scrollbar
        scrollbar: {
            el: '.swiper-scrollbar',
        },
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        }
    });
</script>

</html>
<?php /**PATH C:\Users\kecha\Documents\Laravel\library\library\resources\views/components/layout.blade.php ENDPATH**/ ?>