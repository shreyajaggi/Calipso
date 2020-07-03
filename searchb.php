<!DOCTYPE HTML>
<html>
<head> <title>SEARCH</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
  <center><h1>Books Inventory</h1></center>
<form action = "searchb.php" method="post">
<br>
<center><h2>Enter the ISBN/Title of the book to be searched : </h2><br>
<input type="text" name="searchb" size="48"> <br></br>

<button type="submit" value="submit">Search</button>

</center>
<br>
</form>
<?php include('displayborrow.php') ?>
</body>
</html>
<a href="lender.php"><center>Didn't find a book? Add your details here.</center></a>
</body>
</html>
