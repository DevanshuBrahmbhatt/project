<!DOCTYPE html>
<html lang="en">
 <head>
    <title>Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
 
	.form-group
	{
	
		width:80%;
		height:80%;
		margin-top:10px;
		margin-left:4px;
		color:#c0c0c0;
		font-size:15px;
		
	
	}
	
	#dev
	{
	
		background-color:#017f99;
		height:30%;
		width:35%;
		margin-left:950px;
		margin-top:130px;
		border:2px solid black;

		
	}	
	
	#img
	{
	
	
		height:100%;
		float:left;
		width:40%;
		padding-top:40px;
		padding-left:30px;
		
		
		margin-top:20px;
	}
	
	#img1
	{
	

		height:100%;
		width:40%;
		float:left;
	}
	
		#img2
	{
	

		height:100%;
		width:40%;
		float:left;
		margin-left:15px;
	}

		
	#link
	{
		padding-left:10px;
		heigh:100%;
		width:35%;
		margin-left:330px;
		
	}
	
	#navigation
		{
				height:10%;
				width:100%;
				background-color:black;
				color:white;
				font-size:20px;
			}
		#search
			{
			    height:100%;
				width:100%;
				font-size:15px;
				color:black;
			}	
			input[type="search"]
			{
				width:19%;
				height:2%;
				font-size:20px;
				
			}
			
	</style>
 </head>
		
			<body>
			<div id="navigation">
			<nav class>
				
					<div class="container-fluid">
					
						<div class="navbar-header">
						
							<a class="navbar-brand" href="#"><strong>DDU</strong><small>Books</small></a>
						</div>
						
					<ul class="nav navbar-nav">
					
					  <li class="active"><a href="#">Home</a></li>
					     <li><a href="#">Page 1</a></li>
						  <li><a href="#">Page 2</a></li>
						  <li><a href="#">Page 3</a></li>
						 <li><a href="#">About us</a></li>
           
		            </ul>
					
					
					   <ul class="nav navbar-nav navbar-right">
                     
                       <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
                      </ul>
					
					</div>
					
				</nav>
			</div>
				
				
			<div id="img">
			
			
				
				<div id="img1">
				<a href="http://www.google.com">
			    <img src="C:\Users\devan\Desktop\my project\img\b4.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236"></a><br>
				
				<a href="http://www.google.com">
			    <img src="C:\Users\devan\Desktop\my project\img\b4.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236"></a> <br>
				
				<a href="http://www.google.com">
			    <img src="C:\Users\devan\Desktop\my project\img\b4.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236"></a> <br>
				
				<a href="http://www.google.com">
				<img src="C:\Users\devan\Desktop\my project\img\b4.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236"></a> <br>
				</div>
				
				
				<div id="img2">
				<a href="http://www.google.com">
			    <img src="C:\Users\devan\Desktop\my project\img\b4.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236"></a><br>
				
				<a href="http://www.google.com">
			    <img src="C:\Users\devan\Desktop\my project\img\b4.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236"></a> <br>
				
				<a href="http://www.google.com">
			    <img src="C:\Users\devan\Desktop\my project\img\b4.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236"></a> <br>
				
				<a href="http://www.google.com">
				<img src="C:\Users\devan\Desktop\my project\img\b4.jpg" class="img-responsive" alt="Cinque Terre" width="304" height="236"></a> <br>
				</div>
				
			</div>
			
			<div id="search">
			<h2>Buy and sell your book at best price!!!</h2>
			<input type="search" placeholder="search any book "></input>
			</div>
			
		
			
			<div id="dev">
			<form action="inser1.php" method="post">
				
				
			<div class="form-group">
				<label for="text">Enter firstname</label>
				<input type="text" name="NAME" class="form-control" id="name">
			  </div>
			
			<div class="form-group">
				<label for="text">Enter surname</label>
				<input type="text" name="SURNAME" class="form-control" id="uname">
			  </div>
				
			<div class="form-group">
				<label for="email">Email address:</label>
				<input type="email" name="EMAIL" class="form-control" id="email">
			  </div>
			  
			 <div class="form-group">
				<label for="pwd">Password:</label>
				<input type="password" name="PASSWORD" class="form-control" id="pwd">
			  </div>
			  
			  <div class="form-group">
				<label><input type="checkbox" name="e"> Remember me</label>
			  </div>
			  
			   <div class="form-group">
			<button name= "devanshu"type="submit" class="btn btn-default">Submit</button>
				</div>
			</form> 
							
				
		</div>	
			
			</body>
			
		</html>
