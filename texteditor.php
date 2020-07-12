<style>
::-webkit-scrollbar {
    width: 12px;
}
 

 
::-webkit-scrollbar-thumb {
    background: #dadce0;
    background-clip: padding-box;
    border: 4px solid transparent;
    -webkit-border-radius: 8px;
    border-radius: 8px;
    -webkit-box-shadow: none;
    box-shadow: none;	
}

#edit{

outline:none;
border-radius:0px 0px 4px 4px ;
font-family: Arial, Helvetica, sans-serif;
box-shadow: 0 2px 10px rgba(0,0,0,.2);
width:70%;
height:380px;
outline:none;
border-radius:10px;
		
}
#l{

width:100%;
height:250px;
border:1px solid skyblue;
border-radius:10px;
padding:10px;
outline:none;
font-family: inherit;
font-size: inherit;
line-height: inherit;
color:#7b7a7b;
	
}
#edit0{

font-family: inherit;
font-size: inherit;
line-height: inherit;		
height:20px;
width:97%;
padding:10px;
color:#fff;
background-color:#293a4a;
border-radius: 10px 10px 0px 0px;
box-shadow: 0 2px 10px rgba(0,0,0,.2);
border-bottom:2px solid skyblue;
font-family: Arial, Helvetica, sans-serif;
	
}
#edit1{

padding:10px;
margin-top:5px;	
	
}
#edit2{

font-family: inherit;
font-size: inherit;
line-height: inherit;
background-color:#293a4a;
border:none;
color:#fff;
margin-left:10px;
float:left;	
height:35px;
width:100px;
padding:4px;
border-radius:6px;
	
}

#edit3{

font-family: inherit;
font-size: inherit;
line-height: inherit;
background-color:#293a4a;
border:none;
color:#fff;
margin-left:10px;
float:left;	
height:35px;
width:100px;
padding:4px;
border-radius:6px;	
	
}
#btnCopy{
	
font-family: inherit;
font-size: inherit;
line-height: inherit;
background-color:#293a4a;
border:none;
color:#fff;
margin-left:10px;
float:left;	
height:35px;
width:100px;
padding:4px;
border-radius:6px;	
	
}
#edit4{
	
font-family: inherit;
font-size: inherit;	
color:#fff
 
}
a{

text-decoration: none;	
	
}
</style>


<?php

//inpute your file name
$file = 'info.text';

if (isset($_POST['text']))
{

    file_put_contents($file, $_POST['text']);
    exit();
}

$text = file_get_contents($file);

?>
<!-- HTML form -->
<br>
<center>
<div id="edit" >
<div id="edit0" title="Made by Kabbo" >
Text file edit & view . Made by Kabbo 
</div>
<form id="edit1" action="r.php" method="post">
<textarea id="l" name="text"><?php echo htmlspecialchars($text) ?></textarea>
<br>
<br>
<!--Save you file -->
<input type="submit" value = "Save" id="edit2" />
<!--Clear you file  text-->
<button id="edit3" onclick="document.getElementById('l').value = ''">Clear text</button>
<!--Copy you all file text -->
<button id="btnCopy" >Copy</button>
<!--Reload you page -->
<button id="edit3" onclick="location.reload();return false;">Reload</button>
<!--Download you file -->
<button id="edit3"><a id="edit4" href="info.text" download >Download</a></button>
</form>
</div>
</center>

<script type="text/javascript">


  const myInp = document.getElementById("l");
  const btnCopy = document.getElementById("btnCopy");
  
  btnCopy.onclick = function () {
  
  myInp.select();
  
  document.execCommand("Copy");  
  
  };
</script>




