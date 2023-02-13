<?php
require_once "../model/model.php";
require "common.php";

$projects = get_all_projects(); //opettajan koodia vaihe 7

if(isset($_POST['submit'])) {
    $id = escape(trim($_POST['project']));
    $title = escape($_POST['title']);
    $date = escape($_POST['date']);
    $time = escape($_POST['time']);

    if (empty($title) || empty($date)) {
        $error_message = "Title or date is empty";
    } else {
        if (titleExists("tasks", $title)) {
            $error_message = "I'm sorry, but looks like \"" . $title . "\" already exists";
        } else {
        add_task($project, $title, $date, $time);
        header('Refresh:4; url=task_list.php');
        $confirm_message = 'Task added successfully! Moving to task list...';
        }
    }
}

require "../views/task.php";