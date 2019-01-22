/*drop database colegio;*/
create database colegiodb;
use colegiodb;

create table Profesores(
	idProfesor int auto_increment primary key,
    cedula varchar(10),
    primerNombre varchar(20),
    segundoNombre varchar(20),
    primerApellido varchar(20),
    segundoApellido varchar(20),
    telefono varchar(20),
    email varchar(100),
    usuario varchar(30),
    contrasena varchar(30)
);

create table Materias(
	idMateria int auto_increment primary key,
    nombre varchar(30),
    descripcion varchar(250)
);

create table MateriasProfesors(
	idMateriaProfesor int auto_increment primary key,
	idProfesor int,
    idMateria int,
	fecha date,
	foreign key(idProfesor) references Profesores(idProfesor),
	foreign key(idMateria) references Materias(idMateria)
);

create table Cursos(
	idCurso int auto_increment primary key,
    anio varchar(10),
    paralelo char
);

create table CursosMaterias(
	idCursoMateria int auto_increment primary key,
    idCurso int,
    idMateria int,
	fecha date,
	foreign key(idCurso) references Cursos(idCurso),
	foreign key(idMateria) references Materias(idMateria)
);

create table Pruebas(
	idPrueba int auto_increment primary key,
    tipo varchar(50),
	periodo varchar(50),
    fecha varchar(50),
    calificacion int,
    idCurso int,
    idMateria int,
    idProfesor int,
	foreign key(idCurso) references Cursos(idCurso),
	foreign key(idMateria) references Materias(idMateria),
	foreign key(idProfesor) references Profesores(idProfesor)
    
);

