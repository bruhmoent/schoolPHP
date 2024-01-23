-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Lut 2017, 08:22
-- Wersja serwera: 10.1.19-MariaDB
-- Wersja PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ksiegarnia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `idklienta` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `miejscowosc` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`idklienta`, `imie`, `nazwisko`, `miejscowosc`) VALUES
(1, 'Grzegorz', 'Lewandowski', 'Kielce'),
(2, 'Jan', 'Nowak', 'Katowice'),
(3, 'Maciej', 'Nowak', 'Bydgoszcz'),
(4, 'Agnieszka', 'Jankowska', 'Lublin'),
(5, 'Tomasz', 'Mazur', 'Zgierz'),
(6, 'Marek', 'Kowalski', 'Lublin'),
(7, 'Artur', 'Rutkowski', 'Kielce'),
(8, 'Mateusz', 'Skorupa', 'Warszawa'),
(9, 'Jerzy', 'Rutkowski', 'Rybnik'),
(10, 'Anna', 'Karenina', 'Katowice'),
(11, 'Maria', 'Lewandowska', 'Bydgoszcz'),
(12, 'Henryk', 'Kowalski', 'Bydgoszcz'),
(13, 'Agnieszka', 'Nowak', 'Warszawa'),
(14, 'Piotr', 'Krupski', 'Zgierz');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `idksiazki` int(11) NOT NULL,
  `imieautora` text COLLATE utf8_polish_ci NOT NULL,
  `nazwiskoautora` text COLLATE utf8_polish_ci NOT NULL,
  `tytul` text COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`idksiazki`, `imieautora`, `nazwiskoautora`, `tytul`, `cena`) VALUES
(1, 'Jan', 'Michalak', 'Zaawansowane programowanie w PHP', 47.29),
(2, 'Andrzej', 'Krawczyk', 'Windows 8 PL. Zaawansowana administracja systemem', 49.99),
(3, 'Piotr', 'Jakubowski', 'HTML5. Tworzenie witryn', 53.65),
(4, 'Tomasz', 'Kowalski', 'Systemy operacyjne.', 34.15),
(5, 'Jan', 'Pasternak', 'PHP. Tworzenie nowoczesnych stron WWW', 29.99),
(6, 'Robin', 'Nixon', 'PHP, MySQL i JavaScript', 99),
(7, 'Jolanta', 'Pokorska', 'Tworzenie stron internetowych', 23.95);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `idzamowienia` int(11) NOT NULL,
  `idklienta` int(11) NOT NULL,
  `idksiazki` int(11) NOT NULL,
  `data` date NOT NULL,
  `status` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`idzamowienia`, `idklienta`, `idksiazki`, `data`, `status`) VALUES
(1, 2, 4, '2014-10-08', 'oczekiwanie'),
(2, 7, 1, '2014-09-05', 'wyslano'),
(3, 9, 1, '2014-10-11', 'wyslano'),
(4, 2, 2, '2014-10-15', 'oczekiwanie'),
(5, 2, 5, '2014-08-12', 'oczekiwanie'),
(6, 3, 2, '2014-10-20', 'wyslano'),
(7, 4, 3, '2014-08-14', 'wyslano'),
(8, 8, 1, '2014-08-19', 'wyslano'),
(9, 3, 5, '2014-11-19', 'wyslano'),
(10, 9, 2, '2014-12-28', 'oczekiwanie');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`idklienta`),
  ADD KEY `id` (`idklienta`);

--
-- Indexes for table `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`idksiazki`);

--
-- Indexes for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`idzamowienia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `idklienta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `idksiazki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `idzamowienia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
