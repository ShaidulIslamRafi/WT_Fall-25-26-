<!DOCTYPE html>
<html>
<head>
    <title>DOM</title>
</head>

<body>
    <h1 id ="pagetitle">Light Mood </h1>
    <button id ="switchmotion" onclick="toggle()">Switch</button>
<script>
function toggle(){
    var body =document.body;
    var title=document.getElementById("pagetitle");
    var button=document.getElementById("switchmotion");

if(body.style.backgroundColor==="black"){
    body.style.backgroundColor="white";
    title.style.color="black";
    title.innerHTML="light mood";
    button.innerHTML="Switch to dark mood";
}
else{
    body.style.backgroundColor="black";
    title.style.color="white";
    title.innerHTML="dark mood";
    button.innerHTML="Switch to light mood";
}
}
</script>


</body>


</html>