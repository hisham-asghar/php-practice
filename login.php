<?php include('conn3.php'); ?>
<html>
<head>
    <title>Login</title>
     <link rel="stylesheet" href="login.css">
</head>
    
<body id="body">
    
    <div id="header">
        
        <form action="login.php" method="POST">   
       <div id="btn">
           
          <a href="#"><input type="submit" name="btnLogin"></a>
           
           <?php
                if(isset($_REQUEST["btnLogin"]) == true)
                {
                $uname = $_REQUEST["txtEmail"];
   
                $pswd = $_REQUEST["txtPassword"];
   
                if($uname == "ayesha@gmail.com" && $pswd == "ayesha")
                {
                    header('Location: home.php');
                }
                }
           ?>


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
      </div>
        </form>
    

    <div id="main">
        
    <div id="float">
       <form action="login.php" method="POST">
       <table id="register">
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
               <input type="text" placeholder="First Name" id="txtFirst" style="height:37px;width:170px;font-size:18px;" />
               <input type="text" placeholder="Last Name" id="txtLast" style="height:37px;width:170px;font-size:18px;"/><br /><br />
               </td>
           </tr>
           <tr>
               <td>
                <input type="text" placeholder="Email or Number" id="txtEmail" style="height:37px;width:344px;font-size:18px;" /><br /><br />
               </td>
           </tr>
           <tr>
               <td>
                <input type="text" placeholder="Username" id="txtUser" style="height:37px;width:344px;font-size:18px;" /><br /><br />
               </td>
           </tr>
           <tr>
               <td>
                <input type="text" placeholder="New Password" id="txtPasswd" style="height:37px;width:344px;font-size:18px;" /><br /><br />
               </td>
           </tr>
           <tr>
               <td>
                   <label style="font-size:18;font-weight:normal">Birthday</label><br />
               </td>
           </tr>
           <tr>
               <td>
                    <select >
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
                    <select>
                    <option value="Day">Day</option>
                    <option value="one">1</option>
                    <option value="two">1</option>
                    <option value="three">3</option>
                    <option value="four">4</option>
                    <option value="five">5</option>
                    <option value="six">6</option>
                    <option value="seven">7</option>
                    <option value="eight">8</option>
                    <option value="nine">9</option>
                    <option value="ten">10</option>
                    <option value="eleven">11</option>
                    <option value="twelve">12</option>
                    <option value="thirteen">13</option>
                    <option value="forteen">14</option>
                    <option value="fifteen">15</option>
                    <option value="sixteen">16</option>
                    <option value="seventeen">17</option>
                    <option value="eighteen">18</option>
                    <option value="ninteen">19</option>
                    <option value="twenty">20</option>
                    <option value="two-one">21</option>
                    <option value="two-two">22</option>
                    <option value="two-three">23</option>
                    <option value="two-four">24</option>
                    <option value="two-five">25</option>
                    <option value="two-six">26</option>
                    <option value="two-seven">27</option>
                    <option value="two-eight">28</option>
                    <option value="two-nine">29</option>
                    <option value="thirty">30</option>
                    <option value="three-one">31</option>
                    </select>
                    <select >
                    <option value="Year">Year</option>
                    <option value="ninty">1990</option>
                    <option value="nine-one">1991</option>     
                    <option value="nine-two">1992</option>
                    <option value="nine-three">1993</option>
                    <option value="nine-four">1994</option>
                    <option value="nine-five">1995</option>
                    <option value="nine-six">1996</option>
                    <option value="nine-seven">1997</option>
                    <option value="nine-eight">1998</option>
                    <option value="nine-nine">1999</option>
                    <option value="zero-zero">2000</option>
                    <option value="zero-one">2001</option>
                    <option value="zero-two">2002</option>
                    <option value="zero-three">2003</option>
                    <option value="zero-four">2004</option>
                    <option value="zero-five">2005</option>
                    <option value="zero-six">2006</option>
                    <option value="zero-seven">2007</option>
                    <option value="zero-eight">2008</option>
                    <option value="zero-nine">2009</option>
                    <option value="one-zero">2010</option>
                    <option value="one-one">2011</option>
                    <option value="one-two">2012</option>
                    <option value="one-three">2013</option>
                    <option value="one-four">2014</option>
                    <option value="one-five">2015</option>
                   </select><br /><br />
               </td>
           </tr>
           <tr>
               <td>
                    <input type="radio" id="radioFeMale" name="gender" checked="checked" />&nbsp;Female&nbsp;&nbsp;
                    <input type="radio" id="radioMale" name="gender" />&nbsp;Male<br /><br /><br />
               </td>
           </tr>
           <tr>
           <td>
               <a href="#"><input type="submit" name="btnSubmit"/></a>
                  
           <?php
                if(isset($_REQUEST["btnSubmit"]) == true){
                echo "button is pressed";
            }
    
           ?>
               
           </td>
           </tr>
           
       </table>
        </form>
        
    </div>
    </div>
</body>
</html>