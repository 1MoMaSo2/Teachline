<?php
namespace App\Models;

class Admin extends User
{
    protected string $table = 'admin_mast';
    protected array $fillable = [
        'admin_username_mast',
        'admin_email_mast',
    ];
    protected array $allowedColumns = [
        'admin_username_mast',
        'admin_email_mast',
    ];
}