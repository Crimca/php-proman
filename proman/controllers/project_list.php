<?php
// controllers/project_list.php
require_once "../model/model.php";

if (isset($_POST['delete'])) {
    if (delete_project($_POST['delete'])) {
        header('location: project_list.php?confirm_message=Project+deleted');
        exit;
    } else {
        header('location: project_list.php?error_message=Couldn\'t+delete+the+project');
        exit;
    }
}

if (isset($_GET['error_message'])) {
    $error_message = $_GET['error message'];
} else if (isset($_GET['confirm message'])) {
    $confirm_message = $_GET['confirm message'];
}

$projects = get_all_projects();
$projectCount = get_all_projects_count();

require "../views/project_list.php";
?>