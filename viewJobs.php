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
            width: 300px;
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
    

			
			$sql = "SELECT JobTitle, CompanyName, City,LogoImage from Jobs";
			$result = mysqli_query($conn, $sql);

			$recordsFound = mysqli_num_rows($result);
			
			if ($recordsFound > 0) {
			
				echo "<div class='box'>";
			
                $i=1;
				while($row = mysqli_fetch_assoc($result)) {
                    echo "<table>";
                    if($i%2 != 0){
                        
                        echo "<tr class='test'>";
                        
                        echo "<td ><div style='float:left;'><a href='#'>".$row['JobTitle']."</a><br />";
                        echo $row['CompanyName']."&nbsp&nbsp&nbsp&nbsp".$row['City']."<br><br>" ;
                        echo "<input type='submit' name='edit' value='Edit' />" ;                    
                        echo "<input type='submit' name='delete' value='Delete' /></div>";
                        echo "<div style='float:right;'>";
						echo "<img src='img/{$row['LogoImage']}' width='100px' height='100px' class='image' />";
					    echo "</div>";
                        echo "</td>";
                        
                        $i= $i+1;
                        
                    
                    }
                    else{
                        echo "<td ><div style='float:left;'><a href='#'>".$row['JobTitle']."</a><br />";
                        echo $row['CompanyName']."&nbsp&nbsp&nbsp&nbsp".$row['City']."<br><br>" ;
                        echo "<input type='submit' name='edit' value='Edit' />" ;                    
                        echo "<input type='submit' name='delete' value='Delete' /></div>";
                        echo "<div style='float:right;'>";
						echo "<img src='img/{$row['LogoImage']}' width='100px' height='100px' class='image' />";
					    echo "</div>";
                      
                        echo "</td>";
                        echo "</tr>";
                        $i= $i+1;
                    }
                    
                    
					
                    
					
                    
				}
                  
                        
				echo "</table>";
				echo "</div>";
				}
				
        
?>
</body>
</html>