<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
</head>
<body>

<h1>Teachers</h1>

<?php if (empty($teachers)) : ?>

    <p>No students found.</p>

<?php else: ?>

    <ul>
        <?php foreach ($teachers as $teacher): ?>

            <li>
                <?= htmlspecialchars($teacher['teacher_full_name_mast']) ?>
                -
                <?= htmlspecialchars($teacher['teacher_email_mast']) ?>
            </li>

        <?php endforeach; ?>
    </ul>

<?php endif; ?>

</body>
</html>