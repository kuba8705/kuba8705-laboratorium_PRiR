-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 11 Cze 2020, 23:22
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy_seriale`
--

CREATE TABLE `filmy_seriale` (
  `id` int(11) NOT NULL,
  `tytul` varchar(50) NOT NULL,
  `zdjecie` varchar(20) NOT NULL,
  `opis` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `typ` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `filmy_seriale`
--

INSERT INTO `filmy_seriale` (`id`, `tytul`, `zdjecie`, `opis`, `typ`) VALUES
(1, 'Skazani na Shawshank', 'img/01.jpg', 'Adaptacja opowiadania Stephena Kinga. Niesłusznie skazany na dożywocie bankier, stara się przetrwać w brutalnym, więziennym świecie.', 'film'),
(2, 'Zielona mila', 'img/02.jpg', 'Emerytowany strażnik więzienny opowiada przyjaciółce o niezwykłym mężczyźnie, którego skazano na śmierć za zabójstwo dwóch 9-letnich dziewczynek.', 'film'),
(3, 'Ojciec chrzestny', 'img/03.jpg', 'Opowieść o nowojorskiej rodzinie mafijnej. Starzejący się Don Corleone pragnie przekazać władzę swojemu synowi.', 'film'),
(4, 'Dwunastu gniewnych ludzi', 'img/04.jpg', 'Dwunastu przysięgłych ma wydać wyrok w procesie o morderstwo. Jeden z nich ma wątpliwości dotyczące winy oskarżonego.', 'film'),
(5, 'Forrest Gump', 'img/05.jpg', 'Historia życia Forresta, chłopca o niskim ilorazie inteligencji z niedowładem kończyn, który staje się miliarderem i bohaterem wojny w Wietnamie.\r\n', 'film'),
(6, 'Lista Schindlera', 'img/06.jpg', 'Historia przedsiębiorcy Oskara Schindlera, który podczas II wojny światowej uratował przed pobytem w obozach koncentracyjnych 1100 Żydów.', 'film'),
(7, 'Joker', 'img/07.jpg', 'Strudzony życiem komik popada w obłęd i staje się psychopatycznym mordercą.', 'film'),
(8, 'Beasts of No Nation', 'img/08.jpg', 'Dramat wojenny przybliża historię prosto z areny wojny domowej. Jej uczestnikiem stał się chłopiec Agu (Abraham Attah), pochodzący z niewielkiej, afrykańskiej wioski. Beztroskie dzieciństwo i poczucie bezpieczeństwa szybko jednak odchodzi w zapomnienie. Wraz z pojawieniem się oddziałów wojska i wybuchem zamieszek, życie chłopca zmienia się diametralnie. Kiedy Agu zostaje pozostawiony sam sobie, ucieka do lasu. Tam trafia na oddział składający się z młodych powstańców.', 'film'),
(9, 'Nie otwieraj oczu', 'img/09.jpg', 'Przejmujący thriller z Sandrą Bullock nie pozwoli oderwać wzroku od ekranu. Bullock gra kobietę próbującą ocalić swoje dzieci przed niszczycielską siłą zmuszającą ludzi do odbierania sobie życia. Mariole szuka ratunku w ucieczce w dół rwącej rzeki. Dodatkowy problem stanowi fakt, że zarówno ona, jak i jej dzieci, muszą spędzić dwa dni w podróży, podczas której nie mogą ściągać przepasek z oczu.', 'film'),
(10, 'Irlandczyk', 'img/10.jpg', 'Miłośnicy gangsterskich klimatów i epickich historii spędzą udany seans z „Irlandczykiem”. Robert De Niro, Al Pacino i Joe Pesci zabiorą Cię na prawdziwą ucztę kinomana. Tym razem odwiedzisz przestępczy półświatek powojennej Ameryki, widziany oczami zabójcy, Franka Sheerana.', 'film'),
(11, 'Dwoch papiezy', 'img/11.jpg', 'Obraz Fernanda Meirellesa - \"Dwóch papieży\" - zachwyca grą aktorską i doskonałą realizacją. Przedstawiona w nim historia jest oparta na kanwie prawdziwych wydarzeń. W opowieści przedstawiającej relacje między Josephem Ratzingerem (papieżem Benedyktem XV) a Jorge Bergoglio (papieżem Franciszkiem), główne role odegrali dwaj znakomici aktorzy - Anthony Hopkins i Jonathan Pryce.', 'film'),
(12, 'Zabojczy rejs', 'img/12.jpg', 'Doskonały duet aktorski - Adam Sandler i Jennifer Aniston w lekkiej komedii z kryminalnym wątkiem w tle dadzą okazję do wspaniałej zabawy. Policjant Nick i jego żona, Audrey, wybierają się w wymarzoną podróż po Europie. Podczas wyprawy małżeństwo poznaje Charlesa (Luke Evans), który zabiera parę na spotkanie na jachcie należącym do miliardera. Gospodarz zostaje jednak zamordowany, a podejrzenie w tej sprawie pada na Nicka i Audrey.', 'film'),
(13, 'Diego', 'img/13.jpg', 'Kolejny dokument o światowej gwieździe, tym razem piłki nożnej, w wykonaniu Asifa Kapadii. Reżysera interesuje głównie pobyt “boskiego” Diego Maradony w Neapolu, gdzie dla lokalnej drużyny zdobywał trofea w latach 80. XX wieku. Rozpoczyna od brawurowego przedstawienia przeszłości bohatera, by później powoli ukazywać blaski i cienie losów jednego z najwybitniejszych sportowców z tej dziedziny.', 'film'),
(15, 'Rok za rokiem', 'img/15.jpg', 'Serialowe opowieści o przyszłości zwykle sprowadzają się do bardzo odległych od naszej współczesności wydarzeń, gdzie potężny postęp technologiczny doprowadził do czegoś na kształt utopii lub (znacznie częściej) dystopii. Twórcy miniserialu „Rok za rokiem” zdecydowali się jednak na zupełnie inną fabułę. Produkcja HBO i BBC pokazuje społeczno-polityczny rozwój Wielkiej Brytanii w następnych piętnastu latach na przykładzie życia pojedynczej, pochodzącej z Manchesteru rodziny Lyonsów. Produkcja doczekała się pochwał przede wszystkim ze względu na swój sprytny scenariusz oraz dobrze dobraną obsadę. Serial obejrzycie na HBO GO.', 'serial'),
(16, 'The Mandalorian', 'img/16.jpg', 'Samotny łowca głów przemierza najdalsze zakątki galaktyki, z dala od władzy Nowej Republiki.', 'serial'),
(17, 'Nasza planeta', 'img/17.jpg', 'Widowiskowe ujęcia rzadko spotykanych zwierząt zostają zestawione z gorzkimi refleksjami o wpływie ludzkości na ich siedliska i inne gatunki zamieszkujące naszą planetę.', 'serial'),
(18, 'Czarnobyl', 'img/18.jpg', 'Po wybuchu elektrowni jądrowej w Czarnobylu ratownicy poświęcają zdrowie i życie, by ratować Europę przed skutkami katastrofy.', 'serial'),
(19, 'Euforia', 'img/19.jpg', 'Życie uzależnionej od narkotyków nastolatki zmienia się, gdy poznaje transseksualną dziewczynę, która przybyła do miasta.', 'serial'),
(20, 'Dobry Omen', 'img/20.jpg', 'Opowieść o wizji końca świata widzianej z perspektywy anioła, demona oraz jedenastoletniego antychrysta.', 'serial'),
(21, 'y', '', 'y', 'film');

--
-- Wyzwalacze `filmy_seriale`
--
DELIMITER $$
CREATE TRIGGER `FILM_SERIAL` BEFORE INSERT ON `filmy_seriale` FOR EACH ROW BEGIN
IF NEW.typ=!'serial' OR NEW.typ=!'film' THEN
    CALL `Error: musi byc albo film albo serial`;
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oceny`
--

