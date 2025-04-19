<!DOCTYPE html>
<?php
	session_start();
	if(!ISSET($_SESSION['user_id'])){
		header('location:index.php');
	}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>investment plan</title>

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

     <link rel="stylesheet" href="invest.css">
     
</head>
  

<body>



    <header class="header" data-header>
        <div class="container">
          <div class="col-md-6">
            
            <?php
              require'conn.php';
            
              
              $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id`='$_SESSION[user_id]'") or die(mysqli_error());
              $fetch = mysqli_fetch_array($query);
              
              echo "<h2 class='text-success'> ".$fetch['username']." </h2>";
            ?>
           
          </div>
    
          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="32" height="32" alt="Cryptex logo">
            OJTCOIN
          </a>
    
          <nav class="navbar" data-navbar>
            <ul class="navbar-list">
    
              <li class="navbar-item">
                <a href="home.php" class="navbar-link " data-nav-link>Homepage</a>
              </li>
    
              <li class="navbar-item">
                <a href="#" class="navbar-link" data-nav-link>Buy Crypto</a>
              </li>
    
              <li class="navbar-item">
                <a href="#" class="navbar-link active" data-nav-link>Markets</a>
              </li>
    
              <li class="navbar-item">
                <a href="#" class="navbar-link" data-nav-link>Sell Crypto</a>
              </li>
    
              <li class="navbar-item">
                <a href="#" class="navbar-link" data-nav-link>Blog</a>
              </li>
    
              <li class="navbar-item">
                <a href="#" class="navbar-link" data-nav-link>BITUSDT</a>
              </li>
    
            </ul>
          </nav>
    
          <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
            <span class="line line-1"></span>
            <span class="line line-2"></span>
            <span class="line line-3"></span>
          </button>
    
         
          <a href="logout.php" class="btn btn-outline ">Logout</a>
    
        </div>
      </header>
    
      

      <div class="whitebox">
        <div class="inner">
       
        <div class="container">
<!--
        <h5 class="h2 section-title">Ojtcoin.com offers investors lucrative opportunity with 4 investment plan to earn high returns and stable profits on your invstments on our platform
          . We make these invsetment plans strategically,which minimize your risk of invsetment and maximizes the return of interest.
        </h5>
-->

          <h2 class="h2 section-title">Choose A Plan That Work's For You...</h2>
          <hr>
<!--
          <p class="section-text">
            Stacks is a production-ready library of stackable content blocks built in React Native.
          </p>
-->
          <ul class="instruction-list">

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/pngwing2.png" width="85" height="96" loading="lazy" alt="Step 1"
                    class="img">
                </figure>

            

                <h3 class="h3 card-title">BASIC</h3>

                <p class="card-text">
                 20.00 USD
                </p>

                <p class="card-text">
                 Daily / 10 Times
                </p>
                <label class=" returns">
                  Instant Withdrawer
                </label>

                <p class="card-text">
                 Min:$20.00
                </p>
                <p class="card-text">
                 Max:$30.00
                </p>
                
                <a href="#" class="btn btn-primary">Invest now</a>
                
              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/pngwing3.png" width="85" height="96" loading="lazy" alt="Step 2"
                    class="img">
                </figure>


                <h3 class="h3 card-title">SILVER</h3>

                <p class="card-text">
                 10.00 USD
                </p>

                <p class="card-text">
                 Daily / 10 Times
                </p>
                <label class="returns">
                Instant Withdrawer
                </label>

                <p class="card-text">
                 Min:$30.00
                </p>
                <p class="card-text">
                 Max:$50.00
                </p>
                 
                 
                <a href="#" class="btn btn-primary">Invest now</a>
                
              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/pngwing4.png" width="130" height="96" loading="lazy" alt="Step 3"
                    class="img">
                </figure>

                <h3 class="h3 card-title">GOLD</h3>

                <p class="card-text">
                 10.00 USD
                </p>

                <p class="card-text">
                 Daily / 10 Times
                </p>
                <label class="returns">
                 Instant Withdrawer
                </label>

                <p class="card-text">
                 Min:$50.00
                </p>
                <p class="card-text">
                 Max:$100.00
                </p>

                <a href="#" class="btn btn-primary">Invest now</a>
                

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/plt.png" width="70" height="70" loading="lazy" alt="Step 4"
                    class="img">
                </figure>


                <h3 class="h3 card-title">PLANTINUIM</h3>


                <p class="card-text">
                 10.00 USD
                </p>

                <p class="card-text">
                 Daily / 10 Times
                </p>
                <label class="returns">
                  Instant Withdrawer
                </label>

                <p class="card-text">
                 Min:$100.00
                </p>
                <p class="card-text">
                 Max:$500.00
                </p>
                
                <a href="#" class="btn btn-primary">Invest now</a>
                

              </div>
            </li>

          </ul>
         
        </div>

        
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



  
      <script src="./assets/js/script.js" defer></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>


</html>