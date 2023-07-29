let userAll = [], nombreAll = [], ipAll = [];

window.addEventListener('load', function () {
	console.log('La página ha terminado de cargarse!!');

	$.ajax({
		url: 'http://172.29.60.126/SIT/apiSIT/api/concentrado/read.php',
		type: 'GET',
		async: false,
		dataType: 'text',
		success: function (response) {
			var parsedJson = JSON.parse(response);

			for (let index = 0; index < parsedJson.length; index++) {
				ipAll.push(parsedJson[index].IP);
			}
		},
		error: function (error) {
			console.log("No es posible completar la operación, intentarlo mas tarde.");
		}
	});
});

function cambiarBotones(opcion) {
	switch (opcion) {
		case 1: /*Inicio*/

			var item = document.getElementById("menuCompleto");
			if (!item.classList.contains('active')) {
				document.getElementById("menuCompleto").classList.toggle("active");
			}

			/* Usuario */
			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("menuUsuarios").classList.remove("active");
			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";
			document.getElementById("mdlActualizarUsuario").style.display = "none";
			document.getElementById("mdlAgregarUsuario").style.display = "none";
			document.getElementById("agregarUsuario").classList.remove("active");

			/* Equipo */
			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("menuEquipos").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("menuIPs").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			/*Telefono*/
			document.getElementById("menuTelefonos").classList.remove("active");
			document.getElementById("buscarTelefono").classList.remove("active");
			document.getElementById("mdlBuscarTelefono").style.display = "none";

			break;

		case 2: /*Usuario*/

			document.getElementById("menuCompleto").classList.remove("active");

			/* Buscar Usuario */
			var item = document.getElementById("menuUsuarios");
			if (!item.classList.contains('active')) {
				document.getElementById("menuUsuarios").classList.toggle("active");
			}
			document.getElementById("buscarUsuario").classList.toggle("active");
			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "block";
			document.getElementById("mdlAgregarUsuario").style.display = "none";
			document.getElementById("agregarUsuario").classList.remove("active");

			/*Actualizar Usuario*/
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			/* Equipo */
			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("menuEquipos").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("menuIPs").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			/*Telefono*/
			document.getElementById("mdlBuscarTelefono").style.display = "none";
			document.getElementById("menuTelefonos").classList.remove("active");
			document.getElementById("buscarTelefono").classList.remove("active");

			break;

		case 3: /*Equipo*/
			document.getElementById("menuCompleto").classList.remove("active");

			/* Usuario */
			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("menuUsuarios").classList.remove("active");
			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";
			document.getElementById("mdlAgregarUsuario").style.display = "none";
			document.getElementById("agregarUsuario").classList.remove("active");

			/* Equipo */
			document.getElementById("buscarEquipo").classList.toggle("active");
			document.getElementById("menuEquipos").classList.toggle("active");
			document.getElementById("mdlBuscarEquipo").style.display = "block";

			/* IP */
			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("menuIPs").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			/*Actualizar Usuario*/
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			/*Buscar Telefono*/
			document.getElementById("mdlBuscarTelefono").style.display = "none";
			document.getElementById("menuTelefonos").classList.remove("active");
			document.getElementById("buscarTelefono").classList.remove("active");

			break;

		case 4: /*IP*/
			document.getElementById("menuCompleto").classList.remove("active");

			/* Usuario */
			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("menuUsuarios").classList.remove("active");
			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";
			document.getElementById("mdlAgregarUsuario").style.display = "none";
			document.getElementById("agregarUsuario").classList.remove("active");

			/* Equipo */
			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("menuEquipos").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("buscarIP").classList.toggle("active");
			document.getElementById("menuIPs").classList.toggle("active");
			document.getElementById("mdlBuscarIP").style.display = "block";
			document.getElementById("cardRed").style.display = "none";
			document.getElementById("cardUsuario").style.display = "none";
			limpiarIP();

			/*Actualizar Usuario*/
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			/*Buscar Telefono*/
			document.getElementById("mdlBuscarTelefono").style.display = "none";
			document.getElementById("menuTelefonos").classList.remove("active");
			document.getElementById("buscarTelefono").classList.remove("active");

			break;

		case 5: /*Actualizar Usuario*/
			document.getElementById("menuCompleto").classList.remove("active");

			/* Usuario */
			var item = document.getElementById("menuUsuarios");
			if (!item.classList.contains('active')) {
				document.getElementById("menuUsuarios").classList.toggle("active");
			}
			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";
			document.getElementById("mdlAgregarUsuario").style.display = "none";
			document.getElementById("agregarUsuario").classList.remove("active");

			/* Equipo */
			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("menuEquipos").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("menuIPs").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			/*Actualizar Usuario*/
			document.getElementById("mdlActualizarUsuario").style.display = "block";
			document.getElementById("actualizarUsuario").classList.toggle("active");

			/*Buscar Telefono*/
			document.getElementById("mdlBuscarTelefono").style.display = "none";
			document.getElementById("menuTelefonos").classList.remove("active");
			document.getElementById("buscarTelefono").classList.remove("active");

			break;

		case 6: /*Buscar y Actualizar Telefono*/
			document.getElementById("menuCompleto").classList.remove("active");

			/* Usuario */
			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("menuUsuarios").classList.remove("active");
			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";
			document.getElementById("mdlAgregarUsuario").style.display = "none";
			document.getElementById("agregarUsuario").classList.remove("active");

			/* Equipo */
			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("menuEquipos").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("menuIPs").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			/*Actualizar Usuario*/
			document.getElementById("mdlActualizarUsuario").style.display = "none";
			document.getElementById("actualizarUsuario").classList.remove("active");

			/*Buscar Telefono*/
			document.getElementById("mdlBuscarTelefono").style.display = "block";
			document.getElementById("menuTelefonos").classList.toggle("active");
			document.getElementById("buscarTelefono").classList.toggle("active");
			break;

		case 7: /*Usuario*/

			document.getElementById("menuCompleto").classList.remove("active");

			/*USUARIOS*/
			var item = document.getElementById("menuUsuarios");
			if (!item.classList.contains('active')) {
				document.getElementById("menuUsuarios").classList.toggle("active");
			}

			/* Buscar Usuario */
			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";

			/*Agregar Ususario*/
			document.getElementById("mdlAgregarUsuario").style.display = "block";
			document.getElementById("agregarUsuario").classList.toggle("active");

			/*Actualizar Usuario*/
			document.getElementById("mdlActualizarUsuario").style.display = "none";
			document.getElementById("actualizarUsuario").classList.remove("active");

			/* Equipo */
			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("menuEquipos").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("menuIPs").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			/*Telefono*/
			document.getElementById("mdlBuscarTelefono").style.display = "none";
			document.getElementById("menuTelefonos").classList.remove("active");
			document.getElementById("buscarTelefono").classList.remove("active");

			break;

		default:
			break;
	}
}

