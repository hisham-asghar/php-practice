<?php include('conn3.php'); ?>
<?php
session_start(); 

	if(isset($_SESSION["user"])==false)
	{
		header('Location:login2.php');
	}
?>
<html>
<head>
    <style type="text/css">
        table, tr ,td {
            border: 1px solid #990b05;
            width: 250px;
            height: 45px;
}
    </style>
    </head>
<body>
   <?php
    
                        if(isset($_REQUEST["edit"]) == true){
                            header('Location:addJob2.php');
                        }
                        
                       
    ?>
<?php
    

			
			$sql = "SELECT JobTitle, CompanyName, City from Jobs";
			$result = mysqli_query($conn, $sql);

			$recordsFound = mysqli_num_rows($result);
			
			if ($recordsFound > 0) {
			
				echo "<div class='box'>";
				echo "<table>";
				while($row = mysqli_fetch_assoc($result)) {
                    echo "<table>";
					echo "<tr class='test'>";
					echo "<td ><a href='#'>".$row['JobTitle']."</a><br />";
                    echo $row['CompanyName']."&nbsp&nbsp&nbsp&nbsp".$row['City']."<br><br>" ;
                    echo "<input type='submit' name='edit' value='Edit' />" ;                    
                    echo "<input type='submit' name='delete' value='Delete' /></td>";
                       
                    echo "</tr>";
                    
				}
                  
                        
				echo "</table>";
				echo "</div>";
				}
				
        
?>
</body>
</html>