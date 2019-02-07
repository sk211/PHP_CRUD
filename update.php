<!DOCTYPE html>
<html lang="en">
<?php include "db.php"; 

 $id =$_GET['id'];

$sql = "select * from item where id= '$id' ORDER BY id DESC";
$rows = $db->query($sql);

$row = $rows->fetch_assoc();


//$sql = "UPDATE `item` SET  'item`='$item', description='$description', image='$image' where id=$id";
$sql ="UPDATE `item` SET `id`=[id],`item`=[item],`description`=[description],`image`=[image] WHERE 1";


$db->query($sql);










?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>curd app</title>
</head>

<body>

    <div class="container">
        <div class="row">

            <h2 class="text-center text-bold">Todo list</h2>

            <a href="index.php" class="btn btn-info">Home</a>
            <button tyoe="button" class="btn btn-default fa-pull-right">Print</button>

            
            <!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<!-- Modal -->

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update item</h4>
      </div>
      <div class="modal-body">
        <form method="post" >
        <div class="form-group">
            <label>Itme</label>
            <input type="text" name="item" required class="form-control" value="<?php echo $row['item'] ; ?>">
            <textarea rows="4" cols="50" name="description" value="<?php echo $row['description'] ; ?>" class="form-control"> 
            </textarea>
             <input type="file" name="image"  value="<?php echo $row['image'] ; ?>" class="form-control">
           
        </div>
        <input type="submit" name="submit" value="Update" class=" btn btn-primary">
      
        </form>
      </div>
      
    </div>

  </div>
</div>
            <hr>
            <br>

    
            
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>