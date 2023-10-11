<?php
$json = file_get_contents('books.json');
$bookJson = json_decode($json, true);
?>
<a href="form.php">Add Book</a>
<table border="1" width="900">
    <tr>
        <th>Title</th>
        <th>Author</th>
        <th>Available</th>
        <th>Pages</th>
        <th>Isbn</th>
        <th>Actions</th>
    </tr>
    <?php $index = 0; ?>
    <?php foreach ($bookJson as $p) {
    ?>
        <tr>
            <td><?php echo $p['title']; ?></td>
            <td><?php echo $p['author']; ?></td>
            <td><?php echo $p['available']; ?></td>
            <td><?php echo $p['pages']; ?></td>
            <td><?php echo $p['isbn']; ?></td>
            <td>
                <a href="edit.php?index=<?php echo $index ?>">Edit</a>

                <form action="deleteProcess.php" method="POST">
                    <input type="hidden" name="index" value="<?php echo $index ?>">
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    <?php
        $index++;
    }

    ?>

</table>