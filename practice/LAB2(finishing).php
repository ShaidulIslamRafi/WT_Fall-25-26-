<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration</title>
    <style>
     body{
      background-color: rgba(113, 127, 136, 1);

     }
     h1{
        text-align:center;
        color: rgba(10, 10, 10, 1);
        font-size:20px;
     }
    form{
        position:absolute;
        background-color: #cfd0dbff;
        padding:20px;
        width:400px;
        right:600px;    
        top:50px;
    }

    #output{
       background-color: rgba(77, 153, 102, 1);
       text-align:center;
       font-size:16px;
       color:white;
       position:absolute;
       top:50%;
       right:50%;
    }

    button{
        background-color:#003366;
        color:white;
        cursor:pointer;
    }

    #error{
        margin-top:10px;
        color:red;
        text-align:center;
        position:absolute;
        top:50%;
        right:50%;
    }


    </style>
<body>
    
    <form onsubmit="return validation()" >
<h1>Participant Registration</h1>
<label >Full Name: </label><br>
<input type="text" style="width:350px"id="name"><br>
<label >Email:</label><br>
<input type="text"  style="width:350px"id="email"><br>
<label >Phone Number:</label><br>
<input type="text"  style="width:350px"id="phone"><br>
<label >Password:</label><br>
<input type="text"  style="width:350px"id="passward"><br>
<label >Confirm Password:</label><br>
<input type="text"  style="width:350px"id="cpassward"><br>
<button type="submit">Submit</button>
</form>

<div id="error"> </div><br>
<div id="output"> </div><br>
<script>
function validation(){

    var name=document.getElementById("name").value.trim();
    var email=document.getElementById("email").value.trim();
    var phone=document.getElementById("phone").value.trim();
    var passward=document.getElementById("passward").value.trim();
    var cpassward=document.getElementById("cpassward").value.trim();

    var errorDiv=document.getElementById("error");
    var outputDiv=document.getElementById("output");

if(name===""||email===""||phone===""||passward===""||cpassward===""){
   errorDiv.innerHTML="Please fill in all fields.";
   return false;
}

if(passward !== cpassward){
    errorDiv.innerHTML="Password must be same";
    return false;
}
if(isNaN(phone)){
    errorDiv.innerHTML="Phone Number must be Numeric";
    return false;
}

outputDiv.innerHTML=`
<strong>Registration Complete!
Full Name:${name}<br>
Email:${email}<br>
Phone:${phone}<br>

`;
return false;

}




</script>


</body>
</html>