function mostrarTodoTelefono(idtelefono) {
	$.ajax({
		type: "POST",
		url: "http://172.29.60.126/SIT/apiSIT/api/telefono/single_read.php?idconcentradoTelefonos=" + idtelefono,
		async: false,
		success: function (response) {

			document.getElementById("nombreTituloTel").innerHTML = response.ipTelefono;
			document.getElementById("extTel").value = response.Extension;
			document.getElementById("modeloTel").value = response.Modelo;
			document.getElementById("SerieTel").value = response.Numero_Serie;
			document.getElementById("userTel").value = response.Nombre_persona;
			document.getElementById("idconcentradoTelefonos").value = response.idconcentradoTelefonos;
			document.getElementById("comTel").value = response.Comentarios;

			var personaBuscar = response.Nombre_persona;
			var selectUser = document.getElementById('userTel');
			for (var i = 1; i < selectUser.length; i++) {
				if (selectUser.options[i].text == personaBuscar) {
					selectUser.selectedIndex = i;
				}
			}
			/*
						"idconcentradoTelefonos": 2,
				"ipTelefono": "172.31.60.32",
				"Marca": "HUAWEI",
				"Modelo": "eSpace 7950",
				"Extension": "5503150",
				"Numero_Serie": "2150081737BTF1003509",
				"Nombre_persona": null
				
						mostrarMonitor(idEquipo);
						
						<div class="modal-body">
																	<div class="row">
																		<div class="mb-3 col-md-6">
																			<label for="modeloTel" class="form-label">Modelo</label>
																			<input class="form-control" type="text" name="modeloTel" id="modeloTel" readonly />
																		</div>
																		<div class="mb-3 col-md-6">
																			<label for="SerieTel" class="form-label">Número Serie</label>
																			<input class="form-control" type="text" id="SerieTel" name="SerieTel" readonly />
																		</div>
																		<div class="mb-3 col-md-6">
																			<label for="extTel" class="form-label">Extensión</label>
																			<input class="form-control" type="text" id="eextTelmail" name="extTel" readonly />
																		</div>
																		<div class="mb-3 col-md-6">
																			<label class="form-label" for="userTel">Usuario</label>
																			<input type="text" id="userTel" name="userTel" class="form-control" readonly />
																		</div>
																	</div>
																</div>
			
						
						*/
		}
	});
}

