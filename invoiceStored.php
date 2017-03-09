<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer Invoice</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
     <?php

         if(isset($_POST['login-form']))
         {
		$dbhost = 'localhost';
            $dbuser = 'vinod';
            $dbpass = 'vinu';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, 'bookkeepingdb');
            
            			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				} 

		   
               $PONo  = $_POST['invoice'];
               $vendorid  = $_POST['invoiceLineNo'];
			   $shippingaddr = $_POST['customerid'];
			   $orderstatus = $_POST['customerPoNo'];
                            $customerPoLineNos = $_POST['customerPoLineNo'];
                             $unit = $_POST['unit'];
                              $unitPrice = $_POST['unitPrice'];
                              $status = $_POST['status'];
			  ;
			  
           
            
            $sql = "INSERT INTO instored ". "(invoice,invoiceLineNo, customerid,customerPoNo ,customerPoLineNo,unit,unitPrice,
			status) ". "VALUES
			('$PONo','$vendorid','$shippingaddr','$orderstatus','$customerPoLineNos','$unit','$unitPrice','$status')";
               

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
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td>Invoice No</td>
<td><input type="text" name="invoice" placeholder="Invoice No" required /></td>
</tr>
<tr>
<td>Invoice Line No</td>
<td><input type="text" name="invoiceLineNo" placeholder="Invoice Line No" required /></td>
</tr>
<tr>
<td>Customer ID</td>
<td><input type="text" name="customerid" placeholder="Customer ID" required /></td>
</tr>
<tr>
<td>Customer PO No</td>
<td><input type="text" name="customerPoNo" placeholder="Customer PO No" required /></td>
</tr>
<tr>
<tr>
<td>Customer PO Line No.</td>
<td><input type="text" name="customerPoLineNo" placeholder="Customer PO Line No." required /></td>
</tr>

<tr>
<tr>
<td>Invoice Quantity</td>
<td><input type="text" name="invoiceQuantity" placeholder="Invoice Quantity" required /></td>
</tr>
<tr>
<td>Unit</td>
<td><input type="text" name="unit" placeholder="Unit" required /></td>
</tr>
<tr>
<td>Unit Price</td>
<td><input type="text" name="unitPrice" placeholder="Unit Price" required /></td>
</tr>
<tr>
<td>Status</td>
<td><input type="text" name="status" placeholder="Status" required /></td>
</tr>
<tr>
<td><button type="submit" name="btn-login">Complete PO</button></td>
</tr>
      <?php
         }
      ?>
</table>
</form>
</div>
</center>
</body>
</html>