Select * from area;
Select * from gerencia;
Select * from puesto;
Select * from persona;
Select * from usuarioconagua;
Select * from empleado;
---
Select *, e.idEmpleado, uc.Id_empleado, p.Nombre_persona, uc.Usuario_Conagua, uc.Correo_Conagua, p.CURP, pu.NombrePuesto, g.NombreGerencia, a.NombreArea from empleado e
inner join persona p on p.idPersona = e.idPersona
inner join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua
inner join puesto pu on pu.idPuesto= e.idPuesto
inner join area a on a.idArea = e.idArea
inner join gerencia g on g.idGerencia= e.idGerencia
order by e.idEmpleado;

Select * from empleado;

---
Select idUsuario, us.Contasena, e.idEmpleado, uc.Id_empleado, p.Nombre_persona, p.CURP, pu.NombrePuesto, g.NombreGerencia, a.NombreArea from usuario us
inner join empleado e on e.idEmpleado = us.idEmpleado
inner join persona p on p.idPersona = e.idPersona
inner join usuarioconagua uc on uc.idUsuarioConagua= e.idUsuarioConagua
inner join puesto pu on pu.idPuesto= e.idPuesto
inner join area a on a.idArea = e.idArea
inner join gerencia g on g.idGerencia= e.idGerencia;

Select * from usuario;

---
Select * from tipodispositivo; 
Select * from datosextrasdispositivo; 
Select * from dispositivo;

---
Select e.idEquipo, td.Nombre, td.Descripcion, de.Marca, de.Modelo, d.Host_Name, d.Numero_Serie, d.Id_CONAGUA from equipo e
inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
inner join dispositivo d on d.idDispositivo= e.idDispositivo;

Select * from equipo;
---
Select * from monitor;

Select e.idEquipo, td.Nombre, td.Descripcion,de.Marca, de.Modelo, d.Host_Name, d.Numero_Serie, d.Id_CONAGUA, m.Numero_Serie Monitor from equipocompleto eP
inner join equipo e on e.idEquipo = eP.idEquipo
inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
inner join dispositivo d on d.idDispositivo= e.idDispositivo
inner join monitor m on m.idMonitor= eP.idMonitor;

Select * from equipocompleto;
---
Select * from concentrado;
---
Select Rack, IP, Nodo_red, VLAN, Puerto_Switch, Switch, d.Host_Name, d.Numero_Serie, Id_empleado, Usuario_Conagua, Nombre_persona, td.Nombre Equipo, td.Descripcion, Comentario from concentrado con
left join equipo e on e.idEquipo = con.equipoExt
left join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
left join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
left join dispositivo d on d.idDispositivo= e.idDispositivo
left join empleado emp on emp.idEmpleado = con.idUsuario
left join persona p on p.idPersona = emp.idPersona
left join usuarioconagua uc on uc.idUsuarioConagua= emp.idUsuarioConagua
left join puesto pu on pu.idPuesto= emp.idPuesto
left join area a on a.idArea = emp.idArea
left join gerencia g on g.idGerencia= emp.idGerencia;

---
Select * from concentradotelefonos;
---
SELECT idconcentradoTelefonos, ipTelefono, Modelo, Numero_Serie, Numero Extension, p.Nombre_persona, ct.Comentarios FROM tics.concentradotelefonos ct
left join equipo e on e.idEquipo = ct.idEquipo
left join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
left join extension ext on ext.idExtension= ct.idExtension
left join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
left join dispositivo d on d.idDispositivo= e.idDispositivo
left join empleado em on em.idEmpleado= ct.idEmpleado
left join persona p on p.idPersona = em.idPersona;