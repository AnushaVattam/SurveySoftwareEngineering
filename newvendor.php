<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>New Vendor</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php

         if(isset($_POST['createNewVendor']))
         {
		$dbhost = 'localhost';
            $dbuser = 'vinod';
            $dbpass = 'vinu';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, 'bookkeepingdb');
            
            			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				} 

		   
               $VendorID  = $_POST['vendorId'];
               $VendorName  = $_POST['vendorName'];
			   $PaymentTerm = $_POST['paymentTerm'];
			   $Telephone = $_POST['telephone'];
			   $Address = $_POST['address'];
			   $website = $_POST['website'];
			   $Note = $_POST['note'];
			  
           
            
            $sql = "INSERT INTO vendor ". "(vendorid,vendorname, paymentterm, 
			telephone,address,website,note) ". "VALUES
			('$VendorID','$VendorName','$PaymentTerm','$Telephone','$Address','$website',
			'$Note')";
               

            $retval = $conn->query($sql);
			
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
          $conn->close();
				header('Location: http://localhost/bookkeeping/pages/vendor/newvendor/vendorContactPerson.php');
	exit;
         }
         else
         {
            ?>

<center>
<div id="vendor-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td colspan="2"> <b><font size="4">New Vendor Information</font></b></td>
</tr>
<tr>
<td>Vendor ID</td>
<td><input type="text" name="vendorId" placeholder="Vendor ID" required /></td>
</tr>
<tr>
<td>Vendor Name</td>
<td><input type="text" name="vendorName" placeholder="Vendor Name" required /></td>
</tr>
<tr>
<td>Payment Term</td>
<td><input type="text" name="paymentTerm" placeholder="Payment Term" required /></td>
</tr>
<tr>
<td>Telephone</td>
<td><input type="text" name="telephone" placeholder="Telephone" required /></td>
</tr>
<tr>
<td>Address</td>
<td><input type="text" name="address" placeholder="Address" required /></td>
</tr>
<tr>
<td>Website</td>
<td><input type="text" name="website" placeholder="Website" required /></td>
</tr>
<tr>
<td>Note</td>
<td><input type="text" name="note" placeholder="Note" required /></td>
</tr>
<tr>
<td>
<input name="createNewVendor" type="submit" id="createNewVendor" value="Create New Vendor Account">
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