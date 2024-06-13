<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="<?php echo e(config('app.baseURL')); ?>/images/favicon.png">
    <!-- Page Title  -->
    <title>Spatie Role Permission</title>
    
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/assets/css/dashlite.css?ver=2.7.0">
    <link id="skin-default" rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/assets/css/theme.css?ver=2.7.0">
    
    <link rel="stylesheet" type="text/css" href="https://code.jquery.com/jquery-3.5.1.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>


</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s  -->
        <div class="nk-main ">
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- wrap @s  -->
            <div class="nk-wrap ">
                <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php echo $__env->yieldContent('content'); ?>
                
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- wrap @e  -->
        </div>
        <!-- main @e  -->
    </div>
    <!-- app-root @e  -->
    <!-- JavaScript -->

    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/bundle.js?ver=2.7.0"></script>
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/scripts.js?ver=2.7.0"></script>
    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/charts/gd-default.js?ver=2.7.0"></script>

    <script src="<?php echo e(config('app.baseURL')); ?>/assets/js/apps/messages.js?ver=2.7.0"></script>
    <script type="text/javascript">
       <?php if(Session::has('message')): ?>
       var type = "<?php echo e(Session::get('alert-type', 'info')); ?>";
       switch(type){
        case 'info':
        toastr.info("<?php echo e(Session::get('message')); ?>");
        break;

        case 'warning':
        toastr.warning("<?php echo e(Session::get('message')); ?>");
        break;

        case 'success':
        toastr.success("<?php echo e(Session::get('message')); ?>");
        break;

        case 'error':
        toastr.error("<?php echo e(Session::get('message')); ?>");
        break;
    }
    <?php endif; ?>
</script>
</body>

</html><?php /**PATH E:\xampp_workspace\htdocs\spatie-Permission-Role\resources\views/layouts/app.blade.php ENDPATH**/ ?>