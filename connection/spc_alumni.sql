-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table spc_alumni.access_token
CREATE TABLE `access_token` (
  `token_id` int NOT NULL AUTO_INCREMENT,
  `access_token` varchar(75) DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  PRIMARY KEY (`token_id`)
) ENGINE=InnoDB AUTO_INCREMENT=357 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.access_token: ~184 rows (approximately)
INSERT INTO `access_token` (`token_id`, `access_token`, `user_id`) VALUES
	(173, 'wd9yzv7j2lhmuf6xtek1ap4c0bg5n3irosq8', 23),
	(174, 'sk4po7f0z2yhi85x1qjd6trgea9vlcwm3ubn', 23),
	(175, 'e1yhjqc32wkp7ln6us5zfmb0dtvirg4o98xa', 23),
	(176, 'ashtoym2jkc86ndwle1ux90g3zrqp5fi47bv', 23),
	(177, 'gq982brs6xz7fjdlp3m10huknwyeaco45ivt', 23),
	(178, '29r4jgeodftn8yk6umi5vphzq03cxlawbs71', 23),
	(179, 'wosz60t5kedji3v28hmqfr1cgpan97uyxbl4', 23),
	(180, 'tj5fsizmcwkerb89pu6l2n4h1ao0dx7g3yqv', 23),
	(181, 'rdw0cyzeb6p7itm31lx8hqkju9fgs452avno', 23),
	(182, 'pi29njc5u034fqotbry6dlvzsg1w7e8xmhka', 23),
	(183, 'uowcj2mknp480t7hfqzgy3e6a1bx9vlis5rd', 23),
	(184, 'd2f7qkexu50gwivznhmp6a8crb43lojs1t9y', 23),
	(185, 'fzg51odyq8a203nwctuhx9pkmi7jls6br4ve', 23),
	(186, 'rlh3y7f1cwn6qxmao4kjb0uv9ds5e2zg8tpi', 23),
	(187, 'gdbunfhor8czelx0i16w3t75qvmysp24aj9k', 23),
	(188, 'kztncgx32mbdqpol4v8aius15ye70jwr9h6f', 23),
	(189, 'psxl7hngqu0ibcow3k56z94t1rdym2f8jvae', 23),
	(190, 'gkqm7zaxu8ispnb1yv2hrdot9c45e6fjw0l3', 23),
	(191, 'li8hrvnao42g3xqcmp5jf1tskdewuz7yb609', 23),
	(192, '7e4y6drc9gz8hxiol5u0ws13vfjt2makpnqb', 23),
	(193, 'le90ruw34kszohj5b6gi1ncaf7p2vy8qdxtm', 23),
	(194, 'vn5sqw7cd6f3azjlg120rtbx8ehkmiuyp94o', 23),
	(195, '35glbimzq216ytw0v9k8xhpjedncas7u4ofr', 23),
	(196, 'ourldc6fiazw39sk7jepgm1xq8b5yvn0th24', 23),
	(197, '2lc6jw7v1kng90ofusqrpdat5imzy3xeh4b8', 23),
	(198, '3e14wx2byh6o9jzd7rgms8ic5lqpfnvtku0a', 23),
	(199, 'vo3stqy1c4maidn698lgxku2wrz7pfj05bhe', 23),
	(200, 'ijd635e04kh1glsvqxaom8cfynbztw92p7ur', 23),
	(201, 'fmkpaciu2r4zsgwh13o7vlnqy9t8ej0bd56x', 23),
	(202, 'wo3hai9up7vn241bx0yqgz5d6ftje8klrcsm', 23),
	(203, 'tqg0ksvrd8yzj7b5h3ofmpx1lu6awc4ien29', 23),
	(204, 'rfk0ox2sdgja6ywpb7u138qn9ilcv45zhmte', 23),
	(205, 'spfz8rde7wykm36l0abq9u1vcjg2n5itxoh4', 23),
	(206, 'lcviu36zs29q7n05fm4w1jbkr8dhoypexgta', 23),
	(207, 'hjlds3xe8k04u5nbmzcqvgy79waftrpo26i1', 23),
	(208, 'rl8wpqvbag5om4xk9is1hzt0u7yf2n6cdj3e', 23),
	(209, 'j4pu098b7twhngoi6vlrdsxckq2y51emfaz3', 23),
	(210, 'h4qvmikzb1ngtoc06297ysw3fl8daexup5rj', 23),
	(211, 'l3sm0tonx6dp5kqb49fav7higz21wucejy8r', 23),
	(212, 'i9dyj2s7zumne61rwb4oplfhc8qx03avgtk5', 23),
	(213, 'rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc', 23),
	(214, 'bpiy54ru9sh13zw7oxqm2jn6a8edcfgl0ktv', 23),
	(215, 'bltqhrcf9usm730x2kz1d4ig5npa6ewyovj8', 23),
	(216, 'si31c4bv0h8gmqalter2kpywjdfn695xzu7o', 23),
	(217, 'kaup5r63txfyec01zo7hi84l2msnjbq9wgvd', 23),
	(218, '1rs7tzapmeuwvlyd68k53fhj920qcoig4bnx', 23),
	(219, 'b0r8gsx92fcemdloqpjhnkut75vzw34ay1i6', 23),
	(220, 'bk73f10ih5r4pu6clwemstg2v8anxjd9qozy', 23),
	(221, 'nip8v2cr7zb4156ghkdqtsyaumw3l09jexof', 23),
	(222, 'zo0wsmthfbcx7revj4gy51l96anuiq83dpk2', 23),
	(223, '0baozum1wr9lkqv7f268j3nye5dhc4pxigts', 23),
	(224, '65hzaq1mvibrwd4s32geofjkc8xpty790uln', 23),
	(225, 'vlqswzkj3reubhdyfoc2m0p9t4x187ani5g6', 23),
	(226, 'tvdh1i9aq62nkcmlrojzu045sg3py8xfbew7', 23),
	(227, 'xeqsagdfry29wcj1zbl65n3k4om78ivuh0pt', 23),
	(228, '3q2xbasermkf8ywlg5o1pdv9jzuic40nth76', 23),
	(229, 'xmi5zvdj7490p3qk6ftlhgs8breuy1w2noca', 23),
	(230, 'l7pfwco9iyaq15nhurb4mgt0ks83dz6j2vxe', 23),
	(231, 'jnt5fis04z861bqvgmkwylpe3ua9rx27doch', 23),
	(232, 'zqfa2l1m04t9jdsv7xwkb6cgi8rno3ype5uh', 23),
	(233, 'ti7hmocevx4l2n5bs308kuywprd1gfazq6j9', 23),
	(234, '3trb561i0njpzgmfow2h7cskae9xyvlq4d8u', 23),
	(235, '3bu6i0pv8sryx5whkmgodf2j7enla94tqzc1', 23),
	(236, '2gjwkm7e0olcq8x1uavtsbh34nryzd59ip6f', 23),
	(237, '9sr1tlpwqfabjnh6mv5oz02y4d7i8exguck3', 23),
	(238, 'g8swm04b6jkh3zry7f2epc19txvdauioq5nl', 24),
	(239, '5fha9j2n83epkqz0vmrw6obxuld4ict1sgy7', 24),
	(240, '6v13ucfb05r8l9m7nkxqaie2wzyjpt4ogsdh', 23),
	(241, 'y8fav5cjtmb20413nz6k7duohlxpqigwers9', 23),
	(242, '0j3uqv1ametzhlg5ox94w6ifn7b8rckdyp2s', 23),
	(243, 'o85ubreit1agfzw763l0pynxh42cvdkmjqs9', 23),
	(244, 'de92zutbshoqc0p4wfykijn8v7mx35a61lgr', 23),
	(245, '6fq8pdsiywx7gu4v23z9mbckleon0ah5trj1', 23),
	(246, 'rw1pbfnu2e45vlyhgmqi0tjakxdo67z3c89s', 23),
	(247, '89va1i2ejudmcok0zsqgp56fwyr7btl3xhn4', 23),
	(248, 'w9gf5lj2axz61uc4hoy0v7mndisqb3t8rkpe', 23),
	(249, 'hptgvm0uzswyn7934fe5orcjkxq8li2ba61d', 23),
	(250, '16wbz92qf5magkx3uerv04tlypi8d7conjsh', 23),
	(251, 'puvwtfxmj9sl26nh0eb1r54aqdg3izyco8k7', 23),
	(252, 'lzq6k835yvhten9uai04cf12dwpj7sborxgm', 23),
	(253, 'hkg8sim3qdt5cuyz7o24b6w10lerpaxn9vfj', 23),
	(254, '8qyoeufcznlharbg0sj2i65wd743mxtpv9k1', 23),
	(255, 'pimxlnw7bv9adfje86c4qog1htz5r0ky32us', 23),
	(256, 'd6skxaptum7g4flwchn3qji19vbre5o80z2y', 23),
	(257, 't7u4e6f2xpl1cjani8mbo9hkydv3qwr5zg0s', 23),
	(258, 'qdcg92pbjtys3uw1vehxli7m4nza68kfro05', 23),
	(259, '1x8ek052mcjwypnhzbvl469fr73odgiuastq', 23),
	(260, '6ysi1qj7dtba0zkxv8g3lmnr5p49euwcof2h', 23),
	(261, 'cuwz72gm5sip1hk0nojdeav6yql9t4x8rf3b', 23),
	(262, '6i15wl4oh7eu2dtjxkgy908vcqsma3nzprbf', 23),
	(263, 'djzlwxn2uivypq1fb80crmto56es4a9g7kh3', 23),
	(264, 'cl7qhayx2wr0o3i8u4knjz6dbt1gfm9pves5', 23),
	(265, 'pasmoqnh5210gzwfij3kxcvyt649eurb87dl', 23),
	(266, '3pufd82gne5ri1b6tomv4lsyajh0zk9q7xwc', 23),
	(267, 'y20pb4xw8j5s97n6rkcm3togadzuqvflh1ie', 23),
	(268, 'rjpdf5lh07wn23yat9xbmc4si8uoq1vezg6k', 23),
	(269, 'kan46x2ptfuhwe8szmoc73ry1l0bvj5gd9iq', 23),
	(270, 'i27y043georcl9utfnvapjzsdqw8h5b6mk1x', 23),
	(271, 'ftjx24ic6lgb81ozhuwsrn73v9qkpaym0de5', 23),
	(272, 'vjkbin28tdexhlcqof06197pway45srmugz3', 23),
	(273, 'gmhp7fob9aej1idt0uz6qcv38wlryxk2s54n', 23),
	(274, '5tfmsv3609azgn7j1ek8oqwyx42ldbchpiru', 23),
	(275, '7ceawv38l6hzpob4qi5j0dfxt2kmyg9ns1ru', 23),
	(276, '8a0i9ux1dhzt7gm4rbls2wqvpe6k5jyc3nfo', 23),
	(277, 'ojdsif7r2t3b0euw8nph4kxaz5lc69m1ygvq', 23),
	(278, 'c8uiy6a7wn3kmovl9bd4q5h21jpz0sefxtgr', 23),
	(279, 'ynvaeipu3h8rl1z6cqtdj47w02skmgxobf95', 23),
	(280, 'nluq08bgmpd9oarx14k7yft5whevc3sjz26i', 23),
	(281, 'lehwjbpq2t5ik1v84dfz7oxmsuc630arng9y', 23),
	(282, '1gh5lkt0uxvywz4ib68asprjfcqo7d3en9m2', 23),
	(283, 'u9t2xncwsy5jm8aolv3edp16ghr4bqz0ik7f', 23),
	(284, 'es1bf7gzutxkio2lm508jrdva9qhpyc3n6w4', 23),
	(285, 'dn21oav6ghcrjylum59pf4i3xk8q7t0weszb', 23),
	(286, 'eb6axuiy3w9p41n7vm8tql2fd5ozjskc0grh', 23),
	(287, 'zc6b54amqwfi1uhklxy3tvpdg7j2o0e9r8sn', 23),
	(288, 'lc5tsozynr27amveq6ug40wbh3kpdfji19x8', 23),
	(289, 'gj2p95kfiec1bxovr4u8t0zmwa7q36lsdnyh', 23),
	(290, 'swhtxd6fjua7g8izqcr3k2e4lmyb1npvo095', 23),
	(291, 'scbxeigfvpumo1jk2496nd3r7hlqt8wzya50', 23),
	(292, 'nsqbk891tfid06j2ml5peuyv7hz34rgcwxao', 23),
	(293, 'usprfil5xbt9hka2714eom6d30cqv8jgznwy', 23),
	(294, 'ki3ym129aew6jctdgbxs8745oufrzhpl0qnv', 23),
	(295, 'opxhvjq7nu03mc2z8e1ariw5y94l6gdfktbs', 24),
	(296, 'jcidqs84azy2mhtfve19prbn7u30xo56glwk', 24),
	(297, 'jmol1i89wtp6xgyfc3b2z7avdnsqu0erkh45', 24),
	(298, '9cljsqrn6p7ov1htkmf5e0u28biw4gdyz3ax', 24),
	(299, 'sle4278kz13jmnix0uhowfcdap6tq5rv9ygb', 23),
	(300, 'l96ge8fh3auoitkcr5z2j1mqwn74s0bpvdxy', 23),
	(301, 'ejchz5ml2y74vrq108uokbfs6antxdgi9p3w', 23),
	(302, '6vfny38ow1rmqlp9e5ud0ahc2kxgi7tz4sbj', 23),
	(303, 'dq3k06pvrawcb4nfyx7ti9o2581hesjzgmul', 23),
	(304, '2oxcrbvu4t8nyqpldk6f75gi3swhz10aje9m', 25),
	(305, 'x01fz6iv3cd2jgn9awmke5lts87p4ryqouhb', 25),
	(306, 's0951epzikat7j8xn4md3cv6oqlubhg2wrfy', 23),
	(307, 'y0i97w6h8r5tubkg34xdopjfvqn21camszle', 23),
	(308, 'axp4g0s3jitocq1hlr6y9vuf7z2d8m5enbkw', 23),
	(309, '5dw6t8a21xeg073qol4vzyrbfnckmpshj9iu', 23),
	(310, 'n5132eafrc0zpdwbu7igh4oytm9x6lskjvq8', 23),
	(311, 'bjs2zmlwpndyci4hu5o8kt9ea61xqf3g07vr', 23),
	(312, '38q5swrxgldp4y7a1oczf0kun9imv2hbtje6', 23),
	(313, '3nfpz7gjds4mwrkqv9o8iuae2t6cy105hbxl', 23),
	(314, 'ish20v1xpu8odcqwzft954ba6lmkrne7ygj3', 23),
	(315, 'y1rgtck46zn2efl587jp9u3hdqvwaixmb0os', 23),
	(316, 'v0fjo2z9wexk8an76rtbisl1uymch5qp3g4d', 23),
	(317, '1a6cp0bvhk2gjy4rioedf735tsw8n9zmlqxu', 23),
	(318, 'm53fxyc49j2oatzrgwse10dkpvqlun8hi76b', 23),
	(319, 'te4nxywzpbvuk75i9mdscao38qrg601lhf2j', 23),
	(320, '4vrtf6yuoi7e9pqkgals3zb58xcmdj12n0hw', 23),
	(321, 'qdz0xrfkjs5n9w21vo7a8h4lbcepmtgi6uy3', 23),
	(322, '74l9qvax3sencfy6zkj01mt2ghduipb5rwo8', 24),
	(323, '1bfkpn5ltqdg82zj3a0iu6mhxe749vwcsryo', 23),
	(324, 'bhfvd1w7s8ylk0omn6qxc4up925jtge3riza', 26),
	(325, 'nvdlcb72xgosj63rihzy0k49qf5tmp8uaw1e', 26),
	(326, 's5vm39rqhcxwgkfljd07zt62oup8eybin1a4', 24),
	(327, 'a29tnqvxey8fm6o3kd7w5bsp10gihl4zujcr', 26),
	(328, '0o6debx8ly427uszc9wtm3afiphnvjgkq5r1', 27),
	(329, '86hosenfa1cmt7xk0id54rypl9vujzbwg23q', 23),
	(330, '9wft6rxvpk8mj3lcu5ieh1z2yq4dosgb07an', 23),
	(331, '04vra7bfd95gw2lyznj1s6tqp8cxuiemh3ko', 23),
	(332, 'anguhftdiwb6m9y35xlz70ojqseck4vr8p21', 23),
	(333, '3iugv27owxal0e65cyznjqps1rb9mf48hdkt', 23),
	(334, 'yfdcmebrpnjl8436owh15tqa0zv7s9x2kigu', 23),
	(335, 'eb3gtjwshiomn956k4z0xydvfqu1pc2a8lr7', 23),
	(336, 'c5t1236rupegyfzvq90aksjlmn7o8dxibh4w', 23),
	(337, '407d2keupyf3h6ljocsxr19vab8mqinw5tzg', 23),
	(338, 'of3d4lckisy2j6h9uabrg017zpx5ne8qtwvm', 23),
	(339, '2oig8ps1q6yc7f4uv50kxtrh9ejnl3mbzadw', 23),
	(340, 'ri4uht3qcyjpwmzv8oasxel7k95n0dgf1b26', 23),
	(341, 'mitoqvxpzskj8ghwaru791l2f53n64yde0bc', 23),
	(342, 'jhntkbf5gp1avmx03ir8q29u67wzscyeol4d', 23),
	(343, 'lqi5846pyw9kscdoxg1fb72nhmzaj30teruv', 23),
	(344, 'oxljdq9giem30a164vrf2cwu7bhnky8pz5ts', 23),
	(345, 'pm87i2r9cgjbsk3lu064tyvxaqf5dhzeon1w', 23),
	(346, 'hl6jmtkyusxbd0823f1q5iacp7gv4reo9wnz', 23),
	(347, 'c4r18jgxufp5sqk9b7nyaeohv2i0mw6zt3dl', 23),
	(348, 'y9mpo12b3ezq5f78406tncjkvdixwruashlg', 23),
	(349, 'aq4g6n1kmlji09hroe2uwfp7yv8btz5sd3xc', 23),
	(350, 'ixcq8rw7d36outs2byvgkj1e05ah4nz9fpml', 23),
	(351, '3emtn5rqdlx19g8cijykp64bow0uf27azhsv', 23),
	(352, '8btuze0woinpaqfxjhv36rk54md1l2sc7g9y', 23),
	(353, 'ro16c8wndgbyiz4mf7pj0va9hu5lt2qxks3e', 23),
	(354, '5w8tjaomd3yxv4b9ens27kqz0f1g6iuhrlcp', 23),
	(355, 'jlb5gyrp0n7t19a8wk2ufchvzxeq6d3oi4sm', 23),
	(356, '23rnqhb9paxkug78v4d56z1mscytol0efjwi', 23);

