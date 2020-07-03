<?php

$Name = $_POST['Name'];
$email = $_POST['email'];
$Bookname = $_POST['Bookname'];
$book_id = $_POST['book_id'];
$phone = $_POST['phone'];
$room = $_POST['room'];
$block = $_POST['block'];
$category = $_POST['category'];

if ( !empty($Name) || !empty($email)  || !empty($Bookname) || !empty($book_id) || !empty($phone) || !empty($room)|| !empty($block)|| !empty($category))
{
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "calipso";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    }


  $sql = "INSERT Into lender (Name, email, Bookname, book_id, phone, room, block, category ) values(?, ?, ?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssssssss", $Name, $email, $Bookname, $book_id, $phone, $room, $block, $category);
  $stmt->execute();


 echo "Details inserted successfully, a borrower will contact you soon";}
 ?>
 <html>
 <head><title="success"></title>
   <style>
   body {background:url("rows-books-library_73152-2680.jpg");
        background-size:cover;}
   a{ font-size: 16px;
      text-decoration: none;
     }


   </style>
 </head>
 <body>
   <br><br>
   <a href=index.php>Go to Home</a>
 </body>
 </html>
