-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 23, 2023 at 09:37 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app-engineer`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_assignment`
--

DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` int DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `idx-auth_assignment-user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Actor', '19', 1683793747),
('Actor', '21', 1683793762),
('Actor', '22', 1683793771),
('Actor', '3', 1683767479),
('Admin', '5', 1683767503),
('QMR', '4', 1683767493),
('Super Admin', '1', 1683540071),
('User', '10', 1683793739),
('User', '11', 1683793861),
('User', '12', 1683793852),
('User', '13', 1683793856),
('User', '14', 1683793846),
('User', '15', 1683793840),
('User', '16', 1683793833),
('User', '17', 1683793828),
('User', '18', 1683793821),
('User', '2', 1683767460),
('User', '20', 1683793815),
('User', '23', 1683793810),
('User', '24', 1683793803),
('User', '25', 1683793796),
('User', '26', 1683793785),
('User', '27', 1683793779),
('User', '6', 1683793708),
('User', '7', 1683793715),
('User', '8', 1683793727),
('User', '9', 1683793733);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item`
--

DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `type` smallint NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `rule_name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `idx-auth_item-type` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1683540052, 1683540052),
('/admin/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/assignment/revoke', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/default/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/default/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/menu/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/menu/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/menu/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/menu/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/menu/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/permission/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/permission/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/permission/get-users', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/permission/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/permission/remove', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/permission/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/permission/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/role/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/role/assign', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/role/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/role/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/role/get-users', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/role/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/role/remove', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/role/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/role/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/route/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/route/assign', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/route/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/route/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/route/refresh', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/route/remove', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/rule/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/rule/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/rule/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/rule/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/rule/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/activate', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/change-password', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/login', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/logout', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/request-password-reset', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/reset-password', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/signup', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/admin/user/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/debug/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/debug/default/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/debug/default/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/debug/default/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/debug/user/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/debug/user/reset-identity', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/debug/user/set-identity', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gii/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gii/default/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gii/default/action', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gii/default/diff', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gii/default/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gii/default/preview', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gii/default/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gridview/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gridview/export/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gridview/export/download', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gridview/grid-edited-row/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/gridview/grid-edited-row/back', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/approver/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/approver/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/approver/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/approver/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/approver/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/approver/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/categories/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/categories/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/categories/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/categories/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/categories/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/categories/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/default/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/default/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/departments/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/departments/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/departments/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/departments/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/departments/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/departments/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/points/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/points/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/points/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/points/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/points/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/points/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/private-requester/*', 2, NULL, NULL, NULL, 1683794041, 1683794041),
('/operator/private-requester/create', 2, NULL, NULL, NULL, 1683794041, 1683794041),
('/operator/private-requester/delete', 2, NULL, NULL, NULL, 1683794041, 1683794041),
('/operator/private-requester/deletefile', 2, NULL, NULL, NULL, 1683794041, 1683794041),
('/operator/private-requester/download', 2, NULL, NULL, NULL, 1683794041, 1683794041),
('/operator/private-requester/index', 2, NULL, NULL, NULL, 1683794041, 1683794041),
('/operator/private-requester/update', 2, NULL, NULL, NULL, 1683794041, 1683794041),
('/operator/private-requester/view', 2, NULL, NULL, NULL, 1683794041, 1683794041),
('/operator/profile/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/profile/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/profile/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/profile/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/profile/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/profile/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/report/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/report/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/report/report1', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/report/report2', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/report/report3', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/report/report4', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/requester/*', 2, NULL, NULL, NULL, 1683539995, 1683539995),
('/operator/requester/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/requester/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/requester/deletefile', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/requester/download', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/requester/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/requester/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/requester/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/reviewer/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/reviewer/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/reviewer/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/reviewer/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/reviewer/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/reviewer/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/stamps/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/stamps/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/stamps/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/stamps/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/stamps/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/stamps/upload', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/stamps/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/status/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/status/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/status/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/status/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/status/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/status/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/types/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/types/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/types/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/types/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/types/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/types/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/user/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/user/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/user/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/user/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/user/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/operator/user/view', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/assignment/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/assignment/assign', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/permission/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/permission/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/permission/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/permission/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/permission/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/role/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/role/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/role/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/role/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/role/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/rule/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/rule/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/rule/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/rule/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/rule/search', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/rbac/rule/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/site/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/site/about', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/site/captcha', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/site/contact', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/site/error', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/site/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/site/login', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/site/logout', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/assignments', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/block', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/confirm', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/create', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/info', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/resend-password', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/switch', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/update', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/admin/update-profile', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/profile/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/profile/index', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/profile/show', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/recovery/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/recovery/request', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/recovery/reset', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/registration/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/registration/confirm', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/registration/connect', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/registration/register', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/registration/resend', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/security/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/security/auth', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/security/login', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/security/logout', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/settings/*', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/settings/account', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/settings/confirm', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/settings/delete', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/settings/disconnect', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/settings/networks', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('/user/settings/profile', 2, NULL, NULL, NULL, 1683767079, 1683767079),
('Actor', 1, NULL, NULL, NULL, 1683766966, 1683766966),
('Admin', 1, NULL, NULL, NULL, 1683766940, 1683766940),
('QMR', 1, NULL, NULL, NULL, 1683766910, 1683766910),
('Super Admin', 1, NULL, NULL, NULL, 1683540013, 1683540013),
('User', 1, NULL, NULL, NULL, 1683540028, 1683540028);

-- --------------------------------------------------------

--
-- Table structure for table `auth_item_child`
--

DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `child` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Super Admin', '/*'),
('Admin', '/admin/*'),
('Admin', '/operator/*'),
('QMR', '/operator/*'),
('User', '/operator/private-requester/*'),
('User', '/operator/private-requester/create'),
('User', '/operator/private-requester/deletefile'),
('User', '/operator/private-requester/download'),
('User', '/operator/private-requester/index'),
('User', '/operator/private-requester/update'),
('User', '/operator/private-requester/view'),
('Actor', '/operator/report/*'),
('Actor', '/operator/requester/*'),
('User', '/operator/requester/create'),
('User', '/operator/requester/download'),
('User', '/operator/requester/index'),
('User', '/operator/requester/view'),
('Actor', '/operator/reviewer/*'),
('Admin', '/rbac/*'),
('Admin', '/site/*'),
('Admin', '/user/*'),
('Actor', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_rule`
--

DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int DEFAULT NULL,
  `updated_at` int DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `auto_number`
--

DROP TABLE IF EXISTS `auto_number`;
CREATE TABLE IF NOT EXISTS `auto_number` (
  `group` varchar(32) NOT NULL,
  `number` int DEFAULT NULL,
  `optimistic_lock` int DEFAULT NULL,
  `update_time` int DEFAULT NULL,
  PRIMARY KEY (`group`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `auto_number`
--

INSERT INTO `auto_number` (`group`, `number`, `optimistic_lock`, `update_time`) VALUES
('FM-AG-???', 1, 1, 1684743775),
('MM-PD-???', 1, 1, 1684744714),
('SP-IT-???', 1, 1, 1684807015),
('SP-PC-???', 1, 1, 1684744168),
('SP-QC-???', 1, 1, 1684803293),
('ST-EN-???', 1, 1, 1684744811),
('ST-PC-???', 1, 1, 1684744983),
('ST-QC-???', 1, 1, 1684744368),
('WI-EN-???', 5, 1, 1684743556);

-- --------------------------------------------------------

--
-- Table structure for table `counting_unit`
--

DROP TABLE IF EXISTS `counting_unit`;
CREATE TABLE IF NOT EXISTS `counting_unit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `counting_unit_big` varchar(45) DEFAULT NULL,
  `counting_unit_small` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `counting_unit`
--

INSERT INTO `counting_unit` (`id`, `counting_unit_big`, `counting_unit_small`) VALUES
(1, 'ชิ้น', 'ชิ้น');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `id` int NOT NULL AUTO_INCREMENT,
  `department_code` varchar(45) DEFAULT NULL,
  `department_name` varchar(100) DEFAULT NULL,
  `department_details` text,
  `department_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_code`, `department_name`, `department_details`, `department_color`) VALUES
(1, 'EN', 'วิศวกรรม', NULL, NULL),
(2, 'IT', 'ไอที', NULL, NULL),
(3, 'PD', 'ผลิต', NULL, NULL),
(4, 'QC', 'ควบคุมคุณภาพ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `frequency`
--

DROP TABLE IF EXISTS `frequency`;
CREATE TABLE IF NOT EXISTS `frequency` (
  `id` int NOT NULL AUTO_INCREMENT,
  `frequency_code` varchar(45) DEFAULT NULL,
  `frequency_name` varchar(100) DEFAULT NULL,
  `frequency_details` text,
  `frequency_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `frequency`
--

INSERT INTO `frequency` (`id`, `frequency_code`, `frequency_name`, `frequency_details`, `frequency_color`) VALUES
(1, '1D', '24hr.', NULL, NULL),
(2, '1W', '125hr', NULL, NULL),
(3, '1M', '500hr', NULL, NULL),
(4, '2M', '1000hr', NULL, NULL),
(5, '3M', '2000hr', NULL, NULL),
(6, '4M', '3000hr', NULL, NULL),
(7, '6M', '4000hr', NULL, NULL),
(8, '1Y', '8000hr', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

DROP TABLE IF EXISTS `item`;
CREATE TABLE IF NOT EXISTS `item` (
  `id` int NOT NULL AUTO_INCREMENT,
  `item_code` varchar(45) DEFAULT NULL,
  `item_name` varchar(45) DEFAULT NULL,
  `item_sn` varchar(45) DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `counting_unit_id` int DEFAULT NULL,
  `po_number` varchar(45) DEFAULT NULL,
  `receipt_at` varchar(45) DEFAULT NULL,
  `photos` text,
  `warehouse_id` int DEFAULT NULL,
  `storage_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_item_counting_unit1_idx` (`counting_unit_id`),
  KEY `fk_item_warehouse1_idx` (`warehouse_id`),
  KEY `fk_item_storage1_idx` (`storage_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item_code`, `item_name`, `item_sn`, `quantity`, `counting_unit_id`, `po_number`, `receipt_at`, `photos`, `warehouse_id`, `storage_id`) VALUES
(1, 'a001', 'a', 'sn-a001', 10, 1, '6601', '11', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

DROP TABLE IF EXISTS `machine`;
CREATE TABLE IF NOT EXISTS `machine` (
  `id` int NOT NULL AUTO_INCREMENT,
  `machine_code` varchar(45) DEFAULT NULL,
  `machine_name` varchar(200) DEFAULT NULL,
  `machine_en_name` varchar(200) DEFAULT NULL,
  `machine_details` text,
  `machine_type_id` int DEFAULT NULL,
  `repair_id` int DEFAULT NULL,
  `serial_number` varchar(45) DEFAULT NULL,
  `station_id` int DEFAULT NULL,
  `po_number` varchar(45) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `installation_date` varchar(45) DEFAULT NULL,
  `docs` text,
  `photos` text,
  `machine_status_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_machine_repair1_idx` (`repair_id`),
  KEY `fk_machine_machine_type1_idx` (`machine_type_id`),
  KEY `fk_machine_machine_status1_idx` (`machine_status_id`),
  KEY `fk_machine_station1_idx` (`station_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`id`, `machine_code`, `machine_name`, `machine_en_name`, `machine_details`, `machine_type_id`, `repair_id`, `serial_number`, `station_id`, `po_number`, `cost`, `installation_date`, `docs`, `photos`, `machine_status_id`) VALUES
(1, NULL, 'HOIST 0.5T ( Lift  Soy  Bean  Sack  )', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, 'CRUSHER  FOR  WHOLE  SOY BEAN', NULL, NULL, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `machine_item`
--

DROP TABLE IF EXISTS `machine_item`;
CREATE TABLE IF NOT EXISTS `machine_item` (
  `machine_id` int NOT NULL,
  `item_id` int NOT NULL,
  `quantity` float DEFAULT NULL,
  `total_price` float DEFAULT NULL,
  `remask` text,
  PRIMARY KEY (`machine_id`,`item_id`),
  KEY `fk_machine_has_item_item1_idx` (`item_id`),
  KEY `fk_machine_has_item_machine1_idx` (`machine_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `machine_status`
--

DROP TABLE IF EXISTS `machine_status`;
CREATE TABLE IF NOT EXISTS `machine_status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `machine_status_code` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `machine_status`
--

INSERT INTO `machine_status` (`id`, `machine_status_code`) VALUES
(1, 'Online'),
(2, 'Temporarily suspended'),
(3, 'Offline');

-- --------------------------------------------------------

--
-- Table structure for table `machine_type`
--

DROP TABLE IF EXISTS `machine_type`;
CREATE TABLE IF NOT EXISTS `machine_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `machine_type_code` varchar(45) DEFAULT NULL,
  `machine_type_name` varchar(100) DEFAULT NULL,
  `machine_type_details` text,
  `machine_type_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `machine_type`
--

INSERT INTO `machine_type` (`id`, `machine_type_code`, `machine_type_name`, `machine_type_details`, `machine_type_color`) VALUES
(1, 'RMD', 'RAW MATERIAL RECEIVING AND DISCHARGING EQUIPMENT', 'อุปกรณ์ในการรับและจ่ายวัตถุดิบ ', ''),
(2, 'SOP', 'SCREW OIL PRESS MACHINE', 'เครื่องอัดน้ำมันด้วยสกรู', ''),
(3, 'RMT', 'RAW MATERIAL TREATMENT EQUIPMENT', 'อุปกรณ์ในการประมวลผลวัตถุดิบ', ''),
(4, 'HEA', 'HEAPING EQUIPMENT', 'อุปกรณ์ในการสะสมหรือส่งออกวัสดุหรือวัตถุ', ''),
(5, 'KOM', 'KOJI MAKING EQUIPMENT AND DE-KOJI', 'อุปกรณ์ในการผลิตโกจิและการถอดโกจิ', ''),
(6, 'MOF', 'MOROMI FERMENTATION EQUIPMENT', 'อุปกรณ์ในกระบวนการหมักโมโรมิ', ''),
(7, 'SDV', 'SALT DISSOLVING EQUIPMENT', 'อุปกรณ์ในการละลายเกลือ', ''),
(8, 'MOP', 'MOROMI PRESS EQUIPMENT', 'อุปกรณ์สำหรับการกดหมักโมโรมิ', ''),
(9, 'CTT', 'CAKE TREATMENT EQUIPMENT', 'อุปกรณ์ในการประมวลผลเค้ก', ''),
(10, 'RSS', 'RAW SOY SAUCE STORAGE EQUIPMENT', 'อุปกรณ์จัดเก็บซอสถั่วเหลืองดิบ', ''),
(11, 'CRF', 'CLARIFYING EQUIPMENT', 'อุปกรณ์ที่ใช้ในการบริหารความกระจายหรือกำจัดสิ่งสกปรกหรือของเสียในขั้นตอนการกระตุ้นหรือการผ่านกระบวนการการผลิต', ''),
(12, 'EMF', 'ELCETRO MAGNETIC FLOW METER', 'เครื่องวัดอัตราการไหลด้วยความชื้นทางไฟฟ้า', ''),
(13, 'MTN', 'MAINTENANCE', 'การซ่อมบำรุง', ''),
(14, 'STB', 'STEAM SYSTEM (BOILER)', 'ระบบไอน้ำ (บอยเลอร์)', ''),
(15, 'WTS', 'WATER SYSTEM', 'ระบบน้ำ', ''),
(16, 'WAS', 'WASTEWATER SYSTEM', 'ระบบน้ำเสีย', ''),
(17, 'VGR', 'VINEGAR EQUIPMENT', 'อุปกรณ์น้ำส้มสายชู', ''),
(18, 'FWP', 'FILM WRAPPING MACHINE', 'เครื่องพันฟิล์ม', ''),
(19, 'FOK', 'FORKLIFT TRUCK ', 'รถยก', ''),
(20, 'PAC', 'PACKING MACHINE', 'เครื่องบรรจุ', ''),
(21, 'AIR', 'AIR CONDITIONER (SPLIT TYPE)', 'เครื่องปรับอากาศ (แบบแยกส่วน)', ''),
(22, 'WEI', 'WEIGHT', 'เครื่องชั่ง', ''),
(23, 'MAG', 'MAGNETIC', 'แม่เหล็ก', ''),
(24, 'TMT', 'THERMOMETER', 'เทอร์โมมิเตอร์ วัดอุณหภูมิ', ''),
(25, 'PSG', 'PRESSURE GAUGE', 'ระดับความดัน', '');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

DROP TABLE IF EXISTS `maintenance`;
CREATE TABLE IF NOT EXISTS `maintenance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `machine_id` int DEFAULT NULL,
  `station_id` int DEFAULT NULL,
  `std_pm_time` float DEFAULT NULL,
  `rank` int DEFAULT NULL,
  `frequency_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_maintenance_machine_idx` (`machine_id`),
  KEY `fk_maintenance_frequency1_idx` (`frequency_id`),
  KEY `fk_maintenance_station1_idx` (`station_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `maintenance`
--

INSERT INTO `maintenance` (`id`, `machine_id`, `station_id`, `std_pm_time`, `rank`, `frequency_id`) VALUES
(1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `maintenance_plan`
--

DROP TABLE IF EXISTS `maintenance_plan`;
CREATE TABLE IF NOT EXISTS `maintenance_plan` (
  `maintenance_id` int NOT NULL,
  `pm_plan_id` int NOT NULL,
  PRIMARY KEY (`maintenance_id`,`pm_plan_id`),
  KEY `fk_maintenance_has_pm_plan_pm_plan1_idx` (`pm_plan_id`),
  KEY `fk_maintenance_has_pm_plan_maintenance1_idx` (`maintenance_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `maintenance_plan`
--

INSERT INTO `maintenance_plan` (`maintenance_id`, `pm_plan_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `manager_approve`
--

DROP TABLE IF EXISTS `manager_approve`;
CREATE TABLE IF NOT EXISTS `manager_approve` (
  `id` int NOT NULL,
  `repair_id` int NOT NULL,
  `manager_by` int DEFAULT NULL,
  `approve_at` varchar(45) DEFAULT NULL,
  `repair_machine_repair_id` int DEFAULT NULL,
  `repair_machine_machine_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_manager_approve_repair1_idx` (`repair_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

DROP TABLE IF EXISTS `month`;
CREATE TABLE IF NOT EXISTS `month` (
  `id` int NOT NULL AUTO_INCREMENT,
  `month_code` varchar(45) DEFAULT NULL,
  `month_name` varchar(45) DEFAULT NULL,
  `month_details` text,
  `month_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`id`, `month_code`, `month_name`, `month_details`, `month_color`) VALUES
(1, 'JAN', 'มกราคม', NULL, NULL),
(2, 'FEB', 'กุมภาพันธ์', NULL, NULL),
(3, 'MAR', 'มีนาคม', NULL, NULL),
(4, 'APL', 'เมษายน', NULL, NULL),
(5, 'MAY', 'พฤษภาคม', NULL, NULL),
(6, 'JUN', 'มิถุนายน', NULL, NULL),
(7, 'JUL', 'กรกฎาคม', NULL, NULL),
(8, 'AUG', 'สิงหาคม', NULL, NULL),
(9, 'SEP', 'กันยายน', NULL, NULL),
(10, 'OCT', 'ตุลาคม', NULL, NULL),
(11, 'NOV', 'พฤศจิกายน', NULL, NULL),
(12, 'DEC', 'ธันวาคม', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

DROP TABLE IF EXISTS `operator`;
CREATE TABLE IF NOT EXISTS `operator` (
  `id` int NOT NULL AUTO_INCREMENT,
  `repair_id` int DEFAULT NULL,
  `operator_by` int DEFAULT NULL,
  `operator_at` varchar(45) DEFAULT NULL,
  `started_at` varchar(45) DEFAULT NULL,
  `finished_at` varchar(45) DEFAULT NULL,
  `cause_solution` text,
  `photos` text,
  `items` text,
  `repair_cost` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_operator_repair1_idx` (`repair_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `pm_plan`
--

DROP TABLE IF EXISTS `pm_plan`;
CREATE TABLE IF NOT EXISTS `pm_plan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `week_id` int NOT NULL,
  `month_id` int NOT NULL,
  `year_id` int NOT NULL,
  `pm_value` float DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pm_plan_week1_idx` (`week_id`),
  KEY `fk_pm_plan_month1_idx` (`month_id`),
  KEY `fk_pm_plan_year1_idx` (`year_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `pm_plan`
--

INSERT INTO `pm_plan` (`id`, `week_id`, `month_id`, `year_id`, `pm_value`) VALUES
(1, 1, 1, 1, 0.5),
(2, 2, 1, 1, 0.5);

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

DROP TABLE IF EXISTS `priority`;
CREATE TABLE IF NOT EXISTS `priority` (
  `id` int NOT NULL AUTO_INCREMENT,
  `priority_code` varchar(45) DEFAULT NULL,
  `priority_name` varchar(100) DEFAULT NULL,
  `priority_details` text,
  `priority_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`id`, `priority_code`, `priority_name`, `priority_details`, `priority_color`) VALUES
(1, 'HIGHT', 'สูง', '', '#FF0032'),
(2, 'NORMAL', 'ปกติ', '', '#39B5E0'),
(3, 'LOW', 'ต่ำ', '', '#EFA3C8');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `public_email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gravatar_email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `gravatar_id` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `website` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `bio` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `timezone` varchar(40) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`, `timezone`) VALUES
(1, 'แอดมิน', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'ธีรพงศ์ ขันตา', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'อรอนงค์ ชุมภู', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(4, 'สุพรรณา พันธ์ภู่', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(5, 'พีรนัย โสทรทวีพงศ์', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(6, 'สาวิกา พินิจ', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(7, 'อารยา เทพโพธา', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(8, 'กรรณิกา คำภีระ', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(9, 'วรรษรา หลวงเป็ง', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(10, 'ยศพร พยัคฆญาติ', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(11, 'ทวีเกียรติ คำเทพ', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(12, 'กุลนิษฐ์นรี เจริญจิตรวี', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(13, 'จิราภรณ์ กาบแก้ว', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(14, 'ลภีพร กาบแก้ว', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(15, 'รัศมี ศศิยศพงศ์', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(16, 'ทักษิณ อินทรศิลา', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(17, 'ชฎาภรณ์ แก้วคำ', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(18, 'ปราณี แดงโคตร', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(19, 'เปรมมิกา พินิจ', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(20, 'ธัญญารัตน์ นิ่มวงษ์', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(21, 'ชาริณี จันต๊ะนาเขต', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(22, 'ประกายวรรณ เทพมณี', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(23, 'สุริยา สมเพชร', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(24, 'สุพจน์ ช่างฆ้อง', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(25, 'ณัฐพล ขันเขียว', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(26, 'สราวุฒิ โฆษิตเกียรติคุณ', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL),
(27, 'ยศพนธ์ โพธิ', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `repair`
--

DROP TABLE IF EXISTS `repair`;
CREATE TABLE IF NOT EXISTS `repair` (
  `id` int NOT NULL AUTO_INCREMENT,
  `repair_number` varchar(45) DEFAULT NULL,
  `requester_by` int DEFAULT NULL,
  `requester_at` varchar(45) DEFAULT NULL,
  `to_department_id` int NOT NULL,
  `repair_type_id` int DEFAULT NULL,
  `machine_id` int DEFAULT NULL,
  `from_department_id` int NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `priority_id` int DEFAULT NULL,
  `expected_date` varchar(45) DEFAULT NULL,
  `photos` text,
  `status_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_repair_machine1_idx` (`machine_id`),
  KEY `fk_repair_status1_idx` (`status_id`),
  KEY `fk_repair_priority1_idx` (`priority_id`),
  KEY `fk_repair_repair_type1_idx` (`repair_type_id`),
  KEY `fk_repair_department1_idx` (`from_department_id`),
  KEY `fk_repair_department2_idx` (`to_department_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `repair`
--

INSERT INTO `repair` (`id`, `repair_number`, `requester_by`, `requester_at`, `to_department_id`, `repair_type_id`, `machine_id`, `from_department_id`, `title`, `description`, `priority_id`, `expected_date`, `photos`, `status_id`) VALUES
(1, '001', 1, '1', 2, NULL, 1, 4, 'TitleTitleTitleTitleTitleTitleTitleTitleTitle', '1', 2, '', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `repair_type`
--

DROP TABLE IF EXISTS `repair_type`;
CREATE TABLE IF NOT EXISTS `repair_type` (
  `id` int NOT NULL AUTO_INCREMENT,
  `repair_type_code` varchar(45) DEFAULT NULL,
  `repair_type_name` varchar(100) DEFAULT NULL,
  `repair_type_details` text,
  `repair_type_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `repair_type`
--

INSERT INTO `repair_type` (`id`, `repair_type_code`, `repair_type_name`, `repair_type_details`, `repair_type_color`) VALUES
(1, 'BD', 'งานซ่อมขึ้นสภาพหลังเครื่องจักรเสีย', NULL, NULL),
(2, 'NM', 'งานสร้างเครื่องจักร อุแกรณ์', NULL, NULL),
(3, 'PM', 'บำรุงรักษาเชิงป้องกัน', NULL, NULL),
(4, 'CM', 'บำรุงรักษาเชิงแก้ไข', NULL, NULL),
(5, 'PJ', 'งานโครงการ', NULL, NULL),
(6, 'MV', 'งานโยกย้ายเครื่องจัก อุปกรณ์', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `social_account`
--

DROP TABLE IF EXISTS `social_account`;
CREATE TABLE IF NOT EXISTS `social_account` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `provider` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `client_id` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `data` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `code` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` int DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`),
  UNIQUE KEY `account_unique_code` (`code`),
  KEY `fk_user_account` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

DROP TABLE IF EXISTS `station`;
CREATE TABLE IF NOT EXISTS `station` (
  `id` int NOT NULL AUTO_INCREMENT,
  `station_code` varchar(45) DEFAULT NULL,
  `station_name` varchar(100) DEFAULT NULL,
  `station_details` text,
  `station_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`id`, `station_code`, `station_name`, `station_details`, `station_color`) VALUES
(1, 'B1', NULL, NULL, NULL),
(2, 'B2', NULL, NULL, NULL),
(3, 'B3', NULL, NULL, NULL),
(4, 'B4', NULL, NULL, NULL),
(5, 'B5', NULL, NULL, NULL),
(6, 'EN', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_code` varchar(45) DEFAULT NULL,
  `status_name` varchar(100) DEFAULT NULL,
  `status_details` text,
  `status_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `status_code`, `status_name`, `status_details`, `status_color`) VALUES
(1, 'NEW', 'ใหม่', '', '#B70404'),
(2, 'APPROVED', 'อนุมัติ', '', '#146C94'),
(3, 'IN PROGRESS', 'ดำเนินการ', '', '#FC4F00'),
(4, 'SUCCESS', 'เสร็จ', '', '#1F8A70');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

DROP TABLE IF EXISTS `storage`;
CREATE TABLE IF NOT EXISTS `storage` (
  `id` int NOT NULL AUTO_INCREMENT,
  `storage_area` varchar(100) DEFAULT NULL,
  `storage_shelf` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`id`, `storage_area`, `storage_shelf`) VALUES
(1, 'S1', 'Storage 1'),
(2, 'S2', 'Storage 2'),
(3, 'S3', 'Storage 3'),
(4, 'S4', 'Storage 4');

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `user_id` int NOT NULL,
  `code` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_at` int NOT NULL,
  `type` smallint NOT NULL,
  UNIQUE KEY `token_unique` (`user_id`,`code`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`user_id`, `code`, `created_at`, `type`) VALUES
(2, 'EMY0QLqlg68STQlkmHWoJQ-cGlEs2PaK', 1682481093, 0),
(3, 'NI3AaFysiV3kGhxMxHIEFVSLduv33jK3', 1682481101, 0),
(4, 'L27XIjdY_W1lssdap2ZxlaPUX5uVTdSo', 1682481110, 0),
(5, 'Ze1ly0J96EN-1Ldql4O3c1_lcKIi6_ZN', 1682481121, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `password_hash` varchar(60) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `confirmed_at` int DEFAULT NULL,
  `unconfirmed_email` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `blocked_at` int DEFAULT NULL,
  `registration_ip` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_at` int NOT NULL,
  `updated_at` int NOT NULL,
  `flags` int NOT NULL DEFAULT '0',
  `last_login_at` int DEFAULT NULL,
  `status` int DEFAULT '10',
  `role` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_username` (`username`),
  UNIQUE KEY `user_unique_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`, `last_login_at`, `status`, `role`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$12$M0hFXxztKZxCnaOnGJjrpOmQtnEPHqRbvE7spj4xkCVnT11VBcOaO', 'VPaMQzLRVu6gsDMqaZL9rwHiVdWwVFe3', 1682481192, NULL, NULL, '::1', 1682481077, 1682481077, 0, 1684745402, 10, NULL),
(2, 'theerapong', 'theerapong.khan@gmail.com', '$2y$12$wgw0evelJYnHo.OYJ6Oy7uSXkJuj/hc.KyN5Ua69k9EVzMZSPWH8S', 'l8eCAXjpfUIMnx1YKbKqw3xcBEA0D1T-', 1682481206, NULL, NULL, '::1', 1682481093, 1682481093, 0, 1684806986, 10, NULL),
(3, 'onanong', 'onanong@gmail.com', '$2y$12$hZYzUyddqbQgj.ZhVpYnk.HLsxue7JE6X10xAisAm97RV9O4Baque', 'GtUzBcGWelbaJ9MVBMz8I6o1XVUVhsMM', 1682481209, NULL, NULL, '::1', 1682481101, 1682481101, 0, 1684744584, 10, NULL),
(4, 'supanna', 'supanna@email.com', '$2y$12$JrgSpLqoe07bm0bVnPKR7O3/uZ1ubwIKHy5QOLxHMqThm24kf/ZLK', 'H4Gv7l_-KVl-TfLQo39JXcJJKHvz0o7c', 1682481210, NULL, NULL, '::1', 1682481110, 1682481110, 0, 1684804474, 10, NULL),
(5, 'peeranai', 'peeranai@gmail.com', '$2y$12$pkdao7ym04wlz08kyxj.l.5undNMHcst/0EzM1mzHebUMoqxVt436', 'kbcu9EyXHp2BeliynrSsZ5Skq1ASeLe8', 1682481212, NULL, NULL, '::1', 1682481121, 1682481121, 0, NULL, 10, NULL),
(6, 'sawika', 'sawika@email.com', '$2y$12$O3tNFBcq9cpEtcHqCTolDucXMtIb5knWKjHOL2OSL5N7UKkXdtoui', 's4v4f4FElf3N2uPdx6GZYLMy5mS8rNCd', 1683792969, NULL, NULL, '::1', 1683792969, 1683793430, 0, 1684744049, 10, NULL),
(7, 'araya', 'acc.nfcfa@gmail.com', '$2y$12$NrzWMCnFlYaX6ThguT8d9.PNE.euAzbH8Qse4.Y4qoj3fh33lqLSe', 'JLEI5sdHVlrhamckF6VXpy3heJfk6nQ9', 1683792990, NULL, NULL, '::1', 1683792990, 1683792990, 0, NULL, 10, NULL),
(8, 'kannika', 'kannika@nfc.com', '$2y$12$xffTyxflca52nU71YNdrpOrCfkwZaLWa/XtdCdYxmPvTRYcCov1eG', 'L57bjEoDoyL4EakO9ft3WombnlQsQ1Bc', 1683793010, NULL, NULL, '::1', 1683793010, 1683793010, 0, NULL, 10, NULL),
(9, 'watasara', 'lee_lew@hotmail.com', '$2y$12$2AZYznE2urQ9mo.nm9c0duZ7ANIIage.cC0nBYWsDCXjIEVLgJGc2', 'e3Wz-hxQL4ftWXyNYuiDoiecAegiHGq8', 1683793026, NULL, NULL, '::1', 1683793026, 1683793026, 0, NULL, 10, NULL),
(10, 'yosaporn', 'ypayakayat@yahoo.com', '$2y$12$z/5HU4gOYMv2rbIIf03PiuRM0Ohb8J7wjlA1X0dwvnRUxwYs9Dgvq', 'jQZ4ahmM-ow9KnGYwcn302ay3bX3wON6', 1683793047, NULL, NULL, '::1', 1683793047, 1683793047, 0, 1684303737, 10, NULL),
(11, 'taweekiat', 'd.taweekiat@gmail.com', '$2y$12$.MQq.u7Wb7UZkzTsL1VvmO.rzraFIdaghwb.bMGl/BujX9ab.MrRq', '8wWbkMZ4wN95vSxELWypKe3EHIBaTqPO', 1683793061, NULL, NULL, '::1', 1683793061, 1683793061, 0, NULL, 10, NULL),
(12, 'kullanitnaree', 'kullanitnaree@nfc.com', '$2y$12$OpKiXAEkMBkkX7jLo6XrhORV587pEAB7RaEYGrgz1MRKXWdYNw/2i', 'gXFVNvr0CSpX3AuLh7fMaSLkJJpeJg31', 1683793076, NULL, NULL, '::1', 1683793076, 1683793076, 0, NULL, 10, NULL),
(13, 'jiraporn', 'jiraporn@nfc.com', '$2y$12$O3duTGbmOGQCdabVNtGOIO7tFxKyEZffPJWvAuu7ynDJOgJNdVliO', 'SCe8MGcoRhYeKi7vavwMufJeUUUdrdUd', 1683793090, NULL, NULL, '::1', 1683793090, 1683793090, 0, NULL, 10, NULL),
(14, 'lapaeporn', 'lapaeporn@nfc.com', '$2y$12$1MnkoqAQ3bFvH39fr4afj.EA6WKGWPPNyP500pN/AqxERayxPg056', 'BHUBCxcZpztXEl_y26ZPMtV_KnwoYeHU', 1683793107, NULL, NULL, '::1', 1683793107, 1683793107, 0, NULL, 10, NULL),
(15, 'ratsamee', 'ratsamee@nfc.com', '$2y$12$FYc7l3HRZz9Su.pLPiop0u.dclzn7M9zUeSlurwtINYkqwGoFEbCu', 'iD4Vuipm5XWq5ryszxzwPFDkOOi5oc29', 1683793119, NULL, NULL, '::1', 1683793119, 1683793119, 0, NULL, 10, NULL),
(16, 'thaksin', 'notethaksin@hotmail.com', '$2y$12$3q7fpwnOleGTfPDsZxR1fek.tFT.7a.NRZTfnqJzeOFYhjI9UlEXK', 'ltM24mSBdAYkooq7t-AVUjtrBrsK2_G8', 1683793130, NULL, NULL, '::1', 1683793130, 1683793130, 0, NULL, 10, NULL),
(17, 'chadaporn', 'kaewkhamchadaporn@gmail.com', '$2y$12$LujF5jw2pZmCtpNE.CI/Lu8Y1mWER6Obn3NMvSN3SLPcH..ntVCEe', 'R5sYXX_Cp7k-hDa0v8Im-p3E1WHhgyx2', 1683793141, NULL, NULL, '::1', 1683793141, 1683793141, 0, NULL, 10, NULL),
(18, 'pranee', 'pranee@nfc.com', '$2y$12$RFa71D2fkjU5TGqbDEyFaOgzNBOq2l2PonqDNt9.a9Pi/ltz8lOw2', 'AgrQBEnC4usd05AdIzGvYP63tACwB1dG', 1683793166, NULL, NULL, '::1', 1683793166, 1683793166, 0, NULL, 10, NULL),
(19, 'premmika', 'premmika2910@gmail.com', '$2y$12$aV3Dus0NhZcn2w3wBVn/U.9bbswMETIF4XjlZE3UMBlAD.7tFM/T.', 'EjMUtCt6y_Hkt1uRFsF5EOQlBEGTsUAN', 1683793180, NULL, NULL, '::1', 1683793180, 1683793180, 0, 1684744118, 10, NULL),
(20, 'tanyarat', 'Nimwong2539@gmail.com', '$2y$12$WmDURu17WodhrGE.orah0.AZwZAcScOQwuGQalWwKhkJcqyid48J6', 'RcPfw0huWobtF5xILVloNxg0CtxF7WuJ', 1683793191, NULL, NULL, '::1', 1683793191, 1683793191, 0, NULL, 10, NULL),
(21, 'charinee', 'charinee@nfc.com', '$2y$12$DhVkil5ut9Cs04ezhdfp1ulkgoyDSD9nw8j9OMzYVptJnYid6LarG', '1oImVHdvLcJfCDpM2HvrOSu7cmqGBh-Y', 1683793203, NULL, NULL, '::1', 1683793203, 1683793203, 0, NULL, 10, NULL),
(22, 'prakaiwan', 'prakaiwan4213@gmail.com', '$2y$12$RB52vDO.vrWheFBqg4Zeo.RuWqkwvOn1rZPS85KFCZ3dRv6CQ9yGa', 'UQQF5MDyCqFDzForMDbe6vZJpv95X8Al', 1683793214, NULL, NULL, '::1', 1683793214, 1683793214, 0, NULL, 10, NULL),
(23, 'suriya', 'suriyasompatch@gmail.com', '$2y$12$C4xc4c3Lg.l7DVsyg4BQYe1cKnQOAmzYjro4K4ucGcT0Jy4JqbIFK', '7yTvVQ07qAL3hyoze5O46NbNhvs5QH9i', 1683793225, NULL, NULL, '::1', 1683793225, 1683793225, 0, NULL, 10, NULL),
(24, 'suphot', 'changkhong.8777@gmail.com', '$2y$12$qtUlDIw66IXTDrfoABmq/.eRz.9wMw/KF31AwZgCab3EEDCrYw5fm', 'eYevE-riqu1KNIfQHmgR_59NCbDVgvxH', 1683793236, NULL, NULL, '::1', 1683793236, 1683793236, 0, NULL, 10, NULL),
(25, 'natthaphon', 'natthaphon@nfc.com', '$2y$12$a9mtTJ0gxfhUcsq8j.fp5O41G5wzWbE9b/zvOFcavISZJ4Bep46V.', '45a51OLBtvaN5JfVVAYp5omrDcaD5tKs', 1683793247, NULL, NULL, '::1', 1683793247, 1683793247, 0, NULL, 10, NULL),
(26, 'sarawut', 'en.nfc2016@gmail.com', '$2y$12$YmNAxic6cTsLgvI1ed9O5efepj684pVoEDle.ClzThUJV6/SUzS82', 'XVG744_T2RsUjT1SZ_D_ANro3khRALsB', 1683793260, NULL, NULL, '::1', 1683793260, 1683793260, 0, 1684303771, 10, NULL),
(27, 'yosapon', 'yosapon@nfc.com', '$2y$12$PnOyJpgIVrlFq05kgKG0ru0nCkxvr381oh9j9POnYkstmuFYe8io.', '_zCG57x3OZ-SSXYr3m7aNLyR9ddbKY7N', 1683793273, NULL, NULL, '::1', 1683793273, 1683793273, 0, 1683793890, 10, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `warehouse`
--

DROP TABLE IF EXISTS `warehouse`;
CREATE TABLE IF NOT EXISTS `warehouse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `warehouse_code` varchar(45) DEFAULT NULL,
  `warehouse_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `warehouse`
--

INSERT INTO `warehouse` (`id`, `warehouse_code`, `warehouse_name`) VALUES
(1, 'EN-1', 'Engineering 1'),
(2, 'EN-2', 'Engineering 2'),
(3, 'CT-1', 'Center 1'),
(4, 'CT-2', 'Center 2');

-- --------------------------------------------------------

--
-- Table structure for table `week`
--

DROP TABLE IF EXISTS `week`;
CREATE TABLE IF NOT EXISTS `week` (
  `id` int NOT NULL AUTO_INCREMENT,
  `week_code` varchar(45) DEFAULT NULL,
  `week_name` varchar(45) DEFAULT NULL,
  `week_details` text,
  `week_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `week`
--

INSERT INTO `week` (`id`, `week_code`, `week_name`, `week_details`, `week_color`) VALUES
(1, 'W1', 'สัปดาห์ที่ 1', NULL, NULL),
(2, 'W2', 'สัปดาห์ที่ 2', NULL, NULL),
(3, 'W3', 'สัปดาห์ที่ 3', NULL, NULL),
(4, 'W4', 'สัปดาห์ที่ 4', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

DROP TABLE IF EXISTS `year`;
CREATE TABLE IF NOT EXISTS `year` (
  `id` int NOT NULL AUTO_INCREMENT,
  `year_code` varchar(45) DEFAULT NULL,
  `year_name` varchar(45) DEFAULT NULL,
  `year_details` text,
  `year_color` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `year_code`, `year_name`, `year_details`, `year_color`) VALUES
(1, '2020', '2564', NULL, NULL),
(2, '2021', '2565', NULL, NULL),
(3, '2022', '2566', NULL, NULL),
(4, '2023', '2567', NULL, NULL),
(5, '2024', '2568', NULL, NULL),
(6, '2025', '2569', NULL, NULL),
(7, '2026', '2570', NULL, NULL),
(8, '2027', '2571', NULL, NULL),
(9, '2028', '2572', NULL, NULL),
(10, '2029', '2573', NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `fk_item_counting_unit1` FOREIGN KEY (`counting_unit_id`) REFERENCES `counting_unit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_item_storage1` FOREIGN KEY (`storage_id`) REFERENCES `storage` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_item_warehouse1` FOREIGN KEY (`warehouse_id`) REFERENCES `warehouse` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `machine`
--
ALTER TABLE `machine`
  ADD CONSTRAINT `fk_machine_machine_status1` FOREIGN KEY (`machine_status_id`) REFERENCES `machine_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_machine_machine_type1` FOREIGN KEY (`machine_type_id`) REFERENCES `machine_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_machine_repair1` FOREIGN KEY (`repair_id`) REFERENCES `repair` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_machine_station1` FOREIGN KEY (`station_id`) REFERENCES `station` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `machine_item`
--
ALTER TABLE `machine_item`
  ADD CONSTRAINT `fk_machine_has_item_item1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_machine_has_item_machine1` FOREIGN KEY (`machine_id`) REFERENCES `machine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `fk_maintenance_frequency1` FOREIGN KEY (`frequency_id`) REFERENCES `frequency` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_maintenance_machine` FOREIGN KEY (`machine_id`) REFERENCES `machine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_maintenance_station1` FOREIGN KEY (`station_id`) REFERENCES `station` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintenance_plan`
--
ALTER TABLE `maintenance_plan`
  ADD CONSTRAINT `fk_maintenance_has_pm_plan_maintenance1` FOREIGN KEY (`maintenance_id`) REFERENCES `maintenance` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_maintenance_has_pm_plan_pm_plan1` FOREIGN KEY (`pm_plan_id`) REFERENCES `pm_plan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `manager_approve`
--
ALTER TABLE `manager_approve`
  ADD CONSTRAINT `fk_manager_approve_repair1` FOREIGN KEY (`repair_id`) REFERENCES `repair` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `operator`
--
ALTER TABLE `operator`
  ADD CONSTRAINT `fk_operator_repair1` FOREIGN KEY (`repair_id`) REFERENCES `repair` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pm_plan`
--
ALTER TABLE `pm_plan`
  ADD CONSTRAINT `fk_pm_plan_month1` FOREIGN KEY (`month_id`) REFERENCES `month` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pm_plan_week1` FOREIGN KEY (`week_id`) REFERENCES `week` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pm_plan_year1` FOREIGN KEY (`year_id`) REFERENCES `year` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `repair`
--
ALTER TABLE `repair`
  ADD CONSTRAINT `fk_repair_department1` FOREIGN KEY (`from_department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_repair_department2` FOREIGN KEY (`to_department_id`) REFERENCES `department` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_repair_machine1` FOREIGN KEY (`machine_id`) REFERENCES `machine` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_repair_priority1` FOREIGN KEY (`priority_id`) REFERENCES `priority` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_repair_repair_type1` FOREIGN KEY (`repair_type_id`) REFERENCES `repair_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_repair_status1` FOREIGN KEY (`status_id`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Constraints for table `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
