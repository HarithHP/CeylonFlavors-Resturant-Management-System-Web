<!DOCTYPE html>
<html>
<head>
<title></title>
<style>
table {
border-collapse: collapse;
/*width: 100%;*/
color: #68bae3;
font-family: Arial;
font-size: 15px;
text-align: justify;
}
th {
background-color: #0779b3;
color: white;
}
tr{  color: black;
    background-color: #f2f2f2
}
tr:nth-child(even) {background-color: #f2f2f2}

body {
        background-image: url('food_order/images/w.jpg');
    }

</style>
</head>
<body>
    <h1 align="Center"><font color="#06164a" face="Arial"><u>Tables of Website</u></font> </h1>
    <form>
<table border = "1" cellpadding="8">
    <caption><h3>Customer Table</h3></caption>
<tr>
<th>Customer ID</th>
<th>Customer Name</th>
<th>Phone</th>
<th>Email</th>
<th>Address</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ceylonflavors");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["cus_id"]. "</td><td>" . $row["cus_name"] . "</td><td>". $row["cus_phone"] . "</td><td>". $row["cus_email"] . "</td><td>". $row["cus_address"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</form>
<form>
    <table border = "1" cellpadding="8">
    <caption><h3>Bill Table</h3></caption>
<tr>
                <th>Bill No</th>
                <th>Customer Name</th>
                <th>Item 1</th>
                <th>QTY 1</th>
                <th>Item 2</th>
                <th>QTY 2</th>
                <th>Item 3</th>
                <th>QTY 3</th>
                <th>Item 4</th>
                <th>QTY 4</th>
                <th>Item 5</th>
                <th>QTY 5</th>
                <th>Amount</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ceylonflavors");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM bill";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["bill_no"]. "</td><td>" . $row["cus_name"] . "</td><td>". $row["item1"] . "</td><td>". $row["qty1"] . "</td><td>". $row["item2"] . "</td><td>". $row["qty2"]. "</td><td>". $row["item3"] . "</td><td>". $row["qty3"]. "</td><td>". $row["item4"] . "</td><td>". $row["qty4"]. "</td><td>". $row["item5"] . "</td><td>". $row["qty5"]. "
</td><td>". $row["amount"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</form>


<form>
<table border = "1" cellpadding="8">
    <caption><h3>Admin Table</h3></caption>
<tr>
<th>Admin ID</th>
<th>Admin Name</th>
<th>Admin Email</th>
<th>Admin PW</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ceylonflavors");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM admin";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["ad_id"]. "</td><td>" . $row["ad_name"] . "</td><td>". $row["ad_email"] . "</td><td>". $row["ad_pw"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</form>
<form>
<table border = "1" cellpadding="8">
    <caption><h3>Inventory Table</h3></caption>
<tr>
<th>Item No</th>
<th>Food Type</th>
<th>Food Name</th>
<th>Price</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "ceylonflavors");

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM inventory";
$result = $conn->query($sql);
if ($result->num_rows > 0)
{
while($row = $result->fetch_assoc()) 
{
echo "<tr><td>" . $row["i_no"]. "</td><td>" . $row["i_foodtype"] . "</td><td>". $row["i_foodname"] . "</td><td>". $row["i_price"] . "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</form>

</body>
</html>