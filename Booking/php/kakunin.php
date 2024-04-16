<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width", initial-scale=1.0>
<!-- fontの読み込み -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">

<?php 
    $font_family ='"Teko", sans-serif'


?>
<link rel="stylesheet" href="../common/style.css">
<script src="../js/script.js" defer></script>
<title>CONTACT TO JAMMS</title>
</head>

<body>

<div id="home" class="back-img">
<header class="page-header">
<a class="top-name">JAMMS</a>
<nav>
<ul class="top-navigation">
<li><a href="../news.html">News</a></li>
<li><a href="../about.html">About</a></li>
<li>Booking</li>
<li><a href="../contact.html">Contact</a></li>
</ul>
</nav>
</header>
<h2 class="page-title">CONTACT TO JAMMS</h2>

</div>
<center>
<article>
<p class="post-containts">Your contact containts is below. If its ok press send</p>
<p class="post-containts">
<b>CONTACT CONTENTS</b><br>
<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $mail= $_POST['mail'];
    $contents = $_POST['contents'];
}

?>



<table>
<tr><th>Name:</th><td><?php echo $_POST["name"]; ?></td></tr>
<tr><th>Mail:</th><td><?php echo $_POST["mail"]; ?></td></tr>
<tr><th>Contact info:</th><td><?php echo $_POST["contents"]; ?></td></tr>
<form action="form_process.php" method="POST">
	<input type="hidden" name="name2" value="<?php echo htmlspecialchars($name);?>">
	<input type="hidden" name="mail2" value="<?php echo htmlspecialchars($mail);?>">
	<input type="hidden" name="contents2" value="<?php echo htmlspecialchars($contents);?>">
	
</table>
	<button type="submit">send</button>
	<button onclick="location.href='../contact.html'">back</button>	
	</form>
<?php }else{
	echo "<p>bad connection</p>";
	}?>
</article>
</center>
	
<!-- form_process.phpにフォーム内容を引き継ぐ-->













<div id="bottom">
<a href="../index.html">Back to Top</a>
</div>
<footer>
<div id="">
&copy; JAMMS international since 2024


</div>
</footer>






</body>
</html>
