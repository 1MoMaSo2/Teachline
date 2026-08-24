<div dir="rtl">

# 🎓 TeachLine — پلتفرم آموزش آنلاین هنرستان

<p align="center">
  <strong>یادگیری، مدیریت و انتشار محتوای آموزشی؛ ساده، متمرکز و قابل توسعه.</strong>
</p>

<p align="center">
  یک سامانه آموزشی فارسی و راست‌چین برای مدیریت دوره‌های آموزشی هنرستان، هنرجویان، مدرس‌ها و محتوای دوره.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/MySQL%20%2F%20MariaDB-Database-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="Database">
  <img src="https://img.shields.io/badge/PDO-Data%20Access-8892BF?style=for-the-badge" alt="PDO">
  <img src="https://img.shields.io/badge/Bootstrap-UI-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/RTL-Persian-00A98F?style=for-the-badge" alt="RTL">
</p>

---

## ✨ معرفی

**TeachLine** یک پروژه آموزشی/کاربردی برای ساخت یک پلتفرم آموزش آنلاین با تمرکز بر فضای آموزشی هنرستان است.

ایده اصلی پروژه این است که سه گروه اصلی در یک سیستم واحد با یکدیگر کار کنند:

- 👨‍🎓 **هنرجو** → ثبت‌نام، ورود و مشاهده دوره‌ها و محتوای آموزشی
- 👨‍🏫 **مدرس** → ایجاد، ویرایش و مدیریت دوره‌ها و جلسات آموزشی
- 🛡️ **مدیر** → مدیریت مدرس‌ها، دوره‌ها، پایه‌ها، رشته‌ها و محتوای سامانه

TeachLine در حال حاضر به‌صورت یک **PHP Monolithic Web Application** پیاده‌سازی شده و برای اجرا روی محیط‌های لوکال مانند **Laragon / XAMPP** مناسب است.

> [!NOTE]
> این مخزن نسخه فعلی پروژه را نمایش می‌دهد و برخی بخش‌ها هنوز جای توسعه، بهینه‌سازی و بازطراحی معماری دارند.

---

## 🎯 چرا TeachLine؟

TeachLine فقط یک صفحه لیست دوره نیست؛ ساختار پروژه از ابتدا با نگاه به یک **سیستم آموزشی چندنقشی** طراحی شده است.

### جریان کلی سیستم

```text
                    ┌────────────────────┐
                    │      TeachLine     │
                    │  Learning Platform │
                    └─────────┬──────────┘
                              │
              ┌───────────────┼───────────────┐
              │               │               │
              ▼               ▼               ▼
        👨‍🎓 Student      👨‍🏫 Instructor    🛡️ Admin
              │               │               │
              ▼               ▼               ▼
        Browse Courses   Manage Courses   Manage System
        Course Details   Course Meetings  Approve Content
        Account          Edit / Delete    Manage Categories
```

---

## 🚀 قابلیت‌ها

### 👨‍🎓 بخش هنرجو

- ثبت‌نام هنرجو
- ورود به حساب
- فعال‌سازی حساب از طریق کد ایمیل
- انتخاب پایه تحصیلی
- انتخاب رشته
- مشاهده دسته‌بندی دوره‌ها
- مشاهده جزئیات دوره
- مشاهده جلسات آموزشی
- جست‌وجوی محتوا
- خروج از حساب

### 👨‍🏫 بخش مدرس

- ثبت‌نام مدرس
- ورود مدرس
- داشبورد اختصاصی
- ایجاد دوره
- ویرایش دوره
- حذف دوره
- مدیریت جلسات دوره
- افزودن محتوای آموزشی به دوره
- مشاهده دوره‌های ایجادشده

### 🛡️ بخش مدیریت

- داشبورد مدیریتی
- مشاهده آمار کلی سیستم
- مدیریت مدرس‌ها
- بررسی مدرس‌های در انتظار تأیید
- مشاهده مدرس‌های تأییدشده
- بررسی دوره‌های در انتظار تأیید
- تأیید دوره‌ها
- مدیریت پایه‌های تحصیلی
- مدیریت رشته‌های تحصیلی
- مدیریت نوع کتاب/محتوا
- مدیریت حساب مدیر

### 🎨 رابط کاربری

- رابط کاربری فارسی
- پشتیبانی از RTL
- استفاده از فونت Vazirmatn
- طراحی Responsive
- صفحات اختصاصی برای نقش‌های مختلف
- استفاده از Bootstrap و کتابخانه‌های UI
- داشبوردهای مدیریتی و مدرس

