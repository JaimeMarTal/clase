<div class="container">

<h1>Registro de nuevo usuario</h1>

<form action="<?=base_url()?>hdu/anonymous/registrarPost" method="post">
	<label for="idp">Nombre</label>
	<input id="idp" type="text" name="nombre" required="required"/>
	<br/>
	
	<label for="id-pwd">Contraseña</label>
	<input id="id-pwd" type="password" name="pwd" required="required"/>
	<br/>

	<br/>
	<input type="submit"/>
</form>

</div>