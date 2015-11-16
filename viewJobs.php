<html>
<head>
</head>
<body>
<?php
if(isset($_REQUEST["btnShow"]) == true)
		{
			
			$sql = "SELECT id,name,city,age FROM student";
			$result = mysqli_query($conn, $sql);

			$recordsFound = mysqli_num_rows($result);
			
			if ($recordsFound > 0) {
			
				echo "<div class='box'>";
				echo "<table>";
				while($row = mysqli_fetch_assoc($result)) {
					echo "<tr class='test'>";
					echo "<td><a href='#'>".$row['id']." </a></td>";
					echo "<td>".$row['name']."</td>";
					echo "<td>".$row['city']."</td>";
					echo "</tr>";
				}
				echo "</table>";
				echo "</div>";
				}
				
        }
?>
</body>
</html>