---

## 🧰 تکنولوژی‌های استفاده‌شده

| Technology | کاربرد |
|---|---|
| **PHP** | منطق سمت سرور |
| **PDO** | ارتباط با پایگاه داده |
| **MySQL / MariaDB** | ذخیره‌سازی اطلاعات |
| **HTML5** | ساختار صفحات |
| **CSS3** | استایل و طراحی |
| **JavaScript** | تعاملات سمت کاربر |
| **Bootstrap** | رابط کاربری Responsive |
| **PHPMailer** | ارسال ایمیل |
| **Vazirmatn** | تایپوگرافی فارسی |
| **ApexCharts / Chart.js** | نمودارهای داشبورد |
| **jQuery** | برخی تعاملات و پلاگین‌ها |

---

# 📁 ساختار پروژه

ساختار اصلی مخزن به‌صورت کلی:

```text
teachline/
│
├── admin/                       # 🛡️ پنل مدیریت
│   ├── admin-dashboard.php
│   ├── admin-sign-in.php
│   ├── admin-accept-courses-list.php
│   ├── admin-accept-instructors-list.php
│   ├── admin-add-education-basic.php
│   ├── admin-add-field-study.php
│   ├── admin-add-type-book.php
│   ├── include/
│   └── assets/
│
├── instructor/                  # 👨‍🏫 پنل مدرس
│   ├── instructor-dashboard.php
│   ├── instructor-sign-in.php
│   ├── instructor-sign-up.php
│   ├── instructor-create-course.php
│   ├── instructor-edit-course.php
│   ├── instructor-delete-course.php
│   └── instructor-manage-course-meetings.php
│
├── include/                     # ⚙️ فایل‌های مشترک
│   └── database/
│       └── connect.php
│
├── assets/                      # 🎨 منابع Front-end
│   ├── css/
│   ├── js/
│   ├── img/
│   ├── vendor/
│   └── fonts/
│
├── script/                      # 🧩 اسکریپت‌ها و کتابخانه‌ها
│
├── PHPMailer/                   # ✉️ سیستم ارسال ایمیل
│
├── index.php                    # 🏠 صفحه اصلی
├── sign-up.php                  # 📝 ثبت‌نام هنرجو
├── sign-in.php                  # 🔐 ورود هنرجو
├── course-categories.php        # 📚 دسته‌بندی دوره‌ها
├── course-detail.php            # 📖 جزئیات دوره
├── search-content.php            # 🔎 جست‌وجو
│
├── tenth-general-category.php
├── tenth-specialized-category.php
├── eleventh-general-category.php
├── eleventh-specialized-category.php
├── twelfth-general-category.php
├── twelfth-specialized-category.php
│
└── mast_teachline.sql            # 🗄️ ساختار و داده اولیه دیتابیس
```

---

# 🗄️ ساختار دیتابیس

پایگاه داده اصلی پروژه:

```text
mast_teachline
```

فایل SQL پروژه:

```text
mast_teachline.sql
```

برخی از جدول‌های اصلی:

```text
admin_mast
student_mast
teacher_mast

education_basic_mast
field_study_mast
type_book_mast

training_courses_mast
training_course_meetings_mast
```

### رابطه مفهومی داده‌ها

```text
Admin
 │
 ├── Education Basics
 ├── Fields of Study
 ├── Book / Content Types
 │
 ├── Teachers
 │      │
 │      └── Courses
 │              │
 │              └── Course Meetings
 │
 └── Course Approval

Student
 │
 ├── Education Basic
 ├── Field of Study
 └── Courses / Learning Content
```

---

# ⚙️ نصب و راه‌اندازی

## 1. پیش‌نیازها

برای اجرای پروژه به موارد زیر نیاز دارید:

- PHP 8.2 یا بالاتر
- MySQL یا MariaDB
- Apache یا وب‌سرور مشابه
- PDO و PDO MySQL
- مرورگر مدرن
- Git (اختیاری)
- Composer (برای مدیریت وابستگی‌های Composer در صورت نیاز)

> نسخه SQL موجود در مخزن با محیطی شامل **PHP 8.2.12** و **MariaDB 10.4.32** تولید شده است.

---

## 2. دریافت پروژه

```bash
git clone https://github.com/YOUR_USERNAME/teachline.git
cd teachline
```

یا مخزن را به‌صورت ZIP دریافت و Extract کنید.

---

## 3. قرار دادن پروژه در Web Root

### Laragon

پروژه را داخل:

```text
C:\laragon\www\
```

قرار دهید.

مثلاً:

