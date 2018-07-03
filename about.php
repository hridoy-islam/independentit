<?php
    

    $name = $_GET['name'];
    $email = $_GET['email'];
    $phone = $_GET['phone'];
    $sub = $_GET['subject'];
    $mess = $_GET['message'];

   echo " $name <br>";
   echo " $email <br>";
   echo " $phone <br>";
   echo " $sub <br>";
   echo " $mess <br>"; 
    
    
    //    header("location: thanks.php");
 
    

?>

<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        
        <table class="">
            <tr> 
                <td> <?php echo $name;?> </td>
                <td> <?php echo $email;?> </td>
                <td> <?php echo $phone;?> </td>
                <td> <?php echo $sub;?> </td>
                <td> <?php echo $mess;?> </td>
            </tr>
            
            </table>
        
        
    </body>
</html>