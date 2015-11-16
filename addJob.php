<?php include('conn3.php'); ?>
<?php
session_start(); 

	if(isset($_SESSION["user"])==false)
	{
		header('Location:login.php');
	}

?>


<html>
<head>
</head>
<body>
    <?php
if(isset($_REQUEST['btnupload']))
{
	$temp = explode(".", $_FILES["userpic"]["name"]);
	$new_name = round(microtime(true)) . '.' . end($temp);
	move_uploaded_file($_FILES["userpic"]["tmp_name"], "img//".$new_name);
	$query = "INSERT INTO Jobs (LogoImage) VALUES ('$new_name')";

	$sql = mysqli_query($conn, $query);

	if(!$sql){

		echo "data not updated";
		echo "Error: ". mysqli_error($conn);
		die;
	}
	else {
		echo "Image uploaded successfully";
	}

}
?>
<?php
    $title="";
    $company="";
    $error="";
    $error1="";
            if(isset($_REQUEST["btnSave"]) == true){
                    $title = $_REQUEST["title"];
                    $company = $_REQUEST["Company"];
                    $city = $_REQUEST["City"];
                   
                   
                    
                    if(empty($title)){
                        $error = "What is the job title?" ;
                    }
                    elseif(empty($company)){
                        $error1 = "What is the name of the Company?" ;
                    }
                
                    else{
                        $sql = "INSERT INTO Jobs (JobTitle, CompanyName, City)
				    VALUES ('$title', '$company', '$city')";
                    }
                    
                    if (mysqli_query($conn, $sql) === TRUE) {
				    $last_id = mysqli_insert_id($conn);
                        echo "New Job has been added successfully. Last inserted ID is: " . $last_id;
                        echo "<script>
                              alert('New Job has been added.');
                              </script>";
			        }   
                    else {
				        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			        }
		
                    
            }
    ?>
    
    
    
     <h1> Hello  <?php echo $_SESSION['user']; ?> </h1>
     <form action="addJob.php" method="POST">
         <table>
             <tr>
                 <td>
                Job Title:
                 </td>
                 <td><input type="text" id="title" name="title" /></td>
                 <td><?php if($error != ""){
                        echo "<span style='color:white;background-color:red;'>".$error."</span>";
                    }
	
	               ?></td>
             </tr>
             <tr><td>
                 Company: </td>
                 <td><input type="text" id="Company" name="Company" /></td>
                 <td><?php if($error1 != ""){
                        echo "<span style='color:white;background-color:red;'>".$error1."</span>";
                    }
	
	               ?></td>
             </tr>
             <tr><td>
                 City: </td>
                 <td><select><option value="select">Select</option>
                       <option value="lahore">Lahore</option>
                       <option value="islamabad">Islamabad</option>
                       <option value="karachi">Karachi</option>
                       <option value="Peshawar">Peshawar</option>
                       <option value="quetta">Quetta</option>         
                     </select></td>
             </tr>
             <tr><td>Logo image:
                 </td>
                 <td>
                      <form action="addJob.php" method="POST" enctype="multipart/form-data">
		              <input type="file" id="userpic" name="userpic"/><br>
		              <input type="submit" id="btnupload" name="btnupload" value="Upload Pic"/>
	                  </form>
                 </td>
             </tr>
             <tr><td>
                 </td>
                 <td>
                     <br /><br />
                     <form action="addJob.php" method="POST">
                     <input type="submit" value="Save" name="btnSave" style="background-color:green;color:white;">
                     <input type="submit" value="Back" name="btnBack" style="background-color:green;color:white;">
                     </form>
                 </td>
             </tr>
         </table>
    </form>
</body>
</html>