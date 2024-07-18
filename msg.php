<?php
$conn = mysqli_connect("localhost","root","","wp");
	if(!$conn){
		mysqli_connect_error();
	}
	if(isset($_GET['name']) && isset($_GET['contact'] )&& isset( $_GET["msg"])){
		$name= $_GET['name'];
		$msg = $_GET["msg"];
		$contact = $_GET["contact"];
		
			$sql ="INSERT INTO `msg`(`name`,`contact`,`msg`) VALUES ('$name','$contact','$msg')";
			$sql = mysqli_query($conn,$sql);
			echo "message sent";
			
			
		
	}
?>