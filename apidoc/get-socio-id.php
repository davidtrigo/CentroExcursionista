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
                    <div class="panel-title"><strong>GET /socio/excursionistasAPI/{id}</strong></div>
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
                                <td>Se obtiene un socio concreto</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                            <tr>

                                <th>Autenticación</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Requiere de autenticación</td>
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
                                <td>id</td>
                                <td>Parámetro que indica el id del socio</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table">
                            <thead>
                            <tr>
                                <th>Ejemplo de petición</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>/excursionistasAPI/socio/5</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Resultado de petición</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
<td><pre>
 {
    "0": {
        "ID": "5",
        "NOMBRE": "Ruben",
        "EMAIL": "ruben@gmail.com"
     },
    "secciones": [
        "https://centroexcursionista.davidtrigo.com/excursionistas/api/seccion/1",
        "https://centroexcursionista.davidtrigo.com/excursionistas/api/seccion/2",
        "https://centroexcursionista.davidtrigo.com/excursionistas/api/seccion/4",
        "https://centroexcursionista.davidtrigo.com/excursionistas/api/seccion/6"
    ]
}
</pre> </td>
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