-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2025 at 09:32 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `id_admin_mast` int(11) NOT NULL,
  `admin_username_mast` varchar(255) DEFAULT NULL,
  `admin_email_mast` varchar(255) DEFAULT NULL,
  `admin_password_mast` varchar(255) DEFAULT NULL,
  `admin_role_mast` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='مدیر';

--
-- Dumping data for table `admin_mast`
--

INSERT INTO `admin_mast` (`id_admin_mast`, `admin_username_mast`, `admin_email_mast`, `admin_password_mast`, `admin_role_mast`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `education_basic_mast`
--

CREATE TABLE `education_basic_mast` (
  `id_education_basic_mast` int(11) NOT NULL,
  `admin_id_education_basic_mast` int(11) DEFAULT NULL COMMENT 'آیدی ادمین اضافه کننده پایه تحصیلی',
  `education_basic_name_mast` varchar(255) DEFAULT NULL COMMENT ' پایه تحصیلی'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='پایه تحصیلی';

--
-- Dumping data for table `education_basic_mast`
--

INSERT INTO `education_basic_mast` (`id_education_basic_mast`, `admin_id_education_basic_mast`, `education_basic_name_mast`) VALUES
(1, NULL, 'دهم'),
(2, NULL, 'یازدهم'),
(3, NULL, 'دوازدهم');

-- --------------------------------------------------------

--
-- Table structure for table `field_study_mast`
--

CREATE TABLE `field_study_mast` (
  `id_field_study_mast` int(11) NOT NULL,
  `admin_id_field_study_mast` int(11) DEFAULT NULL COMMENT 'آیدی ادمین اضافه کننده رشته تحصیلی',
  `field_study_name_mast` varchar(255) DEFAULT NULL COMMENT 'نام رشته تحصیلی'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='رشته های تحصیلی';

--
-- Dumping data for table `field_study_mast`
--

INSERT INTO `field_study_mast` (`id_field_study_mast`, `admin_id_field_study_mast`, `field_study_name_mast`) VALUES
(1, NULL, 'کامپیوتر'),
(2, NULL, 'برق'),
(3, NULL, 'شیمی'),
(4, NULL, 'صنایع فلز'),
(5, NULL, 'مکانیک'),
(6, NULL, 'آبیاری گیاهان دریایی');

-- --------------------------------------------------------

--
-- Table structure for table `student_mast`
--

CREATE TABLE `student_mast` (
  `id_student_mast` int(11) NOT NULL,
  `student_full_name_mast` varchar(255) DEFAULT NULL COMMENT 'نام و نام خانوادگی هنرجو',
  `student_email_mast` varchar(255) DEFAULT NULL,
  `student_password_mast` varchar(255) DEFAULT NULL,
  `student_phone_number_mast` varchar(30) DEFAULT NULL,
  `student_education_basic_mast` varchar(255) DEFAULT NULL COMMENT 'پایه تحصیلی هنرجو',
  `student_field_study_mast` varchar(255) DEFAULT NULL COMMENT 'رشته تحصیلی هنرجو',
  `student_date_created_account_mast` varchar(50) DEFAULT NULL COMMENT 'تاریخ ایجاد حساب هنرجو',
  `student_active_code_mast` int(11) DEFAULT NULL COMMENT 'کد فعالسازی هنرجو',
  `student_status_mast` int(11) DEFAULT 0 COMMENT '0 = غیر فعال\r\n1 = فعال',
  `student_role_mast` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='هنرجو';

-- --------------------------------------------------------

--
-- Table structure for table `teacher_mast`
--

CREATE TABLE `teacher_mast` (
  `id_teacher_mast` int(11) NOT NULL,
  `teacher_full_name_mast` varchar(255) DEFAULT NULL COMMENT 'نام و نام خانوادگی  معلم',
  `teacher_email_mast` varchar(255) DEFAULT NULL,
  `teacher_password_mast` varchar(255) DEFAULT NULL,
  `teacher_phone_number_mast` varchar(255) DEFAULT NULL,
  `teacher_gender_mast` varchar(255) DEFAULT NULL COMMENT 'جنسیت معلم',
  `teacher_degree_mast` varchar(255) DEFAULT NULL COMMENT 'مدرک تحصیلی معلم',
  `teacher_field_study_mast` varchar(255) DEFAULT NULL COMMENT 'رسته تحصیلی معلم',
  `teacher_teaching_history_mast` varchar(255) DEFAULT NULL COMMENT 'سابقه تدریس معلم',
  `teacher_status_mast` int(11) DEFAULT 0 COMMENT '0 = غیر فعال1 = فعال',
  `teacher_date_created_account_mast` varchar(255) DEFAULT NULL COMMENT 'تاریخ ایجاد حساب معلم',
  `teacher_role_mast` int(11) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='معلم';

--
-- Dumping data for table `teacher_mast`
--

INSERT INTO `teacher_mast` (`id_teacher_mast`, `teacher_full_name_mast`, `teacher_email_mast`, `teacher_password_mast`, `teacher_phone_number_mast`, `teacher_gender_mast`, `teacher_degree_mast`, `teacher_field_study_mast`, `teacher_teaching_history_mast`, `teacher_status_mast`, `teacher_date_created_account_mast`, `teacher_role_mast`) VALUES
(1, 'امیرحسین توکلیان', 'amir@gmail.com', '12345678', '09155125252', 'آقا', 'دیپلم', 'کامپیوتر', '1', 1, '1746257286', 2),
(2, 'محمدمهدی سویزی', 'moma@gmail.com', '123456789', '09154587878', 'آقا', 'دکتری', 'کامپیوتر', '12', 1, '1746863965', 2);

-- --------------------------------------------------------

--
-- Table structure for table `training_courses_mast`
--

CREATE TABLE `training_courses_mast` (
  `id_training_courses_mast` int(11) NOT NULL,
  `teacher_id_training_courses_mast` int(11) DEFAULT NULL COMMENT 'آیدی دبیر اضافه کننده دوره آموزشی',
  `training_courses_name_mast` varchar(255) DEFAULT NULL COMMENT 'نام دوره آمورشی',
  `training_courses_teacher_mast` varchar(255) DEFAULT NULL COMMENT 'نام دبیر دوره',
  `training_courses_description_mast` longtext DEFAULT NULL COMMENT 'توضیحات دوره آمورشی',
  `training_courses_tag_mast` text DEFAULT NULL COMMENT 'برچسب های دوره آموزشی',
  `training_courses_education_basic_mast` varchar(255) DEFAULT NULL COMMENT 'پایه تحصیلی مربوط به دوره',
  `training_courses_field_study_mast` varchar(255) DEFAULT NULL COMMENT 'رشته تحصیلی مربوط به دوره',
  `training_courses_type_book_mast` varchar(255) DEFAULT NULL COMMENT 'نوع کتاب مربوط به دوره',
  `training_courses_name_book_mast` varchar(255) DEFAULT NULL COMMENT 'نام کتاب مربوط به دوره',
  `training_courses_lesson_mast` varchar(255) DEFAULT NULL COMMENT 'درس یا پودمان مربوط به دوره',
  `training_courses_status_mast` int(11) DEFAULT 0 COMMENT '0 = غیرفعال\r\n1 = فعال',
  `training_courses_date_created_course_mast` varchar(255) DEFAULT NULL COMMENT 'تاریخ ایجاد دوره آموزشی',
  `training_courses_date_update_course_mast` varchar(255) DEFAULT NULL COMMENT 'تاریخ به روزرسانی دوره آموزشی'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci COMMENT='دوره های آموزشی';

--
-- Dumping data for table `training_courses_mast`
--

INSERT INTO `training_courses_mast` (`id_training_courses_mast`, `teacher_id_training_courses_mast`, `training_courses_name_mast`, `training_courses_teacher_mast`, `training_courses_description_mast`, `training_courses_tag_mast`, `training_courses_education_basic_mast`, `training_courses_field_study_mast`, `training_courses_type_book_mast`, `training_courses_name_book_mast`, `training_courses_lesson_mast`, `training_courses_status_mast`, `training_courses_date_created_course_mast`, `training_courses_date_update_course_mast`) VALUES
(1, NULL, 'آموزش مشتق ', 'امیرحسین توکلیان', '<h3 id=\"%d8%af%db%8c%da%af%d8%b1-%d8%aa%d9%88%d8%a7%d8%a8%d8%b9-4\" style=\"text-align: center;\">دیگر توابع</h3>\r\n<p style=\"text-align: center;\">فرض کنید در جلسه امتحان حضور دارید و می&zwnj;خواهید مشتق تابع&nbsp;<span id=\"MathJax-Element-9-Frame\" class=\"mjx-chtml MathJax_CHTML\" style=\"text-align: center; position: relative;\" tabindex=\"0\" role=\"presentation\" data-mathml=\"&lt;math xmlns=\">f(x)=xtan(x) f(x)=xtan(x)\"&gt;<span id=\"MJXc-Node-232\" class=\"mjx-mrow\"><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.467em; padding-bottom: 0.467em; padding-right: 0.06em;\">f</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">(</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.313em;\">x</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">)</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.106em; padding-bottom: 0.313em;\">=</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.313em;\">x</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.416em; padding-bottom: 0.313em;\">t</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.313em;\">a</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.313em;\">n</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">(</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.313em;\">x</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">)</span></span></span></p>\r\n<p style=\"text-align: center;\"><span class=\"katex-html\" aria-hidden=\"true\"><span class=\"base\"><span class=\"mord mathnormal\" style=\"margin-right: 0.10764em;\">f</span><span class=\"mopen\">(</span><span class=\"mord mathnormal\">x</span><span class=\"mclose\">)</span><span class=\"mrel\">=</span></span><span class=\"base\"><span class=\"mord mathnormal\">x</span><span class=\"mord mathnormal\">t</span><span class=\"mord mathnormal\">an</span><span class=\"mopen\">(</span><span class=\"mord mathnormal\">x</span><span class=\"mclose\">)</span></span></span> <span style=\"color: #e67e23;\">را محاسبه کنید. در ابتدا به نظر می&zwnj;رسد بایستی برای قبول شدن در این درس تا سال بعد صبر کنید! اما واقعیت این است که مشتق توابع مختلف را می&zwnj;توان با استفاده از قوانین حاکم بر آن&zwnj;ها پیدا کرد و همواره نیاز نیست تا از طریق معادله * عمل کرد. در جدول زیر حاصل مشتقِ معروف&zwnj;ترین توابع موجود در ریاضیات بیان شده است</span>.</p>\r\n<h3 id=\"%d9%82%d9%88%d8%a7%d9%86%db%8c%d9%86-%d9%85%d8%b4%d8%aa%d9%82%da%af%db%8c%d8%b1%db%8c-5\" style=\"text-align: center;\">قوانین مشتق&zwnj;گیری</h3>\r\n<p style=\"text-align: center;\">با استفاده از مشتقات توابع معرفی شده در بالا می&zwnj;توان مشتق هر نوع تابعی را بدست آورد. البته بایستی قوانین حاکم بر مشتق را دانست. برای مثال مشتق تابع&nbsp;<span id=\"MathJax-Element-10-Frame\" class=\"mjx-chtml MathJax_CHTML\" style=\"text-align: center; position: relative;\" tabindex=\"0\" role=\"presentation\" data-mathml=\"&lt;math xmlns=\">y=f(x)+g(x) y=f(x)+g(x)\"&gt;<span id=\"MJXc-Node-248\" class=\"mjx-mrow\"><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.467em; padding-right: 0.006em;\">y</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.106em; padding-bottom: 0.313em;\">=</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.467em; padding-bottom: 0.467em; padding-right: 0.06em;\">f</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">(</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.313em;\">x</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">)</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.313em; padding-bottom: 0.416em;\">+</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.467em; padding-right: 0.003em;\">g</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">(</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.313em;\">x</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">)</span></span></span></p>\r\n<p style=\"text-align: center;\"><span class=\"katex-html\" aria-hidden=\"true\"><span class=\"base\"><span class=\"mord mathnormal\" style=\"margin-right: 0.03588em;\">y</span><span class=\"mrel\">=</span></span><span class=\"base\"><span class=\"mord mathnormal\" style=\"margin-right: 0.10764em;\">f</span><span class=\"mopen\">(</span><span class=\"mord mathnormal\">x</span><span class=\"mclose\">)</span><span class=\"mbin\">+</span></span><span class=\"base\"><span class=\"mord mathnormal\" style=\"margin-right: 0.03588em;\">g</span><span class=\"mopen\">(</span><span class=\"mord mathnormal\">x</span><span class=\"mclose\">)</span></span></span>&nbsp;با مشتق&nbsp;<span id=\"MathJax-Element-11-Frame\" class=\"mjx-chtml MathJax_CHTML\" style=\"text-align: center; position: relative;\" tabindex=\"0\" role=\"presentation\" data-mathml=\"&lt;math xmlns=\">y=g(x)+y(x) y=g(x)+y(x)\"&gt;<span id=\"MJXc-Node-263\" class=\"mjx-mrow\"><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.467em; padding-right: 0.006em;\">y</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.106em; padding-bottom: 0.313em;\">=</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.467em; padding-right: 0.003em;\">g</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">(</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.313em;\">x</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">)</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.313em; padding-bottom: 0.416em;\">+</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.467em; padding-right: 0.006em;\">y</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">(</span><span class=\"mjx-char MJXc-TeX-math-I\" style=\"padding-top: 0.209em; padding-bottom: 0.313em;\">x</span><span class=\"mjx-char MJXc-TeX-main-R\" style=\"padding-top: 0.467em; padding-bottom: 0.571em;\">)</span></span></span></p>\r\n<p style=\"text-align: center;\"><span class=\"katex-html\" aria-hidden=\"true\"><span class=\"base\"><span class=\"mord mathnormal\" style=\"margin-right: 0.03588em;\"><img src=\"https://cdn.imgurl.ir/uploads/t562576_Untitled.jpg\" alt=\"\" width=\"309\" height=\"199\"></span></span></span></p>\r\n<p style=\"text-align: center;\"><span class=\"katex-html\" aria-hidden=\"true\"><span class=\"base\"><span class=\"mord mathnormal\" style=\"margin-right: 0.03588em;\">y</span><span class=\"mrel\">=</span></span><span class=\"base\"><span class=\"mord mathnormal\" style=\"margin-right: 0.03588em;\">g</span><span class=\"mopen\">(</span><span class=\"mord mathnormal\">x</span><span class=\"mclose\">)</span><span class=\"mbin\">+</span></span><span class=\"base\"><span class=\"mord mathnormal\" style=\"margin-right: 0.03588em;\">y</span><span class=\"mopen\">(</span><span class=\"mord mathnormal\">x</span><span class=\"mclose\">)</span></span></span> برابر است. در جدول زیر مهم&zwnj;ترین قوانین کاربردی در فرآیند مشتق&zwnj;گیری معرفی شده&zwnj;اند.</p>', 'آموزش مشتق , ریاضیات , انتگرال  , کاربرد مهندسی , دیفرانسیل , مسائل کلیدی', 'دوازدهم', 'ویژه کنکوری ها', 'عمومی', 'ریاضی 3', '4', 1, '1746258407', '1746991845'),
(2, NULL, 'آموزش برنامه نویسی php', 'محمدمهدی سویزی', '<h2 dir=\"rtl\">PHP چیست؟</h2>\r\n<p>&nbsp;</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://cdn.imgurl.ir/uploads/n76166_0-1.jpg\" alt=\"\" width=\"500\" height=\"281\"></p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">قبل از شروع کار و یادگیری PHP در قدم اول باید درک کنیم که PHP &nbsp;چیست؟ و به ما کمک می&zwnj;کند تا چه کاری را انجام دهیم؟</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">PHP یک زبان برنامه&zwnj;نویسی منبع باز (open-source) و شیءگرا محسوب می&zwnj;شود که شما با استفاده از آن می&zwnj;توانید وبسایت&zwnj;ها و وب&zwnj;اپلیکیشن&zwnj;های مختلفی را برای کار خود ایجاد کنید.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">در بخش اول دوره آموزش PHP ما سعی کرده&zwnj;ایم به شکل مفصلی در مورد PHP و تاریخچه و بازار کار آن صحبت کنیم، در صورتی که علاقمند به اطلاعات بیشتر هستید می&zwnj;توانید قبل از انتخاب PHP این بخش را به شکل کامل ببینید.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">در زیر فهرستی از ویژگی&zwnj;ها را در اختیارتان قرار می&zwnj;دهیم که با توجه به آنها می&zwnj;توانید برخی از ویژگی&zwnj;های کلیدی PHP را بشناسید.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<ul dir=\"rtl\">\r\n<li>PHP دارای API برای دسترسی و ارتباط ساده با دیتابیس&zwnj;های مانند mysql, sqlite و... است.</li>\r\n<li>PHP را می&zwnj;توان به عنوان یکی از ساده&zwnj;ترین زبان&zwnj;ها برای ایجاد وبسایت، به حساب آورد.</li>\r\n<li>PHP دارای امکان راه&zwnj;اندازی بر روی پلتفرم&zwnj;های مختلف است.</li>\r\n<li>PHP را می&zwnj;توان به عنوان یک زبان برنامه&zwnj;نویسی سریع ، پرقدرت و امن دانست.</li>\r\n<li>PHP را می&zwnj;توان از لحاظ شی&zwnj;گرای یک زبان کامل به حساب آورد.</li>\r\n<li>توجه داشته باشید PHP در استفاده بهینه از منابع و حافظه نمونه است.</li>\r\n<li>PHP در استفاده بهینه از منابع و حافظه یکی از بهترین&zwnj;هاست.</li>\r\n<li>PHP کاملا رایگان و open source به حساب می&zwnj;آید.</li>\r\n</ul>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">فهرستی که در بالا ارائه کرده&zwnj;ایم تنها بخشی از ویژگی&zwnj;های کلیدی PHP به حساب &zwnj;می&zwnj;آید که با توجه به آنها می&zwnj;توان انتخاب ساده&zwnj;تری داشته باشید.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">البته در طول دوره آموزش <a href=\"http://php.net/\">PHP </a> سعی می&zwnj;کنیم این موارد و موارد دیگر را به شکل دقیق&zwnj;تری به شما توضیح&zwnj;دهیم.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h2 dir=\"rtl\"><strong>بازار کار&nbsp;PHP چگونه است؟</strong></h2>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">در حال حاضر PHP را می&zwnj;توان یکی از پرمخاطب&zwnj;ترین زبان&zwnj;های ایجاد وبسایت دانست که از بازار کار بسیاری عالی در ایران و جهان برخوردار است، به شکلی که شما با یادگیری PHP می&zwnj;توانید به سادگی به شکل فریلنسری یا در شرکت&zwnj;های مختلف، کاری را مرتبط با زبان PHP پیدا کنید.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">PHP زبانی است که با استفاده از آن فریمورک&zwnj;های مختلف و محبوبی همچون <a href=\"https://roocket.ir/skills/laravel\"><strong>لاراول</strong></a> و سیستم&zwnj; مدیریت محتواهای بسیار پر مخاطبی همچون <a href=\"https://roocket.ir/series/learn-basic-of-wordpress\">وردپرس </a>ایجاد شده است.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">شما برای کار با لاراول و وردپرس قطعا نیاز دارید در قدم اول زبان PHP را به خوبی فرا بگیرید.</p>\r\n<h2 dir=\"rtl\">تاریخچه زبان PHP</h2>\r\n<p dir=\"rtl\">هماهنطور که در بالا اشاره کردیم زبان برنامه&zwnj;نویسی PHP یکی از زبان&zwnj;های سمت سرور است که کاربرد اصلی آن در پیاده&zwnj;سازی وبسایت&zwnj;های پویا است. عبارت PHP مخفف Personal Home Page (صفحه خانگی شخصی) است که در طی زمان با یک مخفف سازی مجدد به شکل&nbsp; PHP:Hypertext Preprocessor تبدیل شد تا دارای مفهوم کامل&zwnj;تری شود.</p>\r\n<p dir=\"rtl\">این زبان برنامه نویسی در سال ۱۹۹۴ میلادی توسط راسموس لردورف (Rasmus Lerdorf) به صورت یک سری توابع کتابخانه&zwnj;ای با زبان C پیاده سازی شد. در زمان کوتاهی ورژن دوم PHP نیز منتشر شد البته تا آن زمان نمی&zwnj;شد به شکل دقیقی اسم زبان برنامه&zwnj;نویسی را به PHP داد اما در سال ۱۹۹۷ زبان PHP محتول شد، دو شخص با نام&zwnj;های زیو سوراسکی (Zeev Suraski) و اندی گاتمنز (Andy Gutmans) هسته اصلی PHP را بازنویسی و نسخه سوم آن را منتشر کردند.</p>\r\n<p dir=\"rtl\">با بازنویسی هسته PHP یک موتور پردازشی با عنوان Zend بوجود آمد که تحول بزرگی در مسیر و تاریخچه PHP به حساب می&zwnj;آید و در طی ۱۰ سال بعد، همین تغییر مهم زبان برنامه&zwnj;نویسی PHP را تبدیل به مهمترین ابزار برای پیاده&zwnj;سازی پروژه&zwnj;های وب کرد.</p>\r\n<p dir=\"rtl\">در کنار پروژه&zwnj;های سفارشی که افراد مختلف با PHP پیاده&zwnj;سازی کردند یک سری سیستم مدیریت محتوای متن باز و رایگان با استفاده از PHP پیاده&zwnj;سازی شده&zwnj;اند، که در ادامه فهرستی از آن&zwnj;ها آمده است:</p>\r\n<ul dir=\"rtl\" style=\"list-style-type: square;\">\r\n<li>وردپرس یا WordPress (پرکاربردترین و رایج ترین سیستم مدیریت محتوای جهان)</li>\r\n<li>جوملا یا Joomla (یکی از سیستم های مدیریت محتوای قوی و پر طرفدار)</li>\r\n<li>دروپال یا Drupal (یکی از سیستم های مدیریت محتوای قوی و پر طرفدار)</li>\r\n<li>اوپن کارت یا OpenCart (یک سیستم فروشگاه ساز قوی و ساده)</li>\r\n<li>پرستاشاپ یا PrestaShop (یک سیستم فروشگاه ساز قوی)</li>\r\n<li>مدیاویکی یا MediaWiki (سیستم مدیریت محتوای ویکی پدیا و سایت های مشابه)</li>\r\n<li>مجنتو یا Magento (یکی از قوی ترین سیستم های فروشگاه ساز)</li>\r\n<li>وی بولتن یا vBulletin (پر کاربردترین سیستم انجمن ساز یا فوریوم)</li>\r\n</ul>\r\n<p dir=\"rtl\">&nbsp;پیاده سازی زبان برنامه&zwnj;نویسی PHP تاثیر گرفته از زبان&zwnj;های برنامه نویسی سی (C)، سی پلاس پلاس (C++&lrm;)، جاوا (Java) و پرل (Perl) بوده است البته زبان PHP برعکس C , C++ و... که زبان&zwnj;های کامپایلری هستند، به عنوان یک زبان مفسری به حساب می آید که برنامه&zwnj;نویسی را برای ایجاد اپلیکیشن&zwnj;های وب بسیار ساده و آسان کرده است.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h2 dir=\"rtl\">سرفصل&zwnj;های دوره آموزش PHP</h2>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h3 dir=\"rtl\">آشنایی ابتدایی</h3>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">در بخش اول دوره آموزش PHP قصد داریم ابتدا PHP را به شما معرفی کنیم، کمی در مورد تاریخچه PHP برای&zwnj;تان بگوییم، پیش&zwnj;نیاز&zwnj;های یادگیری PHP و ورژن&zwnj;های مختلف PHP را به شما معرفی کنیم و در قدم نهایی در مورد مسئله مهم بازار کار PHP صحبت کنیم.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h3 dir=\"rtl\">نصب و را&zwnj;ه&zwnj;اندازی</h3>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">در این بخش از دوره آموزش PHP روش نصب و راه&zwnj;اندازی PHP و mysql و همینطور اجرا کردن یک پروژه PHP را به شما آموزش خواهم داد.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h3 dir=\"rtl\">آشنایی با موارد پایه و syntax</h3>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">برای آنکه بتوانید از PHP برای ایجاد وبسایت&zwnj;های مورد نظر خود استفاده کنیم ابتدا باید با موارد پایه و syntax ابتدایی این زبان آشنا شوید.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">در این بخش از دوره آموزش PHP قصد داریم قدم به قدم شما را با syntax زبان PHP آشنا کنم.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h3 dir=\"rtl\">ساختار کنترلی</h3>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">ساختار&zwnj;های کنترلی به ما این اجازه را می&zwnj;دهند تا بتوانیم مشخص کنیم کدام قسمت از کدهایمان بر اساس شروطی باید اجرا شوند و کدام قسمت خیر.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">این مورد بسیار مهمی است که آشنایی با آن می&zwnj;تواند در ایجاد اپلیکیشن&zwnj;های وب پیشرفته به ما کمک بسیار زیادی کند.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h3 dir=\"rtl\">توابع</h3>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">ما با توابع در دوران تحصیلی راهنمایی در درس ریاضی آشنا شیدم. حالا دقیقا با همان کاربرد در زبان PHP برای پیاده&zwnj;سازی وظیفه خاص و کم کردن تکرار کدها از توابع استفاده می&zwnj;کنیم.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">در این بخش از دوره آموزش PHP قصد داریم شما را با روش تعریف و استفاده از توابع در زبان PHP به شکل کامل آشنا کنیم.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h3 dir=\"rtl\">توابع کاربردی</h3>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">حال که با روش تعریف و استفاده از توابع در زبان PHP آشنا شدید،&zwnj; وقت آن رسیده شما را در این بخش با توابع کاربردی که به شکل پیش فرض در زبان PHP قرار دارد آشنا کنیم.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h3 dir=\"rtl\">آرایه&zwnj;های سوپرگلوبال</h3>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">آرایه&zwnj;های سوپرگلوبال به عنوان یک سری متغییر&zwnj;های جادویی عمل می&zwnj;کنن که به ما اجزا کارهای بخوصی را می&zwnj;دهند، برای مثال دریافت اطلاعات از طریق url یا دریافت اطلاعات از طریق فرم&zwnj;ها و موارد دیگر که در طول دوره آموزش PHP این موارد را به شما آموزش خواهیم داد.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h3 dir=\"rtl\">کوکی&zwnj;ها و سشن&zwnj;ها</h3>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">کوکی&zwnj;ها و سشن&zwnj;ها ما را قادر میسازند اطلاعاتی را برای کاربرانمان در سمت مرورگر یا سرور ذحیره سازی کنیم که تنها می&zwnj;تواند برای همان کاربر قابل استفاده باشد.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">این دو مورد از ویژگی&zwnj;های پرکاربرد و بسیار مهم PHP هستند که در این بخش از آموزش PHP به شکل مفصل در مورد آن&zwnj;ها صحبت می&zwnj;کنیم و روش کار با آن&zwnj;ها را قدم به قدم به شما آموزش خواهیم داد.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h3 dir=\"rtl\">ارتباط با mysql با mysqli</h3>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">برای ایجاد یک وبسایت پیشرفته قطعا نیاز به جای برای ذخیره&zwnj;سازی اطلاعات مختلف دارید، برای مثال از اطلاعات کاربران وبسایت خود گرفته تا اطلاعات محصولات مختلف.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">در این بخش قصد داریم روش ارتباط برقرار کردن با دیتابیس mysql از طریق کدهای PHP را به شکل کامل با استفاده از mysqli به شما آموزش دهیم.</p>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<h3 dir=\"rtl\">مدیریت ارورها و دیباگ کردن&zwnj; کدها</h3>\r\n<p dir=\"rtl\">&nbsp;</p>\r\n<p dir=\"rtl\">به عنوان بخش آخر از آموزش PHP قصد داریم شما را با ارورهای مختلف PHP آشنا کنیم و به شما آموزش دهیم که چطور می&zwnj;توانید کدهای خود را برای پیدا کردن خطاهای مختلف دیباگ کنید.</p>', 'برنامه نویسی , php', 'دوازدهم', 'کامپیوتر', 'تخصصی', 'طراحی وب', '5', 1, '1746864273', '1746864273'),
(3, NULL, 'آموزش برنامه نویسی js', 'محمدمهدی سویزی', '<h2 style=\"text-align: right;\"><strong>جاوا اسکریپت چیست؟</strong></h2>\r\n<p><strong><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"https://cdn.imgurl.ir/uploads/76745_D8A2D985D988D8B2D8B4_D985D982D8AFD985D8A7D8AADB8C_D8AA.jpg\" alt=\"\" width=\"480\" height=\"343\"></strong></p>\r\n<p dir=\"rtl\" style=\"text-align: right;\">جاوا اسکریپت یکی از کلیدی&zwnj;ترین زبان&zwnj;های برنامه&zwnj;نویسی برای توسعه وب است که به شما این امکان را می&zwnj;دهد تا صفحات وب را از حالت استاتیک به صفحات پویا و تعاملی تبدیل کنید. جاوا اسکریپت به&zwnj;طور مستقیم در مرورگر کاربران اجرا شده و پایه اصلی بسیاری از اپلیکیشن&zwnj;ها و وب&zwnj;سایت&zwnj;های مدرن است. برخی از ویژگی&zwnj;های برجسته جاوا اسکریپت عبارتند از:</p>\r\n<ol style=\"text-align: right;\">\r\n<li dir=\"rtl\">\r\n<p dir=\"rtl\"><strong>ایجاد تعامل:</strong> با جاوا اسکریپت می&zwnj;توانید المان&zwnj;های صفحه را به&zwnj;طور پویا تغییر داده و با کاربر تعامل کنید.</p>\r\n</li>\r\n<li dir=\"rtl\">\r\n<p dir=\"rtl\"><strong>توسعه سریع و قدرتمند:</strong> سرعت بالا و قابلیت اجرا در سمت کاربر باعث می&zwnj;شود تا تجربه کاربری بهبود یابد.</p>\r\n</li>\r\n<li dir=\"rtl\">\r\n<p dir=\"rtl\"><strong>چندمنظوره بودن:</strong> جاوا اسکریپت تنها محدود به مرورگر نیست؛ بلکه می&zwnj;توان از آن در سمت سرور نیز استفاده کرد (Node.js).</p>\r\n</li>\r\n<li dir=\"rtl\">\r\n<p dir=\"rtl\"><strong>پشتیبانی از تمامی مرورگرها:</strong> جاوا اسکریپت توسط تمام مرورگرهای مدرن پشتیبانی شده و بخش ضروری هر وب&zwnj;سایت محسوب می&zwnj;شود.</p>\r\n</li>\r\n</ol>\r\n<p style=\"text-align: right;\">در دوره جامع <strong>آموزش جاوا اسکریپت</strong> وب&zwnj;سایت راکت، از پایه تا پیشرفته&zwnj;ترین مفاهیم به شما آموزش داده می&zwnj;شود تا بتوانید با استفاده از این زبان قدرتمند، پروژه&zwnj;های واقعی و حرفه&zwnj;ای را توسعه دهید و مهارت&zwnj;های خود را به سطح جدیدی ارتقا دهید.</p>\r\n<h2 style=\"text-align: right;\"><strong>تاریخچه کوتاه جاوااسکریپت</strong></h2>\r\n<p style=\"text-align: right;\">جاوااسکریپت در سال&zwnj;های آخر دهه ۱۹۹۰ توسعه یافت و در مرورگر شرکت نت&zwnj;اسکیپ مورد استفاده قرار گرفت. هدف از این کار آن بود که میزان خشک و ایستا بودن صفحات وب را کاهش داده و بتوانیم المان&zwnj;هایی که با کاربر تعامل دارند را به صفحات اضافه کنیم. به همین دلیل از آن تاریخ به بعد ما توانستیم از ابزارهایی مانند انیمیشن، اعتبارسنجی فرم&zwnj;ها، تطبیق محتوا براساس نیازهای کاربران و... استفاده کنیم.</p>\r\n<p style=\"text-align: right;\">در ابتدا شما از جاوااسکریپت تنها می&zwnj;توانستید برای پویاسازی صفحات وب استفاده کنید. اما از سال ۲۰۰۹ این موضوع تغییر کرد و با استفاده از <span dir=\"LTR\">Node.js</span> شما قادر به این شدید که از جاوااسکریپت در جاهای مختلف همچون سمت سرور (<span dir=\"LTR\">Back-End</span>) هم استفاده کنید.</p>\r\n<h2 dir=\"rtl\" style=\"text-align: right;\">&nbsp;</h2>\r\n<h2 dir=\"rtl\" style=\"text-align: right;\"><strong>پیش نیاز های دوره جاوا اسکریپت</strong></h2>\r\n<p dir=\"rtl\" style=\"text-align: right;\"><strong>پیش&zwnj;نیازهای دوره جاوا اسکریپت</strong> در راکت بسیار ساده و قابل دسترس برای همه علاقه&zwnj;مندان به یادگیری برنامه&zwnj;نویسی است. این دوره به&zwnj;گونه&zwnj;ای طراحی شده که افراد با کمترین تجربه هم می&zwnj;توانند به&zwnj;راحتی از آن بهره&zwnj;مند شوند. اما برای بهترین نتیجه، بهتر است برخی از مهارت&zwnj;های پایه را داشته باشید:</p>\r\n<div dir=\"rtl\" style=\"text-align: right;\">\r\n<h3><strong>چرا باید جاوااسکریپت یاد گرفت؟</strong></h3>\r\n<p>از نظر ما&nbsp;<strong>آموزش جاوااسکریپت</strong>&nbsp;در حال حاضر برای هر طراح وبی ضروری است.</p>\r\n<p>لازم به تکرار زیاد نیست تنها کافی است مراجعه&zwnj;ای به وبسایت&zwnj;های فریلنسری و کاریابی در ایران و جهان داشته باشید تا خیلی زود متوجه شوید که جاوااسکریپت یکی از پرمخاطب&zwnj;ترین زبان&zwnj;های برنامه&zwnj;نویسی ایران و جهان است.</p>\r\n<p>&nbsp;</p>\r\n<h2>ویژگی&zwnj;های جاوااسکریپت</h2>\r\n<p>جاوااسکریپت به عنوان پر استفاده ترین زبان برنامه نویسی در حوزه وب، ویژگی&zwnj;ها و شاخصه&zwnj;های منحصر به فردی دارد که در ادامه با برخی از مهمترین آن&zwnj;ها آشنا می&zwnj;شویم:</p>\r\n<ol style=\"list-style-type: none;\">\r\n<li>\r\n<p><strong>تعاملی و دینامیک:</strong> جاوااسکریپت امکان افزودن تعاملات کاربری مانند کلیک&zwnj;ها، انیمیشن&zwnj;ها، و تغییرات داده&zwnj;ها در صفحه بدون نیاز به بارگذاری مجدد صفحه را فراهم می&zwnj;کند.</p>\r\n</li>\r\n<li>\r\n<p><strong>Weakly Typed:</strong> این زبان نیازی به تعریف نوع داده&zwnj;ها ندارد. متغیرها می&zwnj;توانند به صورت خودکار نوع&zwnj;دهی شوند.</p>\r\n</li>\r\n<li>\r\n<p><strong>پشتیبانی از برنامه&zwnj;نویسی شیء&zwnj;گرا و تابعی:</strong> جاوااسکریپت از شیوه&zwnj;های برنامه&zwnj;نویسی شیء&zwnj;گرا (OOP) و تابعی پشتیبانی می&zwnj;کند.</p>\r\n</li>\r\n<li>\r\n<p><strong>همزمانی و برنامه&zwnj;نویسی ناهمزمان (Asynchronous Programming):</strong> امکان اجرای کدها به صورت همزمان و ناهمزمان، به خصوص با استفاده از Promises و Async/Await.</p>\r\n</li>\r\n<li>\r\n<p><strong>اجرا در مرورگر:</strong> جاوااسکریپت به صورت بومی در اکثر مرورگرهای وب اجرا می&zwnj;شود، که این امر آن را برای توسعه وب بسیار مهم می&zwnj;کند.</p>\r\n</li>\r\n<li>\r\n<p><strong>مقیاس&zwnj;پذیری و کارایی:</strong> با استفاده از Node.js، جاوااسکریپت می&zwnj;تواند در محیط سرور نیز اجرا شود، که امکان توسعه برنامه&zwnj;های مقیاس&zwnj;پذیر و کارآمد را فراهم می&zwnj;کند.</p>\r\n</li>\r\n<li>\r\n<p><strong>پشتیبانی گسترده و اکوسیستم قوی:</strong> جاوااسکریپت از یک اکوسیستم قوی با فریم&zwnj;ورک&zwnj;ها، کتابخانه&zwnj;ها و ابزارهای توسعه متعدد برخوردار است، که توسعه سریع و کارآمد را ممکن می&zwnj;سازد.</p>\r\n</li>\r\n<li>\r\n<p><strong>توسعه پلتفرم&zwnj;های متعدد:</strong> امکان استفاده از جاوااسکریپت برای توسعه برنامه&zwnj;های وب، موبایل، دسکتاپ، و حتی برنامه&zwnj;های IoT وجود دارد، که این امر آن را به یک انتخاب انعطاف&zwnj;پذیر برای توسعه&zwnj;دهندگان تبدیل می&zwnj;کند.</p>\r\n</li>\r\n</ol>\r\n<ol style=\"list-style-type: none;\" start=\"9\">\r\n<li>\r\n<p><strong>سرعت بالا:</strong> به لطف بهینه&zwnj;سازی&zwnj;های مدرن موتورهای جاوااسکریپت، اجرای اسکریپت&zwnj;ها معمولاً بسیار سریع است، خصوصاً در مرورگرهای نوین.</p>\r\n</li>\r\n<li>\r\n<p><strong>پشتیبانی از JSON:</strong> جاوااسکریپت به صورت بومی از JSON، که یک فرمت استاندارد برای تبادل داده&zwnj;ها است، پشتیبانی می&zwnj;کند، این امر تبادل داده&zwnj;ها را آسان و کارآمد می&zwnj;کند.</p>\r\n</li>\r\n<li>\r\n<p><strong>Event-Driven Programming:</strong> این زبان از برنامه&zwnj;نویسی مبتنی بر رویداد (Event-Driven) پشتیبانی می&zwnj;کند که برای ایجاد تعاملات کاربری و پاسخ به اعمال کاربران در محیط&zwnj;های وب ایده&zwnj;آل است.</p>\r\n</li>\r\n<li>\r\n<p><strong>Closure&zwnj;ها:</strong> جاوااسکریپت از Closure&zwnj;ها پشتیبانی می&zwnj;کند، که به توسعه&zwnj;دهندگان امکان می&zwnj;دهد تا داده&zwnj;های محلی را در توابع بپوشانند و مدیریت بهتری بر محیط اجرایی داشته باشند.</p>\r\n</li>\r\n<li>&nbsp;</li>\r\n</ol>\r\n</div>\r\n<h2 dir=\"rtl\" style=\"text-align: right;\" role=\"presentation\"><strong>دوره آموزش جاوا اسکریپت راکت برای چه کسانی مناسب هست؟</strong></h2>\r\n<p dir=\"rtl\" style=\"text-align: right;\">اگر به دنبال یادگیری یکی از پرکاربردترین و مهم&zwnj;ترین زبان&zwnj;های برنامه&zwnj;نویسی وب هستید، دوره آموزش جاوا اسکریپت راکت دقیقاً برای شما طراحی شده است. حالا دقیقا این دوره به درد چه کسانی میخورد:</p>\r\n<ol style=\"text-align: right;\">\r\n<li dir=\"rtl\">\r\n<p dir=\"rtl\" style=\"text-align: right;\"><strong>مبتدی&zwnj;ها:</strong> اگر هیچ تجربه&zwnj;ای در برنامه&zwnj;نویسی ندارید و می&zwnj;خواهید با زبان قدرتمند جاوا اسکریپت وارد دنیای توسعه وب شوید.</p>\r\n</li>\r\n<li dir=\"rtl\">\r\n<p dir=\"rtl\" style=\"text-align: right;\"><strong>توسعه&zwnj;دهندگان وب:</strong> برنامه&zwnj;نویسانی که می&zwnj;خواهند مهارت&zwnj;های خود را در ساخت وب&zwnj;سایت&zwnj;های پویا و تعاملی به سطح بالاتری برسانند.</p>\r\n</li>\r\n<li dir=\"rtl\">\r\n<p dir=\"rtl\" style=\"text-align: right;\"><strong>طراحان وب:</strong> اگر در طراحی سایت تجربه دارید و حالا قصد دارید با یادگیری جاوا اسکریپت، پروژه&zwnj;های خود را حرفه&zwnj;ای&zwnj;تر و جذاب&zwnj;تر کنید.</p>\r\n</li>\r\n<li dir=\"rtl\">\r\n<p dir=\"rtl\" style=\"text-align: right;\"><strong>علاقه&zwnj;مندان به اپلیکیشن&zwnj;سازی:</strong> کسانی که به دنبال ساخت اپلیکیشن&zwnj;های تحت وب و موبایل هستند و می&zwnj;خواهند از قدرت جاوا اسکریپت و فریم&zwnj;ورک&zwnj;های آن بهره ببرند.</p>\r\n</li>\r\n</ol>\r\n<p dir=\"rtl\" style=\"text-align: right;\">این دوره، به شما از پایه تا پیشرفته&zwnj;ترین مباحث را آموزش می&zwnj;دهد و کمک می&zwnj;کند تا به یک توسعه&zwnj;دهنده حرفه&zwnj;ای تبدیل شوید.</p>', 'آموزش برنامه نویسی js', 'دوازدهم', 'کامپیوتر', 'تخصصی', 'طراحی وب', '2', 1, '1746864548', '1746864548'),
(4, NULL, 'آموزش java', 'محمدمهدی سویزی', '<p style=\"text-align: right;\">دوره&zwnj; <strong>آموزش جاوا مقدماتی</strong> با متد حرفه&zwnj;ای و روش تدریس خاص خود به آموزش جاوا می&zwnj;پردازد. در این دوره به طور کامل و از صفر زبان جاوا را خواهید آموخت. زبان برنامه نویسی جاوا (Java)، زبانی شاخص، سطح بالا و همه منظوره است که در سیستم&zwnj;عامل&zwnj;های مختلفی قابل اجرا است. جاوا را می&zwnj;توان زبان مادر سیستم&zwnj;عامل سولاریس نامید. اصلی&zwnj;ترین خصوصیت زبان برنامه نویسی جاوا شیء&zwnj;گرایی آن است و این یعنی امکان استفاده دوباره از کدهای از پیش نوشته شده، در این زبان وجود دارد. در همین&zwnj;باره، شعار اصلی جاوا يعنی: \"يک&zwnj;بار بنويس و هر جا استفاده کن\"، موضوعی بسيار حائز اهميت است. از دیگر نکات مثبت این زبان برنامه نویسی این است که افراد آشنا با زبان C++، آسان&zwnj;تر و سریع&zwnj;تر می&zwnj;توانند زبان JAVA &zwnj;را فرا بگیرند.</p>\r\n<p style=\"text-align: right;\">&nbsp;</p>\r\n<p style=\"text-align: right;\">&nbsp;</p>\r\n<p style=\"text-align: right;\">&nbsp;</p>', 'java', 'دوازدهم', 'کامپیوتر', 'تخصصی', 'طراحی وب', '4', 1, '1746864800', '1746864800'),
(5, NULL, 'ووتذتذ', 'محمدمهدی سویزی', '<p>ننن</p>', 'تتانا', 'یازدهم', 'برق', 'تخصصی', 'ریاضی 3', '4تن', 0, '1747037552', '1747037552');

-- --------------------------------------------------------

--
-- Table structure for table `training_course_meetings_mast`
--

CREATE TABLE `training_course_meetings_mast` (
  `id_training_course_meetings_mast` int(11) NOT NULL,
  `teacher_id_training_courses_meetings_mast` int(11) DEFAULT NULL COMMENT 'آیدی دوره آموزشی برای ارتباط',
  `training_course_meetings_title_mast` varchar(255) NOT NULL,
  `training_course_meetings_link_mast` varchar(255) DEFAULT NULL,
  `training_course_meetings_course_name_mast` varchar(255) NOT NULL COMMENT 'نام ویدیو مربوط به جلسات آموزشی'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `training_course_meetings_mast`
--

INSERT INTO `training_course_meetings_mast` (`id_training_course_meetings_mast`, `teacher_id_training_courses_meetings_mast`, `training_course_meetings_title_mast`, `training_course_meetings_link_mast`, `training_course_meetings_course_name_mast`) VALUES
(1, NULL, 'قسمت اول', '65471-in.mp4', 'آموزش مشتق');

-- --------------------------------------------------------

--
-- Table structure for table `type_book_mast`
--

CREATE TABLE `type_book_mast` (
  `id_type_book_mast` int(11) NOT NULL,
  `admin_id_type_book_mast` int(11) DEFAULT NULL COMMENT 'آیدی ادمین اضافه کننده نوع کتاب',
  `type_book_mast` varchar(255) DEFAULT NULL COMMENT 'نوع کتاب'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci;

--
-- Dumping data for table `type_book_mast`
--

INSERT INTO `type_book_mast` (`id_type_book_mast`, `admin_id_type_book_mast`, `type_book_mast`) VALUES
(1, NULL, 'عمومی'),
(2, NULL, 'تخصصی');

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
  ADD PRIMARY KEY (`id_student_mast`);

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
  ADD KEY `teacher_id_training_courses_meetings_mast` (`teacher_id_training_courses_meetings_mast`);

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
  MODIFY `id_admin_mast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education_basic_mast`
--
ALTER TABLE `education_basic_mast`
  MODIFY `id_education_basic_mast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `field_study_mast`
--
ALTER TABLE `field_study_mast`
  MODIFY `id_field_study_mast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student_mast`
--
ALTER TABLE `student_mast`
  MODIFY `id_student_mast` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_mast`
--
ALTER TABLE `teacher_mast`
  MODIFY `id_teacher_mast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `training_courses_mast`
--
ALTER TABLE `training_courses_mast`
  MODIFY `id_training_courses_mast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `training_course_meetings_mast`
--
ALTER TABLE `training_course_meetings_mast`
  MODIFY `id_training_course_meetings_mast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type_book_mast`
--
ALTER TABLE `type_book_mast`
  MODIFY `id_type_book_mast` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  ADD CONSTRAINT `teacher_id_training_courses_meetings_mast` FOREIGN KEY (`teacher_id_training_courses_meetings_mast`) REFERENCES `teacher_mast` (`id_teacher_mast`);

--
-- Constraints for table `type_book_mast`
--
ALTER TABLE `type_book_mast`
  ADD CONSTRAINT `admin_id_type_book` FOREIGN KEY (`admin_id_type_book_mast`) REFERENCES `admin_mast` (`id_admin_mast`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
