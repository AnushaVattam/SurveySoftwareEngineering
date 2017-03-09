<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer Invoice</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
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
               $vendorid  = $_POST['invoiceDate'];
			   $shippingaddr = $_POST['dueDate'];
			   $orderstatus = $_POST['status'];
			  ;
			  
           
            
            $sql = "INSERT INTO invoice ". "(invoice,invoiceDate, dueDate, 
			status) ". "VALUES
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
<body>
<center>
<div id="login-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td>Invoice No</td>
<td><input type="text" name="invoice" placeholder="Invoice No" required /></td>
</tr>
<tr>
<td>Invoice Date</td>
<td><input type="text" name="invoiceDate" placeholder="Invoice Date" required /></td>
</tr>
<tr>
<tr>
<td>Due Date</td>
<td><input type="text" name="dueDate" placeholder="Due Date" required /></td>
</tr>
<tr>
<td>Status</td>
<td><input type="text" name="status" placeholder="Status" required /></td>
</tr>
<tr>
<td>
    <button><a href="invoiceStored.php">Review Invoice Stored</a></button></td>
</tr>
</table>
    <?php
         }
      ?>
</form>
</div>
</center>
</body>
</html>