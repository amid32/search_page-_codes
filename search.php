
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

	<?php
    if (isset($_POST["searchbtn"])) {//isset yeni post globalinnan gelen melumat yoxla var ve yaxud yoxdur (index button type="submit")
    	$search = $_POST["search"]; //postan gelen  (index input name="search") melumati tut
          
          //====================================================//==============================================================//
                //Tableden gelen  sorğuyu where(yeni bu )title (LIKE '%$search%' bununla eyni sekilde olsun) burada (%-symbol) yenr html'le yazilibsa verilenler bazasinda  html5 dirse 5 reqemini qebuletsin |ORDER BY id (burada deyir ki, ID'ye gore sırala) 
                //DESC(yeni üstdən aşağı sırala)
    	$query = "SELECT * FROM (table) WHERE title LIKE '%$search%' ORDER BY id DESC";
        //==================================================//=====================================================================//

        //==================================================//====================================================================//
        //bu $query ise salmak
    	$search_query = mysqli_query($conn, $query);
         //==================================================//====================================================================//

         //==================================================//====================================================================//
            //bu kod Işley  olub-olmadığını yoxlayır($search_query = mysqli_query($conn, $query))
    	if (!$search_query) { //olmadigi vaxt
    		die("QUERY FAILED:".mysql_error($conn));//bu kod islemirse ozaman aşağıdakı kodları oxuma!
    	}
         //==================================================//====================================================================//

         //==================================================//====================================================================//
        //burada məsələ hər hansı bir mləumat tapılmadısa xəbərdarliq tsin
    	$search_count = mysqli_num_rows($search_query);

    	if ($search_count == 0) {
    		echo "<h3>Bele bir sehife mövcud deyil!!</h3>";
    	

    	}else {
    		
    		while ($row = mysqli_fetch_assoc($search_query)) { ?>
    		
 	<div>
	<h1><?=$row["title"];?></h1>
	<div>
		<span><?=$row["detail"];?></span>
	</div>
</div>
 <?php } 
}

    	
 //==================================================//====================================================================//
   } ?>



	


 


	

</body>
</html>