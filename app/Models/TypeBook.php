<?php
namespace App\Models;
class TypeBook extends Model
{
    protected string $table = 'type_book_mast';

    public function all(): array
    {
        $sql = "SELECT type_book_mast FROM {$this->table} ORDER BY type_book_mast ASC";
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