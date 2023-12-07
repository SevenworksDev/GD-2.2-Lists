<?php
include 'config.php';

$page = isset($_POST['page']) ? max(0, intval($_POST['page'])) : 0;
$offset = $page * 10;
$query = "SELECT * FROM lists LIMIT $offset, 10";
$result = $mysqli->query($query);

if ($result->num_rows > 0) {
    $response = '';
    $count = 0;
    while ($row = $result->fetch_assoc()) {
        $dateTimeUploaded = new DateTime($row['uploaded_timestamp']);
        $dateTimeUpdated = new DateTime($row['updated_timestamp']);
        $response .= "1:{$row['id']}:2:{$row['name']}:3:" . base64_encode($row['description']) . ":5:{$row['version']}:49:{$row['accountid']}:50:{$row['username']}:10:{$row['downloads']}:7:{$row['difficulty']}:14:{$row['likes']}:19:{$row['featuredIdx']}:51:{$row['levels']}:55:0:56:0:28:{$dateTimeUploaded->getTimestamp()}:29:{$dateTimeUpdated->getTimestamp()}|";
        $count++;

        if ($count >= 10) { break; }
    }
    if ($count > 0) { $response = rtrim($response, "|"); }
    echo $response . "#16:RobTop:71#1:0:{$count}";
} else {
    echo "-1";
}

$mysqli->close();
?>