CREATE TABLE `oceny` (
  `id_uzytkownika` int(11) NOT NULL,
  `id_filmu_serialu` int(11) NOT NULL,
  `ocena` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `oceny`
--

INSERT INTO `oceny` (`id_uzytkownika`, `id_filmu_serialu`, `ocena`) VALUES
(1, 8, 1),
(1, 18, 2),
(1, 13, 3),
(1, 20, 4),
(2, 11, 5),
(2, 11, 1),
(2, 4, 2),
(2, 19, 3),
(3, 19, 4),
(3, 8, 5),
(4, 5, 1),
(5, 19, 2),
(6, 19, 3),
(7, 11, 4),
(8, 20, 5),
(9, 13, 1),
(10, 20, 2),
(11, 13, 3),
(12, 20, 4),
(13, 13, 5),
(14, 3, 1),
(15, 7, 2),
(16, 18, 3),
(16, 19, 4),
(16, 4, 5),
(16, 11, 1),
(16, 13, 2),
(16, 16, 3),
(15, 9, 4),
(16, 2, 5),
(1, 11, 1),
(20, 3, 5);

--
-- Wyzwalacze `oceny`
--
DELIMITER $$
CREATE TRIGGER `SPRAWDZ` BEFORE INSERT ON `oceny` FOR EACH ROW BEGIN
IF NEW.ocena<1 OR NEW.ocena>5 THEN
    CALL `Error: pomiedzy 1 i 5`;
  END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `email` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_polish_ci NOT NULL,
  `haslo` text CHARACTER SET utf16 COLLATE utf16_polish_ci NOT NULL,
  `Data_Dolaczenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `email`, `haslo`, `Data_Dolaczenia`) VALUES
(1, '1@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2020-03-01'),
(2, '2@gmail.com', 'EF39FBF69170B58787CE4E574DB9D842', '2020-03-01'),
(3, '3@gmail.com', '3AB1FAAD513E753501264A716622BA06', '2020-03-05'),
(4, '4@gmail.com', '45992A02F948FE230C3265AE8175B91B', '2020-03-12'),
(5, '5@gmail.com', 'ED692E027C43C5F0F87039052E702A0B', '2020-03-19'),
(6, '6@gmail.com', '330FC8BB556C24621DEDB15ACD25F187', '2020-03-05'),
(7, '7@gmail.com', '89112C67768507CE7DC9BC92BA11A141', '2020-03-05'),
(8, '8@gmail.com', '4DD57649B523BFBA9ADD9447F4110EEB', '2020-03-05'),
(9, '9@gmail.com', '12FB8EBB4C5DCD1337245BB3730B0381', '2020-03-05'),
(10, '10@gmail.com', '3E5DC889D6D765A377D719C22A6949FE', '2020-03-05'),
(11, '11@gmail.com', '3F1BFE20BFACE460C8C64316B3B58C34', '2020-03-05'),
(12, '12@gmail.com', 'D818FDDA9B607DE69729F9E602ED56EF', '2020-03-03'),
(13, '13@gmail.com', '4F352F25539DEA0DD1C53EA76E4E4497', '2020-03-05'),
(14, '14@gmail.com', '22EF826989C1D8BE42ECAD47689975D4', '2020-03-06'),
(15, '15@gmail.com', '67AA131449DDD81364A4F817CA9310EB', '2020-03-07'),
(16, '16@gmail.com', '4CE895CB16A5563827376712DF12A617', '2020-03-19'),
(17, 'iii@gmail.com', '865c0c0b4ab0e063e5caa3387c1a8741', '2020-06-11'),
(18, 'oo@gmail.com', '0cc175b9c0f1b6a831c399e269772661', '2020-06-11'),
(19, '100@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2020-06-11'),
(20, 'b', '92eb5ffee6ae2fec3ad71c777531578f', '2020-06-11');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy_seriale`
--
ALTER TABLE `filmy_seriale`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD KEY `id_filmu/serialu` (`id_filmu_serialu`),
  ADD KEY `id_użytkownika` (`id_uzytkownika`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `filmy_seriale`
--
ALTER TABLE `filmy_seriale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `oceny`
--
ALTER TABLE `oceny`
  ADD CONSTRAINT `oceny_ibfk_1` FOREIGN KEY (`id_filmu_serialu`) REFERENCES `filmy_seriale` (`id`),
  ADD CONSTRAINT `oceny_ibfk_2` FOREIGN KEY (`id_uzytkownika`) REFERENCES `uzytkownicy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
