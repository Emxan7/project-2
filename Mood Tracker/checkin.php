<?php
include 'checkin.php';

session_start();
$user_id = $_SESSION['user_id'];  // Assuming the user is logged in and session is set

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mood = $_POST['mood'];
    $notes = $_POST['notes'];
    $checkin_date = date('Y-m-d');

    $sql = "INSERT INTO checkins (user_id, mood, notes, checkin_date) VALUES ('$user_id', '$mood', '$notes', '$checkin_date')";
    if ($conn->query($sql) === TRUE) {
        echo "Check-in recorded!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
