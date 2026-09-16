<?php
function is_logged_in(): bool
{
    return !empty($_SESSION['login']);
}

function require_login(): void
{
    if (!is_logged_in()) {
        flash('error' , 'برای دسترسی به این بخش ابتدا وارد شوید');
        header('Location: ' . base_url('/login'));
        exit;
    }
}

function require_teacher(): void
{
    if (!is_logged_in() || ($_SESSION['user_type'] ?? null) !== 'teacher' || (int) ($_SESSION['teacher_id'] ?? 0) <= 0) {
        flash('warning' , 'برای دسترسی به بخش مدرس ابتدا وارد حساب مدرس شوید.');
        header('Location: ' . base_url('/login'));
        exit;
    }
}