-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2006 at 10:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorial4all`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `aid` int(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`aid`, `admin_email`, `admin_pass`) VALUES
(1, 'ravikacha20@gmail.com', '55555'),
(2, 'rdkacha@gmail.com', 'ravikacha');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `cid` int(5) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cemail` varchar(30) NOT NULL,
  `cnumber` bigint(12) NOT NULL,
  `cquestion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`cid`, `cname`, `cemail`, `cnumber`, `cquestion`) VALUES
(3, 'ravi kacha', 'ravikacha20@gmail.com', 9033037076, 'helooo   admin how r u?'),
(4, 'ravi kacha', 'ravikacha20@gmail.com', 9033037076, 'helooo   admin how r u?'),
(5, 'abc', 'abc@gmail.com', 9033037076, 'hellloooo'),
(7, 'rd kacha', 'rdkacha@gmail.com', 9033037076, 'Hello admin h r u??'),
(8, 'rdkacha', 'ravikacha20@gmail.com', 9033037076, 'helloooooooooo'),
(9, 'rvi', 'ravikacha20@gmail.com', 9033037076, 'hiii admin h r u????'),
(10, 'shahrukh', 'shahrukhpathan@gmail.com', 7777917736, 'heeelooooo admin can i help you'),
(11, 'ravi kacha', 'ravikacha20@gmail.com', 9033037076, 'hellooo.......'),
(12, 'ravi kacha', 'ravikacha20@gmail.com', 9033037076, 'hellloooooooooo');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `lid` int(5) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `ldefination` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`lid`, `lname`, `ldefination`) VALUES
(1, 'php', 'php is stand for hypertext preprocesser'),
(4, 'Asp.Net', 'Active Server Page'),
(6, 'mysql', 'Stucture Query Language'),
(8, 'Web-2 XML & Ajax', 'xml,ajax'),
(9, 'Linux', 'Linux is open source'),
(10, 'Advance Software Engineering', 'advance software engineering'),
(11, 'Advance Php', 'php ,ajax,xml'),
(14, 'Mongodb', 'mongodb is new arrival programming language'),
(15, 'Android', 'Android is Open source programming language which is developed by google'),
(16, 'wordpress 3.0', 'wordpress is cantent management system');

-- --------------------------------------------------------

--
-- Table structure for table `mst_admin`
--

CREATE TABLE `mst_admin` (
  `id` int(11) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_admin`
--

INSERT INTO `mst_admin` (`id`, `loginid`, `pass`) VALUES
(1, 'ravi', '55555');

-- --------------------------------------------------------

--
-- Table structure for table `mst_question`
--

