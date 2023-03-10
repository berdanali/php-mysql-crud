<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Book Details</title>
    <style>
        .book-details{
            background-color: coral;
            padding:50px;
        }
    </style>
</head>
<body>
<div class ="container">
            <header class ="d-flex justify-content-between my-4">
                <h1>Book Details</h1>
                <div>
                    <a href ="index.php" class="btn btn-primary">Back</a>
                </div>
            </header>
            <div class ="book-details my-4">
                <?php 
                   if(isset($_GET["id"])){
                    $id = $_GET["id"];
                        include("connect.php");
                        $sql="SELECT * FROM books WHERE id=$id";
                        $result =mysqli_query($conn, $sql);
                        $row = mysqli_fetch_array($result);

                   }    
                ?>
                <h2>Title</h2>
                <p><?php echo $row["title"]; ?></p>
                <h2>Description</h2>
                <p><?php echo $row["description"]; ?></p>
                <h2>Type</h2>
                <p><?php echo $row["type"]; ?></p>
                <h2>Author</h2>
                <p><?php echo $row["author"]; ?></p>

            </div>


</div>
</body>
</html>