INSERT INTO Curso (idCurso,anio,paralelo) VALUES (1,"SEGUNDO","E"),(2,"SEXTO","A"),(3,"SEGUNDO","B"),(4,"TERCERO","D"),(5,"PRIMERO","E"),(6,"TERCERO","C"),(7,"SEGUNDO","A"),(8,"QUINTO","B"),(9,"TERCERO","D"),(10,"SEGUNDO","C");
INSERT INTO Profesor (idProfesor,cedula,primerNombre,segundoNombre,primerApellido,segundoApellido,telefono,email,usuario,contrasena) VALUES (1,"13203401","Dean","Jessamine","Pate","Guthrie","010-780-8541","metus.Aenean@ultricessitamet.ca","L5S 1L7","TPW75KPY0AF"),(2,"23376648","Scott","Elijah","Harrington","Valencia","068-338-4075","netus@loremluctus.ca","B4C 2J4","DGD55YCL9ES"),(3,"19962677","Marshall","Shelly","Reyes","Adams","077-720-1786","vulputate.mauris.sagittis@lectus.edu","D5S 4V2","ANE65ZUO9SD"),(4,"35725118","Ryder","Colby","Delacruz","Hawkins","077-229-6371","neque@mauris.com","Y2Q 0Q1","MQO24XMF2BL"),(5,"36910606","Conan","Genevieve","Cummings","Goodman","009-034-2050","Donec.feugiat@Maurisvestibulumneque.ca","H3A 1J1","QFX07HJN9HG"),(6,"17890957","Tiger","Cedric","Dudley","Bailey","074-300-2098","tempus.scelerisque.lorem@Nullamscelerisque.net","N0Z 9X5","HMC24NTB4TJ"),(7,"43731067","Jerry","Amena","Snider","Bates","052-143-3921","amet.massa@fringillaestMauris.co.uk","I0J 5U0","NWM06MPE8XQ"),(8,"26276796","Luke","William","Shannon","Gray","003-600-0052","Nunc.mauris.Morbi@aliquetvelvulputate.com","X6V 0X3","BFA15IXZ0TF"),(9,"26466698","Ali","Nash","Hoffman","Craig","060-237-3038","tincidunt.orci@magnisdis.co.uk","Z8U 2E4","SSH56SYS9OR"),(10,"14709309","Warren","Nash","Mann","Little","077-444-0543","mauris.ipsum@Aliquamtincidunt.net","Z5V 2C9","RRU47ZYK0GN");
INSERT INTO Profesor (idProfesor,cedula,primerNombre,segundoNombre,primerApellido,segundoApellido,telefono,email,usuario,contrasena) VALUES (11,"41474970","Chester","Odysseus","Tucker","Craig","052-523-2750","lectus@enim.com","T8M 6I7","KZA32IRQ9SX"),(12,"25402436","Carter","Jerome","Benjamin","Stafford","069-322-5690","fringilla@magnis.com","E2D 4G8","DIS66HGG3ZF"),(13,"38260124","Thomas","Brenden","Prince","Lloyd","020-331-4741","mauris.aliquam.eu@tempusloremfringilla.ca","P4I 7E2","WIJ16BKW1ID"),(14,"46070714","Curran","Isaac","Moss","Davidson","013-186-6860","velit.eu@laciniamattisInteger.ca","P0P 1V7","LZL24JEP7QE"),(15,"42648463","Wade","Desiree","Lopez","Bryant","058-468-4525","tempus@ametfaucibus.ca","A8W 3Q9","OUB23VTH7EN"),(16,"48773194","Lane","Lee","Saunders","England","058-243-3218","lacus.Quisque@urnaVivamusmolestie.com","A2N 6K8","UKC85CJZ4UO"),(17,"44087045","Keith","Elton","Bolton","Wright","072-606-4027","eu@Suspendisseacmetus.ca","M2L 2F7","UTQ86WKG6EF"),(18,"41643062","Randall","Scarlett","Moon","Cannon","004-691-3626","aliquam.iaculis.lacus@duiquis.net","I5O 7G6","ZWE79BXJ1ZL"),(19,"44339032","Brian","Shay","Gallegos","Mcgee","019-702-3528","et.magnis.dis@porttitortellus.net","G7V 7P7","WDP17BKL8ER"),(20,"16250308","Merrill","Taylor","Richards","Lynn","068-203-3464","dolor.nonummy@malesuadaut.net","K3V 5S2","AQU45JCB0TA");
INSERT INTO Materia (idMateria,nombre,descripcion) VALUES (1,"Nóminas","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed"),(2,"Relaciones públicas","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur"),(3,"Soporte técnico","Lorem"),(4,"Departamento legal","Lorem ipsum dolor sit amet, consectetuer"),(5,"Departamento legal","Lorem ipsum dolor sit amet, consectetuer"),(6,"Gestión de activos","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed"),(7,"Investigación y desarrollo","Lorem"),(8,"Gestión de activos","Lorem ipsum"),(9,"Investigación y desarrollo","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed"),(10,"Soporte técnico","Lorem ipsum");
INSERT INTO Materia (idMateria,nombre,descripcion) VALUES (11,"Nóminas","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur"),(12,"Relaciones con los medios","Lorem ipsum dolor sit"),(13,"Gestión de activos","Lorem ipsum dolor sit amet, consectetuer adipiscing elit."),(14,"Investigación y desarrollo","Lorem ipsum dolor sit amet, consectetuer adipiscing elit."),(15,"Departamento legal","Lorem ipsum dolor sit amet, consectetuer adipiscing elit."),(16,"Recursos humanos","Lorem ipsum dolor sit amet, consectetuer"),(17,"Contabilidad","Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur"),(18,"Recursos humanos","Lorem ipsum"),(19,"Departamento legal","Lorem"),(20,"Contabilidad","Lorem ipsum dolor sit amet,");
INSERT INTO MateriaProfesor (idMateriaProfesor,idProfesor,idMateria) VALUES (1,1,1),(2,2,2),(3,3,3),(4,4,4),(5,5,5),(6,6,6),(7,7,7),(8,8,8),(9,9,9),(10,10,10);
INSERT INTO MateriaProfesor (idMateriaProfesor,idProfesor,idMateria) VALUES (11,11,11),(12,12,12),(13,13,13),(14,14,14),(15,15,15),(16,16,16),(17,17,17),(18,18,18),(19,19,19),(20,20,20);
INSERT INTO CursoMateria (idCursoMateria,idCurso,idMateria) VALUES (1,1,1),(2,2,2),(3,3,3),(4,4,4),(5,5,5),(6,6,6),(7,7,7),(8,8,8),(9,9,9),(10,10,10);
INSERT INTO CursoMateria (idCursoMateria,idCurso,idMateria) VALUES (11,1,11),(12,2,12),(13,3,13),(14,4,14),(15,5,15),(16,6,16),(17,7,17),(18,8,18),(19,9,19),(20,10,20);
INSERT INTO Pruebas (idPrueba,tipo,fecha,calificacion,idCurso,idMateria,idProfesor) VALUES (1,"EXAMEN","Feb 3, 2019",100,1,1,1),(2,"EXAMEN","Nov 10, 2018",18,2,2,2),(3,"EXAMEN","Jan 15, 2020",70,3,3,3),(4,"LECCION","Mar 2, 2019",96,4,4,4),(5,"EXAMEN","Dec 19, 2019",5,5,5,5),(6,"LECCION","Aug 21, 2018",86,6,6,6),(7,"LECCION","Mar 26, 2018",41,7,7,7),(8,"LECCION","Mar 4, 2018",46,8,8,8),(9,"EXAMEN","Oct 14, 2018",50,9,9,9),(10,"EXAMEN","Jun 30, 2018",94,10,10,10);
INSERT INTO Pruebas (idPrueba,tipo,fecha,calificacion,idCurso,idMateria,idProfesor) VALUES (11,"LECCION","Nov 29, 2019",80,1,1,1),(12,"EXAMEN","Apr 26, 2019",25,2,2,2),(13,"LECCION","Jul 20, 2018",96,3,3,3),(14,"LECCION","Jun 22, 2018",87,4,4,4),(15,"EXAMEN","Feb 3, 2018",94,5,5,5),(16,"EXAMEN","Feb 20, 2019",69,6,6,6),(17,"LECCION","Sep 23, 2018",4,7,7,7),(18,"LECCION","May 16, 2018",1,8,8,8),(19,"EXAMEN","Feb 23, 2018",93,9,9,9),(20,"EXAMEN","Aug 8, 2019",38,10,10,10);
INSERT INTO Pruebas (idPrueba,tipo,fecha,calificacion,idCurso,idMateria,idProfesor) VALUES (21,"EXAMEN","Oct 9, 2019",64,1,11,11),(22,"LECCION","Feb 7, 2019",1,2,12,12),(23,"EXAMEN","Jul 6, 2019",85,3,13,13),(24,"LECCION","Jul 4, 2018",59,4,14,14),(25,"LECCION","Aug 12, 2019",48,5,15,15),(26,"LECCION","Mar 29, 2018",66,6,16,16),(27,"LECCION","Nov 21, 2019",86,7,17,17),(28,"EXAMEN","Aug 17, 2018",22,8,18,18),(29,"EXAMEN","Aug 26, 2018",65,9,19,19),(30,"EXAMEN","Jun 17, 2019",2,10,20,20);
INSERT INTO Pruebas (idPrueba,tipo,fecha,calificacion,idCurso,idMateria,idProfesor) VALUES (31,"LECCION","Jan 27, 2019",20,1,11,11),(32,"LECCION","Dec 27, 2018",33,2,12,12),(33,"LECCION","Mar 9, 2018",7,3,13,13),(34,"EXAMEN","Jun 3, 2019",9,4,14,14),(35,"LECCION","Jan 22, 2019",12,5,15,15),(36,"EXAMEN","Nov 9, 2018",1,6,16,16),(37,"EXAMEN","Feb 2, 2019",49,7,17,17),(38,"EXAMEN","Sep 11, 2018",73,8,18,18),(39,"LECCION","Nov 25, 2018",83,9,19,19),(40,"LECCION","Nov 22, 2018",85,10,20,20);