-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Ara 2024, 09:11:12
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `sistem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `doguturkistan`
--

CREATE TABLE `doguturkistan` (
  `baslik` text NOT NULL,
  `paragraf1` text NOT NULL,
  `paragraf2` text NOT NULL,
  `paragraf3` text NOT NULL,
  `paragraf4` text NOT NULL,
  `id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `doguturkistan`
--

INSERT INTO `doguturkistan` (`baslik`, `paragraf1`, `paragraf2`, `paragraf3`, `paragraf4`, `id`) VALUES
('Doğu Türkistan\'da Neler Oluyor ?', 'Doğu Türkistan, veya Uyguristan, bağlam ve kullanıma bağlı olarak birden çok anlamı olan bir terimdir. Doğu Türkistan, Orta Asya\'nın orta bölümünde yer alan Büyük Türkistan\'ın doğu kesimidir.', 'Çin\'in 1949 yılından bu yana hakimiyeti altında tuttuğu Doğu Türkistan\'ın kırsal kesimlerinde etrafı yüksek duvarlarla çevrili inşaatlar devam ediyor. Uydu görüntüleri, Doğu Türkistan çöllerinde inşa edilen ve içinde yüz binlerce Uygur Türkü\'nün tutulduğu toplama kamplarının son bir yılda tam 3 katı büyüdüğünü ortaya koyuyor. Birleşmiş Milletler\'e (BM) göre 1 milyon civarında Müslüman Uygur Türkü Çin\'in \'eğitim merkezi\' olarak dünyaya lanse ettiği toplama kamplarında tutuluyor. Sincan bölgesinde ve Çin\'in değişik yerlerinde gerçekleşen saldırıların ardından bu eylemlerden Uygurları sorumlu tutan Çin, 2014 yılından itibaren \'teröre karşı halk mücadelesi\' adı altında yeni bir süreç başlattı. Ancak Uygurlara yönelik kültürel ve dini kısıtlama ve baskılar 2009 yılından itibaren giderek hız kazandı.', 'Müslüman Uygur Türklerini kamplarda topladığı yönündeki suçlamaları reddeden Pekin, Doğu Türkistan genelinde inşa edilen söz konusu yapıları, dünyaya ', 'Kısacası durum şu ; Çin , Doğu Türkistanlı insanları sözde eğitim merkezlerine , rehabilitasyon merkezlerine alıyor ve onlara işkence ediyor ve onları vicdansızca öldürüyor', 1);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kerkukonemi`
--

CREATE TABLE `kerkukonemi` (
  `id` tinyint(4) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `metin1` text NOT NULL,
  `metin2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kerkukonemi`
--

INSERT INTO `kerkukonemi` (`id`, `baslik`, `metin1`, `metin2`) VALUES
(1, 'Kerkük Neden Önemli ?', 'Stratejik ve coğrafik önemi nedeniyle şehir, üç imparatorluk için adeta bir savaş meydanıydı;\r\n             Asur imparatorluğu, Babil ve Med imparatorlukları, ki hepsi şehri belirli zamanlarda yönetmişlerdir.\r\nKerkük çok geniş bir şekilde yayılmış ve karışmış bir nüfusa sahiptir. Osmanlı döneminde şehir merkezi çoğunluğunu\r\n             Türkler oluşturuyordu, Kürtler de taşranın çoğunluğunu oluşturuyordu.[4] Şehir özellikle 20. yüzyılda \r\n            daha dramatik değişimler deneyimlemiştir. Kürtler, Türkmenler ve Araplar bu bölgeye dair sahiplik iddialarında bulunmakta ve iddialarını destekleyecek tarihi bilgi ve verilere sahip olmaktadırlar.\r\nTarihi olarak, şehir her zaman Kürtler ve Türkmenler tarafından kültürel bir başkent olarak atfedildi. 2010\'da Irak\r\n             Kültür Bakanlığı tarafından Irak kültürünün başkenti olarak isimlendirildi. \r\n', 'Türkiye’nin Kerkük’e bakışı, o dönemde henüz Dışişleri Bakanlığı koltuğuna oturmamış olan Ahmet Davutoğlu’nun şu sözlerinde gizli: “Kerkük küçük bir Irak’tır, Irak da küçük bir Ortadoğu’dur.”\r\nKerkük’teki yoğun Türkmen nüfus da Türkiye’nin önem verdiği konuların başında geliyor.\r\nTürkmenler, Türkiye dış politikasının önemli argümanlarından biri. Ankara, Türkmenlerin güvenliği ve Türkmen nüfusun yaşadığı bölgelerde istikrarın sağlanmasına büyük önem veriyor.\r\nBirleşmiş Milletler’e göre Irak’ta yaşayan Türkmen nüfus 2 milyon civarında. Türkmenler ise bu sayının çok daha fazla olduğunu belirtiyorlar.\r\nKerkük açısından Türkiye için hayati öneme sahip bir diğer nokta ise, Kerkük - Ceyhan petrol boru hattı.\r\n1977’de ilk akışın gerçekleştiği ve yıllık taşıma kapasitesi toplam 70,9 milyon ton olan boru hattı, Ankara - Erbil ilişkileri parlak bir dönem yaşarken Irak petrolünü Türkiye’ye taşıyor.\r\nIrak’ta yaşanan son gelişmeler de petrol akışını kesmedi. Her gün yaklaşık 120 bin varillik Irak petrolü Kerkük - Yumurtalık ham petrol boru hattı üzerinden Ceyhan\'a ulaşıyor.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `id` tinyint(4) NOT NULL,
  `kullanici` varchar(50) NOT NULL,
  `sifre` int(11) NOT NULL,
  `hash_sifre` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`id`, `kullanici`, `sifre`, `hash_sifre`) VALUES
(1, 'yonetici', 123, '$2y$10$5nS36OnRAncjMkwXNOivUefpV9j9vpkJGovpBdhygddzZo2pZaHRO');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `nedenbozkurt`
--

CREATE TABLE `nedenbozkurt` (
  `id` tinyint(4) NOT NULL,
  `baslik` varchar(100) NOT NULL,
  `metin1` text NOT NULL,
  `metin2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `nedenbozkurt`
