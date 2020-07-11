<!DOCTYPE html>
<html>
<head>
    <title>API</title>
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

        <div class="col-lg-10 col-md-10">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">DELETE/excursionistas/socio/{id}</div>
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
                                <td>Borra un socio </td>
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
                                <td>id</td>
                                <td>Parametro que indica el id del socio.Obligatorio</td>
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
                                <td>/excursionistaAPI/socio/8</td>
                                <td></td>
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
<pre>[
"se ha eliminado al socio de manera sastifactoria"
]
</pre>
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