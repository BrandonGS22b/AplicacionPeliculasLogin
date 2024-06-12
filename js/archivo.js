/*ENVIAR DATOS EN JSON A LOGIN.PHP*/

jQuery(document).on('submit','#inicio_de_sesion', function(event) {
	event.preventDefault();

	jQuery.ajax({
		url: '../conexion/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend() {
			$('.boton_iniciar_sesion').val('...');
		}
	})
	.done(respuesta => {
		console.log(respuesta);
		if(!respuesta.error){
				if(respuesta.tipo == 'admin'){
					location.href = 'administrador/peliculas_session.php';
					
				}else if(respuesta.tipo == 'user'){
					location.href = 'usuario/peliculas_session.php';
				}
		}else{
			setTimeout(() => {
			},3000);
			$('.boton_iniciar_sesion').val('INICIAR SESION 🗝️');
			document.getElementById("error").innerHTML= "Datos erróneos :(";
			$("#contrasena_iniciar_sesion").val("")
		}
	})
	.fail(resp => {
		console.log(resp.responseText);
	})
	.always(() => {
		console.log("complete");
	});
});

/*VALIDANDO REGISTROS DE USUARIO*/

function registrar(){
    const nombre = $("#nombre_registrate").val();
    const correo = $("#correo_registrate").val();
    const contrasena = $("#contrasena_registrate").val();
    const contrasena_confirmar = $("#contrasena_registrate_confirmar").val();

    let nombre_good ="";
    let correo_good ="";
    let contrasena_good ="";

    if(nombre == ""){
    document.getElementById("error_nombre").innerHTML= "Nombre vacio";
	}else{
    document.getElementById("error_nombre").innerHTML= "";
    nombre_good = nombre;
	}
	
	if(correo == ""){
    document.getElementById("error_correo").innerHTML= "Correo vacio";
	}else{
    document.getElementById("error_correo").innerHTML= "";
    correo_good = correo;
	}
    
    if(contrasena == ""){
    document.getElementById("error_contrasena").innerHTML= "Contraseña vacio";
	}else{
    document.getElementById("error_contrasena").innerHTML= "";
	if(contrasena != contrasena_confirmar){
    document.getElementById("error_confirmacion").innerHTML= "Las contraseñas no coinciden :(";
	}else if(contrasena == contrasena_confirmar){
    document.getElementById("error_confirmacion").innerHTML= "";
	contrasena_good = contrasena;
	}
	}
	//ENVIANDO DATOS A REGISTRAR_USUARIO.PHP
	if (nombre_good != "" && correo_good != "" && contrasena_good != ""){
		window.location = `../conexion/registrar_usuario.php?nom=${nombre_good}&correoo=${correo_good}&contra=${contrasena_good}`;
	}
}
