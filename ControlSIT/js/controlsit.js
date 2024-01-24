let userAll = [], ipAll = [];
let IPVisitante = (document.getElementById("IPVisitante").value);
let UsuarioEditor = document.getElementById("IDUsuarioEditor").value;

window.addEventListener('load', function () {
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

	$.ajax({
		url: 'http://172.29.60.126/SIT/apiSIT/api/empleado/read.php',
		type: 'GET',
		async: false,
		dataType: 'text',
		success: function (response) {
			var parsedJson = JSON.parse(response);

			for (let index = 0; index < parsedJson.length; index++) {
				userAll.push(parsedJson[index]);
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
			document.getElementById("menuUsuarios").classList.remove("active");

			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";

			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			document.getElementById("agregarUsuario").classList.remove("active");
			document.getElementById("mdlAgregarUsuario").style.display = "none";

			/* Equipo */
			document.getElementById("menuEquipos").classList.remove("active");

			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("menuIPs").classList.remove("active");

			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			document.getElementById("mdlAgregarIP").style.display = "none";
			document.getElementById("agregarIP").classList.remove("active");

			document.getElementById("mdlActualizarIP").style.display = "none";
			document.getElementById("actualizarIP").classList.remove("active");

			/*Telefono*/
			document.getElementById("menuTelefonos").classList.remove("active");

			document.getElementById("buscarTelefono").classList.remove("active");
			document.getElementById("mdlBuscarTelefono").style.display = "none";

			break;

		case 2: /*Buscar Usuario*/
			document.getElementById("menuCompleto").classList.remove("active");

			/* Usuario */
			var item = document.getElementById("menuUsuarios");
			if (!item.classList.contains('active')) {
				document.getElementById("menuUsuarios").classList.toggle("active");
			}

			document.getElementById("buscarUsuario").classList.toggle("active");
			document.getElementById("mdlBuscarUsuario").style.display = "block";

			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			document.getElementById("agregarUsuario").classList.remove("active");
			document.getElementById("mdlAgregarUsuario").style.display = "none";

			/* Equipo */
			document.getElementById("menuEquipos").classList.remove("active");

			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("menuIPs").classList.remove("active");

			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			document.getElementById("mdlAgregarIP").style.display = "none";
			document.getElementById("agregarIP").classList.remove("active");

			document.getElementById("mdlActualizarIP").style.display = "none";
			document.getElementById("actualizarIP").classList.remove("active");

			/*Telefono*/
			document.getElementById("menuTelefonos").classList.remove("active");

			document.getElementById("buscarTelefono").classList.remove("active");
			document.getElementById("mdlBuscarTelefono").style.display = "none";

			break;

		case 5: /*Actualizar Usuario*/
			document.getElementById("menuCompleto").classList.remove("active");

			/* Usuario */
			var item = document.getElementById("menuUsuarios");
			if (!item.classList.contains('active')) {
				document.getElementById("menuUsuarios").classList.toggle("active");
			}
			limpiarActualizarUser();

			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";

			document.getElementById("agregarUsuario").classList.remove("active");
			document.getElementById("mdlAgregarUsuario").style.display = "none";

			document.getElementById("actualizarUsuario").classList.toggle("active");
			document.getElementById("mdlActualizarUsuario").style.display = "block";

			/* Equipo */
			document.getElementById("menuEquipos").classList.remove("active");

			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("menuIPs").classList.remove("active");

			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			document.getElementById("mdlAgregarIP").style.display = "none";
			document.getElementById("agregarIP").classList.remove("active");

			document.getElementById("mdlActualizarIP").style.display = "none";
			document.getElementById("actualizarIP").classList.remove("active");

			/*Telefono*/
			document.getElementById("menuTelefonos").classList.remove("active");

			document.getElementById("buscarTelefono").classList.remove("active");
			document.getElementById("mdlBuscarTelefono").style.display = "none";

			break;

		case 7: /*Agregar Usuario*/
			document.getElementById("menuCompleto").classList.remove("active");

			/* Usuario */
			var item = document.getElementById("menuUsuarios");
			if (!item.classList.contains('active')) {
				document.getElementById("menuUsuarios").classList.toggle("active");
			}

			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";

			document.getElementById("agregarUsuario").classList.toggle("active");
			document.getElementById("mdlAgregarUsuario").style.display = "block";

			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			/* Equipo */
			document.getElementById("menuEquipos").classList.remove("active");

			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("menuIPs").classList.remove("active");

			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			document.getElementById("mdlAgregarIP").style.display = "none";
			document.getElementById("agregarIP").classList.remove("active");

			document.getElementById("mdlActualizarIP").style.display = "none";
			document.getElementById("actualizarIP").classList.remove("active");

			/*Telefono*/
			document.getElementById("menuTelefonos").classList.remove("active");

			document.getElementById("buscarTelefono").classList.remove("active");
			document.getElementById("mdlBuscarTelefono").style.display = "none";

			break;

		case 3: /*Buscar Equipo*/
			document.getElementById("menuCompleto").classList.remove("active");

			/* Usuario */
			document.getElementById("menuUsuarios").classList.remove("active");

			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";

			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			document.getElementById("agregarUsuario").classList.remove("active");
			document.getElementById("mdlAgregarUsuario").style.display = "none";

			/* Equipo */
			var item = document.getElementById("menuEquipos");
			if (!item.classList.contains('active')) {
				document.getElementById("menuEquipos").classList.toggle("active");
			}

			document.getElementById("buscarEquipo").classList.toggle("active");
			document.getElementById("mdlBuscarEquipo").style.display = "block";

			/* IP */
			document.getElementById("menuIPs").classList.remove("active");

			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			document.getElementById("mdlAgregarIP").style.display = "none";
			document.getElementById("agregarIP").classList.remove("active");

			document.getElementById("mdlActualizarIP").style.display = "none";
			document.getElementById("actualizarIP").classList.remove("active");

			/*Telefono*/
			document.getElementById("menuTelefonos").classList.remove("active");

			document.getElementById("buscarTelefono").classList.remove("active");
			document.getElementById("mdlBuscarTelefono").style.display = "none";

			break;

		case 6: /*Buscar Telefono*/
			document.getElementById("menuCompleto").classList.remove("active");

			/* Usuario */
			document.getElementById("menuUsuarios").classList.remove("active");

			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";

			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			document.getElementById("agregarUsuario").classList.remove("active");
			document.getElementById("mdlAgregarUsuario").style.display = "none";

			/* Equipo */
			document.getElementById("menuEquipos").classList.remove("active");

			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			document.getElementById("menuIPs").classList.remove("active");

			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			document.getElementById("mdlAgregarIP").style.display = "none";
			document.getElementById("agregarIP").classList.remove("active");

			document.getElementById("mdlActualizarIP").style.display = "none";
			document.getElementById("actualizarIP").classList.remove("active");

			/*Telefono*/
			var item = document.getElementById("menuTelefonos");
			if (!item.classList.contains('active')) {
				document.getElementById("menuTelefonos").classList.toggle("active");
			}
			document.getElementById("buscarTelefono").classList.toggle("active");
			document.getElementById("mdlBuscarTelefono").style.display = "block";

			break;

		case 4: /*Buscar IP*/
			document.getElementById("menuCompleto").classList.remove("active");

			//* Usuario */
			document.getElementById("menuUsuarios").classList.remove("active");

			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";

			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			document.getElementById("agregarUsuario").classList.remove("active");
			document.getElementById("mdlAgregarUsuario").style.display = "none";

			/* Equipo */
			document.getElementById("menuEquipos").classList.remove("active");

			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			limpiarIP();
			var item = document.getElementById("menuIPs");
			if (!item.classList.contains('active')) {
				document.getElementById("menuIPs").classList.toggle("active");
			}
			document.getElementById("buscarIP").classList.toggle("active");
			document.getElementById("mdlBuscarIP").style.display = "block";

			document.getElementById("cardRed").style.display = "none";
			document.getElementById("cardUsuario").style.display = "none";

			document.getElementById("mdlAgregarIP").style.display = "none";
			document.getElementById("agregarIP").classList.remove("active");

			document.getElementById("mdlActualizarIP").style.display = "none";
			document.getElementById("actualizarIP").classList.remove("active");

			/*Telefono*/
			document.getElementById("menuTelefonos").classList.remove("active");

			document.getElementById("buscarTelefono").classList.remove("active");
			document.getElementById("mdlBuscarTelefono").style.display = "none";

			break;

		case 9: /*Actualizar IP*/
			document.getElementById("menuCompleto").classList.remove("active");

			//* Usuario */
			document.getElementById("menuUsuarios").classList.remove("active");

			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";

			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			document.getElementById("agregarUsuario").classList.remove("active");
			document.getElementById("mdlAgregarUsuario").style.display = "none";

			/* Equipo */
			document.getElementById("menuEquipos").classList.remove("active");

			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			var item = document.getElementById("menuIPs");
			if (!item.classList.contains('active')) {
				document.getElementById("menuIPs").classList.toggle("active");
			}
			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			document.getElementById("agregarIP").classList.remove("active");
			document.getElementById("mdlAgregarIP").style.display = "none";

			document.getElementById("actualizarIP").classList.toggle("active");
			document.getElementById("mdlActualizarIP").style.display = "block";

			/*Telefono*/
			document.getElementById("menuTelefonos").classList.remove("active");

			document.getElementById("buscarTelefono").classList.remove("active");
			document.getElementById("mdlBuscarTelefono").style.display = "none";

			break;

		case 8: /*Agregar IP*/
			document.getElementById("menuCompleto").classList.remove("active");

			//* Usuario */
			document.getElementById("menuUsuarios").classList.remove("active");

			document.getElementById("buscarUsuario").classList.remove("active");
			document.getElementById("mdlBuscarUsuario").style.display = "none";

			document.getElementById("actualizarUsuario").classList.remove("active");
			document.getElementById("mdlActualizarUsuario").style.display = "none";

			document.getElementById("agregarUsuario").classList.remove("active");
			document.getElementById("mdlAgregarUsuario").style.display = "none";

			/* Equipo */
			document.getElementById("menuEquipos").classList.remove("active");

			document.getElementById("buscarEquipo").classList.remove("active");
			document.getElementById("mdlBuscarEquipo").style.display = "none";

			/* IP */
			var item = document.getElementById("menuIPs");
			if (!item.classList.contains('active')) {
				document.getElementById("menuIPs").classList.toggle("active");
			}

			document.getElementById("buscarIP").classList.remove("active");
			document.getElementById("mdlBuscarIP").style.display = "none";

			document.getElementById("agregarIP").classList.toggle("active")
			document.getElementById("mdlAgregarIP").style.display = "block";

			document.getElementById("actualizarIP").classList.remove("active");
			document.getElementById("mdlActualizarIP").style.display = "none";

			limpiarIP();

			/*Telefono*/
			document.getElementById("menuTelefonos").classList.remove("active");

			document.getElementById("buscarTelefono").classList.remove("active");
			document.getElementById("mdlBuscarTelefono").style.display = "none";

			break;

		default:
			break;
	}
}

/*USUARIOS*/
let emailrever, usuariorever, idEmpleadorever, idEmrever, curprever, puestoBuscar, areaBuscar, gerenciaBuscar;
var select = document.getElementById('nombreCompleto');
$('#nombreCompleto').select2();

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

$(select).on('change', function (e) {
	var selectedOption = this.options[select.selectedIndex];
	console.log(selectedOption.value + ': ' + selectedOption.text);
	var valorSeleccionado = selectedOption.value;

	$.ajax({
		type: "POST",
		url: "http://172.29.60.126/SIT/apiSIT/api/empleado/single_read.php?idEmpleado=" + valorSeleccionado,
		success: function (response) {
			if (response.length != undefined) {
				emailrever = document.getElementById("emailA").value = response[0].Correo_Conagua;
				usuariorever = document.getElementById("usuarioA").value = response[0].Usuario_Conagua;
				idEmpleadorever = document.getElementById("idEmpleadoA").value = response[0].Id_empleado;
				curprever = document.getElementById("curpA").value = response[0].CURP;
				nombrerever = document.getElementById("nombreCompletoA").value = response[0].Nombre_persona;
				puestoBuscar = response[0].NombrePuesto;
				areaBuscar = response[0].NombreArea;
				gerenciaBuscar = response[0].NombreGerencia;

				document.getElementById("idUC").value = response[0].idUsuarioConagua;
				document.getElementById("idEmC").value = response[0].idEmpleado;
				document.getElementById("idPer").value = response[0].idPersona;
			} else {
				emailrever = document.getElementById("emailA").value = response.Correo_Conagua;
				usuariorever = document.getElementById("usuarioA").value = response.Usuario_Conagua;
				idEmpleadorever = document.getElementById("idEmpleadoA").value = response.Id_empleado;
				curprever = document.getElementById("curpA").value = response.CURP;
				nombrerever = document.getElementById("nombreCompletoA").value = response.Nombre_persona;
				puestoBuscar = response.NombrePuesto;
				areaBuscar = response.NombreArea;
				gerenciaBuscar = response.NombreGerencia;

				document.getElementById("idUC").value = response.idUsuarioConagua;
				document.getElementById("idEmC").value = response.idEmpleado;
				document.getElementById("idPer").value = response.idPersona;
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

			$("#emailA").attr("readonly", false);
			$("#usuarioA").attr("readonly", false);
			$("#idEmpleadoA").attr("readonly", false);
			$("#curpA").attr("readonly", false);
			$("#nombreCompletoA").attr("readonly", false);
		}
	});

	document.getElementById("botonesActualizar").style.display = "flex";
});

function limpiarActualizarUser() {
	$("#emailA").attr("readonly", true);
	$("#usuarioA").attr("readonly", true);
	$("#idEmpleadoA").attr("readonly", true);
	$("#curpA").attr("readonly", true);
	$("#nombreCompletoA").attr("readonly", true);
	document.getElementById("emailA").value = "";
	document.getElementById("usuarioA").value = "";
	document.getElementById("idEmpleadoA").value = "";
	document.getElementById("curpA").value = "";
	document.getElementById("nombreCompletoA").value = "";
	let puesto = document.getElementById("puestoA");
	let area = document.getElementById("areaA");
	let gerencia = document.getElementById("gerenciaA");
	area.setAttribute('disabled', true);
	gerencia.setAttribute('disabled', true);
	puesto.setAttribute('disabled', true);
	area.value = "";
	gerencia.value = "";
	puesto.value = "";

	document.getElementById("nombreCompleto").value = "";
	document.getElementById("select2-nombreCompleto-container").innerHTML = "Selecione:";
}

function actualizarUsuarioBD() {
	let usuarioUpdate = document.getElementById("usuarioA").value.trim();
	let emailUpdate = document.getElementById("emailA").value.trim();
	let idEmpleadoUpdate = document.getElementById("idEmpleadoA").value.trim();
	let nombreCompletoUpdate = document.getElementById("nombreCompletoA").value.trim();
	nombreCompletoUpdate.toUpperCase();
	let CURPUpdate = document.getElementById("curpA").value.trim();
	CURPUpdate.toUpperCase();
	let gerenciaUpdate = document.getElementById("gerenciaA").value;
	let areaUpdate = document.getElementById("areaA").value;
	let puestoUpdate = document.getElementById("puestoA").value;
	let idUsuarioConagua = document.getElementById("idUC").value;
	let idEmpleado = document.getElementById("idEmC").value;
	let idPersona = document.getElementById("idPer").value;

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
	} else if (CURPUpdate == "") {
		Swal.fire({
			icon: 'error',
			title: 'El CURP no puede ir vacío.',
		})
	} else if (CURPUpdate.length < 18) {
		Swal.fire({
			icon: 'error',
			title: 'El CURP debe tener 18 caracteres.',
		})
	} else if (nombreCompletoUpdate == "") {
		Swal.fire({
			icon: 'error',
			title: 'El nombre no puede ir vacío.',
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
					"idEmpleado": idEmpleado,
					"Correo_Conagua": emailUpdate,
					"Usuario_Conagua": usuarioUpdate,
					"idUsuarioConagua": idUsuarioConagua,
					"Id_empleado": idEmpleadoUpdate,
					"idPersona": idPersona,
					"Nombre_persona": nombreCompletoUpdate,
					"CURP": CURPUpdate
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
							paramsBitacora = {
								"idUsuario": UsuarioEditor,
								"IPConexion": IPVisitante,
								"TipoOperacion": 4
							}

							paramsBitacora = JSON.stringify(paramsBitacora);

							$.ajax({
								url: 'http://172.29.60.126/SIT/apiSIT/api/bitacora/create.php',
								type: 'POST',
								data: paramsBitacora,
								async: false,
								contentType: 'application/json',
								dataType: 'text'
							});

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
			}
		})
	}
}

function revertirUsuario() {
	document.getElementById("emailA").value = emailrever;
	document.getElementById("usuarioA").value = usuariorever;
	document.getElementById("idEmpleadoA").value = idEmpleadorever;
	document.getElementById("curpA").value = curprever;
	document.getElementById("nombreCompletoA").value = nombrerever;

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
	let nombreRepetido = false;
	let CURPRepetido = false;
	let usuarioRepetido = false;
	let correoRepetido = false;

	var reg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	var regOficial = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;

	for (let index = 0; index < userAll.length; index++) {
		if (userAll[index].Nombre_persona == nombreCompletoNew) {
			nombreRepetido = true;
		}

		if (userAll[index].CURP == curpNew) {
			CURPRepetido = true;
		}

		if (usuarioNew != "") {
			if (userAll[index].Usuario_Conagua == usuarioNew) {
				usuarioRepetido = true;
			}
		}

		if (emailNew != "") {
			if (userAll[index].Correo_Conagua == emailNew) {
				correoRepetido = true;
			}
		}
	}

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
	} else if (nombreRepetido == true) {
		Swal.fire({
			icon: 'error',
			title: 'El nombre ya está asignado a otro usuario.',
		})
	} else if (CURPRepetido == true) {
		Swal.fire({
			icon: 'error',
			title: 'El CURP ya está asignado a otro usuario.',
		})
	} else if (usuarioRepetido == true) {
		Swal.fire({
			icon: 'error',
			title: 'El usuario ya está asignado a otra persona.',
		})
	} else if (correoRepetido == true) {
		Swal.fire({
			icon: 'error',
			title: 'El correo ya está asignado a otro usuario.',
		})
	} else if (nombreCompletoNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'El nombre no puede ir vacío.',
		})
	} else if (curpNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'El CURP no puede ir vacío.',
		})
	} else if (curpNew.length < 18) {
		Swal.fire({
			icon: 'error',
			title: 'El CURP debe tener 18 caracteres.',
		})
	} else if (puestoNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'Debe seleccionar un puesto.',
		})
	} else if (areaNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'Debe seleccionar un área.',
		})
	} else if (gerenciaNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'Debe seleccionar una gerencia.',
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
							paramsBitacora = {
								"idUsuario": UsuarioEditor,
								"IPConexion": IPVisitante,
								"TipoOperacion": 2
							}

							paramsBitacora = JSON.stringify(paramsBitacora);

							$.ajax({
								url: 'http://172.29.60.126/SIT/apiSIT/api/bitacora/create.php',
								type: 'POST',
								data: paramsBitacora,
								async: false,
								contentType: 'application/json',
								dataType: 'text'
							});

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

function limpiarUsuarioNew() {
	document.getElementById("gerenciaNew").selectedIndex = "";
	document.getElementById("areaNew").selectedIndex = "";
	document.getElementById("puestoNew").selectedIndex = "";
	document.getElementById("idEmpleadoNew").value = "";
	document.getElementById("emailNew").value = "";
	document.getElementById("usuarioNew").value = "";
	document.getElementById("curpNew").value = "";
	document.getElementById("nombreCompletoNew").value = "";
}

/*TELEFONO*/
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

/*IP*/
function tipoIPAgregar(opcion) {
	switch (opcion) {
		case 1:
			document.getElementById("cardUsuarioIPnew").style.display = "block";
			var item = document.getElementById("IPUserAdd");
			if (!item.classList.contains('active')) {
				document.getElementById("IPUserAdd").classList.toggle("active");
			}

			document.getElementById("cardImpresoraIPnew").style.display = "none";
			document.getElementById("IPPrinterAdd").classList.remove("active");

			document.getElementById("cardServerIPnew").style.display = "none";
			document.getElementById("IPServerAdd").classList.remove("active");
			break;

		case 2:
			document.getElementById("cardUsuarioIPnew").style.display = "none";
			document.getElementById("IPUserAdd").classList.remove("active");

			document.getElementById("cardImpresoraIPnew").style.display = "block";
			var item = document.getElementById("IPUserAdd");
			if (!item.classList.contains('active')) {
				document.getElementById("IPPrinterAdd").classList.toggle("active");
			}

			document.getElementById("cardServerIPnew").style.display = "none";
			document.getElementById("IPServerAdd").classList.remove("active");
			break;

		case 3:
			document.getElementById("cardUsuarioIPnew").style.display = "none";
			document.getElementById("IPUserAdd").classList.remove("active");

			document.getElementById("cardImpresoraIPnew").style.display = "none";
			document.getElementById("IPPrinterAdd").classList.remove("active");

			document.getElementById("cardServerIPnew").style.display = "block";
			var item = document.getElementById("IPServerAdd");
			if (!item.classList.contains('active')) {
				document.getElementById("IPServerAdd").classList.toggle("active");
			}

			break;

		default:
			break;
	}
}

function tipoIPActualizar(opcion) {
	switch (opcion) {
		case 1:
			document.getElementById("cardUsuarioIPAct").style.display = "block";
			var item = document.getElementById("IPUseract");
			if (!item.classList.contains('active')) {
				document.getElementById("IPUseract").classList.toggle("active");
			}

			document.getElementById("cardImpresoraIPAct").style.display = "none";
			document.getElementById("IPPrinteract").classList.remove("active");

			document.getElementById("cardServerIPAct").style.display = "none";
			document.getElementById("IPServeract").classList.remove("active");
			break;

		case 2:
			document.getElementById("cardUsuarioIPAct").style.display = "none";
			document.getElementById("IPUseract").classList.remove("active");

			document.getElementById("cardImpresoraIPAct").style.display = "block";
			var item = document.getElementById("IPUseract");
			if (!item.classList.contains('active')) {
				document.getElementById("IPPrinteract").classList.toggle("active");
			}

			document.getElementById("cardServerIPAct").style.display = "none";
			document.getElementById("IPServeract").classList.remove("active");
			break;

		case 3:
			document.getElementById("cardUsuarioIPAct").style.display = "none";
			document.getElementById("IPUseract").classList.remove("active");

			document.getElementById("cardImpresoraIPAct").style.display = "none";
			document.getElementById("IPPrinteract").classList.remove("active");

			document.getElementById("cardServerIPAct").style.display = "block";
			var item = document.getElementById("IPServeract");
			if (!item.classList.contains('active')) {
				document.getElementById("IPServeract").classList.toggle("active");
			}

			break;

		default:
			break;
	}
}

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
$(buscarActIP).select2();

$('#IPNew').blur(function () {
	let ipnew = document.getElementById("IPNew");

	for (let index = 0; index < ipAll.length; index++) {
		if (ipnew.value == ipAll[index]) {
			Swal.fire({
				icon: 'error',
				title: 'La IP ingresada ya está ocupada.',
			})
			ipnew.style.color = "red";
			index = ipAll.length - 1;
		} else {
			let obtenerVLAN = ipnew.value.split(".");
			document.getElementById("vlanIPNew").value = obtenerVLAN[2];
			ipnew.style.color = "black";
		}
	}
});

$(switchIPNew).on('change', function (e) {
	let switchSeleccionado = document.getElementById("switchIPNew").value;

	switch (switchSeleccionado) {
		case "172.33.42.3": case "172.33.42.4": case "172.33.42.5": case "172.33.42.6": case "172.33.42.10": case "172.33.42.11": case "172.33.42.27":
			document.getElementById("rackIPNew").value = "CUARTO FRIO";
			break;
		case "172.33.42.13": case "172.33.42.14": case "172.33.42.15":
			document.getElementById("rackIPNew").value = "MONITOREO ATMOSFÉRICO DATOS";
			break;
		case "172.33.42.21":
			document.getElementById("rackIPNew").value = "SALA DIRECTORADO ";
			break;
		case "172.33.42.26":
			document.getElementById("rackIPNew").value = "CONMUTADOR";
			break;
		case "172.33.42.28": case "172.33.42.29":
			document.getElementById("rackIPNew").value = "ADMINISTRATIVO";
			break;
		case "172.33.42.30":
			document.getElementById("rackIPNew").value = "CAPACITACIÓN";
			break;
		case "172.33.42.254":
			document.getElementById("rackIPNew").value = "SW CORE";
			break;
		default:
			break;
	}
});

$('#IPNewPrint').blur(function () {
	let ipnew = document.getElementById("IPNewPrint");

	for (let index = 0; index < ipAll.length; index++) {
		if (ipnew.value == ipAll[index]) {
			Swal.fire({
				icon: 'error',
				title: 'La IP ingresada ya está ocupada.',
			})
			ipnew.style.color = "red";
			index = ipAll.length - 1;
		} else {
			let obtenerVLAN = ipnew.value.split(".");
			document.getElementById("vlanIPNewPrint").value = obtenerVLAN[2];
			ipnew.style.color = "black";
		}
	}
});

$(switchIPNewPrint).on('change', function (e) {
	let switchSeleccionado = document.getElementById("switchIPNewPrint").value;

	switch (switchSeleccionado) {
		case "172.33.42.3": case "172.33.42.4": case "172.33.42.5": case "172.33.42.6": case "172.33.42.10": case "172.33.42.11": case "172.33.42.27":
			document.getElementById("rackIPNewPrint").value = "CUARTO FRIO";
			break;
		case "172.33.42.13": case "172.33.42.14": case "172.33.42.15":
			document.getElementById("rackIPNewPrint").value = "MONITOREO ATMOSFÉRICO DATOS";
			break;
		case "172.33.42.21":
			document.getElementById("rackIPNewPrint").value = "SALA DIRECTORADO ";
			break;
		case "172.33.42.26":
			document.getElementById("rackIPNewPrint").value = "CONMUTADOR";
			break;
		case "172.33.42.28": case "172.33.42.29":
			document.getElementById("rackIPNewPrint").value = "ADMINISTRATIVO";
			break;
		case "172.33.42.30":
			document.getElementById("rackIPNewPrint").value = "CAPACITACIÓN";
			break;
		case "172.33.42.254":
			document.getElementById("rackIPNewPrint").value = "SW CORE";
			break;
		default:
			break;
	}
});

$('#IPNewServer').blur(function () {
	let ipnew = document.getElementById("IPNewServer");

	for (let index = 0; index < ipAll.length; index++) {
		if (ipnew.value == ipAll[index]) {
			Swal.fire({
				icon: 'error',
				title: 'La IP ingresada ya está ocupada.',
			})
			ipnew.style.color = "red";
			index = ipAll.length - 1;
		} else {
			let obtenerVLAN = ipnew.value.split(".");
			document.getElementById("vlanIPNewServer").value = obtenerVLAN[2];
			ipnew.style.color = "black";
		}
	}
});

$(switchIPNewServer).on('change', function (e) {
	let switchSeleccionado = document.getElementById("switchIPNewServer").value;

	switch (switchSeleccionado) {
		case "172.33.42.3": case "172.33.42.4": case "172.33.42.5": case "172.33.42.6": case "172.33.42.10": case "172.33.42.11": case "172.33.42.27":
			document.getElementById("rackIPNewServer").value = "CUARTO FRIO";
			break;
		case "172.33.42.13": case "172.33.42.14": case "172.33.42.15":
			document.getElementById("rackIPNewServer").value = "MONITOREO ATMOSFÉRICO DATOS";
			break;
		case "172.33.42.21":
			document.getElementById("rackIPNewServer").value = "SALA DIRECTORADO ";
			break;
		case "172.33.42.26":
			document.getElementById("rackIPNewServer").value = "CONMUTADOR";
			break;
		case "172.33.42.28": case "172.33.42.29":
			document.getElementById("rackIPNewServer").value = "ADMINISTRATIVO";
			break;
		case "172.33.42.30":
			document.getElementById("rackIPNewServer").value = "CAPACITACIÓN";
			break;
		case "172.33.42.254":
			document.getElementById("rackIPNewServer").value = "SW CORE";
			break;
		default:
			break;
	}
});

$('#IPActEncontrada').blur(function () {
	let ipnew = document.getElementById("IPActEncontrada");

	for (let index = 0; index < ipAll.length; index++) {
		if (ipnew.value == ipAll[index]) {
			if (IPActEncontradarever != ipnew.value) {
				Swal.fire({
					icon: 'error',
					title: 'La IP ingresada ya está ocupada.',
				})
				ipnew.style.color = "red";
				index = ipAll.length - 1;
			}
		} else {
			let obtenerVLAN = ipnew.value.split(".");
			document.getElementById("vlanIPAct").value = obtenerVLAN[2];
			ipnew.style.color = "black";
		}
	}
});

$(switchIPAct).on('change', function (e) {
	let switchSeleccionado = document.getElementById("switchIPAct").value;

	switch (switchSeleccionado) {
		case "172.33.42.3": case "172.33.42.4": case "172.33.42.5": case "172.33.42.6": case "172.33.42.10": case "172.33.42.11": case "172.33.42.27":
			document.getElementById("rackIPAct").value = "CUARTO FRIO";
			break;
		case "172.33.42.13": case "172.33.42.14": case "172.33.42.15":
			document.getElementById("rackIPAct").value = "MONITOREO ATMOSFÉRICO DATOS";
			break;
		case "172.33.42.21":
			document.getElementById("rackIPAct").value = "SALA DIRECTORADO ";
			break;
		case "172.33.42.26":
			document.getElementById("rackIPAct").value = "CONMUTADOR";
			break;
		case "172.33.42.28": case "172.33.42.29":
			document.getElementById("rackIPAct").value = "ADMINISTRATIVO";
			break;
		case "172.33.42.30":
			document.getElementById("rackIPAct").value = "CAPACITACIÓN";
			break;
		case "172.33.42.254":
			document.getElementById("rackIPAct").value = "SW CORE";
			break;
		default:
			break;
	}
});

function guardarIPUserBD() {
	let nombreCompletoIPNew = document.getElementById("nombreCompletoIPNew").value;
	let hostEquipoIpNew = document.getElementById("hostEquipoIpNew").value;
	let nodoRedIPNew = document.getElementById("nodoRedIPNew").value.trim();
	let vlanIPNew = document.getElementById("vlanIPNew").value.trim();
	let puertoIPNew = document.getElementById("puertoIPNew").value.trim();
	let rackIPNew = document.getElementById("rackIPNew").value.trim();
	let switchIPNew = document.getElementById("switchIPNew").value.trim();
	let comentarioIPNew = document.getElementById("comentarioIPNew").value.trim();
	let IPNew = document.getElementById("IPNew").value.trim();

	if (nombreCompletoIPNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'Tiene que seleccionar un usuario.',
		})
	} else if (hostEquipoIpNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'Tiene que seleccionar un equipo.',
		})
	} else if (IPNew == "" || nodoRedIPNew == "" || puertoIPNew.length <= 7 || switchIPNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'Tiene que llenar toda la información de red.',
		})
	} else {
		Swal.fire({
			title: '¿Estás seguro de registrar la nueva IP? ',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Guardar',
			cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.isConfirmed) {
				params = {
					"IP": IPNew,
					"Nodo_red": nodoRedIPNew,
					"equipoExt": hostEquipoIpNew,
					"idUsuario": nombreCompletoIPNew,
					"idResguardante": nombreCompletoIPNew,
					"VLAN": vlanIPNew,
					"Puerto_Switch": puertoIPNew,
					"Switch": switchIPNew,
					"Rack": rackIPNew,
					"Comentario": comentarioIPNew
				}
				params = JSON.stringify(params);

				$.ajax({
					url: 'http://172.29.60.126/SIT/apiSIT/api/concentrado/create.php',
					type: 'POST',
					data: params,
					async: false,
					contentType: 'application/json',
					dataType: 'text',
					success: function (respuesta) {
						if (respuesta == "IP creada exitosamente.") {
							paramsBitacora = {
								"idUsuario": UsuarioEditor,
								"IPConexion": IPVisitante,
								"TipoOperacion": 8
							}

							paramsBitacora = JSON.stringify(paramsBitacora);

							$.ajax({
								url: 'http://172.29.60.126/SIT/apiSIT/api/bitacora/create.php',
								type: 'POST',
								data: paramsBitacora,
								async: false,
								contentType: 'application/json',
								dataType: 'text'
							});

							Swal.fire({
								title: 'IP registrada con éxito',
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

function limpiarNuevaIP() {
	document.getElementById("nombreCompletoIPNew").value = "";
	document.getElementById("hostEquipoIpNew").value = "";
	document.getElementById("nodoRedIPNew").value = "";
	document.getElementById("vlanIPNew").value = "";
	document.getElementById("puertoIPNew").value = "";
	document.getElementById("rackIPNew").value = "";
	document.getElementById("switchIPNew").value = "";
	document.getElementById("comentarioIPNew").value = "";
	document.getElementById("IPNew").value = "";
	document.getElementById("impresoraName").value = "";
	document.getElementById("IPNewPrint").value = "";
	document.getElementById("nodoRedIPNewPrint").value = "";
	document.getElementById("vlanIPNewPrint").value = "";
	document.getElementById("puertoIPNewPrint").value = "";
	document.getElementById("switchIPNewPrint").value = "";
	document.getElementById("rackIPNewPrint").value = "";
	document.getElementById("comentarioIPNewPrint").value = "";
}

function guardarIPPrintBD() {
	let nombreCompletoIPNew = document.getElementById("impresoraName").value;

	let IPNew = document.getElementById("IPNewPrint").value.trim();
	let nodoRedIPNew = document.getElementById("nodoRedIPNewPrint").value.trim();
	let vlanIPNew = document.getElementById("vlanIPNewPrint").value.trim();
	let puertoIPNew = document.getElementById("puertoIPNewPrint").value.trim();
	let switchIPNew = document.getElementById("switchIPNewPrint").value.trim();
	let rackIPNew = document.getElementById("rackIPNewPrint").value.trim();

	let comentarioIPNew = document.getElementById("comentarioIPNewPrint").value.trim();
	comentarioIPNew = "Área: " + comentarioIPNew;

	if (nombreCompletoIPNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'Tiene que seleccionar una impresora.',
		})
	} else if (IPNew == "" || nodoRedIPNew == "" || puertoIPNew.length <= 7 || switchIPNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'Tiene que llenar toda la información de red.',
		})
	} else {
		Swal.fire({
			title: '¿Estás seguro de registrar la nueva IP? ',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Guardar',
			cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.isConfirmed) {
				params = {
					"IP": IPNew,
					"Nodo_red": nodoRedIPNew,
					"equipoExt": nombreCompletoIPNew,
					"idUsuario": '',
					"idResguardante": '',
					"VLAN": vlanIPNew,
					"Puerto_Switch": puertoIPNew,
					"Switch": switchIPNew,
					"Rack": rackIPNew,
					"Comentario": comentarioIPNew
				}
				params = JSON.stringify(params);
				console.log(params);
				$.ajax({
					url: 'http://172.29.60.126/SIT/apiSIT/api/concentrado/create.php',
					type: 'POST',
					data: params,
					async: false,
					contentType: 'application/json',
					dataType: 'text',
					success: function (respuesta) {
						if (respuesta == "IP creada exitosamente.") {
							paramsBitacora = {
								"idUsuario": UsuarioEditor,
								"IPConexion": IPVisitante,
								"TipoOperacion": 8
							}

							paramsBitacora = JSON.stringify(paramsBitacora);

							$.ajax({
								url: 'http://172.29.60.126/SIT/apiSIT/api/bitacora/create.php',
								type: 'POST',
								data: paramsBitacora,
								async: false,
								contentType: 'application/json',
								dataType: 'text'
							});

							Swal.fire({
								title: 'IP registrada con éxito',
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

function guardarIPServerBD() {
	let IPNew = document.getElementById("IPNewServer").value.trim();
	let nodoRedIPNew = document.getElementById("nodoRedIPNewServer").value.trim();
	let vlanIPNew = document.getElementById("vlanIPNewServer").value.trim();
	let puertoIPNew = document.getElementById("puertoIPNewServer").value.trim();
	let switchIPNew = document.getElementById("switchIPNewServer").value.trim();
	let rackIPNew = document.getElementById("rackIPNewServer").value.trim();

	let comentarioIPNew = document.getElementById("comentarioIPNewServer").value.trim();

	if (comentarioIPNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'Tiene que ingresar información en el nombre del servidor.',
		})
	} else if (IPNew == "" || nodoRedIPNew == "" || puertoIPNew.length <= 7 || switchIPNew == "") {
		Swal.fire({
			icon: 'error',
			title: 'Tiene que llenar toda la información de red.',
		})
	} else {
		Swal.fire({
			title: '¿Estás seguro de registrar la nueva IP? ',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Guardar',
			cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.isConfirmed) {
				params = {
					"IP": IPNew,
					"Nodo_red": nodoRedIPNew,
					"equipoExt": '',
					"idUsuario": '',
					"idResguardante": '',
					"VLAN": vlanIPNew,
					"Puerto_Switch": puertoIPNew,
					"Switch": switchIPNew,
					"Rack": rackIPNew,
					"Comentario": comentarioIPNew
				}
				params = JSON.stringify(params);
				console.log(params);
				$.ajax({
					url: 'http://172.29.60.126/SIT/apiSIT/api/concentrado/create.php',
					type: 'POST',
					data: params,
					async: false,
					contentType: 'application/json',
					dataType: 'text',
					success: function (respuesta) {
						if (respuesta == "IP creada exitosamente.") {
							paramsBitacora = {
								"idUsuario": UsuarioEditor,
								"IPConexion": IPVisitante,
								"TipoOperacion": 8
							}

							paramsBitacora = JSON.stringify(paramsBitacora);

							$.ajax({
								url: 'http://172.29.60.126/SIT/apiSIT/api/bitacora/create.php',
								type: 'POST',
								data: paramsBitacora,
								async: false,
								contentType: 'application/json',
								dataType: 'text'
							});

							Swal.fire({
								title: 'IP registrada con éxito',
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

let ipsParaActualizar = {};
$('#buscarActIP').on('change', function (e) {
	limpiarActualizarIP();

	let valorBuscar = document.getElementById('buscarActIP').value;

	$.ajax({
		type: "POST",
		url: "http://172.29.60.126/SIT/apiSIT/api/concentrado/buscarIPEdit.php?Comentario=" + valorBuscar + "",
		success: function (response) {
			if (response.length == 1) {
				console.log(response);
				document.getElementById("IPActPadre").style.display = "none";
				IPActEncontradarever = document.getElementById("IPActEncontrada").value = response[0].IP;
				nodoRedIPActrever = document.getElementById("nodoRedIPAct").value = response[0].Nodo_red;
				vlanIPActrever = document.getElementById("vlanIPAct").value = response[0].VLAN;
				puertoIPActrever = document.getElementById("puertoIPAct").value = response[0].Puerto_Switch;
				switchIPActrever = document.getElementById("switchIPAct").value = response[0].Switch;
				rackIPActrever = document.getElementById("rackIPAct").value = response[0].Rack;
				comentarioIPActrever = document.getElementById("comentarioIPAct").value = response[0].Comentario;
				idConcentradoAct = document.getElementById("idConcentradoAct").value = response[0].idConcentrado;

				document.getElementById("botonesActualizarIP").style.display = "block";
				document.getElementById("btnExtraUserAct").style.display = "block";
				document.getElementById("btnExtraEquipoAct").style.display = "block";
				/*
			if (response[0].idUsuario != null && IPActEncontradarever.search("Área: ") == -1) {
				document.getElementById("btnExtraUserAct").style.display = "block";
			} else {
				document.getElementById("btnExtraUserAdd").style.display = "none";
			}

			if (response[0].equipoExt != null) {
				document.getElementById("btnExtraEquipoAct").style.display = "block";
			} else {
				document.getElementById("btnExtraEquipoAdd").style.display = "none";
			}
*/
				document.getElementById('nombreUserAct').value = response[0].idUsuario;
				document.getElementById('hostEquipoIpAct').value = response[0].equipoExt;

			} else {
				document.getElementById("IPActPadre").style.display = "block";
				ipsParaActualizar = response;
				$("#IPAct").empty();

				let optionVacia = document.createElement("option");
				optionVacia.setAttribute("value", "");
				let optionVaciaTexto = document.createTextNode("Seleccione:");
				optionVacia.appendChild(optionVaciaTexto);
				document.getElementById('IPAct').appendChild(optionVacia);

				for (let i = 0; i < response.length; i++) {
					let option = document.createElement("option");
					option.setAttribute("value", response[i].idConcentrado);
					let optionTexto = document.createTextNode(response[i].IP);
					option.appendChild(optionTexto);
					document.getElementById('IPAct').appendChild(option);
				}
			}
		}
	});
});

let IPActEncontradarever, nodoRedIPActrever, vlanIPActrever, puertoIPActrever, switchIPActrever, rackIPActrever, comentarioIPActrever, nombreUserActrever;
$('#IPAct').on('change', function (e) {
	let valorIP = document.getElementById('IPAct').value;

	for (let i = 0; i < ipsParaActualizar.length; i++) {
		if (ipsParaActualizar[i].idConcentrado == valorIP) {
			IPActEncontradarever = document.getElementById("IPActEncontrada").value = ipsParaActualizar[i].IP;
			nodoRedIPActrever = document.getElementById("nodoRedIPAct").value = ipsParaActualizar[i].Nodo_red;
			vlanIPActrever = document.getElementById("vlanIPAct").value = ipsParaActualizar[i].VLAN;
			puertoIPActrever = document.getElementById("puertoIPAct").value = ipsParaActualizar[i].Puerto_Switch;
			switchIPActrever = document.getElementById("switchIPAct").value = ipsParaActualizar[i].Switch;
			rackIPActrever = document.getElementById("rackIPAct").value = ipsParaActualizar[i].Rack;
			comentarioIPActrever = document.getElementById("comentarioIPAct").value = ipsParaActualizar[i].Comentario;

			/*
			if (ipsParaActualizar[i].idUsuario != null && IPActEncontradarever.search("Área: ") == -1) {
				document.getElementById("btnExtraUserAct").style.display = "block";
			} else {
				document.getElementById("btnExtraUserAdd").style.display = "none";
			}

			if (ipsParaActualizar[i].equipoExt != null) {
				document.getElementById("btnExtraEquipoAct").style.display = "block";
			} else {
				document.getElementById("btnExtraEquipoAdd").style.display = "none";
			}*/

			document.getElementById("btnExtraUserAct").style.display = "block";
			document.getElementById("btnExtraEquipoAct").style.display = "block";

			document.getElementById('nombreUserAct').value = ipsParaActualizar[i].idUsuario;
			document.getElementById('hostEquipoIpAct').value = ipsParaActualizar[i].equipoExt;
		}
	}

	document.getElementById("botonesActualizarIP").style.display = "block";
});

function limpiarActualizarIP() {
	document.getElementById("IPActEncontrada").value = '';
	document.getElementById("nodoRedIPAct").value = '';
	document.getElementById("vlanIPAct").value = '';
	document.getElementById("puertoIPAct").value = '';
	document.getElementById("switchIPAct").value = '';
	document.getElementById("rackIPAct").value = '';
	document.getElementById("comentarioIPAct").value = '';
	document.getElementById("IPActEncontradaPrint").value = '';
	document.getElementById("nodoRedIPActPrint").value = '';
	document.getElementById("vlanIPActPrint").value = '';
	document.getElementById("puertoIPActPrint").value = '';
	document.getElementById("switchIPActPrint").value = '';
	document.getElementById("rackIPActPrint").value = '';
	document.getElementById("comentarioIPActPrint").value = '';
	document.getElementById("botonesActualizarIP").style.display = "none";
	document.getElementById("botonesActualizarIPPrint").style.display = "none";
	document.getElementById("btnExtraUserAct").style.display = "none";
	document.getElementById("btnExtraEquipoAct").style.display = "none";
	document.getElementById("btnExtraUserAdd").style.display = "none";
	document.getElementById("btnExtraEquipoAdd").style.display = "none";
}

function revertirActualizarIP() {
	document.getElementById("IPActEncontrada").value = IPActEncontradarever;
	document.getElementById("nodoRedIPAct").value = nodoRedIPActrever;
	document.getElementById("vlanIPAct").value = vlanIPActrever;
	document.getElementById("puertoIPAct").value = puertoIPActrever;
	document.getElementById("switchIPAct").value = switchIPActrever;
	document.getElementById("rackIPAct").value = rackIPActrever;
	document.getElementById("comentarioIPAct").value = comentarioIPActrever;
}

function actualizarIPBD() {
	let IPActEncontrada = document.getElementById("IPActEncontrada").value;
	let nodoRedIPAct = document.getElementById("nodoRedIPAct").value;
	let vlanIPAct = document.getElementById("vlanIPAct").value;
	let puertoIPAct = document.getElementById("puertoIPAct").value;
	let switchIPAct = document.getElementById("switchIPAct").value;
	let rackIPAct = document.getElementById("rackIPAct").value;
	let comentarioIPAct = document.getElementById("comentarioIPAct").value;
	let nombreUserAct = document.getElementById("nombreUserAct").value;
	let hostEquipoIpAct = document.getElementById("hostEquipoIpAct").value;
	let idConcentradoAct = document.getElementById("idConcentradoAct").value;

	if (nombreUserAct == "") {
		Swal.fire({
			icon: 'error',
			title: 'Tiene que seleccionar un usuario.',
		})
	} else if (hostEquipoIpAct == "") {
		Swal.fire({
			icon: 'error',
			title: 'Tiene que seleccionar un equipo.',
		})
	} else if (IPActEncontrada == "" || nodoRedIPAct == "" || puertoIPAct.length <= 7 || switchIPAct == "") {
		Swal.fire({
			icon: 'error',
			title: 'Tiene que llenar toda la información de red.',
		})
	} else {
		Swal.fire({
			title: '¿Estás seguro de actualizar la IP? ',
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Guardar',
			cancelButtonText: 'Cancelar'
		}).then((result) => {
			if (result.isConfirmed) {
				params = {
					"IP": IPActEncontrada,
					"Nodo_red": nodoRedIPAct,
					"equipoExt": hostEquipoIpAct,
					"idUsuario": nombreUserAct,
					"VLAN": vlanIPAct,
					"Puerto_Switch": puertoIPAct,
					"Switch": switchIPAct,
					"Rack": rackIPAct,
					"Comentario": comentarioIPAct,
					"idConcentrado": idConcentradoAct
				}
				params = JSON.stringify(params);
				console.log(params);

				$.ajax({
					url: 'http://172.29.60.126/SIT/apiSIT/api/concentrado/update.php',
					type: 'POST',
					data: params,
					async: false,
					contentType: 'application/json',
					dataType: 'text',
					success: function (respuesta) {
						if (respuesta == "IP actualizada con exito.") {
							paramsBitacora = {
								"idUsuario": UsuarioEditor,
								"IPConexion": IPVisitante,
								"TipoOperacion": 10
							}

							paramsBitacora = JSON.stringify(paramsBitacora);

							$.ajax({
								url: 'http://172.29.60.126/SIT/apiSIT/api/bitacora/create.php',
								type: 'POST',
								data: paramsBitacora,
								async: false,
								contentType: 'application/json',
								dataType: 'text'
							});

							Swal.fire({
								title: 'IP actualizada con éxito',
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

function checkEditUserIp() {
	/*switch (opcion) {
		case 1:*/
	if ($('#ActUserYes').prop('checked')) {
		document.getElementById("nombreUserActDiv").style.display = "block";
	} else {
		document.getElementById("nombreUserActDiv").style.display = "none";
	}/*
			break;
		case 2:
			if ($('#ActUserYes').prop('checked')) {
				document.getElementById("nombreUserActDiv").style.display = "block";
			} else {
				document.getElementById("nombreUserActDiv").style.display = "none";
			}
			break;
		default:
			break;
	}*/
}

function checkEditPCIp() {
	switch (opcion) {
		case 1:
			if ($('#ActEquipoYes').prop('checked')) {
				document.getElementById("hostEquipoIpActDiv").style.display = "block";
			} else {
				document.getElementById("hostEquipoIpActDiv").style.display = "none";
			} break;
		case 2:
			if ($('#ActUserYes').prop('checked')) {
				document.getElementById("hostEquipoIpActPrint").style.display = "block";
			} else {
				document.getElementById("hostEquipoIpActPrint").style.display = "none";
			}
			break;
		default:
			break;
	}
}

$('#impresoraNameAct').on('change', function (e) {
	limpiarActualizarIP();

	let valorBuscar = document.getElementById('impresoraNameAct').value;

	$.ajax({
		type: "POST",
		url: "http://172.29.60.126/SIT/apiSIT/api/concentrado/buscarIPEdit.php?Comentario=" + valorBuscar + "",
		success: function (response) {
			if (response.length == 1) {
				console.log(response);
				document.getElementById("IPActPadrePrint").style.display = "none";
				IPActEncontradareverPrint = document.getElementById("IPActEncontradaPrint").value = response[0].IP;
				nodoRedIPActreverPrint = document.getElementById("nodoRedIPActPrint").value = response[0].Nodo_red;
				vlanIPActreverPrint = document.getElementById("vlanIPActPrint").value = response[0].VLAN;
				puertoIPActreverPrint = document.getElementById("puertoIPActPrint").value = response[0].Puerto_Switch;
				switchIPActreverPrint = document.getElementById("switchIPActPrint").value = response[0].Switch;
				rackIPActreverPrint = document.getElementById("rackIPActPrint").value = response[0].Rack;
				comentarioIPActreverPrint = document.getElementById("comentarioIPActPrint").value = response[0].Comentario;
				idConcentradoActPrint = document.getElementById("idConcentradoActPrint").value = response[0].idConcentrado;

				document.getElementById("botonesActualizarIPPrint").style.display = "block";
				document.getElementById("btnExtraEquipoAct").style.display = "block";
				/*
			if (response[0].idUsuario != null && IPActEncontradarever.search("Área: ") == -1) {
				document.getElementById("btnExtraUserAct").style.display = "block";
			} else {
				document.getElementById("btnExtraUserAdd").style.display = "none";
			}

			if (response[0].equipoExt != null) {
				document.getElementById("btnExtraEquipoAct").style.display = "block";
			} else {
				document.getElementById("btnExtraEquipoAdd").style.display = "none";
			}
*/
				document.getElementById('hostEquipoIpActPrint').value = response[0].equipoExt;

			} else {
				document.getElementById("IPActPadrePrint").style.display = "block";
				ipsParaActualizar = response;
				$("#IPAcPrintt").empty();

				let optionVacia = document.createElement("option");
				optionVacia.setAttribute("value", "");
				let optionVaciaTexto = document.createTextNode("Seleccione:");
				optionVacia.appendChild(optionVaciaTexto);
				document.getElementById('IPAcPrintt').appendChild(optionVacia);

				for (let i = 0; i < response.length; i++) {
					let option = document.createElement("option");
					option.setAttribute("value", response[i].idConcentrado);
					let optionTexto = document.createTextNode(response[i].IP);
					option.appendChild(optionTexto);
					document.getElementById('IPAcPrintt').appendChild(option);
				}
			}
		}
	});
});

let IPActEncontradareverPrint, nodoRedIPActreverPrint, vlanIPActreverPrint, puertoIPActreverPrint, switchIPActreverPrint, rackIPActreverPrint, comentarioIPActreverPrint;
$('#IPAcPrintt').on('change', function (e) {
	let valorIP = document.getElementById('IPAcPrintt').value;

	for (let i = 0; i < ipsParaActualizar.length; i++) {
		if (ipsParaActualizar[i].idConcentrado == valorIP) {
			IPActEncontradareverPrint = document.getElementById("IPActEncontradaPrint").value = ipsParaActualizar[i].IP;
			nodoRedIPActreverPrint = document.getElementById("nodoRedIPActPrint").value = ipsParaActualizar[i].Nodo_red;
			vlanIPActreverPrint = document.getElementById("vlanIPActPrint").value = ipsParaActualizar[i].VLAN;
			puertoIPActreverPrint = document.getElementById("puertoIPActPrint").value = ipsParaActualizar[i].Puerto_Switch;
			switchIPActreverPrint = document.getElementById("switchIPActPrint").value = ipsParaActualizar[i].Switch;
			rackIPActreverPrint = document.getElementById("rackIPActPrint").value = ipsParaActualizar[i].Rack;
			comentarioIPActreverPrint = document.getElementById("comentarioIPActPrint").value = ipsParaActualizar[i].Comentario;

			/*
			if (ipsParaActualizar[i].idUsuario != null && IPActEncontradarever.search("Área: ") == -1) {
				document.getElementById("btnExtraUserAct").style.display = "block";
			} else {
				document.getElementById("btnExtraUserAdd").style.display = "none";
			}

			if (ipsParaActualizar[i].equipoExt != null) {
				document.getElementById("btnExtraEquipoAct").style.display = "block";
			} else {
				document.getElementById("btnExtraEquipoAdd").style.display = "none";
			}*/

			document.getElementById("btnExtraEquipoAct").style.display = "block";

			document.getElementById('hostEquipoIpActPrint').value = ipsParaActualizar[i].equipoExt;
		}
	}

	document.getElementById("botonesActualizarIPPrint").style.display = "block";
});

/* IP Actualizar */
