<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../themes/default/css/bootstrap.min.css">
    <script src="../themes/default/js/jquery.min.js"></script>
    <script src="../themes/default/js/jquery.form-validator.min.js"></script>
    <script src="../themes/default/js/popper.min.js"></script>
    <script src="../hemes/default/js/bootstrap.min.js"></script>
    <title>U Khao Yai</title>

</head>
<body>
    
    <br>
    <br>
    <br>
    <!-- เนื้อหา -->
    
    <div class="container" style="width: 66%">
        
       <h1 style="text-align:center;">Management Teacher</h1><br> <h2><a class="btn btn-primary" href="add_tea">Add New Teacher</a></h2>
        <br>
        
        <table class="table table-bordered">
  <thead>
    <tr>
      <th style="text-align:center;" scope="col">#</th>
      <th style="text-align:center;" scope="col">Name</th>
      <th style="text-align:center;" scope="col">Age</th>
      <th style="text-align:center;" scope="col">Sex</th>
      <th style="text-align:center;" scope="col">Telephone</th>
      <th style="text-align:center;" scope="col">Email</th>
      <th style="text-align:center;" scope="col">Department</th>
      <th style="text-align:center;" scope="col">Active</th>

    </tr>
  </thead>
  <tbody>
      <?php
            if(!empty($tea)) {
                $i=1;
                foreach ($tea as $single_tea) {
                    $x=0;
                   // print_r ( $single_user['username'] );
                
      ?>
    <tr>
      <th style="text-align:center;" scope="row"><?php echo $i++;?></th>
      <td style="text-align:center;"><?php echo $single_tea['name'];?></td>
      <td style="text-align:center;"><?php echo $single_tea['age'];?></td>
      <td style="text-align:center;"><?php echo $single_tea['sex'];?></td>
      <td style="text-align:center;"><?php echo $single_tea['tel'];?></td>
      <td style="text-align:center;"><?php echo $single_tea['email'];?></td>
      <td style="text-align:center;"><?php echo $single_tea['department'];?></td>
      <td style="text-align:center;">
      <a href="tea_edit?tea_id=<?php print_r ( $single_tea['tea_id'] );?>" class="btn btn-primary">Edit</a>
	    <a href="tea_delete?tea_id=<?php print_r ( $single_tea['tea_id'] );?>" class="btn btn-danger">Delete</a>
    </td>
    </tr>
   
    <?php
        }
    }
    ?>
  </tbody>
</table>
</div>  


 






   
</body>
</html>