<div dir="rtl">

# 🎓 TeachLine — پلتفرم آموزش آنلاین هنرستان

<p align="center">
  <strong>یک پلتفرم آموزشی فارسی، راست‌چین و چندنقشی برای مدیریت دوره‌های آموزشی، مدرس‌ها، هنرجویان و محتوای آموزشی.</strong>
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.3-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">
  <img src="https://img.shields.io/badge/MVC-Architecture-6DB33F?style=for-the-badge" alt="MVC">
  <img src="https://img.shields.io/badge/PDO-Data%20Access-8892BF?style=for-the-badge" alt="PDO">
  <img src="https://img.shields.io/badge/Composer-Dependency%20Management-885630?style=for-the-badge&logo=composer&logoColor=white" alt="Composer">
  <img src="https://img.shields.io/badge/Bootstrap-UI-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/RTL-Persian-00A98F?style=for-the-badge" alt="RTL">
</p>

---

## 📌 معرفی پروژه

**TeachLine** یک پلتفرم آموزش آنلاین با تمرکز بر فضای آموزشی هنرستان است که با **PHP** و **MySQL** توسعه داده شده است.

این پروژه در ابتدا به‌صورت یک پروژه PHP ساده شروع شد و در ادامه به‌صورت مرحله‌به‌مرحله به سمت یک ساختار **MVC**، شی‌ءگرا و قابل توسعه حرکت کرده است.

هدف اصلی پروژه فقط ساخت چند صفحه آموزشی نیست؛ بلکه پیاده‌سازی یک سیستم چندنقشی واقعی با تمرکز بر مفاهیم Backend، معماری نرم‌افزار، احراز هویت، مدیریت دسترسی، پایگاه داده و امنیت است.

TeachLine سه نقش اصلی دارد:

- 👨‍🎓 **Student** — هنرجو
- 👨‍🏫 **Teacher** — مدرس
- 🛡️ **Admin** — مدیر سیستم

---

# 🎯 اهداف پروژه

TeachLine با اهداف زیر توسعه داده شده است:

- یادگیری عملی PHP و PHP OOP
- پیاده‌سازی معماری MVC بدون استفاده از Framework
- طراحی Routing و Front Controller
- کار با MySQL و PDO
- پیاده‌سازی Authentication و Session Management
- پیاده‌سازی Authorization و Middleware
- مدیریت CRUD
- کار با روابط بین جداول
- مدیریت فایل و محتوای ویدیویی
- ارسال ایمیل و فعال‌سازی حساب
- رعایت اصول امنیتی Backend
- استفاده از Composer و Package Management
- آماده‌سازی پروژه برای توسعه و نگهداری بلندمدت
- ایجاد یک پروژه قابل ارائه به‌عنوان Portfolio

---

# 👥 نقش‌های اصلی سیستم

## 👨‍🎓 Student

هنرجو می‌تواند:

- ثبت‌نام کند
- وارد حساب کاربری شود
- حساب خود را از طریق Email Activation فعال کند
- اطلاعات آموزشی خود مانند پایه و رشته را مدیریت کند
- دوره‌های آموزشی را مشاهده کند
- جزئیات دوره را مشاهده کند
- جلسات آموزشی دوره را مشاهده کند
- دوره‌ها را جست‌وجو کند
- از حساب خود خارج شود

---

## 👨‍🏫 Teacher

مدرس دارای پنل اختصاصی خود است و می‌تواند:

- ثبت‌نام کند
- وارد پنل مدرس شود
- داشبورد اختصاصی داشته باشد
- دوره آموزشی ایجاد کند
- دوره‌های خود را مشاهده کند
- دوره را ویرایش کند
- دوره را حذف کند
- جلسات دوره را مدیریت کند
- محتوای ویدیویی دوره را مدیریت کند

### تأیید دوره

دوره ایجادشده توسط مدرس تا زمانی که توسط Admin تأیید نشده باشد، در بخش دوره‌های تأییدشده مدرس قرار نمی‌گیرد.

پس از تأیید Admin:

