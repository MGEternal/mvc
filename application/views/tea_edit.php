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
if(!empty($tea_one)) {
    foreach ($tea_one as $single_tea) {
       // print_r ( $single_tea['username'] );
    }
}

?>
    
    <div class="container" style="width: 33%">
        <div class=""> 

        </div>
    <br>
    <h2>Edit Teacher Info</h2>
    <form action="<?php echo base_url(); ?>Admin_dashboard/tea_update" method="post">
    <input type="text" class="form-control" name="tea_id" id="tea_id" VALUE="<?php print_r ($single_tea['tea_id']) ?>" hidden>
    <div class="form-group">
    <label for="name">Class Name</label>
    
    <input type="text" class="form-control" name="name" id="name" VALUE="<?php echo ($single_tea['name']) ?>" >
    </div>
    <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" name="age" id="age" VALUE="<?php print_r ($single_tea['age']) ?>" >
    </div>
    <div class="form-group">
    <label for="sex">Sex</label><br>
        <input type="radio" name="sex" id="sex" value="male" <?php if($single_tea['sex']=='male') echo "checked" ;?>>Male
        <input type="radio" name="sex" id="sex" value="female" <?php if($single_tea['sex']=='female')  echo "checked";?>>Female
    </div>
    <div class="form-group">
    <label for="tel">Telephone</label>
    <input type="text" class="form-control" name="tel" id="tel" VALUE="<?php print_r ($single_tea['tel']) ?>" >
    </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" name="email" id="email" VALUE="<?php print_r ($single_tea['email']) ?>" >
    </div>
    <div class="form-group">
    <label for="dep">Department</label>
    <input type="text" class="form-control" name="dep" id="dep" VALUE="<?php print_r ($single_tea['department']) ?>" >
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