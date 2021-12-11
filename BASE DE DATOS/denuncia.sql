DROP DATABASE IF EXISTS denuncia;
CREATE DATABASE denuncia;
USE denuncia;

CREATE TABLE users (
id INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR (20),
primer_apellido VARCHAR (20),
segundo_apellido VARCHAR (20),
fecha_nacimiento DATE,
email VARCHAR (50),
passw VARCHAR (50),
tipo INT
) ENGINE=INNODB;

CREATE TABLE reporte (
id INT PRIMARY KEY AUTO_INCREMENT,
user_id INT,
FOREIGN KEY (user_id) REFERENCES users(id),
titulo VARCHAR (20),
descripcion VARCHAR (250),
fecha_hr DATETIME,
lon VARCHAR (20),
lat VARCHAR (20),
estado INT
) ENGINE=INNODB;


DELIMITER $$

CREATE TRIGGER T_check_mail
BEFORE INSERT ON users
FOR EACH ROW
BEGIN
	DECLARE msg VARCHAR(50);
    DECLARE old_mail TINYINT;
	SET old_mail = (SELECT count(email) FROM users  WHERE email = NEW.email);

	IF (old_mail>0) THEN
			set msg = concat('Este Email ya esta ocupado, por favor use otro');
			set NEW.tipo = 3;
            -- signal sqlstate '45000' set message_text = msg;
	END IF;
END$$




CREATE PROCEDURE new_user (nom varchar(20), ap1 varchar(20), ap2 varchar(20), bday DATE, email VARCHAR (50), passw VARCHAR (50), tipo INT)
BEGIN
	Insert into users (nombre, primer_apellido, segundo_apellido, fecha_nacimiento, email, passw, tipo) 
	values (nom, ap1, ap2, bday, email, passw, tipo);

END$$

CREATE PROCEDURE new_report (titulo varchar(20), user_id INT, descripcion varchar(250), lon VARCHAR (20), lat VARCHAR (20),estado INT)
BEGIN

	
	Insert into reporte (titulo, user_id, descripcion, fecha_hr, lon, lat,estado) 
	values (titulo, user_id, descripcion, NOW(), lon, lat,estado);
    
END$$


DELIMITER ;

call new_user('Monica','Muhammad','Ferreiro', '1990-09-02', 'monimu@gmail.com', '12345',0);
call new_user('Monica','Muhammad','Ferreiro', '1990-09-02', 'monimu@gmail.com', '12345',0);
call new_user('Marcos','Amador','Amoroso', '1994-11-09', 'marmor@gmail.com', 'maquinadefuego02',0);
delete from users where tipo = 3;



call new_report('bache',1, 'hay un bache en la calle 5 de mayo', '-110.31280737517648', '24.142009992789724',0);



