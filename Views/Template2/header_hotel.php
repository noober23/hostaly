<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/icons/favicon.png"/>
        
        <title>Residencial Tajibos <?php  echo $data['page_tag']; ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?=media();?>/Templates2/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?=media();?>/Templates2/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Custom styles for this template -->
        <link href="<?=media();?>/Templates2/css/style.css" rel="stylesheet">
        <link href="<?=media();?>/Templates2/fonts/antonio-exotic/stylesheet.css" rel="stylesheet">
        <link rel="stylesheet" href="<?=media();?>/Templates2/css/lightbox.min.css">
        <link href="<?=media();?>/Templates2/css/responsive.css" rel="stylesheet">
        <script src="<?=media();?>/Templates2/js/jquery.min.js" type="text/javascript"></script>
        <script src="<?=media();?>/Templates2/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?=media();?>/Templates2/js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
        
        <script src="<?=media();?>/Templates2/js/custom.js" type="text/javascript"></script>
    </head>
    <header class="header-container">
            <div class="container">
                    <div class="top-row">
                        <div class="row">
                            <div class="col-md-2 col-sm-6 col-xs-6">
                                <div id="logo">
                                    <!--<a href="index.html"><img src="images/logo.png" alt="logo"></a>-->
                                    <a href="index.html"><span>Residencial</span>home</a>
                                </div>                       
                            </div>
                            <div class="col-sm-6 visible-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">Reservar Ahora</button></div>
                            </div>
                            <div class="col-md-8 col-sm-12 col-xs-12 remove-padd">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header page-scroll">
                                        <button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>

                                    </div>
                                    <div class="collapse navigation navbar-collapse navbar-ex1-collapse remove-space">
                                        <ul class="list-unstyled nav1 cl-effect-10">
                                            <li><a  data-hover="Home" class="active"><span>Home</span></a></li>
                                            <li><a data-hover="Acerca"  href="<?=base_url(); ?>/acerca"><span>Acerca</span></a></li>
                                            <li><a data-hover="Habitaciones"  href="<?=base_url(); ?>/residencial/habitacion"><span>Habitaciones</span></a></li>
                                            <li><a data-hover="Galeria"  href="gallery.html"><span>galeria</span></a></li>
                                            <li><a data-hover="Registro" href="<?=base_url(); ?>/residencial/registro"><span>Registro</span></a></li>
                                        
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                            <div class="col-md-2  col-sm-4 col-xs-12 hidden-sm">
                                <div class="text-right"><button type="button" class="book-now-btn">Reservar Ya</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="menu-mobile">
			<ul class="topbar-mobile">
				<li>
					<div class="left-top-bar">
						<?php if(isset($_SESSION['login'])){ ?>
						Bienvenido: <?= $_SESSION['userData']['nombres'].' '.$_SESSION['userData']['apellidos'] ?>
						<?php } ?>
					</div>
				</li>

				<li>
					<div class="right-top-bar flex-w h-full">
						<a href="#" class="flex-c-m p-lr-10 trans-04" data-toggle="modal" data-target="#modalAyuda">
							Help & FAQs
						</a>
						<?php 
							if(isset($_SESSION['login'])){
						?>
						<a href="<?= base_url() ?>/dashboard" class="flex-c-m trans-04 p-lr-25">
							Mi cuenta
						</a>
						<?php } 
							if(isset($_SESSION['login'])){
						?>
						<a href="<?= base_url() ?>/logout" class="flex-c-m trans-04 p-lr-25">
							Salir
						</a>
						<?php }else{ ?>
						<a href="<?= base_url() ?>/login" class="flex-c-m trans-04 p-lr-25">
							Iniciar Sesión
						</a>
						<?php } ?>
					</div>
				</li>
			</ul>
            </header>