function actualizarTelefono() {
	let idconcentradoTelefonos = document.getElementById("idconcentradoTelefonos").value;
	let userTel = document.getElementById("userTel").value;
	let comTel = document.getElementById("comTel").value;

	if (userTel == 0) {
		userTel = 0;
	}

	params = {
		"idconcentradoTelefonos": idconcentradoTelefonos,
		"idEmpleado": userTel,
		"Comentarios": comTel
	}

	params = JSON.stringify(params);

	$.ajax({
		url: 'http://172.29.60.126/SIT/apiSIT/api/telefono/update.php',
		type: 'POST',
		data: params,
		async: false,
		contentType: 'application/json',
		dataType: 'text',
		success: function (respuesta) {
			if (respuesta == "Telefono actualizado con exito.") {
				Swal.fire({
					title: 'Teléfono actualizado con éxito',
					icon: 'success'
				}).then(function () {
					location.reload(true);
				});

			} else {
				Swal.fire({
					icon: 'error',
					title: 'Error al intentar actualizar el teléfono.',
				})
				return false;
			}
		},
		error: function (error) {
			console.error("No es posible completar la operación");
			alert("No es posible completar la operación, intentarlo mas tarde.");
			return false;
		}
	});
}


/*EQUIPOS*/
function mostrarTodoEquipo(idEquipo) {
	console.log("Total - " + document.querySelectorAll('#nodoPadre').length);
	let nodosEl = document.querySelectorAll('#nodoPadre')

	for (let index = 0; index < nodosEl.length; index++) {
		console.log("Empieza - " + document.querySelectorAll('#nodoPadre').length);
		var parrafo = document.getElementById("mdlEquiMon");
		var monitor = document.getElementById("nodoPadre");
		parrafo.removeChild(monitor);
		console.log("Quedan - " + document.querySelectorAll('#nodoPadre').length);
	}

	$.ajax({
		type: "POST",
		url: "http://172.29.60.126/SIT/apiSIT/api/equipo/readMonitores.php?idEquipo=" + idEquipo,
		async: false,
		success: function (response) {
			for (let i = 0; i < response.length; i++) {
				document.getElementById("mdlEquiMon").innerHTML += '<div class="mb-3 col-md-6" id="nodoPadre"> <label for="monitor" class="form-label">Monitor</label> <input class="form-control" type="text" name="monitor" id="monitor" value="' + response[i].Monitor + '" readonly /> </div>';
			}
		}
	});

	$.ajax({
		type: "POST",
		url: "http://172.29.60.126/SIT/apiSIT/api/equipo/single_read.php?idEquipo=" + idEquipo,
		async: false,
		success: function (response) {
			document.getElementById("nombreTituloEquipo").innerHTML = response.Nombre + " - " + response.Descripcion;
			document.getElementById("hostname").value = response.Host_Name;
			document.getElementById("modelo").value = response.Modelo;
			document.getElementById("numSerie").value = response.Numero_Serie;
			document.getElementById("marca").value = response.Marca;
			document.getElementById("ups").value = response.UPS_Serie;
		}
	});
}

