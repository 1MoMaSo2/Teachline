<!--<!DOCTYPE html>-->
<!--<html lang="fa">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
<!--    <title>Students</title>-->
<!--</head>-->
<!--<body>-->

<h1>Students</h1>

<?php if (empty($students)): ?>

    <p>No students found.</p>

<?php else: ?>

    <ul>
        <?php foreach ($students as $student): ?>

            <li>
                <?= htmlspecialchars($student['student_full_name_mast']) ?>
                -
                <?= htmlspecialchars($student['student_email_mast']) ?>
            </li>

        <?php endforeach; ?>
    </ul>

<?php endif; ?>

<!--</body>-->
<!--</html>-->