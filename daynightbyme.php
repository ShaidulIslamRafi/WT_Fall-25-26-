<!DOCTYPE html>
    <head>
   <title> JS Code Practice</title>
</head>
<body>
  
<center>
  <h1 id="heading">The Light Mood</h1>

  <button id="button" onclick="toggole()">Click Me For Dark Mood</button>
</center>
<script>
 var body=document.body;
 var heading=document.getElementById("heading");
 var button=document.getElementById("button");
function toggole(){

if(body.style.backgroundColor==="black"){
  heading.innerHTML="The Light Mood";
  heading.style.color="black";
  button.innerHTML="Click Me For Dark Mood";
  button.style.color="black";
  body.style.backgroundColor="white";

}
else{   //when stay in white mood
  heading.innerHTML="The Dark Mood";
  heading.style.color="white";
  button.innerHTML="Click Me For Light Mood";
  button.style.color="vlack";
  body.style.backgroundColor="black";
}

}

alert("Welcome");

</script>



</body>