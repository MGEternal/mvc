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
    
    <div class="container" style="width: 44%">
        
       <h1 style="text-align:center;">New Class</h1><br> 
        <br>
        <form action="<?php echo base_url(); ?>Admin_dashboard/new_class" method="post">
    
    <div class="form-group">
    <label for="class_name">Class</label>
    <input type="text" class="form-control" name="class_name" id="class_name" placeholder="Enter Class Name" >
    </div>
    
    <div class="form-group">
    <label for="dep">Department</label>
    <input type="text" class="form-control" name="dep" id="dep" placeholder="Enter Department">
    </div>
    
    <div class="form-group">
    <label for="tea_id">Teacher</label>
    <select name="tea_id" id="tea_id" class="form-control"> 
        <?php
    
        foreach ($tea as $single_tea) {
           // print_r ( $single_tea['username'] );
        
        ?>
        <option value="<?php print_r ( $single_tea['tea_id'] ); ?>"                  >

        <?php print_r ( $single_tea['name'] ); ?>

        </option>
        
        <?php
        }
        ?>
    </select>
    </div>
  <br><br>
 
    
    <button class="btn btn-primary  col-md-2" type="submit">Add</button>
   
    </form>
        

</div>  


 






   
</body>
</html>