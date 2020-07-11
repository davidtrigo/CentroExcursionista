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

        <div class="col-lg-9 col-md-10">
            <div class="content-box-large">
                <div class="panel-heading">
                    <div class="panel-title">GET/seccion</div>
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
                                <td>Se obtiene un listado de todas las secciones junto a los socios inscrito en cada una de ellas.</td>
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
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>No se requiere de ningún parametro</td>
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
                                <td>/excursionistaAPI/seccion/</td>
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
[
    {
        "ID": "1",
        "NOMBRE": "Senderismo",
        "DESCRIPCION": " Consiste en realizar rutas a pie previamente señalizadas y con poco riesgo (baja montaña). El senderismo parte del excursionismo y tomó forma desde el siglo XIX. Suele durar un día o poco más.",
        "socios": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/2",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/3",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/4",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/5",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/6",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/7",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/8"
        ]
    },
    {
        "ID": "2",
        "NOMBRE": "Escalada",
        "DESCRIPCION": "  Actividad que consiste en realizar ascensos sobre paredes de fuerte pendiente, valiéndose de la fuerza física y mental propia. Se considera escalada todo ascenso ya sea fácil, difícil o imposible de realizar (según el estado físico de la persona) con las extremidades inferiores (pies y piernas; en algunos casos también se podría llegar a utilizar la rodilla, por si hubiera alguna pared al lado) y las extremidades superiores (brazos y manos).",
        "socios": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/3",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/5",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/7"
        ]
    },
    {
        "ID": "3",
        "NOMBRE": "BTT",
        "DESCRIPCION": "Caminos y sendas en las dos orillas del río Ebro nos dan la posibilidad de elegir el desnivel y la dificultad. Desde un sencillo paseo junto al río Ebro, por una agradable y bonita ruta de baja dificultad, hasta salidas de media jornada o jornada completa recorriendo la sierra de Árcena o el Parque natural de Valderejo.",
        "socios": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/2",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/4",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/6",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/8"
        ]
    },
    {
        "ID": "4",
        "NOMBRE": "Alta montaña",
        "DESCRIPCION": " Ascenso de picos. Coronar un pico siempre es motivo de satisfacción para el excursionista. En los Pirineos catalanes hay varias montañas míticas que oscilan alrededor de los tres mil metros de altura, asequibles a montañeros avezados como los picos Peguera (2.938 m), Monestero (2.877 m), Pedraforca (2.506 m) y Pica d'Estats (3.143 m), y otras aptas para todos los públicos como Puigmal (2.910 m), Puigpedrós (2.914 m) y Bastiments (2.881 m).",
        "socios": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/2",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/5",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/6"
        ]
    },
    {
        "ID": "5",
        "NOMBRE": "Barranquismo",
        "DESCRIPCION": "Deporte de aventura que se practica en los cañones o barrancos de un río, pudiendo presentar un recorrido muy variado: se encuentran terrenos de vegetación o desérticos. En el equipamiento, la persona debe tener como mínimo, un casco, un traje de neopreno , escarpines de neopreno, calzado adecuado, bloqueadores mecánicos, pedal, navaja, silbato y mochila",
        "socios": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/3",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/4",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/7",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/8"
        ]
    },
    {
        "ID": "6",
        "NOMBRE": "Montañismo",
        "DESCRIPCION": " Consiste en ascender montañas a pie, generalmente teniendo como meta llegar a su cumbre. Las travesías tienen más riesgo y requieren una mayor preparación. Dependiendo de la altitud y dificultad de la ruta se diferencia entre travesías de media montaña y de alta montaña (a partir de 2.500 m.).",
        "socios": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/1",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/4",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/5",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/6",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/7"
        ]
    },
    {
        "ID": "7",
        "NOMBRE": "Espeleología",
        "DESCRIPCION": "Se refiere a los recorridos que tienen por objetivo incursionar en cavernas sin fines científicos. Actualmente existe un debate en la denominación, ya que algunos le llaman a esta actividad espeleología y otros espeleismo, sin embargo el primero es una ciencia y el segundo término, al igual que espeleo, no existen oficialmente en el idioma castellano.",
        "socios": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/2",
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/8"
        ]
    },
    {
        "ID": "8",
        "NOMBRE": "Campismo",
        "DESCRIPCION": " Cuando se realizan acampadas (pernoctes en medio de la naturaleza) como fin principal, esta modalidad se presenta sola o acompañada de otras modalidades. El excursionismo tiene mucha relación con el campismo, ya que este último interviene en muchas excursiones, sobre todo las que requieren pernoctar en el medio natural. Esta interacción se da en dos formas dependiendo de qué actividad sea la principal: Si el objetivo de la actividad es realizar una travesía que implique pernoctar en el medio na",
        "socios": [
            "http://localhost/UF1846_1_DavidTrigo/excursionistasAPI/socio/2"
        ]
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