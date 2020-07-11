###CENTRO EXCURSIONISTA

Composer install


Nuestro centro excursionista est� formado por secciones (senderismo, escalada, alta monta�a, BTT�) y los socios pueden pertenecer a ninguna o a tantas secciones como deseen.Toda la informaci�n sobre los socios y secciones est� almacenada en una base de datos relacional:



![dise�o bbdd](C:\xampp\htdocs\excursionistas\img\bbdd.PNG "dise�o bbdd")


Hemos decidido implementar un API Restful para que pueda acceder a los datos desde nuestra aplicaci�n de escritorio actual, pero tambi�n desde la pr�xima aplicaci�n web que implementaremos y desde una futura APP para dispositivos m�viles.

###Se pide�

Se dividir� la entrega en cuatro fases:

Primera

Definir la interface (m�todo, URL, par�metros...) que presentar� el API para poder acceder a los recursos en los siguientes casos:
1. Obtener todos los socios. Se puede filtrar por nombre.
2. Obtener un socio concreto.
3. Obtener todas las secciones.
4. Crear un socio nuevo.
5. Modificar los datos de un socio. Esto tambi�n incluye las secciones a las que pertenece.
6. Borrar un socio

Segunda

Crear la base de datos con algunos datos de prueba.

Tercera


Implementar el API definido en el primer apartado. Para ello hay que tener en cuenta que se tiene que:
- Usar el framework SLIM.
- Seguir la restricci�n [HATEOAS](https://es.wikipedia.org/wiki/Hateoas "HATEOAS")

- Pedir credenciales de acceso para poder usar el API. (S�lo tendremos un usuario user con contrase�a secreto). Para ello usaremos la autenticaci�n b�sica de [HTTP](https://es.wikipedia.org/wiki/Autenticaci%C3%B3n_de_acceso_b%C3%A1sica "HTTP")   a trav�s del middleware [slim-basic-auth](https://github.com/tuupola/slim-basic-auth "slim-basic-auth")

Cuarta

Crear una documentaci�n en formato web para los usuarios del API. Pod�is tomar como ejemplo el API de [twitter]( https://developer.twitter.com/en/docs/api-reference-index "twitter") o [google+](https://developers.google.com/+/web/api/rest/latest/ "google+"), entre otros.


Enunciado de la prueba de evaluaci�n continuada 1 del curso de Desarrollo de aplicaciones con tecnolog�a web del m�dulo 3, Programaci�n web en entorno servidor de la unidad formativa Desarrollo de aplicaciones web distribuidas.

 