<?php
if (!empty($_GET['id'])) {
    $title = 'Update Task';
} else {
    $title = 'Add Task';
}

ob_start();
require "nav.php";
?>

<div class="container">

<h1><?php echo $title ?></h1>

<?php
if (isset($error_message)) {
    echo "<p class='message_error'>$error_message</p>";
}

if(isset($confirm_message)) {
    echo "<p class='message_ok'>$confirm_message</p>";
}
?>

<form name="new-form" method="post">
    <label for="project">
        <span>Project:</span>
        <strong><abbr title="required">*</abbr></strong>
</label>

<select name="project" id="project required">
<option value="">Select a project:</option>
<?php foreach ($projects as $project) { ?>
    <option value="<?php echo $project['id'] ?>">
    <?php echo $project['title'] ?>
</option>
    <?php } ?>
</select>

<label for="category">
    <span>Title:</span>
    <strong><abbr title="required">*</abbr></strong>
</label>
<input type="text" placeholder="New task" name="task_name" id="task_name" required>

<label for="task_date">
        <span>Date:</span>
        <strong><abbr title="required">*</abbr></strong>
        </label>
        <input type="date" id="task_date" name="task_date">

<label for="task_time">
        <span>Time:</span>
        <strong><abbr title="required">*</abbr></strong>
</label>
<input type="text" name="task_time" id="task_time" required>

<?php if (!empty($id)) { ?>
    <input type="hidden" name="id" value="<?php echo $id ?>" />
    <?php } ?>
<input type="submit" name="submit"
value="<?php echo (isset($id) and (!empty($id))) ? "Update" : "Add"; ?>">

</form>
</div>


<?php
$content = ob_get_clean();
include 'layout.php';
?>