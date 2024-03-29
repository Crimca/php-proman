<?php
require "common.php";
$title = 'Project list';

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
    <h1><?php echo $title . " (" . $projectCount . ")" ?></h1>
    <?php if ($projectCount == 0) { ?>

        <div>
            <p>You have not yet added any project</p>
            <p><a href='../controllers/project.php'>Add project</a></p>
    </div>
    <?php } ?>

    <ul>
        <?php foreach ($projects as $project) : ?>
            <li>    
                <a href="../controllers/project.php?id=<?php echo $project['id']; ?>">
                <?php echo escape($project["title"]) ?>
        </a>

        <form name="delete-form" method="post">
            <input type="hidden" value="<?php echo $project["id"]; ?>" name="delete">
            <input type="submit" value="Delete">
        </form>

        </li>
        <?php endforeach; ?>
        
        </div>


        <?php
        $content = ob_get_clean();
        include 'layout.php';
        ?>