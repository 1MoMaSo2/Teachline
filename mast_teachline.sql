-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20260809.2eeee7ccc2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 23, 2026 at 12:24 PM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mast_teachline`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_mast`
--

CREATE TABLE `admin_mast` (
  `id_admin_mast` int NOT NULL,
  `admin_username_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `admin_email_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `admin_password_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `admin_role_mast` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='مدیر';

--
-- Dumping data for table `admin_mast`
--

INSERT INTO `admin_mast` (`id_admin_mast`, `admin_username_mast`, `admin_email_mast`, `admin_password_mast`, `admin_role_mast`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$2TpKL2SX9q9.J4AKy77iBeMl571R9QEpCsfOV2l8DJZwhiA51BOS2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education_basic_mast`
--

CREATE TABLE `education_basic_mast` (
  `id_education_basic_mast` int NOT NULL,
  `admin_id_education_basic_mast` int DEFAULT NULL COMMENT 'آیدی ادمین اضافه کننده پایه تحصیلی',
  `education_basic_name_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT ' پایه تحصیلی'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='پایه تحصیلی';

--
-- Dumping data for table `education_basic_mast`
--

INSERT INTO `education_basic_mast` (`id_education_basic_mast`, `admin_id_education_basic_mast`, `education_basic_name_mast`) VALUES
(1, 1, 'دهم'),
(2, 1, 'یازدهم'),
(3, 1, 'دوازدهم'),
(4, 1, 'هر سه پایه');

-- --------------------------------------------------------

--
-- Table structure for table `field_study_mast`
--

CREATE TABLE `field_study_mast` (
  `id_field_study_mast` int NOT NULL,
  `admin_id_field_study_mast` int DEFAULT NULL COMMENT 'آیدی ادمین اضافه کننده رشته تحصیلی',
  `field_study_name_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام رشته تحصیلی'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='رشته های تحصیلی';

--
-- Dumping data for table `field_study_mast`
--

INSERT INTO `field_study_mast` (`id_field_study_mast`, `admin_id_field_study_mast`, `field_study_name_mast`) VALUES
(1, 1, 'کامپیوتر'),
(2, 1, 'برق'),
(3, 1, 'صنایع شیمیایی'),
(4, 1, 'مکانیک'),
(5, 1, 'تربیت بدنی'),
(6, 1, 'آبیاری گیاهان دریایی');

-- --------------------------------------------------------

--
-- Table structure for table `student_mast`
--

CREATE TABLE `student_mast` (
  `id_student_mast` int NOT NULL,
  `student_full_name_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام و نام خانوادگی هنرجو',
  `student_email_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `student_password_mast` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `student_phone_number_mast` varchar(30) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `student_education_basic_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'پایه تحصیلی هنرجو',
  `student_field_study_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'رشته تحصیلی هنرجو',
  `student_date_created_account_mast` varchar(50) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تاریخ ایجاد حساب هنرجو',
  `student_active_code_mast` int DEFAULT NULL COMMENT 'کد فعالسازی هنرجو',
  `student_status_mast` int DEFAULT '0' COMMENT '0 = غیر فعال\r\n1 = فعال',
  `student_role_mast` int NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='هنرجو';

--
-- Dumping data for table `student_mast`
--

INSERT INTO `student_mast` (`id_student_mast`, `student_full_name_mast`, `student_email_mast`, `student_password_mast`, `student_phone_number_mast`, `student_education_basic_mast`, `student_field_study_mast`, `student_date_created_account_mast`, `student_active_code_mast`, `student_status_mast`, `student_role_mast`) VALUES
(1, 'محمد', 'momasovi2006@gmail.com', '$2y$10$2WDtt8iNohetjeMfCapZuux6CLz8qbaeqis3qIURxMxXDRvk3TEA2', '09151234567', 'دهم', 'آبیاری گیاهان دریایی', '1790004956', 467693, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_mast`
--

CREATE TABLE `teacher_mast` (
  `id_teacher_mast` int NOT NULL,
  `teacher_full_name_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام و نام خانوادگی  معلم',
  `teacher_email_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `teacher_password_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `teacher_phone_number_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL,
  `teacher_gender_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'جنسیت معلم',
  `teacher_degree_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'مدرک تحصیلی معلم',
  `teacher_field_study_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'رسته تحصیلی معلم',
  `teacher_teaching_history_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'سابقه تدریس معلم',
  `teacher_status_mast` int DEFAULT '0' COMMENT '0 = غیر فعال1 = فعال',
  `teacher_date_created_account_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تاریخ ایجاد حساب معلم',
  `teacher_role_mast` int NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='معلم';

--
-- Dumping data for table `teacher_mast`
--

INSERT INTO `teacher_mast` (`id_teacher_mast`, `teacher_full_name_mast`, `teacher_email_mast`, `teacher_password_mast`, `teacher_phone_number_mast`, `teacher_gender_mast`, `teacher_degree_mast`, `teacher_field_study_mast`, `teacher_teaching_history_mast`, `teacher_status_mast`, `teacher_date_created_account_mast`, `teacher_role_mast`) VALUES
(1, 'محمدمهدی سویزی', 'mohammadmahdisoveyzi@gmail.com', '$2y$10$ucyo0.jwXeer.XTxNTP/F..kTS/DIuWBewZ7iupUjnItKniJDeIme', '09150519572', 'مرد', 'دیپلم کامپیوتر', 'کامپیوتر', '0', 1, '1790005319', 2);

-- --------------------------------------------------------

--
-- Table structure for table `training_courses_mast`
--

CREATE TABLE `training_courses_mast` (
  `id_training_courses_mast` int NOT NULL,
  `teacher_id_training_courses_mast` int DEFAULT NULL COMMENT 'آیدی دبیر اضافه کننده دوره آموزشی',
  `training_courses_name_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام دوره آمورشی',
  `training_courses_teacher_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام دبیر دوره',
  `training_courses_description_mast` longtext COLLATE utf8mb4_persian_ci COMMENT 'توضیحات دوره آمورشی',
  `training_courses_tag_mast` text COLLATE utf8mb4_persian_ci COMMENT 'برچسب های دوره آموزشی',
  `training_courses_education_basic_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'پایه تحصیلی مربوط به دوره',
  `training_courses_field_study_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'رشته تحصیلی مربوط به دوره',
  `training_courses_type_book_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نوع کتاب مربوط به دوره',
  `training_courses_name_book_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نام کتاب مربوط به دوره',
  `training_courses_lesson_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'درس یا پودمان مربوط به دوره',
  `training_courses_status_mast` int DEFAULT '0' COMMENT '0 = غیرفعال\r\n1 = فعال',
  `training_courses_date_created_course_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تاریخ ایجاد دوره آموزشی',
  `training_courses_date_update_course_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'تاریخ به روزرسانی دوره آموزشی'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='دوره های آموزشی';

--
-- Dumping data for table `training_courses_mast`
--

INSERT INTO `training_courses_mast` (`id_training_courses_mast`, `teacher_id_training_courses_mast`, `training_courses_name_mast`, `training_courses_teacher_mast`, `training_courses_description_mast`, `training_courses_tag_mast`, `training_courses_education_basic_mast`, `training_courses_field_study_mast`, `training_courses_type_book_mast`, `training_courses_name_book_mast`, `training_courses_lesson_mast`, `training_courses_status_mast`, `training_courses_date_created_course_mast`, `training_courses_date_update_course_mast`) VALUES
(1, 1, 'دوره برنامه نویسی', 'محمدمهدی سویزی', '<h2 style=\"text-align: center;\"><span style=\"color: #236fa1; font-family: helvetica, arial, sans-serif;\">دوره <span style=\"color: #e03e2d;\">برنامه نویسی </span>برای عاشقان <span style=\"color: #169179;\">کامپیوتر</span></span></h2>\r\n<h2 style=\"text-align: center;\"><span style=\"color: #f1c40f; font-family: helvetica, arial, sans-serif;\">I loved Programming&nbsp;</span></h2>\r\n<h2 style=\"text-align: center;\"><span style=\"color: #843fa1; font-family: helvetica, arial, sans-serif;\">I loved Computer&nbsp;</span></h2>', 'برنامه نویسی , کامپیوتر , Programming , Computer', 'هر سه پایه', 'کامپیوتر', 'تخصصی', 'دوره ای', 'سر فصلی', 1, '1790006374', '1790006448');

-- --------------------------------------------------------

--
-- Table structure for table `training_course_meetings_mast`
--

CREATE TABLE `training_course_meetings_mast` (
  `id_training_course_meetings_mast` int NOT NULL,
  `teacher_id_training_courses_meetings_mast` int DEFAULT NULL COMMENT 'آیدی دبیر اضافه کننده جلسه آموزشی',
  `course_id_training_course_meetings_mast` int NOT NULL,
  `training_course_meetings_title_mast` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `training_course_meetings_link_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_book_mast`
--

CREATE TABLE `type_book_mast` (
  `id_type_book_mast` int NOT NULL,
  `admin_id_type_book_mast` int DEFAULT NULL COMMENT 'آیدی ادمین اضافه کننده نوع کتاب',
  `type_book_mast` varchar(255) COLLATE utf8mb4_persian_ci DEFAULT NULL COMMENT 'نوع کتاب'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `type_book_mast`
--

INSERT INTO `type_book_mast` (`id_type_book_mast`, `admin_id_type_book_mast`, `type_book_mast`) VALUES
(1, 1, 'عمومی'),
(2, 1, 'تخصصی');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_mast`
--
ALTER TABLE `admin_mast`
  ADD PRIMARY KEY (`id_admin_mast`);

--
-- Indexes for table `education_basic_mast`
--
ALTER TABLE `education_basic_mast`
  ADD PRIMARY KEY (`id_education_basic_mast`),
  ADD KEY `admin_id_education_basic` (`admin_id_education_basic_mast`);

--
-- Indexes for table `field_study_mast`
--
ALTER TABLE `field_study_mast`
  ADD PRIMARY KEY (`id_field_study_mast`),
  ADD KEY `admin_id_field_study` (`admin_id_field_study_mast`);

--
-- Indexes for table `student_mast`
--
ALTER TABLE `student_mast`
  ADD PRIMARY KEY (`id_student_mast`),
  ADD UNIQUE KEY `student_email_mast` (`student_email_mast`),
  ADD UNIQUE KEY `student_phone_number_mast` (`student_phone_number_mast`),
  ADD UNIQUE KEY `student_email_mast_2` (`student_email_mast`);

--
-- Indexes for table `teacher_mast`
--
ALTER TABLE `teacher_mast`
  ADD PRIMARY KEY (`id_teacher_mast`);

--
-- Indexes for table `training_courses_mast`
--
ALTER TABLE `training_courses_mast`
  ADD PRIMARY KEY (`id_training_courses_mast`),
  ADD KEY `teacher_id_training_courses` (`teacher_id_training_courses_mast`);

--
-- Indexes for table `training_course_meetings_mast`
--
ALTER TABLE `training_course_meetings_mast`
  ADD PRIMARY KEY (`id_training_course_meetings_mast`),
  ADD KEY `teacher_id_training_courses_meetings_mast` (`teacher_id_training_courses_meetings_mast`),
  ADD KEY `fk_course_meetings_course` (`course_id_training_course_meetings_mast`);

--
-- Indexes for table `type_book_mast`
--
ALTER TABLE `type_book_mast`
  ADD PRIMARY KEY (`id_type_book_mast`),
  ADD KEY `admin_id_type_book` (`admin_id_type_book_mast`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_mast`
--
ALTER TABLE `admin_mast`
  MODIFY `id_admin_mast` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education_basic_mast`
--
ALTER TABLE `education_basic_mast`
  MODIFY `id_education_basic_mast` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `field_study_mast`
--
ALTER TABLE `field_study_mast`
  MODIFY `id_field_study_mast` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_mast`
--
ALTER TABLE `student_mast`
  MODIFY `id_student_mast` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_mast`
--
ALTER TABLE `teacher_mast`
  MODIFY `id_teacher_mast` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_courses_mast`
--
ALTER TABLE `training_courses_mast`
  MODIFY `id_training_courses_mast` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `training_course_meetings_mast`
--
ALTER TABLE `training_course_meetings_mast`
  MODIFY `id_training_course_meetings_mast` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `type_book_mast`
--
ALTER TABLE `type_book_mast`
  MODIFY `id_type_book_mast` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education_basic_mast`
--
ALTER TABLE `education_basic_mast`
  ADD CONSTRAINT `admin_id_education_basic` FOREIGN KEY (`admin_id_education_basic_mast`) REFERENCES `admin_mast` (`id_admin_mast`);

--
-- Constraints for table `field_study_mast`
--
ALTER TABLE `field_study_mast`
  ADD CONSTRAINT `admin_id_field_study` FOREIGN KEY (`admin_id_field_study_mast`) REFERENCES `admin_mast` (`id_admin_mast`);

--
-- Constraints for table `training_courses_mast`
--
ALTER TABLE `training_courses_mast`
  ADD CONSTRAINT `teacher_id_training_courses` FOREIGN KEY (`teacher_id_training_courses_mast`) REFERENCES `teacher_mast` (`id_teacher_mast`);

--
-- Constraints for table `training_course_meetings_mast`
--
ALTER TABLE `training_course_meetings_mast`
  ADD CONSTRAINT `fk_course_meetings_course` FOREIGN KEY (`course_id_training_course_meetings_mast`) REFERENCES `training_courses_mast` (`id_training_courses_mast`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_id_training_courses_meetings_mast` FOREIGN KEY (`teacher_id_training_courses_meetings_mast`) REFERENCES `teacher_mast` (`id_teacher_mast`);

--
-- Constraints for table `type_book_mast`
--
ALTER TABLE `type_book_mast`
  ADD CONSTRAINT `admin_id_type_book` FOREIGN KEY (`admin_id_type_book_mast`) REFERENCES `admin_mast` (`id_admin_mast`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
