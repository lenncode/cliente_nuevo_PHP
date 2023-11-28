<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro Clientes</title>
    <script type="text/javascript" src="public/js/bootstrap5.min.js"></script>
    <link rel="stylesheet" href="public/css/bootstrap5.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<h1>Registro Clientes</h1>
<div class="container" style="margin-top: 4%"></div>
<div class="container" style="margin-top: 1%">
    <form action="" id="id_form" method="post">
        <div class="col-md-12" style="margin-top: 2%">
            <div class="row">
                <div class="form-group col-md-6">
                    <label class="control-label" for="id_telefono">Teléfono</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-boxes"></i></span><input
                                class="form-control" type="text" id="id_telefono"
                                name="numero" autocomplete="off">
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="control-label" for="id_tipoSala">Tipo de Plan</label>
                    <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_tipoSala"
                                                                                          name="tipo_plan_id"
                                                                                          class='form-control'>
                            <option value="">[Seleccione]</option>
                            <option value="1">Ilimitado</option>
                            <option value="2">Regular</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-md-12" style="margin-top: 2%">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label class="control-label" for="id_tipo_documento">Tipo De Documento</label>
                        <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_tipo_documento"
                                                                                          name="tipo_documento_id"
                                                                                          class='form-select'>
                                <option value="">[Seleccione]</option>
                                <option value="1">DNI</option>
                                <option value="2">RUC</option>
                                <option value="3">CE</option>
                                <option value="4">Pasaporte</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label" for="id_numero_documento">N&uacute;mero
                            de Documento</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-boxes"></i></span><input
                                    class="form-control" type="text" id="id_numero_documento"
                                    name="numero_documento" autocomplete="off"
                            >
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="form-group col-md-6">
                        <label class="control-label" for="id_nombres">Nombres</label>
                        <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-bar-chart-steps"></i></span> <input class="form-control"
                                                                                         type="text" id="id_nombres"
                                                                                         name="nombres"
                            >
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label" for="id_apellidos">Apellidos</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-people"></i></span><input
                                    class="form-control" type="text" id="id_apellidos"
                                    name="apellidos">
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="form-group col-md-6">
                        <label class="control-label" for="id_nivel_uno">Nivel 1</label>
                        <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_nivel_uno"
                                                                                          name="nivel_1_id"
                                                                                          class='form-control'>
                                <option value="">[Seleccione]</option>
                                <option value="1">Contacto Efectivo</option>
                                <option value="2">Contacto no efectivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label class="control-label" disabled="true" for="id_nivel_dos">Nivel 2</label>
                        <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_nivel_dos"
                                                                                          name="nivel_2_id"
                                                                                          class='form-control'>
                                <option value="">[Seleccione]</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                            </select>
                        </div>
                    </div>

                </div>
                <div class="row">

                    <div class="form-group col-md-6">
                        <label class="control-label" disabled="" for="id_nivel_tres">Nivel 3</label>
                        <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_nivel_tres"
                                                                                          name="nivel_3_id"
                                                                                          class='form-control'>
                                <option value="">[Seleccione]</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="form-group col-md-6" id="id_nro_sn_div">
                        <label class="control-label" for="id_nro_sn">Nro. SN</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-boxes"></i></span><input
                                    class="form-control" type="text" id="id_nro_sn"
                                    name="N_SN" autocomplete="off"
                            >
                        </div>
                    </div>

                    <div class="form-group col-md-6" id="id_activacion_inmediata_div">
                        <label class="control-label" for="id_activacion_inmediata">Activaci&oacute;n Inmediata</label>
                        <div class="input-group">
							<span class="input-group-text"><i
                                        class="bi bi-box2-heart-fill"></i></span> <select id="id_activacion_inmediata"
                                                                                          name="act_inmediata_id"
                                                                                          class='form-control'>
                                <option value="">[Seleccione]</option>
                                <option value="1">SI</option>
                                <option value="2">NO</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-12">
                        <label class="control-label" for="id_observaciones">Observaciones</label>
                        <div class="form-outline">
                            <textarea class="form-control" name="observaciones" id="id_observaciones"
                                      rows="4"></textarea>
                        </div>
                        <div class="text-right">
                            <span class="valid-text pt-1" id="txaCount"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-12">
                        <input id="id_registrar" type="submit" name="registroCliente"
                               class="btn btn-primary  btn-block" value="Registrar">

                        <button id="id_salir" type="button"
                                class="btn btn-secondary  btn-block">Cancelar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?php
    include("controllers/registroClienteController.php")
    ?>
