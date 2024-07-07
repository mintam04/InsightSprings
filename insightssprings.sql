-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th7 07, 2024 lúc 11:06 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `insightssprings`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `code` varchar(20) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `class` int NOT NULL,
  `address` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `sex_student` varchar(255) NOT NULL,
  `des_student` varchar(255) NOT NULL,
  `add_information` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fee` int NOT NULL,
  `sessions_week` int NOT NULL,
  `time_learn` varchar(255) NOT NULL,
  `status` enum('open','close') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'open',
  `request` varchar(255) NOT NULL,
  `created_att` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_att` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `teacher_id` int DEFAULT NULL,
  `parents_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `courses`
--

INSERT INTO `courses` (`id`, `code`, `subject`, `class`, `address`, `district`, `sex_student`, `des_student`, `add_information`, `fee`, `sessions_week`, `time_learn`, `status`, `request`, `created_att`, `updated_att`, `teacher_id`, `parents_id`) VALUES
(1, 'CS101', 'Toán', 10, '24 Hai Bà Trưng', 'Hoàn Kiếm', 'Nam', 'Học sinh giỏi Toán', 'um', 1000000, 2, 'Buổi tối thứ 2,3,5,7,CN.', 'open', 'Giáo viên', '2024-06-30 17:00:00', '2024-07-02 05:36:04', 11, 1),
(2, 'CS102', 'Văn', 11, '456 Đường DEF', 'Ba Đình', 'Nữ', 'Học sinh yêu thích Văn', 'Thông tin khác về học sinh', 1200000, 4, 'Buổi sáng thứ 2,3,5,7,CN.', 'open', 'Sinh viên', '2024-06-30 17:00:00', '2024-07-02 04:16:40', NULL, 2),
(3, 'CS103', 'Lý', 12, '789 Đường GHI', 'Cầu Giấy', 'Nam', 'Học sinh đam mê Vật Lý', 'Thông tin thêm về học sinh này', 1500000, 2, 'Buổi tối thứ 3,5,7.', 'close', 'Sinh viên ', '2024-06-30 17:00:00', '2024-07-02 04:17:00', 10, 1),
(4, 'CS104', 'Hóa', 10, '101 Đường JKL', 'Đống Đa', 'Nữ', 'Học sinh thích Hóa học', 'Chi tiết bổ sung về học sinh', 1300000, 2, 'Buổi chiều thứ 2,4,6.', 'open', 'Giáo viên', '2024-06-30 17:00:00', '2024-07-02 04:17:29', NULL, 3),
(5, 'CS105', 'Anh', 11, '202 Đường MNO', 'Tây Hồ', 'Nam', 'Học sinh giỏi Tiếng Anh', 'Thông tin thêm về học sinh khác', 1400000, 2, 'Buổi tối thứ 2,3,5,CN.', 'open', 'Giáo viên', '2024-06-30 17:00:00', '2024-07-02 04:17:36', NULL, 1),
(26, 'D5362', 'Toán học', 4, 'số 44 phường Trần Phú', 'Quận Hoàng Mai', 'Nữ', 'ok', '', 1200000, 2, 'buoi sang thu 2345', '', 'Giáo viên', '2024-07-04 03:19:23', '2024-07-04 03:19:23', NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `course_teacher`
--

CREATE TABLE `course_teacher` (
  `id` int NOT NULL,
  `course_id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `status_ct` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `course_teacher`
--

