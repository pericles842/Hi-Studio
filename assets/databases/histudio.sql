--BASE DE DATOS --
CREATE DATABASE `histudio`;
--TABLA LOGIN --
    CREATE TABLE `login`(
        `idlogin` int(11) NOT NULL,
        `usuarios`varchar(110) NOT NULL,
        `contraseña` varchar(110) NOT NULL,
        `email`varchar(110)NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ALTER TABLE `login`
        ADD PRIMARY KEY (`idlogin`);

    ALTER TABLE `login`
        MODIFY `idlogin` int(11) NOT NULL AUTO_INCREMENT;

    INSERT INTO `login` (`idlogin`,`usuarios`,`contraseña`,`email`)VALUES(1,'admin','admin','admin@gmail.com');
--TABLA CARRERA --
    CREATE TABLE `carrera`(
        `idcarrera` int(11) NOT NULL,
        `carrera` varchar(110) NOT NULL

    )ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ALTER TABLE `carrera`
        ADD PRIMARY KEY (`idcarrera`);

    ALTER TABLE `carrera`
        MODIFY `idcarrera` int(11) NOT NULL AUTO_INCREMENT;

--TABLA MATERIAS --

    CREATE TABLE `materias`(
        `idmaterias` int(11) NOT NULL,
        `idcarrera` int(11) NOT NULL,
        `materia` varchar(110) NOT NULL,
        `profesor` varchar(110) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ALTER TABLE `materias`
        ADD PRIMARY KEY (`idmaterias`);

    ALTER TABLE `materias`
        MODIFY `idmaterias` int(11) NOT NULL AUTO_INCREMENT;

--TABLA ACTIVIDADES--
    CREATE TABLE `actividades`(
        `idactividad` int(11) NOT NULL,
        `deliver_date` date NOT NULL,
        `title_actividad` varchar(110) NOT NULL,
        `deliver_hour` decimal(4,2)  NOT NULL,
        `description` varchar(300) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ALTER TABLE `actividades`
        ADD PRIMARY KEY (`idactividad`);
    ALTER TABLE `actividades`
        MODIFY `idactividad` int(11) NOT NULL AUTO_INCREMENT;
    --todo:subir a repositorio en github--