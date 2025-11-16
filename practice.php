<!DOCTYPE html>
 
<html>
 
<head>
    <title>
        DOM
    </title>
</head>
<body>
<h1 id="pagetitle"> Light Moods</h1>
<button id="swtichmotion" onclick="toggle()"> Switch</button>
 
 
<script>
 
function toggle()
{
var body = document.body;
var title = document.getElementById("pagetitle") ;
var button = document.getElementById("swtichmotion") ;
 
 
if(body.style.backgroundColor==="black")
{
body.style.backgroundColor ="white";
title.style.color ="black";
title.innerHTML="Light Mood";
button.innerHTML="Switch to Dark Mood";
 
}
else
{
body.style.backgroundColor ="black";
title.style.color ="white";
title.innerHTML="Dark Mood";
button.innerHTML="Switch to Light Mood";
 
}
}
 
 
 
</script>
 
 
</body>
 
</html>