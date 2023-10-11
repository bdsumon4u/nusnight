<?php
$json =file_get_contents('books.json');
$bookJson =json_decode($json,true);
$title = $_POST['title'];
$author =$_POST['authorName'];
$available=$_POST['available'];
$available=$_POST['pages'];
$available=$_POST['isbn'];
?>
<?php
  if($bookJson)
  {
     echo "success";
  }
  else
  echo "Failed";
?>
