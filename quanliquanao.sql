-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2021 lúc 03:09 AM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanliquanao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `MaBlog` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `AnhBlog` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `TieuDe` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `ThoiGian` datetime NOT NULL,
  `NgPost` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `NoiDung` varchar(10000) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `AnhBlog_nho` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`MaBlog`, `AnhBlog`, `TieuDe`, `ThoiGian`, `NgPost`, `NoiDung`, `AnhBlog_nho`) VALUES
('MB01', 'blog-post-1.jpg', 'Quần Âu ống rộng', '2021-01-16 00:00:00', 'Mr Vinh', 'Quần ống rộng đã không còn quá xa lạ đối với phái nữ, nhưng hiện tại thì phái nam đã có quần âu ống rộng với phong cách trẻ đẹp nhưng vẫn toát lên vẻ lịch lãm.', 'blog-post-1-blog.jpg'),
('MB02', 'blog-post-2.jpg', 'Quần áo lịch lãm', '2020-01-01 00:00:00', 'Mr Quang', 'Đàn ông ai cũng muốn bản thân mình đẹp, lịch lãm nhất trong mắt người khác. Và ăn mặc đẹp cho nam là một trong những cách để thể hiện điều đó. Một trong cách phối đồ đẹp là áo sơ mi kết hợp với quần âu. Với phong cách này luôn luôn là điểm cộng với các bạn gái. Cách phối đồ này vô cùng đơn giản do đó các bạn nam nên thử chắc chắn sẽ rất hiệu quả.', 'blog-post-2-blog.jpg'),
('MB03', 'blog-post-3.jpg', 'Xếp đồ', '2020-02-02 00:00:00', 'Mr Đat', 'Để có quần áo đẹp và ngăn nắp thì không thể thiếu sự ngăn nắp đó là xếp đồ. Việc xếp đồ gọn gàng sẽ luôn để được quần áo lâu dài, không bị nhăn. Do đó việc xếp đồ cần những đôi tay mềm mại khéo léo của người con gái, vì thế cánh mày râu cố gắng kiếm cho mình cô người yêu để luôn có được những bộ quần áo sạch đẹp ngăn nắp', 'blog-post-3-blog.jpg'),
('MB04', 'ao-phong.png', 'Áo phông có cổ', '2020-05-10 00:00:00', 'Mrs Linh', 'Khi nhắc đến áo phông người ta thường liên tưởng đến sự thoải mái, năng động có thể mặc ở nhà hay đi chơi, nhưng với thiết kế áo phông nam có cổ lại mang đến cảm giác gọn gàng, nghiêm chỉnh và đầy nam tính cho các chàng trai. Chính vì vậy, một chiếc áo phông có cổ vừa thích hợp với môi trường công sở, vừa không mất đi sự thoải mái của áo phông, lại không quá gò bó như áo sơ mi, tạo cho người mặc nét ấn tượng về sự lịch sự, nghiêm túc trong công việc.', 'ao-phong-blog.png'),
('MB05', 'cotton.png', 'Quần áo cotton bị xù', '2020-04-07 00:00:00', 'Mrs Oang', 'Giặt quần áo cotton bằng máy giặt làm quần áo bị ma sát nhiều và mạnh hơn bao giờ hết, có thể ban đầu áo chỉ bị xù lông nhẹ. Nhưng sau khi bước từ máy giặt ra thì lại là một bộ mặt sần sùi, xấu xí. Cộng thêm việc những cục bông xù lại được dịp xoắn lại với vải ở các bộ trang phục khác khiến cả tủ quần áo của bạn chẳng cái nào còn nguyên vẹn.', 'cotton-blog.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `Id` int(11) NOT NULL,
  `MaHD` int(11) NOT NULL,
  `MaSP` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `GiaBan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`Id`, `MaHD`, `MaSP`, `SoLuong`, `GiaBan`) VALUES
(1, 1, 'SP03', 1, 210000),
(2, 1, 'SP04', 1, 500000),
(3, 2, 'SP04', 1, 500000),
(4, 2, 'SP03', 1, 210000),
(5, 3, 'SP06', 1, 450000),
(6, 3, 'SP08', 1, 200000),
(7, 4, 'SP03', 3, 210000),
(8, 4, 'SP01', 2, 420192),
(9, 5, 'SP02', 1, 310000),
(10, 6, 'SP03', 1, 210000),
(11, 7, 'SP03', 1, 210000),
(12, 8, 'SP03', 1, 210000),
(13, 9, 'SP03', 1, 210000),
(14, 10, 'SP03', 1, 210000),
(15, 11, 'SP03', 1, 210000),
(16, 12, 'SP03', 1, 210000),
(17, 13, 'SP03', 1, 210000),
(18, 14, 'SP03', 1, 210000),
(19, 15, 'SP03', 1, 210000),
(20, 16, 'SP03', 1, 210000),
(21, 17, 'SP03', 1, 210000),
(22, 18, 'SP03', 1, 210000),
(23, 18, 'SP02', 1, 310000),
(24, 19, 'SP03', 1, 210000),
(25, 19, 'SP02', 1, 310000),
(26, 20, 'SP03', 1, 210000),
(27, 20, 'SP02', 1, 310000),
(28, 21, 'SP03', 1, 210000),
(29, 21, 'SP02', 1, 310000),
(30, 22, 'SP03', 1, 210000),
(31, 22, 'SP02', 1, 310000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `congty`
--

CREATE TABLE `congty` (
  `TenCty` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `DiaChiCty` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `SdtCty` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `congty`
--

INSERT INTO `congty` (`TenCty`, `DiaChiCty`, `SdtCty`) VALUES
('Atrino', 'Đống Đa Hà Nội', '0322988444'),
('DatVinhQuang', 'Long An', '09764646'),
('HANSAE ', 'Đống Đa ', '08765987'),
('May10', 'Nam Định', '099965787'),
('Owen', 'Bắc Giang', '0976454589'),
('Shein', 'Đống Đa Hà Nộii', '0322988444'),
('VietTien', 'Đống Đa Hà Nộii', '0322988444');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `doanhthu`
--

CREATE TABLE `doanhthu` (
  `MaNgayThang` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `DoanhThu` float DEFAULT NULL,
  `TongSLBanDc` int(11) DEFAULT NULL,
  `TenNhanVien` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SoDonBan` int(11) DEFAULT NULL,
  `DoanhThuNV` float DEFAULT NULL,
  `TenSpBanChay` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SLBan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `doanhthu`
--

INSERT INTO `doanhthu` (`MaNgayThang`, `DoanhThu`, `TongSLBanDc`, `TenNhanVien`, `SoDonBan`, `DoanhThuNV`, `TenSpBanChay`, `SLBan`) VALUES
('00032020', 15000, 50, 'Bùi Quang Hậu', 34, 200000, 'Quần Short ', 60),
('00042019', 98980, 100, 'Vương Toàn Đạt', 40, 200000, 'Áo Jean', 6),
('00042020', 12100, 70, 'Nguyễn Trung Giang', 24, 200000, 'Quần Short ', 45),
('00052019', 28968, 70, 'Bùi Quang Hậu', 20, 200000, 'Quần Jean', 10),
('00052020', 30000, 100, 'Bùi Thị Vân', 58, 200000, 'Váy Đen', 8),
('00062019', 32100, 30, 'Nguyễn Trung Giang', 9, 200000, 'Quần Short ', 40),
('00062020', 32100, 60, 'Nguyễn Thị Bông', 45, 200000, 'Áo Jean', 9),
('00072019', 40975, 60, 'Bùi Thị Vân', 16, 200000, 'Áo Jean', 23),
('00072020', 12000, 150, 'Lại Thị Phương', 60, 200000, 'Quần Short ', 12),
('00082019', 30000, 40, 'Nguyễn Thị Bông', 35, 200000, 'Áo Ba Lỗ', 5),
('00082020', 20000, 70, 'Nguyễn Sỹ Thể', 4, 200000, 'Sơ Mi', 3),
('00092019', 20000, 50, 'Lại Thị Phương', 24, 200000, 'Quần Jean', 5),
('00092020', 18000, 80, 'Nguyễn Văn Bình', 6, 200000, 'Quần Short ', 5),
('00102019', 90000, 20, 'Nguyễn Sỹ Thể', 18, 200000, 'Áo Ba Lỗ', 5),
('00102020', 26000, 85, 'Vương Toàn Đạt', 3, 200000, 'Áo Jean', 5),
('00112019', 10000, 80, 'Nguyễn Văn Bình', 49, 200000, 'Áo Phông', 5),
('00112020', 21000, 100, 'Bùi Quang Hậu', 7, 200000, 'ComBo Quần+Áo', 24),
('00112021', 21000, 100, 'Bùi Quang Hậu', 7, 200000, 'ComBo Quần+Áo', 30),
('00112028', 21000, 45, 'Bùi Quang Hậu', 20, 200000, 'Áo Jean', 30),
('00122019', 15000, 90, 'Vương Toàn Đạt', 56, 200000, 'Quần Short ', 5),
('00122020', 34000, 115, 'Nguyễn Trung Giang', 3, 200000, 'ComBo Quần+Áo', 3),
('01012019', 56000, 55, 'Nguyễn Thị Bông', 10, 300000, 'Váy Đen', 10),
('01012020', 33000, 10, 'Bùi Quang Hậu', 5, 200000, 'ComBo Quần+Áo', 5),
('01022019', 64500, 10, 'Vương Toàn Đạt', 5, 200000, 'Quần Short ', 5),
('01022020', 83400, 50, 'Lại Thị Phương', 34, 200000, 'Quần beijing', 5),
('01032019', 30000, 90, 'Nguyễn Thị Bông', 30, 200000, 'Quần beijing', 5),
('02012019', 72400, 35, 'Lại Thị Phương', 15, 200000, 'Quần Short ', 20),
('02012020', 62100, 35, 'Nguyễn Trung Giang', 37, 200000, 'Áo Jean', 20),
('02022019', 45000, 70, 'Bùi Quang Hậu', 50, 200000, 'Quần Short ', 5),
('02022020', 56000, 70, 'Nguyễn Sỹ Thể', 23, 200000, 'Quần Short ', 5),
('02032019', 30000, 40, 'Lại Thị Phương', 20, 200000, 'Quần Short ', 5),
('0231312', 34324, 55, 'Vương Toàn Đạt', 36, 865713, 'Quần Short ', 10),
('0231317', 34324, 37, 'Vương Toàn Đạt', 18, 865713, 'Quần beijing', 30),
('0231318', 34324, 77, 'Vương Toàn Đạt', 32, 865713, 'Quần Short ', 28),
('03012019', 95760, 20, 'Nguyễn Sỹ Thể', 25, 400000, 'Quần Jean', 30),
('03012020', 71000, 55, 'Bùi Thị Vân', 32, 400000, 'Váy Đen', 30),
('03022019', 33000, 30, 'Nguyễn Trung Giang', 15, 200000, 'Quần Short ', 5),
('03022020', 42400, 30, 'Nguyễn Văn Bình', 32, 200000, 'ComBo Quần+Áo', 5),
('03032019', 30000, 60, 'Nguyễn Sỹ Thể', 50, 200000, 'Quần Short ', 5),
('03124344', 34324, 66, 'Nguyễn Trung Giang', 22, 432434, 'Quần beijing', 27),
('0321443', 84700, 13, 'Vương Toàn Đạt', 6, 664343, 'Áo Jean', 8),
('0324344', 32434, 55, 'Bùi Thị Vân', 22, 545355, 'Quần Short ', 11),
('04012019', 37680, 60, 'Nguyễn Văn Bình', 40, 200000, 'Quần Jean', 5),
('04012020', 94600, 40, 'Nguyễn Thị Bông', 30, 200000, 'Quần Short ', 5),
('04022019', 84700, 50, 'Bùi Thị Vân', 10, 200000, 'Quần Jean', 5),
('04022020', 39000, 45, 'Vương Toàn Đạt', 15, 200000, 'Quần Short ', 20),
('04032019', 30000, 30, 'Nguyễn Văn Bình', 20, 200000, 'Váy Đen', 5),
('0523123', 43423, 36, 'Vương Toàn Đạt', 33, 432434, 'Quần Jean', 33),
('0988443', 14234, 66, 'Lại Thị Phương', 7, 324324, 'Váy Đen', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gioitinh`
--

CREATE TABLE `gioitinh` (
  `MaGT` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `GioiTinh` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `gioitinh`
--

INSERT INTO `gioitinh` (`MaGT`, `GioiTinh`) VALUES
('Nam', 'Nam'),
('Nu', 'Nữ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `fullname` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `phone_number` int(20) NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_vietnamese_ci NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`MaHD`, `fullname`, `phone_number`, `email`, `address`, `order_date`) VALUES
(1, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-07 16:46:01'),
(2, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-09 14:55:02'),
(3, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-10 16:06:48'),
(4, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:47:00'),
(5, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:48:16'),
(6, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:52:49'),
(7, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:53:03'),
(8, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:54:56'),
(9, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:54:59'),
(10, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:55:04'),
(11, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:55:16'),
(12, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:55:48'),
(13, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:58:40'),
(14, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:58:45'),
(15, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:59:13'),
(16, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 02:59:28'),
(17, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 03:02:35'),
(18, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 03:02:51'),
(19, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 03:04:39'),
(20, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 03:05:00'),
(21, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 03:05:24'),
(22, 'Vương Đạt', 1658421958, 'vuongdatpro@gmail.com', 'số nhà 1b ngách 90 ngõ 1194 láng thượng đống đa hà nội', '2021-10-11 03:06:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisp`
--

CREATE TABLE `loaisp` (
  `MaLoai` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `Loai` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisp`
--

INSERT INTO `loaisp` (`MaLoai`, `Loai`) VALUES
('Ao', 'Áo'),
('Combo', 'Combo'),
('Quan', 'Quần');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `SDT` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `Luong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `HoTen`, `SDT`, `DiaChi`, `Luong`) VALUES
('NV01', 'Vương Toàn Đạt', '09999999', 'Hà Nội', 99999),
('NV02', 'Trần Minh Quang', '08989899', 'Nam Định', 40000),
('NV03', 'Đồng Văn Vinh', '07734552', 'Bắc Giang', 40000),
('NV04', 'Nguyên Văn A', '01234155', 'Ninh Bình ', 35000),
('NV05', 'Kiều Văn Cường', '09546525', 'Thanh Hóa', 37000),
('NV06', 'Nguyễn Ngọc Phong ', '03542544', 'Bắc Giang', 40000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenSP` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL,
  `GiaBan` float NOT NULL,
  `Loai` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `TinhTrang` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Anh` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `GioiTinh` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MoTa` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Anh_hover` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `GiaBan`, `Loai`, `TinhTrang`, `Anh`, `GioiTinh`, `MoTa`, `Anh_hover`) VALUES
('SP01', 'Quần đùi', 420192, 'Quan', 'Còn Hàng', 'product1.jpg', 'Nu', 'Sản phẩm được may từ chất liệu thun cotton 4 chiều, phần kẻ ngang co giãn nhiều hơn, khiến người mặc thật sự thoải mái với bộ đồ.', 'product2.jpg'),
('SP02', 'Áo Jean', 310000, 'Ao', 'Còn Hàng', 'product2.jpg', 'Nu', 'Sản phẩm được may từ chất liệu thun cotton 4 chiều, phần kẻ ngang co giãn nhiều hơn, khiến người mặc thật sự thoải mái với bộ đồ.', 'product1.jpg'),
('SP03', 'Quần Jean', 210000, 'Quan', 'Còn Hàng', 'product3.jpg', 'Nu', 'Chất liệu hút mồ hôi rất nhanh, do đó rất phù hợp cho việc tập thể thao hàng ngày.', 'product13.jpg'),
('SP04', 'Váy Đen', 500000, 'Ao', 'Còn Hàng', 'product4.jpg', 'Nu', 'Chất Liệu Vải Tốt ,Chất lượng Bạn có thể thoái mái Giặt Máy, không bong tróc trong quá trình sử dụng.  hoặc giặt tay tùy thích.', 'product5.jpg'),
('SP05', 'Áo Ba Lỗ', 150000, 'Ao', 'Hết Hàng', 'product5.jpg', 'Nu', 'Sản phẩm được may từ chất liệu thun cotton 4 chiều, phần kẻ ngang co giãn nhiều hơn, khiến người mặc thật sự thoải mái với bộ đồ.', 'product4.jpg'),
('SP06', 'Sơ Mi', 450000, 'Ao', 'Còn Hàng', 'product6.jpg', 'Nu', 'Chất liệu hút mồ hôi rất nhanh, do đó rất phù hợp cho việc tập thể thao hàng ngày.', 'product1.jpg'),
('SP07', 'Áo Phông', 120000, 'Ao', 'Hết Hàng', 'product7.jpg', 'Nu', 'Chất liệu hút mồ hôi rất nhanh, do đó rất phù hợp cho việc tập thể thao hàng ngày.', 'product16.jpg'),
('SP08', 'Áo Phông', 200000, 'Ao', 'Còn Hàng', 'product8.jpg', 'Nu', 'Chất liệu hút mồ hôi rất nhanh, do đó rất phù hợp cho việc tập thể thao hàng ngày.', 'product9.jpg'),
('SP09', 'Áo Phông', 250000, 'Ao', 'Còn Hàng', 'product9.jpg', 'Nu', 'Chất liệu hút mồ hôi rất nhanh, do đó rất phù hợp cho việc tập thể thao hàng ngày.', 'product8.jpg'),
('SP10', 'Quần Short', 130000, 'Quan', 'Còn Hàng', 'product10.jpg', 'Nam', 'Chất lượng đường may tốt, sản phẩm được sản xuất trên chuyền may loại 1, đội ngũ thợ lành nghề, kinh nghiệm lâu năm.', 'product12.jpg'),
('SP11', 'Quần Short', 230000, 'Quan', 'Còn Hàng', 'product11.jpg', 'Nam', 'Sản phẩm được may từ chất liệu thun cotton 4 chiều, phần kẻ ngang co giãn nhiều hơn, khiến người mặc thật sự thoải mái với bộ đồ.', 'product13.jpg'),
('SP12', 'ComBo Quần+Áo', 400000, 'Combo', 'Còn Hàng', 'product12.jpg', 'Nam', 'Chất Liệu Vải Tốt ,Chất lượng Bạn có thể thoái mái Giặt Máy, không bong tróc trong quá trình sử dụng.  hoặc giặt tay tùy thích.', 'product13.jpg'),
('SP13', 'Áo Jean', 123000, 'Ao', 'Hết Hàng', 'product13.jpg', 'Nam', 'Chất Liệu Vải Tốt ,Chất lượng Bạn có thể thoái mái Giặt Máy, không bong tróc trong quá trình sử dụng.  hoặc giặt tay tùy thích.', 'product12.jpg'),
('SP14', 'ComBo Quần+Áo', 320000, 'Combo', 'Còn Hàng', 'product14.jpg', 'Nu', 'Chất lượng đường may tốt, sản phẩm được sản xuất trên chuyền may loại 1, đội ngũ thợ lành nghề, kinh nghiệm lâu năm.', 'product15.jpg'),
('SP15', 'Quần beijing', 200000, 'Quan', 'Hết Hàng', 'product15.jpg', 'Nu', 'Chất liệu hút mồ hôi rất nhanh, do đó rất phù hợp cho việc tập thể thao hàng ngày.', 'product14.jpg'),
('SP16', 'Quần beijing', 230000, 'Quan', 'Còn Hàng', 'product16.jpg', 'Nu', 'Chất Liệu Vải Tốt ,Chất lượng Bạn có thể thoái mái Giặt Máy, không bong tróc trong quá trình sử dụng.  hoặc giặt tay tùy thích.', 'product7.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_datetime` datetime NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `create_datetime`, `token`) VALUES
(1, 'Quang', 'tranquang1903@gmail.com', '1ae11472234c134a54b569609e385527', '2021-10-02 15:09:04', ''),
(2, 'Quang2', 'tranquang19032000@gmail.com', '1ae11472234c134a54b569609e385527', '2021-10-02 15:10:14', NULL),
(3, 'Quang3', 'tranquang1903@gmail.com', '59ba98d0a27acad6d6f0b91141004e55', '2021-10-02 15:15:54', ''),
(4, 'Quang4', 'tranquang1903@gmail.com', 'abcdef123', '2021-10-02 15:19:10', ''),
(5, 'Quang5', 'tranquang1903@gmail.com', '12345678', '2021-10-02 15:20:20', '6bdbabc07ecbfcb4de4b7470a04f95ef'),
(6, 'znpronz', 'vuongdatpro@gmail.com', 'aa3a5464ff6880389fd7e809c4652487', '2021-10-08 18:40:51', '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `MaHD` (`MaHD`);

--
-- Chỉ mục cho bảng `congty`
--
ALTER TABLE `congty`
  ADD PRIMARY KEY (`TenCty`);

--
-- Chỉ mục cho bảng `doanhthu`
--
ALTER TABLE `doanhthu`
  ADD PRIMARY KEY (`MaNgayThang`);

--
-- Chỉ mục cho bảng `gioitinh`
--
ALTER TABLE `gioitinh`
  ADD PRIMARY KEY (`MaGT`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`);

--
-- Chỉ mục cho bảng `loaisp`
--
ALTER TABLE `loaisp`
  ADD PRIMARY KEY (`MaLoai`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `GioiTinh` (`GioiTinh`),
  ADD KEY `Loai` (`Loai`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`GioiTinh`) REFERENCES `gioitinh` (`MaGT`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`Loai`) REFERENCES `loaisp` (`MaLoai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
