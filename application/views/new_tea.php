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
    <h2>Add New Teacher</h2>
    <form action="<?php echo base_url(); ?>Admin_dashboard/new_tea" method="post">
    
    <div class="form-group">
    <label for="name">Teacher Name</label>
    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Teacher Name" >
    </div>
   
    <div class="form-group">
    <label for="age">Age</label>
    <input type="number" class="form-control" name="age" id="age" placeholder="Enter Age">
    </div>

    <div class="form-group">
    <label for="sex">Sex</label><br>
        <input type="radio" name="sex" id="sex" value="male">Male
        <input type="radio" name="sex" id="sex" value="female">Female
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
    <label for="dep">Department</label>
    <input type="text" class="form-control" name="dep" id="dep" placeholder="Enter Department" >
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