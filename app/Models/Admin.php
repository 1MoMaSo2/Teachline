<?php
namespace App\Models;
class Admin extends User
{
    protected string $table = 'admin_mast';
    protected array $fillable = [
        'admin_username_mast',
        'admin_email_mast',
        'admin_password_mast',
        'admin_role_mast',
    ];

    protected array $allowedColumns = [
        'admin_username_mast',
        'admin_email_mast',
    ];

    public function findByEmail(string $email): ?array
    {
        return $this->findBy('admin_email_mast' , $email);
    }

    public function verifyPassword(string $email , string $password): ?array
    {
        $admin = $this->findByEmail($email);

        if (!$admin) {
            return null;
        }

        if (!password_verify($password , $admin['admin_password_mast'])) {
            return null;
        }

        return $admin;
    }

    public function updatePassword(int $id , string $password): bool
    {
        return $this->update($id, [
            'admin_password_mast' => password_hash($password , PASSWORD_DEFAULT),
        ]);
    }
}