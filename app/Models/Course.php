<?php
namespace App\Models;
class Course extends Model
{
    protected string $table = 'training_courses_mast';
    protected array $fillable = [
        'teacher_id_training_courses_mast',
        'training_courses_name_mast',
        'training_courses_teacher_mast',
        'training_courses_description_mast',
        'training_courses_tag_mast',
        'training_courses_education_basic_mast',
        'training_courses_field_study_mast',
        'training_courses_type_book_mast',
        'training_courses_name_book_mast',
        'training_courses_lesson_mast',
        'training_courses_date_created_course_mast',
        'training_courses_date_update_course_mast',
    ];
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

    public function findByEducationAndType(string $education , string $type):array
    {
        $sql = "SELECT * FROM $this->table WHERE training_courses_education_basic_mast = :education AND training_courses_type_book_mast = :type";
        $statement = $this->connection->prepare($sql);
        $statement->execute([':education'=>$education , ':type'=>$type]);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findMeetingsByCourseName(string $courseName):?array
    {
        $sql = "SELECT * FROM training_course_meetings_mast WHERE training_course_meetings_course_name_mast = :course_name";
        $statement = $this->connection->prepare($sql);
        $statement->execute([':course_name'=>$courseName]);
        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findByTeacherId(int $teacherId): array
    {
        $sql = "SELECT * FROM {$this->table} WHERE teacher_id_training_courses_mast = :teacher_id ORDER BY id_training_courses_mast DESC";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['teacher_id' => $teacherId]);
        return $stmt->fetchAll();
    }

    public function countByTeacherId(int $teacherId): int
    {
        $sql = "SELECT COUNT(id_training_courses_mast) FROM {$this->table} WHERE teacher_id_training_courses_mast = :teacher_id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['teacher_id' => $teacherId]);
        return (int) $stmt->fetchColumn();
    }
}