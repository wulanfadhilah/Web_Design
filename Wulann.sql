-- phpMyAdmin SQL Dump
-- version 2.11.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 19. Juni 2022 jam 02:31
-- Versi Server: 5.0.45
-- Versi PHP: 5.2.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `crud`
--
CREATE DATABASE `crud` DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci;
USE `crud`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `nis` int(11) NOT NULL,
  `nama` varchar(50) collate latin1_general_ci NOT NULL,
  `jenis_kelamin` varchar(10) collate latin1_general_ci NOT NULL,
  `telp` int(20) NOT NULL,
  `alamat` text collate latin1_general_ci NOT NULL,
  `foto` varchar(100) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`nis`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `jenis_kelamin`, `telp`, `alamat`, `foto`) VALUES
(1, 'Wulan', 'Perempuan', 8228845, 'Sijunjung', '');
