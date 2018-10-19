<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../resources/assets/css/bootstrap-select.css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

</head>

<body>
    <div id="app">

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        
                            <?php if(auth()->guard()->guest()): ?>
                        <li>
                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Autenticarse')); ?></a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Darse de alta')); ?></a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                        <a id="nav-item nav-link active" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                            <?php echo e(Auth::user()->codigo); ?><span class="sr-only">(current)</span>

                        </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                        <?php endif; ?>
                    </div>
                </div>
            </nav>
        </header>
        <main class="py-4">
            <?php if(session('info')): ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            <?php echo e(session('info')); ?>

                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if(count($errors)): ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script>
        $("#select").change(function() {
            $("select option:selected").each(function() {
                str = $('#select option:selected').val();
                var url = '<?php echo e(route("lacteos.edit", "-1")); ?>';
                console.log(url);
                url = url.replace('lacteos', $("#select").attr("name"));
                url = url.replace('-1', str);
                console.log(url);
                $("#editar").attr("href", "" + url);
            });
        }).trigger("change");

    </script>
    <script>
        $("#select").change(function() {
            $("select option:selected").each(function() {
                str = $('#select option:selected').val();
                var url = '<?php echo e(route("lacteos.index", "1")); ?>';
                var a = str;
                console.log(url);
                console.log(a);
                url = url.replace('lacteos', str);
                console.log(url);
                $("#visitar").attr("href", "" + url);
            });
        }).trigger("change");

    </script>
    <script src="../resources/assets/js/bootstrap-select.js"></script>
    <?php echo $__env->yieldContent('js'); ?>

</body>

</html>
