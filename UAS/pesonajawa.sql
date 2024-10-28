-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2023 at 03:29 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesonajawa`
--

-- --------------------------------------------------------

--
-- Table structure for table `adriannus`
--

CREATE TABLE `adriannus` (
  `berita0007` char(11) NOT NULL,
  `beritaADRIANNUS` varchar(255) NOT NULL,
  `kategoriberita0007` char(4) NOT NULL,
  `event0007` char(10) NOT NULL,
  `travelKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adriannus`
--

INSERT INTO `adriannus` (`berita0007`, `beritaADRIANNUS`, `kategoriberita0007`, `event0007`, `travelKODE`) VALUES
('1', 'Headline', 'B001', 'EVT1', 'T002'),
('1111', '233', '333', '333', 'T001'),
('k', 'k', 'h', 'j', 'T002'),
('K005', 'Test', 'H00', '000', 'T002');

-- --------------------------------------------------------

--
-- Table structure for table `adriannusjs`
--

CREATE TABLE `adriannusjs` (
  `adriannusID` char(4) NOT NULL,
  `adriannusKOTA` varchar(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adriannusjs`
--

INSERT INTO `adriannusjs` (`adriannusID`, `adriannusKOTA`, `destinasiKODE`) VALUES
('A001', 'Adriannus Justin Setiawan', 'C001'),
('A002', 'Shibuya, Japan', 'C004'),
('A003', 'Kyoto, Japan', 'C003');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `destinasiKODE` char(4) NOT NULL,
  `destinasiNAMA` varchar(120) NOT NULL,
  `kategoriKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`destinasiKODE`, `destinasiNAMA`, `kategoriKODE`) VALUES
('C001', 'tea', 'T002'),
('C002', 'Pulau Komodo', 'T002'),
('C003', 'Pulau Seribu', 'T003'),
('C004', 'Semarang', 'T002');

-- --------------------------------------------------------

--
-- Table structure for table `destinasik`
--

CREATE TABLE `destinasik` (
  `destinasiKODE` char(4) NOT NULL,
  `destinasiNAMA` varchar(120) NOT NULL,
  `destinasiKET` text NOT NULL,
  `fotodestinasi` char(120) NOT NULL,
  `kategoriKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `destinasik`
--

INSERT INTO `destinasik` (`destinasiKODE`, `destinasiNAMA`, `destinasiKET`, `fotodestinasi`, `kategoriKODE`) VALUES
('C001', 'Candi Borobudur', 'he Buried Alive Model, often referred to by its code, the Buryman script, was the original intended final boss of the Pokemon Tower in Lavender Town from the original Pokemon games. It was replaced with the Marowak ghost eventually though. The scripted conversation with Buried Alive was as such, Buried Alive: You’re… here. BA: I’m trapped… BA: And I’m lonely… BA: So very lonely… BA: Won’t you join me? After w', '4.jpg', 'T001'),
('C002', 'Pulau Komodo', 'he Buried Alive Model, often referred to by its code, the Buryman script, was the original intended final boss of the Pokemon Tower in Lavender Town from the original Pokemon games. It was replaced with the Marowak ghost eventually though. The scripted conversation with Buried Alive was as such, Buried Alive: You’re… here. BA: I’m trapped… BA: And I’m lonely… BA: So very lonely… BA: Won’t you join me? After which, the battle is initiated. The Buried Alive model appeared to have been a decaying human corpse attempting to crawl out of the ground. It had been programmed to have two White Hands, a Gengar, and a Muk. Upon defeating them the game would freeze, however, a specific ending was coded in if you lost to them. Buried Alive would have said, “Finally, fresh meat!” followed by lines of gibberish. It would then show a scene of them dragging the player into the ground with them, followed by a normal game over screen. What’s strange is the console was coded to, after losing to Buried Alive, download the image of the player being dragged into the ground and replace the loading screen of the console with that image.', 'pulaukomodo.jpg', 'T002'),
('C003', 'Pulau Seribu', 'he Buried Alive Model, often referred to by its code, the Buryman script, was the original intended final boss of the Pokemon Tower in Lavender Town from the original Pokemon games. It was replaced with the Marowak ghost eventually though. The scripted conversation with Buried Alive was as such, Buried Alive: You’re… here. BA: I’m trapped… BA: And I’m lonely… BA: So very lonely… BA: Won’t you join me? After which, the battle is initiated. The Buried Alive model appeared to have been a decaying human corpse attempting to crawl out of the ground. It had been programmed to have two White Hands, a Gengar, and a Muk. Upon defeating them the game would freeze, however, a specific ending was coded in if you lost to them. Buried Alive would have said, “Finally, fresh meat!” followed by lines of gibberish. It would then show a scene of them dragging the player into the ground with them, followed by a normal game over screen. What’s strange is the console was coded to, after losing to Buried Alive, download the image of the player being dragged into the ground and replace the loading screen of the console with that image.', 'ca9687f9-0ef1-4f48-96da-9e454f83980d.jpg', 'T003'),
('C004', 'Semarang', 'he Buried Alive Model, often referred to by its code, the Buryman script, was the original intended final boss of the Pokemon Tower in Lavender Town from the original Pokemon games. It was replaced with the Marowak ghost eventually though. The scripted conversation with Buried Alive was as such, Buried Alive: You’re… here. BA: I’m trapped… BA: And I’m lonely… BA: So very lonely… BA: Won’t you join me? After which, the battle is initiated. The Buried Alive model appeared to have been a decaying human corpse attempting to crawl out of the ground. It had been programmed to have two White Hands, a Gengar, and a Muk. Upon defeating them the game would freeze, however, a specific ending was coded in if you lost to them. Buried Alive would have said, “Finally, fresh meat!” followed by lines of gibberish. It would then show a scene of them dragging the player into the ground with them, followed by a normal game over screen. What’s strange is the console was coded to, after losing to Buried Alive, download the image of the player being dragged into the ground and replace the loading screen of the console with that image.', 'ca9687f9-0ef1-4f48-96da-9e454f83980d.jpg', 'T001'),
('he1', 'hey', 'hey', 'faker.jpg', 'T002'),
('sea', 'sea', 'sea', 'santikahotel.jpg', 'T002'),
('test', 'test', 'test', '4.jpg', 'T001');

