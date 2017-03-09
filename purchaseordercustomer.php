<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer Purchase Order</title>
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

		   
               $PONo  = $_POST['customerid"'];
               $vendorid  = $_POST['customerPoNo'];
			   $shippingaddr = $_POST['shippingAddressNo'];
			   $orderstatus = $_POST['orderstatus'];
			   $note = $_POST['note'];
			  
           
            
            $sql = "INSERT INTO customerpo ". "(customerid,customerpo, shippingaddress, 
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
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
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
<td>Shipping Address No</td>
<td><input type="text" name="shippingAddressNo" placeholder="Shipping Address No" required /></td>
</tr>
<tr>
<td>Order Status</td>
<td><input type="text" name="orderStatus" placeholder="Order Status" required /></td>
</tr>
<tr>
<td>Note</td>
<td><input type="text" name="note" placeholder="Note" required /></td>
</tr>
	<tr>
<td>
    
   <a  class="button_example" href="customerpodetails.php"> <button> Review Customer PO Details</td></a></button>
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