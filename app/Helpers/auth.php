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