</div>
</div>
<script type="text/javascript">
    // Función para manejar el cambio en el select id_nivel_uno
    function handleNivelUnoChange() {
        var nivelUno = document.getElementById("id_nivel_uno").value;
        var nivelDos = document.getElementById("id_nivel_dos");
        var nivelTres = document.getElementById("id_nivel_tres");

        // Limpiar los selects nivel_dos y nivel_tres
        nivelDos.innerHTML = '<option value="">[Seleccione]</option>';
        nivelTres.innerHTML = '<option value="">[Seleccione]</option>';

        // Mostrar opciones según el valor seleccionado en id_nivel_uno
        if (nivelUno === "1") {
            // Agregar opciones para nivel_dos si nivelUno es 1
            nivelDos.innerHTML += '<option value="1">Venta</option>';
            nivelDos.innerHTML += '<option value="2">Agendado</option>';
        } else if (nivelUno === "2") {
            // Agregar opciones para nivel_dos si nivelUno es 2
            nivelDos.innerHTML += '<option value="1">No venta</option>';
            nivelDos.innerHTML += '<option value="2">No llamar</option>';
        }
    }

    // Función para manejar el cambio en el select id_nivel_dos
    function handleNivelDosChange() {
        var nivelDos = document.getElementById("id_nivel_dos");
        var nivelTres = document.getElementById("id_nivel_tres");

        // Limpiar el select nivel_tres
        nivelTres.innerHTML = '<option value="">[Seleccione]</option>';

        // Mostrar opciones según el valor seleccionado en id_nivel_dos
        var nivelDosValue = nivelDos.value;
        if (nivelDosValue === "1") {
            // Agregar opciones para nivel_tres si nivelDos es 1 (Venta)
            nivelTres.innerHTML += '<option value="1">Acepta upgrade</option>';
        } else if (nivelDosValue === "2") {
            // Agregar opciones para nivel_tres si nivelDos es 2 (Agendado)
            nivelTres.innerHTML += '<option value="1">Renovación de equipo</option>';
            nivelTres.innerHTML += '<option value="2">Acepta upgrade + Renovación de equipo</option>';
            nivelTres.innerHTML += '<option value="3">Cliente interesado</option>';
        }
    }

    // Agregar eventos de cambio a los selects id_nivel_uno y id_nivel_dos
    document.getElementById("id_nivel_uno").addEventListener("change", handleNivelUnoChange);
    document.getElementById("id_nivel_dos").addEventListener("change", handleNivelDosChange);

    // Llamar a la función handleNivelUnoChange al cargar la página para manejar el estado inicial
    handleNivelUnoChange();
</script>
<script type="text/javascript">
    // Función para manejar el cambio en el select id_tipo_documento
    function handleTipoDocumentoChange() {
        var tipoDocumento = document.getElementById("id_tipo_documento").value;
        var activacionInmediata = document.getElementById("id_activacion_inmediata_div");
        var nroSn = document.getElementById("id_nro_sn_div");

        // Restablecer la visibilidad de ambos divs
        activacionInmediata.classList.add("hidden");
        nroSn.classList.add("hidden");

        // Mostrar los divs según el valor seleccionado en id_tipo_documento
        if (tipoDocumento === "1") {
            nroSn.classList.remove("hidden");
        } else if (tipoDocumento === "2") {
            activacionInmediata.classList.remove("hidden");
        }
        // Puedes agregar más condiciones según tus necesidades para los otros valores de id_tipo_documento
    }

    // Agregar un evento de cambio al select id_tipo_documento
    document.getElementById("id_tipo_documento").addEventListener("change", handleTipoDocumentoChange);

    // Llamar a la función handleTipoDocumentoChange al cargar la página para manejar el estado inicial
    handleTipoDocumentoChange();
</script>

</body>
</html>