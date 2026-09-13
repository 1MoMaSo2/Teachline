<?php
namespace App\Models;
class FieldStudy extends Model
{
    protected string $table = 'field_study_mast';

    public function all(): array
    {
        $sql = "SELECT id_field_study_mast , field_study_name_mast FROM {$this->table} ORDER BY id_field_study_mast ASC";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function existsByName(string $name): bool
    {
        $sql = "SELECT 1 FROM {$this->table} WHERE field_study_name_mast = :name LIMIT 1";
        $statement = $this->connection->prepare($sql);
        $statement->execute(['name' => $name]);
        return $statement->fetch() !== false;
    }
}