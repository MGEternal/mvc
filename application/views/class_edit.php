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
    <title>U Khao Yai</title>

</head>
<body>
    
    <br>
    <br>
    <br>
    <!-- เนื้อหา -->
    <?php 
if(!empty($class_one)) {
    foreach ($class_one as $single_class) {
       // print_r ( $single_class['username'] );
    }
}

?>
    
    <div class="container" style="width: 33%">
        <div class=""> 

        </div>
    <br>
    <h2>Edit Class Info</h2>
    <form action="<?php echo base_url(); ?>Admin_dashboard/class_update" method="post">
    <input type="text" class="form-control" name="class_id" id="class_id" VALUE="<?php print_r ($single_class['class_id']) ?>" hidden>
    <div class="form-group">
    <label for="class_name">Class Name</label>
    
    <input type="text" class="form-control" name="class_name" id="class_name" VALUE="<?php echo ($single_class['class_name']) ?>" >
    </div>
    <div class="form-group">
    <label for="dep">Department</label>
    <input type="text" class="form-control" name="dep" id="dep" VALUE="<?php print_r ($single_class['department']) ?>" >
    </div>
    <div class="form-group">
    <label for="tea_id">Class</label>
    <select name="tea_id" id="tea_id" class="form-control">
    <?php
    
    foreach ($tea as $single_tea) {
       // print_r ( $single_class['username'] );
    
    ?>
    <option value="<?php print_r ( $single_tea['tea_id'] ); ?>"<?php if($single_tea['tea_id']==$single_class['tea_id']) echo "selected"; ?> ><?php  print_r ( $single_tea['name'] ); ?></option>
    
    <?php
    }
    ?>
    </select>
    </div>
    
    
    
    
    <button class="btn btn-primary  col-md-2" type="submit">Edit</button>
   
    </form>
    
    
    <br>
    <br>
    <br>
    <br>
    
    
    </div>



    





   
</body>
</html>