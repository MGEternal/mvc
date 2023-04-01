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
if(!empty($user)) {
    foreach ($user as $single_user) {
       // print_r ( $single_user['username'] );
    }
}
?>
    
    <div class="container" style="width: 33%">
        <div class=""> 

        </div>
    <br>
    <h2>Edit Profile</h2>
    <form action="<?php echo base_url(); ?>dashboard/profile" method="post">
    <input type="text" class="form-control" name="user_id" id="user_id" VALUE="<?php print_r ($single_user['user_id']) ?>" hidden>
    <div class="form-group">
    <label for="username">Username</label>
    
    <input type="text" class="form-control" name="username" id="username" VALUE="<?php echo ($single_user['username']) ?>" >
    </div>
    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" name="password" id="password" VALUE="<?php print_r ($single_user['password']) ?>" >
    </div>
    <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" id="name" VALUE="<?php print_r ($single_user['name']) ?>">
    </div>
    <div class="form-group">
    <label for="age">Age</label>
    <input type="text" class="form-control" name="age" id="age" VALUE="<?php print_r($single_user['age']) ?>">
    </div>
    <div class="form-group">
    <label for="sex">Sex</label><br>
        <input type="radio" name="sex" id="sex" value="male" <?php if($single_user['sex']=='male') echo "checked" ;?>>Male
        <input type="radio" name="sex" id="sex" value="female" <?php if($single_user['sex']=='female')  echo "checked";?>>Female
    </div>
    <div class="form-group">
    <label for="tel">Telephone</label>
    <input type="number" class="form-control" name="tel" id="tel" VALUE="<?php print_r ($single_user['tel']) ?>" >
    </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" VALUE="<?php print_r ($single_user['email']) ?>" >
    </div>
    
  
 
    
    <button class="btn btn-primary  col-md-2" type="submit">Edit</button>
   
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