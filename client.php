<?php 
	include "database.php"; 
   
    $sql = "SELECT * FROM client";
    $query = mysqli_query($connection, $sql);
    
    
     

?>





<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        

        <section> 
			<div class="container"> 
				<div class="row"> 
					<div class="col-md-12" >
						
						
						<table class="table table-bordered"> 
							<tr> 
								<th>ID</th>
								<th>Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Problem</th>
								<th>Message</th>
							</tr>
                                                   <?php while($row = mysqli_fetch_assoc($query)){ ?>
							<tr> 
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['name']; ?></td>
								<td><?php echo $row['email']; ?></td>
								<td><?php echo $row['phone'] ;?></td>
								<td><?php echo $row['problem']; ?></td>
								<td><?php echo $row['message']; ?></td>
							</tr>
                                                   <?php }?>
                                                        
						</table>


					</div>
				</div>
			</div>
        </section>


    </body>
</html>




