<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $listId = isset($_POST['listId']) ? intval($_POST['listId']) : 0;
    $difficulty = isset($_POST['difficulty']) ? intval($_POST['difficulty']) : -1;
    $featured = isset($_POST['featured']) ? 1 : 0;

    if ($listId > 0) {
        $updateDifficultyQuery = "UPDATE lists SET difficulty = $difficulty WHERE id = $listId";
        if (!$mysqli->query($updateDifficultyQuery)) {
            echo "-1";
        }

        if ($featured) {
            $updateFeaturedQuery = "UPDATE lists SET featuredIdx = $listId WHERE id = $listId";
            if (!$mysqli->query($updateFeaturedQuery)) {
                echo "-1";
            }
        }

        if (!$featured) {
            $updateFeaturedQuery = "UPDATE lists SET featuredIdx = NULL WHERE id = $listId";
            if (!$mysqli->query($updateFeaturedQuery)) {
                echo "Error updating featured index: " . $mysqli->error;
            }
        }

        echo "1";
    } else {
        echo "-1";
    }

die();
}

$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rate List</title>
</head>
<body>
    <h2>Rate List</h2>

    <form action="" method="post">
        <label for="listId">List ID:</label>
        <input type="number" name="listId" required>

        <label for="difficulty">Difficulty:</label>
        <select name="difficulty">
            <option value="-1">NA</option>
            <option value="0">Auto</option>
            <option value="1">Easy</option>
            <option value="2">Normal</option>
            <option value="3">Hard</option>
            <option value="4">Harder</option>
            <option value="5">Insane</option>
            <option value="6">Easy Demon</option>
            <option value="7">Medium Demon</option>
            <option value="8">Hard Demon</option>
            <option value="9">Insane Demon</option>
            <option value="10">Extreme Demon</option>
        </select>

        <label for="featured">Featured:</label>
        <input type="checkbox" name="featured">

        <input type="submit" value="Rate List">
    </form>
</body>
</html>
