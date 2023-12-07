<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include 'config.php';
        $requiredFields = ["name", "description", "accountid", "username", "levels"];

        $missingFields = [];

        foreach ($requiredFields as $field) {
            if (empty($_POST[$field])) {
                $missingFields[] = $field;
            }
        }

        if (!empty($missingFields)) {
            echo "-1";
        } else {
            $name = $_POST["name"];
            $description = $_POST["description"];
            $version = "1";
            $accountid = $_POST["accountid"];
            $username = $_POST["username"];
            $downloads = "0";
            $difficulty = "-1";
            $likes = "0";
            $featuredIdx = "";
            $levels = $_POST["levels"];

            $sql = "INSERT INTO lists (name, description, version, accountid, username, downloads, difficulty, likes, featuredIdx, levels, created_at) 
                    VALUES ('$name', '$description', '$version', '$accountid', '$username', '$downloads', '$difficulty', '$likes', '$featuredIdx', '$levels', current_timestamp())";

            if ($mysqli->query($sql) === TRUE) {
                echo "1";
            } else {
                echo "-1";
            }
        }

        $mysqli->close();
        die();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create List</title>
</head>
<body>
    <h2>Create List</h2>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br>

        <label for="accountid">Account ID:</label>
        <input type="text" name="accountid" required><br>

        <label for="username">Username:</label>
        <input type="text" name="username" required><br>

        <label for="levels">Levels:</label>
        <input type="text" name="levels" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
