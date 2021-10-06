-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1:3307
-- 生成日期： 2021-10-05 12:52:40
-- 服务器版本： 10.4.20-MariaDB
-- PHP 版本： 8.0.9

SET
SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `fit3047`
--

-- --------------------------------------------------------

--
-- 表的结构 `agents`
--

CREATE TABLE `agents`
(
    `id`                  int(11) NOT NULL,
    `given_name`          varchar(64)  NOT NULL,
    `family_name`         varchar(64) DEFAULT NULL,
    `email`               varchar(256) NOT NULL,
    `country`             varchar(64)  NOT NULL,
    `city`                varchar(64)  NOT NULL,
    `state`               varchar(64)  NOT NULL,
    `street`              varchar(64)  NOT NULL,
    `user_name`           varchar(64) DEFAULT NULL,
    `password`            varchar(64)  NOT NULL,
    `subscription_status` varchar(30)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `agents`
--

INSERT INTO `agents` (`id`, `given_name`, `family_name`, `email`, `country`, `city`, `state`, `street`, `user_name`,
                      `password`, `subscription_status`)
VALUES (3, 'pasino', 'AI', '111@222.com', 'IS', 'home', 'home', 'home', NULL, '', 'home'),
       (4, 'Montana', 'Tony', '111@222.com', 'IT', 'home', 'home', 'home', NULL, '', '123'),
       (5, 'dude', 'AI', '111@222.com', 'IS', 'home', 'home', 'home', NULL, '', 'home');

--
-- 转储表的索引
--

--
-- 表的索引 `agents`
--
ALTER TABLE `agents`
    ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `agents`
--
ALTER TABLE `agents`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
