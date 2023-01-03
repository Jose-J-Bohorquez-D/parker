<div class="container-fluid">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-6 text-center">
				<br><br>
				<h1 class="text-center">ingresa mail para test</h1><br><br>
				<form method="post">
					<label>Asunto</label>
					<input type="text" name="titulo" class="form-control"><br>
					<label>Email</label>
					<input type="email" name="correo" class="form-control"><br>
					<label>Cuerpo Del Mensaje</label>
					<textarea name="cuerpoMensaje" class="form-control"></textarea><br>
					<button type="submit" class="btn btn-primary">Enviar Mail</button>					
				</form>
			</div>
		</div>
	</div>
</div>
<?php $rta=new MvcControlador; $rta->enviar1mailCtlr(); ?>