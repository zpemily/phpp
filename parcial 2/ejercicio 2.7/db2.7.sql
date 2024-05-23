create database sistemas;
use sistemas;
-- DROP TABLE USUARIOS;
create table usuarios
(
    idUsuario        int  primary key,
    login            varchar(20),
    password        varchar(50),
    nombre            varchar(50)
);
insert into usuarios values(1, 'ana', sha1('123'), 'Ana Lopez');
insert into usuarios values(2, 'chencho', sha1('pass'), 'Jesus Perez');
insert into usuarios values(3, 'tony', sha1('tony123'), 'Toño Juarez');
insert into usuarios values(4, 'LICGERMAN', sha1('123'), 'German');
select * from usuarios;

select * from usuarios

where login='ana' && password= sha1('123');