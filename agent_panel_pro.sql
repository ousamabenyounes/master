-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2015 at 03:42 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agent_panel_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  `zip_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `primary_phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `secondary_phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` datetime DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `state_format` smallint(6) DEFAULT NULL,
  `kr_was_clients` smallint(6) DEFAULT NULL,
  `reseller_id` smallint(6) NOT NULL DEFAULT '0',
  `account_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `theme_setting` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `address`, `address2`, `city`, `state_id`, `zip_code`, `primary_phone`, `secondary_phone`, `status`, `created_date`, `modified_date`, `email`, `state_format`, `kr_was_clients`, `reseller_id`, `account_logo`, `theme_setting`) VALUES
(1, 'chetu india1', 'A-156 sector 63', NULL, 'noida', 17, '110023', '234-456-6543', NULL, 1, '2014-12-15 11:49:32', NULL, 'chetuindia@yopmail.com', 0, 1, 2, '', '{"bg_color":"B9F36D","font_color":"434445","font_size":"14px"}'),
(2, 'tcs', 'A-156 sector 63', 'test', 'noida', 12, '110023', '234-456-6540', '', 0, '2014-12-15 15:16:02', '2014-12-16 16:07:01', 'tcs@yopmail.com', 0, 1, 2, '', NULL),
(9, 'jkhjgj', 'bbjhh', NULL, 'vcvvbvc', 1, '110029', '345-987-4568', NULL, 1, '2014-12-18 16:18:33', NULL, 'chetuindia@yopmail.com', 1, 1, 2, '', NULL),
(30, 'testing_logo4', 'testing4', '', 'efdfd4', 19, '110024', '431-987-7654', '', 1, '2014-12-26 14:32:41', '2015-01-20 15:10:29', 'dfdf4@yopmail.com', NULL, NULL, 2, 'Hydrangeas.jpg', '{"bg_color":"5F6EF3","font_color":"F5430C","font_size":"14px"}'),
(31, 'ghfgh', 'gfgf', NULL, 'dgfdgf', 18, '1100231', '432-987-9087', NULL, 1, '2014-12-26 14:39:32', NULL, 'ggf@yopmail.com', 0, 0, 2, 'Desert.jpg', NULL),
(32, 'jjuyjku', 'uuiui', NULL, 'fsfdsf', 14, '110987', '345-098-7654', NULL, 1, '2014-12-26 15:00:49', NULL, 'fgfg@yopmail.com', 0, 0, 2, 'Hydrangeas.jpg', '{"bg_color":"F4FF61","font_color":"FF30BA","font_size":"17"}'),
(34, 'testing_logo5', 'hjghjhgjh', NULL, 'eedfdf', 17, '123456', '432-908-8765', NULL, 1, '2014-12-26 15:08:29', NULL, 'fgfg5@yopmail.com', 0, 0, 2, NULL, NULL),
(39, 'test_reseller1', 'test', NULL, 'test', 3, '110023', '234-098-7654', NULL, 1, '2015-01-07 14:30:33', NULL, 'test1@yopmail.com', NULL, NULL, 0, '', '{"bg_color":"F372B7","font_color":"451A35","font_size":"14px"}'),
(40, 'test_reseller2', 'test', NULL, 'test1', 7, '110024', '324-987-6543', NULL, 1, '2015-01-07 14:48:35', NULL, 'test2@yopmail.com', NULL, NULL, 0, 'Penguins.jpg', '{"bg_color":"F3A144","font_color":"434445","font_size":"14px"}'),
(42, 'test_agent', 'test', 'test', 'test', 18, '110024', '234-987-6543', NULL, 1, '2015-01-07 15:10:35', NULL, 'test128@yopmail.com', 0, 0, 2, 'Penguins.jpg', NULL),
(45, 'testing_reseller1', 'test', NULL, 'test', 5, '110023', '234-987-5678', NULL, 1, '2015-01-15 11:30:27', NULL, 'test1@yopmail.com', NULL, NULL, 0, 'Tulips.jpg', NULL),
(46, 'test_reseller4', 'test', NULL, 'test', 8, '110027', '435-879-6574', NULL, 1, '2015-01-15 11:33:21', NULL, 'test67@yopmail.com', NULL, NULL, 0, 'Jellyfish.jpg', NULL),
(47, 'My testing company', 'My testing company', 'My testing company', 'Camarillo', 2, '110023', '234-456-6543', '1111111111', 1, '2015-01-15 12:52:37', NULL, 'test@yopmail.com', NULL, NULL, 0, 'Penguins.jpg', NULL),
(48, 'kghjg', 'hjghjg', NULL, 'hvfg', 6, '110024', '567-987-7869', NULL, 1, '2015-01-16 16:14:22', NULL, 'ggf@yopmail.com', NULL, NULL, 0, 'Hydrangeas.jpg', NULL),
(49, 'we_test', 'tesfgfdgfg', NULL, 'dsfdf', 7, '678907', '543-987-6543', NULL, 1, '2015-01-20 12:25:33', NULL, 'fgfg1@yopmail.com', 1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE IF NOT EXISTS `account_type` (
`id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE IF NOT EXISTS `permissions` (
`id` int(11) NOT NULL,
  `user_id` smallint(6) NOT NULL,
  `user_type` smallint(6) NOT NULL,
  `permission` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `user_id`, `user_type`, `permission`) VALUES
