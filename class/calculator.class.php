<?php include('../includes/config.php'); ?>


<?php
$first_number=$_POST['first_number'];
$second_number=$_POST['second_number'];
$result=$_POST['result'];



$sql = "INSERT INTO calc_event (first_number, second_number, result)
VALUES ('$first_number', '$second_number', '$result')";

// echo $sql;
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//
// $sql = "INSERT INTO calc_event VALUES ('$first_number','$second_number','$result')";
// if (mysqli_query($conn, $sql)) {
//   echo 'Successfuly inserted';
// }
// else {
//     echo 'Insertion failed';
// }
//
// mysqli_close($conn);
?>
