CREATE DATABASE `histudio`;
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

    CREATE TABLE `carrera`(
        `idcarrera` int(11) NOT NULL,
        `carrera` varchar(110) NOT NULL

    )ENGINE=InnoDB DEFAULT CHARSET=utf8;

    ALTER TABLE `carrera`
        ADD PRIMARY KEY (`idcarrera`);

    ALTER TABLE `carrera`
        MODIFY `idcarrera` int(11) NOT NULL AUTO_INCREMENT;


    CREATE TABLE `materias`(
        `idmaterias` int(11) NOT NULL,
        `idcarrera` int(11) NOT NULL,
        `materia` varchar(110) NOT NULL
    )ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ALTER TABLE `materias`
        ADD PRIMARY KEY (`idmaterias`);

    ALTER TABLE `materias`
        MODIFY `idmaterias` int(11) NOT NULL AUTO_INCREMENT;