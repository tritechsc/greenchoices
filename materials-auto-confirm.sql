CREATE TABLE `materials` (
  `last` varchar(64) NOT NULL,
  `first` varchar(1) NOT NULL,
  `catagory` varchar(16) NOT NULL,
  `id` varchar(16) NOT NULL,
  `material` varchar(64) NOT NULL,
  `location` varchar(64) NOT NULL,
  `delivery_method` varchar(64) NOT NULL,
  `eco_impact` varchar(64) NOT NULL,
  `delivery_distance` varchar(64) NOT NULL,
  `co2_footprint` varchar(64) NOT NULL,
  `labor_source` varchar(64) NOT NULL,
  `hazardous_chemicals` varchar(64) NOT NULL,
  `durability` varchar(64) NOT NULL,
  `rf_rating` varchar(64) NOT NULL,
  `rating` varchar(1) NOT NULL,
  `comments` text NOT NULL,
  `date_time` varchar(64) NOT NULL,
  `confirm` int(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `materials` ADD PRIMARY KEY (`confirm`);

--
ALTER TABLE `materials` MODIFY `confirm` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;
