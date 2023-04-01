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
        
       <h1 style="text-align:center;">My Schedule</h1><br> <h2></h2>
        <br>
        
        <table class="table table-bordered">
  <thead>
    <tr>
      <th style="text-align:center;" scope="col">#</th>
      <th style="text-align:center;" scope="col">Class Name</th>
      <th style="text-align:center;" scope="col">Teacher Name</th>
      <th style="text-align:center;" scope="col">Subject</th>
     

    </tr>
  </thead>
  <tbody>
      <?php
            if(!empty($sche)) {
                $i=1;
                foreach ($sche as $single_sche) {
                    
                    $x=0;
                   // print_r ( $single_sche['username'] );
                
      ?>
    <tr>
    <th style="text-align:center;" scope="row"><?php echo $i++;?></th>
      <td style="text-align:center;"><?php  
      foreach ($class as $single_class) {
         if($single_class['class_id']==$single_sche['class_id']){
             echo $single_class['class_name']; 
             }}?></td>
      <td style="text-align:center;"><?php 
      foreach ($tea as $single_tea) {
        if($single_tea['tea_id']==$single_sche['tea_id']){
            echo $single_tea['name']; 
            }}?></td>
      <td style="text-align:center;"><?php echo $single_sche['subject'];?></td>
      
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