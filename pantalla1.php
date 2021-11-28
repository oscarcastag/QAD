<?php include 'headers.php'; ?>
<style>
    #resultado {
        background-color: red;
        color: white;
        font-weight: bold;
    }
    #resultado.ok {
        background-color: green;
    }
</style>
<div class="card">
    <div class="card-body">
        <form role="form" id="contactForm" data-toggle="validator" class="shake" autocomplete="off">
            <div>
                <div class="d-flex">
                    <div class="p-2 mr-auto">
                        <div class="page-header-title">
                            <i class="pe-7s-add-user bg-c-pink"></i>
                            <div class="d-inline">
                                <h4>Orden de Venta</h4>
                                <span><a href="menu.php"><p class="pe-7s-back-2"></p> Regresar</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card card-border-success">
                    <div class="card-body">
                        <h5>Datos Orden Venta</h5>
                        <div class="row">
                            <div class="col-sm-3">

                                    <div class="form-group">
                                        <label for="so_nbr">Orden</label>
                                        <input type="text" class="form-control" id="so_nbr" name="so_nbr" placeholder="Ingrese OV" required maxlength="10" >
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>

                            </div>
                            <div class="col-sm-3">

                                    <div class="form-group">
                                        <label for="so_cust">Vendido</label>
                                        <input type="text" class="form-control" id="so_cust" name="so_cust" placeholder="Ingrese Vendido A" required maxlength="10" >
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>

                            </div>
                            <div class="col-sm-3">

                                    <div class="form-group">
                                        <label for="so_bill">Facturar</label>
                                        <input type="text" class="form-control" id="so_bill" name="so_bill" placeholder="Ingrese Facturar A" maxlength="10" required >
                                        <div class="help-block with-errors text-danger"></div>
                                    </div>
                       
					<div class="row">
							<div class="col-sm-3">
            </div>
            <button type="submit" id="form-submit" class="btn btn-success btn-lg pull-right ">Guardar datos</button>
            <div id="msgSubmit" class="h3 text-center hidden"></div>
            <div class="clearfix"></div>
        </form>
    </div>
</div>

<?php include './footer.php'; ?>

<script>
    $(document).ready(function () {
        $("#so_ord_date").change(function (e) {
            var vals = e.target.value.split('-');
            var year = vals[0];
            var month = vals[1];
            var day = vals[2];
            var d = new Date();
            var n = d.getFullYear();
            var edad = n - year;
            console.info(edad);
            $("#edad").val(edad);
            //console.info(day, month, year);
        });
    });
    function validarInput(input) {
        var curp = input.value.toUpperCase(),
                resultado = document.getElementById("resultado"),
                valido = "No válido";
        if (curpValida(curp)) {
            valido = "Válido";
            resultado.classList.add("ok");
        } else {
            resultado.classList.remove("ok");
        }
        // resultado.innerText = "CURP: " + curp + "\nFormato: " + valido;
        resultado.innerText = "Formato: " + valido;
    }

    function curpValida(curp) {
        var re = /^([A-Z][AEIOUX][A-Z]{2}\d{2}(?:0\d|1[0-2])(?:[0-2]\d|3[01])[HM](?:AS|B[CS]|C[CLMSH]|D[FG]|G[TR]|HG|JC|M[CNS]|N[ETL]|OC|PL|Q[TR]|S[PLR]|T[CSL]|VZ|YN|ZS)[B-DF-HJ-NP-TV-Z]{3}[A-Z\d])(\d)$/,
                validado = curp.match(re);
        if (!validado)  //Coincide con el formato general?
            return false;
        //Validar que coincida el dígito verificador
        function digitoVerificador(curp17) {
            //Fuente https://consultas.curp.gob.mx/CurpSP/
            var diccionario = "0123456789ABCDEFGHIJKLMNÑOPQRSTUVWXYZ",
                    lngSuma = 0.0,
                    lngDigito = 0.0;
            for (var i = 0; i < 17; i++)
                lngSuma = lngSuma + diccionario.indexOf(curp17.charAt(i)) * (18 - i);
            lngDigito = 10 - lngSuma % 10;
            if (lngDigito == 10)
                return 0;
            return lngDigito;
        }
        if (validado[2] != digitoVerificador(validado[1]))
            return false;
        return true; //Validado
    }
</script>
<script>
    // This sample uses the Autocomplete widget to help the user select a
    // place, then it retrieves the address components associated with that
    // place, and then it populates the form fields with those details.
    // This sample requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script
    // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;

    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search predictions to
        // geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
                document.getElementById('autocomplete'), {types: ['geocode']});

        // Avoid paying for data that you don't need by restricting the set of
        // place fields that are returned to just the address components.
        autocomplete.setFields('address_components');

        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle(
                        {center: geolocation, radius: position.coords.accuracy});
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCABXOLbXlqxpYVeGDggtlghS5DLASUCxU&libraries=places&callback=initAutocomplete"
async defer></script>
<script src="asset/js/profesor.js"></script>