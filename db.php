<?php 


//Verilenler bazasin qoshulmaq
$conn = new mysqli("localhost","root","password","db");

if ($conn->connect_error) {
	die("Connection failed: " .$conn->connect_error);
}else{
	echo "Connected successfully";
}
$sql = "SELECT * FROM table";
$result= $conn->query($sql);






/*
if (isset($_POST['sublim'])) {
	 $title = htmlspecialchars($_POST['title']);
	 $detail = htmlspecialchars($_POST['detail']);
 


	 //====verilenler bazasina melumat yazmaq=======//
	 $sen = "INSERT INTO table(title,detail)
	 VALUES('$title','$detail')";

//=======yoxlama kodda sef var yoxdu========//
	 if ($conn->query($sen) == TRUE) {
	 	echo "New recode created successfully";
	 	header("Location: index.php");//yeniden index sehifesine qayit
	 }else {
	 	echo "Error: ".$sen."<br>".$conn->error;

	 }
	 //=======yoxlama kodda sef var yoxdu========//
*/
}

 ?>