/*USUARIOS*/
let emailrever, usuariorever, idEmpleadorever, idEmrever, curprever, puestoBuscar, areaBuscar, gerenciaBuscar;
var select = document.getElementById('nombreCompleto');
function mostrarTodoUsuario(idEmpleado) {
	$.ajax({
		type: "POST",
		url: "http://172.29.60.126/SIT/apiSIT/api/empleado/single_read.php?idEmpleado=" + idEmpleado,
		success: function (response) {
			console.log(response.length);
			if (response.length > 1) {
				document.getElementById("email").value = response[0].Correo_Conagua;
				document.getElementById("extension").value = response[0].Numero_Extension;
				document.getElementById("usuario").value = response[0].Usuario_Conagua;
				document.getElementById("idEmpleado").value = response[0].Id_empleado;
				document.getElementById("curp").value = response[0].CURP;
				document.getElementById("puesto").value = response[0].NombrePuesto;
				document.getElementById("gerencia").value = response[0].NombreGerencia;
				document.getElementById("area").value = response[0].NombreArea;
				document.getElementById("nombreTitulo").innerHTML = response[0].Nombre_persona;

				document.getElementById("divDidU").style.display = "block";
				document.getElementById("did").value = response[1].Numero_Extension;
			} else {
				document.getElementById("email").value = response.Correo_Conagua;
				document.getElementById("extension").value = response.Numero_Extension;
				document.getElementById("usuario").value = response.Usuario_Conagua;
				document.getElementById("idEmpleado").value = response.Id_empleado;
				document.getElementById("curp").value = response.CURP;
				document.getElementById("puesto").value = response.NombrePuesto;
				document.getElementById("gerencia").value = response.NombreGerencia;
				document.getElementById("area").value = response.NombreArea;
				document.getElementById("nombreTitulo").innerHTML = response.Nombre_persona;
				document.getElementById("divDidU").style.display = "none";
			}
			limpiarModalEquipoUsuario();
		}
	});
}

select.addEventListener('change', function () {
	var selectedOption = this.options[select.selectedIndex];
	console.log(selectedOption.value + ': ' + selectedOption.text);
	var valorSeleccionado = selectedOption.value;

	$.ajax({
		type: "POST",
		url: "http://172.29.60.126/SIT/apiSIT/api/empleado/single_read.php?idEmpleado=" + valorSeleccionado,
		success: function (response) {
			if (response.length > 1) {
				emailrever = document.getElementById("emailA").value = response[0].Correo_Conagua;
				usuariorever = document.getElementById("usuarioA").value = response[0].Usuario_Conagua;
				idEmpleadorever = document.getElementById("idEmpleadoA").value = response[0].Id_empleado;
				idEmrever = document.getElementById("idEmC").value = response[0].idEmpleado;
				curprever = document.getElementById("curpA").value = response[0].CURP;
				puestoBuscar = response[0].NombrePuesto;
				areaBuscar = response[0].NombreArea;
				gerenciaBuscar = response[0].NombreGerencia;
			} else {
				emailrever = document.getElementById("emailA").value = response.Correo_Conagua;
				usuariorever = document.getElementById("usuarioA").value = response.Usuario_Conagua;
				idEmpleadorever = document.getElementById("idEmpleadoA").value = response.Id_empleado;
				idEmrever = document.getElementById("idEmC").value = response.idEmpleado;
				curprever = document.getElementById("curpA").value = response.CURP;
				puestoBuscar = response.NombrePuesto;
				areaBuscar = response.NombreArea;
				gerenciaBuscar = response.NombreGerencia;
			}

			var selectPuesto = document.getElementById('puestoA');
			selectPuesto.removeAttribute('disabled');
			for (var i = 1; i < selectPuesto.length; i++) {
				if (selectPuesto.options[i].text == puestoBuscar) {
					selectPuesto.selectedIndex = i;
				}
			}

			var selectArea = document.getElementById('areaA');
			selectArea.removeAttribute('disabled');
			for (var i = 1; i < selectArea.length; i++) {
				if (selectArea.options[i].text == areaBuscar) {
					selectArea.selectedIndex = i;
				}
			}

			var selectGerencia = document.getElementById('gerenciaA');
			selectGerencia.removeAttribute('disabled');
			for (var i = 1; i < selectGerencia.length; i++) {
				if (selectGerencia.options[i].text == gerenciaBuscar) {
					selectGerencia.selectedIndex = i;
				}
			}

			document.getElementById("idUC").value = response.idUsuarioConagua;
		}
	});

	document.getElementById("botonesActualizar").style.display = "block";
});

