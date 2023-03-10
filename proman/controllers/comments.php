<?php
require_once "../model/model.php";
require "common.php";
$username = '';
$email = '';
$comment = '';
$id = '';

if (isset($_GET['id'])) {
    list($id, $username, $email, $comment, $created_at ) = get_comments($_GET['id']);
}


if(isset($_POST['submit'])) {
    $username = escape(trim($_POST['username']));
    $email = escape(trim($_POST['email']));
    $comment = escape((trim($_POST['comment'])));

    if (empty($username) || empty($email)) {
        $error_message = "Username or email is empty";
    } elseif (empty($comment)) {
        $error_message = "Please write a comment";
    }
    } else {
            if (add_comment($id, $username, $email, $comment)) {
                header('Refresh:4; url=comments_list.php'); 
                } else {
                    $confirm_message = 'Your comment was added successfully! Moving to comments list...';
                }
            }

require "../views/comments.php";