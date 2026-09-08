<?php
namespace App\Models;

class Teacher extends User
{
    protected string $table = 'teacher_mast';
    protected array $fillable = [
        'teacher_full_name_mast',
        'teacher_email_mast',
        'teacher_phone_number_mast',
        'teacher_gender_mast',
        'teacher_degree_mast',
        'teacher_field_study_mast',
        'teacher_teaching_history_mast'
    ];
}