<?php include('conn3.php'); ?>
<?php
session_start(); 
?>
<html>
<head>
    <title>Login</title>
     <link rel="stylesheet" href="login2.css">

    <script src="jquery.js" type="text/javascript"></script>
<script>
        
	$(document).ready(function(){
		
		
		
		$("#btnSubmit").click(function(){
		
			var f = $("#txtFirst").val();
			var l = $("#txtLast").val();
			var e = $("#txtEmail").val();
			var u = $("#txtUser").val();
            var p = $("#txtPasswd").val();
			var m = $("#month").val();
			var d = $("#day").val();
			var y = $("#year").val();
            var g = $("#gender").val();
            
            
			var data = {"action": "save","Username":u, "Password" : p, "EmailID":e, "Gender" : g,"FirstName":f, "LastName":l,"Month":m,"Day":d,"Year":y};
		
			var settings= {
				type: "POST",
				dataType: "json",
				url: "response.php",
				data: data,
				success: function(response) {
					alert("Record saved with Id:" + response.data);
					/*
					var v = response.data;
					console.log(typeof response.data);
					console.log(v.a);
					*/
				},
				error: function (err, type, httpStatus) {
				
				}
			};
			
			$.ajax(settings);
			console.log('request sent');
			return false;			
		});
    });
        
    </script>
</head>
    
<body id="body">
    <?php
            $error = "";
            $uname = "";
            $pswd = "";
                if(isset($_REQUEST["btnLogin"]) == true)
                {
                    $uname = $_REQUEST["txtEmail"];
   
                    $pswd = $_REQUEST["txtPassword"];
                    
                     if (empty($uname) || empty($pswd)) {
	                       $error = "Email or Password is invalid";
                     }
   
                     else{		   
                         $sql = "SELECT * FROM mem where EmailID ='$uname' and Password='$pswd'";
		
                         $result = mysqli_query($conn, $sql);
	   
                         $NumRecords = mysqli_num_rows($result);
		  
                         if($NumRecords == 1)
                         {
                             $_SESSION['user']=$uname;
                             header('Location: home.php');
                         }
                         else {
                             $error = "EmailID or Password is invalid";
                         }
                     }
                }
           ?>

            
               
    
    <div id="header">
        
        <form action="login2.php" method="POST">   
       <div id="btn">
           
          <input type="submit" value="Login" name="btnLogin" style="background-color:blue">
           
           

        </div>
         <div id="passwd">
             
         <label style="color:aliceblue;">Password</label><br />
         <input type="text" name="txtPassword" /><br />
         <a href="#" style="color:darkgrey;text-decoration: none">Forgot your password?</a>
      
        </div>
        &nbsp;&nbsp;&nbsp;&nbsp;
        <div id="Email" >
            
             <label style="color:aliceblue;">Email or Phone</label><br />
             <input type="text" name="txtEmail" /><br />
             <input type="checkbox" name="remember" style="color:aliceblue;margin-left:0px;" ><label                                  style="color:darkgrey;font-weight:normal">&nbsp;&nbsp;Keep me logged in</label><br />            
        </div>
              <?php if($error != ""){
		       echo "<span style='background-color:red;color:white;float:right;margin-top:20px;'>".$error."</span>";
             }
	
	       ?>
    
      </div>
        
        </form>
    
      

    <div id="main">
        
    <div id="float">
       <form action="login2.php" method="POST">
       <table id="register" style="margin-left:40px;">
           <tr>
               <td>
                   <h1 style="margin:0px;padding:0px;">Sign Up</h1>
               </td>
           </tr>
           <tr>
               <td>
                   It's free and always will be.<br /><br />
               </td>
           </tr>
           <tr>
               <td>
               <input type="text" placeholder="First Name" id= "txtFirst" name="txtFirst" style="height:37px;width:170px;font-size:18px;" />
               <input type="text" placeholder="Last Name" id= "txtLast" name="txtLast" style="height:37px;width:170px;font-size:18px;"/><br /><br />
               </td>
           </tr>
           <tr>
               <td>
                   
                <input type="text" placeholder="Email or Number" name="txtEmail" id="txtEmail" style="height:37px;width:344px;font-size:18px;" /><br /><br />
               </td>
           </tr>
           <tr>
               <td>
                   
                <input type="text" placeholder="Username" id= "txtUser" name="txtUser" style="height:37px;width:344px;font-size:18px;" />
                   
                   <br /><br />
                   
               </td>
           </tr>
           <tr>
               <td>
                   
                <input type="text" placeholder="New Password" id="txtPasswd" name="txtPasswd" style="height:37px;width:344px;font-size:18px;" /><br /><br />
               </td>
           </tr>
           <tr>
               <td>
                   <label style="font-size:18;font-weight:normal">Birthday</label><br />
               </td>
           </tr>
           <tr>
               <td>
                    <select name="month" id="month">
                    <option value="Month"> Month</option>
                    <option value="jan">Jan</option>
                    <option value="feb">Feb</option>
                    <option value="mar">Mar</option>
                    <option value="apr"> Apr</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="aug">Aug</option>
                    <option value="sep">Sep</option>
                    <option value="oct">Oct</option>
                    <option value="nov">Nov</option>
                    <option value="dec">Dec</option>
                   </select>
                    <select name="day" id="day">
                    <option value="">Day</option>
                    <option value="1">1</option>
                    <option value="2">1</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    </select>
                    <select name="year" id="year">
                    <option value="Year">Year</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>     
                    <option value="1992">1992</option>     
                    <option value="1993">1993</option>     
                    <option value="1994">1994</option>     
                    <option value="1995">1995</option>     
                    <option value="1996">1996</option>     
                    <option value="1997">1997</option>     
                    <option value="1998">1998</option>     
                    <option value="1999">1999</option>     
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                   </select><br /><br />
               </td>
           </tr>
           <tr>
               <td>
                   
                    <input type="radio" id="radioFeMale" name="gender"  value="Male"  />&nbsp;Male&nbsp;&nbsp;
                    <input type="radio" id="radioMale" name="gender"  value="Female"/>&nbsp;Female<br /><br /><br />
               </td>
           </tr>
           <tr>
           <td>
               <input type="submit" value="Sign Up" id="btnSubmit" name="btnSubmit" style="background-color:green;color:white;width:150px;height:40px;"/>

                  
           
           </td>
           </tr>
           
       </table>
        </form>
        
    </div>
    </div>
</body>
</html>