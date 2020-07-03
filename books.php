<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">


	<title>Calipso Bookstore</title>
	<link rel="stylesheet" type= "text/css" href="http://localhost/dbms/bookstore_css.css">
	<meta name="viewport" content="width-device-width">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="http://localhost/dbms/bookstore_js.js"></script>

</head>
<body>

	<header>
  <center><div class="header">
    <h1>Calipso Books</h1>
  </div></center>
	<!--	<nav>
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Exchnage Books</a>
        <li><a href="#">Browse books by Category</a>
          <ul>
            <li><a href="#">Course related</a></li>
            <li><a href="#">Fiction novels</a></li>
            <li><a href="#">Non-Fiction novels</a></li>
          </ul>
        </li>
        <li><a href="#">About</a></li>
        <li><a href="file:///C:/Aditi_html/Calipso%20Bookstore%20Project/register_form.html">Register</a></li>
        <li><a href="file:///C:/Aditi_html/Calipso%20Bookstore%20Project/sign_in_form.html">Sign In</a></li>
      </ul>
    </nav> -->
	</header>
		<main>
			<div id="mySidenav" class="sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
              <!--<a href="#">Home</a>-->
  			  <a href="login.php">Exchange Books</a>
  			  <a href="academic.php">Course/Subject Related</a>
  			  <a href="scifi.php">Sci-fi</a>
  			  <a href="mystery.php">Mystery</a>
  			  <a href="romance.php">Romance</a>
  			  <a href="biography.php">Biography</a>
  			  <a href="fiction.php">Fiction</a>
  			  <a href="nonfiction.php">Non-Fiction</a>
  			</div>

<!-- Use any element to open the sidenav -->
			<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; Browse</span>

<!-- Add all page content inside this div if you want the side nav to push page content to the right (not used if you only want the sidenav to sit on top of the page -->
			<div id="main"></div>

		    <div id="one">
		    	<a href="register.php">Register</a>
  			</div>
  			<div id="two">
  				<a href="login.php">Sign In</a>
  			</div>

		<center>	<aside class="column">
			<a> <img src="https://i.pinimg.com/originals/68/42/3d/68423d08fb6255374d33efd956d58e2f.jpg" alt="exchange_books_photo"/> </a>

			<a>
			<img src="https://www.mwi.com/wp-content/uploads/2015/09/bigstock-Stack-Of-Books-70033240-1024.jpg" alt="buy_new_books_photo" /></a>

			<a>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTxJd0fRTzNTJUgriwYGdNY7xnrCEtR9sEKs2qnT-HID3jAfNUq&usqp=CAU"  alt="about_photo"></a>

		   </aside></center>
		<center><section class="hello">
				<h2>Welcome to Calipso Bookstore!!</h2>
			<p>A lot of people love to read books and novels but find it difficult to purchase or want don't want to buy a new book everytime and save some money. Plus no e-book can ever replace the smell or feel of reading a book while holding it in your hands.</p>
			<p>Calipso Bookstore is a haven for book lovers. Here you can buy new books, exchange books with people or put your own old/used books for exchange that too completely free of cost!</p>
			<p>So, what are you waiting for? Start searching for the books you want to read now!  </p>
	</section><center>

</main>
</body>
</html>
