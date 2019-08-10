
<?php require_once "db.php" ?>
<!DOCTYPE html>
<html>
<head>
	<title>Searching</title>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"></head>
<style>
	.container input[type='text']
	{
		width: 200px;
		padding: 10px;
	}
	.container button[type='submit']{padding: 10px; margin: 0;}

</style>
<body>
	
<div class="container">
	<form action="search.php" method="post">
		<input type="text" name="search" placeholder="Search">
		<button type="submit" name="searchbtn"><i class="fa fa-search-plus"></i></button>
	</form>
	<?php

while ($row = $result->fetch_assoc()) {?>
 <div>
	<h1><?=$row["title"];?></h1>
<div>
	<span><?=$row["detail"];?></span>
</div>
</div>
 <?php } ?>
</div>
<br><br><br><hr>

<!--verilenler bazasina melumat yazib gondermek formu
<div class="insert">
	<form action="db.php" method="post">
		<label>Title</label><br>
		<input type="text" name="title" placeholder="Entry header"><br><br>
		<label>Detail</label><br><br>
		<textarea name="detail" cols="40" rows="10"></textarea><br>
        <button name="sublim">Send</button>
	</form>
</div>
-->
</body>
</html>