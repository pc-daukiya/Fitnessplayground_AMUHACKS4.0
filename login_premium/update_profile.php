<?php
session_start();
include 'connection.php'; 

if (isset($_POST['name'])) {
    $new_name = $_POST['name'];
    $user_email = $_SESSION['email'];

    $query = "UPDATE premium_usertable SET name = ? WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss', $new_name, $user_email);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'updatedName' => $new_name]);
    } else {
        echo json_encode(['success' => false]);
    }

    $stmt->close();
    $conn->close();
}
?>
