
<html>
    <head>
    </head>
    <body>
        <form>
        <input type="submit" name="add" value="Add a job" /><br /><br />
        <input type="submit" name="view" value="View all jobs" />
        </form>
         <?php
                if(isset($_REQUEST["add"]) == true){
                header('Location: addJob.php');
            }
                if(isset($_REQUEST["view"]) == true){
                header('Location: viewJobs.php');
            }
    
         ?>
    </body>
</html>