```text
C:\laragon\www\teachline
```

سپس Laragon را اجرا کنید و Apache و MySQL/MariaDB را Start کنید.

### XAMPP

پروژه را داخل:

```text
C:\xampp\htdocs\
```

قرار دهید.

مثلاً:

```text
C:\xampp\htdocs\teachline
```

سپس Apache و MySQL را Start کنید.

---

# 🗃️ 4. ساخت دیتابیس

phpMyAdmin را باز کنید:

```text
http://localhost/phpmyadmin
```

یک دیتابیس با نام زیر بسازید:

```text
mast_teachline
```

ترجیحاً Collation را روی یکی از حالت‌های UTF-8 مانند:

```text
utf8mb4_unicode_ci
```

قرار دهید.

سپس فایل:

```text
mast_teachline.sql
```

را Import کنید.

> فایل SQL پروژه در حال حاضر ساختار جداول و داده‌های اولیه را نیز شامل می‌شود.

---

# 🔌 5. تنظیم اتصال دیتابیس

فایل زیر مسئول اتصال PHP به دیتابیس است:

```text
include/database/connect.php
```

ساختار اتصال فعلی برای محیط لوکال:

```php
$servername = "mysql:host=localhost;dbname=mast_teachline";
$username = "root";
$password = "";
```

اگر اطلاعات MySQL شما متفاوت است، همین فایل را متناسب با محیط خود تغییر دهید.

### پیشنهاد برای نسخه‌های آینده

بهتر است اطلاعات اتصال از کد خارج شده و از `.env` استفاده شود:

```env
DB_HOST=localhost
DB_NAME=mast_teachline
DB_USER=root
DB_PASSWORD=
```

و `.env` هرگز وارد Git نشود.

---

# 🌐 6. اجرای پروژه

پس از اجرای Apache و MySQL:

### Laragon

```text
http://teachline.test
```

یا در صورت استفاده از مسیر مستقیم:

```text
http://localhost/teachline
```

### XAMPP

```text
http://localhost/teachline
```

صفحه اصلی پروژه:

```text
index.php
```

---

# 🔐 حساب‌های سیستم

فایل SQL فعلی یک حساب مدیریتی اولیه ایجاد می‌کند.

> ⚠️ این اطلاعات صرفاً برای **محیط توسعه** هستند. بعد از نصب، رمز عبور حساب مدیر را تغییر دهید و قبل از Deploy روی سرور عمومی، حساب پیش‌فرض را حذف یا غیرفعال کنید.

همچنین حساب‌های هنرجو و مدرس از طریق فرم‌های ثبت‌نام خود سیستم ساخته می‌شوند.

---

# ✉️ تنظیم ارسال ایمیل

TeachLine برای ارسال ایمیل از **PHPMailer** و SMTP استفاده می‌کند.

مسیر:

```text
PHPMailer/
```

برای محیط واقعی باید تنظیمات SMTP را از کد خارج کنید و در Environment Variables نگه دارید.

نمونه:

```env
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=your-email@example.com
MAIL_PASSWORD=your-secret
MAIL_ENCRYPTION=tls
```

> [!IMPORTANT]
> هیچ Password، SMTP Credential، API Key یا Secret را داخل فایل‌های PHP یا GitHub قرار ندهید.

---

# 🧭 نحوه استفاده

## 👨‍🎓 هنرجو

جریان پیشنهادی:

```text
ثبت‌نام
   ↓
تکمیل اطلاعات
   ↓
دریافت کد فعال‌سازی ایمیل
   ↓
فعال‌سازی حساب
   ↓
ورود
   ↓
انتخاب پایه / رشته
   ↓
مشاهده دوره‌ها
   ↓
مشاهده جزئیات دوره
   ↓
مشاهده جلسات آموزشی
```

---

## 👨‍🏫 مدرس

```text
ثبت‌نام مدرس
   ↓
بررسی توسط مدیر
   ↓
تأیید مدرس
   ↓
ورود به پنل مدرس
   ↓
ایجاد دوره
   ↓
افزودن جلسات
   ↓
ویرایش / مدیریت دوره
   ↓
ارسال برای بررسی
   ↓
تأیید توسط مدیر
```

---

## 🛡️ مدیر

مدیر مرکز کنترل سیستم است:

```text
Admin Dashboard
      │
      ├── مدیریت مدرس‌ها
      │      ├── Waiting
      │      └── Approved
      │
      ├── مدیریت دوره‌ها
      │      ├── Waiting
      │      └── Approved
      │
      ├── مدیریت پایه‌ها
      ├── مدیریت رشته‌ها
      ├── مدیریت نوع کتاب
      └── مشاهده آمار سیستم
```