(4, 10, 2, 'a:14:{s:12:"''agent_list''";a:5:{s:6:"''main''";s:1:"1";s:11:"''add_agent''";s:1:"1";s:17:"''show_kr_clients''";s:1:"1";s:16:"''welcome_letter''";s:1:"1";s:18:"''show_was_clients''";s:1:"1";}s:22:"''mortgage_broker_list''";a:3:{s:6:"''main''";s:1:"1";s:21:"''add_mortgage_broker''";s:1:"1";s:16:"''welcome_letter''";s:1:"1";}s:11:"''site_list''";a:11:{s:6:"''main''";s:1:"1";s:10:"''add_site''";s:1:"1";s:21:"''new_custom_template''";s:1:"1";s:23:"''new_property_template''";s:1:"1";s:11:"''add_focus''";s:1:"1";s:20:"''add_theme_template''";s:1:"1";s:30:"''site_visitor_and_form_states''";s:1:"1";s:22:"''list_theme_templates''";s:1:"1";s:23:"''list_custom_templates''";s:1:"1";s:26:"''client_custom_focus_site''";s:1:"1";s:18:"''list_focus_sites''";s:1:"1";}s:24:"''default_agent_settings''";a:5:{s:6:"''main''";s:1:"1";s:22:"''default_html_headers''";s:1:"1";s:20:"''default_signatures''";s:1:"1";s:20:"''add_agent_html_hdr''";s:1:"1";s:21:"''add_agent_signature''";s:1:"1";}s:16:"''follow_up_camp''";a:3:{s:6:"''main''";s:1:"1";s:20:"''add_campaign_email''";s:1:"1";s:22:"''list_email_templates''";s:1:"1";}s:13:"''email_blast''";a:4:{s:6:"''main''";s:1:"1";s:20:"''send_to_all_agents''";s:1:"1";s:23:"''send_individual_email''";s:1:"1";s:21:"''manage_default_grps''";s:1:"1";}s:13:"''newsletters''";a:3:{s:6:"''main''";s:1:"1";s:16:"''add_newsletter''";s:1:"1";s:21:"''newsletter_defaults''";s:1:"1";}s:12:"''statistics''";a:4:{s:6:"''main''";s:1:"1";s:22:"''bulk_outgoing_emails''";s:1:"1";s:20:"''virtual_tour_space''";s:1:"1";s:13:"''ip_blocking''";s:1:"1";}s:17:"''default_surveys''";a:2:{s:6:"''main''";s:1:"1";s:20:"''add_default_survey''";s:1:"1";}s:11:"''documents''";a:2:{s:6:"''main''";s:1:"1";s:14:"''add_document''";s:1:"1";}s:17:"''idx_setup_items''";a:4:{s:6:"''main''";s:1:"1";s:13:"''idx_reports''";s:1:"1";s:17:"''edit_alert_mail''";s:1:"1";s:24:"''edit_viewing_sche_mail''";s:1:"1";}s:18:"''transfer_process''";a:3:{s:6:"''main''";s:1:"1";s:17:"''apg_db_transfer''";s:1:"1";s:21:"''focus_site_transfer''";s:1:"1";}s:18:"''site_setup_items''";a:16:{s:6:"''main''";s:1:"1";s:11:"''admin_log''";s:1:"1";s:24:"''admin_auto_scan_report''";s:1:"1";s:23:"''list_report_templates''";s:1:"1";s:15:"''popup_windows''";s:1:"1";s:12:"''add_report''";s:1:"1";s:20:"''auto_scan_settings''";s:1:"1";s:19:"''add_external_link''";s:1:"1";s:10:"''add_form''";s:1:"1";s:12:"''list_forms''";s:1:"1";s:21:"''default_form_groups''";s:1:"1";s:19:"''default_meta_tags''";s:1:"1";s:24:"''property_lists_options''";s:1:"1";s:19:"''add_framed_report''";s:1:"1";s:17:"''add_custom_page''";s:1:"1";s:24:"''edit_light_dark_footer''";s:1:"1";}s:16:"''admin_settings''";a:12:{s:6:"''main''";s:1:"1";s:23:"''list_admin_signatures''";s:1:"1";s:21:"''add_admin_signature''";s:1:"1";s:20:"''manage_admin_users''";s:1:"1";s:19:"''manage_admin_logs''";s:1:"1";s:24:"''education_tab_settings''";s:1:"1";s:25:"''focus_site_tab_settings''";s:1:"1";s:22:"''change_page_contents''";s:1:"1";s:20:"''update_pop_content''";s:1:"1";s:22:"''property_detail_text''";s:1:"1";s:19:"''domain_forwarding''";s:1:"1";s:10:"''crawlers''";s:1:"1";}}'),
(14, 2, 2, 'a:7:{s:12:"''agent_list''";a:7:{s:6:"''main''";s:1:"1";s:11:"''add_agent''";s:1:"1";s:17:"''show_kr_clients''";s:1:"1";s:17:"''show_agent_list''";s:1:"1";s:16:"''welcome_letter''";s:1:"1";s:18:"''show_was_clients''";s:1:"1";s:14:"''account_list''";s:1:"1";}s:22:"''mortgage_broker_list''";a:2:{s:21:"''add_mortgage_broker''";s:1:"1";s:27:"''show_mortgage_broker_list''";s:1:"1";}s:13:"''email_blast''";a:4:{s:6:"''main''";s:1:"1";s:20:"''send_to_all_agents''";s:1:"1";s:23:"''send_individual_email''";s:1:"1";s:21:"''manage_default_grps''";s:1:"1";}s:13:"''newsletters''";a:3:{s:6:"''main''";s:1:"1";s:16:"''add_newsletter''";s:1:"1";s:21:"''newsletter_defaults''";s:1:"1";}s:16:"''form_templates''";a:1:{s:20:"''add_form_templates''";s:1:"1";}s:18:"''transfer_process''";a:1:{s:17:"''apg_db_transfer''";s:1:"1";}s:18:"''site_setup_items''";a:1:{s:19:"''default_meta_tags''";s:1:"1";}}'),
(15, 11, 2, 'a:2:{s:12:"''agent_list''";a:7:{s:6:"''main''";s:1:"1";s:11:"''add_agent''";s:1:"1";s:17:"''show_kr_clients''";s:1:"1";s:17:"''show_agent_list''";s:1:"1";s:16:"''welcome_letter''";s:1:"1";s:18:"''show_was_clients''";s:1:"1";s:14:"''account_list''";s:1:"1";}s:11:"''site_list''";a:2:{s:10:"''add_site''";s:1:"1";s:22:"''list_theme_templates''";s:1:"1";}}'),
(16, 12, 2, 'a:3:{s:12:"''agent_list''";a:7:{s:6:"''main''";s:1:"1";s:11:"''add_agent''";s:1:"1";s:17:"''show_kr_clients''";s:1:"1";s:17:"''show_agent_list''";s:1:"1";s:16:"''welcome_letter''";s:1:"1";s:18:"''show_was_clients''";s:1:"1";s:14:"''account_list''";s:1:"1";}s:22:"''mortgage_broker_list''";a:4:{s:6:"''main''";s:1:"1";s:21:"''add_mortgage_broker''";s:1:"1";s:27:"''show_mortgage_broker_list''";s:1:"1";s:16:"''welcome_letter''";s:1:"1";}s:11:"''site_list''";a:11:{s:6:"''main''";s:1:"1";s:10:"''add_site''";s:1:"1";s:21:"''new_custom_template''";s:1:"1";s:23:"''new_property_template''";s:1:"1";s:11:"''add_focus''";s:1:"1";s:20:"''add_theme_template''";s:1:"1";s:30:"''site_visitor_and_form_states''";s:1:"1";s:22:"''list_theme_templates''";s:1:"1";s:23:"''list_custom_templates''";s:1:"1";s:26:"''client_custom_focus_site''";s:1:"1";s:18:"''list_focus_sites''";s:1:"1";}}'),
(17, 19, 2, 'a:2:{s:12:"''agent_list''";a:7:{s:6:"''main''";s:1:"1";s:11:"''add_agent''";s:1:"1";s:17:"''show_kr_clients''";s:1:"1";s:17:"''show_agent_list''";s:1:"1";s:16:"''welcome_letter''";s:1:"1";s:18:"''show_was_clients''";s:1:"1";s:14:"''account_list''";s:1:"1";}s:22:"''mortgage_broker_list''";a:4:{s:6:"''main''";s:1:"1";s:21:"''add_mortgage_broker''";s:1:"1";s:27:"''show_mortgage_broker_list''";s:1:"1";s:16:"''welcome_letter''";s:1:"1";}}'),
(18, 41, 2, 'a:1:{s:12:"''agent_list''";a:7:{s:6:"''main''";s:1:"1";s:11:"''add_agent''";s:1:"1";s:17:"''show_kr_clients''";s:1:"1";s:17:"''show_agent_list''";s:1:"1";s:16:"''welcome_letter''";s:1:"1";s:18:"''show_was_clients''";s:1:"1";s:14:"''account_list''";s:1:"1";}}');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
`id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `name`) VALUES
(1, 'Alabama'),
(2, 'Alaska'),
(3, 'Arizona'),
(4, 'Arkansas'),
(5, 'California'),
(6, 'Colorado'),
(7, 'Connecticut'),
(8, 'D.C.'),
(9, 'Delaware'),
(10, 'Florida'),
(11, 'Georgia'),
(12, 'Hawaii'),
(13, 'Idaho'),
(14, 'Idaho'),
(15, 'Illinois'),
(16, 'Indiana'),
(17, 'Iowa'),
(18, 'Kansas'),
(19, 'Kentucky'),
(20, 'Louisiana'),
(21, 'Maine'),
(22, 'Maryland'),
(23, 'Massachusetts'),
(24, 'Michigan'),
(25, 'Minnesota'),
(26, 'Mississippi'),
(27, 'Missouri'),
(28, 'Montana'),
(29, 'Nebraska'),
(30, 'Nevada'),
(31, 'New Hampshire'),
(32, 'New Jersey'),
(33, 'New Mexico'),
(34, 'New York'),
(35, 'North Carolina'),
(36, 'North Dakota'),
(37, 'Ohio'),
(38, 'Oklahoma'),
(39, 'Oregon'),
(40, 'Pennsylvania'),
(41, 'Rhode Island'),
(42, 'South Carolina'),
(43, 'South Carolina'),
(44, 'South Dakota'),
(45, 'Tennessee'),
(46, 'Texas'),
(47, 'Utah'),
(48, 'Vermont'),
(49, 'Virginia'),
(50, 'Washington'),
(51, 'West Virginia'),
(52, 'Wisconsin'),
(53, 'Wyoming'),
(54, 'U.S. territory');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` smallint(6) NOT NULL,
  `status` smallint(6) NOT NULL,
  `created_on` datetime NOT NULL,
  `created_by` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `salutation` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `account_type` smallint(6) DEFAULT NULL,
  `is_test_account` smallint(6) DEFAULT NULL,
  `title` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email2` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `primary_phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone2` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_id` smallint(6) DEFAULT NULL,
  `reseller_id` smallint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `user_type`, `status`, `created_on`, `created_by`, `first_name`, `last_name`, `salutation`, `account_type`, `is_test_account`, `title`, `email`, `email2`, `primary_phone`, `phone2`, `account_id`, `reseller_id`) VALUES