function actualizarUsuarioBD() {
	let usuarioUpdate = document.getElementById("usuarioA").value.trim();
	let emailUpdate = document.getElementById("emailA").value.trim();
	let idEmpleadoUpdate = document.getElementById("idEmpleadoA").value.trim();
	let gerenciaUpdate = document.getElementById("gerenciaA").value;
	let areaUpdate = document.getElementById("areaA").value;
	let puestoUpdate = document.getElementById("puestoA").value;
	let idUsuarioConagua = document.getElementById("idUC").value;
	let idEmpleado = document.getElementById("idEmC").value;

	var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var regOficial = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	if (usuarioUpdate != "" && !/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+$/i.test(usuarioUpdate)) {
		Swal.fire({
			icon: 'error',
			title: 'El usuario ingresado es incorrecto.',
		})
	} else if (!reg.test(emailUpdate) && !regOficial.test(emailUpdate) && emailUpdate != "") {
		Swal.fire({
			icon: 'error',
			title: 'El email ingresado es incorrecto.',
		})
	} else {

		Swal.fire({
			title: '¿Estás seguro de guardar los cambios? ',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Guardar',
			cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.isConfirmed) {
				params = {
					"idArea": areaUpdate,
					"idPuesto": puestoUpdate,
					"idGerencia": gerenciaUpdate,
					"idEmpleado": idEmpleado
				}

				params = JSON.stringify(params);

				$.ajax({
					url: 'http://172.29.60.126/SIT/apiSIT/api/empleado/update.php',
					type: 'POST',
					data: params,
					async: false,
					contentType: 'application/json',
					dataType: 'text',
					success: function (respuesta) {
						if (respuesta == "Usuario actualizado con exito.") {
							params = {
								"Correo_Conagua": emailUpdate,
								"Usuario_Conagua": usuarioUpdate,
								"idUsuarioConagua": idUsuarioConagua,
								"Id_empleado": idEmpleadoUpdate
							}

							params = JSON.stringify(params);

							$.ajax({
								url: 'http://172.29.60.126/SIT/apiSIT/api/empleado/updateUC.php',
								type: 'POST',
								data: params,
								async: false,
								contentType: 'application/json',
								dataType: 'text',
								success: function (respuesta) {
									if (respuesta == "Usuario actualizado con exito.") {
										Swal.fire({
											title: 'Usuario actualizado con éxito',
											icon: 'success'
										}).then(function () {
											location.reload(true);
										});
									} else {
										Swal.fire({
											icon: 'error',
											title: 'No es posible completar la operación, intentarlo mas tarde.',
										})
										return false;
									}
								},
								error: function (error) {
									Swal.fire({
										icon: 'error',
										title: 'No es posible completar la operación, intentarlo mas tarde.',
									})
									alert("No es posible completar la operación, intentarlo mas tarde.");
									return false;
								}
							});
						} else {
							Swal.fire({
								icon: 'error',
								title: 'No es posible completar la operación, intentarlo mas tarde.',
							})
							return false;
						}
					},
					error: function (error) {
						Swal.fire({
							icon: 'error',
							title: 'No es posible completar la operación, intentarlo mas tarde.',
						})
						alert("No es posible completar la operación, intentarlo mas tarde.");
						return false;
					}
				});
			}
		})
	}
}

