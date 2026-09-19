<?php
namespace App\Models;
class TypeBook extends Model
{
    protected string $table = 'type_book_mast';

    protected array $fillable = [
        'admin_id_field_study_mast',
        'type_book_mast'
    ];

    public function all(): array
    {
        $sql = "SELECT id_type_book_mast, type_book_mast FROM {$this->table} ORDER BY id_type_book_mast DESC";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function existsByName(string $name): bool
    {
        $sql = "SELECT 1 FROM {$this->table} WHERE type_book_mast = :name LIMIT 1";
        $statement = $this->connection->prepare($sql);
        $statement->execute(['name' => $name]);
        return $statement->fetch() !== false;
    }
}