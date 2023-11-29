drop database if exists proyecto_progweb;
create database if not exists proyecto_progweb;
use proyecto_progweb;
create table usuarios(id int not null auto_increment primary key,
						nombre varchar(50) not null,
                        usuario varchar(50) not null,
                        pass varchar(20) not null, 
                        cellnum varchar(12), 
                        email varchar(50),
                        direccion varchar(100), 
                        fecha_registro datetime not null default current_timestamp, 
                        permisos varchar(11) not null default '1');
                        
insert into usuarios (nombre, usuario,pass, cellnum, email, direccion, permisos) values('Prueba', 'prueba', '1234', '000000', 'prueba','prueba','1'); 
select * from usuarios;