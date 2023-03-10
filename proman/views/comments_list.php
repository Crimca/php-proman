<?php
require "common.php";
$title = 'Comments';
$commentsCount = get_comments_count();
$comments = get_all_comments();
ob_start();
require 'nav.php';

if (isset($error_message)) {
    echo "<p class='message_error'>$error_message</p>";
}

if(isset($confirm_message)) {
    echo "<p class='message_ok'>$confirm_message</p>";
}
?>


<div class="container">
    <h1><?php echo $title . " (" . $commentsCount . ")" ?></h1>
    <?php if ($commentsCount == 0) { ?>

        <div>
            <p>There are no comments yet</p>
            <p><a href='../controllers/comments.php'>Post a comment</a></p>
    </div>
    <?php } ?>

    <ul>
        <?php foreach ($comments as $comment) : ?>
            <li>    
                <p>Username: <?php echo $comment['username']; ?></p>
                <p>Email: <?php echo $comment['email']; ?></p>
                <p>Comment: <?php echo $comment['comment']; ?></p>
                <p>Created at: <?php echo $comment['created_at']; ?></p>
        </li>
        <?php endforeach; ?>
        
        </div>


        <?php
        $content = ob_get_clean();
        include 'layout.php';
        ?>