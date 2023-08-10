<link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#tblUsuarios').DataTable({
            /*columns: [
                { width: '5%' }
            ],
                    rowGroup: {
                        dataSrc: 12
                    },
                    */
            pageLength: 10,
            "language": {
                "info": "Existen _TOTAL_ usuarios registrados",
                "search": "Buscar:",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "infoEmpty": "Mostrando 0 registros",
                "paginate": {
                    "first": "Primera",
                    "last": "Ultima",
                    "next": "Siguiente",
                    "previous": "Anterior",
                }
            },
            "bLengthChange": true,
            "oLanguage": {
                "sLengthMenu": "Mostrar _MENU_ usuarios",
            },
            "ordering": false
        });
    });

    $(document).ready(function() {
        $('#tblEquipos').DataTable({
            /*columns: [
                { width: '5%' }
            ],
                    rowGroup: {
                        dataSrc: 12
                    },
                    */
            pageLength: 10,
            "language": {
                "info": "Existen _TOTAL_ equipos registrados",
                "search": "Buscar:",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "infoEmpty": "Mostrando 0 registros",
                "paginate": {
                    "first": "Primera",
                    "last": "Ultima",
                    "next": "Siguiente",
                    "previous": "Anterior",
                }
            },
            "bLengthChange": true,
            "oLanguage": {
                "sLengthMenu": "Mostrar _MENU_ equipos",
            },
            "ordering": false
        });
    });

    $(document).ready(function() {
        $('#tblTelefonos').DataTable({
            /*columns: [
                { width: '5%' }
            ],
                    rowGroup: {
                        dataSrc: 12
                    },
                    */
            pageLength: 10,
            "language": {
                "info": "Existen _TOTAL_ teléfonos registrados",
                "search": "Buscar:",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "infoEmpty": "Mostrando 0 registros",
                "paginate": {
                    "first": "Primera",
                    "last": "Ultima",
                    "next": "Siguiente",
                    "previous": "Anterior",
                }
            },
            "bLengthChange": true,
            "oLanguage": {
                "sLengthMenu": "Mostrar _MENU_ teléfonos",
            },
            "ordering": false
        });
    });

    $(document).ready(function() {
        $('#tblIP').DataTable({
            /*columns: [
                { width: '5%' }
            ],
                    rowGroup: {
                        dataSrc: 12
                    },
                    */
            pageLength: 10,
            "language": {
                "info": "Existen _TOTAL_ IPs registradas",
                "search": "Buscar:",
                "sZeroRecords": "No se encontraron resultados",
                "sEmptyTable": "Ningún dato disponible en esta tabla",
                "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                "infoEmpty": "Mostrando 0 registros",
                "paginate": {
                    "first": "Primera",
                    "last": "Ultima",
                    "next": "Siguiente",
                    "previous": "Anterior",
                }
            },
            "bLengthChange": true,
            "oLanguage": {
                "sLengthMenu": "Mostrar _MENU_ IPs",
            },
            "ordering": false
        });
    });
</script>

<style>
    .dataTables_wrapper .dataTables_paginate .paginate_button.current,
    .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
        border: 1px solid #979797;
        background: white;
        border-radius: 100%;
    }

    .dataTables_wrapper .dataTables_paginate .paginate_button {
        background: white;
        border-radius: 100%;
    }
</style>