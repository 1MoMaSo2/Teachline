<?php
namespace App\Models;
class CourseMeeting extends Model
{
    protected string $table = 'training_course_meetings_mast';

    public function create(array $data): int
    {
        $sql = "INSERT INTO {$this->table}
            (
                teacher_id_training_courses_meetings_mast,
                training_course_meetings_title_mast,
                training_course_meetings_link_mast,
                training_course_meetings_course_name_mast
            )
            VALUES
            (
                :teacher_id,
                :title,
                :link,
                :course_name
            )";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            'teacher_id' => $data['teacher_id'],
            'title' => $data['title'],
            'link' => $data['link'],
            'course_name' => $data['course_name'],
        ]);

        return (int) $this->connection->lastInsertId();
    }

    public function findByCourseName(string $courseName): array
    {
        $sql = "SELECT * FROM {$this->table} WHERE training_course_meetings_course_name_mast = :course_name";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            'course_name' => $courseName,
        ]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function deleteByIdAndCourseName(int $meetingId , string $courseName): bool
    {
        $sql = "DELETE FROM {$this->table} WHERE id_training_course_meetings_mast = :meeting_id AND training_course_meetings_course_name_mast = :course_name LIMIT 1";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            'meeting_id' => $meetingId,
            'course_name' => $courseName,
        ]);
        return $stmt->rowCount() > 0;
    }
}