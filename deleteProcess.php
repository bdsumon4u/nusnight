<?php
$json =file_get_contents('books.json');
$bookJson =json_decode($json,true);
$title = $_POST['title'];
$author =$_POST['authorName'];
$available=$_POST['available'];
$pages=$_POST['pages'];
$isbn=$_POST['isbn'];

$index=$_POST['indexToEdit'];
?>
<?php
  if($bookJson)
  {
    $newBookArray = [
      'title' => $title,
      'author' => $author,
      'available' => $available,
      'pages' => $pages,
      'isbn' => $isbn,
    ];

    $bookJson[$index] = $newBookArray; # instead of appending, update book info at that index

    $bookJson = json_encode($bookJson); # convert php array to json

    file_put_contents('books.json', $bookJson); # rewrite the json file with new json

    header('Location: index.php'); # redirect to the home (index) page
  }
  else
  echo "Failed";
?>