function revertirUsuario() {
	document.getElementById("emailA").value = emailrever;
	document.getElementById("usuarioA").value = usuariorever;
	document.getElementById("idEmpleadoA").value = idEmpleadorever;
	document.getElementById("idEmC").value = idEmrever;
	document.getElementById("curpA").value = curprever;

	var selectPuesto = document.getElementById('puestoA');
	selectPuesto.removeAttribute('disabled');
	for (var i = 1; i < selectPuesto.length; i++) {
		if (selectPuesto.options[i].text == puestoBuscar) {
			selectPuesto.selectedIndex = i;
		}
	}

	var selectArea = document.getElementById('areaA');
	selectArea.removeAttribute('disabled');
	for (var i = 1; i < selectArea.length; i++) {
		if (selectArea.options[i].text == areaBuscar) {
			selectArea.selectedIndex = i;
		}
	}

	var selectGerencia = document.getElementById('gerenciaA');
	selectGerencia.removeAttribute('disabled');
	for (var i = 1; i < selectGerencia.length; i++) {
		if (selectGerencia.options[i].text == gerenciaBuscar) {
			selectGerencia.selectedIndex = i;
		}
	}
}

function mostarEquipoUsuario() {
	$.ajax({
		type: "POST",
		url: "http://172.29.60.126/SIT/apiSIT/api/concentrado/buscarEquipo.php?Id_empleado=" + document.getElementById("idEmpleado").value,
		async: false,
		success: function (response) {
			if (response.length > 1) {
				document.getElementById("hostnameU").value = response[0].Host_Name;
				document.getElementById("modeloU").value = response[0].Modelo;
				document.getElementById("numSerieU").value = response[0].Numero_Serie;
				document.getElementById("marcaU").value = response[0].Marca;
				document.getElementById("equipoU").value = response[0].Equipo;
				document.getElementById("IPU").value = response[0].IP;

				document.getElementById("divEquipoDos").style.display = "block";
				document.getElementById("hostnameU2").value = response[1].Host_Name;
				document.getElementById("modeloU2").value = response[1].Modelo;
				document.getElementById("numSerieU2").value = response[1].Numero_Serie;
				document.getElementById("marcaU2").value = response[1].Marca;
				document.getElementById("equipoU2").value = response[1].Equipo;
				document.getElementById("IPU2").value = response[1].IP;
			} else {
				document.getElementById("hostnameU").value = response.Host_Name;
				document.getElementById("modeloU").value = response.Modelo;
				document.getElementById("numSerieU").value = response.Numero_Serie;
				document.getElementById("marcaU").value = response.Marca;
				document.getElementById("equipoU").value = response.Equipo;
				document.getElementById("IPU").value = response.IP;

				document.getElementById("divEquipoDos").style.display = "none";
			}

			document.getElementById("modlEquipoUsuario").style.display = "block";
			document.getElementById("infoUsuarioMdl").style.float = "left";
			document.getElementById("infoUsuarioMdl").style.width = "50%";
			document.getElementById("modlEquipoUsuario").style.float = "right";
			document.getElementById("modlEquipoUsuario").style.width = "50%";
			document.getElementById("mdlDialognUsEq").style.maxWidth = "80rem";
			document.getElementById("mdlPrincipalEquipoUsuario").style.display = "inline";
		},
		error: function (err) {
			let timerInterval
			Swal.fire({
				html: 'El usuario no cuenta con un equipo asignado.',
				timer: 2000,
				timerProgressBar: true,
				didOpen: () => {
					Swal.showLoading()
					const b = Swal.getHtmlContainer().querySelector('b')
					timerInterval = setInterval(() => {
					}, 100)
				},
				willClose: () => {
					clearInterval(timerInterval)
				}
			}).then((result) => {
				if (result.dismiss === Swal.DismissReason.timer) {
				}
			})
		}
	});
}

