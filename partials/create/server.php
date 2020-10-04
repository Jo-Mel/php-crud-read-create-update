<?php
include __DIR__ .'/../database.php';
include __DIR__ .'/../functions.php';


if (empty($_POST['roomNumber'])) {
    die('Inserire numero stanza');
}

if (empty($_POST['floor'])) {
    die('Inserire piano');
}

if (empty($_POST['beds'])) {
    die('Inserire numero letti');
}

$sql = "INSERT INTO stanze (room_number, floor, beds, created_at, updated_at) VALUES(?,?,?,NOW(),NOW())";

$stmt = $conn->prepare($sql);
$stmt->bind_param("iii", $room_Number, $floor, $beds);

$room_Number = $_POST['roomNumber'];
$floor = $_POST['floor'];
$beds = $_POST['beds'];

$stmt->execute();
var_dump($stmt);

if ($stmt && $stmt->affected_rows > 0) {
    header("Location: $basepath/show.php?id=$stmt->insert_id");
} elseif ($stmt) {
    die('Nessun inserimento');
} else {
    die('Error');
}

$conn->close();
