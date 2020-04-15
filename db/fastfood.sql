-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 11, 2019 lúc 12:12 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `fastfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_menu`
--

CREATE TABLE `category_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category_menu`
--

INSERT INTO `category_menu` (`menu_id`, `menu_name`) VALUES
(1, 'Trang chủ'),
(2, 'Sản phẩm'),
(3, 'Blog'),
(4, 'Giới thiệu'),
(5, 'Liên hệ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category_product`
--

CREATE TABLE `category_product` (
  `category_product_id` int(11) NOT NULL,
  `category_product_name` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category_product`
--

INSERT INTO `category_product` (`category_product_id`, `category_product_name`) VALUES
(1, 'Bánh Ngọt'),
(5, 'Đồ ăn vặt'),
(7, 'Đồ uống');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(500) NOT NULL,
  `customer_address` varchar(500) NOT NULL,
  `customer_phone` int(11) NOT NULL,
  `customer_email` varchar(500) NOT NULL,
  `customer_pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_address`, `customer_phone`, `customer_email`, `customer_pass`) VALUES
(1, 'hulk', 'hanoi', 973793711, 'hulk@mail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Caption', 'endgame', 123, 'caption@mail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'Phạm Viết Lực', 'Ninh Bình', 971881098, 'lucnb123321@gmail.com', 'fa1b49d92b91a06da6171f52eb3118c5');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `new`
--

CREATE TABLE `new` (
  `new_id` int(11) NOT NULL,
  `new_name` varchar(500) NOT NULL,
  `new_content` varchar(1000) NOT NULL,
  `new_img` varchar(500) NOT NULL,
  `new_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `new`
--

INSERT INTO `new` (`new_id`, `new_name`, `new_content`, `new_img`, `new_date`) VALUES
(1, 'Món quà tặng 8/3 đầy tinh tế và ý nghĩa đến từ Fresh Garden', '<p>Trong một gia đ&igrave;nh, phụ nữ thường l&agrave; những người thầm lặng chăm lo cho từng th&agrave;nh vi&ecirc;n. Niềm vui, niềm hạnh ph&uacute;c của họ đ&ocirc;i khi cũng rất đơn giản, đ&oacute; l&agrave; chỉ cần nh&igrave;n thấy người m&igrave;nh y&ecirc;u thương được vui vẻ, cả gia đ&igrave;nh c&ugrave;ng qu&acirc;y quần b&ecirc;n bữa cơm. Sự hi sinh của người B&agrave;, người Mẹ l&agrave; điều v&ocirc; c&ugrave;ng qu&yacute; gi&aacute; v&agrave; &yacute; nghĩa.&nbsp;<br />\r\n<br />\r\nV&igrave; thế ng&agrave;y Quốc tế Phụ Nữ cũng ch&iacute;nh l&agrave; một dịp để người đ&agrave;n &ocirc;ng b&agrave;y tỏ t&igrave;nh cảm, lời cảm ơn đến với người phụ nữ của m&igrave;nh.<br />\r\nNhững m&oacute;n qu&agrave; 8/3 kh&ocirc;ng nhất thiết phải qu&aacute; sang trọng, cầu k&igrave; hay c&oacute; gi&aacute; trị lớn, m&agrave; đ&ocirc;i khi những m&oacute;n qu&agrave; nhỏ nhưng xuất ph&aacute;t từ tr&aacute;i tim cũng đủ khiến người phụ nữ rung động, xao xuyến.</p>\r\n', '1554314739fb 83 2.jpg', '0000-00-00'),
(2, 'Chào đón tháng 3 thật tươi tắn với cửa hàng Fresh Garden mới ở Ga Hà Nội', '<p>D&ugrave; c&oacute; đi bốn phương trời, l&ograve;ng vẫn nhớ về H&agrave; Nội</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Ga l&agrave; điểm để khởi đầu một chuyến đi xa H&agrave; Nội, cũng l&agrave; điểm đ&oacute;n mọi người đến với H&agrave; Nội. H&atilde;y để Fresh Garden đồng h&agrave;nh c&ugrave;ng bạn trong những chuyến đi v&agrave; đến nh&eacute;.&nbsp;</p>\r\n\r\n<p><br />\r\nBuổi s&aacute;ng ng&agrave;y 1/3/2019, cửa h&agrave;ng Fresh Garden tại Ga H&agrave; Nội đ&atilde; ch&iacute;nh thức đi v&agrave;o hoạt động trong sự h&aacute;o hức mong chờ kh&ocirc;ng chỉ của c&aacute;c h&agrave;nh kh&aacute;ch m&agrave; c&ograve;n của c&aacute;c nh&acirc;n vi&ecirc;n tại đ&acirc;y.</p>\r\n', '1554315309ga 1.jpg', '0000-00-00'),
(3, 'Bánh kem Summit chào đón Donald Trump và Kim Jong Un đến Hà Nội', '<p>V&agrave;o ng&agrave;y 27 v&agrave; 28/2, H&agrave; Nội vinh dự được lựa chọn l&agrave; nơi diễn ra hội nghị Thượng đỉnh Mỹ - Triều Ti&ecirc;n, ch&agrave;o đ&oacute;n sự gh&eacute; thăm của 2 vị l&atilde;nh đạo 2 quốc gia l&agrave; Donald Trump v&agrave; Kim Jong Un.<br />\r\n<br />\r\nTheo d&ograve;ng sự kiện tự h&agrave;o n&agrave;y, Fresh Garden ra mắt mẫu b&aacute;nh kem Summit v&agrave; b&aacute;nh cupcake in h&igrave;nh 2 vị l&atilde;nh đạo với phong c&aacute;ch vui nhộn, đ&aacute;ng y&ecirc;u</p>\r\n', '1554315472123.jpg', '0000-00-00'),
(4, 'Món quà ngọt ngào cho ngày Lễ Tình Nhân thêm lãng mạn', '<p>V&agrave;o ng&agrave;y n&agrave;y, những vi&ecirc;n s&ocirc; c&ocirc; la ngọt ng&agrave;o hay b&ocirc;ng hoa hồng đỏ thắm thường l&agrave; m&oacute;n qu&agrave; được nhiều người lựa chọn để thể hiện t&igrave;nh cảm của m&igrave;nh.&nbsp;<br />\r\n<br />\r\nTuy nhi&ecirc;n cho đến nay, c&aacute;c m&oacute;n qu&agrave; cho ng&agrave;y Lễ T&igrave;nh Nh&acirc;n cũng đa dạng hơn rất nhiều. N&oacute; c&oacute; thể chỉ đơn giản l&agrave; một tấm thiệp với những lời ch&uacute;c ch&acirc;n th&agrave;nh, t&igrave;nh cảm hay những m&oacute;n qu&agrave; tự l&agrave;m đầy &yacute; nghĩa. Đặc biệt, b&aacute;nh kem cho ng&agrave;y 14/2 cũng l&agrave; một m&oacute;n qu&agrave; được nhiều người lựa chọn.<br />\r\n<br />\r\nNh&acirc;n dịp Lễ T&igrave;nh Nh&acirc;n 14/2 năm nay, Fresh Garden cho ra mắt bộ b&aacute;nh kem đầy ngọt ng&agrave;o, với mong muốn c&oacute; thể thay bạn gửi những t&igrave;nh cảm nồng ch&aacute;y, s&acirc;u đậm nhất đến với người y&ecirc;u thương.</p>\r\n', '15543155381234.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `order_price` double NOT NULL,
  `order_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_detail`
--

CREATE TABLE `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `order_product_id` int(11) NOT NULL,
  `order_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_id`, `order_product_id`, `order_number`) VALUES
(13, 0, 24, 1),
(14, 0, 37, 1),
(15, 0, 23, 1),
(16, 0, 22, 4),
(17, 0, 22, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(500) NOT NULL,
  `product_img` varchar(500) NOT NULL,
  `product_price` float NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_content` varchar(500) NOT NULL,
  `product_hot` int(11) NOT NULL,
  `product_sale` float NOT NULL,
  `product_upTo` float NOT NULL,
  `product_fk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_img`, `product_price`, `product_desc`, `product_content`, `product_hot`, `product_sale`, `product_upTo`, `product_fk_id`) VALUES
(22, 'BÁNH KEM TASTY LOVEE', '1554260415ANHUPWEB-_636815843822093406_HasThumb.jpg', 250000, '<p>Tasty Love với cốt b&aacute;nh vanilla 4 lớp</p>\r\n', '<p>Tasty Love với cốt b&aacute;nh vanilla 4 lớp, b&aacute;nh được phủ l&ecirc;n lớp kem socola d&acirc;u ngọt ng&agrave;o, trang tr&iacute; tr&ecirc;n mặt b&aacute;nh l&agrave; những chiếc b&aacute;nh donut v&agrave; những b&aacute;nh quy Oreo tạo n&ecirc;n sự kết hợp ho&agrave;n hảo cho chiếc b&aacute;nh ấn tượng n&agrave;y</p>\r\n', 1, 1, 20, 1),
(23, 'BÁNH KEM SUMMER', '1554261960ANHUPWEB-_636815844449969318_HasThumb.jpg', 200000, '<p>Lấy &yacute; tưởng từ vườn hoa m&ugrave;a xu&acirc;n tươi mới</p>\r\n', '<p>Lấy &yacute; tưởng từ vườn hoa m&ugrave;a xu&acirc;n tươi mới, . Vơi cốt b&aacute;nh socola 4 lớp, nh&acirc;n lớp mứt t&aacute;o mới lạ trang tr&iacute; mặt b&aacute;nh l&agrave; khu vườn hoa đặc biệt đang tỏa sắc hương như bữa tiệc hạnh ph&uacute;c cho bạn v&agrave; gia đ&igrave;nh.</p>\r\n', 1, 1, 30, 1),
(24, 'BÁNH KEM PUPPY', '1554262190ANHUPWEB-_636815844600077904_HasThumb.jpg', 180000, '<p>Nằm trong BTS b&aacute;nh kem tươi ngộ nghĩnh</p>\r\n', '<p>Nằm trong BTS b&aacute;nh kem tươi ngộ nghĩnh từ Fresh Garden, b&aacute;nh kem Puppy với cốt b&aacute;nh vanilla, với nh&acirc;n mứt việt quất b&aacute;nh được trang tr&iacute; h&igrave;nh ch&oacute; con ngộ nghĩnh, đ&aacute;ng y&ecirc;u d&agrave;nh cho những ai c&oacute; t&acirc;m hồn &ldquo;bay bổng&rdquo; với mẫu b&aacute;nh n&agrave;y</p>\r\n', 0, 1, 0, 1),
(32, 'BÁNH KEM MANGO', '1554264565ANHUPWEB-_636815844888954427_HasThumb.jpg', 160000, '<p>Với cốt b&aacute;nh vanilla 3 lớp đặc biệt</p>\r\n', '<p>Với cốt b&aacute;nh vanilla 3 lớp đặc biệt b&aacute;nh được phủ l&ecirc;n những lớp kem vanilla b&eacute;o ngậy tạo độ c&acirc;n bằng cho hương vị ngọt &ndash; b&eacute;o. Sau c&ugrave;ng phủ l&ecirc;n lớp mứt xo&agrave;i với hương vị chua đặc trưng v&agrave; những thanh socola tạo cho kh&aacute;ch h&agrave;ng sự tận hưởng kh&oacute; qu&ecirc;n</p>\r\n', 1, 0, 0, 1),
(33, 'BÁNH KEM SPRING FLOWER', '1554264619ANHUPWEB-_636834262732038280_HasThumb.jpg', 390000, '<p>Chiếc b&aacute;nh m&ugrave;a xu&acirc;n Spring Flower</p>\r\n', '<p>Chiếc b&aacute;nh m&ugrave;a xu&acirc;n Spring Flower bao gồm hỗn hợp mứt hoa quả gồm d&acirc;u t&acirc;y, ph&uacute;c bồn tử,việt quất, nho đen, một khu vườn hoa sắc m&agrave;u t&iacute;ch hợp trong một chiếc b&aacute;nh &yacute; nghĩa</p>\r\n', 1, 0, 0, 1),
(36, 'Trà sữa', '1570777680images.jpg', 25000, '<p>Fan sầu ri&ecirc;ng kh&ocirc;ng thể ng&oacute; lơ si&ecirc;u phẩm mới n&agrave;y nha TR&Agrave; SỮA SẦU RI&Ecirc;NG b&eacute;o ngậy thơm nức mũi, c&oacute; th&ecirc;m topping sầu ri&ecirc;ng tươi r&oacute;i nữa. Kh&ocirc;ng phải rượu ...</p>\r\n', '<p>Fan sầu ri&ecirc;ng kh&ocirc;ng thể ng&oacute; lơ si&ecirc;u phẩm mới n&agrave;y nha TR&Agrave; SỮA SẦU RI&Ecirc;NG b&eacute;o ngậy thơm nức mũi, c&oacute; th&ecirc;m topping sầu ri&ecirc;ng tươi r&oacute;i nữa. Kh&ocirc;ng phải rượu ...</p>\r\n', 0, 1, 12, 7),
(37, 'Trà sữa sầu riêng', '1570777654tải xuống.jpg', 500000, '<p>Fan sầu ri&ecirc;ng kh&ocirc;ng thể ng&oacute; lơ si&ecirc;u phẩm mới n&agrave;y nha TR&Agrave; SỮA SẦU RI&Ecirc;NG b&eacute;o ngậy thơm nức mũi, c&oacute; th&ecirc;m topping sầu ri&ecirc;ng tươi r&oacute;i nữa. Kh&ocirc;ng phải rượu ...</p>\r\n', '<p>Fan sầu ri&ecirc;ng kh&ocirc;ng thể ng&oacute; lơ si&ecirc;u phẩm mới n&agrave;y nha TR&Agrave; SỮA SẦU RI&Ecirc;NG b&eacute;o ngậy thơm nức mũi, c&oacute; th&ecirc;m topping sầu ri&ecirc;ng tươi r&oacute;i nữa. Kh&ocirc;ng phải rượu ...</p>\r\n', 1, 0, 0, 7),
(38, 'Trà sữa thập cẩm', '15707775182173ead51c93f5cdac82.jpg', 32000, '<p>Fan sầu ri&ecirc;ng kh&ocirc;ng thể ng&oacute; lơ si&ecirc;u phẩm mới n&agrave;y nha TR&Agrave; SỮA SẦU RI&Ecirc;NG b&eacute;o ngậy thơm nức mũi, c&oacute; th&ecirc;m topping sầu ri&ecirc;ng tươi r&oacute;i nữa. Kh&ocirc;ng phải rượu ...</p>\r\n', '<p>Fan sầu ri&ecirc;ng kh&ocirc;ng thể ng&oacute; lơ si&ecirc;u phẩm mới n&agrave;y nha TR&Agrave; SỮA SẦU RI&Ecirc;NG b&eacute;o ngậy thơm nức mũi, c&oacute; th&ecirc;m topping sầu ri&ecirc;ng tươi r&oacute;i nữa. Kh&ocirc;ng phải rượu ....</p>\r\n', 1, 0, 0, 7),
(39, 'Phở cuốn', '1570778117DDĐ.jpg', 30000, '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', 1, 0, 0, 5),
(43, 'Trà sữa kem chessee', '1570777721images.jpg', 60000, '<p>Fan sầu ri&ecirc;ng kh&ocirc;ng thể ng&oacute; lơ si&ecirc;u phẩm mới n&agrave;y nha TR&Agrave; SỮA SẦU RI&Ecirc;NG b&eacute;o ngậy thơm nức mũi, c&oacute; th&ecirc;m topping sầu ri&ecirc;ng tươi r&oacute;i nữa. Kh&ocirc;ng phải rượu ...</p>\r\n', '<p>Fan sầu ri&ecirc;ng kh&ocirc;ng thể ng&oacute; lơ si&ecirc;u phẩm mới n&agrave;y nha TR&Agrave; SỮA SẦU RI&Ecirc;NG b&eacute;o ngậy thơm nức mũi, c&oacute; th&ecirc;m topping sầu ri&ecirc;ng tươi r&oacute;i nữa. Kh&ocirc;ng phải rượu ...</p>\r\n', 0, 0, 0, 7),
(44, 'Trà đào', '1570777757The-Black-Tea_banner-web_770x480_20190527.webp', 30000, '<p>Fan sầu ri&ecirc;ng kh&ocirc;ng thể ng&oacute; lơ si&ecirc;u phẩm mới n&agrave;y nha TR&Agrave; SỮA SẦU RI&Ecirc;NG b&eacute;o ngậy thơm nức mũi, c&oacute; th&ecirc;m topping sầu ri&ecirc;ng tươi r&oacute;i nữa. Kh&ocirc;ng phải rượu ...</p>\r\n', '<p>Fan sầu ri&ecirc;ng kh&ocirc;ng thể ng&oacute; lơ si&ecirc;u phẩm mới n&agrave;y nha TR&Agrave; SỮA SẦU RI&Ecirc;NG b&eacute;o ngậy thơm nức mũi, c&oacute; th&ecirc;m topping sầu ri&ecirc;ng tươi r&oacute;i nữa. Kh&ocirc;ng phải rượu ...</p>\r\n', 0, 0, 0, 7),
(45, 'Kem mặn', '1570778152ĐÁ.jpg', 20000, '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', 0, 0, 0, 5),
(46, 'Chả cá viên', '1570778184sáS.jpg', 10000, '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', 0, 0, 0, 5),
(47, 'Trái cây muối', '1570778270Ss.jpg', 40000, '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', 0, 0, 0, 5),
(48, 'Cút lộn xào me', '1570778322images (2).jpg', 40000, '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', 0, 0, 0, 5),
(49, 'Báp xào tôm bơ', '1570778380sáS.jpg', 20000, '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', '<p>Những m&oacute;n ăn vặt ngon H&agrave; Nội lu&ocirc;n c&oacute; một sức hấp dẫn kh&ocirc;ng thể chối từ</p>\r\n', 0, 0, 0, 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide`
--

CREATE TABLE `slide` (
  `slide_id` int(11) NOT NULL,
  `slide_img` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide`
--

INSERT INTO `slide` (`slide_id`, `slide_img`) VALUES
(1, '1554313091winter_cake_main.jpg'),
(4, '157078084315707775182173ead51c93f5cdac82.jpg'),
(5, '1570780946mon-an-vat-ngon-ha-noi-1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slide_2`
--

CREATE TABLE `slide_2` (
  `slide_2_id` int(11) NOT NULL,
  `slide_2_img` varchar(500) NOT NULL,
  `slide_2_fk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `slide_2`
--

INSERT INTO `slide_2` (`slide_2_id`, `slide_2_img`, `slide_2_fk_id`) VALUES
(1, '1554347999022_fbc47439-6e72-4a8b-6d2c-bd963fcdcfbe.jpg', 1),
(2, '1554348009untitled-1.png', 1),
(3, '1554348016untitled-1.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(500) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `user_password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`) VALUES
(1, 'Hulk', 'admin@mail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Caption American', 'admin1@mail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'SpiderMan', 'admin2@mail.com', '202cb962ac59075b964b07152d234b70');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category_menu`
--
ALTER TABLE `category_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Chỉ mục cho bảng `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`category_product_id`);

--
-- Chỉ mục cho bảng `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Chỉ mục cho bảng `new`
--
ALTER TABLE `new`
  ADD PRIMARY KEY (`new_id`);

--
-- Chỉ mục cho bảng `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Chỉ mục cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_detail_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`slide_id`);

--
-- Chỉ mục cho bảng `slide_2`
--
ALTER TABLE `slide_2`
  ADD PRIMARY KEY (`slide_2_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category_menu`
--
ALTER TABLE `category_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `category_product`
--
ALTER TABLE `category_product`
  MODIFY `category_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `new`
--
ALTER TABLE `new`
  MODIFY `new_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `order_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT cho bảng `slide`
--
ALTER TABLE `slide`
  MODIFY `slide_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `slide_2`
--
ALTER TABLE `slide_2`
  MODIFY `slide_2_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
