<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="KevinCalaSanchez at kevincala.com">
    <meta name="generator" content="HardCoded">

    <title>Meeting Visitor Information</title>

    <!-- Bootstrap Core /css -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/interi.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond./js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond./js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background: #DFDFFF;color:#000000" >
    <nav>
    	<div>
    		<a class="navbar-brand" href="http://www.kevincala.com" target="_blank">Request More Info</a>	
    	</div>
    </nav>

    <!-- Page Content -->
    <div style="clear:both" class="container texts">
		
<?php
$enlace = mysqli_connect('192.168.140.1', "database", "user", "password");
	if($_POST){
		if (mysqli_connect_errno())
		{
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	mysqli_query($enlace, 'INSERT INTO empresas VALUES(null,"'.$_POST['empresa_nombre'].'","'.$_POST['empresa_direccion'].'","'.$_POST['empresa_poblacion'].'","'.$_POST['empresa_telefono'].'","'.$_POST['empresa_web'].'","'.$_POST['empresa_cpostal'].'","'.$_POST['persona_nombre'].'","'.$_POST['persona_apellidos'].'","'.$_POST['persona_cargo'].'","'.$_POST['persona_comentarios'].'","'.$_POST['persona_email'].'")');
	echo 'Thanks for add your information. We will contact you as soon as possible.<br/><br/><br/>';
	}
?>
	To contact you, we need the next data.
	<form action="" method="post" id="form">
		<div id="formulario">
			<div>
				Company Name<span class="reddot">*</span>
				<br/><input type="text" name="empresa_nombre" />
			</div>
			<div>
				Your Name<span class="reddot">*</span>
				<br/><input type="text" name="persona_nombre" />
			</div>
			<div>
				Your Surname<span class="reddot">*</span>
				<br/><input type="text" name="persona_apellidos" />
			</div>
			<div>
				Company Position
				<br/><input type="text" name="persona_cargo" />
			</div>
			<div>
				Address
				<br/><input type="text" name="empresa_direccion" />
			</div>
			<div>
				Poblaci&oacute;n<span class="reddot">*</span>
				<br/><input type="text" name="empresa_poblacion" />
			</div>
			<div>
				Postal Code
				<br/><input type="text" name="empresa_cpostal" />
			</div>
			<div>
				Mail<span class="reddot">*</span>
				<br/><input type="email" name="persona_email" />
			</div>
			<div>
				Tel&eacute;fono<span class="reddot">*</span>
				<br/><input type="tel" name="empresa_telefono" />
			</div>
			<div>
				Company WWW
				<br/><input type="url" name="empresa_web" />
			</div>
			<div class="clearLines">
				Other intertesting information
				<br/><textarea class="txtarea" size="3" name="persona_comentarios" ></textarea>
			</div>
			<div class="clearLines">
				The fields marked with a <span class="reddot">*</span> are required fields to contact correctly with you.
			</div>
		</div>
    </div>
		
	<br/>
    <!-- /.container -->
	<footer>
		<div>
			<button onclick="document.getElementById('form').submit()" type="button" class="btn btn-primary" style="width:80%;margin:auto">Send my Information</button><br/>
		</div>
	</footer>

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>