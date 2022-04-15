-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2022. Ápr 14. 18:35
-- Kiszolgáló verziója: 10.4.22-MariaDB
-- PHP verzió: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `tarsashaz`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(11) NOT NULL,
  `nev` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `felhasznalonev` varchar(60) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(70) COLLATE utf8_hungarian_ci NOT NULL,
  `jelszo` varchar(40) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `nev`, `felhasznalonev`, `email`, `jelszo`) VALUES
(9, 'Farkas Bertalan ', 'berci', 'farkasberci@gmail.com', 'hajo'),
(10, 'Mugobe András', 'mugobe', 'mugobea@gmail.com', '12345'),
(11, 'Farkas Bertalan ', 'berci', 'farkasberci@gmail.com', 'nincs'),
(12, 'Magyar Ferenc', 'fleto', 'fleto@gmail.com', '1234567'),
(15, 'Gera András', 'geria', 'geeri@gmail.com', ''),
(17, 'Tóth Károly', 'karcsi', 'tothk@gmail.com', ''),
(18, '', '', '', ''),
(19, 'Rácz anna', 'add', 'anna@gmail.com', 'nincs'),
(20, '', '', '', '');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `karbantartasi_munkalatok`
--

CREATE TABLE `karbantartasi_munkalatok` (
  `hiba_azonosito` int(11) NOT NULL,
  `szerelo_nev` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `javitas_osszege` varchar(240) COLLATE utf8_hungarian_ci NOT NULL,
  `hiba_megnevezese` text COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `karbantartasi_munkalatok`
--

INSERT INTO `karbantartasi_munkalatok` (`hiba_azonosito`, `szerelo_nev`, `javitas_osszege`, `hiba_megnevezese`) VALUES
(2, '', '', ''),
(3, 'Mugobe Tamés', '300 000', 'Lift drótcsere');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `karbantartok`
--

CREATE TABLE `karbantartok` (
  `azonosito` int(11) NOT NULL,
  `Nev` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `Szakterulet` varchar(40) COLLATE utf8_hungarian_ci NOT NULL,
  `telefonszam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `karbantartok`
--

INSERT INTO `karbantartok` (`azonosito`, `Nev`, `Szakterulet`, `telefonszam`) VALUES
(1, 'Borbély Zsolt', 'Vízvezeték szerelő', 62011324),
(2, 'Fazekas Géza', 'Asztalos', 6514234),
(3, 'Márton Sándor', 'Gépész', 64303553),
(7, 'Zordi Béla', 'Villanyszerelő', 53246457),
(8, 'Káin Péter', 'Gépész', 764565453),
(11, 'Tóth János', 'Gépész', 2147483647),
(12, '', '', 0),
(13, '', '', 0),
(14, 'Mugobe Tamés', 'Gépész', 2147483647);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `lakasok`
--

CREATE TABLE `lakasok` (
  `hazszam` int(11) NOT NULL,
  `tulaj_neve` varchar(100) COLLATE utf8_hungarian_ci NOT NULL,
  `lakok_szama` int(11) NOT NULL,
  `negyzetmeter` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `lakasok`
--

INSERT INTO `lakasok` (`hazszam`, `tulaj_neve`, `lakok_szama`, `negyzetmeter`, `id`) VALUES
(0, '', 0, 0, NULL);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `karbantartasi_munkalatok`
--
ALTER TABLE `karbantartasi_munkalatok`
  ADD PRIMARY KEY (`hiba_azonosito`);

--
-- A tábla indexei `karbantartok`
--
ALTER TABLE `karbantartok`
  ADD PRIMARY KEY (`azonosito`);

--
-- A tábla indexei `lakasok`
--
ALTER TABLE `lakasok`
  ADD PRIMARY KEY (`hazszam`),
  ADD KEY `id` (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT a táblához `karbantartasi_munkalatok`
--
ALTER TABLE `karbantartasi_munkalatok`
  MODIFY `hiba_azonosito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT a táblához `karbantartok`
--
ALTER TABLE `karbantartok`
  MODIFY `azonosito` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `lakasok`
--
ALTER TABLE `lakasok`
  ADD CONSTRAINT `lakasok_ibfk_1` FOREIGN KEY (`id`) REFERENCES `felhasznalok` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
