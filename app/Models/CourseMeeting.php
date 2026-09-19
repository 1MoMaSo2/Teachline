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
                course_id_training_course_meetings_mast,
                training_course_meetings_title_mast,
                training_course_meetings_link_mast
            )
            VALUES
            (
                :teacher_id,
                :course_id,
                :title,
                :link
            )";

        $stmt = $this->connection->prepare($sql);

        $stmt->execute([
            'teacher_id' => $data['teacher_id'],
            'course_id' => $data['course_id'],
            'title' => $data['title'],
            'link' => $data['link'],
        ]);

        return (int) $this->connection->lastInsertId();
    }

    public function findByCourseId(int $courseId): array
    {
        $sql = "SELECT * FROM {$this->table} WHERE course_id_training_course_meetings_mast = :course_id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(['course_id' => $courseId]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function findByIdAndCourseId(int $meetingId , int $courseId): ?array {
        $sql = "SELECT *FROM {$this->table} WHERE id_training_course_meetings_mast = :meeting_id AND course_id_training_course_meetings_mast = :course_id LIMIT 1";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            'meeting_id' => $meetingId,
            'course_id' => $courseId,
        ]);
        $meeting = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $meeting ?: null;
    }

    public function deleteByIdAndCourseId(int $meetingId , int $courseId): bool {
        $sql = "DELETE FROM {$this->table} WHERE id_training_course_meetings_mast = :meeting_id AND course_id_training_course_meetings_mast = :course_id LIMIT 1";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute([
            'meeting_id' => $meetingId,
            'course_id' => $courseId,
        ]);
        return $stmt->rowCount() > 0;
    }

    public function deleteByCourseId(int $courseId): bool
    {
        $sql = "DELETE FROM {$this->table} WHERE course_id_training_course_meetings_mast = :course_id";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute(['course_id' => $courseId]);
    }
}