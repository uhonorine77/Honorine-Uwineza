<?php
include 'connection.php';

$result = $conn->query("SELECT * FROM management");
if ($result->num_rows > 0) {
    $delimiter = ",";
    $filename = "User Management System" . date('Y-m-d') . ".csv";
    $f = fopen('php://memory', 'w');
    $fields = array('id', 'firstname', 'lastname', 'email');
    fputcsv($f, $fields, $delimiter);
    while ($row = $result->fetch_assoc()) {
        $lineData = array($row['id'], $row['firstname'], $row['lastname'], $row['email']);
        fputcsv($f, $lineData, $delimiter);
    }
    fseek($f, 0);
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename='.$filename.';');
    fpassthru($f);
    exit;
}
header("Location: read.php");
exit;
?>