<?php
$json = file_get_contents('books.json');
$bookJson = json_decode($json, true);
$title = $_POST['title'];
$author = $_POST['authorName'];
$available = $_POST['available'];
$available = $_POST['pages'];
$available = $_POST['isbn'];
?>
<table border="1" width="900">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>Isbn</th>
    </tr>
    <?php foreach ($bookJson as $p) {
    ?>
        <tr>
            <td><?php echo $p['title']; ?></td>
            <td><?php echo $p['author']; ?></td>
            <td><?php echo $p['available']; ?></td>
            <td><?php echo $p['pages']; ?></td>
            <td><?php echo $p['isbn']; ?></td>
        </tr>
    <?php
    }

    ?>

</table>
<?php
if ($bookJson) {
    echo "success";
} else
    echo "Failed";
?>