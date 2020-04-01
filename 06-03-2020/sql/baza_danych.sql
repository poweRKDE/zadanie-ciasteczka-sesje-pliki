-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 30 Mar 2020, 17:06
-- Wersja serwera: 10.4.8-MariaDB
-- Wersja PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `marzec`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `baner`
--

CREATE TABLE `baner` (
  `baner_id` int(11) NOT NULL,
  `sciezka_banera` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `nazwa_banera` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `rozmiar_banera` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gallery`
--

CREATE TABLE `gallery` (
  `gallery_id` int(11) NOT NULL,
  `sciezka_zdjecia` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  `nazwa_zdjecia` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `rozszerzenie_zdjecia` varchar(60) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `klient_id` int(11) NOT NULL,
  `ip` varchar(12) COLLATE utf8_polish_ci NOT NULL,
  `strona` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `czas_wejscia` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `ciasteczka_logo` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `ciasteczka_baner` varchar(60) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `logo`
--

CREATE TABLE `logo` (
  `logo_id` int(11) NOT NULL,
  `sciezka_loga` varchar(60) COLLATE utf8_polish_ci NOT NULL,
  `nazwa_loga` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `rozmiar_loga` varchar(30) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `baner`
--
ALTER TABLE `baner`
  ADD PRIMARY KEY (`baner_id`);

--
-- Indeksy dla tabeli `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`klient_id`);

--
-- Indeksy dla tabeli `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `baner`
--
ALTER TABLE `baner`
  MODIFY `baner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT dla tabeli `gallery`
--
ALTER TABLE `gallery`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `klient_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT dla tabeli `logo`
--
ALTER TABLE `logo`
  MODIFY `logo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
