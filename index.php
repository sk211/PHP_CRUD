<!DOCTYPE html>
<html lang="en">
<?php include "db.php"; 


$page = (isset($_GET['page']) ? $_GET['page'] : 1);
$perPage = (isset($_GET['per-page']) && ($_GET['per-page']) <= 50 ? $_GET['per-page'] : 5);
$start =($page > 1) ? ($page * $perPage) - $perPage : 0;

 $sql = "select * from item  ";//.$start." , ".$perPage." ";

//$total = $db->query("select * from itmes") ->num_rows ;
 
//$pages =$total/$perPage;


$rows = $db->query($sql);



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

            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" >Add item</button>
            <button tyoe="button" class="btn btn-default fa-pull-right" onclick="print()">Print</button>

            
            <!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add item</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="create.php" enctype="multipart/form-data">
        <div class="form-group">
            <label>Itme</label>
            <input type="text" name="item" required class="form-control">
            <textarea rows="4" cols="50" name="description" class="form-control"> 
            </textarea>
             <input type="file" name="image" class="form-control">
           
        </div>
        <input type="submit" name="submit" value="Send" class=" btn btn-primary">
      
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
            <hr>
            <br>

            <table class="table card col-md-8 table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Item</th>
                        <th scope="col">Image</th>
                        <th scope="col">Description</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php while($row = $rows->fetch_assoc()): ?>
                        <th scope="row"><?php echo $row['id'] ?></th>
                        <td class="col-md-5"><?php echo $row['item'] ?></td>
                        
                         
                        <td>
                        <?php 
                         echo $row['image']
                         ?>
                         </td>
                         
                         
                        
                        <td class="col-md-2"><?php echo $row['description'] ?></td>
                        <td><a href="update.php?id=<?php echo $row['id'] ?>"  class="btn btn-success">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $row['id'] ?>" onclick="Delete()" class="btn btn-danger">Delete</a></td>

                    </tr>
                    <?php endwhile; ?>

                    



                </tbody>
            </table>

            <div class="text-center">
                <ul class="pagination">
                <li>1</li>
            </ul>
            </div>
             <script>
function Delete(){
    return confirm('Are you sure?');
}
</script>
            
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>