CREATE TABLE `mst_question` (
  `que_id` int(5) NOT NULL,
  `test_id` int(5) DEFAULT NULL,
  `que_desc` varchar(150) DEFAULT NULL,
  `ans1` varchar(75) DEFAULT NULL,
  `ans2` varchar(75) DEFAULT NULL,
  `ans3` varchar(75) DEFAULT NULL,
  `ans4` varchar(75) DEFAULT NULL,
  `true_ans` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_question`
--

INSERT INTO `mst_question` (`que_id`, `test_id`, `que_desc`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`) VALUES
(16, 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2),
(17, 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3),
(18, 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1),
(19, 9, 'Which of the follwing contexts are available in the add watch window?', 'Project', 'Module', 'Procedure', 'All', 4),
(20, 9, 'Which window will allow you to halt the execution of your code when a variable changes?', 'The call stack window', 'The immedite window', 'The locals window', 'The watch window', 4),
(22, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(23, 9, 'How can you print the object name associated with the last VB  error to the Immediate window?', 'Debug.Print Err.Number', 'Debug.Print Err.Source', 'Debug.Print Err.Description', 'Debug.Print Err.LastDLLError', 2),
(24, 9, 'What function does the TabStop property on a command button perform?', 'It determines whether the button can get the focus', 'If set to False it disables the Tabindex property.', 'It determines the order in which the button will receive the focus', 'It determines if the access key swquence can be used', 1),
(25, 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4),
(26, 10, 'Which of the following is Hungarian notation for a menu?', 'Menu', 'Men', 'mnu', 'MN', 3),
(27, 10, 'You are ready to run your program to see if it works.Which key on your keyboard will start the program?', 'F2', 'F3', 'F4', 'F5', 4),
(28, 10, 'Which of the following snippets of code will unload a form named frmFo0rm from memory?', 'Unload Form', 'Unload This', 'Unload Me', 'Unload', 3),
(29, 10, 'You want the text in text box named txtMyText to read My Text.In which property will you place this string?', 'Caption', 'Text', 'String', 'None of the above', 2),
(30, 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0),
(31, 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0),
(41, 12, 'what is manogodb??', '1', '2', '3', '4', 1),
(42, 12, 'what is db?', '1', '2', '3', '4', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_result`
--

CREATE TABLE `mst_result` (
  `login` varchar(20) DEFAULT NULL,
  `test_id` int(5) DEFAULT NULL,
  `test_date` date DEFAULT NULL,
  `score` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_result`
--

INSERT INTO `mst_result` (`login`, `test_id`, `test_date`, `score`) VALUES
('raj', 8, '0000-00-00', 3),
('raj', 9, '0000-00-00', 3),
('raj', 8, '0000-00-00', 1),
('ashish', 10, '0000-00-00', 3),
('ashish', 9, '0000-00-00', 2),
('ashish', 10, '0000-00-00', 0),
('raj', 8, '0000-00-00', 0),
('ankur', 11, '0000-00-00', 0),
('raj', 8, '0000-00-00', 0),
('0710', 12, '0000-00-00', 2),
('0710', 12, '0000-00-00', 0),
('0710', 12, '0000-00-00', 1),
('0710', 10, '0000-00-00', 3),
('0710', 11, '0000-00-00', 0),
('', 12, '0000-00-00', 2),
('', 11, '0000-00-00', 0),
('', 8, '0000-00-00', 1),
('', 9, '0000-00-00', 1),
('', 9, '0000-00-00', 1),
('', 10, '0000-00-00', 1),
('', 8, '0000-00-00', 2),
('', 8, '0000-00-00', 2),
('', 8, '0000-00-00', 1),
('', 11, '0000-00-00', 0),
('', 12, '0000-00-00', 1),
('', 8, '0000-00-00', 0),
('', 10, '0000-00-00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `mst_subject`
--

CREATE TABLE `mst_subject` (
  `sub_id` int(5) NOT NULL,
  `sub_name` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_subject`
--

INSERT INTO `mst_subject` (`sub_id`, `sub_name`) VALUES
(1, 'VB'),
(2, 'Oracle'),
(3, 'Java'),
(4, 'PHP'),
(5, 'Computer Fundamental'),
(6, 'Networking'),
(7, 'mysql'),
(8, 'mongodb');

-- --------------------------------------------------------

--
-- Table structure for table `mst_test`
--

CREATE TABLE `mst_test` (
  `test_id` int(5) NOT NULL,
  `sub_id` int(5) DEFAULT NULL,
  `test_name` varchar(30) DEFAULT NULL,
  `total_que` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_test`
--

INSERT INTO `mst_test` (`test_id`, `sub_id`, `test_name`, `total_que`) VALUES
(8, 1, 'VB Basic Test', '3'),
(9, 1, 'Essentials of VB', '5'),
(10, 1, 'Creating User Services', '5'),
(11, 7, 'function', '5'),
(12, 8, 'mongodb basic', '2');

-- --------------------------------------------------------

--
-- Table structure for table `mst_user`
--

CREATE TABLE `mst_user` (
  `user_id` int(5) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(15) DEFAULT NULL,
  `phone` bigint(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_user`
--

INSERT INTO `mst_user` (`user_id`, `login`, `pass`, `username`, `address`, `city`, `phone`, `email`) VALUES
(15, '0710', '0710', 'ravi', 'ravalpara', 'vanthali', 9033037076, 'ravikacha20@gmail.com'),
(16, '48966', '0710', 'ravi', 'vanthali', 'vanthali', 9033037076, 'ravikacha20@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mst_useranswer`
--

CREATE TABLE `mst_useranswer` (
  `sess_id` varchar(80) DEFAULT NULL,
  `test_id` int(11) DEFAULT NULL,
  `que_des` varchar(200) DEFAULT NULL,
  `ans1` varchar(50) DEFAULT NULL,
  `ans2` varchar(50) DEFAULT NULL,
  `ans3` varchar(50) DEFAULT NULL,
  `ans4` varchar(50) DEFAULT NULL,
  `true_ans` int(11) DEFAULT NULL,
  `your_ans` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mst_useranswer`
--

INSERT INTO `mst_useranswer` (`sess_id`, `test_id`, `que_des`, `ans1`, `ans2`, `ans3`, `ans4`, `true_ans`, `your_ans`) VALUES
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What  Default Data Type ?', 'String', 'Variant', 'Integer', 'Boolear', 2, 1),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'What is Default Form Border Style ?', 'Fixed Single', 'None', 'Sizeable', 'Fixed Diaglog', 3, 3),
('2b8e3337837b82112def8d3e2f42f26e', 8, 'Which is not type of Control ?', 'text', 'lable', 'checkbox', 'option button', 1, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 4),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 4),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('idjir9pcq2d07764us8rdiq9n5', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 1),
('vanur32fn0mjd36kso9k4bp223', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 3),
('vanur32fn0mjd36kso9k4bp223', 11, 'how to use date( ) in mysql ?', 'now( )', 'today( )', 'date( )', 'time( )', 0, 2),
('4jihn3napdngn6i0vo0vgoeh42', 12, 'what is manogodb??', '1', '2', '3', '4', 1, 1),
('4jihn3napdngn6i0vo0vgoeh42', 12, 'what is db?', '1', '2', '3', '4', 1, 2),
('kdpm84sg159nhsmfuufelks9d4', 10, 'You application creates an instance of a form. What is the first event that will be triggered in the from?', 'Load', 'GotFocus', 'Instance', 'Initialize', 4, 1),
('kdpm84sg159nhsmfuufelks9d4', 10, 'Which of the following is Hungarian notation for a menu?', 'Menu', 'Men', 'mnu', 'MN', 3, 3),
('kdpm84sg159nhsmfuufelks9d4', 10, 'You are ready to run your program to see if it works.Which key on your keyboard will start the program?', 'F2', 'F3', 'F4', 'F5', 4, 4),
('kdpm84sg159nhsmfuufelks9d4', 10, 'Which of the following snippets of code will unload a form named frmFo0rm from memory?', 'Unload Form', 'Unload This', 'Unload Me', 'Unload', 3, 1),
('kdpm84sg159nhsmfuufelks9d4', 10, 'You want the text in text box named txtMyText to read My Text.In which property will you place this string?', 'Caption', 'Text', 'String', 'None of the above', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `sbid` int(5) NOT NULL,
  `sbname` varchar(100) NOT NULL,
  `sbtutorial` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`sbid`, `sbname`, `sbtutorial`) VALUES
(29, 'mysql', '<p>â–ºravi<br />\r\nâ–ºravi</p>\r\n\r\n<p>&nbsp;</p>\r\n'),
(30, 'Asp.Net', '<p>â–ºintroduction of Asp.net<br />\r\nâ–ºasp.net object</p>\r\n'),
(31, 'mysql', '<p style="text-align: center;">mysql example...</p>\r\n'),
(33, 'Linux', '<p>â–ºlinux basic</p>\r\n'),
(34, 'php', '<p>â–º<span style="font-size:14px">PHP-Introduction</span></p>\r\n\r\n<p>â–ºPHP -Object</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `subtutorial`
--

CREATE TABLE `subtutorial` (
  `sid` int(5) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `stutorial` text NOT NULL,
  `fname` varchar(100) NOT NULL,
  `ftype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subtutorial`
--

INSERT INTO `subtutorial` (`sid`, `sname`, `stutorial`, `fname`, `ftype`) VALUES
(24, 'mysql', 'active Server Page active Server Page', '3.jpg', 'applican/pdf'),
(26, 'Asp.Net', 'ASP.NET is a web development platform,', 'Calculator.zip', 'applican/pdf'),
(27, 'Mongodb', 'Mongodb is newcommer language in saurashtra university                                        introduction of php', 'full.pdf', 'applican/zip'),
(28, 'Advance Software Engineering', 'Mongodb is newcommer language in saurashtra university introduction of php', 'PHP Operators _ PHP _ Tutorialink.com.html', 'applican/html'),
(29, 'Web-2 XML & Ajax', 'Mongodb is newcommer language in saurashtra university', 'ckeditor_4.5.9_full.zip', 'applican/zip'),
(31, 'php', 'The PHP Hypertext Preprocessor (PHP) is a programming language. ', 'IDM Optimizer v.02 [Stable].rar', 'applican/zip');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `tid` int(5) NOT NULL,
  `tname` varchar(100) NOT NULL,
  `ttutorial` text NOT NULL,
  `timage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`tid`, `tname`, `ttutorial`, `timage`) VALUES
(3, 'Asp.Net', '<p>An ASP.NET page is made up of a number of server controls along with HTML controls, text, and images. Sensitive data from the page and the states of different controls on the page are stored in hidden fields that form the context of that page request.</p>\r\n\r\n<p>ASP.NET runtime controls the association between a page instance and its state. An ASP.NET page is an object of the Page or inherited from it.</p>\r\n\r\n<p>All the controls on the pages are also objects of the related control class inherited from a parent Control class. When a page is run, an instance of the object page is created along with all its content controls.</p>\r\n\r\n<p>An ASP.NET page is also a server side file saved with the .aspx extension. It is modular in nature and can be divided into the following core sections:</p>\r\n\r\n<ul>\r\n	<li>Page Directives</li>\r\n	<li>Code Section</li>\r\n	<li>Page Layout</li>\r\n</ul>\r\n\r\n<h2>Page Directives</h2>\r\n\r\n<p>The page directives set up the environment for the page to run. The @Page directive defines page-specific attributes used by ASP.NET page parser and compiler. Page directives specify how the page should be processed, and which assumptions need to be taken about the page.</p>\r\n\r\n<p>It allows importing namespaces, loading assemblies, and registering new controls with custom tag names and namespace prefixes.</p>\r\n\r\n<h2>Code Section</h2>\r\n\r\n<p>The code section provides the handlers for the page and control events along with other functions required. We mentioned that, ASP.NET follows an object model. Now, these objects raise events when some events take place on the user interface, like a user clicks a button or moves the cursor. The kind of response these events need to reciprocate is coded in the event handler functions. The event handlers are nothing but functions bound to the controls.</p>\r\n\r\n<p>The code section or the code behind file provides all these event handler routines, and other functions used by the developer. The page code could be precompiled and deployed in the form of a binary assembly.</p>\r\n\r\n<h2>Page Layout</h2>\r\n\r\n<p>The page layout provides the interface of the page. It contains the server controls, text, inline JavaScript, and HTML tags.</p>\r\n\r\n<p>The following code snippet provides a sample ASP.NET page explaining Page directives, code section and page layout written in C#:</p>\r\n\r\n<pre>\r\n&lt;!-- directives --&gt;\r\n&lt;% @Page Language=&quot;C#&quot; %&gt;\r\n\r\n&lt;!-- code section --&gt;\r\n&lt;script runat=&quot;server&quot;&gt;\r\n\r\n   private void convertoupper(object sender, EventArgs e)\r\n   {\r\n      string str = mytext.Value;\r\n      changed_text.InnerHtml = str.ToUpper();\r\n   }\r\n&lt;/script&gt;\r\n\r\n&lt;!-- Layout --&gt;\r\n&lt;html&gt;\r\n   &lt;head&gt; \r\n      &lt;title&gt; Change to Upper Case &lt;/title&gt; \r\n   &lt;/head&gt;\r\n   \r\n   &lt;body&gt;\r\n      &lt;h3&gt; Conversion to Upper Case &lt;/h3&gt;\r\n      \r\n      &lt;form runat=&quot;server&quot;&gt;\r\n         &lt;input runat=&quot;server&quot; id=&quot;mytext&quot; type=&quot;text&quot; /&gt;\r\n         &lt;input runat=&quot;server&quot; id=&quot;button1&quot; type=&quot;submit&quot; value=&quot;Enter...&quot; OnServerClick=&quot;convertoupper&quot;/&gt;\r\n         \r\n         &lt;hr /&gt;\r\n         &lt;h3&gt; Results: &lt;/h3&gt;\r\n         &lt;span runat=&quot;server&quot; id=&quot;changed_text&quot; /&gt;\r\n      &lt;/form&gt;\r\n      \r\n   &lt;/body&gt;\r\n   \r\n&lt;/html&gt;</pre>\r\n', 'Capture.JPG'),
(7, 'php', '<p>The PHP Hypertext Preprocessor (PHP) is a programming language that allows web developers to create dynamic content that interacts with databases. PHP is basically used for developing web based software applications. This tutorial helps you to build your base with PHP.</p>\r\n\r\n<h1>Audience</h1>\r\n\r\n<p>This tutorial is designed for PHP programmers who are completely unaware of PHP concepts but they have basic understanding on computer programming.</p>\r\n\r\n<h1>Prerequisites</h1>\r\n\r\n<p>Before proceeding with this tutorial you should have at least basic understanding of computer programming, Internet, Database, and MySQL etc is very helpful.</p>\r\n\r\n<p>.</p>\r\n\r\n<pre>\r\n&lt;html&gt;\r\n   &lt;head&gt;\r\n      &lt;title&gt;Online PHP Script Execution&lt;/title&gt;      \r\n   &lt;/head&gt;\r\n   \r\n   &lt;body&gt;\r\n      \r\n      &lt;?php\r\n         echo &quot;&lt;h1&gt;Hello, PHP!&lt;/h1&gt;&quot;;\r\n      ?&gt;\r\n   \r\n   &lt;/body&gt;\r\n&lt;/html&gt;</pre>\r\n', 'Capture1.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `mst_admin`
--
ALTER TABLE `mst_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_question`
--
ALTER TABLE `mst_question`
  ADD PRIMARY KEY (`que_id`);

--
-- Indexes for table `mst_subject`
--
ALTER TABLE `mst_subject`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `mst_test`
--
ALTER TABLE `mst_test`
  ADD PRIMARY KEY (`test_id`);

--
-- Indexes for table `mst_user`
--
ALTER TABLE `mst_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`sbid`);

--
-- Indexes for table `subtutorial`
--
ALTER TABLE `subtutorial`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `aid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `cid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `lid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `mst_admin`
--
ALTER TABLE `mst_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mst_question`
--
ALTER TABLE `mst_question`
  MODIFY `que_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT for table `mst_subject`
--
ALTER TABLE `mst_subject`
  MODIFY `sub_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `mst_test`
--
ALTER TABLE `mst_test`
  MODIFY `test_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mst_user`
--
ALTER TABLE `mst_user`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `sbid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `subtutorial`
--
ALTER TABLE `subtutorial`
  MODIFY `sid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `tid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
