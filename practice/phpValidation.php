<!DOCTYPE html>
<html>
<head><title>PHP Code</title>

<style> 

form{
     

     background-color: rgba(132, 120, 120, 1);
     width:500px;
     height:450px;
     margin: 0 auto;
     position:absolute;
     top:0%;
     right:0%;
     bottom:0%;
     left:0%;
     margin:auto;
    

  }



</style>

</head>
<body>
    <center>
<h1> Welcome to Registration</h1><br>
</center>

<?php

$uname="";
$unameerror="";
$password="";

if(empty($_POST["uname"]) ){
  $unameerror="UserName Requred";
}
else{
  $uname=test_input($_POST["uname"]);
  if(!preg_match("/^[a-zA-Z]*$/",$uname)){
   $unameerror="Only letter";
  }
}
function test_input($data){
$data=trim($data);
return $data;

}

?>


<form action="" method="post">

Username: <input type="text" name="uname" value= "<?php echo $uname;?>"> <?php echo $unameerror;?><br> <br>
Password:  <input type="text" name="password"value ="<?php echo $password;?>">  <br> <br>
<input type="submit" name="submit" value="submit" style="display:block;margin:0 auto;">


</form>


</body>
</html>