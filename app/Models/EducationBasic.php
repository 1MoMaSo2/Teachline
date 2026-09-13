<?php
namespace App\Models;
class EducationBasic extends Model
{
    protected string $table = 'education_basic_mast';

    public function all(): array
    {
        $sql = "SELECT id_education_basic_mast , education_basic_name_mast FROM {$this->table} ORDER BY id_education_basic_mast ASC";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll();
    }

    public function existsByName(string $name): bool
    {
        $sql = "SELECT 1 FROM {$this->table} WHERE education_basic_name_mast = :name LIMIT 1";
        $statement = $this->connection->prepare($sql);
        $statement->execute(['name' => $name]);
        return $statement->fetch() !== false;
    }
}