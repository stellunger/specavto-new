<!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title>Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet" media="screen">
	
  </head>
  <body>
    <!-- ****** Header ****** -->
	<header class="b-body-header">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="b-logo"><a href="#">Спецавто<span class="b-sep">-</span><span class="b-txt">торг.</span><small>рф</small></a></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="b-top-contact">
						<span class="b-tel"><span>+7 (831)</span> 212-37-59</span>
						<div class="b-order-link-container">
							<div class="dropdown">
						      <a href="#" id="dLabel" role="button" data-toggle="dropdown" data-target="#" class="b-order-link">Заказать обратный звонок<b></b></a>

							  <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
								<li>
									<form action="" class="order-form">
									<b></b>
							<div class="form-group">
									<input type="text" class="form-control" placeholder="Имя">
							</div>
							<div class="form-group">
									<input type="text" class="form-control" placeholder="Фамилия">
							</div>
							<div class="form-group">
									<input type="text" class="form-control" placeholder="Компания">
							</div>
							<div class="form-group">
									<input type="text" class="form-control" placeholder="Телефон">
							</div>
							
							<div class="form-group">
									<textarea class="form-control" placeholder="Описание заявки"></textarea>
							</div>
							<div class="b-button">
									<button type="submit" class="b-link1">Отправить</button>
							</div>
						</form>
								</li>
							  </ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="b-menu">
				<nav class="navbar navbar-default navbar-static-top" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						  <span class="sr-only">Toggle navigation</span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
						<div class="b-title-menu-xs visible-xs">Меню</div>
					</div>
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#"><span>Главная</span></a></li>
							<li><a href="<?php echo base_url(); ?>agp"><span>Автовышки</span></a></li>
							<li><a href="<?php echo base_url(); ?>cranes"><span>Краны-манипуляторы</span></a></li>
							<li><a href="<?php echo base_url(); ?>wreckers"><span>Эвакуаторы</span></a></li>							
							<li><a href="<?php echo base_url(); ?>about"><span>О компании</span></a></li>
							<li><a href="<?php echo base_url(); ?>contacts"><span>Контакты</span></a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>