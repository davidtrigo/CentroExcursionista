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
                    <div class="panel-title"><strong>GET /excursionistasAPI/socio/</strong></div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Descripción</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Se obtiene un listado de todos los socios junto a las secciones inscritas por cada uno de los socios. Se puede filtrar por el nombre del socio.</td>
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
                                <th>Parámetros</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>busqueda</td>
                                <td>Indica la cadena a buscar. Parámetro opcional.</td>
                            </tr>

                            </tbody>
                        </table>


                        <table class="table">
                            <thead>
                            <tr>
                                <th>Ejemplo de petición con parámetro</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>/excursionistaAPI/socio/?busqueda=o</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Resultado de petición con parámetro</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
 <pre>
[
    {
        "ID": "2",
        "NOMBRE": "Pedro",
        "EMAIL": "pedro@gmail.com",
        "secciones": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/3",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/4",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/7",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/8"
        ]
    },
    {
        "ID": "3",
        "NOMBRE": "Antonio",
        "EMAIL": "antonio@gmail.com",
        "secciones": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/2",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/5"
        ]
    },
    {
        "ID": "9",
        "NOMBRE": "Jose",
        "EMAIL": "jose@gmail.com",
        "secciones": []
    },
    {
        "ID": "10",
        "NOMBRE": "Tomás",
        "EMAIL": "tomas@gmail.com",
        "secciones": []
    }
]
 </pre>
                                </td>
                            </tr>
                            </tbody>
                        </table>


                        <table class="table">
                            <thead>
                            <tr>
                                <th>Ejemplo de petición sin parámetro</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>/excursionistaAPI/socio/</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Resultado de la petición sin parámetro</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                   <pre>
[
    {
        "ID": "1",
        "NOMBRE": "Juan",
        "EMAIL": "juan@gmail.com",
        "secciones": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/2",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/4",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/6"
        ]
    },
    {
        "ID": "2",
        "NOMBRE": "Pedro",
        "EMAIL": "pedro@gmail.com",
        "secciones": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/3",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/4",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/7",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/8"
        ]
    },
    {
        "ID": "3",
        "NOMBRE": "Antonio",
        "EMAIL": "antonio@gmail.com",
        "secciones": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/2",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/5"
        ]
    },
    {
        "ID": "4",
        "NOMBRE": "Maria",
        "EMAIL": "maria@gmail.com",
        "secciones": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/3",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/5",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/6"
        ]
    },
    {
        "ID": "5",
        "NOMBRE": "Ruben",
        "EMAIL": "ruben@gmail.com",
        "secciones": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/2",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/4",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/6"
        ]
    },
    {
        "ID": "6",
        "NOMBRE": "Manuel",
        "EMAIL": "manuel@gmail.com",
        "secciones": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/3",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/4",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/6"
        ]
    },
    {
        "ID": "7",
        "NOMBRE": "Marta",
        "EMAIL": "marta@gmail.com",
        "secciones": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/2",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/5",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/6"
        ]
    },
    {
        "ID": "8",
        "NOMBRE": "Abel",
        "EMAIL": "abel@gmail.com",
        "secciones": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/3",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/5",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/seccion/7"
        ]
    },
    {
        "ID": "9",
        "NOMBRE": "Jose",
        "EMAIL": "jose@gmail.com",
        "secciones": []
    },
    {
        "ID": "10",
        "NOMBRE": "Tomás",
        "EMAIL": "tomas@gmail.com",
        "secciones": []
    }
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