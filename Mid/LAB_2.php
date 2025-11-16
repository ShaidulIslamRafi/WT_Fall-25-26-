<!DOCTYPE html>
<html>
<head>
    <title>LAB_2 </title>
   <style>
      h1{
       

      }
     body{
        background-color: #00a1f856;
     }
     .one{
        background-color: #e8eef0ff;
        border-radius:5px;
        padding-top:20px;
        padding-right:50px;
        padding-bottom:50px;
        padding-left:50px; 
        position:absolute;
        width:400px;  
        right:450px;    
        top:150px;
        align:center;
     }

   </style>

</head>
<body >
    
    <div class="one">
        <h1>Participation Registration</h1>
    Full Name:<br>
    <input type="text" id="name"><br>
    E-mail:<br>
    <input type="text" id="email"><br>
    Phone Number:<br>
    <input type="text" id="phone"><br>
    Password:<br>
    <input type="text" id="password"><br>
    Confirm Password:<br>
    <input type="text" id="c_password"><br>
    <input type="submit" onclick="validation()" value="Register" style="background-color:blue;color:white;border-radius:3px"><br>
 
    </div>


   <script>

   function validation (){
      var name = document.getElementById("name");
      var email=document.getElementById("email");
      var phone =document.getElementById("phone");
      var password=document.getElementById("password");
      var c_password=document.getElementById("c_password");
      var output=document.getElementById("output");
      var error=document.getElementById("error");

    if(name==="" ||email===""||phone===""||password===""||c_password==="" ){
        error.innerHTML="No field can be left empty";
       
    }
   output.innerHTML="Registration Successful";


   }



   </script>






</body>




















</html>