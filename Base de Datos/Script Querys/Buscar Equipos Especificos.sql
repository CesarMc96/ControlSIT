Select idEquipoCompleto, e.idEquipo, td.Nombre, td.Descripcion,de.Marca, de.Modelo, d.Host_Name, d.Numero_Serie, d.Id_CONAGUA, m.Numero_Serie Monitor from equipocompleto eP
inner join equipo e on e.idEquipo = eP.idEquipo
inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
inner join dispositivo d on d.idDispositivo= e.idDispositivo
inner join monitor m on m.idMonitor= eP.idMonitor
/*where e.idEquipo = "188"
where d.Numero_Serie like "%yl00ydae%"     */
where d.Host_Name = "MT0001l1047";

Select * from dispositivo
where Host_Name = "MT0001W1148";

Select e.idEmpleado, uc.Id_empleado, p.Nombre_persona, uc.Usuario_Conagua, uc.Numero_Extension, uc.Correo_Conagua, p.CURP, pu.NombrePuesto, g.NombreGerencia, a.NombreArea from empleado e
inner join persona p on p.idPersona = e.idPersona
inner join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua
inner join puesto pu on pu.idPuesto= e.idPuesto
inner join area a on a.idArea = e.idArea
inner join gerencia g on g.idGerencia= e.idGerencia
WHERE p.Nombre_persona like "%martin%"
order by e.idEmpleado;

------------------------

Select e.idEquipo, td.Nombre, td.Descripcion,de.Marca, de.Modelo, d.Host_Name, d.Numero_Serie, d.Id_CONAGUA from equipo e
inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
inner join dispositivo d on d.idDispositivo= e.idDispositivo where idEquipo >=183;


Select * from monitor where idMonitor > 204;