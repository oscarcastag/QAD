$(document).ready(function () {
    consultaAlumnos(); //consulta Alumnos
    $('#abreAspirantes').click();//simular clic para abrir modal aspirantes
    $("search:first").focus();
});

function consultaAlumnos() {
    $("#TablaAlumnos").html('<div class="alert alert-info"><strong>Espere</strong> Cargando Contenido ... Esta acción puede tardar unos momentos <i class="pe-7s-config pe-spin pe-2x pe-va"></i></div>');
    $.ajax({
        type: "GET",
        url: "dataConect/API.php",
        data: "action=getcardAlumno",
        success: function (text) {
            console.log(text.data);
            var date = text.data;
            var txt = "";
            console.log(date);
            txt += '<div class="table-responsive"> <table id="solpx5" class="table table-striped table-bordered table-hover table-sm dt-responsive nowrap">';
            txt += '<thead class="table-primary text-light"><tr><th>Código</th><th>Nombre</th><th>Apellido Paterno</th><th>Apellido Materno</th><th>Carrera</th><th>Matricula</th><th>Turno</th><th>Cuatrimestre</th><th>% Beca</th><th>Categoria</th></tr> </thead>';
            for (x in date) {
                txt += "<tr><td>" + date[x].idialumno + "</td>";
                txt += "<td>" + date[x].nombre + "</td>";
                txt += "<td>" + date[x].apellido_paterno + "</td>";
                txt += "<td>" + date[x].apellido_materno + "</td>";
                txt += "<td>" + date[x].carrera + "</td>";
                txt += "<td>" + date[x].matricula + "</td>";
                txt += "<td>" + date[x].turno + "</td>";
                txt += "<td>" + date[x].cuatrimestre + "</td>";
                txt += "<td>" + date[x].beca_colegiatura + "</td>";
                txt += "<td>" + date[x].categoria + "</td>";
                txt += "</tr>";
            }
            txt += "</table> </div>"
            document.getElementById("TablaAlumnos").innerHTML = txt;
            var table = $('#solpx5').DataTable({responsive: true});

            $('#solpx5 tbody').on('click', 'tr', function () {
                var datos = table.row(this).data();
                var cuatrimestre = parseInt(datos[7]);
                var promovido = cuatrimestre + 1;
                //alert(datos[0]);
                $("#idialumno").val(datos[0]);
                $("#nombre").val(datos[1]);
                $("#apellido_paterno").val(datos[2]);
                $("#apellido_materno").val(datos[3]);
                $("#carrera").val(datos[4]);
                $("#matricula").val(datos[5]);
                $("#turno").val(datos[6]);
                $("#cuatrimestre").val(cuatrimestre);
                $("#beca_colegiatura").val(datos[8]);
                $("#categoria").val(datos[9]);
                $("#promovido").val(promovido);
                $("#promovido").attr({
                    "max": promovido, // substitute your own
                    "min": cuatrimestre          // values (or variables) here
                });
                $("#alumno .close").click()
            });
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
            //alert("No fue posible conectar con el servidor");
            document.getElementById("TablaAlumnos").innerHTML = "0 alumnos inscritos";
        }
    });
}
