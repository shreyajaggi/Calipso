<?php

$Name = $_POST['Name'];
$email = $_POST['email'];
$Bookname = $_POST['Bookname'];
$bookid = $_POST['bookid'];
$phone = $_POST['phone'];
$room = $_POST['room'];
$block = $_POST['block'];


if ( !empty($Name) || !empty($email)  || !empty($Bookname) || !empty($bookid) || !empty($phone) || !empty($room)|| !empty($block))
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


  $sql = "INSERT Into borrow (Name, email, Bookname, bookid, phone, room, block ) values(?, ?, ?, ?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("sssssss", $Name, $email, $Bookname, $bookid, $phone, $room, $block);
  $stmt->execute();


 echo "Details inserted successfully, a lender will contact when the book is available";}
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
