-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2015 at 08:48 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gecg`
--

-- --------------------------------------------------------

--
-- Table structure for table `gecg_forgotpwd`
--

CREATE TABLE IF NOT EXISTS `gecg_forgotpwd` (
  `id` varchar(20) NOT NULL,
  `key` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gecg_questions`
--

CREATE TABLE IF NOT EXISTS `gecg_questions` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subject_no` int(10) NOT NULL,
  `que_content` text NOT NULL,
  `en_no` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gecg_response`
--

CREATE TABLE IF NOT EXISTS `gecg_response` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `subject_no` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `ans` text NOT NULL,
  `teacher_name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `gecg_subject`
--

CREATE TABLE IF NOT EXISTS `gecg_subject` (
  `subject_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `links_theory` varchar(500) NOT NULL,
  `links_practical` varchar(500) NOT NULL,
  PRIMARY KEY (`subject_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gecg_subject`
--

INSERT INTO `gecg_subject` (`subject_no`, `name`, `links_theory`, `links_practical`) VALUES
(160701, 'SE', '1)http://nptel.ac.in/courses/Webcourse-contents/IIT%20Kharagpur/Soft%20Engg/New_index1.html\r\n\r\n2)http://ocw.mit.edu/courses/aeronautics-and-astronautics/16-355j-software-engineering-concepts-fall-2005/lecture-notes/\r\n\r\n3)https://sites.google.com/a/galgotiasuniversity.edu.in/avadheshse/my-forms\r\n\r\n4)http://www.qiau.ac.ir/teacher/files/911610/13-11-1387-17-31-55.pdf\r\n\r\n5)http://www.uptu.ac.in/pdf/sub_mca_513_30sep14.pdf\r\n\r\n', '1)http://www.neduet.edu.pk/cise/docs/SE_2012.pdf\n\n2)http://enu.kz/repository/2009/AIAA-2009-3997.pdf\n\n3)https://books.google.co.in/books?id=YrM9xF6adb8C&pg=PA234&lpg=PA234&dq=software+engineering+practical+file&source=bl&ots=ZL-sejk43C&sig=MS2ui3KQipQemHUaPXxF0up1OK8&hl=en&sa=X&ei=CVX1VPHWEpWguQSVqYL4Dg&ved=0CEwQ6AEwBw#v=onepage&q=software%20engineering%20practical%20file&f=false\n\n4)http://fit.hcmup.edu.vn/~haits/English%20Courses/Technical%20Software%20Development/__Object_Oriented_Softwa'),
(160702, 'IS', '1)http://books.google.co.in/books?id=SWbn3lBe2FcC&printsec=frontcover&source=gbs_ge_summary_r&cad=0#v=onepage&q&f=false\r\n2) http://williamstallings.com/Crypto/Crypto4e.html  \r\n3) http://faculty.mu.edu.sa/public/uploads/1360993259.0858Cryptography%20and%20Network%20Security%20Principles%20and%20Practice,%205th%20Edition.pdf\r\n4)https://www.us-cert.gov/sites/default/files/.../infosecuritybasics.pdf\r\n5)privacy.med.miami.edu/tutorials/security_basics.pdf\r\n', '1)https://ico.org.uk/media/for-organisations/documents/1575/it_security_practical_guide.pdf\r\n2)http://www.uptu.ac.in/pdf/sub_eit_701_30sep14.pdf\r\n3)https://app.box.com/s/6ijf0eidff28mnc2pa4q'),
(160703, 'CG', '1)http://www.greenbookee.com/cg-notes-for-6th-sem-vtu/\r\n2)http://math.hws.edu/eck/cs424/downloads/graphicsnotes-linked.pdf\r\n3)http://ebooks6.com/Computer-graphics-pdf.html\r\n4)http://www.dgp.toronto.edu/~hertzman/418notes.pdf\r\n5)http://books.google.co.in/books?id=oBbY3uFIgM8C&printsec=frontcover#v=onepage&q&f=false\r\n', '1)http://cg.huminf.aau.dk/Module_I/1001.html\r\n2)http://www.crcpress.com/product/isbn/9781439852798\r\n3)http://escience.anu.edu.au/lecture/cg/02/a2/index.en.html\r\n4)http://www.scribd.com/doc/41550865/Computer-Graphics-Practical-Manual#scribd\r\n5)http://www.igi-global.com/chapter/teaching-computer-graphics-multimedia/27072\r\n'),
(161601, 'MSOR', '1)http://en.wikibooks.org/wiki/Operations_Research/The_Simplex_Method\n\n2)http://www.slideshare.net/dharmendragahwai/operational-reseach-ppt\n\n3)http://www.slideshare.net/ShivaniGautam/various-simplex-methods\n\n4)http://www.doc.ic.ac.uk/~br/berc/linearprog.pdf\n\n5)http://www.mu.ac.in/myweb_test/MCA%20study%20material/M.C.A.%28Sem%20-%20III%29%20Operation%20Research.pdf\n\n', '1)http://techforum4u.com/entry.php/578-Program-To-Find-The-Least-Cost-Method-%28-LCM%29\r\n\r\n2)http://techforum4u.com/entry.php/577-Program-For-North-West-Corner-Method\r\n\r\n3)http://rosettacode.org/wiki/Vogel%27s_approximation_method\r\n\r\n4)http://shodhganga.inflibnet.ac.in\r\n\r\n5)http://www.hungarianalgorithm.com/examplehungarianalgorithm.php'),
(161602, 'WTP', '1) http://www.techtutorials.net/\r\n\r\n2) http://www.w3resource.com/index.php\r\n\r\n3)http://www.tutorialspoint.com/index.htm\r\n\r\n4)https://www.khanacademy.org/computing/computer-programming\r\n\r\n5)http://www.skilledup.com/learn-web-design-guide/#onlinecourses', '1)http://www.w3schools.com/\r\n\r\n2)http://www.codecademy.com/tracks/web\r\n\r\n3)http://www.skilledup.com/learn-web-design-guide/#onlinecourses\r\n\r\n4)http://www.htmldog.com/guides/\r\n\r\n5)http://www.lynda.com/\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gecg_teachers`
--

CREATE TABLE IF NOT EXISTS `gecg_teachers` (
  `id` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gecg_users`
--

CREATE TABLE IF NOT EXISTS `gecg_users` (
  `en_no` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(15) NOT NULL,
  PRIMARY KEY (`en_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
