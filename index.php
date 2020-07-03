<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: bookstore.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

<div class=header>
	<h2>Calipso Bookstore</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
    </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?>!</strong></p>
  <div class="login-box">
    <div class="button">  <a href="search.php">Search a Book to Borrow</a> </div>
    <div class="button">  <a href="searchb.php">Search a Borrower for your book</a></div>
    <div class="button">  <a href="lender.php">Add a book to lend</a> </div>
    <div class="button">  <a href="borrow.php">Add a book request to borrow</a> </div></div>
    <div id="bottom"><p><a href="books.php" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>

</body>
</html>
