
<html>
    <head>
    </head>
    <body>
        <div>
        <a href="#" style="text-decoration:none" name="add">Add a job</a><br /><br />
        <a href="#" style="text-decoration:none" name="view">View all jobs</a>
        </div>
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