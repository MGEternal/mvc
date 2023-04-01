<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="themes/default/css/bootstrap.min.css">
    <script src="themes/default/js/jquery.min.js"></script>
    <script src="themes/default/js/jquery.form-validator.min.js"></script>
    <script src="themes/default/js/popper.min.js"></script>
    <script src="themes/default/js/bootstrap.min.js"></script>
    <title>SIMS</title>

</head>
<body>
    
    <br>
    <br>
    <br>
    <!-- เนื้อหา -->
    
    <div class="container" style="width: 33%">
        <div class=""> 

        </div>
    <br>
    <h2>Add New Schedule</h2>
    <form action="<?php echo base_url(); ?>Admin_dashboard/new_sche" method="post">
    
    <div class="form-group">
    <label for="class_id">Class</label>
    <select name="class_id" id="class_id" class="form-control"> 
        <?php
    
        foreach ($class as $single_class) {
           // print_r ( $single_class['username'] );
        
        ?>
        <option value="<?php print_r ( $single_class['class_id'] ); ?>"                  >

        <?php print_r ( $single_class['class_name'] ); ?>

        </option>
        
        <?php
        }
        ?>
    </select>
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

    

    <div class="form-group">
    <label for="sup">Supject</label>
    <input type="text" class="form-control" name="sup" id="sup" placeholder="Enter Supject" >
    </div>
    
  
  
 
    
    <button class="btn btn-primary  col-md-2" type="submit">Add</button>
   
    </form>
    
    
    <br>
    <br>
    <br>
    <br>
    
    
    </div>



 






   
</body>
</html>