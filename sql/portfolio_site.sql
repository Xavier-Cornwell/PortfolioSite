-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2019 at 02:59 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `project` text NOT NULL,
  `goals` text NOT NULL,
  `challenge` text NOT NULL,
  `learned` text NOT NULL,
  `changes` text NOT NULL,
  `summary` text NOT NULL,
  `thought` text NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `project`, `goals`, `challenge`, `learned`, `changes`, `summary`, `thought`, `date`) VALUES
(1, 'Creating a website for Battle Ground Rugby. I was assigned a team of 3 people(including me) in class, and tasked with creating a website for Battleground rugby, who recently changed their name to Chinook Rugby. We were to use WordPress for the website. Our color palette was to use Chinook colors which we translated as reds, blacks, and whites.\r\n', 'We had various goals for the website. One of them being to get people to sign up for rugby. Another goal of ours was to show the values Chinook Rugby has. These values are around comradery, and Teamwork. We figured the primary users of the webpage would be parents. So there was an emphasis on making the website more friendly to those who don\'t know much about rugby.  The website also needed to stay more sports oriented in looks and focus.\r\n', 'One of the biggest challenges we faced was the lack of content. We were content starved until the last few days. This made it a crunch to get the website together, as content really shapes the website. Website information architecture took a few revisions to get down. As well as a last minute change to the architecture for a better flow on the homepage\r\nFinding a theme that matched a more sport oriented website. Another challenge with the theme was that the documentation was hard and tedious to follow. This made development time take longer.\r\n', 'I learned about the process of making a website for a client with a team. Working of my communication skills in a team setting was a great experience. I was able to work on my written communication on slack as well as my face to face interactions with the team. I also learned the importance of content to a website. The big takeaway was working with a client, and how that process can look.', 'After the first meeting to get an understanding of the goals of the client, I would ask the client to send content such as images and copy writing ASAP.  I feel like the process would have been a lot smoother if we had content earlier. As we were starved for content, we  set out to make a basic example of how their page should be as a sort of content template to the website. The website is now up and they have added more content but the information structure stayed the same. So I think we succeeded in that part. The other Thing I would change would be doing more research on the theme.', 'I was assigned a team of 3 people(including me) in class, and tasked with creating a website for Battleground rugby, who recently changed their name to Chinook Rugby. ', 'I feel like we succeeded at hitting our goals. I think the website is friendly and inviting while still having a more aggressive sports feeling. We also receive some praise for our teacher Erin Lynch about the website. The website is up today as of 6/17/2019. It feels really rewarding having a website that I helped create as part as a team. I look forward to taking the skills I learned from this project and taking it to the next.', '2019-06-18 02:16:44'),
(2, 'This project was to create a responsive website of 3 pages in our teams, for class. We came up with the idea of making a pro-vaccine website due to the Vancouver measles outbreak. The entire webpage was made with Bootstrap 4. For this project I took on the role of the developer. The other members were the designer and the Project Manager.', 'Our goals was to create an informative site that displays facts about vaccines.\r\nWe also wanted to send people to relevant places and to where we got those sources.\r\nThe website will have a poll to get data from the users\r\n', 'This was my first time ever using Bootstrap 4 to code a website. Everything took longer than if we were using grid which I knew how to use. But due to browser support we decided to go with Bootstrap 4. I also had to break out some of my JavaScript skills to help do a transition of the title to being apart of the navbar. I also had a short period of time to translate the designs due to the due date.', 'I learned a lot about Bootstrap 4 especially the navbar. I learned Bootstrap 4’s grid system as well as other classes. I also developed my problem solving skills to get what the designer wanted. The title fade into the navbar wasn\'t perfect as the mock-up as I lacked time. This project helped manage my time expectations when it comes to developing a site. Another aspect I got to work on was my reading of documentation.', 'The landing page was cool, but something felt wrong when I looked at it but I couldn\'t figure it out. When we presented our website it was brought to our attention that we forgot the tagline of the website. I would go back and add that. I would also spend more time making a custom poll. Due to time constraints I decided to use a third party application for the poll. I believe that the website would be cleaner and look nicer if I spent more time crafting the poll page. As well as I could display the results of what other users  picked for their answers.', 'This project was to create a responsive website of 3 pages in our teams, for class. We came up with the idea of making a pro-vaccine website due to the Vancouver measles outbreak. ', 'Overall I am very happy with this website. Going from no Bootstrap experience, to making a webpage fully from bootstrap 4 was very challenging. In the end it was rewarding and I learned a new skill that I could take to other projects. I find Bootstrap 4 to be very good at building sites quickly, although it does have its limitations with overlapping. The problem solving of translating a design to code was also fun as it felt like a fun puzzle. I am quite happy with this project and as of 6/17/19 the website is live.', '2019-06-18 02:26:11');

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `header` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `blog_id`, `header`) VALUES
(1, 1, 'Chinook Rugby'),
(2, 1, 'Creating a website that showed their values.'),
(3, 1, 'Content, Content, Content.'),
(4, 1, 'Teamwork, Content, and time management.'),
(5, 1, 'Content First'),
(6, 1, 'It went well.'),
(7, 2, 'VaccinesTruth.com'),
(8, 2, 'Inform'),
(9, 2, 'Translating designs to code'),
(10, 2, 'Bootstrap 4 bootcamp'),
(11, 2, 'The landing page'),
(12, 2, 'I enjoyed the process');

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `img_path` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img`
--

INSERT INTO `img` (`img_id`, `blog_id`, `img_path`) VALUES
(1, 1, 'chinook1.png'),
(2, 1, 'chinook2.png'),
(3, 1, 'chinook3.png'),
(4, 1, 'chinook4.png'),
(5, 1, 'chinook5.png'),
(6, 1, 'chinook6.png'),
(7, 2, 'vaccines1.png'),
(8, 2, 'vaccines2.png'),
(9, 2, 'vaccines3.png'),
(10, 2, 'vaccines4.png'),
(11, 2, 'vaccines5.png'),
(12, 2, 'vaccines6.png');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `link` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `blog_id`, `link`) VALUES
(1, 1, 'www.chinookrugby.com'),
(2, 2, 'vaccinestruth.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_id` (`blog_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `img`
--
ALTER TABLE `img`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `header`
--
ALTER TABLE `header`
  ADD CONSTRAINT `header_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`);

--
-- Constraints for table `img`
--
ALTER TABLE `img`
  ADD CONSTRAINT `img_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`);

--
-- Constraints for table `links`
--
ALTER TABLE `links`
  ADD CONSTRAINT `links_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
