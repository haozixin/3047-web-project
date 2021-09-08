SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `given_name` varchar(64) NOT NULL,
  `family_name` varchar(64) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(64) NOT NULL,
  `user_name` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `admins` (`id`, `given_name`, `family_name`, `email`, `password`, `user_name`) VALUES
(1, 'zixin', 'hao', 'haozixin57@gmail.com', '$2y$10$rPHqmamFPH5QCq07G9jVWO4m5Q53annKpEim2Ee/FoUnW8TclJ5Ni', 'yyds'),
(2, 'zixin', 'hao', 'haozixin557@gmail.com', '$2y$10$r8GHgi/RUVp8m6cJ4xPun.ujg4CCflu.n2S9340e8nWohCac0vxGq', 'yyds');

DROP TABLE IF EXISTS `admin_agents`;
CREATE TABLE `admin_agents` (
  `id` int(11) NOT NULL,
  `price` int(5) NOT NULL,
  `comments` varchar(256) NOT NULL,
  `cooperation_start_date` date NOT NULL,
  `cooperation_end_date` date NOT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `agents`;
CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `given_name` varchar(64) NOT NULL,
  `family_name` varchar(64) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `country` varchar(64) NOT NULL,
  `city` varchar(64) NOT NULL,
  `state` varchar(64) NOT NULL,
  `street` varchar(64) NOT NULL,
  `subscription_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `given_name` varchar(64) NOT NULL,
  `family_name` varchar(64) NOT NULL,
  `country` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `subscription_status` varchar(64) NOT NULL COMMENT 'if the customer has subscribed ',
  `user_name` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `state` varchar(64) NOT NULL,
  `city` varchar(64) NOT NULL,
  `street` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `customers` (`id`, `given_name`, `family_name`, `country`, `email`, `subscription_status`, `user_name`, `password`, `state`, `city`, `street`) VALUES
(16, 'zixin', 'hao', 'Austrilia', 'haozixin57@gmail.com', '123456', 'allen', '$2y$10$TY3010JaP65Qy5tazZ6V/OV382deMrXa3ph9EKADoc4N0qb3luK..', 'VIC', 'Melbourne', '6 sdefje');

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `amount` int(5) NOT NULL COMMENT 'price amount',
  `quantity` int(5) NOT NULL COMMENT 'product quantity',
  `deal_date` date NOT NULL,
  `deal_comment` text NOT NULL,
  `shipping_address` varchar(256) NOT NULL,
  `customer_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `orders` (`id`, `amount`, `quantity`, `deal_date`, `deal_comment`, `shipping_address`, `customer_id`) VALUES
(7, 11, 11, '2021-09-08', '11', '111', NULL);

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL COMMENT 'product_name',
  `description` text NOT NULL COMMENT 'description about the product',
  `customer_price` int(3) NOT NULL COMMENT 'the price for customers',
  `agent_price` int(3) NOT NULL COMMENT 'the price for agents',
  `product_type` varchar(64) NOT NULL,
  `date_of_manufacture` date NOT NULL,
  `expired_date` date NOT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `products` (`id`, `name`, `description`, `customer_price`, `agent_price`, `product_type`, `date_of_manufacture`, `expired_date`, `order_id`) VALUES
(3, 'product3', 'des', 33, 23, 'fresh honey', '2021-09-21', '2021-09-30', NULL),
(6, '1', 'wef', 234, 23, 'fresh honey', '2021-09-15', '2021-09-17', NULL),
(7, 'ef', '123', 11, 20, '3', '2021-09-14', '2021-09-15', NULL);

DROP TABLE IF EXISTS `product_recipes`;
CREATE TABLE `product_recipes` (
  `id` int(11) NOT NULL,
  `recipe_title` varchar(64) NOT NULL,
  `last_modify_time` date NOT NULL,
  `recipe_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `recipes`;
CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `video_link` varchar(256) NOT NULL,
  `photo` varchar(256)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `newsletter_subscriptions`;
CREATE TABLE `newsletter_subscriptions` (
  `id` int(7) NOT NULL,
  `customer_name` varchar(50),
  `customer_email` varchar(50),
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `admin_agents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `agent_id` (`agent_id`),
  ADD KEY `admin_id` (`admin_id`);

ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

ALTER TABLE `newsletter_subscriptions`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

ALTER TABLE `product_recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipe_id` (`recipe_id`),
  ADD KEY `product_id` (`product_id`);

ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `admin_agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

ALTER TABLE `product_recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `newsletter_subscriptions` CHANGE `id` `id` INT NOT NULL AUTO_INCREMENT;


ALTER TABLE `admin_agents`
  ADD CONSTRAINT `admin_agents_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `admin_agents_ibfk_2` FOREIGN KEY (`agent_id`) REFERENCES `agents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

ALTER TABLE `product_recipes`
  ADD CONSTRAINT `product_recipes_ibfk_1` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `product_recipes_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
