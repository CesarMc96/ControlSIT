SELECT * FROM tics.concentradotelefonos;

SELECT *, idconcentradoTelefonos, ipTelefono, Modelo, Numero_Serie, Numero Extension, p.Nombre_persona, ct.Comentarios FROM tics.concentradotelefonos ct
left join equipo e on e.idEquipo = ct.idEquipo
left join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
left join extension ext on ext.idExtension= ct.idExtension
left join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
left join dispositivo d on d.idDispositivo= e.idDispositivo
left join empleado em on em.idEmpleado= ct.idEmpleado
left join persona p on p.idPersona = em.idPersona;


SELECT idconcentradoTelefonos, ct.idExtension, ext.Numero Extension, ct.idEmpleado, p.Nombre_persona, ct.Comentarios FROM tics.concentradotelefonos ct
left join equipo e on e.idEquipo = ct.idEquipo
left join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
left join extension ext on ext.idExtension= ct.idExtension
left join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
left join dispositivo d on d.idDispositivo= e.idDispositivo
left join empleado em on em.idEmpleado= ct.idEmpleado
left join persona p on p.idPersona = em.idPersona 