-- Dumping structure for table spc_alumni.alumni_evulation
CREATE TABLE `alumni_evulation` (
  `alum_evu_id` int NOT NULL AUTO_INCREMENT,
  `bullet_id` int NOT NULL DEFAULT '0',
  `user_id` int NOT NULL DEFAULT '0',
  `survey_info_id` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`alum_evu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.alumni_evulation: ~3 rows (approximately)
INSERT INTO `alumni_evulation` (`alum_evu_id`, `bullet_id`, `user_id`, `survey_info_id`, `created_at`) VALUES
	(1, 3, 23, 2, '2022-12-09 14:41:12'),
	(2, 6, 23, 2, '2022-12-09 14:41:12'),
	(3, 11, 23, 2, '2022-12-09 14:41:12');

-- Dumping structure for table spc_alumni.applicant
CREATE TABLE `applicant` (
  `applicant_id` int NOT NULL AUTO_INCREMENT,
  `job_id` int NOT NULL DEFAULT '0',
  `p_info_id` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '0' COMMENT '0 = pending, 1 = declined, 2 = hired',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`applicant_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.applicant: ~0 rows (approximately)

-- Dumping structure for table spc_alumni.approval_users
CREATE TABLE `approval_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.approval_users: ~4 rows (approximately)
INSERT INTO `approval_users` (`id`, `type`) VALUES
	(0, 'Pending'),
	(1, 'Confirmed'),
	(2, 'Enable'),
	(3, 'Disapproved');

-- Dumping structure for table spc_alumni.bullet_survey
CREATE TABLE `bullet_survey` (
  `bullet_id` int NOT NULL AUTO_INCREMENT,
  `descriptions` varchar(255) DEFAULT NULL,
  `status` int DEFAULT '0',
  `survey_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bullet_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.bullet_survey: ~11 rows (approximately)
INSERT INTO `bullet_survey` (`bullet_id`, `descriptions`, `status`, `survey_id`, `created_at`, `updated_at`) VALUES
	(1, 'Lack of Work Experience', 0, 1, '2022-12-07 14:59:36', '2022-12-07 14:59:42'),
	(2, 'Taking Advanced Studies/Second degree Program', 0, 1, '2022-12-07 15:00:28', '2022-12-07 15:02:51'),
	(3, 'Prenancy/Family Concern', 0, 1, '2022-12-07 15:00:50', '2022-12-07 15:02:48'),
	(4, 'Engaging in Business', 0, 1, '2022-12-07 15:01:10', '2022-12-07 15:01:10'),
	(5, 'Unemployed', 0, 2, '2022-12-07 15:01:34', '2022-12-07 15:01:38'),
	(6, 'Job Order', 0, 2, '2022-12-07 15:01:46', '2022-12-07 15:01:46'),
	(7, 'Self Employed', 0, 2, '2022-12-07 15:01:59', '2022-12-07 15:01:59'),
	(8, 'Contractual', 0, 2, '2022-12-07 15:02:08', '2022-12-07 15:02:08'),
	(9, 'Project-based', 0, 2, '2022-12-07 15:02:19', '2022-12-07 15:02:19'),
	(10, 'Regular/Permanent', 0, 2, '2022-12-07 15:02:43', '2022-12-07 15:02:43'),
	(11, 'testinggg', 0, 3, '2022-12-08 17:27:32', '2022-12-08 17:27:33');

-- Dumping structure for table spc_alumni.course
CREATE TABLE `course` (
  `course_id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(50) DEFAULT NULL,
  `descriptions` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`course_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.course: ~2 rows (approximately)
INSERT INTO `course` (`course_id`, `code`, `descriptions`, `created_at`) VALUES
	(1, 'BSIT', 'Bachelor of Science in Information Technology', '2022-11-17 16:05:10'),
	(2, 'BSCS', 'bachelor of science in computer science', '2022-11-17 16:05:22');

-- Dumping structure for table spc_alumni.error_logs
CREATE TABLE `error_logs` (
  `iderror_logs` int NOT NULL AUTO_INCREMENT,
  `descriptions` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`iderror_logs`)
) ENGINE=InnoDB AUTO_INCREMENT=360 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.error_logs: ~11 rows (approximately)
INSERT INTO `error_logs` (`iderror_logs`, `descriptions`, `created_at`) VALUES
	(349, '"token=rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc&age=31-40&sex=M&civil_status=S&office_address=dsafdsafdsa&year_graduated=2&course_taken=2&bullet_survey2=1&bullet_survey3=7&bullet_survey4=11"', '2022-12-09 14:20:43'),
	(350, '{"token":"rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc","age":"31-40","sex":"M","civil_status":"S","office_address":"dsafdsafdsa","year_graduated":"2","course_taken":"2","bullet_survey2":"1","bullet_survey3":"7","bullet_survey4":"11"}', '2022-12-09 14:20:43'),
	(351, '"token=rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc&age=26-30&sex=M&civil_status=S&office_address=dsafadsf&year_graduated=1&course_taken=2&bullet_survey2=2&bullet_survey3=7&bullet_survey4=11"', '2022-12-09 14:26:26'),
	(352, '{"token":"rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc","age":"26-30","sex":"M","civil_status":"S","office_address":"dsafadsf","year_graduated":"1","course_taken":"2","bullet_survey2":"2","bullet_survey3":"7","bullet_survey4":"11"}', '2022-12-09 14:26:26'),
	(353, '"token=rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc&age=31-40&sex=M&civil_status=S&office_address=123&year_graduated=1&course_taken=2&bullet_survey%5B%5D=1&bullet_survey%5B%5D=7&bullet_survey%5B%5D=11"', '2022-12-09 14:36:07'),
	(354, '{"token":"rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc","age":"31-40","sex":"M","civil_status":"S","office_address":"123","year_graduated":"1","course_taken":"2","bullet_survey":["1","7","11"]}', '2022-12-09 14:36:07'),
	(355, '"token=rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc&age=31-40&sex=M&civil_status=S&office_address=dsafadsf&year_graduated=2&course_taken=2&bullet_survey%5B%5D=3&bullet_survey%5B%5D=6&bullet_survey%5B%5D=11"', '2022-12-09 14:41:12'),
	(356, '{"token":"rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc","age":"31-40","sex":"M","civil_status":"S","office_address":"dsafadsf","year_graduated":"2","course_taken":"2","bullet_survey":["3","6","11"]}', '2022-12-09 14:41:12'),
	(357, '"token=rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc&age=22-25&sex=M&civil_status=S&office_address=dsafdsafa&year_graduated=2&course_taken=2&bullet_survey%5B%5D=1&bullet_survey%5B%5D=6&bullet_survey%5B%5D=11"', '2022-12-09 14:44:39'),
	(358, '{"token":"rupqt9nm7j641s82gi5zw3kdlyexb0oafvhc","age":"22-25","sex":"M","civil_status":"S","office_address":"dsafdsafa","year_graduated":"2","course_taken":"2","bullet_survey":["1","6","11"]}', '2022-12-09 14:44:39'),
	(359, '{"type":"USD","amount":24.359988}', '2022-12-09 14:46:41');

-- Dumping structure for table spc_alumni.events
CREATE TABLE `events` (
  `event_id` int NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL DEFAULT '0',
  `when` datetime NOT NULL,
  `where` varchar(255) NOT NULL DEFAULT '0',
  `desciptions` varchar(255) NOT NULL DEFAULT '0',
  `banner` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.events: ~2 rows (approximately)
INSERT INTO `events` (`event_id`, `event_name`, `when`, `where`, `desciptions`, `banner`, `created_at`, `updated_at`) VALUES
	(1, 'TEsting', '2022-12-05 22:40:00', 'Saray', 'Diyande', 'http://192.168.254.136:80/images/event_logo/TEsting_1670251561.png', '2022-12-05 14:46:01', '2022-12-05 14:46:01'),
	(2, 'Covid Free', '2022-12-05 23:51:00', 'Saray', 'Covidddd Testinggggg', 'http://192.168.254.136:80/images/event_logo/Covid Free_1670255516.jpg', '2022-12-05 15:51:55', '2022-12-05 15:51:55');

-- Dumping structure for table spc_alumni.job
CREATE TABLE `job` (
  `job_id` int NOT NULL AUTO_INCREMENT,
  `job_title` varchar(255) CHARACTER SET utf8mb4  NOT NULL DEFAULT '0',
  `job_descriptions` varchar(2000) CHARACTER SET utf8mb4  NOT NULL DEFAULT '0',
  `course_id` int NOT NULL DEFAULT '0',
  `job_image` varchar(255) CHARACTER SET utf8mb4  NOT NULL DEFAULT '0',
  `min_salary` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `max_salary` decimal(20,6) NOT NULL DEFAULT '0.000000',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '0 = active, 1 = not active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `address` varchar(255) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `time_type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.job: ~18 rows (approximately)
INSERT INTO `job` (`job_id`, `job_title`, `job_descriptions`, `course_id`, `job_image`, `min_salary`, `max_salary`, `status`, `created_at`, `updated_at`, `address`, `company_name`, `time_type`) VALUES
	(1, 'web developer', 'dsafdas', 1, 'https://assets.justinmind.com/wp-content/uploads/2020/01/free-vector-image-designs-header-768x492.png', 2545.000000, 2545.000000, 0, '2022-12-05 03:38:16', '2022-12-05 04:35:39', NULL, NULL, NULL),
	(2, 'Graphic Design', 'dsafdas', 1, 'https://assets.justinmind.com/wp-content/uploads/2020/01/free-vector-image-designs-header-768x492.png', 0.000000, 0.000000, 0, '2022-12-05 04:35:15', '2022-12-05 04:35:40', NULL, NULL, NULL),
	(3, 'web developer', 'dsaljkfhasdjkfhdsakjfhsdjkafjhdsafhjksdafhjkdsafadkjswfh\r\ndsafjlsdkafaslknkljsdfhjkhjkasfsa\r\ndsafjksdahfjsdf', 2, 'https://assets.justinmind.com/wp-content/uploads/2020/01/free-vector-image-designs-header-768x492.png', 22000.000000, 232.000000, 0, '2022-12-05 08:40:01', '2022-12-05 08:57:39', NULL, NULL, NULL),
	(4, 'web developer', 'dsaljkfhasdjkfhdsakjfhsdjkafjhdsafhjksdafhjkdsafadkjswfh\r\ndsafjlsdkafaslknkljsdfhjkhjkasfsa\r\ndsafjksdahfjsdf', 2, 'http://192.168.254.136/images/company_logo/BP%20Computer_1670247688.jpg', 22000.000000, 232.000000, 0, '2022-12-05 08:41:22', '2022-12-05 13:46:40', 'Morales Street, Pob. West, Santa Ignacia', 'Google ', 'Freelancer'),
	(5, 'Social Media Manager', 'If you have some experience in running campaigns on social media platforms, you could sign up to help businesses promote their products through Instagram, Facebook, Twitter, etc. Companies may also need help with managing comments, growing their community, and improving their social-selling efforts. As long as you’re able to add your voice and creativity to posts by creating shareable videos or including hilarious GIFs, you can start taking on clients today.', 1, 'http://192.168.254.136/images/company_logo/BP%20Computer_1670247688.jpg', 300.000000, 30000.000000, 0, '2022-12-05 08:47:17', '2022-12-05 13:46:41', 'Morales Street, Pob. West, Santa Ignacia', 'Google ', 'Full-Time'),
	(6, 'Web Developer', 'Web developer experience 5 years', 1, 'http://192.168.254.136/images/company_logo/BP%20Computer_1670247688.jpg', 1000.000000, 80000.000000, 0, '2022-12-05 09:06:48', '2022-12-05 13:46:42', 'Tomas Cabili Avenue', 'BP Computer', 'Full-Time'),
	(7, 'Fullstock Developer', 'A full stack developer is a web developer or engineer who works with both the front and back ends of a website or application. In this sense, they provide an end-to-end service, and can be involved in projects that involve databases and building user-facing websites.', 1, 'http://192.168.254.136:80/images/company_logo/Google_1670248421.png', 100000.000000, 200000.000000, 0, '2022-12-05 13:53:41', '2022-12-05 13:53:41', 'Morales Street, Pob. West, Santa Ignacia', 'Google', 'Full-Time'),
	(8, 'PHP Developer', 'We are looking to hire a talented PHP developer to manage our back-end services and ensure a seamless interchange of data between the server and our users. As a PHP developer, you will be responsible for developing and coding all server-side logic. You will also be required to maintain the central database and respond to requests from front-end developers.', 2, 'http://192.168.254.136:80/images/company_logo/PHP_1670248932.png', 60000.000000, 200000.000000, 0, '2022-12-05 14:02:12', '2022-12-05 14:02:12', 'Saray Iligan CIty', 'PHP', 'Full-Time'),
	(9, 'PHP Developer', 'dsaf', 1, 'http://192.168.254.136:80/images/company_logo/BP Computer_1670257476.jpg', 222.000000, 221.000000, 0, '2022-12-05 16:24:35', '2022-12-05 16:24:35', 'Tomas Cabili Avenue', 'BP Computer', 'Full-Time'),
	(10, 'Web Developer', 'dafdaf', 1, 'http://192.168.254.136:80/images/company_logo/BP Computer_1670257525.jpg', 32.000000, 32.000000, 0, '2022-12-05 16:25:25', '2022-12-05 16:25:25', '2313123', 'BP Computer', 'Full-Time'),
	(11, 'Social Media Manager', 'dasfdasf', 1, 'http://192.168.254.136:80/images/company_logo/BP Computer_1670258767.png', 2000.000000, 2000.000000, 0, '2022-12-05 16:46:07', '2022-12-05 16:46:07', 'Purok 2, Tibanga-Saray', 'BP Computer', 'Full-Time'),
	(12, 'Social Media Manager', '21321', 1, 'http://192.168.254.136:80/images/company_logo/BP Computer_1670259711.png', 123.000000, 123213.000000, 0, '2022-12-05 17:01:51', '2022-12-05 17:01:51', '123213', 'BP Computer', 'Part-Time'),
	(13, 'Social Media Manager', '21321', 1, 'http://192.168.254.136:80/images/company_logo/BP Computer_1670259835.png', 123.000000, 123213.000000, 0, '2022-12-05 17:03:55', '2022-12-05 17:03:55', '123213', 'BP Computer', 'Part-Time'),
	(14, 'Social Media Manager', 'dsafdasf', 1, 'http://192.168.254.136:80/images/company_logo/BP Computer_1670259909.png', 23.000000, 32.000000, 0, '2022-12-05 17:05:09', '2022-12-05 17:05:09', 'Morales Street, Pob. West, Santa Ignacia', 'BP Computer', 'Part-Time'),
	(15, 'PHP Developer ', '10 years experience\r\nRequired Skill\r\nPHP', 1, 'http://192.168.254.136:80/images/company_logo/MArvin The great_1670260812.jpg', 20000.000000, 2000000.000000, 0, '2022-12-05 17:20:11', '2022-12-05 17:20:11', 'Morales Street, Pob. West, Santa Ignacia', 'MArvin The Great', 'Part-Time'),
	(16, 'Fullstack Developer', '20 years experience\r\nSkill Requirement\r\nPHP, GIT , LINUX', 2, 'http://192.168.254.136:80/images/company_logo/Google_1670260983.jpg', 50000.000000, 500000.000000, 0, '2022-12-05 17:23:03', '2022-12-05 17:23:03', 'Mountain View, California, United States', 'Google', 'Full-Time'),
	(17, 'Software Engineer', 'Software Engineer 10 years experience', 1, 'http://192.168.254.136:80/images/company_logo/Google _1670261128.jpg', 56000.000000, 560000.000000, 0, '2022-12-05 17:25:28', '2022-12-05 17:25:28', 'Mountain View, California, United States', 'Google ', 'Full-Time'),
	(18, 'CS INSTRUCTOR', 'ULOK', 2, 'http://192.168.254.136:80/images/company_logo/SPC_1670338302.png', 123.000000, 12312312.000000, 0, '2022-12-06 14:51:42', '2022-12-06 14:51:42', 'Mountain View, California, United States', 'SPC', 'Part-Time');

-- Dumping structure for table spc_alumni.personal_info
CREATE TABLE `personal_info` (
  `p_info_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  `zip_code` varchar(255) DEFAULT NULL,
  `zone` varchar(255) DEFAULT NULL,
  `landmark` varchar(255) DEFAULT NULL,
  `barangay` varchar(255) DEFAULT NULL,
  `house_no` varchar(255) DEFAULT NULL,
  `discrict_code` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `birthdate` varchar(255) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `verify_number` tinyint DEFAULT '0' COMMENT '0 = not verify, 1 = verify',
  `course_id` int DEFAULT NULL,
  `sy_id` int DEFAULT NULL,
  PRIMARY KEY (`p_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.personal_info: ~5 rows (approximately)
INSERT INTO `personal_info` (`p_info_id`, `user_id`, `first_name`, `last_name`, `middle_name`, `street`, `city`, `province`, `zip_code`, `zone`, `landmark`, `barangay`, `house_no`, `discrict_code`, `address`, `birthdate`, `gender`, `contact_no`, `image`, `created_at`, `updated_at`, `verify_number`, `course_id`, `sy_id`) VALUES
	(35, 22, 'moker', 'mokrs', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09755983121', 'http://192.168.254.136/images/company_logo/BP%20Computer_1670247688.jpg', '2022-12-04 11:15:44', '2022-12-05 14:50:14', 0, 1, 2),
	(36, 23, 'marvin', 'villanea', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09755983121', 'http://192.168.254.136/images/company_logo/BP%20Computer_1670247688.jpg', '2022-12-04 11:56:33', '2022-12-05 14:50:15', 0, 1, 3),
	(37, 24, 'Carlito', 'Montes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09519449123', 'http://192.168.254.136/images/company_logo/BP%20Computer_1670247688.jpg', '2022-12-05 01:15:43', '2022-12-05 14:50:15', 0, 1, 1),
	(38, 25, 'mokers1', 'mokers1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09755983121', 'http://192.168.254.136/images/company_logo/BP%20Computer_1670247688.jpg', '2022-12-05 14:11:19', '2022-12-05 17:21:28', 0, 2, 2),
	(40, 27, 'jericho', 'balucan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '09691352671', 'https://cdn-icons-png.flaticon.com/512/3135/3135715.png', '2022-12-06 14:49:31', '2022-12-06 14:49:31', 0, 2, 3);

-- Dumping structure for table spc_alumni.survey
CREATE TABLE `survey` (
  `survey_id` int NOT NULL AUTO_INCREMENT,
  `descriptions` varchar(255) DEFAULT NULL,
  `status_id` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.survey: ~3 rows (approximately)
INSERT INTO `survey` (`survey_id`, `descriptions`, `status_id`, `created_at`, `updated_at`) VALUES
	(1, 'Reasons of Unemployed ', 0, '2022-12-07 14:52:33', '2022-12-07 14:52:33'),
	(2, 'Current Employment Status of Alumni', 0, '2022-12-07 14:53:04', '2022-12-07 14:53:04'),
	(3, 'Skills Developed from SPC - Acquired', 0, '2022-12-08 16:59:38', '2022-12-08 16:59:38');

-- Dumping structure for table spc_alumni.survey_information
CREATE TABLE `survey_information` (
  `survey_info_id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `age` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `civil_status` varchar(50) DEFAULT NULL,
  `office_address` varchar(255) DEFAULT NULL,
  `sy_id` int DEFAULT NULL,
  `course_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`survey_info_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.survey_information: ~2 rows (approximately)
INSERT INTO `survey_information` (`survey_info_id`, `user_id`, `age`, `sex`, `civil_status`, `office_address`, `sy_id`, `course_id`, `created_at`) VALUES
	(1, 23, '31-40', 'M', 'S', '123', 1, 2, '2022-12-09 14:36:07'),
	(2, 23, '31-40', 'M', 'S', 'dsafadsf', 2, 2, '2022-12-09 14:41:12');

-- Dumping structure for table spc_alumni.sy
CREATE TABLE `sy` (
  `sy_id` int NOT NULL AUTO_INCREMENT,
  `sy` varchar(50) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sy_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.sy: ~3 rows (approximately)
INSERT INTO `sy` (`sy_id`, `sy`, `created_at`) VALUES
	(1, '2021-2022', '2022-11-17 16:26:02'),
	(2, '2020-2021', '2022-11-17 16:26:15'),
	(3, '2019-2020', '2022-11-17 16:26:26');

-- Dumping structure for table spc_alumni.users
CREATE TABLE `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` varchar(45) CHARACTER SET utf8mb4  DEFAULT NULL COMMENT '0 = not verify, 1 = verify',
  `user_type` varchar(45) DEFAULT NULL,
  `user_status` int DEFAULT '0',
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 ;

-- Dumping data for table spc_alumni.users: ~6 rows (approximately)
INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`, `user_type`, `user_status`, `created_at`, `updated_at`) VALUES
	(1, 'admin', 'admin@gmail.com', 'admin123', '1', '1', 0, '2022-09-23 02:36:01', '2022-09-23 02:36:01'),
	(22, 'moker', 'mokers1@gmaill.com', '123456789', '3', '2', 0, '2022-12-04 19:15:44', '2022-12-07 01:23:10'),
	(23, 'marvin', 'marvin@gmail.com', '1234', '1', '2', 0, '2022-12-04 19:56:33', '2022-12-07 23:16:33'),
	(24, 'Carlito', 'ker8171999@gmail.com', 'mokers1', '1', '2', 0, '2022-12-05 09:15:43', '2022-12-07 00:50:39'),
	(25, 'mokers1', 'mokers11@gmail.com', 'marvin', '1', '2', 0, '2022-12-05 22:11:19', '2022-12-07 00:36:09'),
	(27, 'jericho', 'jerichobalucan.180106@gmail.com', '123456', '1', '2', 0, '2022-12-06 22:49:31', '2022-12-06 23:57:43');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
