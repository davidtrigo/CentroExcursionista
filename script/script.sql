

CREATE DATABASE IF NOT EXISTS CENTRO_EXCURSIONISTA;

USE  CENTRO_EXCURSIONISTA;

CREATE TABLE SECCION(
  ID INT  PRIMARY KEY AUTO_INCREMENT,
  NOMBRE VARCHAR(50) NOT NULL,
  DESCRIPCION VARCHAR(500) NOT NULL UNIQUE
);



CREATE TABLE SOCIO(
  ID INT PRIMARY KEY AUTO_INCREMENT,
  NOMBRE VARCHAR(50) NOT NULL,
  EMAIL VARCHAR(50) NOT NULL  UNIQUE
);




CREATE TABLE SEC_SOC(
ID_SEC INT ,
ID_SOC INT,
PRIMARY KEY(ID_SEC,ID_SOC),
FOREIGN KEY(ID_SEC) REFERENCES SECCION(ID) ON DELETE CASCADE
                                    ON UPDATE CASCADE,

FOREIGN KEY (ID_SOC) REFERENCES SOCIO(ID) ON DELETE CASCADE
                                    ON UPDATE CASCADE
);


INSERT INTO SOCIO(NOMBRE,EMAIL) VALUES('Juan','juan@gmail.com');
INSERT INTO SOCIO(NOMBRE,EMAIL) VALUES('Pedro','pedro@gmail.com');
INSERT INTO SOCIO(NOMBRE,EMAIL) VALUES('Antonio','antonio@gmail.com');
INSERT INTO SOCIO(NOMBRE,EMAIL) VALUES('Maria','maria@gmail.com');
INSERT INTO SOCIO(NOMBRE,EMAIL) VALUES('Ruben','ruben@gmail.com');
INSERT INTO SOCIO(NOMBRE,EMAIL) VALUES('Manuel','manuel@gmail.com');
INSERT INTO SOCIO(NOMBRE,EMAIL) VALUES('Marta','marta@gmail.com');
INSERT INTO SOCIO(NOMBRE,EMAIL) VALUES('Abel','abel@gmail.com');
INSERT INTO SOCIO(NOMBRE,EMAIL) VALUES('Jose','jose@gmail.com');
INSERT INTO SOCIO(NOMBRE,EMAIL) VALUES('Tomás','tomas@gmail.com');

INSERT INTO SECCION(NOMBRE,DESCRIPCION) VALUES('Senderismo',' Consiste en realizar rutas a pie previamente señalizadas y con poco riesgo (baja montaña). El senderismo parte del excursionismo y tomó forma desde el siglo XIX. Suele durar un día o poco más.');
INSERT INTO SECCION(NOMBRE,DESCRIPCION) VALUES('Escalada','  Actividad que consiste en realizar ascensos sobre paredes de fuerte pendiente, valiéndose de la fuerza física y mental propia. Se considera escalada todo ascenso ya sea fácil, difícil o imposible de realizar (según el estado físico de la persona) con las extremidades inferiores (pies y piernas; en algunos casos también se podría llegar a utilizar la rodilla, por si hubiera alguna pared al lado) y las extremidades superiores (brazos y manos).');
INSERT INTO SECCION(NOMBRE,DESCRIPCION) VALUES('BTT','Caminos y sendas en las dos orillas del río Ebro nos dan la posibilidad de elegir el desnivel y la dificultad. Desde un sencillo paseo junto al río Ebro, por una agradable y bonita ruta de baja dificultad, hasta salidas de media jornada o jornada completa recorriendo la sierra de Árcena o el Parque natural de Valderejo.');
INSERT INTO SECCION(NOMBRE,DESCRIPCION) VALUES('Alta montaña',' Ascenso de picos. Coronar un pico siempre es motivo de satisfacción para el excursionista. En los Pirineos catalanes hay varias montañas míticas que oscilan alrededor de los tres mil metros de altura, asequibles a montañeros avezados como los picos Peguera (2.938 m), Monestero (2.877 m), Pedraforca (2.506 m) y Pica d''Estats (3.143 m), y otras aptas para todos los públicos como Puigmal (2.910 m), Puigpedrós (2.914 m) y Bastiments (2.881 m).');
INSERT INTO SECCION(NOMBRE,DESCRIPCION) VALUES('Barranquismo','Deporte de aventura que se practica en los cañones o barrancos de un río, pudiendo presentar un recorrido muy variado: se encuentran terrenos de vegetación o desérticos. En el equipamiento, la persona debe tener como mínimo, un casco, un traje de neopreno , escarpines de neopreno, calzado adecuado, bloqueadores mecánicos, pedal, navaja, silbato y mochila');
INSERT INTO SECCION(NOMBRE,DESCRIPCION) VALUES('Montañismo',' Consiste en ascender montañas a pie, generalmente teniendo como meta llegar a su cumbre. Las travesías tienen más riesgo y requieren una mayor preparación. Dependiendo de la altitud y dificultad de la ruta se diferencia entre travesías de media montaña y de alta montaña (a partir de 2.500 m.).');
INSERT INTO SECCION(NOMBRE,DESCRIPCION) VALUES('Espeleología','Se refiere a los recorridos que tienen por objetivo incursionar en cavernas sin fines científicos. Actualmente existe un debate en la denominación, ya que algunos le llaman a esta actividad espeleología y otros espeleismo, sin embargo el primero es una ciencia y el segundo término, al igual que espeleo, no existen oficialmente en el idioma castellano.');
INSERT INTO SECCION(NOMBRE,DESCRIPCION) VALUES('Campismo',' Cuando se realizan acampadas (pernoctes en medio de la naturaleza) como fin principal, esta modalidad se presenta sola o acompañada de otras modalidades. El excursionismo tiene mucha relación con el campismo, ya que este último interviene en muchas excursiones, sobre todo las que requieren pernoctar en el medio natural. Esta interacción se da en dos formas dependiendo de qué actividad sea la principal: Si el objetivo de la actividad es realizar una travesía que implique pernoctar en el medio natural entonces requerirá acampar, que se volverá una actividad complementaria del excursionismo; si por el contrario, se organiza un campamento en una determinada zona natural en la que se llega sobre todo en vehículos, y este se toma como base para actividades y excursiones por la zona, entonces el excursionismo pasa a ser una actividad complementaria del campamento. Así mismo, existen excursiones sin campamento y campamentos sin excursión en los que sólo se realizan actividades en un lugar fijo.');

INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(1,1);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(1,2);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(1,3);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(1,4);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(1,5);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(1,6);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(1,7);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(1,8);

INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(2,1);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(2,3);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(2,5);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(2,7);

INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(3,2);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(3,4);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(3,6);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(3,8);

INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(4,1);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(4,2);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(4,5);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(4,6);

INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(5,3);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(5,4);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(5,7);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(5,8);

INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(6,1);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(6,4);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(6,5);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(6,6);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(6,7);

INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(7,2);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(7,8);
INSERT INTO SEC_SOC(ID_SEC,ID_SOC) VALUES(8,2);
