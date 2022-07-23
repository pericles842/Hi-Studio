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