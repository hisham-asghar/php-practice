<?php include('conn3.php'); ?>

<?php
		
  if (isset($_POST["action"]) && !empty($_POST["action"])) 
  { 
    $action = $_POST["action"];
    if($action == "test")
	{
		$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
		$result["data"] = $arr;
		echo json_encode($result);
	}
	else if($action == "save")
	{
		$uname = $_POST["Username"];
		$pswd = $_POST["Password"];
		$eid = $_POST["EmailID"];
		$gender = $_POST["Gender"];
        $fname = $_POST["FirstName"];
		$lname = $_POST["LastName"];
		$month = $_POST["Month"];
		$day = $_POST["Day"];
        $year = $_POST["Year"];
        
		$sql = "INSERT INTO mem (Username, Password, EmailID, Gender, FirstName, LastName, Month, Day, Year )
			VALUES ('$uname', '$pswd', '$eid', '$gender', '$fname', '$lname', '$month', '$day', '$year')";
		
		if (mysqli_query($conn, $sql) === TRUE) {
			$last_id = mysqli_insert_id($conn);
			$result["data"] = $last_id;
		} else {
			$result["data"] = "Error: ". mysqli_error($conn);
		}
		
		//$result["data"] = "abc";
		echo json_encode($result);
        
	}//end of save	
	
?>