<?php
    include 'config.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $listId = isset($_POST['listId']) ? intval($_POST['listId']) : 0;

        if ($listId > 0) {
            $deleteQuery = "DELETE FROM lists WHERE id = $listId";
            if ($mysqli->query($deleteQuery)) {
                echo "1";
            } else {
                echo "-1";
            }
        } else {
            echo "-2";
        }
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete List</title>
</head>
<body>
    <h2>Delete List</h2>
    <form action="" method="post">
        <label for="listId">List ID:</label>
        <input type="number" name="listId" required>
        <input type="submit" value="Delete List">
    </form>
</body>
</html>
