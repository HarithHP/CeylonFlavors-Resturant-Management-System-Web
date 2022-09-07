<html>
<body>
<?php
$name=$_POST['full-name'];
$tel=$_POST['contact'];
$mail=$_POST['email'];
$address=$_POST['address'];

$i1=$_POST['fitem1'];
$i2=$_POST['fitem2'];
$i3=$_POST['fitem3'];
$i4=$_POST['fitem4'];
$i5=$_POST['fitem5'];
$qty1=$_POST['qty1'];
$qty2=$_POST['qty2'];
$qty3=$_POST['qty3'];
$qty4=$_POST['qty4'];
$qty5=$_POST['qty5'];
$amount=$_POST['totalamount'];

$conn =  new mysqli('localhost','root','','ceylonflavors');
if ($conn->connect_error)
{
die('Connection failed: '.$conn->connect_error);
}
else
{
	$stmt = $conn ->prepare("Insert into customer(cus_name,cus_phone,cus_email,cus_address)values( ?, ?, ?, ?)");
	$stmt->bind_param('siss',$name,$tel,$mail,$address);
	$stmt->execute();
	echo "Customer Table Update successfully..,";
	$stmt->close();

	$stmt = $conn ->prepare("Insert into bill(cus_name, item1, qty1 ,item2 ,qty2 ,item3 ,qty3 ,item4 ,qty4 ,item5 ,qty5 ,amount)values( ?, ?, ?, ? , ? ,? ,? ,? ,? ,? ,? ,?)");
	$stmt->bind_param('ssisisisisid',$name,$i1,$qty1,$i2,$qty2,$i3,$qty3,$i4,$qty4,$i5,$qty5,$amount);
	$stmt->execute();
	echo "Bill Table Update successfully..,";
	$stmt->close();


/*<script language="javascript" type="text/javascript">
	alert("Bill Table Update successfully..");
</script>*/



	$conn->close();
}
?>
</body>
</html>