```text
Teacher
   │
   ▼
Create Course
   │
   ▼
Pending
   │
   ▼
Admin Review
   │
   ▼
Approved
   │
   ├── Course
   ├── Meetings
   └── Video Content
```

این جریان باعث می‌شود محتوای آموزشی قبل از انتشار عمومی توسط مدیر سیستم بررسی شود.

---

# 🛡️ Admin

Admin مرکز کنترل سیستم است و بخش مدیریتی جداگانه‌ای دارد.

قابلیت‌های اصلی Admin شامل:

- ورود اختصاصی Admin
- داشبورد مدیریتی
- مشاهده آمار کلی سیستم
- مدیریت مدرس‌ها
- بررسی مدرس‌های در انتظار تأیید
- مشاهده مدرس‌های تأییدشده
- مدیریت دوره‌های آموزشی
- بررسی دوره‌های در انتظار تأیید
- تأیید دوره‌ها
- مدیریت پایه‌های تحصیلی
- مدیریت رشته‌ها
- مدیریت نوع کتاب / محتوا
- مدیریت اطلاعات مدیریتی مرتبط با این بخش‌ها

ساختار کلی:

```text
Admin Dashboard
       │
       ├── Teachers
       │      ├── Pending
       │      └── Approved
       │
       ├── Courses
       │      ├── Pending
       │      └── Approved
       │
       ├── Education Basics
       │
       ├── Fields of Study
       │
       ├── Book / Content Types
       │
       └── System Statistics
```

---

# 🏗️ معماری پروژه

TeachLine در حال حاضر با یک معماری **MVC سفارشی و بدون Framework** توسعه داده می‌شود.

ساختار کلی:

```text
Browser
   │
   ▼
public/index.php
   │
   ▼
Bootstrap / Routing
   │
   ▼
Controller
   │
   ├──────────────► Model
   │                    │
   │                    ▼
   │                  PDO
   │                    │
   │                    ▼
   │                 MySQL
   │
   ▼
View
   │
   ▼
Layout / UI
```

### اجزای اصلی معماری

#### Front Controller

درخواست‌های اصلی پروژه از طریق:

```text
public/index.php
```

وارد سیستم می‌شوند.

#### Routing

مسیرها در:

```text
routes/
```

مدیریت می‌شوند.

Router مسئول تشخیص Route و ارسال درخواست به Controller مناسب است.

#### Controllers

Controllerها مسئول دریافت Request، اجرای منطق مربوط به درخواست و ارسال داده مناسب به View هستند.

#### Models

Modelها مسئول ارتباط با Database و اجرای Queryهای مربوط به Entityها هستند.

#### Views

Viewها مسئول نمایش اطلاعات و UI هستند.

#### Layouts

برای جلوگیری از تکرار ساختار صفحات، Layoutهای جداگانه برای بخش‌های مختلف پروژه استفاده شده‌اند.

از جمله:

```text
Student / Public Layout
Teacher Layout
Admin Layout
```

---

# 📁 ساختار فعلی پروژه

ساختار اصلی پروژه به‌صورت کلی:

```text
TeachLine/
│
├── app/
│   ├── Controllers/
│   ├── Models/
│   ├── Views/
│   │   ├── layouts/
│   │   ├── admin/
│   │   ├── teachers/
│   │   ├── students/
│   │   └── ...
│   │
│   └── ...
│
├── assets/
│   ├── css/
│   ├── js/
│   ├── img/
│   ├── vendor/
│   └── upload/
│
├── public/
│   └── index.php
│
├── routes/
│   └── ...
│
├── script/
│
├── bootstrap.php
├── composer.json
├── composer.lock
├── mast_teachline.sql
└── README.md
```

> ساختار بالا نمای کلی معماری فعلی پروژه است و ممکن است با ادامه توسعه، پوشه‌ها و فایل‌های داخلی آن گسترش پیدا کنند.

---

# 🧰 تکنولوژی‌ها و ابزارها

