
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

# table structures for cart table

CREATE TABLE `cart` (
    `cart_id` int(11) NOT NULL,
    `first_name1` varchar(50) NOT NULL,
    `last_name1` varchar(50) NOT NULL,
    `contact_no` int(10) NOT NULL,
    `Email_address` varchar(20) NOT NULL,
    `bike_info` varchar(50) NOT NULL,
    `drop_off` DATETIME NOT NULL,
    `drop_location` varchar(50) NOT NULL,
    `bike_no` int(1) NOT NULL,
    `delivery_type` varchar(50) NOT NULL
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

# table structures for product table

CREATE TABLE `product` (
    `item_id` int(11) NOT NULL,
    `item_name` varchar(200) NOT NULL,
    `item_price` int(10) NOT NULL,
    `item_image` varchar(255) NOT NULL,
    `item_register` DATETIME DEFAULT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

# Dumping data for table `product`


INSERT INTO `product` (`item_id`, `item_name`, `item_price`, `item_image`,`item_register`) VALUES
(1, 'Commencal el Camino', 1900,'./Bikes names/s1600_18CAMINOBK_2000.jpg' ,'2020-03-28 11:08:57'),
(2, 'Fury Yt200 Mountain Bike', 1280,'./Bikes names/fury yt200.jpg' ,'2020-03-28 11:08:57'),
(3, 'Giant Anthem', 5128,'./Bikes names/GiantAnthem.jpg' ,'2020-03-28 11:08:57'),
(4, 'Giant Stance', 2200,'./Bikes names/Giant-Stance-2-01-dc67589.jpg' ,'2020-03-28 11:08:57'),
(5, 'Gitano Jd 4.0 Bike', 1190,'./Bikes names/gitano-jd-40-bicycle.jpg' ,'2020-03-28 11:08:57'),
(6, 'Impel 5.3 Kross Bike', 1200,'./Bikes names/Ross Impel.jpg' ,'2020-03-28 11:08:57'),
(7, 'Jamis Durango Comp 29Er', 1600,'./Bikes names/jamis-durango-29-comp-2017-mountain-bike-black-EV275171-8500-1.jpg' ,'2020-03-28 11:08:57'),
(8, 'Marlin 7', 1600,'./Bikes names/Marlin7.jpg' ,'2020-03-28 11:08:57'),
(9, 'Maximus Kross 26T W/Disc', 1150,'./Bikes names/kross maximus _.jpg' ,'2020-03-28 11:08:57'),
(10, 'Phoenix', 1500,'./Bikes names/phoenix.jpg' ,'2020-03-28 11:08:57'),
(11, 'Impel 5.3 Kross Bike1', 1200,'./Bikes names/Ross Impel.jpg' ,'2020-03-28 11:08:57'),
(12, 'Trinx m136', 1250,'./Bikes names/trinx-m136-elite-racing-bicycle.jpg' ,'2020-03-28 11:08:57'),
(13, 'Xids Black/Red', 1180,'./Bikes names/for kids.jpg' ,'2020-03-28 11:08:57'),
(14, 'Xtraxx Black-Green', 1100,'./Bikes names/61RuysB6sJL._AC_SX466_.jpg' ,'2020-03-28 11:08:57'),
(15, 'Bajaj Pulsar 220CC', 1800,'./Motorbikes/Bajaj-Pulsar-220-F-review-1200x675.jpg' ,'2020-03-28 11:08:57'),
(16, 'HERO XPULSE 200CC', 2500,'./Motorbikes/XPulse-200-1.jpg' ,'2020-03-28 11:08:57'),
(17, 'Honda CRF 250CC', 7000,'./Motorbikes/crf-coloroption.png' ,'2020-03-28 11:08:57'),
(18, 'Honda XR 190CC', 2500,'./Motorbikes/Honda-XR-190L.png' ,'2020-03-28 11:08:57'),
(19, 'KTM Duke 200CC', 2500,'./Motorbikes/KTM-Duke-200-1.jpg' ,'2020-03-28 11:08:57'),
(20, 'ROYAL ENFIELD 411CC', 5500,'./Motorbikes/himalayan.jpg' ,'2020-03-28 11:08:57'),
(21, 'TVS APACHE RTR 200CC', 1800,'./Motorbikes/tvsapache200.jpg' ,'2020-03-28 11:08:57'),
(22, 'Yamaha FZS 150CC', 1500,'./Motorbikes/Bajaj-Pulsar-220-F-review-1200x675.jpg' ,'2020-03-28 11:08:57');


CREATE TABLE `users`(
    `user_id` int(11) NOT NULL,
    `first_name` varchar(50) NOT NULL,
    `last_name` varchar(50) NOT NULL,
    `email` varchar(20) NOT NULL,
    `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

# Dumping data for table `users`

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'David', 'Ackerman', 'david@gmail.com', 'david'),
(2, 'Lelouch', 'Watts', 'lelouch@gmail.com', 'david'),
(3, 'Suzaku', 'Goodman', 'suzaku@gmail.com', 'david'),
(4, 'Monica', 'Bing', 'monica@gmail.com', 'david'),
(5, 'Asta', 'Cloverfield', 'asta@gmail.com', 'david');


ALTER TABLE `cart`
    ADD PRIMARY KEY (`cart_id`);



ALTER TABLE `product`
    ADD PRIMARY KEY (`item_id`);


ALTER TABLE `users`
    ADD PRIMARY KEY (`user_id`);


# Auto increment for table `cart`

ALTER TABLE `cart`
    MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

#auto increment for table product

ALTER TABLE `product`
    MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;

    ALTER TABLE `users`
    MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
