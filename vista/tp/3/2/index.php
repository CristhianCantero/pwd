<?php
$titulo = "TP3 - EJ2";
include_once '../../../estructura/cabecera.php';
?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="card bg-dark text-white rounded-3 mt-3 mb-3">
                <div class="card-body p-4">
                    <figure class="mb-0">
                        <blockquote class="blockquote">
                            <p class="bp-2 fs-6">
                                Crear un formulario que permita subir un archivo. En el servidor se deberá controlar que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su contenido en un textarea.
                            </p>
                        </blockquote>
                    </figure>
                </div>
            </div>

            <form class="needs-validation" novalidate action="mostrarContenido.php" method="post" enctype="multipart/form-data" name="formulario1">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="archivo">Seleccione un archivo</label>
                        <input type="file" name="archivo" id="archivo" accept=".txt" required>
                        <div class="invalid-feedback">Por favor, subir un archivo!</div>
                    </div>
                </div>
                <button class="btn btn-primary" type="submit">Enviar</button>
            </form>
        </div>
    </div>
</div>

<?php
include_once '../../../estructura/pie.php';
?>