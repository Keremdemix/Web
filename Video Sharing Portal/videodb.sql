-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 31 May 2023, 05:25:39
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `videodb`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('keremdemix', '123');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `video`
--

CREATE TABLE `video` (
  `link` text NOT NULL,
  `description` varchar(350) NOT NULL,
  `date_added` date NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_turkish_ci;

--
-- Tablo döküm verisi `video`
--

INSERT INTO `video` (`link`, `description`, `date_added`, `is_deleted`, `id`) VALUES
('https://youtu.be/nh1DNfTInM0', 'Dikkat dağınıklığı, aşırı Düşünme, odaklanamama, unutkanlık gibi sorunlar yaşıyorsanız bu sorunların neden oluştuğu ve bunlardan nasıl kurtulacağınıza dair çözüm yolları arıyorsanız bu videoda bu sorularınıza cevap bulabilirsiniz. İyi çalışmalar. ', '0000-00-00', 0, 1),
('https://youtu.be/T9xsTO6ujqM', 'Merhaba bugün 2 günlük bir gezi için 6000 dolarlık lüks tren “Twilight Mizukaze”ye biniyoruz. Ücret: 720.000JPY/ 6.000USD/ 450.000INR/ 7.000CAD/ 5.000EUR/ 4.500GBP/ 7.200.000KRW/450.000RUB Rota: Osaka - Shimonoseki Tren: Alacakaranlık Ekspresi Mizukaze Oda: Royal İki Yataklı Deneyim: Zaman Yolcusu, Pahalı Bardaklar, Üzüm suyu.', '0000-00-00', 0, 2),
('https://youtu.be/eQO0Y5KkHw0', 'Bu 1 Yıl Yalnızlık videosunda size ormanda tek başıma nasıl kulübe yaptığımı göstereceğim! Bu, bazı temel marangozluk becerilerini öğrenmek ve bu süreçte biraz eğlenmek isteyen herkes için harika bir proje. Vahşi doğada hayatta kalma hakkında daha fazla şey öğrenmekle ilgileniyorsanız, bu video tam size göre!', '2023-05-30', 0, 3),
('https://youtu.be/qRODjitiKP8', 'Can I Survive Alaskan Winter with No Sleeping Bag, No Tent & No Tarp?\r\nThis is extreme winter survival camping. No tent, shelters, tarps, sleeping bags, or matches. The snow is deep and I am going to have to work hard to avoid freezing. Check out this extreme solo survival camping video. ', '2023-05-31', 1, 4),
('https://youtu.be/sSo7BvyPryA', 'Tallest Statue Without base Size Comparison (60+ statues) | 3d Animation Comparison \r\nIn this video we made 3d Comparison of tallest statues and this is true real scale comparison of tallest statues. ', '2023-05-31', 1, 5);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