-- --------------------------------------------------------

--
-- Table structure for table `fotodestinasi`
--

CREATE TABLE `fotodestinasi` (
  `fotodestinasiKODE` char(4) NOT NULL,
  `fotodestinasiNAMA` char(120) NOT NULL,
  `fotodestinasiFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fotodestinasi`
--

INSERT INTO `fotodestinasi` (`fotodestinasiKODE`, `fotodestinasiNAMA`, `fotodestinasiFILE`, `destinasiKODE`) VALUES
('0002', 'Candi Prambanan', '4.jpg', 'C002'),
('0004', 'Candi biasa', 'santikahotel.jpg', 'C001'),
('0005', 'Candi Bc', 'ca9687f9-0ef1-4f48-96da-9e454f83980d.jpg', 'C003'),
('001', 'Test', 'faker.jpg', 'C003'),
('KP01', 'Candi Prambanan', '4.jpg', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelKODE` char(4) NOT NULL,
  `hotelNAMA` char(120) NOT NULL,
  `fotohotelFILE` char(120) NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelKODE`, `hotelNAMA`, `fotohotelFILE`, `destinasiKODE`) VALUES
('H001', 'Hotel Santika A', 'santikahotel.jpg', 'C001'),
('H002', 'Hotel Steven kartika', 'ca9687f9-0ef1-4f48-96da-9e454f83980d.jpg', 'C001'),
('H003', 'Hotel C', 'santikahotel.jpg', 'C002'),
('H004', 'Hotel D', 'santikahotel.jpg', 'C003');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriberita`
--

CREATE TABLE `kategoriberita` (
  `kategoriberitaKODE` char(4) NOT NULL,
  `kategoriberitaNAMA` varchar(60) NOT NULL,
  `kategoriberitaKET` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoriberita`
--

INSERT INTO `kategoriberita` (`kategoriberitaKODE`, `kategoriberitaNAMA`, `kategoriberitaKET`) VALUES
('t001', 'a', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriwisata`
--

CREATE TABLE `kategoriwisata` (
  `kategoriKODE` char(4) NOT NULL,
  `kategoriNAMA` char(20) NOT NULL,
  `kategoriKET` text NOT NULL,
  `kategoriREFERENCE` char(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategoriwisata`
--

INSERT INTO `kategoriwisata` (`kategoriKODE`, `kategoriNAMA`, `kategoriKET`, `kategoriREFERENCE`) VALUES
('T001', 'Bali', 'Indonesia', 'Kuta'),
('T002', 'Semarang', 'Indonesia', 'Semarang'),
('T003', 'Pulau Seribu', 'Indonesia', 'Pulau Seribu');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `komentarID` char(4) NOT NULL,
  `komentarNAMA` char(30) NOT NULL,
  `komentarEMAIL` char(60) NOT NULL,
  `komentarKET` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`komentarID`, `komentarNAMA`, `komentarEMAIL`, `komentarKET`) VALUES
('', '', '', 's'),
('0001', 'Adri', 'adri@gmail.com', 'keren'),
('0002', 'Adriann', 'adrian@gmail.com', 'Bagus'),
('1', '2', '3', '4'),
('ini', 'coba', 'coba', 'coba coba aja'),
('KM01', 'Justin', 'JustinS@gmail.com', 'Clean'),
('KM02', 'Setiawan', 'S123@gmail.com', 'Website nya bagus'),
('t01', 'test', 'test', 'test'),
('test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `manga`
--

CREATE TABLE `manga` (
  `mangaKODE` char(4) NOT NULL,
  `mangaNAMA` char(20) NOT NULL,
  `mangaKET` text NOT NULL,
  `fotomangaFILE` char(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manga`
--

INSERT INTO `manga` (`mangaKODE`, `mangaNAMA`, `mangaKET`, `fotomangaFILE`) VALUES
('M001', 'Berserk', 'Seinen', 'berserk.jpg'),
('M002', 'Jojo SBR', 'Seinen', 'jojo.jpg'),
('M003', 'Vagabond', 'Seinen', 'vagabond.jpg'),
('M004', 'Buku 01', 'FAKER', 'faker.jpg'),
('M005', 'Adriannus Justin', 'Buku 007', 'pulaukomodo.jpg'),
('test', 'test', 'test', '');

-- --------------------------------------------------------

--
-- Table structure for table `oleholeh`
--

CREATE TABLE `oleholeh` (
  `olehKODE` char(4) NOT NULL,
  `olehNAMA` char(20) NOT NULL,
  `olehKET` text NOT NULL,
  `destinasiKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oleholeh`
--

INSERT INTO `oleholeh` (`olehKODE`, `olehNAMA`, `olehKET`, `destinasiKODE`) VALUES
('0003', 'Kacang-kacangan', 'Snack oleh-oleh khas bali', 'C004'),
('KO01', 'Bolu kukus', 'Makanan oleh-oleh tradisional', 'C002'),
('KOO4', 'Kacang jawa', 'Oleh-oleh kacang', 'C002');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `restaurantKODE` char(4) NOT NULL,
  `restaurantNAMA` char(20) NOT NULL,
  `restaurantKET` text NOT NULL,
  `travelKODE` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`restaurantKODE`, `restaurantNAMA`, `restaurantKET`, `travelKODE`) VALUES
('R001', 'Resto A', 'Restaurant di Kuta bali', 'T001'),
('R002', 'Resto B', 'Restaurant di Semarang', 'T001'),
('R003', 'Resto C', 'Restaurant di Semarang', 'T002'),
('R004', 'Resto D', 'Restaurant di Kalimantan', 'T002'),
('R005', 'Resto E', 'Restaurant di Jakarta', 'T001');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `travelKODE` char(4) NOT NULL,
  `travelNAMA` char(20) NOT NULL,
  `travelKET` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`travelKODE`, `travelNAMA`, `travelKET`) VALUES
('T001', 'Jakarta', 'Tempat Makan'),
('T002', 'Yogyakarta', 'Tempat Belanja'),
('T003', 'Bali', 'Tempat Wisata');

-- --------------------------------------------------------

--
-- Table structure for table `useradmin`
--

CREATE TABLE `useradmin` (
  `userKODE` char(4) NOT NULL,
  `userNAMA` char(30) NOT NULL,
  `userEMAIL` char(60) NOT NULL,
  `userPASS` char(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useradmin`
--

INSERT INTO `useradmin` (`userKODE`, `userNAMA`, `userEMAIL`, `userPASS`) VALUES
('0001', 'Adriannus', 'adriannus@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adriannus`
--
ALTER TABLE `adriannus`
  ADD PRIMARY KEY (`berita0007`);

--
-- Indexes for table `adriannusjs`
--
ALTER TABLE `adriannusjs`
  ADD PRIMARY KEY (`adriannusID`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`destinasiKODE`);

--
-- Indexes for table `destinasik`
--
ALTER TABLE `destinasik`
  ADD PRIMARY KEY (`destinasiKODE`);

--
-- Indexes for table `fotodestinasi`
--
ALTER TABLE `fotodestinasi`
  ADD PRIMARY KEY (`fotodestinasiKODE`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelKODE`);

--
-- Indexes for table `kategoriberita`
--
ALTER TABLE `kategoriberita`
  ADD PRIMARY KEY (`kategoriberitaKODE`);

--
-- Indexes for table `kategoriwisata`
--
ALTER TABLE `kategoriwisata`
  ADD PRIMARY KEY (`kategoriKODE`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`komentarID`);

--
-- Indexes for table `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`mangaKODE`);

--
-- Indexes for table `oleholeh`
--
ALTER TABLE `oleholeh`
  ADD PRIMARY KEY (`olehKODE`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`restaurantKODE`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`travelKODE`);

--
-- Indexes for table `useradmin`
--
ALTER TABLE `useradmin`
  ADD PRIMARY KEY (`userKODE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
