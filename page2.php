<h1>page2</h1>

<?php

session_start();
if(isset($_SESSION['name'])){
  echo "welcome2";
}
else{
  header ('Location: loginView.html');
}

?>