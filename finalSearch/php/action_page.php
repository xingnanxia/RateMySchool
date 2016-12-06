<?php

/*
	This is the php script to handle review form submission.
	It stores the form into the database, and return "Your review has been recorded" upon success;
	It returns the error message upon failure.
	
	Authors: 		Xingnan Xia, Zhe Wang
	Last Modified: 	Dec,5,2016	
*/

//handles review submissions 
if(isset($_POST['country']) and isset($_POST['year']) and isset($_POST['ReviewText'])and isset($_POST['field'])and isset($_POST['school'])){

	storeForm($_POST['country'], $_POST['year'],$_POST['ReviewText'],$_POST['field'],$_POST['school']);
}


//connect to the database 
function connectToDB(){

	//connect to the database 
	//DB_Host, DB_User, DB_Pass, UB_Name
	$mysqliLink = new mysqli('localhost','root','root','universities');
	
	//check the connection 
	if(mysqli_connect_errno()){
	
		echo "not connected";

		exit();
	}
	
	return $mysqliLink;
}

function storeForm($country, $year, $review, $field, $school){

	$conn = connectToDB();
	
	$sql = "INSERT INTO `reviews`(`country`, `year`, `review`,`field`,`school`) VALUES ('$country','$year','$review','$field','$school')";
		
	if ($conn->query($sql) === TRUE) {
    	echo "You review has been recorded.";
	} else {
    	echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	//close the connection when done. 
	$conn->close();
}
//returns to the welcome page when the users clicks go back

?>
<html>
<body>
<a href="http://localhost/search">Click here to go back</a>
</body>
</html>