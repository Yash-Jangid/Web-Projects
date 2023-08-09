<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Update </title>
</head>

<?php
$id = $_GET['ID'];
include "config.php";
$updateData = mysqli_query($con, " SELECT * FROM tbltodo WHERE Id = $id");
$data = mysqli_fetch_array($updateData);
?>

<body>
    <div class="box2">
        <form action="update1.php" method="POST">
            <h1 class="heading">Update To Todo List</h1>
            <div class="container">
                <div class="text">
                    <input type="text" value="<?php echo $data['list'] ?>" name="list" class="text-area">
                </div>
                <div class="serchBtn">
                    <button class="button-add">Update</button>
                    <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                </div>
            </div>
        </form>
    </div>
</body>

</html>