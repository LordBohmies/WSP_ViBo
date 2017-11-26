-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 26 nov 2017 kl 20:49
-- Serverversion: 10.1.26-MariaDB
-- PHP-version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `intro`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE `countries` (
  `Country_ID` int(11) NOT NULL,
  `Country_Name` varchar(64) NOT NULL DEFAULT '',
  `Country_ISO` varchar(2) NOT NULL,
  `Country_ISD` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumpning av Data i tabell `countries`
--

INSERT INTO `countries` VALUES
(234, 'Western Sahara', 'EH', '212'),
(250, 'Afghanistan', 'AF', '93'),
(251, 'Albania', 'AL', '355'),
(252, 'Algeria', 'DZ', '213'),
(253, 'American Samoa', 'AS', '1-684'),
(254, 'Andorra', 'AD', '376'),
(255, 'Angola', 'AO', '244'),
(256, 'Anguilla', 'AI', '1-264'),
(257, 'Antarctica', 'AQ', '672'),
(258, 'Antigua and Barbuda', 'AG', '1-268'),
(259, 'Argentina', 'AR', '54'),
(260, 'Armenia', 'AM', '374'),
(261, 'Aruba', 'AW', '297'),
(262, 'Australia', 'AU', '61'),
(263, 'Austria', 'AT', '43'),
(264, 'Azerbaijan', 'AZ', '994'),
(265, 'Bahamas', 'BS', '1-242'),
(266, 'Bahrain', 'BH', '973'),
(267, 'Bangladesh', 'BD', '880'),
(268, 'Barbados', 'BB', '1-246'),
(269, 'Belarus', 'BY', '375'),
(270, 'Belgium', 'BE', '32'),
(271, 'Belize', 'BZ', '501'),
(272, 'Benin', 'BJ', '229'),
(273, 'Bermuda', 'BM', '1-441'),
(274, 'Bhutan', 'BT', '975'),
(275, 'Bolivia', 'BO', '591'),
(276, 'Bosnia and Herzegowina', 'BA', '387'),
(277, 'Botswana', 'BW', '267'),
(278, 'Bouvet Island', 'BV', '47'),
(279, 'Brazil', 'BR', '55'),
(280, 'British Indian Ocean Territory', 'IO', '246'),
(281, 'Brunei Darussalam', 'BN', '673'),
(282, 'Bulgaria', 'BG', '359'),
(283, 'Burkina Faso', 'BF', '226'),
(284, 'Burundi', 'BI', '257'),
(285, 'Cambodia', 'KH', '855'),
(286, 'Cameroon', 'CM', '237'),
(287, 'Canada', 'CA', '1'),
(288, 'Cape Verde', 'CV', '238'),
(289, 'Cayman Islands', 'KY', '1-345'),
(290, 'Central African Republic', 'CF', '236'),
(291, 'Chad', 'TD', '235'),
(292, 'Chile', 'CL', '56'),
(293, 'China', 'CN', '86'),
(294, 'Christmas Island', 'CX', '61'),
(295, 'Cocos (Keeling) Islands', 'CC', '61'),
(296, 'Colombia', 'CO', '57'),
(297, 'Comoros', 'KM', '269'),
(298, 'Congo Democratic Republic of', 'CG', '242'),
(299, 'Cook Islands', 'CK', '682'),
(300, 'Costa Rica', 'CR', '506'),
(301, 'Cote D\'Ivoire', 'CI', '225'),
(302, 'Croatia', 'HR', '385'),
(303, 'Cuba', 'CU', '53'),
(304, 'Cyprus', 'CY', '357'),
(305, 'Czech Republic', 'CZ', '420'),
(306, 'Denmark', 'DK', '45'),
(307, 'Djibouti', 'DJ', '253'),
(308, 'Dominica', 'DM', '1-767'),
(309, 'Dominican Republic', 'DO', '1-809'),
(310, 'Timor-Leste', 'TL', '670'),
(311, 'Ecuador', 'EC', '593'),
(312, 'Egypt', 'EG', '20'),
(313, 'El Salvador', 'SV', '503'),
(314, 'Equatorial Guinea', 'GQ', '240'),
(315, 'Eritrea', 'ER', '291'),
(316, 'Estonia', 'EE', '372'),
(317, 'Ethiopia', 'ET', '251'),
(318, 'Falkland Islands (Malvinas)', 'FK', '500'),
(319, 'Faroe Islands', 'FO', '298'),
(320, 'Fiji', 'FJ', '679'),
(321, 'Finland', 'FI', '358'),
(322, 'France', 'FR', '33'),
(323, 'French Guiana', 'GF', '594'),
(324, 'French Polynesia', 'PF', '689'),
(325, 'French Southern Territories', 'TF', NULL),
(326, 'Gabon', 'GA', '241'),
(327, 'Gambia', 'GM', '220'),
(328, 'Georgia', 'GE', '995'),
(329, 'Germany', 'DE', '49'),
(330, 'Ghana', 'GH', '233'),
(331, 'Gibraltar', 'GI', '350'),
(332, 'Greece', 'GR', '30'),
(333, 'Greenland', 'GL', '299'),
(334, 'Grenada', 'GD', '1-473'),
(335, 'Guadeloupe', 'GP', '590'),
(336, 'Guam', 'GU', '1-671'),
(337, 'Guatemala', 'GT', '502'),
(338, 'Guinea', 'GN', '224'),
(339, 'Guinea-bissau', 'GW', '245'),
(340, 'Guyana', 'GY', '592'),
(341, 'Haiti', 'HT', '509'),
(342, 'Heard Island and McDonald Islands', 'HM', '011'),
(343, 'Honduras', 'HN', '504'),
(344, 'Hong Kong', 'HK', '852'),
(345, 'Hungary', 'HU', '36'),
(346, 'Iceland', 'IS', '354'),
(347, 'India', 'IN', '91'),
(348, 'Indonesia', 'ID', '62'),
(349, 'Iran (Islamic Republic of)', 'IR', '98'),
(350, 'Iraq', 'IQ', '964'),
(351, 'Ireland', 'IE', '353'),
(352, 'Israel', 'IL', '972'),
(353, 'Italy', 'IT', '39'),
(354, 'Jamaica', 'JM', '1-876'),
(355, 'Japan', 'JP', '81'),
(356, 'Jordan', 'JO', '962'),
(357, 'Kazakhstan', 'KZ', '7'),
(358, 'Kenya', 'KE', '254'),
(359, 'Kiribati', 'KI', '686'),
(360, 'Korea, Democratic People\'s Republic of', 'KP', '850'),
(361, 'South Korea', 'KR', '82'),
(362, 'Kuwait', 'KW', '965'),
(363, 'Kyrgyzstan', 'KG', '996'),
(364, 'Lao People\'s Democratic Republic', 'LA', '856'),
(365, 'Latvia', 'LV', '371'),
(366, 'Lebanon', 'LB', '961'),
(367, 'Lesotho', 'LS', '266'),
(368, 'Liberia', 'LR', '231'),
(369, 'Libya', 'LY', '218'),
(370, 'Liechtenstein', 'LI', '423'),
(371, 'Lithuania', 'LT', '370'),
(372, 'Luxembourg', 'LU', '352'),
(373, 'Macao', 'MO', '853'),
(374, 'Macedonia, The Former Yugoslav Republic of', 'MK', '389'),
(375, 'Madagascar', 'MG', '261'),
(376, 'Malawi', 'MW', '265'),
(377, 'Malaysia', 'MY', '60'),
(378, 'Maldives', 'MV', '960'),
(379, 'Mali', 'ML', '223'),
(380, 'Malta', 'MT', '356'),
(381, 'Marshall Islands', 'MH', '692'),
(382, 'Martinique', 'MQ', '596'),
(383, 'Mauritania', 'MR', '222'),
(384, 'Mauritius', 'MU', '230'),
(385, 'Mayotte', 'YT', '262'),
(386, 'Mexico', 'MX', '52'),
(387, 'Micronesia, Federated States of', 'FM', '691'),
(388, 'Moldova', 'MD', '373'),
(389, 'Monaco', 'MC', '377'),
(390, 'Mongolia', 'MN', '976'),
(391, 'Montserrat', 'MS', '1-664'),
(392, 'Morocco', 'MA', '212'),
(393, 'Mozambique', 'MZ', '258'),
(394, 'Myanmar', 'MM', '95'),
(395, 'Namibia', 'NA', '264'),
(396, 'Nauru', 'NR', '674'),
(397, 'Nepal', 'NP', '977'),
(398, 'Netherlands', 'NL', '31'),
(399, 'Netherlands Antilles', 'AN', '599'),
(400, 'New Caledonia', 'NC', '687	'),
(401, 'New Zealand', 'NZ', '64'),
(402, 'Nicaragua', 'NI', '505'),
(403, 'Niger', 'NE', '227'),
(404, 'Nigeria', 'NG', '234'),
(405, 'Niue', 'NU', '683'),
(406, 'Norfolk Island', 'NF', '672'),
(407, 'Northern Mariana Islands', 'MP', '1-670'),
(408, 'Norway', 'NO', '47'),
(409, 'Oman', 'OM', '968'),
(410, 'Pakistan', 'PK', '92'),
(411, 'Palau', 'PW', '680'),
(412, 'Panama', 'PA', '507'),
(413, 'Papua New Guinea', 'PG', '675'),
(414, 'Paraguay', 'PY', '595'),
(415, 'Peru', 'PE', '51'),
(416, 'Philippines', 'PH', '63'),
(417, 'Pitcairn', 'PN', '64'),
(418, 'Poland', 'PL', '48'),
(419, 'Portugal', 'PT', '351'),
(420, 'Puerto Rico', 'PR', '1-787'),
(421, 'Qatar', 'QA', '974'),
(422, 'Reunion', 'RE', '262'),
(423, 'Romania', 'RO', '40'),
(424, 'Russian Federation', 'RU', '7'),
(425, 'Rwanda', 'RW', '250'),
(426, 'Saint Kitts and Nevis', 'KN', '1-869'),
(427, 'Saint Lucia', 'LC', '1-758'),
(428, 'Saint Vincent and the Grenadines', 'VC', '1-784'),
(429, 'Samoa', 'WS', '685'),
(430, 'San Marino', 'SM', '378'),
(431, 'Sao Tome and Principe', 'ST', '239'),
(432, 'Saudi Arabia', 'SA', '966'),
(433, 'Senegal', 'SN', '221'),
(434, 'Seychelles', 'SC', '248'),
(435, 'Sierra Leone', 'SL', '232'),
(436, 'Singapore', 'SG', '65'),
(437, 'Slovakia (Slovak Republic)', 'SK', '421'),
(438, 'Slovenia', 'SI', '386'),
(439, 'Solomon Islands', 'SB', '677'),
(440, 'Somalia', 'SO', '252'),
(441, 'South Africa', 'ZA', '27'),
(442, 'South Georgia and the South Sandwich Islands', 'GS', '500'),
(443, 'Spain', 'ES', '34'),
(444, 'Sri Lanka', 'LK', '94'),
(445, 'Saint Helena, Ascension and Tristan da Cunha', 'SH', '290'),
(446, 'St. Pierre and Miquelon', 'PM', '508'),
(447, 'Sudan', 'SD', '249'),
(448, 'Suriname', 'SR', '597'),
(449, 'Svalbard and Jan Mayen Islands', 'SJ', '47'),
(450, 'Swaziland', 'SZ', '268'),
(451, 'Sweden', 'SE', '46'),
(452, 'Switzerland', 'CH', '41'),
(453, 'Syrian Arab Republic', 'SY', '963'),
(454, 'Taiwan', 'TW', '886'),
(455, 'Tajikistan', 'TJ', '992'),
(456, 'Tanzania, United Republic of', 'TZ', '255'),
(457, 'Thailand', 'TH', '66'),
(458, 'Togo', 'TG', '228'),
(459, 'Tokelau', 'TK', '690'),
(460, 'Tonga', 'TO', '676'),
(461, 'Trinidad and Tobago', 'TT', '1-868'),
(462, 'Tunisia', 'TN', '216'),
(463, 'Turkey', 'TR', '90'),
(464, 'Turkmenistan', 'TM', '993'),
(465, 'Turks and Caicos Islands', 'TC', '1-649'),
(466, 'Tuvalu', 'TV', '688'),
(467, 'Uganda', 'UG', '256'),
(468, 'Ukraine', 'UA', '380'),
(469, 'United Arab Emirates', 'AE', '971'),
(470, 'United Kingdom', 'GB', '44'),
(471, 'United States', 'US', '1'),
(472, 'United States Minor Outlying Islands', 'UM', '246'),
(473, 'Uruguay', 'UY', '598'),
(474, 'Uzbekistan', 'UZ', '998'),
(475, 'Vanuatu', 'VU', '678'),
(476, 'Vatican City State (Holy See)', 'VA', '379'),
(477, 'Venezuela', 'VE', '58'),
(478, 'Vietnam', 'VN', '84'),
(479, 'Virgin Islands (British)', 'VG', '1-284'),
(480, 'Virgin Islands (U.S.)', 'VI', '1-340'),
(481, 'Wallis and Futuna Islands', 'WF', '681'),
(482, 'Yemen', 'YE', '967'),
(483, 'Serbia', 'RS', '381'),
(484, 'Zambia', 'ZM', '260'),
(485, 'Zimbabwe', 'ZW', '263'),
(486, 'Aaland Islands', 'AX', '358'),
(487, 'Palestine', 'PS', '970'),
(488, 'Montenegro', 'ME', '382'),
(489, 'Guernsey', 'GG', '44-1481'),
(490, 'Isle of Man', 'IM', '44-1624'),
(491, 'Jersey', 'JE', '44-1534'),
(492, 'Curaçao', 'CW', '599'),
(493, 'Ivory Coast', 'CI', '225'),
(494, 'Kosovo', 'XK', '383');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`Country_ID`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `countries`
--
ALTER TABLE `countries`
  MODIFY `Country_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=496;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
