CREATE TABLE `threads` (
`id` INT NOT NULL AUTO_INCREMENT ,
`title` VARCHAR( 255 ) NOT NULL ,
`message` TEXT NOT NULL ,
`author` VARCHAR( 255 ) NOT NULL ,
`replies` INT( 11 ) NOT NULL ,
`posted` VARCHAR( 255 ) NOT NULL ,
PRIMARY KEY ( `id` )
) ENGINE = MYISAM;

 CREATE TABLE `replies` (
`id` INT NOT NULL AUTO_INCREMENT ,
`thread` INT( 11 ) NOT NULL ,
`message` TEXT NOT NULL ,
`author` VARCHAR( 255 ) NOT NULL ,
`posted` VARCHAR( 255 ) NOT NULL ,
PRIMARY KEY ( `id` )
) ENGINE = MYISAM;

DROP Table threads;
Drop Table replies;
