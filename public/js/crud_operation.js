$(document).ready(function() {
    listClient();
    var table = $('#visitorListing').dataTable({
        "bPaginate": false,
        "bInfo": false,
        "bFilter": false,
        "bLengthChange": false,
        "pageLength": 5,
        "searching": true,
        "paging": false,
        language: {
            search: "Buscar:"
        }

    });
    // list all Visitors in datatable
    function listClient() {
        $.ajax({
            type: 'ajax',
            url: 'client/show',
            async: false,
            dataType: 'json',
            success: function(data) {
                var html = '';
                var i;
                for (i = 0; i < data.length; i++) {
                    html += '<tr id="' + data[i].id + '">' +
                        '<td>' + data[i].codigo + '</td>' +
                        '<td>' + data[i].nombre + '</td>' +
                        '<td>' + data[i].correo + '</td>' +
                        '<td style="text-align:center">' + data[i].telefono + '</td>' +
                        '<td style="text-align:center">' + data[i].fecha_nacimiento + '</td>' +
                        '<td style="text-align:center">' + data[i].puntos_acumulados + '</td>' +
                        '<td style="text-align:right;">' +
                        '<a href="javascript:void(0);" class="btn btn-info btn-sm viewRecord" data-id="' + data[i].id + '" data-codigo="' + data[i].codigo + '" data-nombre="' + data[i].nombre + '" data-correo="' + data[i].correo + '" data-telefono="' + data[i].telefono + '" data-fecha_nacimiento="' + data[i].fecha_nacimiento + '" data-puntos_acumulados="' + data[i].puntos_acumulados + '">Ver</a>' + ' ' +
                        '<a href="javascript:void(0);" class="btn btn-info btn-sm editRecord" data-id="' + data[i].id + '" data-codigo="' + data[i].codigo + '" data-nombre="' + data[i].nombre + '" data-correo="' + data[i].correo + '" data-telefono="' + data[i].telefono + '" data-fecha_nacimiento="' + data[i].fecha_nacimiento + '">Modificar</a>' + ' ' +
                        '<a href="javascript:void(0);" class="btn btn-danger btn-sm deleteRecord" data-id="' + data[i].id + '">Borrar</a>' +
                        '</td>' +
                        '</tr>';
                }
                $('#listRecords').html(html);
            }

        });
    }

});