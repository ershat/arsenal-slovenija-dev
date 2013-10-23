-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.12-log - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.1.0.4545
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table arsenal.slovenija.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table arsenal.slovenija.migrations: ~2 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`migration`, `batch`) VALUES
	('2013_10_15_211834_create_users_table', 1),
	('2013_10_15_221918_create_pages_table', 1),
	('2013_10_18_174004_create_posts_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- Dumping structure for table arsenal.slovenija.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `position` int(11) NOT NULL DEFAULT '0',
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `template` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table arsenal.slovenija.pages: ~16 rows (approximately)
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
REPLACE INTO `pages` (`id`, `parent_id`, `position`, `title`, `slug`, `subtitle`, `summary`, `content`, `template`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(10, NULL, 1, 'Navijaški klub', 'navijaski-klub', '', '', '<p>Navija&scaron;ki klub Arsenal Slovenija je eden izmed najmlaj&scaron;ih te vrste saj je bil uradno potrjen dne 25.5.2009 z vpisom v register dru&scaron;tev. Leta 2008 smo se zbrali navdu&scaron;enci in zvesti navijači Topničarjev ter kot prvo v delovanje pognali forum, ki je &scaron;e vedno aktualen in aktiven. Nato smo forumu dodali &scaron;e spletno stran, na kateri objavljamo aktualne novice, poročila o tekmah, objavljamo slike, lahko si preberete vse o zgodovini Arsenala, o igralcih ki so pustili velik pečat v klubu in ostale zadeve. Toda želeli in zmogli smo več &ndash; tako smo dne 7.4.2009 na ustanovnem zboru ter sprejeli sklep o ustanovitvi navija&scaron;kega kluba. Poleg tega smo bili aktivni tudi tako, da smo v tisk poslali že 3 serije majic s kratkimi rokavi z logotipom Arsenal Slovenija. &Scaron;e ena izmed pomembnih aktivnosti (če ne celo najbolj pomembna) pri ohranjanju živahnosti kluba so skupni ogledi tekem v baru v Ljubljani. Letos (2009) smo prvič skupno obiskali priprave Arsenala v nam bližnji Avstriji, natančneje v vasici Bad Waltersdorf.<br />Arsenal Slovenija je od oktobra 2009 tudi uradno priznan navija&scaron;ki klub s strani Arsenala in se sedaj nahaja v dru&scaron;čini vseh uradnih navija&scaron;kih klubov po Evropi in svetu, ki stiskajo pesti za mogočni Arsenal.</p>\r\n<p>V klubu so navijači Arsenala iz praktično vseh koncev Slovenije. Prav vse pa druži en skupni interes &ndash; Arsenal!</p>\r\n<p>Ustanovitelji dru&scaron;tva so: Ale&scaron; Adamič, Lovro Papež, Marko Trampuž, Tamara Pocak, Ina Parkelj in Alvin Žagar.</p>\r\n<p><strong>Osnovni podatki:</strong></p>\r\n<p>Navija&scaron;ki klub Arsenal Slovenija<br />Razdrto 12<br />6225 Hru&scaron;evje<br />TR odprt pri PBS: SI56 &ndash; 9067 2000 0584 389<br />Matična &scaron;t.: 4010701<br />Davčna &scaron;t.: 56174578<br />Kontakt:&nbsp;<a href="mailto:info@arsenalfc.si">arsenalslovenija@gmail.com</a></p>\r\n<p><strong>Cilji:</strong></p>\r\n<p>-Skupen organiziran ogled tekem v Sloveniji<br />-Obisk tekem v živo na domačem Emirates-u in gostovanjih<br />-Popularizacija navija&scaron;kega druženja, popularizacija samega kluba<br />-Povezovanje z ostalimi navija&scaron;kimi skupinami Arsenala po Evropi in po svetu<br />-Sodelovanju tudi z drugimi navija&scaron;kimi skupinami v Sloveniji in po svetu<br />-Ustvarjanje pogojev za navija&scaron;ko aktivnost vsem tistim, ki jih nogmetna igra privlači in zanima</p>', 'Website::content.index', NULL, '2013-10-18 11:05:04', '2013-10-19 12:13:44'),
	(12, 10, 1, 'Predstavitev', 'predstavitev', '', '', '<p>Navija&scaron;ki klub Arsenal Slovenija je eden izmed najmlaj&scaron;ih te vrste saj je bil uradno potrjen dne 25.5.2009 z vpisom v register dru&scaron;tev. Leta 2008 smo se zbrali navdu&scaron;enci in zvesti navijači Topničarjev ter kot prvo v delovanje pognali forum, ki je &scaron;e vedno aktualen in aktiven. Nato smo forumu dodali &scaron;e spletno stran, na kateri objavljamo aktualne novice, poročila o tekmah, objavljamo slike, lahko si preberete vse o zgodovini Arsenala, o igralcih ki so pustili velik pečat v klubu in ostale zadeve. Toda želeli in zmogli smo več &ndash; tako smo dne 7.4.2009 na ustanovnem zboru ter sprejeli sklep o ustanovitvi navija&scaron;kega kluba. Poleg tega smo bili aktivni tudi tako, da smo v tisk poslali že 3 serije majic s kratkimi rokavi z logotipom Arsenal Slovenija. &Scaron;e ena izmed pomembnih aktivnosti (če ne celo najbolj pomembna) pri ohranjanju živahnosti kluba so skupni ogledi tekem v baru v Ljubljani. Letos (2009) smo prvič skupno obiskali priprave Arsenala v nam bližnji Avstriji, natančneje v vasici Bad Waltersdorf.<br />Arsenal Slovenija je od oktobra 2009 tudi uradno priznan navija&scaron;ki klub s strani Arsenala in se sedaj nahaja v dru&scaron;čini vseh uradnih navija&scaron;kih klubov po Evropi in svetu, ki stiskajo pesti za mogočni Arsenal.</p>\r\n<p>V klubu so navijači Arsenala iz praktično vseh koncev Slovenije. Prav vse pa druži en skupni interes &ndash; Arsenal!</p>\r\n<p>Ustanovitelji dru&scaron;tva so: Ale&scaron; Adamič, Lovro Papež, Marko Trampuž, Tamara Pocak, Ina Parkelj in Alvin Žagar.</p>\r\n<p><strong>Osnovni podatki:</strong></p>\r\n<p>Navija&scaron;ki klub Arsenal Slovenija<br />Razdrto 12<br />6225 Hru&scaron;evje<br />TR odprt pri PBS: SI56 &ndash; 9067 2000 0584 389<br />Matična &scaron;t.: 4010701<br />Davčna &scaron;t.: 56174578<br />Kontakt:&nbsp;<a href="mailto:info@arsenalfc.si">arsenalslovenija@gmail.com</a></p>\r\n<p><strong>Cilji:</strong></p>\r\n<p>-Skupen organiziran ogled tekem v Sloveniji<br />-Obisk tekem v živo na domačem Emirates-u in gostovanjih<br />-Popularizacija navija&scaron;kega druženja, popularizacija samega kluba<br />-Povezovanje z ostalimi navija&scaron;kimi skupinami Arsenala po Evropi in po svetu<br />-Sodelovanju tudi z drugimi navija&scaron;kimi skupinami v Sloveniji in po svetu<br />-Ustvarjanje pogojev za navija&scaron;ko aktivnost vsem tistim, ki jih nogmetna igra privlači in zanima</p>', 'Website::content.index', NULL, '2013-10-18 11:27:39', '2013-10-23 17:05:58'),
	(13, 10, 2, 'Kako postati član', 'kako-postati-clan', '', '', '<p>Test 2</p>', 'Website::content.index', NULL, '2013-10-18 11:28:40', '2013-10-19 10:30:53'),
	(15, NULL, 2, 'Arsenal', 'arsenal', '', '', '<p>Kwaka.</p>', 'Website::content.index', NULL, '2013-10-18 16:41:34', '2013-10-19 10:31:09'),
	(16, NULL, 0, 'Naslovnica', 'naslovnica', '', '', '<p>Fill in the blanks.</p>', 'Website::homepage.index', '2013-10-19 10:35:43', '2013-10-18 16:44:12', '2013-10-19 10:35:43'),
	(17, 15, 1, 'Zgodovina kluba', 'zgodovina-kluba', '', '', '<p>Kwaka.</p>', 'Website::content.index', NULL, '2013-10-18 16:52:21', '2013-10-19 10:31:14'),
	(18, 10, 3, 'Praktična vprašanja', 'prakticna-vprasanja', '', '', '<p>Kwaka.</p>', 'Website::content.index', NULL, '2013-10-18 16:54:52', '2013-10-19 10:30:58'),
	(19, 10, 4, 'Pravilnik', 'pravilnik', '', '', '<p>Kwaka.</p>', 'Website::content.index', NULL, '2013-10-18 16:55:10', '2013-10-19 10:31:03'),
	(20, 15, 2, 'Domači dres', 'domaci-dres', '', '', '<p>Kwaka</p>', 'Website::content.index', NULL, '2013-10-18 16:56:33', '2013-10-19 10:31:18'),
	(21, 15, 3, 'Grbi', 'grbi', '', '', '<p>Kwaka</p>', 'Website::content.index', NULL, '2013-10-18 16:56:49', '2013-10-19 10:31:22'),
	(22, 15, 4, 'Legende kluba', 'legende-kluba', '', '', '<p>Kwaka.</p>', 'Website::posts.list', NULL, '2013-10-18 16:57:36', '2013-10-19 10:31:38'),
	(23, NULL, 3, 'Reportaže in slike', 'reportaze-in-slike', '', '', '<p>Kwaka.</p>', 'Website::content.index', NULL, '2013-10-18 16:58:01', '2013-10-23 19:58:23'),
	(24, NULL, 4, 'Forum', 'forum', 'linkto:http://forum.arsenal-slovenija.si', '', '<p>Kwaka.</p>', 'Frontend::page.blank', '2013-10-18 17:11:24', '2013-10-18 16:59:04', '2013-10-18 17:11:24'),
	(35, NULL, 4, 'Forum', 'forum-1', 'linkto:http://forum.arsenal-slovenija.si', '', '<p>Kwaka.</p>', 'Frontend::page.blank', '2013-10-18 17:27:41', '2013-10-18 17:27:26', '2013-10-18 17:27:41'),
	(36, NULL, 4, 'Forum', 'forum-2', 'http://forum.arsenal-slovenija.si', '', '<p>Kwaka.</p>', 'Frontend::pages.blank', NULL, '2013-10-18 17:27:54', '2013-10-19 10:37:03'),
	(37, NULL, 9, 'kwaka', 'kwaka', '', '', '<p>kwaka</p>', 'Frontend::content.index', '2013-10-18 21:03:54', '2013-10-18 21:03:49', '2013-10-18 21:03:54');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;


-- Dumping structure for table arsenal.slovenija.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'news',
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `summary` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(512) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tags` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` int(11) NOT NULL,
  `author_alias` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table arsenal.slovenija.posts: ~3 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
REPLACE INTO `posts` (`id`, `type`, `title`, `slug`, `subtitle`, `summary`, `content`, `photo`, `tags`, `author`, `author_alias`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(10, 'news', 'Monreal – Rivalstvo z Gibbsom je dobro za nas', 'monreal-rivalstvo-z-gibbsom-je-dobro-za-nas', '', 'Nacho Monreal priznava, da ni zadovoljen s sedenjem na klopi za rezervne igralce, a trdi, da je njuno prijateljsko rivalstvo s Kieranom Gibbsom dobro za Arsenal.', '<p>&Scaron;panski reprezentant je v leto&scaron;nji sezoni zbral 10 nastopov, a le dvakrat je tekmo začel v udarni enajsterici &ndash; na eni izmed njiju, v Capital One pokalu na gostovanju pri West Bromwich Albion, je Monreal zadel celo odločilno enajstmetrovko za zmago Arsenala.</p>\r\n<p>Gibbs je letos tekmo začel desetkrat in si prislužil tudi vpoklic v angle&scaron;ko reprezentanco za zadnji dve kvalifikacijski tekmi za svetovno prvenstvo. Monreal je nad Gibbsovimi predstavami navdu&scaron;en, a obenem pripravljen zagrabiti za vsako svojo priložnost.</p>\r\n<p>&raquo;Mislim, da imava zdravo rivalstvo,&laquo; je povedal Monreal za Arsenal Player. &raquo;Oba sva zelo dobra igralca in oba dava vse od sebe za ekipo tako na treningih kot na tekmah.&laquo;</p>\r\n<p>&raquo;V resnici mi je težko, da se trener večinoma odloča za Kierana namesto zame, a moram priznati, da igra zelo dobro. Na vseh tekmah, na katerih je igral, je bil izvrsten, ekipa dosega dobre rezultate, zato ni razloga, da bi se v bližnji prihodnosti kaj spremenilo.&laquo;</p>\r\n<p>&raquo;Vse kar mi preostane je trdo trenirati in se potruditi po najbolj&scaron;ih močeh, da bom, ko mi bo trener ponudil priložnost, lahko to izkoristil in mu pokazal, da name lahko računa.&laquo;</p>\r\n<p>&raquo;Težko je, vsak igralec si želi igrati, to je prvi cilj vsakogar, jaz pa zaenkrat igro le opazujem s klopi. Lahko bi rekli, da trpim. A potrpežljivo bom čakal na svojo priložnost, nadaljeval s trdim delom in pokazal trenerju, da se ne predajam.&laquo;</p>\r\n<p>&raquo;Takoj, ko bo Kieran popustil, bom tam, da izkoristim situacijo, in nadaljujem v tej smeri.&laquo;</p>\r\n<p>Imeti dva igralca svetovnega kova, ki se borita za isto igralno mesto je točno to, kar si želi Arsene Wenger in Monreal se zaveda, da je notranja tekmovalnost nuja vsakega uspe&scaron;nega kluba.</p>\r\n<p>&raquo;Seveda, na vi&scaron;ji ravni kot si, bolje je, da je za mesto v ekipi prisotna tekmovalnost,&laquo; je povedal.</p>\r\n<p>&raquo;Logično je, da če ima&scaron; na vsakem igralnem položaju dva kvalitetna igralca, potem bo igral tisti, ki je v bolj&scaron;i formi, to pa pomeni, da ni počitka za nikogar. Ne sme&scaron; se predati, kajti v primeru da se bo&scaron;, potem ne bo&scaron; igral. Za ekipo je to zelo dobro.&laquo;</p>', NULL, '', 3, 'Marko Trampuž', NULL, '2013-10-18 20:45:04', '2013-10-19 11:10:19'),
	(11, 'news', 'RYO : Odrasti sem moral zelo hitro', 'ryo-odrasti-sem-moral-zelo-hitro', '', 'Ryo Miyachi misli, da so ga tri sezone na posoji prisilile, da je hitro odrastel kot igralec. ', '<p>V treh sezonah kot topničar je japonski vezist igral kot posojeni igralec pri Feyenoordu, Boltonu in Wiganu, kjer je okusil različne stopnje uspeha.</p>\r\n<p>Posoja 20-letnika k Wiganu je bila skraj&scaron;ana zaradi po&scaron;kodbe prej&scaron;njo sezono, toda Ryo je odločen, da mu bo ta izku&scaron;nja pomagala pri njegovem napredku.</p>\r\n<p>&raquo;Ko se ozrem nazaj, so zadnja tri leta kar letela mimo mene&laquo;, je Ryo povedal za Arsenal Player. &raquo;Skoraj celotno sezono sem bil po&scaron;kodovan in to je bilo zame zelo težko obdobje.&laquo;</p>\r\n<p>&raquo;Včasih me to zmede, toda hkrati nima smisla biti nepotrpežljiv, tako da sem se povsem osredotočil na čimprej&scaron;nje saniranje po&scaron;kodbe in kako se bom iz tega vrnil &scaron;e močnej&scaron;i.&laquo;</p>\r\n<p>V letu 2011 je Ryo užival v uspe&scaron;ni sezoni pri Feyenoordu, kjer je zabil tri gole v dvanajstih nastopih in si prislužil nadimek &raquo;Ryodinho.&laquo;</p>\r\n<p>&raquo;Pri Feyenoordovih navijačih sem se počutil dobro sprejetega. Spo&scaron;toval sem nov nadimek. Ko gre za primerjavo med mano in Ronaldinhom, je &scaron;e vedno ogromno razlike, toda dal bom vse od sebe, da mu pridem čim bližje.&laquo;</p>\r\n<p>&raquo;Težko se mi je bilo vklopiti v Evropo, kot japonskemu srednje&scaron;olcu. Pojma nisem imel o jeziku in načinu življenja, toda počasi se navajam in mislim da sem v tem pogledu napredoval.&laquo;</p>', '2013/10/18/gun__1363008829_ryo_everton.jpg', '', 3, 'Peter Šturm', NULL, '2013-10-18 20:46:37', '2013-10-18 20:48:01'),
	(16, 'news', 'Arsenal v Norwich City - Preview', 'arsenal-v-norwich-city-preview', '', '“At the top level, one of the keys is to switch on and off when it is required,” said Arsène Wenger.', '<p>&ldquo;The quality needed after a long break is to turn on again in a very quick, fast and efficient way.</p>\r\n<p>&ldquo;We have been on a strong run and, even if we drew at West Brom, it was a difficult game. So it\'s important to have a continuity in our results and you only know how well your team is capable of focusing after a break like this.&rdquo;</p>\r\n<p>When you think about it, the ability to instantly &lsquo;domesticate&rsquo; a side has become one of the crucial attributes in elite football management.</p>\r\n<p>What with international breaks and Champions League trips, the top teams have to &ldquo;return to Premier League action&rdquo; as many as eight or nine times a season.</p>\r\n<p>There is always the danger of soft points being dropped if your mental focus is left in some corner of a foreign field.</p>\r\n<p>That hard-fought draw at The Hawthorns meant Arsenal went into the international interval top of the Premier League, albeit by the slender margin of &ldquo;goals scored&rdquo;.</p>\r\n<p>It is churlish to knock the highest-placed team of the 92 but some have tried with stats. In like-for-like fixtures last season Arsenal garnered a greater tally and their total so far this term is fewer than the norm for the leaders after seven games.</p>\r\n<p>But who cares? Top is just fine thank you very much and another opportunity arises over the next week or so.</p>\r\n<p>Arsenal entertain Norwich on Saturday and visit Crystal Palace next weekend, both of whom are in the relegation places. In between Wenger&rsquo;s men could make it three wins out of three in Champions League Group F when Borussia Dortmund visit Emirates.</p>\r\n<p>Wenger has kept a tight lid on the expectations until now. But if, next Saturday afternoon, his side are top of the pile with nine games gone and have one foot in the last 16 in Europe, then optimism must start seeping out.</p>\r\n<p>But the manager knows there are seemingly stiffer challenges in November and the immediate chance must be seized.</p>\r\n<p>&ldquo;Yes, there is an opportunity now that we want to catch,&rdquo; he said. &ldquo;But you can only do that if you just think about the next game and put your effort in. Our season will depend on the capability to do that.&rdquo;</p>\r\n<p>Arsenal are unbeaten in six Premier League games and have scored in their last 12 &ndash; both are &lsquo;bests&rsquo; in the division.</p>\r\n<p>Norwich boss Chris Hughton spend significantly in the summer on the likes of Leroy Fer, Javier Garrido, Gary Hooper, Martin Olsson, Nathan Redmond, Ricky van Wolfswinkel and Johan Elmander but the side has not yet gelled.</p>\r\n<p>They are third from bottom with two wins all season and have failed to score in seven of their last 11 away trips.</p>\r\n<p>However, their last road-game did yield a crucial 1-0 win at Stoke and they were holding Chelsea at 1-1 last time out until five minutes from the whistle.</p>\r\n<p>&ldquo;Norwich are much more dangerous than last season because they have Elmander and Van Wolfswinkel,&rdquo; said Wenger.</p>\r\n<p>&ldquo;Also they are technically very good in the centre.</p>\r\n<p>&ldquo;They showed that against Chelsea in the last game and it is always a potentially dangerous game to play Norwich because they are a team with a good dynamic.</p>\r\n<p>&ldquo;The pressure is on us is to be 100 per cent focused, to get the win and to start strong again.</p>\r\n<p>&ldquo;Every team who is &lsquo;a favourite&rsquo; is on their toes these days because they know every game is a potential danger.&rdquo;</p>\r\n<p>Arsenal should have&nbsp;<a title="Mesut Ozil player profile" href="http://www.arsenal.com/first-team/players/mesut-ozil">Mesut Ozil</a>&nbsp;and&nbsp;<a title="Santi Cazorla player profile" href="http://www.arsenal.com/first-team/players/santi-cazorla">Santi Cazorla</a>&nbsp;available in tandem for the first time. However the Spaniard may not start as his last game was the North London derby on September 1.</p>\r\n<p><a title="Bacary Sagna player profile" href="http://www.arsenal.com/first-team/players/bacary-sagna">Bacary Sagna</a>&rsquo;s hamstring faced a test late on Friday but he was expected to feature.</p>\r\n<p><strong>Team news:</strong></p>\r\n<p><strong>Arsenal:</strong>&nbsp;Sanogo (back), Walcott (abdominal), Podolski (hamstring), Oxlade-Chamberlain (knee), Diaby (knee)</p>\r\n<p><strong>Norwich:</strong>&nbsp;Pilkington (doubt - hamstring), E Bennett (knee)</p>', '2013/10/19/gun__1357904358_match16_norwich_cazorla.jpg', '', 3, '', NULL, '2013-10-19 10:49:37', '2013-10-19 11:38:48');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;


-- Dumping structure for table arsenal.slovenija.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table arsenal.slovenija.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `username`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(3, 'slovenianGooner', 'lovro.papez@gmail.com', '$2y$08$UyvnphJ2k7Ny..B96SRmF.gGJLubKEZ1we4/cFx4JQmypQmnMklBu', '2013-10-17 12:53:08', '2013-10-17 12:53:08');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
