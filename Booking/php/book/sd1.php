<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- typo fixed here -->
<!-- fontの読み込み -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300..700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../../common/style.css">
<script src="../../js/script.js" defer></script>
<title>About JAMMS</title>
</head>
<body>
<div id="home" class="back-img">
<header class="page-header">
		<a class="top-name">JAMMS</a>
		<nav>
			<ul class="top-navigation">
				<li><a href="../../news.html">News</a></li>
				<li><a href="../../about.html">About</a></li>
				<li><a href="../../booking.html">Booking</a></li>
				<li><a href="../../contact.html">Contact</a></li>
			</ul>
		</nav>
</header>
	<h2 class="page-title">BOOKING</h2>
</div>	
	<center>
	<article>
		<p class="post-containts">Reserve SD-1</p>
		<div class="reserve-gazou">
		<img src="../img/od-3.jpg" alt="">
		</div>
		<p class="post-containts">
		<b>RESERVE INFO</b><br>
		<form action="reservation-sd1.php" method="POST">
		<table>
		<tr><th>Name:</th><td><input type="text" name="name"></td></tr>
		<tr><th>Mail:</th><td><input type="text" name="mail"></td></tr>
		<tr><th>Number:</th><td><input type="text" name="number"></td></tr>
		<tr><th>Date:</th><td><input type="date" name="date" min=<?php echo date('Y-m-d');?>></td></tr>
		</table>
	<button type="submit">send</button>
	<input type="reset" value="reset">
		</form>
	</article>
	
	


<div id="bottom">
    <a href="../../index.html">Back to Top</a>
</div>

<footer>
    <div id="">
        &copy; JAMMS international since 2024
    </div>
</footer>

</body>
</html>
