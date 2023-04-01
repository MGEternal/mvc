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
    
    <div class="container" style="width: 33%">
        <div class=""> 

        </div>
    <br>
    <h2>Add New User</h2>
    <form action="<?php echo base_url(); ?>Admin_dashboard/new_user" method="post">
    
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" >
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" >
    </div>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age">
    </div>
    <div class="form-group">
    <label for="sex">Sex</label><br>
        <input type="radio" name="sex" id="sex" value="male">Male
        <input type="radio" name="sex" id="sex" value="male">Female
    </div>
    <div class="form-group">
    <label for="tel">Telephone</label>
    <input type="number" class="form-control" name="tel" id="tel" placeholder="Enter Telephone" >
    </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" >
    </div>
    <div class="form-group">
    <label for="class_id">Class</label>
    <select name="class_id" id="class_id" class="form-control">
    <?php
    
    foreach ($class as $single_class) {
       // print_r ( $single_class['username'] );
    
    ?>
    <option value="<?php print_r ( $single_class['class_id'] ); ?>"><?php print_r ( $single_class['class_name'] ); ?></option>
    
    <?php
    }
    ?>
    </select>
    </div>
    <div class="form-group">
    <label for="user_type">User Type</label>
    <select name="user_type" id="user_type" class="form-control">
        <option value="student">Student</option>
        <option value="admin">Admin</option>
    </select>
    </div>
  
 
    
    <button class="btn btn-primary  col-md-2" type="submit">Add</button>
   
    </form>
    
    
    <br>
    <br>
    <br>
    <br>
    
    
    </div>



 

<script>
$(function(){
    $("#tel").submit(){
if(("#tel")!=>length(10)){
    alert("GGWP");
}
};
});

</script>




   
</body>
</html>