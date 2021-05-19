-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2020 pada 07.09
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pelayanan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_kantor_desa`
--

CREATE TABLE `admin_kantor_desa` (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `admin_kantor_desa`
--

INSERT INTO `admin_kantor_desa` (`id_admin`, `nama_admin`, `password`) VALUES
(1, 'admin', 'admin2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat`
--

CREATE TABLE `alamat` (
  `id_alamat` int(11) NOT NULL,
  `desa` varchar(45) DEFAULT NULL,
  `kecamatan` varchar(45) DEFAULT NULL,
  `kabupaten` varchar(45) DEFAULT NULL,
  `provinsi` varchar(45) DEFAULT NULL,
  `kodepos` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `rt` varchar(45) DEFAULT NULL,
  `rw` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `beda_nama`
--

CREATE TABLE `beda_nama` (
  `id_beda_nama` int(11) NOT NULL,
  `no_surat` varchar(45) DEFAULT NULL,
  `nama_baru` varchar(45) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `nik` varchar(45) DEFAULT NULL,
  `status` varchar(45) NOT NULL,
  `maksud_pembuatan` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `beda_nama`
--

INSERT INTO `beda_nama` (`id_beda_nama`, `no_surat`, `nama_baru`, `tanggal`, `nik`, `status`, `maksud_pembuatan`) VALUES
(4, '2020.05.21', 'cab', '2020-05-21', '123', 'Tervalidasi', 'maksudnya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `judul` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `keterangan` varchar(600) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`judul`, `foto`, `keterangan`, `id`) VALUES
('foto', 'scren.png', 'keterangan', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `nik` int(45) DEFAULT NULL,
  `hari` varchar(45) DEFAULT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `di` varchar(45) DEFAULT NULL,
  `nama_anak` varchar(45) DEFAULT NULL,
  `nama_ibuk` varchar(45) DEFAULT NULL,
  `istri_dari` varchar(45) DEFAULT NULL,
  `nama_pelapor` varchar(45) DEFAULT NULL,
  `hubungan_dengan_bayi` varchar(45) DEFAULT NULL,
  `no_surat` int(11) DEFAULT NULL,
  `status` varchar(24) DEFAULT NULL,
  `anak_ke` varchar(25) DEFAULT NULL,
  `jenis_kelamink` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `id_kelahiran` int(45) NOT NULL,
  `tanggalsurat` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kelahiran`
--

INSERT INTO `kelahiran` (`nik`, `hari`, `tanggal`, `di`, `nama_anak`, `nama_ibuk`, `istri_dari`, `nama_pelapor`, `hubungan_dengan_bayi`, `no_surat`, `status`, `anak_ke`, `jenis_kelamink`, `alamat`, `id_kelahiran`, `tanggalsurat`) VALUES
(123, 's1', '2020-06-01', 'aaa', 'aaa', NULL, 'aaa', 'aaaa', 'fffff', 202006, 'Tervalidasi', '1', 'contoh', 'jbkugui', 9, ''),
(361555, 'selasa', '8 juli 2008', 'desa abc kecamatan bcd kabupaten efg', 'Balmond', 'rafaela', 'alucard', 'alufeed', 'kakek', 202006, 'Request', '5', 'laki - laki', 'vikendi land', 11, '2020-06-28'),
(91, 'selasa', '8 juli 2008', 'desa abc kecamatan bcd kabupaten efg', 'pew', NULL, 'pie', 'alufeed', 'kakek', 202006, 'Request', '11', 'laki - laki', 'vikendi land', 12, '2020-06-28'),
(123, 'selasa', '8 juli 2008', 'desa abc kecamatan bcd kabupaten efg', 'jhonson', 'dew', 'alucard', 'alufeed', 'kakek', 202006, 'Request', '5', 'perempuan', 'vikendi land', 13, '2020-06-28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian`
--

CREATE TABLE `kematian` (
  `id_kematian` int(11) NOT NULL,
  `hari` varchar(45) DEFAULT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `sebab` varchar(500) DEFAULT NULL,
  `nik` int(45) DEFAULT NULL,
  `no_surat` int(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `maksud_pembuatan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kematian`
--

INSERT INTO `kematian` (`id_kematian`, `hari`, `tanggal`, `sebab`, `nik`, `no_surat`, `status`, `maksud_pembuatan`) VALUES
(3, 'aaa1', '2020-06-01', 'bbbb', 361555, 202006, 'Request', 'dcfvgbhnm1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuasa_akta`
--

CREATE TABLE `kuasa_akta` (
  `id_kuasa_akta` int(45) NOT NULL,
  `nik_pemberi_kuasa` varchar(45) NOT NULL,
  `nik_penerima_kuasa` varchar(45) DEFAULT NULL,
  `keterangan_kuasa` varchar(600) DEFAULT NULL,
  `no_surat` varchar(45) NOT NULL,
  `tanggal` varchar(45) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kuasa_akta`
--

INSERT INTO `kuasa_akta` (`id_kuasa_akta`, `nik_pemberi_kuasa`, `nik_penerima_kuasa`, `keterangan_kuasa`, `no_surat`, `tanggal`, `status`) VALUES
(1, '361555', '91', 'pelengkap persyaratan untuk Persyaratan pembuatan AKTA Kelahiran di Dinas Kependudukan Banyuwangi.', '222', '2020-06-28', 'Request');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuasa_lahan`
--

CREATE TABLE `kuasa_lahan` (
  `id_kuasa_lahan` int(11) NOT NULL,
  `nik_pemberi_kuasa` varchar(45) DEFAULT NULL,
  `nik_penerima_kuasa` varchar(45) DEFAULT NULL,
  `fk_id_lahan` varchar(45) DEFAULT NULL,
  `keterangan_kuasa` varchar(600) DEFAULT NULL,
  `no_surat` varchar(45) NOT NULL,
  `tanggal` varchar(45) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `kuasa_lahan`
--

INSERT INTO `kuasa_lahan` (`id_kuasa_lahan`, `nik_pemberi_kuasa`, `nik_penerima_kuasa`, `fk_id_lahan`, `keterangan_kuasa`, `no_surat`, `tanggal`, `status`) VALUES
(4, '361555', '91', '2020.06.19.15.59.09', 'tuj', '220', '2020-06-19', 'Tervalidasi'),
(5, '361555', '123', '2020.06.23.14.55.01', 'percobaan', '221', '2020-06-23', 'Request');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lahan`
--

CREATE TABLE `lahan` (
  `id` int(11) NOT NULL,
  `id_lahan` varchar(45) NOT NULL,
  `nama_saksi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `lahan`
--

INSERT INTO `lahan` (`id`, `id_lahan`, `nama_saksi`) VALUES
(7, '2020.06.19.15.59.09', 'sasuke'),
(9, '2020.06.23.14.55.01', 'saksi hidup'),
(10, '2020.06.23.14.55.01', 'saksi saksi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `no_surat`
--

CREATE TABLE `no_surat` (
  `id` int(11) NOT NULL,
  `no_surat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `no_surat`
--

INSERT INTO `no_surat` (`id`, `no_surat`) VALUES
(1, 222);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `id_penduduk` int(11) NOT NULL,
  `nama_penduduk` varchar(45) DEFAULT NULL,
  `tempat_lahir` varchar(45) DEFAULT NULL,
  `tgl_lahir` varchar(45) DEFAULT NULL,
  `jenis_kelamin` varchar(45) DEFAULT NULL,
  `nama_bapak` varchar(45) DEFAULT NULL,
  `nama_ibuk` varchar(45) DEFAULT NULL,
  `agama` varchar(45) DEFAULT NULL,
  `pendidikan` varchar(45) DEFAULT NULL,
  `pekerjaan` varchar(45) DEFAULT NULL,
  `status_perkawinan` varchar(45) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `kewarganegaraan` varchar(45) DEFAULT NULL,
  `golongan_darah` varchar(45) DEFAULT NULL,
  `no_tlpn` varchar(45) DEFAULT NULL,
  `surat_id_surat` int(11) NOT NULL,
  `alamat_idalamat` int(11) NOT NULL,
  `fullalamat` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`id_penduduk`, `nama_penduduk`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `nama_bapak`, `nama_ibuk`, `agama`, `pendidikan`, `pekerjaan`, `status_perkawinan`, `nik`, `kewarganegaraan`, `golongan_darah`, `no_tlpn`, `surat_id_surat`, `alamat_idalamat`, `fullalamat`) VALUES
(1, 'contoh', 'contoh', 'contoh', 'contoh', 'contoh', 'contoh', 'contoh', 'contoh', 'contoh', 'contoh', '123', 'contoh', 'contoh', 'contoh', 0, 0, 'fullalamatcoba'),
(4, 'y', 'y', '78 desembe 2010', 'c', 'c', 'c', 'contoh lagi', 'c', 'c', 'c', '91', 'c', 'cc', '89', 0, 0, 'fullalamatcoba'),
(5, 'kakashi hatake', 'banyuwangi', '1999-06-15', 'laki - laki', 'chouji', 'kurinai', 'islam', 'sma apa', 'guru', 'belum kawin', '361555', 'indonesia', 'o', '082229887657', 0, 0, 'desa apa rt apa rw apa kecamatan apa kabupaten apa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghasilan`
--

CREATE TABLE `penghasilan` (
  `id_penghasilan` int(11) NOT NULL,
  `penghasilan_sebulan` varchar(45) DEFAULT NULL,
  `maksud_pembuatan` varchar(45) DEFAULT NULL,
  `nik` int(45) DEFAULT NULL,
  `no_surat` int(45) DEFAULT NULL,
  `tanggal` int(45) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `penghasilan`
--

INSERT INTO `penghasilan` (`id_penghasilan`, `penghasilan_sebulan`, `maksud_pembuatan`, `nik`, `no_surat`, `tanggal`, `status`) VALUES
(10, 'wfeg', 'maksudnya2020', 91, 202005, 2020, 'Request'),
(16, '12', 'cvgbhnm', 123, 202006, 2020, 'Request');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengikut`
--

CREATE TABLE `pengikut` (
  `id_pengikut` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `umur` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `keterangan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengikut_pindah`
--

CREATE TABLE `pengikut_pindah` (
  `id` int(11) NOT NULL,
  `fk_id_pengikut` varchar(20) NOT NULL,
  `nik_pengikut` varchar(20) NOT NULL,
  `hubungan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengikut_pindah`
--

INSERT INTO `pengikut_pindah` (`id`, `fk_id_pengikut`, `nik_pengikut`, `hubungan`) VALUES
(38, '2020.06.04.09.53.40', '91', ''),
(42, '2020.06.05.03.46.36', '123', 'hubeydfghj'),
(43, '2020.06.05.03.46.36', '91', 'gheeydfgh'),
(45, '2020.06.05.04.01.56', '91', 'gh');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` varchar(45) DEFAULT NULL,
  `hari` varchar(45) DEFAULT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `jenis` varchar(45) DEFAULT NULL,
  `pengumuman` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pindah_penduduk`
--

CREATE TABLE `pindah_penduduk` (
  `id_pindah_penduduk` int(40) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `desa_baru` varchar(45) DEFAULT NULL,
  `kecamatan_baru` varchar(45) DEFAULT NULL,
  `kabupaten_baru` varchar(45) DEFAULT NULL,
  `provinsi_baru` varchar(45) DEFAULT NULL,
  `tujuan` varchar(500) DEFAULT NULL,
  `tgl` varchar(45) DEFAULT NULL,
  `no_surat` varchar(45) DEFAULT NULL,
  `id_pengikut` varchar(25) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `pindah_penduduk`
--

INSERT INTO `pindah_penduduk` (`id_pindah_penduduk`, `nik`, `desa_baru`, `kecamatan_baru`, `kabupaten_baru`, `provinsi_baru`, `tujuan`, `tgl`, `no_surat`, `id_pengikut`, `status`) VALUES
(21, '123', 'desau', 'kec', 'kab', 'pro', 'tuj', '2020-06-04', '213', '2020.06.04.09.53.40', 'Request'),
(22, '123', 'desau', 'kec', 'kab', 'pro', 'tuj', '2020-06-04', '214', '2020.06.04.11.03.19', 'Tervalidasi'),
(23, '123', 'desaue', 'kece', 'kabe', 'kabe', 'tujuankue', '2020-06-05', '215', '2020.06.05.03.46.36', 'Request'),
(24, '123', 'desau', 'kec', 'kab', 'pro', 'tuj', '2020-06-05', '216', '2020.06.05.04.01.56', 'Request');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE `profil` (
  `sejarah` int(11) DEFAULT NULL,
  `peta` varchar(45) DEFAULT NULL,
  `jumlah_oenduduk_` varchar(45) DEFAULT NULL,
  `nama_rt` varchar(45) DEFAULT NULL,
  `nama rw` varchar(45) DEFAULT NULL,
  `nama_kepala_desa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `nomor_surat` varchar(45) DEFAULT NULL,
  `tgl_surat` varchar(45) DEFAULT NULL,
  `noreg_kec` varchar(45) DEFAULT NULL,
  `validasi_kec` varchar(45) DEFAULT NULL,
  `validasi_kades` varchar(45) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `kematian_id_kematian` int(11) NOT NULL,
  `penghasilan_id_penghasilan` int(11) NOT NULL,
  `tidak mampu_id_tidak_mampu` int(11) NOT NULL,
  `surat kuasa_id_surat_kuasa` int(11) NOT NULL,
  `pindah penduduk_id_pindah_penduduk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tidak_mampu`
--

CREATE TABLE `tidak_mampu` (
  `id_tidak_mampu` int(11) NOT NULL,
  `pekerjaan` varchar(45) DEFAULT NULL,
  `tujuan` varchar(500) DEFAULT NULL,
  `nik` int(45) DEFAULT NULL,
  `no_surat` int(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  `tanggal` int(45) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `tidak_mampu`
--

INSERT INTO `tidak_mampu` (`id_tidak_mampu`, `pekerjaan`, `tujuan`, `nik`, `no_surat`, `status`, `tanggal`) VALUES
(0, NULL, 'zbfkuae', 123, 202005, 'Tervalidasi', 2020);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_kantor_desa`
--
ALTER TABLE `admin_kantor_desa`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `alamat`
--
ALTER TABLE `alamat`
  ADD PRIMARY KEY (`id_alamat`);

--
-- Indeks untuk tabel `beda_nama`
--
ALTER TABLE `beda_nama`
  ADD PRIMARY KEY (`id_beda_nama`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD PRIMARY KEY (`id_kelahiran`);

--
-- Indeks untuk tabel `kematian`
--
ALTER TABLE `kematian`
  ADD PRIMARY KEY (`id_kematian`);

--
-- Indeks untuk tabel `kuasa_akta`
--
ALTER TABLE `kuasa_akta`
  ADD PRIMARY KEY (`id_kuasa_akta`);

--
-- Indeks untuk tabel `kuasa_lahan`
--
ALTER TABLE `kuasa_lahan`
  ADD PRIMARY KEY (`id_kuasa_lahan`);

--
-- Indeks untuk tabel `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `no_surat`
--
ALTER TABLE `no_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`id_penduduk`);

--
-- Indeks untuk tabel `penghasilan`
--
ALTER TABLE `penghasilan`
  ADD PRIMARY KEY (`id_penghasilan`);

--
-- Indeks untuk tabel `pengikut`
--
ALTER TABLE `pengikut`
  ADD PRIMARY KEY (`id_pengikut`);

--
-- Indeks untuk tabel `pengikut_pindah`
--
ALTER TABLE `pengikut_pindah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indeks untuk tabel `pindah_penduduk`
--
ALTER TABLE `pindah_penduduk`
  ADD PRIMARY KEY (`id_pindah_penduduk`);

--
-- Indeks untuk tabel `tidak_mampu`
--
ALTER TABLE `tidak_mampu`
  ADD PRIMARY KEY (`id_tidak_mampu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_kantor_desa`
--
ALTER TABLE `admin_kantor_desa`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `beda_nama`
--
ALTER TABLE `beda_nama`
  MODIFY `id_beda_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  MODIFY `id_kelahiran` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kematian`
--
ALTER TABLE `kematian`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kuasa_akta`
--
ALTER TABLE `kuasa_akta`
  MODIFY `id_kuasa_akta` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `kuasa_lahan`
--
ALTER TABLE `kuasa_lahan`
  MODIFY `id_kuasa_lahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `no_surat`
--
ALTER TABLE `no_surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `id_penduduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `penghasilan`
--
ALTER TABLE `penghasilan`
  MODIFY `id_penghasilan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `pengikut_pindah`
--
ALTER TABLE `pengikut_pindah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT untuk tabel `pindah_penduduk`
--
ALTER TABLE `pindah_penduduk`
  MODIFY `id_pindah_penduduk` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
