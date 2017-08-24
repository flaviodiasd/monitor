<?php
error_reporting(E_ALL ^ E_NOTICE);
  require_once("mostra-alerta.php"); ?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<title>Monitor</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/loja.css" rel="stylesheet">
	<link data-turbolinks-track="true" href="assets/application-66e876c1e775e36f21300f957d1d6e28.css" media="all" rel="stylesheet" />
    <script data-turbolinks-track="true" src="assets/application-e920e3e9dba09613f64ccb4ab7e55f09.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	<script src="js/raphael-2.1.4.min.js"></script>
	<script src="js/justgage.js"></script>
</head>
<body>
	
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Alternar navegação</span>
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
        		</button>
				<b><a class="navbar-brand" href="index.php">Monitor</a></b>
			</div>
			 <div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="dashboard.php">Dashboard</a></li>
				</ul>
				<ul class="nav navbar-nav">
					<li><a href="lista-mqtt.php">Configurações</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
           			 <li><a href="index.php">Login</a></li>
          		</ul>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="principal">
		    <?php  mostraAlerta("success"); ?>
		    <?php mostraAlerta("danger"); ?>
			