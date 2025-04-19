<!DOCTYPE html>
<html lang="en">
	<head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" ></script>
		
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
		
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="invest.css">
     
		
        <style>
               body{
			/*background-color:  hsla(180, 4%, 10%, 2.548);
			overflow: hidden;
			display: grid;
			justify-content: center ;
			text-align: center;
			height: 20vh;
			*/
			
                background-image: url(assets/images/newbg/bg2.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
				overflow: hidden;
				height: 100vh;
				
            }
           /*  span img{
                position: relative;
                left: 45%;
            }*/
           span {
                display: grid;
                justify-items: center;
            }
			
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
				padding: 15px;
				background-color: transparent;
				border-radius: 5px;
				
			}
			.footer-bottom{
				position: relative;
				bottom: -250px;
			}
          
	
        </style>
	</head>
<body>
	<nav class="navbar navbar-default">
	
	</nav>
	<div class="mainbox">

	
        <span>
			
        <h3 class="text-primary"><img src="assets/images/icon/user.png"></h3>
        </span>
		<div class="input">
			<form method="POST" action="reg.php">
				<div class="form-group">
					<label>Username</label>
					<input type="text" name="username" class="form-control" required="required"/>
				</div>

                <div class="form-group">
					<label>Email</label>
					<input type="email" name="email" class="form-control" required="required"/>
				</div>
				

                <div class="form-group">
					<label>Bitcoin address</label>
					<input type="text" name="btcaddrs" class="form-control" required="required"/>
				</div>

                <div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control" required="required"/>
				</div>
		
				<center>
                    <button  name="update" class="btn btn-primary" >UPDATE DETAILS</button>
	
					<a href="home.php" class="btn btn-primary">  CANCEL</a>
          
	
                </center>
			</form>
		</div>
	</div>

    
        
  <!-- 
    - #FOOTER
  -->

  
  <div class="footer-bottom">
  <div class="container">

    <p class="copyright">
      &copy; 2022 Ojtcoin All Rights Reserved by <a href="#" class="copyright-link">ojtechnologies</a>
    </p>

    <ul class="social-list">

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-twitter"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>

      <li>
        <a href="#" class="social-link">
          <ion-icon name="logo-linkedin"></ion-icon>
        </a>
      </li>

    </ul>

  </div>
</div>
</body>	

</html>