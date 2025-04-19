
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
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="./assets/css/css1/styles.css">

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
        <a href="useraccount.php">
        
        <?php
          require'conn.php';
        
          
          $query = mysqli_query($conn, "SELECT * FROM `user` WHERE `user_id`='$_SESSION[user_id]'") or die(mysqli_error());
          $fetch = mysqli_fetch_array($query);
          
          echo "<h2 class='text-success'> Welcome ".$fetch['username']." </h2>";
        ?>
        </a>
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
            <a href="#" class="navbar-link" data-nav-link>Markets</a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link" data-nav-link>Sell Crypto</a>
          </li>

          <li class="navbar-item">
            <a href="blog.php" class="navbar-link" data-nav-link>Blog</a>
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

</body>
</html>