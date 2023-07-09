CREATE TABLE `reservations` (
  `res_id` int(11) NOT NULL,
  `res_date` date,
  `res_slot` varchar(32) DEFAULT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_email` varchar(255) NOT NULL,
  `res_tel` varchar(60) NOT NULL,
  `res_food` varchar(60)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `reservations`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `res_date` (`res_date`),
  ADD KEY `res_slot` (`res_slot`),
  ADD KEY `res_name` (`res_name`),
  ADD KEY `res_email` (`res_email`),
  ADD KEY `res_tel` (`res_tel`);

ALTER TABLE `reservations`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT;


  CREATE TABLE `messages` (
    `message` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO messages VALUES("Test.
  ");

CREATE TABLE `promotions` (
  `prm_name` varchar(255) NOT NULL,
  `prm_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `promotions`
  ADD KEY `prm_name` (`prm_name`),
  ADD KEY `prm_email` (`prm_email`);

  CREATE TABLE `rewards` (
    `rew_name` varchar(255) NOT NULL,
    `rew_email` varchar(255) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  ALTER TABLE `rewards`
    ADD KEY `rew_name` (`rew_name`),
    ADD KEY `rew_email` (`rew_email`);

  CREATE TABLE `parking` (
    `prk_name` varchar(255) NOT NULL,
    `prk_email` varchar(255) NOT NULL,
    `prk_slot` varchar(255) NOT NULL,
    `prk_date` date
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

  ALTER TABLE `parking`
    ADD KEY `prk_name` (`prk_name`),
    ADD KEY `prk_email` (`prk_email`),
    ADD KEY `prk_slot` (`prk_slot`),
    ADD KEY `prk_date` (`prk_date`);
