-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 03:56 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fullstack16`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keranjang`
--

CREATE TABLE `tbl_keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah_produk` int(10) UNSIGNED NOT NULL,
  `total_harga` int(10) UNSIGNED NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `nama_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_keranjang`
--

INSERT INTO `tbl_keranjang` (`id_keranjang`, `id_user`, `id_produk`, `jumlah_produk`, `total_harga`, `nama_produk`, `nama_user`) VALUES
(18, 4, 17, 1, 4399000, 'Ibanez SRMD200', 'Jonathan Rea'),
(19, 4, 6, 1, 1200000, 'Laney Mini STB Lion', 'Jonathan Rea');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `id_produk` int(11) NOT NULL,
  `jenis_produk` varchar(10) NOT NULL,
  `foto_produk` varchar(255) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `harga_produk` int(10) UNSIGNED NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_produk`
--

INSERT INTO `tbl_produk` (`id_produk`, `jenis_produk`, `foto_produk`, `nama_produk`, `harga_produk`, `deskripsi_produk`) VALUES
(1, 'amplifier', 'ampli1.jpg', 'MESA Boogie Mark Five: 35™ COMBO', 35067927, 'Tube amplifier yang satu ini dapat dikatakan sebagai amplifier dengan multi-output, yakni 10 watt, 20 watt, dan 35 watt. Jadi, Anda dapat memilih level kerasnya suara gitar sesuai kebutuhan.\r\n\r\nKnop pengatur suara pada produk ini lebih kompleks. Dengan begitu, Anda dapat menyetel jenis karakter suara yang ingin dimainkan. Dari musik akustik hingga musik metal, semuanya dapat Anda mainkan dengan satu ampli gitar ini saja. Jika Anda ingin bereksplorasi layaknya profesional, inilah produk yang tepat.'),
(2, 'amplifier', 'ampli2.jpg', 'Fishman Loudbox Mini', 5200000, 'Apakah Anda mencari rekomendasi amplifier gitar akustik? Anda dapat memilih Fishman Loudbox Mini. Sebagai salah satu brand penyedia amplifier gitar terbaik untuk akustik, Fisman menawarkan kualitas tersendiri. Sound dari ampli ini lebih natural dengan dinamika akustik yang sangat bagus. \r\n\r\nBentuk alat ini terbilang cukup kecil dengan daya output yang besar, yakni 60 watt. Perpaduan keduanya membuat ampli gitar akustik ini mudah dibawa dan mampu mengeluarkan suara yang keras. Salah satu amplifier gitar akustik terbaik ini cocok untuk Anda yang sering melakukan pertunjukan akustik di outdoor maupun indoor.'),
(3, 'amplifier', 'ampli3.jpg', 'Orange Micro Dark', 2664000, 'Micro Dark dari Orange adalah amplifier gitar mini dengan suara yang maksimal dan distorsi yang mantap. Maka dari itu, alat ini cocok untuk Anda yang suka memainkan musik rock dan metal. \r\n\r\nSuara yang dihasilkannya berkelas, mulai dari suara bersih hingga rona rock yang kasar. Salah satu ampli gitar mini terbaik ini merupakan pre-amp dengan pencapaian tinggi. Produk ini juga dapat disambungkan dengan kabinet pengeras suara apa pun yang berukuran 8–16 ohm.'),
(4, 'amplifier', 'ampli4.jpg', 'Rolland CUBE-10GX Guitar Amplifier', 2320000, 'Salah satu keunggulan Rolland CUBE-10GX Guitar Amplifier adalah memiliki aplikasi CUBE KIT yang menawarkan beragam pilihan preset suara. Anda bisa mendapatkan vintage classic, ultra heave gain machine, bahkan amp untuk gitar elektrik, gitar akustik, dan bass. Jika Anda memainkan beragam jenis alat musik petik, kami menyarankan Anda untuk memilih amplifier gitar ini.'),
(5, 'amplifier', 'ampli5.jpg', 'BOSS KATANA-100/212 MkII', 9350000, 'BOSS KATANA-100/212 MkII memiliki daya output yang besar, yakni 100 watt. Maka dari itu, amplifier gitar ini cocok untuk Anda yang ingin melakukan pertunjukan di ruang terbuka atau hall yang besar.\r\n\r\nJika Anda seorang performer musik profesional atau gitaris band, inilah produk yang Anda butuhkan. Setting knop suaranya juga lebih detail sehingga Anda dapat mencari jenis suara yang diinginkan. '),
(6, 'amplifier', 'ampli6.jpg', 'Laney Mini STB Lion', 1200000, 'Bila Anda butuh rekomendasi amplifier gitar untuk ruangan yang tidak terlalu luas, produk ini bisa dipertimbangkan. Laney Mini STB Lion berukuran mini sehingga cocok diletakkan di kamar yang kecil. Meski begitu, alat ini diberi beragam fitur menarik. Salah satunya adanya koneksi Bluetooth yang memungkinkan jamming menggunakan backing track. \r\n\r\nAmplifier gitar mini ini bisa dihubungkan ke aplikasi yang mampu memberikan banyak pilihan varian efek/preset suara. Dengan begitu, Anda bisa lebih mengeksplorasi permainan. Produk ini juga bisa menggunakan daya baterai. Jadi, Anda bisa tetap berlatih meski daya listrik sedang padam.'),
(7, 'drum', 'drum1.jpg', 'NUX Electric Drum Kit DM-2', 6000000, 'Drum set elektrik satu ini memiliki sistem operasi yang sangat simpel. Di dalamnya sudah tersedia 361 jenis sound library. Di samping itu, drum set ini memiliki velocity sensitive trigger. Anda bisa mengatur sendiri tingkat sensibilitasnya sesuai kebutuhan.\r\n\r\nDM-2 memiliki berbagai pengaturan, yaitu quick record/quick play, berbagai efek suara, dan drum group function. Adanya beberapa preset akan memudahkan Anda dalam mencari karakter drum sesuai genre yang dimainkan.'),
(8, 'drum', 'drum2.jpg', 'Gretsch Catalina Club', 15000000, 'Gretsch memang tak tanggung-tanggung dalam memproduksi drum set terbaik untuk para drummer. Catalina Club menggunakan drumhead atau membran drum dari Remo. Remo menawarkan kualitas drumhead terbaik untuk para drummer. Selain drumhead, ukuran bass drum-nya membuat Anda bisa bermain dengan kontrol yang lebih mantap.\r\n\r\nUntuk Anda yang menyukai tampilan retro, drum set akustik ini juga patut Anda pertimbangkan. Gretsch Catalina Club menawarkan tampilan klasik retro yang sangat keren. Jika Anda mencari drum set dengan karakter sound jazz atau fusion, Gretsch cocok untuk Anda.'),
(9, 'drum', 'drum3.jpg', 'Ludwig Vistalite', 50000000, 'Ludwig sudah tidak perlu diragukan lagi kualitasnya. Drum seri ini memiliki sistem tuning yang baik. Sound yang baik akan sangat memengaruhi permainan, apalagi jika Anda akan melakukan drum recording.\r\n\r\nBerbeda dengan drum set biasanya, drum set Vistalite dari Ludwig menggunakan bahan akrilik. Bahan akrilik membuat tampilannya bagaikan kristal yang sangat memukau dengan lima pilihan warna. Tampilannya sangat cocok digunakan untuk bermain di panggung yang megah. Di samping tampilannya yang memukau, Vistalite memiliki suara yang menggelegar.'),
(10, 'drum', 'drum4.jpg', 'Yamaha Stage Custom Birch', 17000000, 'Berbicara soal alat musik, Yamaha pasti menjadi salah satu merek top of mind, ya. Stage Custom Birch dari Yamaha adalah drum set yang cocok untuk pemula sampai profesional. Yamaha menggunakan kayu birch yang sanggup menciptakan resonansi terbaik.\r\n\r\nLalu, drum set ini juga dilengkapi dengan Yamaha Enhanced Sustain System (YESS). Sistem ini menciptakan kontak yang minim antara hardware dengan shell. Sistem ini juga membuat tom tom tetap stabil saat Anda menggunakan pukulan yang kencang. Secara keseluruhan, karakter sound Yamaha Stage Custom Birch ini adalah bright.'),
(11, 'drum', 'drum5.jpg', 'Sonor AQ2', 26300000, 'Apabila Anda mengutamakan tampilan drum set yang kece, Sonor AQ2 adalah drum set yang tepat. Sonor menggunakan high gloss lacquer sebagai hasil akhir bagian shell-nya. Hasil akhirnya sungguh mengilap dan membuat drum set ini terlihat sangat keren. Selain itu, Sonor AQ2 menggunakan kayu maple untuk hasil suara yang lebih \"warm\" dan lebih seimbang.\r\n\r\nDrumheads bawaan produk ini menggunakan Remo UT yang sudah jelas sound-nya mantap. Jika Anda ingin memiliki drum dengan sound mantap dari awal, produk ini adalah pilihan yang tepat.'),
(12, 'drum', 'drum6.jpg', 'Behringer XD80USB', 6500000, 'Khusus Anda yang mencari electric drum set untuk live performance, kami sarankan produk Behringer ini. Drum set elektrik ini dilengkapi dengan frame aluminium yang kokoh. Anda bisa bermain musik high tempo dengan struktur drum yang tetap stabil.\r\n\r\nPermukaannya menggunakan karet alami sehingga dapat meminimalkan false triggering. Untuk latihan secara mandiri, produk ini menyediakan aux in yang bisa menghubungkan audio dari Android, iPhone, laptop, dan sebagainya ke module ini. Jika bosan dengan lagu-lagu yang ada di dalam modul, Anda bisa mencari lagu lain tanpa harus repot menambah speaker.'),
(13, 'bass', 'bass1.jpg', 'G2220 Electromatic Junior Jet Bass II', 4900000, 'Berukuran 30 inci saja, bass dari Gretsch berikut ini dikatakan sebagai bass skala pendek. Bass ini sesuai apabila Anda seorang wanita atau bertubuh kecil. Menggunakan fret jumbo, Anda yang pemula dapat dengan mudah menekan dan memindahkan jari saat memainkannya. Jenis kayu basswood yang digunakan pada bodinya membuat bass menjadi ringan sehingga Anda dapat berlatih dalam waktu lama.'),
(14, 'bass', 'bass2.jpg', 'G&L Tribute L-2000', 9500000, 'Bass yang satu ini dilengkapi dengan pickup G&L Magnetic Field Design humbucker yang dapat menciptakan tri-tone sekaligus. Anda dapat menyetelnya dengan menyesuaikan musik yang Anda ingin mainkan. Bass ini sesuai untuk Anda yang tidak memilih musik tertentu saat bermain. \r\n\r\nSelain itu, bass dari Guitars by Leo ini juga ringan karena menggunakan swamp ash dan basswood pada bodinya. Diciptakan pertama kali pada tahun 1980-an, bass ini menghasilkan nada dengan range yang lebar. Anda dapat memainkan berbagai musik bahkan R&B atau funk sekaligus dengan bass ini.'),
(15, 'bass', 'bass3.jpg', 'StingRay Ray34', 6500000, 'Dengan desain badan dan pickguard membulat ciri khas Sterling, aura retro produk ini makin menonjol. Anda juga tidak akan kesulitan untuk mengatur jarak senar dengan fretboard karena bridge-nya sangat mudah dikonfigurasi. Selain itu, bobotnya juga tidak berat karena bagian bodi dibuat menggunakan kayu swamp ash.\r\n\r\nPerpaduan bodi swamp ash dengan pickup H-1 Alnico Humbucker juga membuat produk ini memiliki range tone bervariasi. Bass ini cocok untuk berbagai jenis musik, mulai dari jazz hingga rock. Anda juga bisa dengan mudah mengubah tone karena pickup-nya hanya satu. Bila Anda butuh bass untuk memainkan berbagai genre musik, produk ini solusinya.'),
(16, 'bass', 'bass4.jpg', 'Scorpion Bass DJ200', 1799999, 'Produk ini tersedia dalam empat pilihan warna menarik yang bisa Anda pilih, yakni hitam, merah, pink, dan biru muda. Sesuaikan warna bass dengan karakter Anda agar bisa tampil lebih percaya diri.\r\n\r\n\r\nBodi bass ini terbuat dari bahan poplar yang ringan dan kuat. Jumlah senarnya ada empat yang merupakan jumlah senar standar bass di industri musik. Jadikan bass ini pilihan Anda jika Anda mengutamakan pilihan warna yang lebih personal.'),
(17, 'bass', 'bass5.jpg', 'Ibanez SRMD200', 4399000, 'Jika Anda sedang mencari bass yang ringan dengan desain yang ergonomis, produk ini adalah jawabannya. Dengan ukuran skala 32 inci, lebih pendek dua inci dibanding ukuran standar, bass ini pas untuk wanita atau pria bertubuh kecil.\r\n\r\nBass ini terbuat dari kayu poplar yang memiliki karekteristik ringan dan memiliki corak yang lembut. Hal tersebut membuat bass ini ringan dan nyaman ketika digunakan. Untuk Anda yang ingin bass senar empat skala pendek yang ringan tentu tidak akan melewatkan bass ini.'),
(18, 'bass', 'bass6.jpg', 'Cort Action Bass Plus', 2252000, 'Tak perlu mencari bass termahal jika ada yang murah dan berkualitas. Produk ini tergolong terjangkau harganya, tetapi memiliki bahan, komponen, dan pengerjaan yang berkualitas. Bass ini sangat cocok digunakan oleh calon pemain bass dengan opsi pickup PJ yang disematkan pada produk.\r\n\r\nPickup bass tipe P sangat ideal untuk genre hard rock dan classic rock. Sementara itu, pickup tipe J sangat cocok untuk genre jazz dan pop. Kombinasi ini membuat bass memiliki kekayaan suara yang menjangkau lebih banyak genre musik.'),
(19, 'gitar', 'gitar1.jpg', 'Stinger Stratocaster SST-10', 1105000, 'Apakah Anda seorang pemula yang sedang belajar bermain gitar listrik? Jika iya, kami menyarankan Anda untuk memilih Stinger Stratocaster SST-10. Dengan harga 1 jutaan, Anda sudah mendapatkan gitar orisinal yang memiliki kualitas suara yang jernih. Dengan begitu, Anda pun bisa belajar dan meningkatkan kemampuan permainan menggunakan gitar ini. '),
(20, 'gitar', 'gitar2.jpg', 'CORT CR50', 2590000, 'Untuk Anda yang suka memainkan musik dengan genre classic rock, CORT CR50 ini cocok menjadi pilihan. Sesuai namanya, CR pada penamaan CR50 gitar ini adalah kependekan dari classic rock. Gitar ini didesain agar menghasilkan suara yang terdengar lebih vintage. Anda dapat memainkan lagu dari band classic rock, seperti Led Zeppelin, Rolling Stones, The Beatles, dan lainnya. '),
(21, 'gitar', 'gitar3.jpg', 'Schecter C-1 FR SGR', 3600000, 'Gitar C-1 FR SGR By Schecter hadir dengan satu warna serta tampilan yang tidak banyak corak. Tidak hanya memiliki playability yang baik, gitar ini dilengkapi tampilan yang minimalis dengan kesan kesan mewah dan elegan. Ada dua pilihan warna pada gitar ini, yakni Midnight Satin Black dan Gloss Black. Kedua warna tersebut memberikan kesan tenang dan gahar pada penggunanya. '),
(22, 'gitar', 'gitar4.jpg', 'Yamaha Pacifica PAC112V', 3570000, 'Yamaha Pacifica PAC112V hadir dengan konfigurasi pickup H/S/S, dua pickup single-coil dan satu pickup humbucker. Perpaduan pickup tersebut membuat penggunaan gitar ini lebih fleksibel. \r\n\r\nAnda dapat menggunakan gitar ini untuk kebutuhan jamming, latihan, perform, hingga rekaman. Gitar ini memiliki neck tipis dan halus. Dipadukan dengan bobotnya yang ringan, produk ini merupakan gitar dengan playability yang baik.'),
(23, 'gitar', 'gitar5.jpg', 'ESP Gitar Elektrik LTD AX 50', 3691000, 'Apakah Anda pemain gitar rock atau metal? Sering tampil di panggung? Jika iya, kami merekomendasikan Gitar Elektrik LTD AX 50. Gitar ini memiliki bentuk bodi yang lancip di empat sisinya sehingga memperlihatkan kesan yang garang.\r\n\r\nKarakter suara yang dihasilkan juga identik dengan musik-musik cadas. Hal ini ini berkat pickup humbucker ESP LH-150 yang mampu mengeluarkan suara gahar.'),
(24, 'gitar', 'gitar6.jpg', 'Stranough The Emperor', 4675000, 'Jika Anda mencari gitar listrik produksi lokal yang kuat dan berkualitas, kami menyarankan Anda memilih produk ini. Gitar The Emperor dibuat menggunakan kayu white ash yang terkenal dengan elastisitas dan daya tahannya yang kuat.\r\n\r\nSelain itu, gitar elektrik ini cocok untuk Anda yang ingin menjadi performer. Tampilan gitar ini terbilang eksentrik sehingga dapat membuat Anda lebih percaya diri saat di atas panggung. ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_riwayat`
--

