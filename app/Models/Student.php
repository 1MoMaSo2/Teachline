<?php
namespace App\Models;
class Student extends User
{
    protected string $table = 'student_mast';
    protected array $fillable = [
        'student_full_name_mast',
        'student_email_mast',
        'student_phone_number_mast',
        'student_education_basic_mast',
        'student_field_study_mast'
    ];

    protected array $allowedColumns = [
        'student_email_mast',
        'student_phone_number_mast'
    ];
}