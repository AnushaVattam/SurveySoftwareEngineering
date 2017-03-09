<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PO to vendor</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php

         if(isset($_POST['POtovendordetails']))
         {
		$dbhost = 'localhost';
            $dbuser = 'vinod';
            $dbpass = 'vinu';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, 'bookkeepingdb');
            
            			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				} 

		   
               $PONo  = $_POST['PONo'];
               $vendorlineno  = $_POST['vendorlineno'];
			   $productid = $_POST['productid'];
			   $customerPOno = $_POST['customerPOno'];
			   $customerlineno = $_POST['customerlineno'];
			   $vendorpartno = $_POST['vendorpartno'];
			   $orderquantity = $_POST['orderquantity'];
			  
				$requireddate = $_POST['requireddate'];
			   $confirmdate = $_POST['confirmdate'];
			   $unit = $_POST['unit'];
			   $unitprice = $_POST['unitprice'];
			   $orderstatus = $_POST['orderstatus'];
			   $note = $_POST['note'];
            
            $sql = "INSERT INTO POtovendordetails ". "(PONo,vendorlineno, productid, 
			customerPOno,customerlineno,vendorpartno,orderquantity,requireddate,confirmdate,unit,unitprice,
			orderstatus,note) ". "VALUES
			('$PONo','$vendorlineno','$productid','$customerPOno','$customerlineno','$vendorpartno',
			'$orderquantity','$requireddate','$confirmdate','$unit','$unitprice','$orderstatus','$note')";
               

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
         else if(isset($_POST['ExitPODetails']))
         {
			 $dbhost = 'localhost';
            $dbuser = 'vinod';
            $dbpass = 'vinu';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, 'bookkeepingdb');
            
            			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				} 

		   
               $PONo  = $_POST['PONo'];
               $vendorlineno  = $_POST['vendorlineno'];
			   $productid = $_POST['productid'];
			   $customerPOno = $_POST['customerPOno'];
			   $customerlineno = $_POST['customerlineno'];
			   $vendorpartno = $_POST['vendorpartno'];
			   $orderquantity = $_POST['orderquantity'];
			  
				$requireddate = $_POST['requireddate'];
			   $confirmdate = $_POST['confirmdate'];
			   $unit = $_POST['unit'];
			   $unitprice = $_POST['unitprice'];
			   $orderstatus = $_POST['orderstatus'];
			   $note = $_POST['note'];
            
            $sql = "INSERT INTO POtovendordetails ". "(PONo,vendorlineno, productid, 
			customerPOno,customerlineno,vendorpartno,orderquantity,requireddate,confirmdate,unit,unitprice,
			orderstatus,note) ". "VALUES
			('$PONo','$vendorlineno','$productid','$customerPOno','$customerlineno','$vendorpartno',
			'$orderquantity','$requireddate','$confirmdate','$unit','$unitprice','$orderstatus','$note')";
               

            $retval = $conn->query($sql);
			
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());
            }
            
          $conn->close();
		  ?>
		  
			<h3>PO details entered successfully .
			<br>Want to enter payment details to vendor Click on <a href="http://localhost/bookkeeping/pages/vendor/purchaseorder/paymenttovendor.php">Payment to vendor</a> 
			<br>Else Click on <a href="http://localhost/bookkeeping/home.php">home</a> to redirect to home page 
			</h3>
			
		<?php
		exit;		
		 }
		 else
		 {
            ?>

<center>
<div id="POtovendordetails">
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
<td>Vendor Line No</td>
<td><input type="text" name="vendorlineno" placeholder="Vendor Line No" required /></td>
</tr>
<tr>
<td>Product ID</td>
<td><input type="text" name="productid" placeholder="Product ID" required /></td>
</tr>
<tr>
<td>Customer PO No</td>
<td><input type="text" name="customerPOno" placeholder="Customer PO No" required /></td>
</tr>
<tr>
<td>Customer Line No</td>
<td><input type="text" name="customerlineno" placeholder="Customer Line No" required /></td>
</tr>
<tr>
<td>Vendor Part No</td>
<td><input type="text" name="vendorpartno" placeholder="Vendor Part No" required /></td>
</tr>
<tr>
<td>Order Quantity</td>
<td><input type="text" name="orderquantity" placeholder="Order Quantity" required /></td>
</tr>
<tr>
<td>Required Date</td>
<td><input type="text" name="requireddate" placeholder="Required Date" required /></td>
</tr>
<tr>
<td>Confirm Date</td>
<td><input type="text" name="confirmdate" placeholder="Confirm Date" required /></td>
</tr>
<tr>
<td>Unit</td>
<td><input type="text" name="unit" placeholder="Unit" required /></td>
</tr>
<tr>
<td>Unit Price</td>
<td><input type="text" name="unitprice" placeholder="Unit Price" required /></td>
</tr>
<tr>
<td>Order Status</td>
<td><input type="text" name="orderstatus" placeholder="Order Status" required /></td>
</tr>
<tr>
<td>Notes</td>
<td><input type="text" name="note" placeholder="Notes" required /></td>
</tr>
<tr>
<td>
<input name="POtovendordetails" type="submit" id="POtovendordetails" value="Want to enter more PO details">
</td>
<td>
<input name="ExitPODetails" type="submit" id="ExitPODetails" value="Completed entering PO Details">
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