function limpiarModalEquipoUsuario() {
	document.getElementById("mdlDialognUsEq").style.maxWidth = "40rem";
	document.getElementById("mdlPrincipalEquipoUsuario").style.display = "flex";
	document.getElementById("modlEquipoUsuario").style.display = "none";
	document.getElementById("infoUsuarioMdl").style.width = "100%";
	document.getElementById("modlEquipoUsuario").style.width = "100%";
	document.getElementById("hostnameU").value = "";
	document.getElementById("modeloU").value = "";
	document.getElementById("numSerieU").value = "";
	document.getElementById("marcaU").value = "";
	document.getElementById("equipoU").value = "";
	document.getElementById("IPU").value = "";
	document.getElementById("hostnameU2").value = "";
	document.getElementById("modeloU2").value = "";
	document.getElementById("numSerieU2").value = "";
	document.getElementById("marcaU2").value = "";
	document.getElementById("equipoU2").value = "";
	document.getElementById("IPU2").value = "";
}

function guardarUsuarioBD() {
	let gerenciaNew = document.getElementById("gerenciaNew").value;
	let areaNew = document.getElementById("areaNew").value;
	let puestoNew = document.getElementById("puestoNew").value;
	let idEmpleadoNew = document.getElementById("idEmpleadoNew").value.trim();
	let emailNew = document.getElementById("emailNew").value.trim();
	let usuarioNew = document.getElementById("usuarioNew").value.trim();
	let curpNew = document.getElementById("curpNew").value.trim();
	let nombreCompletoNew = document.getElementById("nombreCompletoNew").value.trim();

	var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var regOficial = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	if (!/^([a-zA-ZñÑáéíóúÁÉÍÓÚ])+$/i.test(usuarioNew) && usuarioNew != "") {
		Swal.fire({
			icon: 'error',
			title: 'El usuario ingresado es incorrecto.',
		})
	} else if (!reg.test(emailNew) && !regOficial.test(emailNew) && emailNew != "") {
		Swal.fire({
			icon: 'error',
			title: 'El email ingresado es incorrecto.',
		})
	} else {
		Swal.fire({
			title: '¿Estás seguro de registrar al usuario? ',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Guardar',
			cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.isConfirmed) {
				params = {
					"Nombre_persona": nombreCompletoNew,
					"CURP": curpNew,
					"Correo_Conagua": emailNew,
					"Usuario_Conagua": usuarioNew,
					"idArea": areaNew,
					"idPuesto": puestoNew,
					"idGerencia": gerenciaNew,
					"Id_empleado": idEmpleadoNew
				}
				params = JSON.stringify(params);

				$.ajax({
					url: 'http://172.29.60.126/SIT/apiSIT/api/empleado/create.php',
					type: 'POST',
					data: params,
					async: false,
					contentType: 'application/json',
					dataType: 'text',
					success: function (respuesta) {
						if (respuesta == "Usuario creado exitosamente.") {
							Swal.fire({
								title: 'Usuario registrado con éxito',
								icon: 'success'
							}).then(function () {
								location.reload(true);
							});
						} else {
							Swal.fire({
								icon: 'error',
								title: 'No es posible completar la operación, intentarlo mas tarde.',
							})
							return false;
						}
					},
					error: function (error) {
						Swal.fire({
							icon: 'error',
							title: 'No es posible completar la operación, intentarlo mas tarde.',
						})
						alert("No es posible completar la operación, intentarlo mas tarde.");
						return false;
					}
				});
			}
		})
	}
}

/*IP*/
$(buscarIp).keyup(function (event) {
	if (event.which === 13) {
		limpiarIP();
		$.ajax({
			type: "POST",
			url: "http://172.29.60.126/SIT/apiSIT/api/concentrado/single_read.php?IP=" + document.getElementById("buscarIp").value,
			async: false,
			success: function (response) {
				document.getElementById("ipEncontrada").innerHTML = response.IP;
				document.getElementById("nodoRed").value = response.Nodo_red;
				document.getElementById("vlan").value = response.VLAN;
				document.getElementById("puerto").value = response.Puerto_Switch;
				document.getElementById("switch").value = response.Switch;
				document.getElementById("rack").value = response.Rack;
				document.getElementById("comentario").value = response.Comentario;
				document.getElementById("mdlTitle").style.textAlign = "left";
				document.getElementById("cardRed").style.display = "block";
				document.getElementById("cardUsuario").style.display = "block";

				$.ajax({
					type: "POST",
					url: "http://172.29.60.126/SIT/apiSIT/api/concentrado/buscarUsuario.php?IP=" + document.getElementById("buscarIp").value,
					async: false,
					success: function (response) {
						document.getElementById("nomUsuarioIP").value = response.Nombre_persona;
						document.getElementById("userConIP").value = response.Usuario_Conagua;
						document.getElementById("empID").value = response.Id_empleado;
						document.getElementById("hostNameIP").value = response.Host_Name;
						document.getElementById("numSerieID").value = response.Numero_Serie;
						document.getElementById("equipoIP").value = response.Equipo;
						document.getElementById("buscarIp").value = "";

						divUsuarioIp();
					}
				});
			},
			error: function (err) {
				console.log(err);
				document.getElementById("ipEncontrada").innerHTML = "La IP ingresada esta libre.";
				document.getElementById("mdlTitle").style.textAlign = "center";
				document.getElementById("cardUsuario").style.display = "block";
				divUsuarioIp();
			}
		});
	}
});

