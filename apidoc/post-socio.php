<!DOCTYPE html>
<html>
<head>
    <?php include "head.html" ?>
</head>
<body>
<div class="header">
    <div class="container">
        <?php include "nav-bar.html" ?>
    </div>
</div>

<div class="page-content">
    <div class="row">

            <?php include "menu.html" ?>

        <div class="col-lg-9 col-md-10">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title"><strong>POST /excursionistas/socio/</strong></div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>

                                <th>Descripcion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Crea un socio </td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                            <tr>

                                <th>Autenticacion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requiere de autenticacion</td>
                            </tr>
                            </tbody>
                        </table>


                        <table class="table">
                            <thead>
                            <tr>
                                <th>Parametros</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td>nombre</td>
                                <td>Parametro que indica el nombre del socio.Obligatorio</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>Parametro que indica el email del socio.Obligatorio</td>
                            </tr>

                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Ejemplo de peticion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>/excursionistaAPI/socio/</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>nombre</td>
                                <td>John Doe</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>jdoe@mail.com</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Resultado de peticion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <pre>
{
    "0": {
    "ID": "12",
    "NOMBRE": "John Doe",
    "EMAIL": "jode@gmail.com"
    },
    "secciones": []
}</pre>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<footer>
    <?php include "footer.html" ?>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>