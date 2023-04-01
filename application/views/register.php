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
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark sticky-top">
<a class="navbar-brand" href=""><h3>SIMS</h3></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo01">


    <ul class="navbar-nav ">
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>welcome2">Home</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>login">Login</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>register">Register</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>contact ">Contact</a>
        </li>

    </ul>
    </div>
    </nav>
    <br>
    <br>
    <br>
    <!-- เนื้อหา -->
    
    <div class="container" style="width: 33%">
        <div class=""> 

        </div>
    <br>
    <h2>REGISTER</h2>
    <form action="<?php echo base_url(); ?>register/chkregis" method="post">
    
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
    
  
 
    
    <button class="btn btn-primary  col-md-2" type="submit">Regigter</button>
   
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