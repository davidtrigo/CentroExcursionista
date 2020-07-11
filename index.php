<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>API CENTRO EXCURSIONISTA</title>
</head>

<body>
<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#">API CENTRO EXCURSIONISTA</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>
<br><br><br><br><br><br><br><br><br><br>
<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Centro excursionista</h1>
        <p class="lead">PRUEBA DE EVALUACION CONTINUADA</p>
        <hr class="my-4">
        <p>Centro excursionista que está por secciones (senderismo, escalada, alta montaña,BTT…) y los socios pueden pertenecer a ninguna o a tantas secciones como deseen</p>
        <p>Se solicita hacer una API RESTFUL  que se pueda accederf  a los recursos en lso siguientes casos</p>
        <ul>
            <li>Obtener todos los socios. Se puede filtrar por nombre.</li>
            <li>Obtener un socio concreto.</li>
            <li>Obtener todas las secciones.</li>
            <li>Crear un socio nuevo.</li>
            <li>Modificar los datos de un socio. Esto también incluye las secciones a las que pertenece.</li>
            <li>Borrar un socio.</li>
        </ul>
        <a class="btn btn-primary btn-lg" href="http://localhost/excursionistas/api/socio/" role="button">SOCIO</a>
        <a class="btn btn-primary btn-lg" href="http://localhost/excursionistas/api/seccion/" role="button">SECCION</a>

        <a class="btn btn-primary btn-lg" href="http://localhost/excursionistas/apidoc/" role="button">API</a>
    </div>
</div>




<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
