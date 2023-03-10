<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Book List</title>
</head>
<body>  
<div class ="container">
            <header class ="d-flex justify-content-between my-4">
                <h1>Book List</h1>
                <div>
                    <a href ="create.php" class="btn btn-primary">Add New Book</a>
                </div>
            </header>
            <table class ="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Type</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include("connect.php");
                    $sql = "SELECT * FROM books";
                    $result=mysqli_query($conn ,$sql);
           
                   while($row =mysqli_fetch_array($result)){
                    ?>
                        <tr>
                            <td><?php echo $row["id"] ?></td>
                            <td><?php echo $row["title"] ?></td>
                            <td><?php echo $row["author"] ?></td>
                            <td><?php echo $row["type"] ?></td>
                            <td>
                                <a href ="view.php?id=<?php echo $row["id"] ?>" class="btn btn-info">Read More</a>
                                <a href ="edit.php?id=<?php echo $row["id"] ?>" class="btn btn-warning">Edit</a>
                                <a href ="delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger">DELETE</a>
                            </td>
                        </tr>
                    <?php
                   
                   }
                    ?>
                </tbody>

            </table>
</div>
</body>
</html>