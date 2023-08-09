<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" integrity="sha512-vebUliqxrVkBy3gucMhClmyQP9On/HAWQdKDXRaAlb/FKuTbxkjPKUyqVOxAcGwFDka79eTF+YXwfke1h3/wfg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./main.css">
    <title>Todo List</title>
</head>

<body>
    <div class="box">
        <form action="insert.php" method="POST">
            <h1 class="heading">Assignment To make Todo List</h1>
            <div class="container">
                <div class="text">
                    <input type="text" name="list" class="text-area">
                </div>
                <div class="serchBtn">
                    <button class="button-add"><i class="fa fa-plus" style="font-size: 30px;" aria-hidden="true"></i></button>
                </div>
            </div>
        </form>
        <div class="todolist">
            <?php
            include "config.php";
            $data = mysqli_query($con, " SELECT * FROM tbltodo ");
            ?>

            <table>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_array($data)) {
                    ?>
                        <tr>
                            <td><?php echo $row['id'] ?></td>
                            <td><?php echo $row['list'] ?></td>
                            <td><a href="delete.php?ID=<?php echo $row['id'] ?>"><i class="lar la-trash-alt"></i>
                        </a></td>
                            <td><a href="update.php?ID=<?php echo $row['id'] ?>">
                            <i class="las la-pen"></i>                       
                        </a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>