---

# 🧱 معماری فعلی پروژه

TeachLine در نسخه فعلی یک معماری **PHP Monolithic** دارد.

به‌صورت مفهومی:

```text
┌─────────────────────────────────────────────┐
│                 Browser / UI                │
│          HTML + CSS + JS + Bootstrap        │
└──────────────────────┬──────────────────────┘
                       │
                       ▼
┌─────────────────────────────────────────────┐
│                PHP Application              │
│                                             │
│  Student │ Instructor │ Admin │ Shared Code │
└──────────────────────┬──────────────────────┘
                       │
                       ▼
┌─────────────────────────────────────────────┐
│                     PDO                     │
└──────────────────────┬──────────────────────┘
                       │
                       ▼
┌─────────────────────────────────────────────┐
│               MySQL / MariaDB               │
└─────────────────────────────────────────────┘
```

این ساختار برای یادگیری PHP، SQL، Session، Authentication، CRUD و مفاهیم Backend مناسب است؛ اما برای رشد پروژه، مهاجرت به معماری MVC و سپس Laravel می‌تواند مسیر منطقی بعدی باشد.

---

# 🧪 وضعیت فعلی پروژه

| بخش | وضعیت |
|---|---|
| Landing / Home | ✅ |
| Student Authentication | ✅ |
| Instructor Authentication | ✅ |
| Admin Authentication | ✅ |
| Course Management | ✅ |
| Course Meetings | ✅ |
| Search | ✅ |
| Education Categories | ✅ |
| Admin Dashboard | ✅ |
| Instructor Dashboard | ✅ |
| Email Verification | ✅ |
| PDO Database Layer | ✅ |
| Responsive UI | ✅ |
| MVC Architecture | 🚧 در مسیر توسعه |
| Environment Configuration | 🚧 |
| Automated Tests | 🚧 |
| REST API | 🚧 |
| Laravel Migration | 🗺️ برنامه آینده |
| Mobile App API | 🗺️ برنامه آینده |

> وضعیت بالا بر اساس ساختار فعلی مخزن نوشته شده و به معنی کامل یا Production-ready بودن همه بخش‌ها نیست.

---

# 🔒 امنیت

اگر قصد دارید این پروژه را روی GitHub عمومی یا یک سرور واقعی قرار دهید، این بخش را جدی بگیرید.

### قبل از Public کردن Repository:

- [ ] تمام Passwordها و Secretها از Source Code حذف شوند.
- [ ] تنظیمات SMTP به Environment Variables منتقل شود.
- [ ] رمز عبور پیش‌فرض Admin تغییر کند.
- [ ] رمزهای کاربران با `password_hash()` ذخیره شوند.
- [ ] برای ورود از Session امن استفاده شود.
- [ ] CSRF Protection اضافه شود.
- [ ] Validation سمت Server کامل شود.
- [ ] Rate Limiting برای Login اضافه شود.
- [ ] Error Messageهای دیتابیس به کاربر نمایش داده نشوند.
- [ ] `.env` به `.gitignore` اضافه شود.
- [ ] فایل‌های IDE مانند `.idea/` در Repository قرار نگیرند.
- [ ] دسترسی مستقیم به فایل‌های حساس محدود شود.
- [ ] Uploadها به‌صورت امن مدیریت شوند.

> [!CAUTION]
> **اگر این Repository را Public می‌کنید، قبل از Push حتماً Source Code را برای Credential و Secret بررسی کنید.** اطلاعات SMTP یا رمزهای واقعی را حتی در Commitهای قبلی هم نباید نگه داشت؛ اگر قبلاً Push شده‌اند باید Credential مربوطه را Rotate/Revoke کنید.

---

# 🧹 پیشنهاد `.gitignore`

برای نسخه‌های بعدی پیشنهاد می‌شود حداقل موارد زیر در `.gitignore` باشند:

```gitignore
# Environment
.env
.env.*
!.env.example

# IDE
.idea/
.vscode/

# OS
.DS_Store
Thumbs.db

# Logs
*.log

# PHP
vendor/

# Temporary files
*.tmp
*.temp

# Local configuration
config.local.php
```

---

# 🛣️ Roadmap

TeachLine می‌تواند از یک پروژه PHP ساده به یک پلتفرم آموزشی کامل‌تر تبدیل شود.

### Phase 01 — Clean Architecture

