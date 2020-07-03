<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>  html {
      height: 100%;
    }
    .header {

    text-align: left;
    padding: 20px;
    font-size: 100%;
  }
    body {
      margin:0;
      padding:0;
      font-family: sans-serif;
      background-image: url('https://img.freepik.com/free-photo/front-view-pile-books-with-copy-space_23-2148255858.jpg?size=626&ext=jpg');
      background-size:cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
  }
    p{ text-align: left;
      margin-left: 30px;
        color: darkbrown;
        font-size: 135%;
        font-weight: bolder;
        margin-bottom: 0.25px;}

  </style>
</head>
<body>
  <div class="header"><h1>Mystery</h1></div>
<?php
include("DBConnection.php");
$sql = "SELECT Bookname FROM lender INNER JOIN category ON category=c_name WHERE c_id=3";
$result = mysqli_query($db,$sql) or die( mysqli_error($db));
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<p>" . $row["Bookname"] ."</p>"."<br>";
  }
} else {
  echo "0 results";
}
 ?>
</body>
</html>
