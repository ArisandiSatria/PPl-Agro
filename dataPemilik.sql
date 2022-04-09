CREATE TABLE `dataowner` (
  `Id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `noHp` int(100) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `jenisKelamin` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
INSERT INTO `dataowner` (`Id`, `nama`, `username`, `password`, `email`, `noHp`, `Alamat`, `jenisKelamin`, `tanggal_lahir`) VALUES
(1, 'admin', 'admin123', '12345678', 'admin@email.com', 0, 'jember', 'laki laki', '24 Juni 2000');