- [ ] انتقال پروژه به ساختار MVC
- [ ] جداسازی Controller / Model / View
- [ ] ایجاد Service Layer
- [ ] ایجاد Repository Layer
- [ ] مدیریت بهتر Routing
- [ ] ایجاد Configuration مرکزی

### Phase 02 — Security

- [ ] Password Hashing
- [ ] CSRF Protection
- [ ] Input Validation
- [ ] Authorization Policies
- [ ] Secure Sessions
- [ ] Rate Limiting
- [ ] Secure File Upload

### Phase 03 — API

- [ ] REST API
- [ ] JSON Responses
- [ ] Authentication Token
- [ ] API Versioning
- [ ] Course API
- [ ] Student API
- [ ] Instructor API

### Phase 04 — Laravel

- [ ] Migration به Laravel
- [ ] Eloquent ORM
- [ ] Laravel Validation
- [ ] Laravel Authentication
- [ ] Laravel Mail
- [ ] Laravel Storage
- [ ] Laravel API Resources

### Phase 05 — Mobile

```text
             TeachLine API
                   │
          ┌────────┴────────┐
          ▼                 ▼
     Web Application    Mobile App
                           │
                    React Native / Flutter
```

---

# 🤝 مشارکت در پروژه

اگر قصد دارید در توسعه TeachLine مشارکت کنید:

```bash
git clone https://github.com/YOUR_USERNAME/teachline.git
cd teachline
```

یک Branch جدید بسازید:

```bash
git checkout -b feature/my-feature
```

تغییرات را Commit کنید:

```bash
git add .
git commit -m "feat: add my feature"
```

و سپس:

```bash
git push origin feature/my-feature
```

بعد از آن می‌توانید Pull Request ایجاد کنید.

### پیشنهاد برای Commit Message

```text
feat: add course search
fix: fix instructor authentication
refactor: improve database connection
security: protect admin authentication
docs: update installation guide
style: improve course card UI
```

---

# 📸 Screenshots

برای کامل‌تر شدن صفحه GitHub پیشنهاد می‌شود تصاویر واقعی پروژه در این بخش قرار بگیرند:

```text
docs/
└── screenshots/
    ├── home.png
    ├── courses.png
    ├── course-detail.png
    ├── student-dashboard.png
    ├── instructor-dashboard.png
    └── admin-dashboard.png
```

سپس:

```markdown
![TeachLine Home](docs/screenshots/home.png)
```

---

# 📌 نکات مهم برای توسعه‌دهندگان

### Database

اتصال دیتابیس در:

```text
include/database/connect.php
```

متمرکز شده است.

### Student Pages

صفحات عمومی و هنرجو عمدتاً در Root پروژه قرار دارند:

```text
index.php
sign-in.php
sign-up.php
course-categories.php
course-detail.php
search-content.php
```

### Instructor Module

تمام منطق اصلی مدرس در:

```text
instructor/
```

قرار گرفته است.

### Admin Module

تمام منطق مدیریتی در:

```text
admin/
```

قرار گرفته است.

### Email

منطق ارسال ایمیل و کتابخانه PHPMailer در:

```text
PHPMailer/
```

قرار دارد.

---

# 🌱 ایده پروژه

TeachLine با هدف ساخت یک تجربه آموزشی متمرکز برای هنرجویان شکل گرفته است؛ جایی که محتوای آموزشی بر اساس **پایه، رشته و نوع محتوا** سازمان‌دهی شود و مدرس و مدیر نیز هرکدام محیط کاری مشخص خود را داشته باشند.

این پروژه علاوه بر ارزش کاربردی، یک مسیر عملی برای یادگیری مفاهیم زیر است:

```text
PHP
 │
 ├── Variables / Functions
 ├── OOP
 ├── Sessions
 ├── Authentication
 ├── PDO
 ├── SQL
 ├── CRUD
 ├── File Structure
 ├── Email
 └── Backend Architecture
          │
          ▼
         MVC
          │
          ▼
       Laravel
          │
          ▼
       REST API
          │
          ▼
    Mobile Application
```

---

# ⭐ اگر این پروژه برایت مفید بود

اگر TeachLine برایت جالب بود، می‌توانی با یک ⭐ از پروژه حمایت کنی.

اگر ایده، پیشنهاد یا Bug داری، یک **Issue** ایجاد کن یا یک **Pull Request** بفرست.

---

<p align="center">
  <strong>TeachLine</strong>
  <br>
  Built with PHP • PDO • MySQL/MariaDB • Bootstrap
  <br><br>
  <sub>Learning is better when everything is connected.</sub>
</p>

</div>
