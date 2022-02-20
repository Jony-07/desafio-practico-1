<!-- Nueva materia -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Nuevo producto</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="http://localhost/desafio-practico-1/?c=admin&a=Agregar" enctype="multipart/form-data">
				<?php require 'procesar-datos.php'?>
                    <?php
                    if(count($errores)>0&&isset($_POST['add']))
                    {
                        echo "<div> <ul>";
                        foreach($errores as $error)
                        {
                          echo "<li>$error</li>";
                        }
                        echo "</ul></div>";

                    }
                    ?>
				<div class="form-group row">
					<div class="col-md-3">
						<label class="control-label" for="codigo">Codigo:</label>
					</div>
					<div class="col-md-9">
						<input type="text" class="form-control" name="codigo" id="codigo"  required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-3">
						<label class="control-label" for="nombre">Nombre:</label>
					</div>
					<div class="col-md-9">
						<input type="text" class="form-control" name="nombre" id="nombre"  required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-3">
						<label class="control-label" for="desc" >Descripcion:</label>
					</div>
					<div class="col-md-9">
						<textarea name="desc" id="desc" cols="30" rows="1"></textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" for="img" >Img:</label>
					</div>
					<div class="col-sm-9">
						<input type="file" step="0.1" class="form-control" name="img" id="img" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" for="ctg">Categoria:</label>
					</div>
					<div class="col-sm-9">
						<select name="ctg" id="ctg" class="form-control" required>
							<option value=""></option>
							<option value="Promocional">Promocional</option>
							<option value="Textil">Textil</option>
						</select>

					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" for="price" >Precio:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" step="0.1" class="form-control" name="price" id="price"  required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-3">
						<label class="control-label" for="existencias" >Existencias:</label>
					</div>
					<div class="col-sm-9">
						<input type="text" step="0.1" class="form-control" name="existencias" id="existencias"  required>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="add" id="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Agregar</button>
				</div>
			</form>
            
 
        </div>
    </div>
</div>