| Technology | کاربرد |
|---|---|
| **PHP 8.3** | Backend و منطق سمت سرور |
| **PHP OOP** | طراحی شی‌ءگرا |
| **MVC** | معماری برنامه |
| **MySQL** | پایگاه داده |
| **PDO** | ارتباط با Database |
| **HTML5** | ساختار صفحات |
| **CSS3** | طراحی رابط کاربری |
| **JavaScript** | تعاملات سمت کاربر |
| **Bootstrap** | UI و Responsive Design |
| **Composer** | مدیریت Dependencies |
| **PHPMailer** | ارسال Email از طریق SMTP |
| **Dotenv** | مدیریت Environment Variables |
| **SweetAlert2** | نمایش پیام‌های کاربری |
| **Vazirmatn** | تایپوگرافی فارسی |
| **Git** | Version Control |
| **GitHub** | Repository و Version History |
| **Laragon** | Local Development Environment |
| **PhpStorm** | IDE |

---

# 🗄️ Database

TeachLine از **MySQL** برای ذخیره اطلاعات استفاده می‌کند.

فایل ساختار Database در Repository:

```text
mast_teachline.sql
```

برخی از Entityهای اصلی سیستم شامل:

```text
Admin
Student
Teacher

Education Basic
Field Study
Type Book

Course
Course Meeting
```

رابطه مفهومی:

```text
Admin
 │
 ├── Education Basic
 ├── Field Study
 ├── Type Book
 ├── Teachers
 │      │
 │      └── Courses
 │             │
 │             └── Course Meetings
 │
 └── Course Approval

Student
 │
 ├── Education Basic
 ├── Field Study
 └── Courses
```

---

# 🔐 Authentication & Authorization

TeachLine دارای سیستم‌های Authentication جداگانه برای نقش‌های اصلی است:

```text
Student Authentication
Teacher Authentication
Admin Authentication
```

Session برای نگهداری وضعیت ورود کاربران استفاده می‌شود.

همچنین دسترسی به بخش‌های مختلف سیستم بر اساس نقش کاربر کنترل می‌شود.

برای مثال:

```text
Student
   └── Student Routes

Teacher
   └── Teacher Routes

Admin
   └── Admin Routes
```

کاربر احراز هویت‌نشده نباید بتواند مستقیماً وارد پنل‌های محافظت‌شده شود.

---

# 🔒 Security

امنیت یکی از بخش‌های مهم مسیر توسعه TeachLine است.

در پروژه روی مفاهیمی مانند موارد زیر کار شده است:

- Password Hashing
- Prepared Statements
- PDO
- Session Authentication
- Authorization
- Middleware
- Server-side Validation
- Flash Messages
- جلوگیری از نمایش مستقیم Errorهای حساس
- کنترل دسترسی به بخش‌های مختلف

همچنین موارد زیر در مسیر توسعه و تقویت امنیت قرار دارند:

- CSRF Protection
- Secure Cookie Configuration
- Rate Limiting
- Secure File Upload Validation
- Production Error Handling
- تکمیل Security Headers
- بررسی نهایی Access Control

> TeachLine یک پروژه در حال توسعه است و نباید در وضعیت فعلی به‌عنوان یک سیستم Production-ready معرفی شود.

---

# ✉️ Email & Account Activation

TeachLine برای ارسال ایمیل از **PHPMailer** و SMTP استفاده می‌کند.

یکی از کاربردهای آن فعال‌سازی حساب کاربر از طریق Email Activation است.

جریان کلی:

```text
Register
   │
   ▼
Activation Code
   │
   ▼
Email
   │
   ▼
User Activation
   │
   ▼
Account Active
```

تنظیمات حساس Email نباید داخل Source Code یا Repository عمومی قرار بگیرند.

---

# 📚 Course Management

مدیریت دوره یکی از بخش‌های اصلی TeachLine است.

دوره‌ها می‌توانند شامل:

- اطلاعات دوره
- مدرس
- پایه تحصیلی
- رشته
- نوع محتوا
- جلسات آموزشی
- محتوای ویدیویی

باشند.

جریان کلی:

