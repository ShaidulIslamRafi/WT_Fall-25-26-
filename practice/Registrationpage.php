<!DOCTYPE html>
<html>
<head>
<title>Registration Page</title>
<style>
    body{
        background-color: rgba(245, 245, 228, 0.21);
    }
    h1{
        font-size:20px;
        text-align:center;
    }
    button{
        background-color: rgba(104, 160, 104, 1);
        position:relative;
        left:35%;
        width:100px;
        height:50px;
        margin-top:20px;
        
  
    }
input,select {
  background-color: #92d3d870;
}
form{
  background-color: #e9ece9ff;
  padding:50px;
  position:absolute;
  width:400px;
  top:20px;
  right:35%;
  /*left: 200px;*/
}
#output{
    background-color: rgba(29, 171, 196, 0.48);
    height:50%;
    width:30%;
    position:absolute;
    top:80%;
    left:35.5%;


}
#error{
     background-color: #c2cf759c;
     color: #f30f0fff;
     position:absolute;
     padding:5px;
    
    
}

</style>
</head>



<body>

<form onsubmit="return validation()">
<h1>School Registration</h1>
<label for="name">Full Name:</label><br>
<input type="text" id="name"><br>
<label for="id">ID</label><br>
<input type="text"id="id"><br>
<label for="section">Section</label><br>
<input type="text"id="section"><br>
<label for="department">Department</label><br>
<select name="department" id="department">Select Department
  <option value="bba">BBA</option>
  <option value="cse">CSE</option>
  <option value="eee">EEE</option> 
  <option value="math">Math</option>
</select><br>
<label for="age">AGE</label><br>
<input type="text"id="age"><br>
<label for="gender">Gender:</label><br>
<input type="radio"value="male"name="gender">Male
<input type="radio"value="female"name="gender">Female
<input type="radio"value="other"name="gender">Other<br>
<label for="dob">Date Of Birth</label><br>
<input type="date"id="dob"><br>
<label for="password">Password:</label><br>
<input type="text"id="password"><br>
<label for="cpassword">Confirm Password</label><br>
<input type="text"id="cpassword"><br>
<input type="checkbox" id="accept" >I accept the conditions
<br>
<button id="submit">Confirm </button><br>
<div id="error"></div><br>

</form>
<div id="output"></div><br>

    
<script>
 function validation(){

   var name=document.getElementById("name").value.trim();
   var id=document.getElementById("id").value.trim();
   var section=document.getElementById("section").value.trim();
   var department=document.getElementById("department").value.trim();
   var age=document.getElementById("age").value.trim();
   var gender=document.querySelector('input[name="gender"]:checked');
   var dob=document.getElementById("dob").value.trim();
   var password=document.getElementById("password").value.trim();
   var cpassword=document.getElementById("cpassword").value.trim();
   var accept=document.getElementById("accept").checked;


   var outputDiv=document.getElementById("output");
   var errorDiv=document.getElementById("error");

   outputDiv.innerHTML="";
   errorDiv.innerHTML="";

  if(name===""||id===""||section===""||department===""||age===""||gender===""||dob===""||password===""||cpassword===""||accept===!accept){
    errorDiv.innerHTML="Please Enter all fields";
     return false;
  }
  if(isNaN(id)){
     errorDiv.innerHTML="ID must be numaric";
     return false;
  }
  if(!accept){
    errorDiv.innerHTML="Please Accept the Terms and Condition";
  }
  if(password!==cpassword){

  }

outputDiv.innerHTML=`  
 <strong>Registration Complete!</strong>
 Name:${name}<br>
 ID:${id}<br>
 Section:${section}<br>
 Department:${department}<br>
 Age:${age}<br>
 Gender:${gender}<br>
 Date Of Birth:${dob}<br>





`;
return false;



 }



</script>

</body>
</html>