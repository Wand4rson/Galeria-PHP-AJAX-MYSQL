<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Galeria - MVC Ajax</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/album.css" type="text/css" />
		<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/style.css" type="text/css" />
	</head>
	<body>
		
		<!-- Menu -->
		<header>
		<div class="collapse bg-dark" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
					<h4 class="text-white">Sobre</h4>
					<p class="text-muted">Galeria de Fotos Estudos - Editando com AJAX</p>
				</div>				
				</div>
			</div>
		</div>
		<div class="navbar navbar-dark bg-dark shadow-sm">
			<div class="container d-flex justify-content-between">
			<a href="<?php echo BASE_URL;?>" class="navbar-brand d-flex align-items-center">
				<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2" viewBox="0 0 24 24" focusable="false"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
				<strong>Album de Fotografia</strong>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			</div>
		</div>
		</header>
		<!-- End Menu -->


			<!-- Content -->
			<?php
				$this->loadViewInTemplate($viewName, $viewData);
        	?>
			<!-- End Content -->
			

		<!-- Footer -->
		<footer class="text-muted">
		<div class="container">
			<p class="float-right">
			<a href="<?php echo BASE_URL;?>">Início</a>
			</p>
			<p>Album de Fotografia &copy; Demos.</p>			
		</div>
		</footer>
		<!-- End Footer -->

		
		<script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>';</script>		
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/jquery-3.4.1.slim.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/bootstrap.bundle.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/custom-file-input.min.js"></script>
		<script type="text/javascript" src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
	</body>
</html>