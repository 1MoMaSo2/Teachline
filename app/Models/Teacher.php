<?php
namespace App\Models;
class Teacher extends User
{
    protected string $table = 'teacher_mast';

    protected array $fillable = [
        'teacher_full_name_mast',
        'teacher_email_mast',
        'teacher_password_mast',
        'teacher_phone_number_mast',
        'teacher_gender_mast',
        'teacher_degree_mast',
        'teacher_field_study_mast',
        'teacher_teaching_history_mast',
        'teacher_status_mast',
        'teacher_date_created_account_mast',
        'teacher_role_mast'
    ];

    protected array $allowedColumns = [
        'teacher_email_mast',
        'teacher_phone_number_mast'
    ];

    public function findByEmail(string $email): ?array
    {
        return $this->findBy('teacher_email_mast', $email);
    }

    public function findByPhone(string $phone): ?array
    {
        return $this->findBy('teacher_phone_number_mast', $phone);
    }

    public function findPending(): array
    {
        $sql = "SELECT * FROM $this->table WHERE teacher_status_mast = :status ORDER BY id_teacher_mast DESC";
        $statement = $this->connection->prepare($sql);
        $statement->execute([':status' => 0]);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function verifyPassword(string $email , string $password): ?array
    {
        $teacher = $this->findByEmail($email);

        if (!$teacher) {
            return null;
        }

        if (!password_verify($password , $teacher['teacher_password_mast'])) {
            return null;
        }

        return $teacher;
    }

    public function approve(int $id): bool
    {
        return $this->update($id , ['teacher_status_mast' => 1]);
    }

    public function updatePassword(int $id , string $password): bool
    {
        return $this->update($id , ['teacher_password_mast' => password_hash($password , PASSWORD_DEFAULT)]);
    }
}