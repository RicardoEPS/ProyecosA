DROP database IF EXISTS Delicious;
CREATE database Delicious;
USE Delicious;

#Crear Tablas

CREATE TABLE Comidas(
    Id int(3) PRIMARY KEY,
    Nombre varchar(50),
    Categoria varchar(30),
    Precio float(10)
);

CREATE TABLE Clientes(
    Id int PRIMARY KEY,
    Nombre varchar(200),
    Rfc varchar(13),
    Direccion varchar(200), 
    Telefono varchar(20)
);

CREATE TABLE Usuarios(
    Id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    NombreUsuario varchar(120),
    PalabraSecreta varchar(100),
    Password varchar(200),
    Tipo Varchar(1)
);

INSERT INTO Comidas VALUES (1,"Risotto de Hongos con Poro","Desayuno",700);
INSERT INTO Comidas VALUES (2,"Ensalada Tipo Rusa","Desayuno",900);
INSERT INTO Comidas VALUES (3,"Tartara de Salmon","Desayuno",1200);
INSERT INTO Comidas VALUES (4,"Lentejas a la Vinagreta","Desayuno",1800);
INSERT INTO Comidas VALUES (5,"Aderezo de Kiwi","Desayuno",500);

INSERT INTO Comidas VALUES (6,"Bacalao Para Navidad","Comida",2500);
INSERT INTO Comidas VALUES (7,"Salmon Con Mayonesa de Mostaza y Miel","Comida",2900);
INSERT INTO Comidas VALUES (8,"Almejas a la Marinera","Comida",1500);
INSERT INTO Comidas VALUES (9,"Tatakin de Atun","Comida",600);
INSERT INTO Comidas VALUES (10,"Garbanzos de Bacalao Y Espinacas","Comida",1900);

INSERT INTO Comidas VALUES (11,"Mayulas Flameadas al Cognac","Cena",900);
INSERT INTO Comidas VALUES (12,"Arroz Con Manzanas Y Nueces","Cena",1500);
INSERT INTO Comidas VALUES (13,"Paella Primaveral de Verduras","Cena",1800);
INSERT INTO Comidas VALUES (14,"Fettucine Con Salsa de Hongos","Cena",1300);
INSERT INTO Comidas VALUES (15,"Risotto de Limon Con Camarones","Cena",2500);

INSERT INTO Clientes VALUES(1,'Jose Luis Sanchez Lopez','SALJ890309XXX','1 poniente sur', '9999999');
INSERT INTO Clientes VALUES(2,'Karla de Rosario Diaz Cano','DICK951206YYY','conocida', '000000');

INSERT INTO Usuarios VALUES(1,'admin@gmail.com','admin','12345','A');
INSERT INTO Usuarios VALUES(2,'prueba@gmail.com','prueba','12345','C');