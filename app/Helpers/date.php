<?php
if (!function_exists('jalali_date')) {
    function jalali_date(string $format , ?int $timestamp): string
    {
        if ($timestamp === null) {
            return '-';
        }

        require_once __DIR__ . '/../../script/jdf/jdf.php';

        return jdate($format, $timestamp);
    }
}