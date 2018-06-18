-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jun 2018 pada 12.25
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE IF NOT EXISTS `artikel` (
  `id` int(10) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tgl` date NOT NULL,
  `author` varchar(200) NOT NULL,
  `isi` text NOT NULL,
  `img` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id`, `idKategori`, `judul`, `tgl`, `author`, `isi`, `img`) VALUES
(22, 2, 'Menghilangkan Komedo dengan garam dan Gula', '2018-05-01', 'Nabila', '<p>Garam dan air mawar\r\nAmbil satu sendok air mawar dan campur dengan satu sendok makan garam. Oleskan dan pijat secara lembut campuran tersebut pada area hidung, dahi, dan dagu supaya komedo bisa terangkat dengan baik.</p>\r\n\r\n<h3>Garam dan gula</h3>\r\n\r\n<p>Selain air mawar, Anda bisa memakai garam dan gula, masing-masing satu sendok, campur hingga merata. Lalu, oleskan pada area yang berkomedo selama 10-15 menit.</p>\r\n\r\n<p>Jika sudah, cucilah sampai bersih agar komedonya bisa terangkat. Campuran ini bisa dijadikan sebagai pengganti scrub wajah.</p>\r\n\r\n<h3>Garam dan madu</h3>\r\n\r\n<p>Bila Anda memiliki madu di rumah, Anda bisa mencampurkan satu sendok makan garam dan satu sendok makan madu ke dalam sebuah wadah atau mangkok. Lalu oleskan ke seluruh wajah atau hanya pada area yang memiliki komedo.</p>\r\n\r\n<p>Diamkan selama kurang lebih 10 menit atau sampai mengering, baru bilas dengan air. Gunakan cara ini secara rutin 2 kali dalam seminggu.</p>\r\n\r\n<h3>Garam dan lemon</h3>\r\n\r\n<p>Anda bisa juga memanfaatkan air lemon untuk membantu menghilangkan komedo. Cukup campurkan perasan lemon dan garam selama 10 menit, lalu bersihkan dengan air hangat. Ulangi proses tersebut setelah 8 hari untuk mendapatkan hasil yang maksimal.</p>\r\n\r\n<h3>Garam dan yoghurt</h3>\r\n\r\n<p>Selain lemon, yoghurt juga bisa Anda manfaatkan untuk menghilangkan komedo. Caranya, oleskan air garam pada area komedo. Lalu, oleskan yoghurt dingin secara merata selama 15 menit. Yoghurt dapat berfungsi untuk meredam peradangan pada kulit wajah.</p>\r\n\r\n<h3>Garam dan pasta gigi</h3>\r\n\r\n<p>Selain bahan makanan di atas, Anda juga bisa memanfaatkan pasta gigi di rumah. Caranya, oleskan pasta gigi pada komedo dan ketika pasta masih basah, pijat perlahan pada area komedo memakai garam. Setelah pasta mengeras, ia akan membantu mengangkat komedo dari pori-pori kulit.</p>', '19.jpg'),
(23, 3, '3 Bahasa tubuh pertanda tak nyaman dengan pasangan', '2018-05-11', 'Beritagar.id', '1. Mengalihkan pandangan mata\r\nMelanir dari Elite Daily, Tonya Reiman, seorang ahli bahasa tubuhmengatakan, "Seringkali, jarang memberikan kontak mata menjadi tandakurang kepercayaan diri. Namun, kadang-kadang ini bisa menunjukkankurang minat. Jadi, Anda perlu mengenali sinyal lain dalammenghadapinya." Bila Anda menghindari pandangan pasangan, bisa jadi Anda merasa tidak nyaman berada di sekitar pasangan atau mungkin merasatidak aman.\r\n\r\n2. Memaksa untuk tertawa\r\nHal lain yang bisa menunjukkan Anda tidak nyaman bersama dengan pasangan adalah Anda memaksa untuk tertawa. "Mereka yang merasa tidak nyamansering merasa gugup," jelas Tonya. Situasi ini membuat mereka menjadicanggung dan gugup. \r\n\r\n3. Membuat jarak dengan pasangan\r\nKetika Anda merasa tidak nyaman, Anda akan membuat jarak denganpasangan. Misalnya, Anda akan langsung mundur atau tersentak ketikabersentuhan dengan pasangan, bisa jadi ini menandakan Anda tidak nyamandengannya. \r\n\r\nBeberapa tanda tersebut biasanya ditunjukkan secara ilmiah. Namun, adajuga memang orang yang melakukan ini bukan karena tidak nyaman, tetapimemang menjadi karakternya. Apapun hal tersebut, ada baiknya Andamendiskusikan dengan pasangan tentang hal yang Anda suka atau tidak. ', 'a1.JPG'),
(24, 3, 'Us, usaha Jordan Peele ulangi kesuksesan Get Out', '2018-05-11', 'Beritagar.id', 'Menyusul kesuksesanGet Out\r\nPada Februari, Peele pernah menyinggung soal proyek Us. "Bermain dengan genre thriller, horor, aksi, dan intrik adalah favorit saya," ujar lelaki kelahiran kota New York itu.\r\n\r\n"Saya pikir, proyek berikutnya akan mirip dengan Get Out. Namun saya ingin membuat film yang benar-benar berbeda. Saya ingin mengangkat sesuatu yang berbeda, bukan ras, dalam proyek berikutnya."\r\n\r\nUs adalah proyek pertama Peele setelah sukses besar lewat Get Out, baik secara pendapatan maupun kualitas.\r\n\r\nDengan bujet $4,5 juta AS, Get Out mampu meraup $255 juta AS dari seluruh dunia. Selain sebuah Oscar yang didapat Peele, Get Out menjadi nomine dalam tiga kategori lain yaitu Film Terbaik, Sutradara Terbaik (Peele), dan Aktor Terbaik (Daniel Kaluuya). Padahal, Get Out merupakan debut Peele sebagai sutradara.\r\n\r\nDilansir dari Variety (3/5/2017), kesuksesan film thriller-sosial itu membuat Peele dan rumah produksi miliknya Monkeypaw mendapat kucuran dana segar daru Universal Pictures. Selain proyek Us, ia akan menjadi produser untuk beberapa film bikinan Monkeypaw yang berskala lebih kecil.\r\n\r\n"Saya punya empat film thriller-sosial yang akan dirilis dalam 10 tahun ke depan," ujar Peele pada Business Insider (18/2/2017). Tema sosial yang dimaksud adalah ketika manusia menjadi monster paling menyeramkan di dunia, yang Peele sebut sebagai ''setan sosial''.\r\n\r\n"Setiap film saya akan mengangkat tiap jenis setan sosial," lanjut sineas yang juga dikenal sebagai aktor ini.\r\n\r\n“Melalui imajinasi luar biasa dan humor berani, Jordan membuktikan dirinya sebagai sineas yang mampu membuat film menghibur, tapi juga provokatif,” ujar chairwoman Universal, Donna Langley menjelaskan alasan Universal memilih mendanai Peele.\r\n\r\nFilm berdurasi 104 menit itu memang menjadi sebuah gagasan segar di tengah film horor lainnya, yang kebanyakan bertemakan rumah hantu dan arwah penasaran.\r\n\r\nGet Out mengisahkan sepasang kekasih beda ras yaitu lelaki berkulit hitam Chris (Daniel Kaluuya) dan perempuan kulit putih Rose (Allison Williams). Pada sebuah akhir pekan, mereka mengunjungi orangtua Rose.\r\n\r\nTadinya, Chris menganggap situasi canggung yang ia hadapi dengam calon mertuanya hanya karena perbedaan ras mereka, tapi ternyata ada kebenaran menakutkan yang tidak pernah ia bayangkan.', 'a2.JPG'),
(25, 3, 'Stallone kembali perankan Rambo', '2018-05-11', 'Beritagar.id', 'Umurnya sudah menginjak 71 tahun, tapi Sylvester Stallone masih siap menjalani adegan aksi. Aktor gaek ini dikabarkan kembali memerankan tentara jagoan Rambo dalam film Rambo 5--judul masih tentatif.\r\n\r\nDeadline (5/5/2018) mengabarkan, rumah produksi Millenium siap menjual proyek Rambo 5 kepada distributor dalam Festival Film Cannes yang dimulai pada Selasa (8/5/2018). Dalam festival tahunan yang diselenggarakan di kota Cannes, Prancis, Millenium sudah merilis poster Rambo 5.\r\n\r\nSang tokoh utama, digambarkan dengan teknik spray paint-art, sedang bersujud dengan kepala menghadap tanah. Pisau yang digenggamnya ditancapkan ke lantai.\r\n\r\nSementara ini, Millenium menetapkan September sebagai jadwal syuting film tersebut, dengan jadwal rilis musim gugur 2019, antara September-Desember.', 'a3.JPG'),
(26, 3, 'Infinity War raup semiliar dolar dalam 11 hari', '2018-05-11', 'Beritagar.id', 'Lagi-lagi Avengers: Infinity War memecahkan rekor. Hanya dalam waktu 11 hari, film ke-19 dari Marvel Cinematic Universe (MCU) ini sudah mengumpulkan $1 miliar AS (Rp14 triliun) dari seluruh dunia.\r\n\r\nInfinity War mengalahkan rekor sebelumnya yang dipegang oleh karya Disney lainnya, Star Wars: The Force Awakens (2015). Film ketujuh saga Star Wars itu mencapai angka $1 miliar AS dalam 12 hari.\r\n\r\nArtinya, dua pekan berturut-turut Infinity War mengalahkan The Force Awakens. Pekan sebelumnya, Infinity War memecahkan rekor perolehan debutan terbesar sepanjang masa milik The Force Awakens.\r\n\r\nSecara keseluruhan, Infinity War sudah memperoleh $1,16 miliar AS dari seluruh dunia. Angka ini membuat karya sutradara Joe dan Anthony Russo itu naik ke posisi 15 film terlaris sepanjang masa.\r\n\r\nPadahal, Infinity War baru tayang di Tiongkok pada 11 Mei. Negeri ini merupakan salah satu pasar film terbesar di dunia. Sebagai perbandingan, film Avengers: Age of Ultron (2015) mampu meraup $84 juta AS di negeri Tirai Bambu pada pekan perdananya, sehingga dipastikan perolehan Infinity War tetap tinggi pada pekan depan.\r\n\r\nMenurut analis Paul Dergarabedian dari ComScore, kehebatan Infinity War ada pada kekuatan jenama Marvel yang luar biasa.\r\n\r\n“Konsep menarik sekumpulan karakter superhero dalam sebuah film yang seru, terbukti menjadi surga sinematik bagi para penggemar film di seluruh dunia,” jelas Dergarabedian kepada CNBC.\r\n\r\nDi Amerika Serikat, laju Infinity War juga tak tertahankan. Pada periode akhir pekan lalu (4-6 Mei), film ini tercatat meraup $112,5 juta AS. Dengan total pendapatan domestik mencapai $450,8 juta AS, Infinity War sudah duduk di posisi kedua film terlaris tahun 2018 di AS dan hanya kalah dari Black Panther ($693,1 juta AS).\r\n\r\nFilm yang berada di posisi kedua tangga box office akhir pekan lalu adalah debutan berjudul Overboard, dengan perolehan $14,75 juta AS, hanya 13 persen dari perolehan Infinity War pada periode yang sama.\r\n\r\nNamun pencapaian Overboard terbilang mengejutkan, sebab komedi romantis ini hanya tayang di 1.623 layar bioskop, tak sampai separuh dari jumlah layar peringkat ketiga, A Quiet Place (3.413 layar, $7,6 juta AS).\r\n\r\nNilai Overboard di Rotten Tomatoes juga termasuk rendah, hanya 30 persen. Hanya 15 dari 50 kritikus yang memberi ulasan bagus untuk film karya sutradara Rob Greenberg ini.\r\n\r\nOverboard mengisahkan Kate (Anna Faris), seorang ibu tunggal yang dipekerjakan oleh seorang playboy kaya bernama Leonardo (Eugenio Derbez) untuk membersihkan yacht mewahnya.\r\n\r\nSuatu saat, Leonardo terjatuh dan kehilangan ingatan. Kate yang kesal karena dipecat berusaha mengerjai Leonardo dengan meyakinkan si playboy kalau mereka adalah pasangan suami-istri.\r\n\r\nSelain Overboard, ada dua film debutan lain yang menghuni 10 besar yaitu Tully dan Bad Samaritan.\r\n\r\nTully merupakan film komedi yang dibintangi oleh Charlize Theron. Ia memerankan Marlo, seorang ibu yang kerepotan menangani tiga anak, salah satunya masih bayi. Saudaranya kasihan, lalu mempekerjakan seorang suster bernama Tully (Mackenzie Davis). Siapa sangka, si perawat bisa menjalin hubungan menarik dengan Marlo dan anak-anaknya.\r\n\r\nSementara Bad Samaritan merupakan drama yang disutradarai Dean Devlin, dikenal sebagai penggarap Independence Day (1996) dan Godzilla (1998). Kisahnya soal seorang pelayan yang merampok orang yang salah. Ternyata orang yang ia jahati adalah penculik. Keadaan jadi pelik setelah si penculik ingin balas dendam pada si perampok.\r\n\r\nBerikut 10 film terlaris di AS pada periode 4-6 Mei yang dilansir dari Box Office Mojo:\r\n\r\n1. Avengers: Infinity War - $112,5 juta AS (total $450,8 juta - pekan 2)\r\n\r\n2. Overboard - $14,75 juta AS (pekan perdana)\r\n\r\n3. A Quiet Place - $7,6 juta AS ($159,9 juta AS - pekan 5)\r\n\r\n4. I Feel Pretty - $4,9 juta AS ($37,8 juta AS - pekan 3)\r\n\r\n5. Rampage - $4,6 juta AS ($84,8 juta AS - pekan 4)\r\n\r\n6. Tully - $3,2 juta AS (pekan perdana)\r\n\r\n7. Black Panther - $3,1 juta AS ($693,1 juta AS - pekan 12)\r\n\r\n8. Truth or Dare - $1,9 juta AS ($38,2 juta AS - pekan 4)\r\n\r\n9. Super Troopers 2 - $1,8 juta AS ($25,4 juta AS - pekan 3)\r\n\r\n10. Bad Samaritan - $1,76 juta AS (pekan perdana)', 'a4.JPG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `idKategori` int(11) NOT NULL,
  `namaKategori` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggalbuat` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idKategori`, `namaKategori`, `keterangan`, `tanggalbuat`) VALUES
(2, 'Lifestyle', 'Gaya Hidup dan Fashion', '2018-05-01'),
(3, 'Seni dan Hiburan', 'Dunia Seni dan Hiburan', '2018-05-06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE IF NOT EXISTS `levels` (
  `level_id` int(2) NOT NULL,
  `nama_level` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`level_id`, `nama_level`) VALUES
(1, 'admin'),
(2, 'gold'),
(3, 'silver');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL,
  `fk_level_id` int(2) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kodepos` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `fk_level_id`, `nama`, `kodepos`, `email`, `username`, `password`, `register_date`) VALUES
(4, 1, 'Nabila Rifda Ristyawan', '65141', 'nabilarifdaaa@gmail.com', 'nabilarifdaaa', '652d3266220e0aacb047d3aa6f51f1b0', '2018-05-28 05:18:08'),
(5, 2, 'Nabila Rifda Ristyawan', '65141', 'lalaa@gmail.com', 'lala', '2e3817293fc275dbee74bd71ce6eb056', '2018-06-18 10:20:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk1` (`idKategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategori`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`level_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `fk_user_level_id` (`fk_level_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `level_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategori`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_level_id`) REFERENCES `levels` (`level_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
