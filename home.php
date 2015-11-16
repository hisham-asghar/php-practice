<?php
session_start(); // Starting Session

	if(isset($_SESSION["user"])==false)
	{
		header('Location:login.php');
	}

?>
<html>
    <head>
    </head>
    <body>
        <h1> Welcome  <?php echo $_SESSION['user']; ?> </h1>
        <form action="home.php" method="GET">
        <input type="submit" name="add" value="Add a job" /><br /><br />
        <input type="submit" name="view" value="View all jobs" />
        </form>
         <?php
                if(isset($_REQUEST["add"]) == true){
                header('Location: addJob2.php');
            }
                if(isset($_REQUEST["view"]) == true){
                header('Location: viewJobs.php');
            }
    
         ?>
    </body>
</html>