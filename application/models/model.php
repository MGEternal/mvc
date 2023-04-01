<?php

class Model extends CI_Model
{


public function chk_session() {  
       if($this->session->userdata('std_id')=="") {
         echo "<script>alert('Please Login')</script>";
         redirect('login','refresh');
         return FALSE;

       }else{    return TRUE;    }
}
public function chk_user($user,$pass) {  
        // $pass = base64_encode(trim($pass));
        $sql ="SELECT * FROM user WHERE username='$user' and password='$pass'";
      $query = $this->db->query($sql);
      if($query->num_rows()!=0) {
        $result = $query->result_array();
          return $result[0];  
          }
        else{       
        return false;
          }
}
public function GetUserData($group,$condition) {  
        $sql ="SELECT * FROM $group WHERE $condition";
        $query = $this->db->query($sql);
        if($query->num_rows()!=0) {
        $result = $query->result_array();
          return $result[0];  
          }
        else{       
        return false;
          }
}
public function save_new_pass($pass,$id) {  
        $sql ="update user set password = '$pass', status_login = 1 where id = '$id'";
        $query = $this->db->query($sql);
        if($query) {
          return true;  
          }
        else{       
          return false;
          }
}

public function block_for_teacher() {  
        if($this->session->userdata('std_id') || $this->session->userdata('contact_id')){
          echo "<script>";
            echo 'alert("Get back");';
            echo 'history.go(-1);';
            echo '</script>';
        }
}

public function block_for_contact() {  
        if($this->session->userdata('std_id') || $this->session->userdata('teacher_id')){
          echo "<script>";
            echo 'alert("Get back");';
            echo 'history.go(-1);';
            echo '</script>';
        }
}

public function selectteaall()
{
    $sql="SELECT * FROM teacher";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;

}
public function selectscheclass($class_id)
{
    $sql="SELECT * FROM schedule where `class_id` = '$class_id'";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;

}
public function selectscheall()
{
    $sql="SELECT * FROM schedule";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;

}
public function selectuserall()
{
    $sql="SELECT * FROM user";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;

}
public function selectstuclass($class_id)
{
    $sql="SELECT * FROM user where `user_type`= 'student' && `class_id`='$class_id'";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;

}
public function selectstuall()
{
    $sql="SELECT * FROM user where `user_type`= 'student'";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;

}
public function class_delete($class_id){
    $sql ="DELETE FROM `class` WHERE `class_id` = '$class_id' ;";          
    $query = $this->db->query($sql); 
    if($query)
    {
    return true;
    }
    else{
    return false;
    } 
}
public function selectuser($user_id)
{
    $sql="SELECT * FROM user WHERE `user_id`= '$user_id' ";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;

}public function selecttea_id($tea_id)
{
    $sql="SELECT * FROM teacher WHERE `tea_id`= '$tea_id' ";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;

}
public function selectsche_id($sche_id)
{
    $sql="SELECT * FROM schedule WHERE `sche_id`= '$sche_id' ";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;

}
public function selectclass_id($class_id)
{
    $sql="SELECT * FROM class WHERE `class_id`= '$class_id' ";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;

}
public function selectclassall(){
    $sql="SELECT * FROM class";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;
}

public function selectclass_all(){
    $sql="SELECT * FROM class";
    $query = $this->db->query($sql); 
    $data  = $query->result_array(); 
 
    return $data;
}
public function chklogin($username,$password){
    $sql ="SELECT * From user where `username` = '$username' && `password` = '$password'";
    $query = $this->db->query($sql); 
    $data  = $query->result_array();
   
    if($data != null){
        return $data[0];
    }else{
        return false ; 
    }
}
public function new_sche($class_id,$tea_id,$sup)
{ 
    
          $sql ="INSERT INTO `schedule`(`class_id`,`tea_id`,`subject`)
          VALUES ('$class_id','$tea_id','$sup')";          
          $query = $this->db->query($sql); 
         
          
           
          
         
        
    }
public function new_tea($name,$age,$sex,$tel,$email,$dep)
{ 
      $sql ="SELECT * From `teacher` where `name` = '$name'";
      $query = $this->db->query($sql);  
      $data  = $query->result(); 
        if($data == null){
          $sql ="INSERT INTO `teacher`(`name`,`age`,`sex`,`tel`,`email`,`department`)
          VALUES ('$name','$age','$sex','$tel','$email','$dep')";          
          $query = $this->db->query($sql);  
          if($query)
          {
           return 1;
          }
          else{
           return 3;
          } 
        }else{
            ?>
            <script language="javascript">
            alert("teacher name already used");
            window.history.back();
            </script>
            
                <?php
                return false ;
        }
    }
    public function update_sche($sche_id,$class_id,$tea_id,$sup){
        $sqlEdt="UPDATE `schedule` SET 
                            
                             `class_id`   = '$class_id',
                             `tea_id`   = '$tea_id',
                             `subject`   = '$sup'
                             
                     WHERE `sche_id` = '$sche_id'";
            $data = $this->db->query($sqlEdt);
            
    }
    public function update_tea($tea_id,$name,$age, $sex, $tel, $email,$dep){
        $sqlEdt="UPDATE `teacher` SET 
                            
                             `name`   = '$name',
                             `age`   = '$age',
                             `sex`   = '$sex',
                             `tel`   = '$tel',
                             `email`   = '$email',
                             `department`   = '$dep'
                      WHERE `tea_id` = '$tea_id'";
            $data = $this->db->query($sqlEdt);
            if ($data!=null)
            {
                
                return $data; 
            }
            else
            {
            return false;
            }
    }
    public function update_class($class_id,$class_name,$dep,$tea_id){
        $sqlEdt="UPDATE `class` SET 
                            
                             `class_name`   = '$class_name',
                             `department`   = '$dep',
                             `tea_id`   = '$tea_id'
                             
                     WHERE `class_id` = '$class_id'";
            $data = $this->db->query($sqlEdt);
            if ($data!=null)
            {
                
                return $data; 
            }
            else
            {
            return false;
            }
    }
public function new_class($class_name,$dep,$tea_id)
{ 
      $sql ="SELECT * From `class` where `class_name` = '$class_name'";
      $query = $this->db->query($sql);  
      $data  = $query->result(); 
        if($data == null){
          $sql ="INSERT INTO class(`class_name`,`department`,`tea_id`)
          VALUES ('$class_name','$dep','$tea_id')";          
          $query = $this->db->query($sql);  
          if($query)
          {
           return 1;
          }
          else{
           return 3;
          } 
        }else{
            ?>
            <script language="javascript">
            alert("Class name already used");
            window.history.back();
            </script>
            
                <?php
                return false ;
        }
}
public function new_user($username,$password,$name,$age,$sex,$tel,$email,$class_id,$user_type)
{ 
      $sql ="SELECT * From `user` where `username` = '$username'";
      $query = $this->db->query($sql);  
      $data  = $query->result(); 
        if($data == null){
          $sql ="INSERT INTO user(`username`,`password`,`name`,`age`,`sex`,`tel`,`email`,`class_id`,`user_type`)
          VALUES ('$username','$password','$name','$age ','$sex','$tel','$email','$class_id','$user_type');";          
          $query = $this->db->query($sql);  
          if($query)
          {
           return 1;
          }
          else{
           return 3;
          } 
        }else{
            ?>
            <script language="javascript">
            alert("Username already used");
            window.history.back();
            </script>
            
                <?php
                return false ;
        }
}



public function chkregis($username,$password,$name,$age,$sex,$tel,$email)
{ 
      $sql ="SELECT * From `user` where `username` = '$username'";
      $query = $this->db->query($sql);  
      $data  = $query->result(); 
        if($data == null){
          $sql ="INSERT INTO user(`username`,`password`,`name`,`age`,`sex`,`tel`,`email`,`user_type`)
          VALUES ('$username','$password','$name','$age ','$sex','$tel','$email','student');";          
          $query = $this->db->query($sql);  
          if($query)
          {
           return 1;
          }
          else{
           return 3;
          } 
        }else{
            ?>
            <script language="javascript">
            alert("Username already used");
            window.history.back();
            </script>
            
                <?php
                return false ;
        }
}

public function update_user($user_id,$username,$password,$name,$age,$sex,$tel,$email,$class_id)
        {
            $sqlEdt="UPDATE user SET 
                             `user_id`    = '$user_id',
                             `username`   = '$username',
                             `password`   = '$password',
                             `name`   = '$name',
                             `age`   = '$age',
                             `sex`   = '$sex',
                             `tel`   = '$tel',
                             `email`   = '$email',
                             `class_id`   = '$class_id'
                     WHERE `user_id` = '$user_id';";
            $data = $this->db->query($sqlEdt);
            if ($data!=null)
            {
                $data= $this->model->selectuser($user_id);
                return $data; 
            }
            else
            {
            return false;
            }
        }

public function delete_user($id)
{
 
      $sql ="DELETE FROM user WHERE user_id = '$id' ;";          
        $query = $this->db->query($sql); 
    
  
        if($query)
        {
        return true;
        }
        else{
        return false;
        } 
}public function sche_delete($sche_id)
{
 
      $sql ="DELETE FROM `schedule` WHERE `sche_id` = '$sche_id' ;";          
        $query = $this->db->query($sql); 
    
  
        
}
public function tea_delete($tea_id)
{
 
      $sql ="DELETE FROM teacher WHERE `tea_id` = '$tea_id' ;";          
        $query = $this->db->query($sql); 
    
  
        if($query)
        {
        return true;
        }
        else{
        return false;
        } 
}
  
public function CheckSession()        
{
  
    if($this->session->userdata('user_id')=="") {
        ?>
        <script language="javascript">
    alert("Don't try to hack my web");
    window.location='../login';
    </script>
      <?php
      
   return FALSE;
  }


   
}

// public function CheckSession()        
// {
//   if($this->session->userdata('fname')=="") {
//     echo "<script>alert('Please Login')</script>";
//     redirect('login','refresh');
//  return FALSE;
 
//   }else{    return TRUE;    }
  
// }


}

?>