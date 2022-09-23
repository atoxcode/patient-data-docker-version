<?php
$servername = "mysql";
$username = "test";
$password = "test";
$dbname = 'test';

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $dbname);

if (empty($_GET)) {
    $sql = "SELECT * FROM patient_information";
} else {
    $sql = "SELECT * FROM patient_information WHERE patient_id = " . $_GET['id'] . "";
}
$result = $mysqli->query($sql);
$myArray = array();
while ($row = $result->fetch_assoc()) {
    $myArray[] = $row;
}
echo json_encode($myArray);
?>

<!-- if ($sql_search > 0) {
$show_data = query('SELECT * FROM patient_information WHERE patient_id = "' . $_GET['id'] . '"')->queryRow();
$data = array(
'status' => "data OK",
'name' => $show_data['patient_name'],
'id' => $show_data['patient_id'],
'blood_preasure' => $show_data['patient_blood_preasure'],
'spo2' => $show_data['patient_spo2'],
'room' => $show_data['patient_room_number']
);
} else {
$data = array(
'status' => "No information for this patient"
);
}
echo json_encode($data); -->