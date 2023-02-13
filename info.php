<?php
if(isset($_POST['name']) && (isset($_POST['city']))) {
    setcookie('name', $_POST['name']);
    setcookie('city', $_POST['city']);
    setcookie('language', $_POST['language']);
    header('Location: info.php');
    exit;
}

// täällä voi käsitellä evästedataa esim. if ($_COOKIE['city']=='Vaasa') jne.
if (($_COOKIE['language']=='finnish' )){
   echo "Hei, ".$_COOKIE['name']."!";
}

elseif (($_COOKIE['language']=='swedish')){
echo "Hej, ".$_COOKIE['name']."!";
}

elseif (($_COOKIE['language']=='english')){
  echo "Hello, ".$_COOKIE['name']."!";
  }

elseif (($_COOKIE['city']=='Vaasa')){
  echo "Hello, ".$_COOKIE['name']."!";
  echo "<img src='images/vaasa.png'>";
}

elseif (($_COOKIE['city']=='Turku')){
  echo "Hello, ".$_COOKIE['name']."!";
  echo "<img src='images/turku.png'>";
}

?>