```text
Teacher
   │
   ▼
Create Course
   │
   ▼
Admin Review
   │
   ├── Approve
   │
   └── Reject
```

دوره‌های تأییدنشده نباید به‌عنوان دوره تأییدشده مدرس در نظر گرفته شوند.

---

# 🎥 Course Meetings & Video Content

هر دوره می‌تواند شامل جلسات آموزشی باشد.

ساختار مفهومی:

```text
Course
 │
 ├── Meeting 1
 │      └── Video
 │
 ├── Meeting 2
 │      └── Video
 │
 └── Meeting 3
        └── Video
```

مدیریت جلسات و محتوای ویدیویی از طریق پنل مدرس انجام می‌شود.

فایل‌های ویدیویی در مسیر Upload مربوط به پروژه نگهداری می‌شوند و هنگام حذف Course باید وابستگی‌های مربوط به جلسات و فایل‌های آن نیز به‌درستی مدیریت شوند.

---

# 🔎 Course Search

TeachLine دارای قابلیت جست‌وجوی دوره است.

کاربر می‌تواند دوره‌ها را بر اساس عبارت جست‌وجو پیدا کند و نتایج به‌صورت Card نمایش داده می‌شوند.

---

# 🎨 User Interface

TeachLine یک رابط کاربری:

- فارسی
- RTL
- Responsive
- مبتنی بر Bootstrap
- دارای Layoutهای جداگانه برای نقش‌های مختلف

دارد.

یکی از اصول مهم توسعه پروژه این است که **تغییرات Backend و معماری نباید بدون دلیل ظاهر UI موجود را خراب کنند.**

بنابراین در Refactoringهای آینده، حفظ ظاهر و تجربه کاربری صفحات موجود یک Constraint مهم پروژه است.

---

# 🧩 Composer

مدیریت Dependencies پروژه با Composer انجام می‌شود.

فایل‌های اصلی:

```text
composer.json
composer.lock
```

پس از Clone پروژه:

```bash
composer install
```

را اجرا کنید.

پوشه:

```text
vendor/
```

نباید در Git Commit شود.

---

# ⚙️ Environment Configuration

اطلاعات حساس و تنظیمات محیطی پروژه باید خارج از Source Code نگهداری شوند.

نمونه:

```env
APP_ENV=development

DB_HOST=localhost
DB_NAME=mast_teachline
DB_USER=root
DB_PASSWORD=

MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=
MAIL_PASSWORD=
MAIL_ENCRYPTION=tls
```

فایل `.env` نباید وارد Repository شود.

---

# 🚀 نصب و اجرای پروژه

## 1. Clone

```bash
git clone https://github.com/1MoMaSo2/Teachline.git
cd Teachline
```

## 2. نصب Dependencies

```bash
composer install
```

## 3. ساخت Database

در phpMyAdmin یک Database ایجاد کنید:

```text
mast_teachline
```

سپس:

```text
mast_teachline.sql
```

را Import کنید.

## 4. تنظیم Environment

فایل `.env` را بر اساس محیط Local خود تنظیم کنید.

## 5. اجرای پروژه

پروژه برای محیط توسعه با **Laragon** قابل اجرا است.

ساختار مسیر نمونه:

```text
C:\laragon\www\teachline
```

و Front Controller پروژه:

```text
public/index.php
```

است.

---

# 🧪 Development Status

TeachLine یک پروژه **در حال توسعه و Refactoring** است.

وضعیت کلی:

| بخش | وضعیت |
|---|---|
| Student Authentication | ✅ |
| Teacher Authentication | ✅ |
| Admin Authentication | ✅ |
| Student Area | ✅ |
| Teacher Dashboard | ✅ |
| Admin Dashboard | ✅ |
| Course Management | ✅ |
| Course Approval | ✅ |
| Course Meetings | ✅ |
| Video Management | ✅ |
| Course Search | ✅ |
| Email Activation | ✅ |
| Composer | ✅ |
| PDO Database Layer | ✅ |
| MVC Structure | 🚧 در حال توسعه |
| Security Hardening | 🚧 در حال توسعه |
| Automated Tests | 🗺️ برنامه آینده |
| REST API | 🗺️ برنامه آینده |
| Laravel | 🗺️ برنامه آینده |

