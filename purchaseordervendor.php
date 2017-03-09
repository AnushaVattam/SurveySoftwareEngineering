<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PO to vendor</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php

         if(isset($_POST['POtovendor']))
         {
		$dbhost = 'localhost';
            $dbuser = 'vinod';
            $dbpass = 'vinu';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, 'bookkeepingdb');
            
            			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				} 

		   
               $PONo  = $_POST['PONo'];
               $vendorid  = $_POST['vendorid'];
			   $shippingaddr = $_POST['shippingaddr'];
			   $orderstatus = $_POST['orderstatus'];
			   $note = $_POST['note'];
			  
           
            
            $sql = "INSERT INTO POtovendor ". "(PONo,vendorid, shippingaddr, 
			orderstatus,note) ". "VALUES
			('$PONo','$vendorid','$shippingaddr','$orderstatus','$note')";
               

            $retval = $conn->query($sql);
			
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
          $conn->close();
				header('Location: http://localhost/bookkeeping/pages/vendor/purchaseorder/POtovendordetails.php');
	exit;
         }
         else
         {
            ?>

<center>
<div id="PO-to-vendor-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td colspan="2"> <b><font size="4">Purchase Order to Vendor Information</font></b></td>
</tr>
<tr>
<td>Purchase Order to Vendor No</td>
<td><input type="text" name="PONo" placeholder="PO to Vendor No" required /></td>
</tr>
<tr>
<td>Vendor ID</td>
<td><input type="text" name="vendorid" placeholder="Vendor ID" required /></td>
</tr>
<tr>
<td>Shipping Address/Ware house No</td>
<td><input type="text" name="shippingaddr" placeholder="Shipping Address/Ware house No" required /></td>
</tr>
<tr>
<td>Order Status</td>
<td><input type="text" name="orderstatus" placeholder="Order Status" required /></td>
</tr>
<tr>
<td>Notes</td>
<td><input type="text" name="note" placeholder="Notes" /></td>
</tr>
<tr>
<td>
<input name="POtovendor" type="submit" id="POtovendor" value="Proceed to enter PO details">
</td>
</tr>
</table>
</form>
</div>
</center>
<?php
         }
      ?>
</body>
</html>