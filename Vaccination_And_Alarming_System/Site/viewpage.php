<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Search</title>
        <link rel="stylesheet" href="../../Css/Update_User.css">
        <link rel="stylesheet" href="../../Libaries/normalize.css">
    </head>
    <body>
         <!--start navbar-->
      
        <div class="navbar">
            <h1><span>V</span>SAS</h1>
            <img src="../../Images/logo.jpg">
             <ul>
                 <li><a href="../Controllers/User_Page_Contrroler.php?user=Admin" target="_self">Home</a></li>
                 <li><a href="../Controllers/Logout.php" target="_self">Log out</a> </li>
                  
                
            </ul>

            
            
        </div>
        <!--end navbar-->
        
                <!--start form-->
               
                <div class="form">
                      <h1>search</h1>
                      <form action="../Controllers/logger_controller.php" method="post">
                       
                        <!--<h2>ID *</h2>-->
                        <input required="required" name="id"  type="hidden" value="<?php echo $log[0]?>">     
                          
                    <h2>Name *</h2>
                    <input required="required" name="name" type="text" value="<?php echo $log[1]?>">
                    
                     
                     <h2>User Name *</h2>
                     <input required="required" name="username" type="text" value="<?php echo $log[2]?>">
                     
                      <h2>Password *</h2>
                      <input required="required" name="password" type="text" value="<?php echo $log[3]?>">
                     
                     <h2>Email *</h2>
                       <input  required="required"  name="email" type="email" value="<?php echo $log[4]?>">
                 
                      <h2>Age *</h2>
                      <input required="required"  name="age" type="number" max="80" min="20" value="<?php echo $log[5]?>">
                     
                                          
                      
                </form>
                    </div> 
                <!--end form-->
                
                <!--start footer-->
        <div class="footer"><h5>All rights reserved&COPY;Team</h5></div>
         <!--End footer-->
        </div>
            </div>
        
    </body>
</html>