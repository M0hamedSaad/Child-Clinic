<?php
     session_start();
if (!isset($_SESSION['username']))
{
    include 'login_register.php';
    die();
}

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo "Vaccination And Alarming System";?></title>
        <link rel="stylesheet" href="../../Css/Employee_Home_Page.css">
        <link rel="stylesheet" href="../Css/Employee_Home_Page.css">
         <link rel="stylesheet" href="../../Libaries/normalize.css">
        <link rel="stylesheet" href="../Libaries/normalize.css">
    </head>
    <body>
        <!--start container-->
        <div class="container">
            
        
        <!--start navbar-->
        <div class="navbar">
            
          
              <h1>V<span>SAS</span></h1>
                <ul>
                    <div class="log_nav">
                       <li><a href='../App/Controllers/Logout.php' target="_self">Log out</a> </li>
                      </div>
                    
                   
                   <li><a href="">Services</a>
                       <ul>
                   
                   <li><a href="?page=Invoices" >Add Invoices</a></li>  
                   <li><a href="?page=Finincial_Report">Finincial Report</a></li> 
                    <li><a href="?page=Employee_add_Vaccine">Add Vaccine</a></li> 
                           </ul>
                   </li>  
                 <li><a href="../App/Controllers/User_Page_Contrroler.php?user=Employee">Home</a></li>

        
        </ul>    
           
   
        </div>
     
        <!--end navbar-->
        
        
        
       
           <!--start cover-->
       <div class="cover">
         <?php
              if(@$_GET['page'])
              {
                  $url=$_GET['page'].".php";
                  include $url;
              }
                
                
            
              ?>
        </div>
        <!--end cover-->
        
        <!--start footer-->
        <div class="footer"><h5>All rights reserved&COPY;Team</h5></div>
         <!--start footer-->

        </div>
        <!--end container-->
    </body>
</html>
