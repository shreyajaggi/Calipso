<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>
<?php
include("DBConnection.php");
if (isset($_POST['search']))
{
  $search=0;
$search = $_REQUEST["search"];

if($search!='NULL')
{$query = "SELECT * FROM lender WHERE book_id LIKE '%$search%' OR Bookname LIKE '%$search%'"; //search with a book name in the table book_info
$result = mysqli_query($db,$query);

if(mysqli_num_rows($result)>0)

{
?>

<table id=one align="center">

<tr>
<th> ISBN </th>
<th> Title </th>
<th> Name </th>
<th> E-Mail </th>
<th> Phone Number </th>
<th> Room Number </th>
<th> Block </th>
</tr>

<?php while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
<td><?php echo $row["book_id"];?> </td>
<td><?php echo $row["Bookname"];?> </td>
<td><?php echo $row["Name"];?> </td>
<td><?php echo $row["email"];?> </td>
<td><?php echo $row["phone"];?> </td>
<td><?php echo $row["room"];?> </td>
<td><?php echo $row["block"];?> </td>
</tr>
<?php
}
}
else
{echo "<center>No books found. </center>" ;} } }
?>
</table>
</body>
</html>
