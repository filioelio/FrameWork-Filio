<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Framework MVC</title>
	<?=$helper->css('ed-grid')?>
	<?=$helper->css('header')?>
	<?=$helper->css('Formulario')?>
</head>
<body>
	<?=$this->view('Template/Header')?>
	<?=$this->view('Template/Nav')?>
	<div class="grupo centrar-contenido">
		<form id="formulario">
			<div class="form_grupo">
		    	<span class="form_titulo">Iniciar sesion</span>
		  	</div>
			<div class="form_grupo">
		    	<span class="form_exito"><?=$helper->FormatDateTime($fecha)?></span>
		  	</div>
			<div class="form_grupo">
		    	<input type="email" class="form-control" placeholder="Email">
		  	</div>
		  	<div class="form_grupo">
		    	<input type="password" class="form-control" placeholder="Password">
		  	</div>
		  	<div class="form_grupo">
		    	<input type="submit" class="form-boton" value="Iniciar seccion">
		  	</div>		  	
		</form>
		
	</div>	
	<?=$this->view('Template/Footer')?>
</body>
</html>