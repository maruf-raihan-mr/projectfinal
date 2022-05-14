<?php   
 include 'auth.php';  
 $query = "select * from user";  
 $run = mysqli_query($conn,$query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
      <meta charset="utf-8">  
      <title>Delete Data From Database in PHP</title>  
      <style>
      
      
      *{  
      padding: 0;  
      margin: 0;  
      box-sizing: border-box;  
 }  
 body{  
      width: 100%;  
      height: 100vh;  
      background-color: #34495e;  
      position: relative;  
      font-family: 'verdana',sans-serif;  
 }  
 header{  
      width: 100%;  
      height: 80px;  
      background-color: #2c3e50;  
 }  
 table{  
      width: 75%;  
      position: absolute;  
      top: 50%;  
      left: 50%;  
      transform: translate(-50%,-50%);  
 }  
 .heading{  
      background-color: #FFFF;  
 }  
 .heading th{  
      padding: 10px 0;  
 }  
 .data{  
      text-align: center;  
      color: #FFFF;  
 }  
 .data td{  
      padding: 15px 0;  
 }  
 #btn{  
      text-decoration: none;  
      color: #FFF;  
      background-color: #e74c3c;  
      padding: 5px 20px;  
      border-radius: 3px;  
 }  
 #btn:hover{  
      background-color: #c0392b;  
 }  
</style>
 </head>  
 <body>  
 <header><title>Deactive Account</title></header>  
 <table border="1" cellspacing="0" cellpadding="0">  
      <tr class="heading">  
            
           <th>ID</th>  
           <th>Username</th>  
           <th>Email</th>  
           <th>Password</th>  
           <th>Phone</th>  
           <th>Gender</th>  
           <th>Occupation</th>  
            
      </tr>  
      <?php   
       
           if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                     echo "  
                          <tr class='data'>  
                           
                               <td>".$result['id']."</td>  
                               <td>".$result['username']."</td>  
                               <td>".$result['email']."</td>  
                               <td>".$result['password']."</td> 
                              
                               <td>".$result['phone']."</td>  
                               <td>".$result['gender']."</td> 
                               <td>".$result['occupation']."</td>  
                               <td><a href='delete.php?email=".$result['email']."' id='btn'>Delete</a></td>  
                          </tr>  
                     ";  
                }  
           }  
      ?>  
 </table>  

 <?php   
 include 'auth.php';  
 if (isset($_GET['email'])) {  
      $email = $_GET['email'];  
      $query = "DELETE FROM `user` WHERE email = '$email'";  
      $run = mysqli_query($conn,$query);  
      if ($run) { 
       
        header("Location: load.php");
        
      }else{  
           echo "Error: ".mysqli_error($conn);  
      }  
 }  
 ?>  
 </body>  
 </html>  