INSERT INTO `course_teacher` (`id`, `course_id`, `teacher_id`, `course_code`, `status_ct`, `created_at`, `updated_at`) VALUES
(12, 1, 11, 'CS101', 0, '2024-07-03 02:21:00', '2024-07-03 02:21:00'),
(13, 2, 11, 'CS102', 0, '2024-07-05 02:46:00', '2024-07-05 02:46:00'),
(14, 3, 11, 'CS103', 0, '2024-07-05 02:46:11', '2024-07-05 02:46:11'),
(15, 3, 10, 'CS103', 1, '2024-07-05 02:47:07', '2024-07-05 03:29:03'),
(16, 1, 10, 'CS101', 0, '2024-07-05 02:47:15', '2024-07-05 02:47:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `handle_situations`
--

CREATE TABLE `handle_situations` (
  `id` int NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `handle_situations`
--

INSERT INTO `handle_situations` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Xử lý tình huống', '2024-07-05 06:22:15', '2024-07-05 06:22:15');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hand_teacher`
--

CREATE TABLE `hand_teacher` (
  `id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `handle_id` int NOT NULL,
  `agreed_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `hand_teacher`
--

INSERT INTO `hand_teacher` (`id`, `teacher_id`, `handle_id`, `agreed_at`) VALUES
(1, 11, 1, '2024-07-05 06:35:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `parents`
--

CREATE TABLE `parents` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `sex_parents` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `take_note` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `parents`
--

INSERT INTO `parents` (`id`, `name`, `sex_parents`, `phone`, `address`, `take_note`) VALUES
(1, 'm', '', '09837', 'cds', 'dc'),
(2, 'Nguyễn Minh Tâm', 'Chị', '0983264473', 'số 44 ngõ 36 đường Khuyến Lương', NULL),
(3, 'Acer', 'Chị', '09123456', 'ha noi', 'đ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teachers`
--

CREATE TABLE `teachers` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `profile_picture` varchar(255) DEFAULT NULL,
  `sex` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `school` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `year_of_birth` int DEFAULT NULL,
  `major` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `money` int DEFAULT NULL,
  `verify_education` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img_graduation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `teachers`
--

INSERT INTO `teachers` (`id`, `user_id`, `profile_picture`, `sex`, `phone_number`, `school`, `year_of_birth`, `major`, `money`, `verify_education`, `img_graduation`, `created_at`, `updated_at`) VALUES
(6, 2, 'profile_pic_url_teacher1', '', '123456789', '123 Teacher Street, City', 0, '', 0, '', '', '2024-06-29 06:33:40', '2024-06-29 06:33:40'),
(7, 3, 'profile_pic_url_teacher2', '', '987654321', '456 Teacher Avenue, Town', 0, '', 0, '', '', '2024-06-29 06:33:40', '2024-06-29 06:33:40'),
(8, 4, NULL, '', NULL, NULL, 0, '', 0, '', '', '2024-06-29 06:33:40', '2024-06-29 06:33:40'),
(9, 5, NULL, '', NULL, NULL, 0, '', 0, '', '', '2024-06-29 06:33:40', '2024-06-29 06:33:40'),
(10, 8, 'C:\\laragon\\www\\duAnCaNhan\\app\\controllers/../../public/img/2.jpg', 'Nữ', '098753547', 'Đại học Hà Nội', 2002, 'Ngôn ngữ Anh', 0, 'Xác minh bằng cách upload ảnh', 'C:\\laragon\\www\\duAnCaNhan\\app\\controllers/../../public/img/3.jpg', '2024-06-30 03:45:07', '2024-07-01 05:24:00'),
(11, 6, 'C:\\laragon\\www\\duAnCaNhan\\app\\controllers/../../public/img/2.jpg', 'Nữ', '0983264473', 'FPT POLY', 2004, 'Lập trình WEB', NULL, 'Xác minh bằng cách upload ảnh', 'C:\\laragon\\www\\duAnCaNhan\\app\\controllers/../../public/img/3.jpg', '2024-07-01 03:22:52', '2024-07-01 06:30:01'),
(12, 9, 'C:\\laragon\\www\\duAnCaNhan\\app\\controllers/../../public/img/1.jpg', 'Nữ', '09123456', 'm', 2004, 'm', NULL, 'Xác minh bằng cách upload ảnh', 'C:\\laragon\\www\\duAnCaNhan\\app\\controllers/../../public/img/3.jpg', '2024-07-01 05:49:48', '2024-07-01 07:09:23'),
(13, 10, '', 'Nữ', 'nc', 'cn', 2004, 'cd', NULL, 'Xác minh bằng cách upload ảnh', 'C:\\laragon\\www\\duAnCaNhan\\app\\controllers/../../public/img/3.jpg', '2024-07-01 06:31:02', '2024-07-01 06:32:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `teacher_terms`
--

CREATE TABLE `teacher_terms` (
  `id` int NOT NULL,
  `teacher_id` int NOT NULL,
  `term_id` int NOT NULL,
  `agreed_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `teacher_terms`
--

INSERT INTO `teacher_terms` (`id`, `teacher_id`, `term_id`, `agreed_at`) VALUES
(1, 8, 1, '2024-06-29 06:44:42'),
(2, 8, 2, '2024-06-29 06:44:42'),
(3, 10, 1, '2024-07-05 05:20:14'),
(4, 10, 2, '2024-07-05 05:20:14'),
(5, 10, 3, '2024-07-05 05:20:14'),
(6, 10, 4, '2024-07-05 05:20:14'),
(7, 11, 1, '2024-07-05 05:54:17'),
(8, 11, 2, '2024-07-05 05:54:17'),
(9, 11, 3, '2024-07-05 05:54:17'),
(10, 11, 4, '2024-07-05 05:54:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `terms`
--

CREATE TABLE `terms` (
  `id` int NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `terms`
--

INSERT INTO `terms` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Hợp đồng gia sư', '2024-06-29 06:43:53', '2024-06-29 06:43:53'),
(2, 'Chính sách học thử', '2024-06-29 06:43:53', '2024-06-29 06:43:53'),
(3, 'Tuân thủ các chuẩn mực', '2024-06-29 06:44:12', '2024-06-29 06:44:12'),
(4, 'Hiểu rõ trách nhiệm', '2024-06-29 06:44:12', '2024-06-29 06:44:12');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', 'admin@example.com', 'mintam04', 1, '2024-06-29 06:32:44', '2024-07-03 03:32:58'),
(2, 'Teacher One', 'teacher1@example.com', 'hashed_password_teacher1', 0, '2024-06-29 06:32:44', '2024-06-29 06:32:44'),
(3, 'Teacher Two', 'teacher2@example.com', 'hashed_password_teacher2', 0, '2024-06-29 06:32:44', '2024-06-29 06:32:44'),
(4, 'Student One', 'student1@example.com', 'hashed_password_student1', 0, '2024-06-29 06:32:44', '2024-06-29 06:32:44'),
(5, 'Student Two', 'student2@example.com', 'hashed_password_student2', 0, '2024-06-29 06:32:44', '2024-06-29 06:32:44'),
(6, 'Nguyễn Minh Tâm', 'tamnmph35915@fpt.edu.vn', 'mintam2004', 0, '2024-06-30 03:41:48', '2024-06-30 03:41:48'),
(8, 'Trần Ngọc Linh', 'lingnl@gmail.com', 'meomeo0308', 0, '2024-06-30 03:45:07', '2024-06-30 03:45:07'),
(9, 'Nguyễn Thị Phương', 'phuongnt@gmail.com', 'phuongngu', 0, '2024-07-01 05:49:48', '2024-07-01 05:49:48'),
(10, 'test', 'test@gmail.com', 'meomeo0308', 0, '2024-07-01 06:31:02', '2024-07-01 06:31:02');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `courses_ibfk_2` (`parents_id`);

--
-- Chỉ mục cho bảng `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_course_teacher` (`course_id`,`teacher_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Chỉ mục cho bảng `handle_situations`
--
ALTER TABLE `handle_situations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hand_teacher`
--
ALTER TABLE `hand_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_pro` (`teacher_id`),
  ADD KEY `lk_phanmem` (`handle_id`);

--
-- Chỉ mục cho bảng `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `teacher_terms`
--
ALTER TABLE `teacher_terms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `term_id` (`term_id`);

--
-- Chỉ mục cho bảng `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `course_teacher`
--
ALTER TABLE `course_teacher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `handle_situations`
--
ALTER TABLE `handle_situations`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hand_teacher`
--
ALTER TABLE `hand_teacher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `teacher_terms`
--
ALTER TABLE `teacher_terms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `courses_ibfk_2` FOREIGN KEY (`parents_id`) REFERENCES `parents` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD CONSTRAINT `course_teacher_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_teacher_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `hand_teacher`
--
ALTER TABLE `hand_teacher`
  ADD CONSTRAINT `lk_phanmem` FOREIGN KEY (`handle_id`) REFERENCES `handle_situations` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lk_pro` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Các ràng buộc cho bảng `teachers`
--
ALTER TABLE `teachers`
  ADD CONSTRAINT `teachers_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `teacher_terms`
--
ALTER TABLE `teacher_terms`
  ADD CONSTRAINT `teacher_terms_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`),
  ADD CONSTRAINT `teacher_terms_ibfk_2` FOREIGN KEY (`term_id`) REFERENCES `terms` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