(1, 'admin', 'admin', 1, 1, '1899-11-30 00:00:00', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0),
(2, 'reseller', 'reseller', 2, 0, '0000-00-00 00:00:00', 'admin', '', '', '', 0, 0, '', '', '', '', '', 0, 0),
(9, 'peter', 'tester', 1, 1, '2014-08-07 17:13:53', '', 'peter', 'simson', 'Mr', 1, 1, '', '', '', '', '', 0, 0),
(10, 'sachin', 'sachin', 2, 0, '2014-08-12 17:13:53', 'admin', 'sachin', 'agarwal', 'Dr', 2, 1, '', '', '', '', '', 0, 0),
(11, 'avantika', 'avantika', 2, 0, '2014-08-12 17:13:53', 'admin', 'avantika', 'dubey', 'Miss', 1, 0, '', '', '', '', '', 0, 0),
(12, 'shweta', 'shweta', 2, 1, '2014-08-12 17:13:53', 'admin', 'shweta', 'gupta', 'Mrs', 1, 1, '', '', '', '', '', 0, 0),
(13, 'agent', '123456', 4, 1, '2014-08-20 11:38:16', '', 'avantika', 'dubey', 'Miss', 0, 0, 'avan', 'avantika20dubey@gmail.com', 'test@gmail.com', '99178348339', '2222222222', 30, 2),
(14, 'sweta', '123456', 4, 1, '2014-08-20 12:20:38', '', 'sweta', 'gupta', 'Mrs', 0, 0, 'sweta', 'sweta@gmail.com', 'test1@gmail.com', '99178348345', '3333333333', 31, 2),
(15, 'prerna', '123456', 4, 1, '2014-08-20 14:39:33', '', 'prerna', 'misra', 'Miss', 0, 0, 'prerna', 'prernam@yopmail.com', 'test3@yopmail.com', '99178348356', '3333345667', 3, 2),
(16, 'shruti', '123456', 4, 1, '2014-08-20 14:50:09', '', 'shruti', 'dubey', 'Miss', 0, 0, 'shruti', 'shruti@yopmail.com', 'test4@yopmail.com', '99178348567', '4545454545', 15, 2),
(36, 'bob', 'admin', 4, 1, '2014-12-15 11:59:31', 'reseller', 'bob', 'smith', 'Mr', NULL, NULL, '', 'bob@yopmail.com', 'test@yopmail.com', '234-456-6541', '356-890-4135', 1, 2),
(38, 'jody', 'admin', 4, 0, '2014-12-15 15:16:50', 'reseller', 'jody', 'cripsm', 'Dr', NULL, NULL, NULL, 'jody@yopmail.com', NULL, '589-976-8543', NULL, 2, 2),
(40, 'testreseller', '123456', 2, 1, '2015-01-07 14:33:49', 'admin', 'test_reseller1', 'test', 'Dr', 1, 1, NULL, 'test1@yopmail.com', NULL, NULL, NULL, 39, NULL),
(41, 'test2', '123456', 2, 1, '2015-01-07 14:49:30', 'admin', 'test2', 'test2', 'Dr', 1, 1, NULL, 'test2@yopmail.com', NULL, NULL, NULL, 40, 0),
(43, 'test_agent', 'asdfghj', 4, 1, '2015-01-07 15:11:17', 'reseller', 'test_agent', 'test', 'Mrs', NULL, NULL, NULL, 'test128@yopmail.com', NULL, '234-987-5431', NULL, 42, 2),
(44, 'test12', 'ddfgffg', 2, 1, '2015-01-15 11:31:34', 'admin', 'test12', 'test12', 'Mr', 1, 1, NULL, 'test12@yopmail.com', NULL, NULL, NULL, 45, 0),
(45, 'hhjgh', 'ggffjg', 2, 1, '2015-01-16 16:15:04', 'admin', 'hkhjhgjh', 'hkhjg', 'Dr', 1, 1, NULL, 'hgh1@yopmail.com', NULL, NULL, NULL, 48, 0),
(46, 'hhjgh', 'ghjghffg', 2, 1, '2015-01-16 16:15:17', 'admin', 'hkhjhgjh', 'hkhjg', 'Dr', 1, 1, NULL, 'hgh1@yopmail.com', NULL, NULL, NULL, NULL, 0),
(47, 'hhjgh', 'yuyuttr', 2, 1, '2015-01-16 16:15:38', 'admin', 'hkhjhgjh', 'hkhjg', 'Dr', 1, 1, NULL, 'hgh1@yopmail.com', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE IF NOT EXISTS `user_type` (
`id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `type`) VALUES
(1, 'admin', 1),
(2, 'reseller', 2),
(3, 'reseller_subusers', 3),
(4, 'agent', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`id`), ADD KEY `IDX_7D3656A45D83CC1` (`state_id`);

--
-- Indexes for table `account_type`
--
ALTER TABLE `account_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `account_type`
--
ALTER TABLE `account_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
ADD CONSTRAINT `FK_7D3656A45D83CC1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
