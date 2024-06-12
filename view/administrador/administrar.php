<?php
include("../../controller/administrador_session.php");
include("../../conexion/conexion.php");
include("../../model/model_administrar.php");
include("../layout/header_sesion.php");
?>

<br>
<h3 class="white-text center">Administración</h3>
<div class="row">
    <div class="col s12" style="padding: 0;">
      <ul class="tabs">
        <li class="tab col s4"><a class="active" href="#test1">Peliculas</a></li>
        
        <li class="tab col s4"><a href="#test3">Comentarios</a></li>
      </ul>
    </div>

    <div id="test1" class="col s12" style="padding: 0;">
    	<div class="white">
			<table class="highlight">
				<thead>
       				<tr>
			            <th>ID</th>
			            <th>Nombre</th>
			            <th>Genero</th>
			            <th>Descripcion</th>
				        <th>Trailer</th>
			            <th>Pelicula</th>
			            <th>Opciones 🛠️</th>
       				</tr>
   				</thead>

			<?php foreach($datos as $items){ ?>

		        <tbody>
		          <tr>
		            <td><?=$items['id'];?></td>
		            <td><?=$items['nombre'];?></td>
		            <td><?=$items['genero'];?></td>
		            <td><?=$items['descripcion'];?></td>
		            <td><?=$items['trailer'];?></td>
		            <td><?=$items['link_pelicula'];?></td>
		            <td class="center">
		          		<a href="modificar.php?id=<?=$items['id']?>" class="btn yellow darken-3 white-text">Editar</a>
		          		<br>
		            	<a href="../../controller/eliminar.php?id=<?=$items['id'];?>" onclick="return eliminar(<?=$items['id'];?>);" class="btn red darken-3 white-text">Eliminar</a>
		            </td>
		          </tr>
		        </tbody>
			<?php } ?>

			</table>
		</div>
    </div>

    

    <div id="test3" class="col s12" style="padding: 0;">
		<div class="white">
			<table class="highlight">
				<thead>
       				<tr>
			            <th>ID</th>
			            <th>Pelicula ID</th>
			            <th>Comentario</th>
			            <th>Fecha</th>
			            <th>Nombre</th>
			            <th>Correo</th>
			            <th>Opciones ❌</th>
       				</tr>
   				</thead>

			<?php foreach($datos3 as $items){ ?>

		        <tbody>
		          <tr>
		            <td><?=$items['id'];?></td>
		            <td><?=$items['pelicula_id'];?></td>
		            <td><?=$items['comentario'];?></td>
		            <td><?=$items['fecha'];?></td>
		            <td><?=$items['nombre'];?></td>
		            <td><?=$items['correo'];?></td>
		            <td class="center"><a href="../../controller/eliminar_comentario.php?id=<?=$items['id'];?>" onclick="return eliminar(<?=$items['id'];?>);" class="btn red darken-3 white-text">Eliminar</a></td>
		          </tr>
		        </tbody>
			<?php } ?>

			</table>
		</div>
    </div>
</div>


<script type="text/javascript">


	function eliminar(id){
		if(confirm("Eliminar?") == true){
			return true;
		}else{
			return false;
		}
	}



	$(document).ready(function(){
    $('.tabs').tabs();
  });     
</script>

<?php
include("layout/bottom_floating.php");
include("../layout/footer_sesion.php");
?>