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
}