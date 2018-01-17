
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<title>Câmara de <?php echo $entidade ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	
</head>
<body class="home page">

<div class="boxed-container">
	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-6">
					<div class="top__left">AUDITADO PELA IOM - Imprensa Oficial dos Municípios.</div>
				</div>
				<div class="col-xs-12 col-md-6">
					<div class="top__right">
						<ul id="menu-top-menu" class="navigation--top">
							<li class="menu-item-has-children"><a href="extras.html">Serviços</a>
								<ul class="sub-menu">
									<li><a href="shortcodes.html">Transparência</a></li>
									<li><a href="tables.html">Gestão de dados</a></li>
								
								</ul>
							</li>
							
							<li><a target="_blank" href="">Sobre a IOM</a></li>
						</ul>				
					</div>
				</div>
			</div>
		</div>
	</div>
	<header class="header">
		<div class="container">
			<div class="logo">
				<a href="<?=  base_url()?>camaras/condeuba">
					<img src="<?=  base_url()?>assets/images/logo.png" alt="BuildPress" class="img-responsive"/>
				</a>
			</div>
			<div class="header-widgets  header-widgets-desktop">
				<div class="widget  widget-icon-box">	
					<div class="icon-box">
						<i class="fa  fa-phone  fa-3x"></i>
						<div class="icon-box__text">
							<h1 class="icon-box__title">CÂMARA MUNICIPAL DE CONDEÚBA</h1>
							
						</div>
					</div>
				</div>
				
				<div class="widget  widget-social-icons">	
					<a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-facebook"></i></a>
					<a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-twitter"></i></a>
					<a class="social-icons__link" href="#" target="_blank"><i class="fa  fa-youtube"></i></a>
				</div>	
			</div>
			<!-- Toggle Button for Mobile Navigation -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#buildpress-navbar-collapse">
				<span class="navbar-toggle__text">MENU</span>
				<span class="navbar-toggle__icon-bar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</span>
			</button>
		</div>
		<div class="sticky-offset js-sticky-offset"></div>
		<div class="container">
			<div class="navigation">
				<div class="collapse  navbar-collapse" id="buildpress-navbar-collapse">
					<ul id="menu-main-menu" class="navigation--main">
						<li class="current-menu-item"><a href="<?=  base_url()?>">HOME</a></li>
						<li><a href="<?=  base_url()?>portal/noticias">NOTÍCIAS</a></li>
						<li><a href="#">VEREADORES</a></li>

						
						<li class="menu-item-has-children">
							<a href="#">UTILIDADES</a>
							<ul class="sub-menu">
								<li><a href="#">A CIDADE</a></li>
								<li><a href="<?=  base_url()?>portal/tvcamara">TV CAMARA</a></li>
								<li><a href="<?=  base_url()?>portal/galerias">GALERIA</a></li>
								
							</ul>
						</li>
                                                <li><a href="<?=  base_url()?>portal/publicacoes">PUBLICAÇÕES</a></li>
						<li><a href="<?=  base_url()?>portal/contato">CONTATO</a></li>
			
					</ul>	
				</div>
			</div>
		</div>