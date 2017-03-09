<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Vendor Contact Person</title>
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
               $ContactPersonNo  = $_POST['ContactPersonNo'];
			   $Position = $_POST['Position'];
			   $FirstName = $_POST['FirstName'];
			   $LastName = $_POST['LastName'];
			   $PrimaryPhoneNo = $_POST['PrimaryPhoneNo'];
			   $CellPhoneNo = $_POST['CellPhoneNo'];
			   $Email = $_POST['email'];
			   $Note = $_POST['note'];
			  
           
            
            $sql = "INSERT INTO vendorcontactperson ". "(vendorid,contactpersono, position, firstname,
			lastname,primaryphoneno,cellphoneno,email,note) ". "VALUES
			('$VendorID','$ContactPersonNo','$Position', '$FirstName','$LastName','$PrimaryPhoneNo','$CellPhoneNo',
			'$Email','$Note')";
               
            $retval = $conn->query($sql);
			
            
            if(! $retval )
            {
               die('Could not enter data as entered Vendor ID does not exists' . mysql_error());
            }
            
            
          $conn->close();
				?>
			<h3>Vendor contact person info is updated successfully 
			</h3>
<?php			
	exit;
         }
         else
         {
            ?>

<center>
<div id="vendor-Contact-Info-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td colspan="2"> <b><font size="4">Update Vendor Contact Person Information</font></b></td>
</tr>
<tr>
<td>Vendor ID</td>
<td><input type="text" name="vendorId" placeholder="Vendor ID" required /></td>
</tr>
<tr>
<td>Contact Person No.</td>
<td><input type="text" name="ContactPersonNo" placeholder="Contact Person No." required /></td>
</tr>
<tr>
<tr>
<td>Position</td>
<td><input type="text" name="Position" placeholder="Position" required /></td>
</tr>
<tr>
<td>First Name</td>
<td><input type="text" name="FirstName" placeholder="First Name" required /></td>
</tr>
<tr>
<td>Last Name</td>
<td><input type="text" name="LastName" placeholder="Last Name" required /></td>
</tr>
<tr>
<td>Primary Phone No</td>
<td><input type="text" name="PrimaryPhoneNo" placeholder="Primary Phone No" required /></td>
</tr>
<tr>
<td>Cell Phone No</td>
<td><input type="text" name="CellPhoneNo" placeholder="Cell Phone No" required /></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" placeholder="Email" required /></td>
</tr>
<tr>
<td>Note</td>
<td><input type="text" name="note" placeholder="Note" required /></td>
</tr>
<td>
<input name="createNewVendor" type="submit" id="createNewVendor" value="Update Contact Person Info">
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