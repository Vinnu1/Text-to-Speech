<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body oncontextmenu="return false">
<style>
body
{ 
  background-repeat: no-repeat;
  background-color: teal;
  background-attachment: fixed;
  background-position: center center;
  font-family: "Open Sans";
  color: white;
  text-align:center;
}
input[type=text] 
	{
	text-align:center;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
	}
input[type=text]:focus 
	{
    border: 3px solid #555;
	}
.heading
	{
		margin: auto;
		width: 100%;
		text-align: center;
		padding-top: 20px;
		padding-bottom: 20px;
                background-color: black;
		
	}
.footerholder {
    background: none repeat scroll 0 0;
	bottom: 2%;
	height:4%;
    position: fixed;
    text-align: center;
    width: 100%;
}

.footer {
	color:#333333;
	font-family:Oswald;
	font-style:bold;
    background: none repeat scroll 0 0 transparent;
    margin: auto;
}
h1 	{
		
		color: white;	
}
form 
	{ 
	text-align:center;
	margin: 0 auto; 
	width: 250px;
	}
select {
    padding: 16px 20px;
    border: 2px solid;
    outline:1px;
    border-radius: 4px;
    border-color: black;
    background-color: #FFFFFF;
}
.button 
	{
	background-color: #333333;
    color: white;
    border: 2px solid #000000;
	-webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
	}
.button:hover 
	{
	background-color: #FFFFFF;
    color: black;
	border: 2px solid #505050;
    
	}
textarea {
    width: 35%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #000000;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
.error
{
	font-size:20px;
	font-weight:bold;
	color: #ff0000;
        position: absolute;
        left: 0;
        top: 50%;
        width: 100%;
        text-align:center;
        
}
</style>
<div class="heading">
<h1>Text to Speech Translator</h1>
</div>
<p style="color:#000000;font-size:20px;font-family: "Open Sans";">This webpage is made by Vinayak Sinha and Vishal Tiwari. <br> It is built in PHP, HTML, CSS and uses IBM Watson's Text to Speech API. <br>
The API is customized by Vishal. <br> This webpage will only work till Vishal's account doesn't expire. <br> (Yes, he has a trial account. We're starting developers, what did you expect ?) <br> 
So when will it expire ? How many days ? Well exacty - </p>
<h2>
<?php
$wedding = strtotime("5 May 2017"); // or whenever the wedding is
$now= strtotime("now");
$secondsLeft = $wedding - $now;
$days = floor($secondsLeft / (60*60*24));
echo "$days days left";
?>
</h2><br>
<?php
$k="";
if(!empty($_POST["s"]))
{
$k=$_POST["s"];
for($i=0;$i<strlen($k);$i++)
if($k[$i]==" ")
$k[$i]=="%20";
$s="http://dragon857.mybluemix.net/getaudiomsg?stralert=".$k;
}
?>
<form method="post" action="texttospeech.php">
<input type="text" placeholder="Enter text" name="s" value="<?php if(isset($_POST["n"])) echo $k;?>" ><br><br>
<input class="button" type="submit" value="Translate!" name="n">  
</form><br>
<audio src="<?php if(isset($_POST['n'])) echo $s; ?>" controls></audio>
</body>
<div class="footerholder">
	<div class="footer">
<button>Contact Vinayak &nbsp <a style="color:#505050" href="https://www.linkedin.com/in/vinayak-sinha-743125110/" title="Vinayak's Linkedin" target=_blank> <img border="0" alt="Vinayak's Linkedin" src="linkedin.png" width="20px" height="20px"></a> &nbsp <a style="color:#505050" href="https://www.github.com/Vinnu1" title="Vinayak's GitHub" target=_blank> <img border="0" alt="Vinayak's GitHub" src="g.png" width="20px" height="20px"></a>
&nbsp | &nbsp Contact Vishal &nbsp <a style="color:#505050" href="https://www.linkedin.com/in/vishal-tiwari-99301213b/" title="Vishal's Linkedin" target=_blank> <img border="0" alt="Vishal's Linkedin" src="linkedin.png" width="20px" height="20px"></a> &nbsp <a style="color:#505050" href="https://www.facebook.com/vishal.tiwari.5203" title="Vishal's Facebook" target=_blank> <img border="0" alt="Vishal's Facebook" src="f.png" width="20px" height="20px"></a>
</button>
</div>
</div>
</html>