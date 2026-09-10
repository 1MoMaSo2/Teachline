<?php
function base_url(string $path = ''): string
{
    return rtrim(BASE_URL , '/') . '/' . ltrim($path, '/');
}

function asset(string $path): string
{
    return base_url('assets/' . ltrim($path, '/'));
}