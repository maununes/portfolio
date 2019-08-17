<?php

if(isset($_POST['img'])){
	$uploaddir = 'img/';
	$uploadfile = $uploaddir . basename($_POST['img']);

	echo '<pre>';
	if ($_FILES['file']['type'] == 'image/jpeg' && "image/jpeg" && move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
		echo "Arquivo válido e enviado com sucesso.\n";
	} else {
		echo "Arquivo não enviado ou formato inválido!\n";
	}

	print "</pre>";
}




?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Empresa - Portfólio</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet' type='text/css'>

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
		
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Menu</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Empresa</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<form class="navbar-form navbar-right" role="form">
				<a href="index.html" class="btn btn-primary">Sair</a>
			</form>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

    <div class="container">
		<h2 style="color:black">Upload de imagem</h2>
		
		<div class="row">
			<div class="col-md-4">
				<div class="alert alert-warning" role="alert">
				  São permitidas apenas imagens do tipo: <b>.jpg</b>
				</div>
				
				<form  method="post" enctype="multipart/form-data">
					<b style="color:black">Selecione a imagem:</b>
					<select name="img" class="form-control">
						<option value="1.jpg">Imagem 1</option>
						<option value="2.jpg">Imagem 2</option>
						<option value="3.jpg">Imagem 3</option>
						<option value="4.jpg">Imagem 4</option>
						<option value="5.jpg">Imagem 5</option>
						<option value="6.jpg">Imagem 6</option>
						<option value="7.jpg">Imagem 7</option>
					</select>
					<br>
					<b style="color:black">Selecione o arquivo:</b>
					<input type="file" name="file" id="fileToUpload">
					<br>
					<button class="btn btn-primary" type="submit">Enviar</button>
				</form>
			</div>
		</div>
    

      <hr>

      <footer>
        <p>&copy; Empresa - 2019</p>
      </footer>
    </div> <!-- /container -->        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
		<script src="js/animation.js"></script>
    </body>
</html>
