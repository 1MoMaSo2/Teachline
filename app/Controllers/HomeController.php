<?php
namespace App\Controllers;
use App\Core\View;
use App\Models\Home;
class HomeController
{
    public function __construct(private Home $home, private View $view) {}

    public function index(): void
    {
        $statistics = [
            'courses' => $this->home->countCourses(),
            'meetings' => $this->home->countMeetings(),
            'students' => $this->home->countStudents(),
            'teachers' => $this->home->countTeachers(),
        ];

        $user = [
            'loggedIn' => isset($_SESSION['login']) ,
            'fullName' => $_SESSION['full_name'] ?? null
        ];

        $this->view->render('home/index', [
            'title' => 'TeachLine',
            'statistics' => $statistics
        ]);
    }
}