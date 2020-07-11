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
                    <div class="panel-title"><strong>PUT /excursionistasAPI/socio/</strong></div>
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
                                <td>Actualiza los datos de un socio y sus secciones</td>
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
                                <td>Parametro que indica el id del socio</td>
                            </tr>
                            <tr>
                                <td>nombre</td>
                                <td>Parametro que indica el nombre del socio</td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>Parametro que indica el email del socio</td>
                            </tr>
                            <tr>
                                <td>seccion</td>
                                <td>Parametro que indica la seccion que se quiere de dar de alta o baja al socio</td>
                            </tr>
                            <tr>
                                <td>tipo</td>
                                <td>parametro que indica el tipo de operacion que se va a realizar</td>
                            </tr>
                            </tbody>
                        </table>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Valores del parametro tipo</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>A</td>
                                <td>Indica que se va hacer un alta a una seccion al usuario. Es obligatorio indicar el
                                    tipo,el id y seccion
                                </td>
                            </tr>
                            <tr>
                                <td>B</td>
                                <td>Indica que se va hacer una baja a una seccion al usuario. Es obligatorio indicar el
                                    tipo,el id y seccion
                                </td>
                            </tr>
                            <tr>
                                <td>C</td>
                                <td>Indica que se va hacer una actualizacion de los datos del usuario. Es obligatorio
                                    indicar el tipo,id y necesario indicar el nombre y/o email
                                </td>
                            </tr>
                            </tbody>
                        </table>


                        <table class="table">
                            <thead>
                            <tr>
                                <th>Ejemplo de petición de alta de una sección a un usuario</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>tipo</td>
                                <td>A
                                </td>
                            </tr>
                            <tr>
                                <td>id</td>
                                <td>3
                                </td>
                            </tr>
                            <tr>
                                <td>seccion</td>
                                <td>4</td>
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
    "Se ha dado de alta al socio de la seccion solicitada "
]
</pre>

                                </td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table " >
                            <thead>
                            <tr>
                                <th  colspan="2">Ejemplo de petición de baja de una sección a un usuario</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>tipo</td>
                                <td>B
                                </td>
                            </tr>
                            <tr>
                                <td>id</td>
                                <td>3
                                </td>
                            </tr>
                            <tr>
                                <td>seccion</td>
                                <td>4</td>
                            </tr>
                            </tbody>
                        </table>

                        <table class="table ">
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
    "Se ha dado de baja al socio de la seccion solicitada "
]
</pre>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <table  class="table ">
                            <thead>
                            <tr>
                                <th  colspan="2">Ejemplo de petición de cambio de los datos un usuario</th>

                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>tipo</td>
                                <td>C
                                </td>
                            </tr>
                            <tr>
                                <td>id</td>
                                <td>3
                                </td>
                            </tr>
                            <tr>
                                <td>email</td>
                                <td>nuevo@gmail.com</td>
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
    "Email actualizado"
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