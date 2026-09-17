<?php
namespace App\Controllers\Admin;
use App\Core\View;
class AdminDashboardController
{
    public function __construct(private View $view) {}

    public function index(): void
    {
        $this->view->render('admin/dashboard/index' , [] , 'admin');
    }
}