<?php include "database.php"; ?>


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
					<div class="col-md-6 col-md-offset-3" >
						
						<h1 class="text-center text-danger">Welcome to our website</h1>

						<h2>Please Contact with us via this form</h2>
						

						<form action="data.php" method="post" class="form well">
							<div class="form-group"> 
								<label for="name">Your Name</label>
								<input name="name" class="form-control" id="name" type="text" placeholder="Your name">
								
							</div>
							<div class="form-group"> 
								<label for="email">Your Email</label>
								<input name="email" class="form-control" id="email" type="email" placeholder="Your email">
								
							</div>
							<div class="form-group"> 
								<label for="phone">Your Phone</label>
								<input name="phone" class="form-control" id="phone" type="text" placeholder="Your Phone">
								
							</div>
							<div class="form-group"> 
								<select class="form-control" name="problem" id="">
									<option value="pet betha">Pet Betha</option>
									<option value="Matha Betha">Matha Betha</option>
								</select>
							</div>
							<div class="form-group"> 
								<label for="message">Your Message</label>
								<textarea name="message" class="form-control" id="message" cols="30" rows="10"></textarea>
								
							</div>

							<div class="form-group"> 
								
								<input name="submit" type="submit" class="btn btn-info" value="sent">
								
							</div>


						</form>


					</div>
				</div>
			</div>
        </section>


    </body>
</html>