---

# 🛣️ Roadmap

## Phase 1 — MVC Refactoring

- [x] Front Controller
- [x] Routing
- [x] Controllers
- [x] Models
- [x] Views
- [x] Layouts
- [x] Shared Components
- [ ] تکمیل Refactoring تمام بخش‌های قدیمی
- [ ] بهبود Separation of Concerns

## Phase 2 — Backend Quality

- [x] OOP
- [x] PDO
- [x] Composer
- [x] Environment Configuration
- [ ] Service Layer
- [ ] Repository Layer در بخش‌های موردنیاز
- [ ] تکمیل SOLID Refactoring

## Phase 3 — Security

- [x] Password Hashing
- [x] Prepared Statements
- [x] Authentication
- [x] Authorization
- [ ] CSRF Protection
- [ ] Secure Cookies
- [ ] Rate Limiting
- [ ] Secure Upload Validation
- [ ] Production Error Handling

## Phase 4 — Testing

- [ ] Unit Tests
- [ ] Feature Tests
- [ ] Authentication Tests
- [ ] Authorization Tests
- [ ] Course Management Tests

## Phase 5 — Laravel

پس از تثبیت معماری و تکمیل مسیر یادگیری PHP/MVC، یکی از مسیرهای آینده پروژه:

```text
TeachLine PHP MVC
        │
        ▼
Laravel
        │
        ├── Eloquent
        ├── Validation
        ├── Authentication
        ├── Mail
        ├── Storage
        └── API
```

هدف این مرحله استفاده از تجربه به‌دست‌آمده در PHP خام و MVC برای درک بهتر Laravel است.

---

# 📸 Screenshots

برای نمایش بهتر پروژه، تصاویر واقعی بخش‌های اصلی در آینده در این قسمت قرار خواهند گرفت:

- Home
- Course Listing
- Course Detail
- Student Area
- Teacher Dashboard
- Teacher Course Management
- Admin Dashboard
- Admin Course Management

---

# 🧠 چیزهایی که این پروژه برای من فراهم کرده است

TeachLine فقط یک پروژه CRUD نیست.

در طول توسعه آن مفاهیم مختلف Backend و Software Architecture به‌صورت عملی بررسی و پیاده‌سازی شده‌اند:

```text
PHP
 │
 ├── OOP
 │
 ├── Sessions
 │
 ├── Authentication
 │
 ├── Authorization
 │
 ├── PDO
 │
 ├── SQL
 │
 ├── CRUD
 │
 ├── File Upload
 │
 ├── Email / SMTP
 │
 ├── Composer
 │
 ├── Git / GitHub
 │
 └── Security
       │
       ▼
      MVC
       │
       ▼
    Clean Code
       │
       ▼
     Laravel
```

هدف این پروژه این است که مفاهیم Backend فقط به‌صورت تئوری یاد گرفته نشوند، بلکه در یک پروژه واقعی و قابل توسعه استفاده شوند.

---

# 🤝 Contribution

اگر قصد مشارکت در پروژه را دارید:

```bash
git clone https://github.com/1MoMaSo2/Teachline.git
cd Teachline
composer install
```

سپس یک Branch ایجاد کنید:

```bash
git checkout -b feature/my-feature
```

پس از اعمال تغییرات:

```bash
git add .
git commit -m "feat: add my feature"
git push origin feature/my-feature
```

سپس می‌توانید Pull Request ایجاد کنید.

---

# 📄 License

این پروژه در حال حاضر یک پروژه آموزشی و Portfolio است.

جزئیات License در صورت تعیین رسمی License برای Repository در این بخش اضافه خواهد شد.

---

<p align="center">
  <strong>TeachLine</strong>
  <br>
  Built with PHP • MySQL • PDO • MVC • Composer
  <br><br>
  <sub>From raw PHP to a structured learning platform.</sub>
</p>

</div>
