<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
		<link rel="stylesheet" href="style.css">
		
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<style>
                         body{
			background-color:  hsla(180, 4%, 10%, 2.548);
			overflow: hidden;
			display: grid;
			justify-content: center ;
			text-align: center;
			height: 20vh;
			
			/*
                background-image: url(assets/images/hero-banner.png);
				filter: blur(8px);
				-webkit-filter: blur(8px);
				height: 100%;
				overflow: hidden;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;*/
            }
           /*  span img{
                position: relative;
                left: 45%;
            }
           span h3{
                position: relative;
                left: 40%;
            }
			*/
			.form-group{
				display: grid;
				justify-content: center;
				
			}
            .form-group input{
                width: 400px;
				
            }
			.mainbox{
				display:block;
				justify-content: center;
				padding: 180px;
				background-color: white;
				border-radius: 5px;
				
			}
			/*
           .hover-rotate{
			overflow: hidden;
			margin: 8px;
			min-width: 240px;
			max-width: 320px;
			width: 100%;
		   }
		   */
		   .hover-rotate img{
			transition: all 1.3s;
			max-width: 100%;
		   }
		   .hover-rotate:hover img{
			transform: scale(1) rotate(360deg);
		   }
        </style>	
</head>
<body>
	<nav class="navbar navbar-default">
	
	</nav>
	<div class="mainbox">

	
        <span>
		<figure class="hover-rotate">
        <img src="./assets/images/logo.svg" width="100" height="80" loading="lazy" class="img" >
		</figure>
		<h3 class="text-primary">User Login</h3>
		
        </span>
		<div class="input">
			<form method="POST" action="login.php">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
		
				<center>
					<a href="reg.html">Don't have an account?</a>
					<button  name="login" class="btn btn-primary" onclick="function2()">Login</button>
	
			</form>
		</div>
	</div>
	
</body>	
<script>
	function function2() { 
	swal( "Login successfull.");
}
</script>
</html>