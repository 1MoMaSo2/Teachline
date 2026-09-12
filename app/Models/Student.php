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
        'student_phone_number_mast',
        'student_active_code_mast'
    ];

    public function findByEmail(string $email):?array
    {
        return $this->findBy('student_email_mast' , $email);
    }

    public function findByPhone(string $phoneNumber):?array
    {
        return $this->findBy('student_phone_number_mast' , $phoneNumber);
    }

    public function findByActiveCode(string $activeCode):?array
    {
        return $this->findBy('student_active_code_mast' , $activeCode);
    }

    public function activate(int $id): bool
    {
        return $this->update($id , ['student_status_mast' => 1]);
    }

    public function verifyPassword(string $email , string $password): ?array
    {
        $student = $this->findByEmail($email);
        if (!$student) {
            return null;
        }

        if (!password_verify($password , $student['student_password_mast'])) {
            return null;
        }

        return $student;
    }

    public function updatePassword(int $id , string $hashedPassword): bool
    {
        return $this->update($id , [
            'student_password_mast' => $hashedPassword
        ]);
    }
}