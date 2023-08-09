<?php
include "config.php";

$id = $_POST['id'];
$List = mysqli_real_escape_string($con, $_POST['list']); // Escape the value

echo "Debug - List value: " . $List . "<br>"; // Debug statement

$query = "UPDATE `tbltodo` SET `List`='$List' WHERE Id = $id";

echo "Debug - Query: " . $query . "<br>"; // Debug statement

if (mysqli_query($con, $query)) {
    header("location: index.php");
} else {
    echo "Error updating record: " . mysqli_error($con);
}
?>
