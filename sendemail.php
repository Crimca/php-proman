<?php

require("header.php");

require("functions.php");

// make content ready
$to = isset($_POST['email']) ? $_POST['email'] : '';
$subject = "Runo";
$txt = randomQuote();
$headers = "From: pressa@suomi.fi";
$BlockedNames = array('tul@vamk.fi', 'tero.ulvinen@vamk.fi');


// call sendEmail function
if (empty($_POST['email']))
{
    echo "Anna sähköposti";
}
elseif(in_array($to, $BlockedNames)) {
echo "Blocked";
}

elseif (sendEmail($to, $subject, $txt, $headers)) {
    echo "Mail sent!";
} else {
    echo "Error: Mail was not sent!";
}

require("footer.php");
?>