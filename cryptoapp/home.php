<!DOCTYPE html>
<?php
	session_start();
	if(!ISSET($_SESSION['user_id'])){
		header('location:index.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cryptex - Buy & Sell Digital Assets In The cryptex</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">
    <div class="col-md-6">
        
        <?php
          require'conn.php';
        
          
          $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id`='$_SESSION[user_id]'") or die(mysqli_error());
          $fetch = mysqli_fetch_array($query);
          
          echo "<h3 class='text-success'> Welcome ".$fetch['username']." </h3>";
        ?>
       
      </div>

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="32" height="32" alt="Cryptex logo">
        OJTCOIN
      </a>

      <nav class="navbar" data-navbar>
        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#" class="navbar-link active" data-nav-link>Homepage</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Buy Crypto</a>
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

          <li class="navbar-item">
            <a href="logout.php" class="navbar-link" data-nav-link>Logout</a>
          </li>

        </ul>
      </nav>

      <button class="nav-toggle-btn" aria-label="Toggle menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>
    
     <!--<a href="#" class="btn btn-outline">Wallet</a>-->

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->
      <section class="section hero" aria-label="hero" data-section>
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Buy, Sell & Invest Digital Assets With US</h1>

            <p class="hero-text">
              Ojtech coin investment is the easiest, safest, and fastest way to buy & sell crypto asset exchange.
            </p>
          
            <a href="#instruction" class="btn btn-primary">Get started now</a>
           
          </div>

          <figure class="hero-banner">
          <div class="slider-area">
        <div class="img-area">
               
            <img src="assets/images/coin-1.svg">
            <img src="assets/images/coin-2.svg">
            <img src="assets/images/coin-3.svg">
            <img src="assets/images/coin-4.svg">
            <img src="assets/images/coin-5.svg">
            <img src="assets/images/coin-6.svg">
            <img src="assets/images/coin-7.svg">
            
            <img src="assets/images/coin-1.svg">
            <img src="assets/images/coin-2.svg">
            <img src="assets/images/coin-3.svg">
            <img src="assets/images/coin-4.svg">
            <img src="assets/images/coin-5.svg">
            <img src="assets/images/coin-6.svg">
            <img src="assets/images/coin-7.svg">
            <img src="assets/images/coin-3.svg">
            <img src="assets/images/coin-4.svg">
            <img src="assets/images/coin-5.svg">
            <img src="assets/images/coin-1.svg">
            <img src="assets/images/coin-2.svg">
            <img src="assets/images/coin-3.svg">
            <img src="assets/images/coin-4.svg">
            <img src="assets/images/coin-5.svg">
            <img src="assets/images/coin-6.svg">
            <img src="assets/images/coin-7.svg">
            <img src="assets/images/coin-8.svg">
            <img src="assets/images/coin-1.svg">
            <img src="assets/images/coin-2.svg">
            <img src="assets/images/coin-3.svg">
            <img src="assets/images/coin-4.svg">
            <img src="assets/images/coin-5.svg">
        </div>
    </div>
          </figure>

        </div>
      </section>


      <!-- 
        - #TREND
      -->

      <section class="section trend" aria-label="crypto trend" data-section>
        <div class="container">

          <div class="trend-tab">

            <ul class="tab-nav">

              <li>

            <a href="market.php" class="btn ">See more</a>

              </li>


            </ul>
<?php
include("newmarket.php");
?>

          </div>

        </div>
      </section>









      <!-- 
        - #MARKET
      -->
         
      <section class="section market" aria-label="market update" data-section>
        <div class="container">

          <div class="title-wrapper">
             </div>

          <div class="market-tab">
            <!--

            <ul class="tab-nav">

              <li>
                <button class="tab-btn active">View All</button>
              </li>

              <li>
                <button class="tab-btn">Metaverse</button>
              </li>

              <li>
                <button class="tab-btn">Entertainment</button>
              </li>

              <li>
                <button class="tab-btn">Energy</button>
              </li>

              <li>
                <button class="tab-btn">NFT</button>
              </li>

              <li>
                <button class="tab-btn">Gaming</button>
              </li>

              <li>
                <button class="tab-btn">Music</button>
              </li>

            </ul>
            -->

            <table class="market-table">

              <thead class="table-head">

                <tr class="table-row table-title">

                  <th class="table-heading"></th>

                  <th class="table-heading"></th>

                </tr>

              </thead>

              <tbody class="table-body">


              <a href="market.php" class="btn ">See more</a> 
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                       </button>
                 <?php
                 include("market.php");
                 ?>

               
                
                    <button class="add-to-fav" aria-label="Add to favourite" data-add-to-fav>
                     </button>
              

              </tbody>

            </table>

          </div>

        </div>
      </section>





      <!-- 
        - #INSTRUCTION
      -->
      <div id="instruction" >
      <section class="section instruction" aria-label="instruction" data-section>
        <div class="container">

          <h2 class="h2 section-title">How It Works</h2>
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
                  <img src="./assets/images/instruction-1.png" width="96" height="96" loading="lazy" alt="Step 1"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 1</p>

                <h3 class="h3 card-title">Signup</h3>

                <p class="card-text">
                  Signup/Login to be able to Access your account and investment
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/instruction-2.png" width="96" height="96" loading="lazy" alt="Step 2"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 2</p>

                <h3 class="h3 card-title">Fund Wallet</h3>

                <p class="card-text">
                 Top Up your cryptocurrency wallet inorder in  to continue with your invest plan .
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/instruction-3.png" width="96" height="96" loading="lazy" alt="Step 3"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 3</p>

                <h3 class="h3 card-title">Choose investment plan</h3>

                <p class="card-text">
                 Pick a plan that is well suited for you and invest with your preffed cryptocurrency.
                </p>

              </div>
            </li>

            <li>
              <div class="instruction-card">

                <figure class="card-banner">
                  <img src="./assets/images/instruction-4.png" width="96" height="96" loading="lazy" alt="Step 4"
                    class="img">
                </figure>

                <p class="card-subtitle">Step 4</p>

                <h3 class="h3 card-title">Earn Money</h3>

                <p class="card-text">
                 Relax, enjoy  and watch as we grow your invested cryptocurrency.
                </p>

              </div>
            </li>

          </ul>
          <div class="invt">
          <a href="investmentplan.php" class="btn btn-primary">Invest now</a>
          </div>
        </div>
      </section>


      </div>




      <!-- 
        - #ABOUT
      -->

      <section class="section about" aria-label="about" data-section>
        <div class="container">

          <figure class="about-banner">
            <img src="./assets/images/candlestick.jpg" width="748" height="436" loading="lazy" alt="about banner"
              class="w-100">
          </figure>
<!--
          <div class="about-content">

            <h2 class="h2 section-title">What Is Cryptex</h2>

            <p class="section-text">
              Experience a variety of trading on Bitcost. You can use various types of coin transactions such as Spot
              Trade, Futures
              Trade, P2P, Staking, Mining, and margin.
            </p>
-->
            <ul class="section-list">

              <li class="section-item">
                
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title">View real-time cryptocurrency prices</h3>
                </div>

                <p class="item-text">
                  Experience a variety of trading on Bitcost. You can use various types of coin for your investment.
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 list-title">Keep track of your investment...</h3>

                </div>

                <p class="item-text">
                  Observe as we help you grow your investment, We specilize in growing without limitation.
                </p>

              </li>

            </ul>

          </div>

        </div>
      </section>


       <!-- 
        - #APP
      -->

      <section class="section app" aria-label="app" data-section>
        <div class="container">

          <div class="app-content">

            <h2 class="h2 section-title">Free Your Money & Invest With Confident</h2>

            <p class="section-text">
              With Ojtcoin Trade, you can be sure your Investment are secured
            </p>

            <ul class="section-list">

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 item-title">Buy, Sell, And Invest On The Go</h3>
                </div>

                <p class="item-text">
                  Manage Your Holdings From Your Mobile Decive
                </p>
              </li>

              <li class="section-item">
                <div class="title-wrapper">
                  <ion-icon name="checkmark-circle" aria-hidden="true"></ion-icon>

                  <h3 class="h3 item-title">Take Control Of Your Wealth</h3>
                </div>

                <p class="item-text">
                  Rest Assured You (And Only You) Have Access To Your Funds
                </p>
              </li>

            </ul>
<!--
            <div class="app-wrapper">
              <a href="#">
                <img src="./assets/images/googleplay.png" width="135" height="40" loading="lazy"
                  alt="get it on google play">
              </a>

              <a href="#">
                <img src="./assets/images/appstore.png" width="120" height="40" loading="lazy"
                  alt="download on the app store">
              </a>
            </div>

          </div>

          <div class="app-banner">
            <img src="./assets/images/app-banner.png" width="618" height="526" loading="lazy" alt="app banner"
              class="w-100">

            <span class="span">Scan To Download</span>
          </div>
-->
        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top" data-section>
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" width="50" height="50" alt="Cryptex logo">
           Ojtcoin
          </a>

          <h2 class="footer-title">Let's talk! 🤙</h2>

          <a href="tel:+123456789101" class="footer-contact-link">+12 345 678 9101</a>

          <a href="mailto:hello.cryptex@gmail.com" class="footer-contact-link">hello.ojtcoin@gmail.com</a>

          <address class="footer-contact-link">
            Cecilia Chapman 711-2880 Nulla St. Mankato Mississippi 96522
          </address>

        </div>

        <!--<ul class="footer-list">

          <li>
            <p class="footer-list-title">Products</p>
          </li>

        
          <li>
            <a href="#" class="footer-link">Exchange</a>
          </li>

          <li>
            <a href="#" class="footer-link">Launchpad</a>
          </li>

         

        </ul>
-->
        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Services</p>
          </li>

          <li>
            <a href="#" class="footer-link">Buy/Sell Crypto</a>
          </li>

          <li>
            <a href="#" class="footer-link">Crypto-Markets</a>
          </li>

          <li>
            <a href="#" class="footer-link"> Crypto-Investments</a>
          </li>

     
        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">Support</p>
          </li>

          <li>
            <a href="#" class="footer-link">Help Center</a>
          </li>

          <li>
            <a href="#" class="footer-link">User Feedback</a>
          </li>

          <li>
            <a href="#" class="footer-link">FAQ</a>
          </li>

          <li>
            <a href="#" class="footer-link">Submit a request</a>
          </li>

       
        </ul>

        <ul class="footer-list">

          <li>
            <p class="footer-list-title">About Us</p>
          </li>

          <li>
            <a href="#" class="footer-link">Careers</a>
          </li>
          <li>
            <a href="#" class="footer-link">Contact</a>
          </li>

          <li>
            <a href="#" class="footer-link">Blog</a>
          </li>
          <li>
            <a href="#" class="footer-link">Lagel & Security</a>
          </li>

        </ul>

      </div>
    </div>

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

  </footer>








  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js" defer></script>


  
  <script>
       
       function loadData(){
        $.getJSON("https://api.coingecko.com/api/v3/simple/price?ids=solana,bitcoin,ethereum&vs_currencies=usd",function(data){
            console.log(data)

            $('#btc-price').html("$"+data.bitcoin.usd)
            $('#eth-price').html("$"+data.ethereum.usd)
            $('#sol-price').html("$"+data.solana.usd)

        })
       }

       loadData();

        setInterval(function(){

            loadData();
        },5000)


    </script>
  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>