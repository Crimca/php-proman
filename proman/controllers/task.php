<?php
require_once "../model/model.php";
require "common.php";
$task_title = '';

if (isset($_GET['id'])) {
    list($id, $project_title, $category) = get_task($_GET['id']);
}

if(isset($_POST['submit'])) {
    $id = null;
if (isset($_POST['id'])) {
    $id = $_POST['id'];
}
}

$projects = get_all_projects();

if(isset($_POST['submit'])) {
    $project_id = escape(trim($_POST['project']));
    $title = escape(trim($_POST['task_name']));
    $date_task = escape(($_POST['task_date']));
    $time_task = escape(trim($_POST['task_time']));

    if (empty($title) || empty($date_task)) {
        $error_message = "Title or date is empty";
    } elseif (empty($project_id)) {
        $error_message = "Please choose a project";
    } elseif (empty($time_task)) {
        $error_message = "Please choose a time for the task";
    } else {
        if (titleExists("tasks", $title)) {
            $error_message = "I'm sorry, but it looks like '" . $title . "' already exists";
        } else {
            if (add_task($project_id, $title, $date_task, $time_task, $id)) {
                header('Refresh:4; url=task_list.php'); 
                if (!empty($id)) {
                    $confirm_message = escape($title). ' updated successfully! Moving to task list...';
                } else {
                    $confirm_message = escape($title). ' added successfully! Moving to task list...';
                }
            }
        }
    }
}

require "../views/task.php";