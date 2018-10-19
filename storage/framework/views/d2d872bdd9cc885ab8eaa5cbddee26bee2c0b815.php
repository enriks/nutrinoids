<!DOCTYPE HTML>

<html>
	<head>
		<title>El blog de las nuevas Ciencias Sociales</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>" />
	</head>
	<body class="is-preload">
	 <!-- Header -->
	
            <header id="header">
				<a class="logo" href="index.html">Cuestionarios Nutrix</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>
		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
				     <?php if(auth()->guard()->guest()): ?>
                            <li >
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Autenticarse')); ?></a>
                            </li>
                            <li >
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Darse de  alta')); ?></a>
                            </li>
                        <?php else: ?>
                        	
                            
                            <li >
                                <a id="navbarDropdown"  href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->codigo); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								<a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<h1>Un cuestionario para mejorar su salud</h1>
					<p>realizado por los mejores especialistas</p><br />
					
				</div>
				
			</section>
			<!-- Highlights -->
		<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Las ideas que nos impulsan</h2>
						<p>Los científicos actuales estamos avocados a emprender la actualización de una nueva perspectiva.......</p>
					</header>
					<div class="highlights">
						<?php $__currentLoopData = $cuestionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cuestionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<section>
							<div class="content">
								<header>
									<a href="<?php echo e(route('sujetos.create')); ?>"><span class="label">
									<?php echo e($cuestionario->nombreCuestionario); ?></span></a>
									<div class="image">
										<img src="#" alt="" />
									</div>
								
									<h3></h3>
								</header>
								<p></p>
							</div>
                        </section>
                       
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</div>
				</div>
			</section>
			
		

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>A las puertas del nuevo siglo</h3>
							<p>El mundo científico ha de cambiar radicalmente. Las fronteras de las disciplinas han de recomponerse para llegar a consolidar una nueva noción de lo científico.</p>
						</section>
						<section>
							<h4>Nuevas publicaciones</h4>
							<ul class="alt">
								<li><a href="#">Investigación Acción Participativa</a></li>
								<li><a href="#">Etnografía</a></li>
								<li><a href="#">Las nuevas armas del futuro</a></li>
								<li><a href="#">Conjuntos aproximados</a></li>
							</ul>
						</section>
						<section>
							<h4>Redes Sociales</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								<li><a href="#"><i class="icon fa-github">&nbsp;</i>Github</a></li>
							</ul>
						</section>
					</div>
					
				</div>
			</footer>
			<?php echo e($cuestionarios->render()); ?>

		<!-- Scripts -->
		<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
			<script src="<?php echo e(asset('assets/js/browser.min.js')); ?>"></script>
			<script src="<?php echo e(asset('assets/js/breakpoints.min.js')); ?>"></script>
			<script src="<?php echo e(asset('assets/js/util.js')); ?>"></script>
			<script src="<?php echo e(asset('assets/js/main.js')); ?>"></script>

	</body>
</html>