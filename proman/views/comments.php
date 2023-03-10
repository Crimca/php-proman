<?php
$title = 'Post a comment';

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
  <label for="username">
    <span>Username:</span>
    <strong><abbr title="required">*</abbr></strong>
  </label> <input type="text" name="username" required>
  
  <label for="email">
    <span>Email:</span>
    <strong><abbr title="required">*</abbr></strong>
  </label>
  <input type="email" name="email" required>
 
  <label for="comment">
    <span>Comment:</span>
    <strong><abbr title="required">*</abbr></strong>
  </label>
  <textarea name="comment" required></textarea>
  <br>
  <input type="submit" value="submit">
</form>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>