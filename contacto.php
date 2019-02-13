	<?php include('inc/cabezal.php');  ?>
	<section class="holder">

		<div class="columna left">
			<h2>Contacto rápido</h2><a name="contacto"></a> 
			<form action="procesador_formulario.php" method="post" class="formulario">
				<p>
					<label for="">Nombre</label>
					<input type="text" name="nombre" />
				</p>
				<p>
					<label for="">Email</label>
					<input type="text" name="email">
				</p>
				<p>
					<label for="">Teléfono</label>
					<input type="text" name="tel">
				</p>
				<p>
					<label for="">Comentario</label>
					<textarea name="comentario"></textarea>
				</p>
				<p class="acciones"><input type="submit" value="Enviar"></p>
				
			</form>

			<?php if(isset($_GET['envio']) && $_GET['envio'] == 'ok'){ ?>
				<div>El mensaje se envio correctamente</div>
			<?php } ?>
		</div>


		<div class="columna right">
			<h2>Otras Vías de contacto</h2>
			<p>Tambien se pueden contactarse con nostros usando los siguientes medios:</p>
			<ul>
				<li>Teléfono: 4785 -8965</li>
				<li>FB:</li>
				<li>Twitter:</li>
				<li>Skype:</li>
			</ul>
			
		</div>
		
	</section>
	<?php include('inc/pie.php');  ?>
