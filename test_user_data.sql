CREATE TABLE User
(
UserID INT AUTO_INCREMENT,
fname VARCHAR (50),
mname VARCHAR (50),
lname VARCHAR(50),
email VARCHAR(50),
DOB DATE,
Password INT,
PRIMARY KEY (UserID)
)
ENGINE=INNODB;

--User table insert
INSERT INTO User (UserID, fname, mname, lname, email, DOB, Password) VALUES
(100, 'John', 'Matt', 'Smith', 'jsmith@bandb.com', "1980-01-12", 1000),
(101, 'Joey', 'James', 'Johnson', 'jjohnson@bandb.com', "1982-02-10", 1010),
(102, 'Dillon', 'Edward', 'Brown', 'dbrown@bandb.com', "1989-02-27", 1020),
(103, 'Colin', 'Lawrence', 'Jackson', 'cjackson@bandb.com', "1988-03-01", 1030),
(104, 'Sara', 'Ann', 'Williams', 'swilson@bandb.com', "1988-06-15", 1040),
(105, 'Madison', 'Mary', 'McMahon','mmcmahon@bandb.com', "1990-10-10", 1050),
(106, 'Erin', 'Lauren', 'May', 'emay@bandb.com', "1983-02-22", 1060),
(107, 'Trevor', 'Jay', 'Anderson', 'tanderson@bandb.com', "2000-05-23",1070),
(108, 'Peter', 'Mark', 'Davis', 'pdavis@bandb.com', "2001-01-01", 1080),
(109, 'Grace', 'Rose', 'Miller', 'gmiller@bandb.com', "1980-11-09", 1090),
(110, 'Devon', 'June', 'Lee', 'dlee@bandb.com', "1981-04-12", 1100),
(111, 'Sam', 'Owen', 'Harris', 'sharris@bandb.com', "1985-12-10", 1110),
(112, 'Anna', 'Marie', 'Allen', 'aallen@bandb.com', "1985-02-07", 1120),
(113, 'Tyler', 'Dylan', 'King', 'tking@bandb.com', "1993-04-17", 1130),
(114, 'Elizabeth', 'Elle', 'Green', 'egreen@bandb.com', "1994-07-06", 1140),
(115, 'John', 'Johnny', 'Adams', 'jadams@bandbcom', "1990-10-11", 1150),
(116, 'Tom', 'Tim', 'Hall', 'thall@bandb.com', "1993-12-04", 1160),
(117, 'James', 'Stanley', 'Roberts', 'jroberts@bandb.com', "1991-11-05", 1170),
(118, 'David', 'Manny', 'Nelson', 'dnelson@bandb.com', "1997-09-10", 1180),
(119, 'Stevie', 'Rose', 'Stahl', 'sstahl@bandb.com', "1998-05-22", 1190);

CREATE TABLE User_Posts
(
UserID INT,
Post VARCHAR (200)
)
ENGINE=INNODB;

--needs work
CREATE TABLE Payment
(
PaymentID INT AUTO_INCREMENT,
paymentMethod VARCHAR (50),
paymentDate DATE,
FOREIGN KEY (TicketID),
FOREIGN KEY (UserID)
)
ENGINE=INNODB;

--needs work
CREATE TABLE Ticket
(
TicketID INT AUTO_INCREMENT,
ticketDate DATE,
seat VARCHAR (50),
FOREIGN KEY (StadiumID)
FOREIGN KEY (MatchID)
PRIMARY KEY (TicketID)
)
ENGINE=INNODB;


CREATE TABLE Sports_Game
(
MatchID INT AUTO_INCREMENT,
teamA VARCHAR (50),
teamB VARCHAR (50),
gameDate Date,
PRIMARY KEY (MatchID)
)
ENGINE=INNODB;

CREATE TABLE Concession
(
name VARCHAR (50),
concessionLocation VARCHAR (50),
description VARCHAR (50)
)
ENGINE=INNODB;

CREATE TABLE Parking
(
parkingSection VARCHAR (50),
parkingLocation VARCHAR (50),
lotSize VARCHAR (50)
)
ENGINE=INNODB;

CREATE TABLE IF NOT EXISTS `google_users` (
`wrd_user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
`google_id` varchar(100) NOT NULL,
`user_name` varchar(60) NOT NULL,
`user_email` varchar(60) DEFAULT NULL,
`user_doj` int(10) NOT NULL,
PRIMARY KEY (`wrd_user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;
