<?php
$title = 'Task list';

ob_start();
require 'nav.php';
?>

<div class="container">
    <p><a href="../">Go Home</a></p>

    <h1><?php echo $title . " (" . $taskCount . ")" ?></h1>
    <!-- If there's not yet data -->
    <?php if ($taskCount == 0) { ?>

        <div>
            <p>You have not yet added any tasks</p>
            <p><a href='../controllers/task.php'>Add task</a></p>
    </div>
    <?php } ?>

    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php
               // echo $task["title"] 
                echo "Title: " . $task["title"] . " (Date: " .
                $task["ttime"] . ", Project: "
                . $task["project"] .")";
                
                ?>
        </li>
        <?php endforeach; ?>
        </ul>
        </div>


        <?php
        $content = ob_get_clean();
        include 'layout.php'
        ?>