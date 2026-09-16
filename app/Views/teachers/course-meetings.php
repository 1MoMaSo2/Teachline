<div class="card">
    <div class="card-body">

        <form
                action="/teachline/public/teacher/course-meetings?id=<?= (int)$course['id_training_courses_mast'] ?>"
                method="POST"
                enctype="multipart/form-data"
                class="mb-4"
        >

            <div class="mb-3">
                <label for="title" class="form-label">
                    عنوان جلسه
                </label>

                <input
                        type="text"
                        name="title"
                        id="title"
                        class="form-control"
                        placeholder="عنوان جلسه را وارد کنید"
                >
            </div>

            <div class="mb-3">
                <label for="fileToUpload" class="form-label">
                    فایل ویدیو
                </label>

                <input
                        type="file"
                        name="fileToUpload"
                        id="fileToUpload"
                        class="form-control"
                        accept=".mp4,.mkv"
                >
            </div>

            <button type="submit" class="btn btn-primary">
                ثبت جلسه
            </button>

        </form>

        <?php if (empty($meetings)): ?>

            <div class="alert alert-info">
                هنوز جلسه‌ای برای این دوره ثبت نشده است.
            </div>

        <?php else: ?>

            <div class="table-responsive">
                <table class="table table-bordered align-middle">

                    <thead>
                    <tr>
                        <th>عنوان جلسه</th>
                        <th>ویدیو</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach ($meetings as $meeting): ?>

                        <tr>
                            <td>
                                <?= htmlspecialchars(
                                    $meeting['training_course_meetings_title_mast'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>
                            </td>

                            <td>
                                <a
                                        href="<?= htmlspecialchars(asset('upload/course/' . $meeting['training_course_meetings_link_mast']) , ENT_QUOTES , 'UTF-8') ?>"
                                        target="_blank"
                                        class="btn btn-sm btn-primary">
                                    مشاهده ویدیو
                                </a>

                                <a
                                        href="/teachline/public/teacher/course-meetings/delete?id=<?= (int)$course['id_training_courses_mast'] ?>&meeting_id=<?= (int)$meeting['id_training_course_meetings_mast'] ?>"
                                        class="btn btn-sm btn-danger delete-meeting">
                                    حذف
                                </a>
                            </td>
                        </tr>

                    <?php endforeach; ?>
                    </tbody>

                </table>
            </div>

        <?php endif; ?>

    </div>
</div>