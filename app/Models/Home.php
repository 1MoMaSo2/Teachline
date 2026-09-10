<?php
namespace App\Models;
class Home extends Model
{
    public function countCourses(): int
    {
        return $this->countRows('training_courses_mast' , 'id_training_courses_mast');
    }
    public function countMeetings(): int
    {
        return $this->countRows('training_course_meetings_mast' , 'id_training_course_meetings_mast');
    }
    public function countStudents(): int
    {
        return $this->countRows('student_mast' , 'id_student_mast');
    }
    public function countTeachers(): int
    {
        return $this->countRows('teacher_mast' , 'id_teacher_mast');
    }
    private function countRows(string $table, string $column): int
    {
        $sql = "SELECT COUNT($column) FROM $table";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return (int) $statement->fetchColumn();
    }
}