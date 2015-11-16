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
    <style>
        .test{
            borderstyle:solid;
            border-width:1px;
            border-color:grey;
        }
    </style>
</head>
<body>
    
<?php
    

			
			$sql = "SELECT JobTitle, CompanyName, City from Jobs";
			$result = mysqli_query($conn, $sql);

			$recordsFound = mysqli_num_rows($result);
			
			if ($recordsFound > 0) {
			
				echo "<div class='box'>";
				echo "<table>";
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr class='test'>";
					echo "<td><a href='#'>".$row['JobTitle']."</a></td>"."<br />";
                    echo "</tr>" ;
                    echo "<tr><td>".$row['CompanyName']--."</td>";
                    echo "<td>".$row['City']."</td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "</div>";
				}
				
        
?>
</body>
</html>