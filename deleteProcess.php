<?php
$json =file_get_contents('books.json');
$bookJson =json_decode($json,true);

$index=$_POST['index'];
?>
<?php
  if($bookJson)
  {
    unset($bookJson[$index]); # delete that index

    $bookJson = json_encode($bookJson); # convert php array to json

    file_put_contents('books.json', $bookJson); # rewrite the json file with new json

    header('Location: index.php'); # redirect to the home (index) page
  }
  else
  echo "Failed";
?>
