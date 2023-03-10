
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
        <div class ="container">
            <header class ="d-flex justify-content-between my-4">
                <h1>Edit Book</h1>
                <div>
                    <a href ="index.php" class="btn btn-primary">Back</a>
                </div>
                </header>
                    <?php 
                    if(isset($_GET["id"])){
                        $id =$_GET["id"];
                        include("connect.php");
                        $sql="SELECT * FROM books WHERE id=$id";
                        $result =mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result);

                    }
                    
                    ?>
    <form action ="process.php" method ="POST">
                <div class ="form-element my-4">
                    <input type ="text" class ="form-control" name ="title" value="<?php echo $row["title"];?> placeholder = "Book Title : ">                  
                </div>        
                <div class ="form-element my-4">
                    <input type ="text" class ="form-control" name ="author" value="<?php echo $row["author"];?> placeholder = "Author Name : ">                  
                </div>      
                <div class ="form-element my-4">
                    <select name ="type" class="form-control">
                        <option value ="">Select Book Type</option>
                        <option value ="Adventure" <?php if($row['type']=="Adventure"){echo "selected";}?>>Adventure</option>
                        <option value ="Fantasy" <?php if($row['type']=="Fantasy"){echo "selected";}?> >Fantasy</option>
                        <option value ="SciFi" <?php if($row['type']=="SciFi"){echo "selected";}?> >SciFi</option>
                        <option value ="Horror" <?php if($row['type']=="Horror"){echo "selected";}?> >Horror</option>                    
                    </select>          
                </div>      
                <div class ="form-element my-4">
                    <input type ="text" value="<?php echo $row["description"];?>" class="form-control" name ="description" placeholder = "Book Description :">                  
                </div>      
                <input type ="hidden" name ="id" value='<?php echo $row['id']; ?>'>
                <div class ="form-element">
                    <input type ="submit" class="btn btn-success" name ="edit" vaule ="Edit book">
                </div>
        </form>      
</body>
</html>