CREATE TABLE `tbl_riwayat` (
  `id_riwayat` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `total_order` int(10) UNSIGNED NOT NULL,
  `tanggal_order` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_riwayat`
--

INSERT INTO `tbl_riwayat` (`id_riwayat`, `id_user`, `nama_user`, `total_order`, `tanggal_order`) VALUES
(1, 4, 'Jonathan Rea', 64150000, '0000-00-00'),
(2, 1, 'Naufal', 11680000, '0000-00-00'),
(3, 1, 'Naufal', 9350000, '0000-00-00'),
(4, 1, 'Naufal', 4399000, '0000-00-00'),
(5, 1, 'Naufal', 9500000, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `email_user` varchar(100) NOT NULL,
  `password_user` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nama_user`, `email_user`, `password_user`) VALUES
(1, 'Naufal', 'faw10zi@gmail.com', 'hehe123'),
(2, 'Michael', 'michaelindrawan@gmail.com', 'mi123'),
(3, 'Andy Warhol', 'anwar@gmail.com', 'anw123'),
(4, 'Jonathan Rea', 'rea@gmail.com', 'rere123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  ADD PRIMARY KEY (`id_keranjang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_produk` (`id_produk`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD PRIMARY KEY (`id_riwayat`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  MODIFY `id_riwayat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_keranjang`
--
ALTER TABLE `tbl_keranjang`
  ADD CONSTRAINT `tbl_keranjang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`),
  ADD CONSTRAINT `tbl_keranjang_ibfk_2` FOREIGN KEY (`id_produk`) REFERENCES `tbl_produk` (`id_produk`);

--
-- Constraints for table `tbl_riwayat`
--
ALTER TABLE `tbl_riwayat`
  ADD CONSTRAINT `tbl_riwayat_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tbl_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
