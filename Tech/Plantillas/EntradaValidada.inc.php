<div class="form-group">
    <label for="titulo"><h2>Domicilio.</h2></label>
	<input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Escribe aqui tu domicilio completo..."
		<?php $validador -> mostrar_domicilio(); ?> >
	<?php $validador -> mostrar_error_domicilio(); ?>
</div>

<div class="form-group">
	<label for="contenido"><h2>Descripción.</h2></label>
	<textarea class="form-control" rows="5" id="descripcion" name="descripcion" placeholder="Escribe aquí el problema del aparato..."
		><?php $validador -> mostrar_descripcion(); ?></textarea>
	<?php $validador -> mostrar_error_descripcion(); ?>
</div>

<br>
<button type="submit" class="btn btn-primary" name="guardar">Guardar</button>