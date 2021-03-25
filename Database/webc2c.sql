-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 25, 2021 lúc 05:01 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `webc2c`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_anhsanpham`
--

CREATE TABLE `tbl_anhsanpham` (
  `id_anhsanpham` int(10) NOT NULL,
  `id_sanPham` int(10) NOT NULL,
  `tenAnh1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlAnh1` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenAnh2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlAnh2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenAnh3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlAnh3` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenAnh4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlAnh4` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tenAnh5` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urlAnh5` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitietdonhang`
--

CREATE TABLE `tbl_chitietdonhang` (
  `id_chiTietDonHang` int(10) NOT NULL,
  `id_donHang` int(10) NOT NULL,
  `id_sanPham` int(10) NOT NULL,
  `soLuong` int(10) NOT NULL,
  `tongTienSP` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhgia`
--

CREATE TABLE `tbl_danhgia` (
  `id_CTDH` int(10) NOT NULL,
  `id_sanPham` int(10) NOT NULL,
  `id_nguoiDung` int(10) NOT NULL,
  `noiDungDanhGia` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soSaoDanhGia` int(10) NOT NULL,
  `thoiGianDanhGia` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_donhang`
--

CREATE TABLE `tbl_donhang` (
  `id_donHang` int(10) NOT NULL,
  `id_nguoiDung` int(10) NOT NULL,
  `tongTien` float NOT NULL,
  `thoiGianDat` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `trangThaiDH` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hinhThucThanhToan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `maKhuyenMai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_giohang` int(10) NOT NULL,
  `id_sanpham` int(10) NOT NULL,
  `id_nguoidung` int(10) NOT NULL,
  `soLuongSPGH` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_gopy`
--

CREATE TABLE `tbl_gopy` (
  `id_gopy` int(10) NOT NULL,
  `id_nguoiDung` int(10) NOT NULL,
  `id_loaiGopY` int(10) NOT NULL,
  `thoiGianGopY` datetime(6) NOT NULL,
  `noiDungGopY` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khuyenmai`
--

CREATE TABLE `tbl_khuyenmai` (
  `id_khuyenmai` int(10) NOT NULL,
  `id_shop` int(10) NOT NULL,
  `maKhuyenMai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `thoiGianBatDau` datetime(6) NOT NULL,
  `thoiGianKetThuc` datetime(6) NOT NULL,
  `dieuKien` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noiDung` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `soLuong` int(10) NOT NULL,
  `giaTriToiDa` float NOT NULL,
  `giaTriToiThieuDonHang` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_loaigopy`
--

CREATE TABLE `tbl_loaigopy` (
  `id_loaiGopY` int(10) NOT NULL,
  `tenLoaiGopY` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_nguoidung`
--

CREATE TABLE `tbl_nguoidung` (
  `id_nguoiDung` int(11) NOT NULL,
  `tenTaiKhoan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `matKhau` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `hoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaySinh` date NOT NULL,
  `gioiTinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anhDaiDien` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `trangThai` tinyint(1) NOT NULL DEFAULT 1,
  `dangKyShop` bit(1) NOT NULL DEFAULT b'0',
  `thoiGianTao` datetime(6) NOT NULL,
  `thoiGianSua` datetime(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_nguoidung`
--

INSERT INTO `tbl_nguoidung` (`id_nguoiDung`, `tenTaiKhoan`, `matKhau`, `email`, `sdt`, `hoTen`, `ngaySinh`, `gioiTinh`, `anhDaiDien`, `trangThai`, `dangKyShop`, `thoiGianTao`, `thoiGianSua`) VALUES
(1, 'testuserrr', '0ff357fd011c3a28093d780f78a38961', 'testuserrr@gam.com', '0834432424', 'testuserrraa', '2021-03-09', 'Nữ', '1616409358.png', 1, b'0', '2021-03-20 15:08:36.000000', '2021-03-25 16:27:52.000000'),
(2, 'smenproasd', '33302788bfa627cb8ffd3078773bd9b6', 'menprommo1@gmail.com', '0934823434', 'menpro11111111', '2021-04-07', 'Nam', '1616348142.jpg', 0, b'1', '2021-03-20 15:10:03.000000', '2021-03-22 11:35:18.000000'),
(3, 'tesuteea', '0410e308160ee2fbaf3f79c92ae26433', 'tesuteea@c.com', '0934823489', 'testttttt', '2021-03-19', 'Nam', '1616312281.jpg', 1, b'1', '2021-03-21 08:38:01.000000', '2021-03-21 18:07:16.000000'),
(4, 'bababa', '4e510be093d346512011c3f4fe36e4af', 'jsjdad@ga.com', '0569249595', 'Nguyễn Văn ba', '2021-03-10', 'Nữ', '1616470958.jpg', 1, b'0', '2021-03-23 04:42:38.000000', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_phuongthucthanhtoan`
--

CREATE TABLE `tbl_phuongthucthanhtoan` (
  `id_phuongThucThanhToan` int(10) NOT NULL,
  `tenPhuongThucTT` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sanPham` int(10) NOT NULL,
  `id_shop` int(10) NOT NULL,
  `tenSanPham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `giaSanPhamMoi` double NOT NULL,
  `giaSanPhamCu` double NOT NULL,
  `mieuTaSanPham` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `thuongHieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `xuatXu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `chatLieu` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `soLuong` int(10) NOT NULL,
  `id_trangThaiSP` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shop`
--

CREATE TABLE `tbl_shop` (
  `id_shop` int(10) NOT NULL,
  `id_nguoiDung` int(10) NOT NULL,
  `tenShop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diaChiShop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `moTaShop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `anhShop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diemDanhGia` int(10) DEFAULT NULL,
  `ngayTaoShop` datetime(6) NOT NULL,
  `trangThai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shop`
--

INSERT INTO `tbl_shop` (`id_shop`, `id_nguoiDung`, `tenShop`, `diaChiShop`, `moTaShop`, `anhShop`, `diemDanhGia`, `ngayTaoShop`, `trangThai`) VALUES
(1, 2, 'Cửa hàng VJp PRoaaaaaaaaa', 'Cửa hàng VJp PRoaaa', 'Cửa hàng VJp PRoCửa hàng VJp PRo', '1616656781.png', NULL, '2021-03-25 08:19:41.000000', 1),
(2, 3, 'Cửa hàng Testutteaa', '133 Nguyễn Trãi', 'shop chuyên bán giày dép', '1616656877.jpg', NULL, '2021-03-25 08:21:17.000000', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sodiachi`
--

CREATE TABLE `tbl_sodiachi` (
  `id_soDiaChi` int(11) NOT NULL,
  `id_nguoiDung` int(11) NOT NULL,
  `hoTenNguoiNhan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sdtNguoiNhan` int(11) NOT NULL,
  `diaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phuong` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `quan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_trangthaisanpham`
--

CREATE TABLE `tbl_trangthaisanpham` (
  `id_trangthai` int(10) NOT NULL,
  `tenTrangThai` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  ADD PRIMARY KEY (`id_chiTietDonHang`);

--
-- Chỉ mục cho bảng `tbl_danhgia`
--
ALTER TABLE `tbl_danhgia`
  ADD PRIMARY KEY (`id_CTDH`);

--
-- Chỉ mục cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  ADD PRIMARY KEY (`id_donHang`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_giohang`);

--
-- Chỉ mục cho bảng `tbl_gopy`
--
ALTER TABLE `tbl_gopy`
  ADD PRIMARY KEY (`id_gopy`);

--
-- Chỉ mục cho bảng `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  ADD PRIMARY KEY (`id_khuyenmai`);

--
-- Chỉ mục cho bảng `tbl_loaigopy`
--
ALTER TABLE `tbl_loaigopy`
  ADD PRIMARY KEY (`id_loaiGopY`);

--
-- Chỉ mục cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  ADD PRIMARY KEY (`id_nguoiDung`);

--
-- Chỉ mục cho bảng `tbl_phuongthucthanhtoan`
--
ALTER TABLE `tbl_phuongthucthanhtoan`
  ADD PRIMARY KEY (`id_phuongThucThanhToan`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sanPham`);

--
-- Chỉ mục cho bảng `tbl_shop`
--
ALTER TABLE `tbl_shop`
  ADD PRIMARY KEY (`id_shop`);

--
-- Chỉ mục cho bảng `tbl_sodiachi`
--
ALTER TABLE `tbl_sodiachi`
  ADD PRIMARY KEY (`id_soDiaChi`);

--
-- Chỉ mục cho bảng `tbl_trangthaisanpham`
--
ALTER TABLE `tbl_trangthaisanpham`
  ADD PRIMARY KEY (`id_trangthai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_chitietdonhang`
--
ALTER TABLE `tbl_chitietdonhang`
  MODIFY `id_chiTietDonHang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_danhgia`
--
ALTER TABLE `tbl_danhgia`
  MODIFY `id_CTDH` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_donhang`
--
ALTER TABLE `tbl_donhang`
  MODIFY `id_donHang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_giohang` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_gopy`
--
ALTER TABLE `tbl_gopy`
  MODIFY `id_gopy` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  MODIFY `id_khuyenmai` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_loaigopy`
--
ALTER TABLE `tbl_loaigopy`
  MODIFY `id_loaiGopY` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_nguoidung`
--
ALTER TABLE `tbl_nguoidung`
  MODIFY `id_nguoiDung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_phuongthucthanhtoan`
--
ALTER TABLE `tbl_phuongthucthanhtoan`
  MODIFY `id_phuongThucThanhToan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sanPham` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_shop`
--
ALTER TABLE `tbl_shop`
  MODIFY `id_shop` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tbl_sodiachi`
--
ALTER TABLE `tbl_sodiachi`
  MODIFY `id_soDiaChi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tbl_trangthaisanpham`
--
ALTER TABLE `tbl_trangthaisanpham`
  MODIFY `id_trangthai` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
