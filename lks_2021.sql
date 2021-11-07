-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2021 pada 14.09
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lks_2021`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(11) NOT NULL,
  `nama_penulis` varchar(300) NOT NULL,
  `title_artikel` varchar(300) NOT NULL,
  `slug_konten` varchar(400) NOT NULL,
  `konten` text NOT NULL,
  `tanggal_posting_artikel` date NOT NULL,
  `foto_artikel` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `nama_penulis`, `title_artikel`, `slug_konten`, `konten`, `tanggal_posting_artikel`, `foto_artikel`) VALUES
(3, 'Jokowi', 'Banteng lapar kimak', 'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.', 'Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vivamus magna justo, lacinia eget consectetur seVestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.d, convallis at tellus.', '2021-11-06', 'a.jpg'),
(4, 'Rifki Romadhan', 'Budidaya Kode vs budidaya banteng', 'Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus. Sed porttitor lectus nibh. Proin eget tortor risus.', 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;br/&gt;&lt;br/&gt;Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.&lt;br/&gt;&lt;br/&gt;Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vivamus suscipit tortor eget felis porttitor volutpat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Proin eget tortor risus.', '2021-11-06', '6186801b20590.jpg'),
(8, 'Rifki', 'sawah kimak', 'asdasd', 'asdasdsad', '2021-11-06', '618624458b56e.png'),
(9, 'Rifki Romadhan', 'Banteng Marah', 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.', 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.Quisque velit nisi, pretium ut lacinia in, elementum id enim. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.', '2021-11-06', '61867bcd60553.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `tanggal_posting` timestamp NOT NULL DEFAULT current_timestamp(),
  `isi_komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_provinsi`, `nama_user`, `tanggal_posting`, `isi_komentar`) VALUES
(1, 1, 'Anjay', '2021-11-04 17:00:00', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!'),
(2, 1, 'Anjay', '2021-11-04 17:00:00', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!'),
(3, 2, 'Anjay', '2021-11-04 17:00:00', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!'),
(4, 1, 'Kimak', '2021-11-06 16:09:40', 'Jakarta kaya kontol'),
(5, 1, 'Prabowo 2024', '2021-11-06 09:20:50', 'Coblos saya di 2024 nanti ya wkwkwkwk nanti tak kasih uang 100k\r\n\r\n#prabowo2024\r\n#savePrabowo\r\n#prabowoKimak'),
(7, 1, 'Prabowo 2024', '2021-11-06 15:50:03', 'Praroro'),
(8, 5, 'Prabowo 2024', '2021-11-06 15:51:00', 'Kasian papua wkwk'),
(9, 2, 'Prabowo 2024', '2021-11-06 15:52:41', 'Jadi ingat lawan saya di 2024, yaitu ganjar wkwk'),
(10, 4, 'Prabowo 2024', '2021-11-06 15:53:57', 'kurang tau tentang provinsi ini :D'),
(11, 1, 'Jokowi 3 Periode', '2021-11-06 15:58:07', 'Eh ada Prabowo'),
(12, 1, 'Jokowi 3 Periode', '2021-11-06 15:58:49', 'Apa kabar pak Prabowo? sudah siap belum nyalon sama saya di 2024 wkwkwk'),
(13, 1, 'Jokowi 3 Periode', '2021-11-06 16:00:11', '#JoWo #JokowiPrabowo #Bismillah3Periode #Lancar #PanjangPeriodenya'),
(14, 2, 'Jokowi 3 Periode', '2021-11-06 16:01:09', 'Lawan saya dan prabowo di 2024 yaitu Ganjar dan Puan wkwkwkwk\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `email_pengirim` varchar(300) NOT NULL,
  `judul_kontak` varchar(300) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `email_pengirim`, `judul_kontak`, `pesan`) VALUES
(1, 'kimak@gmail.com', 'hi, Kimak', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.'),
(2, 'kimakanjay@gmail.com', 'How are you', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.'),
(9, 'jokowi@PDI.com', 'Salam Banteng', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis lorem ut libero malesuada feugiat. Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penginapan`
--