function limpiarIP() {
	document.getElementById("ipEncontrada").innerHTML = "";
	document.getElementById("nodoRed").value = "";
	document.getElementById("vlan").value = "";
	document.getElementById("puerto").value = "";
	document.getElementById("switch").value = "";
	document.getElementById("rack").value = "";
	document.getElementById("comentario").value = "";

	document.getElementById("nomUsuarioIP").value = "";
	document.getElementById("userConIP").value = "";
	document.getElementById("empID").value = "";
	document.getElementById("hostNameIP").value = "";
	document.getElementById("numSerieID").value = "";
	document.getElementById("equipoIP").value = "";
}

function divUsuarioIp() {
	let divs = [];

	divs.push(document.getElementById("nomUsuarioIPdiv"));
	divs.push(document.getElementById("userConIPdiv"));
	divs.push(document.getElementById("empIDdiv"));
	divs.push(document.getElementById("hostNameIPdiv"));
	divs.push(document.getElementById("numSerieIDdiv"));
	divs.push(document.getElementById("equipoIPdiv"));

	let label = [];

	label.push(document.getElementById("nomUsuarioIP"));
	label.push(document.getElementById("userConIP"));
	label.push(document.getElementById("empID"));
	label.push(document.getElementById("hostNameIP"));
	label.push(document.getElementById("numSerieID"));
	label.push(document.getElementById("equipoIP"));

	for (let index = 0; index < label.length; index++) {
		if (label[index].value) {
			divs[index].style.display = "block";
		} else {
			divs[index].style.display = "none";
		}
	}
}

$(nombreCompletoIPNew).select2();
$(hostEquipoIpNew).select2();

$('#IPNew').blur(function () {
	let ipnew = document.getElementById("IPNew");

	for (let index = 0; index < ipAll.length; index++) {
		if (ipnew.value == ipAll[index]) {
			Swal.fire({
				icon: 'error',
				title: 'La IP ingresada ya está ocupada.',
			})
			ipnew.style.color = "red";
		}
	}
});

function guardarIPBD() {
	let nombreCompletoIPNew = document.getElementById("nombreCompletoIPNew").value;
	let hostEquipoIpNew = document.getElementById("hostEquipoIpNew").value;
	let nodoRedIPNew = document.getElementById("nodoRedIPNew").value.trim();
	let VLAN = document.getElementById("VLAN").value.trim();
	let puertoIPNew = document.getElementById("puertoIPNew").value.trim();
	let rackIPNew = document.getElementById("rackIPNew").value.trim();
	let switchIPNew = document.getElementById("switchIPNew").value.trim();
	let comentarioIPNew = document.getElementById("comentarioIPNew").value.trim();
	let IPNew = document.getElementById("IPNew").value.trim();


	params = {
		"IP": nombreCompletoNew,
		"Nodo_red": curpNew,
		"equipoExt": emailNew,
		"idUsuario": usuarioNew,
		"idResguardante": areaNew,
		"VLAN": puestoNew,
		"Puerto_Switch": gerenciaNew,
		"Switch": idEmpleadoNew,
		"Rack": idEmpleadoNew,
		"Comentario": idEmpleadoNew
	}
	params = JSON.stringify(params);
}