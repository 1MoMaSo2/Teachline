<?php
namespace App\Models;
class Student extends User
{
    protected string $table = 'student_mast';
    protected array $fillable = [
        'student_full_name_mast',
        'student_email_mast',
        'student_password_mast',
        'student_phone_number_mast',
        'student_education_basic_mast',
        'student_field_study_mast',
        'student_date_created_account_mast',
        'student_active_code_mast',
        'student_status_mast'
    ];

    protected array $allowedColumns = [
        'student_email_mast',
        'student_phone_number_mast'
    ];

    public function findByEmail(string $email):?array
    {
        return $this->findBy('student_email_mast' , $email);
    }
}