--

INSERT INTO `nedenbozkurt` (`id`, `baslik`, `metin1`, `metin2`) VALUES
(1, 'Turanda Neden Bozkurt Sembolü Kullanıyor?', 'Türkler tarih boyunca bir çok hayvanı sembolleştirmiştir.\r\nKızılbaş Safevilerin aslanı, Avrupa Hunlarının anka kuşu, Asya Hunların ejderhası,\r\n         Selçukluların kartalı, Gaznelilerin tavus kuşu, meşhurdur.\r\n         Ama tüm bunların üstündeki sembol tüm turani kavimlerin ortak sembolü olan \"Gökbörü\" yani \"Bozkurt\"tur.\r\n         Bu destansı varlık Türk\'ün simgesidir.Bozkurt işaretinin, İslamiyet öncesi Göktürk döneminde ve diğer \r\n           Türk devletlerinde Türk hakanlarının zafer işareti olduğu bilinmektedir. Bozkurt işaretinin varlığı\r\n            Türk hakanları tarafından yapılan ve zafer işareti olduğu mağaralarda bulunan 6.yüzyıla ait\r\n            “Türk hakanı heykeli” ile açıkca anlaşılmaktadır. Binlerce yıl Türkler Bozkurt işareti yaparak kimliklerini \r\n           ifade etmişlerdir. Yine Türkler Bozkurt işaretini, dosta karşı \"BEN TÜRKÜM\" tanışma anlamında kullanırken,\r\n            Düşmana karşı \"Ben Türküm\" uyarı anlamında kullanmıştır.', 'Ergenekon Destanı’nda ve kut dağı efsanesinde bozkurt milli bir kılavuz rolünü oynamıştır.\r\n            Türk’ün zor zamanlarında bozkurt’un ortaya çıkması,manevi anlamda da Bozkurt\'u değerli kılmış ve sembolleştirmiştir.\r\n           Türk tarihinde pek çok kahramanın bozkurt simgesi ile temsil edildiğini görüyoruz. Aşına kelimesi hem bozkurt anlamına geliyor, \r\n           hem de Hun ve Göktürk hükümdar sülalesinin adı oluyor.\r\n           <br><br>\r\n           Ergenekon destanı: Bozkurt, demir dağı eritip çıkan Türklere yol göstermiştir. Ergenekon’dan çıktıktan sonra,\r\n            Türklerin ilk hükümdarı börte-çine (boz-kurt) adını almıştır. Göç destanı’nda, ana yurtlarından ayrılmak\r\n            zorunda kalan Türklere, bir bozkurt yol göstermiştir.\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `turannedir`
--

CREATE TABLE `turannedir` (
  `id` tinyint(4) NOT NULL,
  `baslik1` varchar(100) NOT NULL,
  `baslik2` varchar(100) NOT NULL,
  `metin1` text NOT NULL,
  `metin2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `turannedir`
--

INSERT INTO `turannedir` (`id`, `baslik1`, `baslik2`, `metin1`, `metin2`) VALUES
(1, 'TURANCILIK NEDİR ?', 'TÜRK DÜNYASI BİRLİĞİ NEDEN ÖNEMLİ VE NEDEN KURULMASI İSTENMİYOR ?', 'Turancılık, tüm Ural-Altay kavimlerinin birliğini savunan siyasi görüş. İlk olarak Macarlar, Finler, Estonlar ve Rusya içindeki Fin-Ugor kavimleri ile beraber Tunguzlar, Moğollar ve Türklerin bir araya getirilmesi olarak ortaya çıkmıştır.Turancılık/Turan/Türk Dünyası Birliği/Türk Devltleri Teşkilatı vs. gibi isimlerle kullanılır.', 'Öncelikle Türk Dünyası Birliği nin birleşmesi için 7 ülke nin birleşmesi gerekiyor. Bu 7 ülkenin birleşmesi de bu örgütü daha çok Türk daha çok alan daha güçlü bir ülke durumuna getiriyor.Bu da bu ülkelerin ekonomi , siyasi , eğitim , turizm vb. gibi alanlarda gelişimini sağlıyor.Bu durum diğer ülkelerin işine gelmeyeceği gibi bölye bir yapının güç kazanmasından çekiniyorlar ve Türk Dünyası Birliği\'ne yani Turan ın kurulmasına karşı çıkıyorlar.');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `doguturkistan`
--
ALTER TABLE `doguturkistan`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kerkukonemi`
--
ALTER TABLE `kerkukonemi`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `nedenbozkurt`
--
ALTER TABLE `nedenbozkurt`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `turannedir`
--
ALTER TABLE `turannedir`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `doguturkistan`
--
ALTER TABLE `doguturkistan`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `kerkukonemi`
--
ALTER TABLE `kerkukonemi`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `nedenbozkurt`
--
ALTER TABLE `nedenbozkurt`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `turannedir`
--
ALTER TABLE `turannedir`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
