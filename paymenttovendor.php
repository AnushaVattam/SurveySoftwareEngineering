<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PO to vendor</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php

         if(isset($_POST['paymenttovendor']))
         {
		$dbhost = 'localhost';
            $dbuser = 'vinod';
            $dbpass = 'vinu';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, 'bookkeepingdb');
            
            			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				} 

		   
               $PaymentID  = $_POST['paymentID'];
               $PayDate = $_POST['paydate'];
			   $VendorsInvoiceNo = $_POST['vendorsinvoiceno'];
			   $PaymentAmount = $_POST['paymentamount'];
			   $Tax = $_POST['tax'];
			   $Shipping = $_POST['shipping'];
			   
			   $POtoVendorNo = $_POST['potovendorno'];
			   $VendorLineNo = $_POST['vendorlineno'];
			   $Unitprice = $_POST['unitprice'];
			   $Quantity= $_POST['quantity'];
			   
			   
			  
           
            
            $sql1 = "INSERT INTO paymenttovendor ". "(paymentid,paydate, vendorinvoiceno, paymentamount,tax,shipping) ". "VALUES
			('$PaymentID','$PayDate','$VendorsInvoiceNo','$PaymentAmount','$Tax','$Shipping')";
			$sql2 = "INSERT INTO paymenttovendordetails ". "(paymentid,potovendorno,vendorlineno,unitprice,quantity ) ". "VALUES
			('$PaymentID','$POtoVendorNo',
			'$VendorLineNo','$Unitprice','$Quantity')";
               
			$retval1 = $conn->query($sql1);
            $retval2 = $conn->query($sql2);
			
            
            if(! $retval1 || ! $retval2)
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            
          $conn->close();
			?>
			<h3>Payment details entered successfully
			<br>Want to enter more payment details, then click on <a href="http://localhost/bookkeeping/pages/vendor/purchaseorder/paymenttovendor.php">Payment to Vendor</a> 
			<br>Else, Click on <a href="http://localhost/bookkeeping/home.php">home</a> to redirect to home page 
			</h3>
<?php			
	exit;
         }
         else
         {
            ?>

<center>
<div id="Payment-to-vendor-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td colspan="2"> <b><font size="4">Payment to Vendor Information</font></b></td>
</tr>
<tr>
<td>Payment ID</td>
<td><input type="text" name="paymentID" placeholder="Payment ID" required /></td>
</tr>
<tr>
<td>Pay Date</td>
<td><input type="text" name="paydate" placeholder="mm/dd/yyyy" required /></td>
</tr>
<tr>
<td>Vendor’s Invoice No</td>
<td><input type="text" name="vendorsinvoiceno" placeholder="Vendor’s Invoice No" required /></td>
</tr>
<tr>
<td>PO to Vendor No</td>
<td><input type="text" name="potovendorno" placeholder="PO to Vendor No" required /></td>
</tr>
<tr>
<td>Vendor Line No</td>
<td><input type="text" name="vendorlineno" placeholder="Vendor Line No" required /></td>
</tr>
<tr>
<td>Unit Price</td>
<td><input type="text" name="unitprice" placeholder="Unit Price" required /></td>
</tr>
<tr>
<td>Quantity</td>
<td><input type="text" name="quantity" placeholder="Quantity" required/></td>
</tr>
<tr>
<td>Payment Amount</td>
<td><input type="text" name="paymentamount" placeholder="Payment Amount" required /></td>
</tr>
<tr>
<td>Tax</td>
<td><input type="text" name="tax" placeholder="Tax" required /></td>
</tr>
<tr>
<td>Shipping</td>
<td><input type="text" name="shipping" placeholder="Shipping" required /></td>
</tr>
<tr>
<td>
<input name="paymenttovendor" type="submit" id="paymenttovendor" value="Submit payment details">
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