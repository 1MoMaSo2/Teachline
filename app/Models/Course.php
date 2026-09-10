<?php
namespace App\Models;
class Course extends Model
{
    protected string $table = 'training_courses_mast';
    protected array $allowedColumns = ['training_courses_name_mast'];
    public function findByName(string $name):?array
    {
        $sql = "SELECT * FROM $this->table WHERE training_courses_name_mast = :name LIMIT 1";
        $statement = $this->connection->prepare($sql);
        $statement->execute([':name'=>$name]);
        $course = $statement->fetch(\PDO::FETCH_ASSOC);
        return $course ?: null;
    }
    public function searchByName(string $search):?array
    {
        $sql = "SELECT * FROM $this->table WHERE training_courses_name_mast LIKE :search";
        $statement = $this->connection->prepare($sql);
        $statement->execute([':search' => '%' . $search . '%']);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
    public function findMeetingsByCourseName(string $courseName):?array
    {
        $sql = "SELECT * FROM training_course_meetings_mast WHERE training_course_meetings_course_name_mast = :course_name";
        $statement = $this->connection->prepare($sql);
        $statement->execute([':course_name'=>$courseName]);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}