CREATE TABLE `penginapan` (
  `id_penginapan` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_penginapan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `penginapan`
--

INSERT INTO `penginapan` (`id_penginapan`, `id_provinsi`, `nama_penginapan`) VALUES
(1, 1, 'Villa Meta'),
(2, 1, 'Hotel Kimak'),
(3, 1, 'Villa Anjay'),
(4, 2, 'Hotel Mark'),
(5, 2, 'Villa Verse'),
(6, 5, 'Villa Tertinggal'),
(7, 5, 'Hotel Berkarat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(255) NOT NULL,
  `deskripsi_singkat_provinsi` varchar(300) NOT NULL,
  `deskripsi_lengkap` text NOT NULL,
  `foto_provinsi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id_provinsi`, `nama_provinsi`, `deskripsi_singkat_provinsi`, `deskripsi_lengkap`, `foto_provinsi`) VALUES
(1, 'Jakartaa', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!', '61853d066b33f.png'),
(2, 'Jawa Tengah', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo asperna', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas qui cumque et illo aspernatur dolor similique reiciendis voluptatum repudiandae nesciunt!', 'b.jpg'),
(4, 'Sumatra Utara', 'Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.', 'Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Pellentesque in ipsum id orci porta dapibus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.&lt;br/&gt;&lt;br/&gt;Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat. Cras ultricies ligula sed magna dictum porta.&lt;br/&gt;&lt;br/&gt;Vivamus suscipit tortor eget felis porttitor volutpat. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus.&lt;br/&gt;&lt;br/&gt;Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.&lt;br/&gt;&lt;br/&gt;Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit.', '618539750374e.png'),
(5, 'Papua Tertinggal', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet ', 'Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.&lt;br/&gt;&lt;br/&gt;Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit.&lt;br/&gt;&lt;br/&gt;Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Pellentesque in ipsum id orci porta dapibus.&lt;br/&gt;&lt;br/&gt;Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur aliquet quam id dui posuere blandit. Pellentesque in ipsum id orci porta dapibus.&lt;br/&gt;&lt;br/&gt;Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.', '61853d7fc15c3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tempatmakan`
--

CREATE TABLE `tempatmakan` (
  `id_tempat_makan` int(11) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `nama_tempat_makan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tempatmakan`
--

INSERT INTO `tempatmakan` (`id_tempat_makan`, `id_provinsi`, `nama_tempat_makan`) VALUES
(1, 1, 'Restoran Sambel Lempeh'),
(2, 1, 'Restoran Alpukat'),
(3, 2, 'Rumah Makan Gendeng'),
(4, 2, 'Restoran java '),
(5, 5, 'Kecoa'),
(6, 5, 'Babi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `role_user` varchar(20) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `foto_user` varchar(200) NOT NULL,
  `password_user` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `role_user`, `nama_user`, `email_user`, `foto_user`, `password_user`) VALUES
(1, 'admin', 'Rifki Romadhan', 'a@gmail.com', 'a.jpg', 'a'),
(2, 'pelanggan', 'Anjay', 'b@gmail.com', 'b.jpg', 'b'),
(3, 'pelanggan', 'Kimak', 'c@gmail.com', 'a.jpg', 'c'),
(4, 'pelanggan', 'Kimak Anjay', 'kontol@gmail.com', 'user.svg', '$2y$10$Vy0Atq87w.opD6.qmKuQ4O9a6kZ0FqeSda9s2FIU21FCiBVVZokiW'),
(5, 'pelanggan', 'sasas kimak', 'asu@gmail.com', 'user.svg', '$2y$10$4CYaJXF/DPeEvz/5hWFE7OnmTfPjQuTLu6B4WAvCQEiNfzCLvbcoq'),
(7, 'pelanggan', 'Prabowo 2024', 'prabowo@gmail.com', 'user.svg', '$2y$10$5f1HnlN6XSSX2LJozH5ghuwBv5efTesrz2KS0H5KxgQYf7rowUEge'),
(8, 'pelanggan', 'Jokowi 3 Periode', 'jokowi@gmail.com', 'user.svg', '$2y$10$QIqSOWPzy3SJ4QS/D9/uzuLxi3GcrngaqLSTewJBvQ7znxIfUJqDG');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indeks untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id_penginapan`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indeks untuk tabel `tempatmakan`
--
ALTER TABLE `tempatmakan`
  ADD PRIMARY KEY (`id_tempat_makan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id_penginapan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tempatmakan`
--
ALTER TABLE `tempatmakan`
  MODIFY `id_tempat_makan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
