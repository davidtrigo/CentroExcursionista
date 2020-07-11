<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- styles -->
    <link href="css/styles.css" rel="stylesheet">

   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

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
                    <div class="panel-title">SOCIO</div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>metodo</th>
                                <th>descripcion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="get-socio.php">GET /excursionistasAPI/socio/</a></td>
                                <td>Se obtiene un listado de todos los socios junto a las secciones inscritas por cada uno de los socios. Se puede filtrar por el nombre del socio.</td>
                            </tr>
                            <tr>
                                <td><a href="get-socio-id.php">GET /excursionistasAPI/socio/{id}</a></td>
                                <td>Se obtiene un socio concreto</td>
                            </tr>
                            <tr>
                                <td><a href="put-socio.php">PUT /excursionistasAPI/socio/</a></td>
                                <td>Crea un socio</td>
                            </tr>
                            <tr>
                                <td><a href="post-socio.php">POST /excursionistasAPI/socio/</a></td>
                                <td>Actualiza los datos de un socio</td>
                            </tr>
                            <tr>
                                <td><a href="delete-socio.php">DELETE /excursionistasAPI/socio/</a></td>
                                <td>Borra los datos de un socio</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-heading">
                    <div class="panel-title">SECCION</div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>metodo</th>
                                <th>descripcion</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="get-seccion.php">GET /excursionistasAPI/seccion/</a></td>
                                <td>Se obtiene un listado de todas las secciones junto a los socios inscrito en cada una de ellas.</td>
                            </tr>
                            <tr>
                                <td><a href="get-seccion-id.php">GET /excursionistasAPI/seccion/{id}</a></td>
                                <td>Se obtiene una seccion concreta junto a los socios inscrito en ella.</td>
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