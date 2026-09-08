<?php
namespace App\Models;
use PDO;

abstract class Model
{
    protected PDO $connection;

    protected string $table;

    public function __construct(PDO $connection){
        $this->connection = $connection;
    }

    public function fidd(int $id):? array
    {
        $sql = "SELECT * FROM $this->table WHERE id_$this->table = :id LIMIT 1";
        $statment = $this->connection->prepare($sql);
        $statment->execute([':id' => $id]);
        $result = $statment->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }

    public function fineAll(): array
    {
        $sql = "SELECT * FROM $this->table";
        $statment = $this->connection->prepare($sql);
        $statment->execute();
        return $statment->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findBy(string $column , mixed $value):? array
    {
        $sql = "SELECT * FROM $this->table WHERE $column = :value LIMIT 1";
        $statment = $this->connection->prepare($sql);
        $statment->execute([':value' => $value]);
        $result = $statment->fetch(PDO::FETCH_ASSOC);
        return $result ?: null;
    }

    public function create(array $data):int
    {
        $columns = array_keys($data);
        $placeholders = array_map(fn(string $column): string => ':' . $column , $columns);
        $sql = sprintf('INSERT INTO %s (%s) VALUES (:%s)' , $this->table , implode(', ' , $columns) , implode(', ' , $placeholders));
        $statment = $this->connection->prepare($sql);
        $statment->execute($data);
        return $this->connection->lastInsertId();
    }

    public function update(int $id, array $data):bool
    {
        $set = [];
        foreach (array_keys($data) as $column) {
            $set[] = "$column = :$column";
        }
        $sql = sprintf('UPDATE %s SET %s WHERE id_%s = :id' ,  $this->table , implode(', ' , $set) , $this->table);
        $statment = $this->connection->prepare($sql);
        $data[':id'] = $id;
        return $statment->execute($data);
    }

    public function delete(int $id):bool
    {
        $sql = "DELETE FROM $this->table WHERE id_$this->table = :id";
        $statment = $this->connection->prepare($sql);
        return $statment->execute([':id' => $id]);
    }
}