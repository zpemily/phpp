CREATE DATABASE IF NOT EXISTS escuela;
USE escuela;

CREATE TABLE usuarios(
    Login VARCHAR(20) PRIMARY KEY,
    Nombre VARCHAR(20),
    Correo VARCHAR(50),
    Password VARCHAR(50)
);

CREATE TABLE alumnos(
    Matricula INT PRIMARY KEY,
    Apellidos VARCHAR(20),
    Nombre VARCHAR(20),
    Nacimiento DATE,
    Direccion VARCHAR(60),
    Telefono VARCHAR(20),
    Correo VARCHAR(30),
    Padre_Tutor VARCHAR(40)
);


INSERT INTO alumnos (Matricula, Apellidos, Nombre, Nacimiento, Direccion, Telefono, Correo, Padre_Tutor) VALUES
(1, 'López', 'Juan', '2000-03-15', 'Calle Principal 123', '123456789', 'juan@example.com', 'Pedro López'),
(2, 'García', 'María', '1999-07-20', 'Avenida Central 456', '987654321', 'maria@example.com', 'Carlos García'),
(3, 'Martínez', 'Luis', '2001-01-10', 'Carrera 7 Este 789', '456789123', 'luis@example.com', 'José Martínez'),
(4, 'Rodríguez', 'Ana', '2002-05-25', 'Boulevard Norte 987', '321654987', 'ana@example.com', 'Miguel Rodríguez'),
(5, 'Hernández', 'Pedro', '2003-09-30', 'Plaza Mayor 321', '789123456', 'pedro@example.com', 'Jorge Hernández'),
(6, 'Sánchez', 'Sofía', '2000-12-05', 'Calle Sur 654', '456789321', 'sofia@example.com', 'Mario Sánchez'),
(7, 'Gómez', 'Lucía', '2001-08-18', 'Avenida Este 159', '987321654', 'lucia@example.com', 'Alejandro Gómez'),
(8, 'Díaz', 'Carlos', '2002-04-22', 'Camino Real 852', '321987654', 'carlos@example.com', 'Francisco Díaz'),
(9, 'Pérez', 'Laura', '2003-10-11', 'Paseo del Prado 753', '654321987', 'laura@example.com', 'Roberto Pérez'),
(10, 'Fernández', 'Miguel', '2001-02-28', 'Calle Oeste 246', '789456123', 'miguel@example.com', 'Manuel Fernández'),
(11, 'Ruiz', 'Elena', '2000-06-14', 'Bulevar Sur 369', '852963741', 'elena@example.com', 'Javier Ruiz'),
(12, 'Torres', 'Diego', '2002-11-19', 'Avenida Norte 753', '369852147', 'diego@example.com', 'Juan Torres'),
(13, 'Vázquez', 'Sara', '2003-03-08', 'Calle Central 159', '147258369', 'sara@example.com', 'Luis Vázquez'),
(14, 'Ramírez', 'Javier', '2001-07-23', 'Carrera 5 Este 357', '258369147', 'javier@example.com', 'Roberto Ramírez'),
(15, 'Gutiérrez', 'Carmen', '2000-09-17', 'Avenida Principal 951', '369147258', 'carmen@example.com', 'Antonio Gutiérrez'),
(16, 'Reyes', 'Daniel', '2002-12-30', 'Paseo de los Álamos 852', '147369258', 'daniel@example.com', 'Manuel Reyes'),
(17, 'Alvarez', 'Paula', '2003-04-05', 'Callejón de los Olivos 753', '258147369', 'paula@example.com', 'Jorge Alvarez'),
(18, 'Jiménez', 'Jorge', '2001-10-21', 'Avenida de los Robles 654', '369258147', 'jorge@example.com', 'Carlos Jiménez'),
(19, 'Moreno', 'Andrea', '2000-05-12', 'Camino de la Sierra 357', '147369852', 'andrea@example.com', 'Luis Moreno'),
(20, 'Romero', 'José', '2002-08-09', 'Calle del Sol 951', '369852741', 'jose@example.com', 'Francisco Romero');
select * from alumnos;
update alumnos set Apellidos = 'Francisco', Nombre = 'Fernando', Nacimiento = '2002-08-09', Direccion = 'Calle del Sol 951', Telefono = '369852741', Correo = 'jose@example.com', Padre_Tutor = 'Francisco Romero' where Matricula = "21";