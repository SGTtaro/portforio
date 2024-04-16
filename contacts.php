<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hello I`m Koraro Maki</title>
<!-- stylesheet -->
<link rel="stylesheet" href="common/style.css">

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nanum+Pen+Script&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Zen+Maru+Gothic&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&display=swap" rel="stylesheet">

<!-- scripts -->
<script src="js/script.js" defer></script>




</head>
<body>
    <div id="wrap">
		<div id="loading">
			<p class="hello_world">Contacts...!</p>
		</div>
        <div class="div2">
            <h1>Contacts info</h1>
            <table>
				<tr><th>Mail:</th><td>taro.recruit000@gmail.com</td></tr>
				
			</table>
            <p></p>
        </div>
        
        <div class="div1">
        	<h1>Contact Form</h1>
        	<form action="php/formaction.php" method="POST">
        	<table>
        		<tr><th>Name:</th><td><input type="text" id="name" name="name"></td></tr>
        		<tr><th>Mail:</th><td><input type="text" id="email" name="email"></td></tr>
        		<tr><th>Contents:</th><td><textarea id="message" name="message"></textarea></td></tr>
        		<tr><th></th><td><input type="submit" value="send!"></td></tr>
        	
        	
        	</table>
			
			  </form>
		
            
        </div>
                
   
    </div>
    
    <center>
    <a class ="back_top" href="index.html">back to top</a>
	</center>

    <footer>
      <p>This side is made by Kotaro Maki</p>
    </footer>
</body>
</html>
