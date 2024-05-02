<h1>page1</h1>

<?php

session_start();
if(isset($_SESSION['name'])){
  echo "welcome1";
}
else{
  header ('Location: loginView.html');
}



?>