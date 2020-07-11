###CENTRO EXCURSIONISTA


Nuestro centro excursionista está formado por secciones (senderismo, escalada, alta montaña, BTT...) y los socios pueden pertenecer a ninguna o a tantas secciones como deseen.Toda la información sobre los socios y secciones está almacenada en una base de datos relacional:



![diseño bbdd](https://github.com/davidtrigo/CentroExcursionista/blob/master/img/bbdd.PNG "diseño bbdd")


Hemos decidido implementar un API Restful para que pueda acceder a los datos desde nuestra aplicación de escritorio actual, pero también desde la próxima aplicación web que implementaremos y desde una futura APP para dispositivos móviles.

###Se pide:

Se dividirá la entrega en cuatro fases:

Primera

Definir la interface (método, URL, parámetros...) que presentará el API para poder acceder a los recursos en los siguientes casos:
1. Obtener todos los socios. Se puede filtrar por nombre.
2. Obtener un socio concreto.
3. Obtener todas las secciones.
4. Crear un socio nuevo.
5. Modificar los datos de un socio. Esto también incluye las secciones a las que pertenece.
6. Borrar un socio

Segunda

Crear la base de datos con algunos datos de prueba.

Tercera


Implementar el API definido en el primer apartado. Para ello hay que tener en cuenta que se tiene que:
- Usar el framework SLIM.
- Seguir la restricción [HATEOAS](https://es.wikipedia.org/wiki/Hateoas "HATEOAS")

- Pedir credenciales de acceso para poder usar el API. (Sólo tendremos un usuario user con contraseña secreto). Para ello usaremos la autenticación básica de [HTTP](https://es.wikipedia.org/wiki/Autenticaci%C3%B3n_de_acceso_b%C3%A1sica "HTTP")   a través del middleware [slim-basic-auth](https://github.com/tuupola/slim-basic-auth "slim-basic-auth")

Cuarta

Crear una documentación en formato web para los usuarios del API. Podéis tomar como ejemplo el API de [twitter]( https://developer.twitter.com/en/docs/api-reference-index "twitter") o [google+](https://developers.google.com/+/web/api/rest/latest/ "google+"), entre otros.


Enunciado de la prueba de evaluación continuada 1 del curso de Desarrollo de aplicaciones con tecnología web del módulo 3, Programación web en entorno servidor de la unidad formativa Desarrollo de aplicaciones web distribuidas.

 
