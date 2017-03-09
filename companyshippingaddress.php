<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Company Shipping Address</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php

         if(isset($_POST['CompanyShippingAddress']))
         {
		$dbhost = 'localhost';
            $dbuser = 'vinod';
            $dbpass = 'vinu';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, 'bookkeepingdb');
            
            			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				} 

		   
               $warehouseno  = $_POST['warehouseno'];
               $street1  = $_POST['street1'];
			   $street2 = $_POST['street2'];
			   $city = $_POST['city'];
			   $state = $_POST['state'];
			   $zipcode = $_POST['zipcode'];
			   $country = $_POST['country'];
			   $contactperson = $_POST['contactperson'];
			   $telephone = $_POST['telephone'];
			  
           
            
            $sql = "INSERT INTO companyshippingaddress ". "(warehouseno,street1, street2, 
			city,state,zipcode,country,contactperson,telephone) ". "VALUES
			('$warehouseno','$street1','$street2','$city','$state','$zipcode','$country','$contactperson','$telephone')";
               

            $retval = $conn->query($sql);
			
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            
          $conn->close();
		  ?>
		  
			<h3>Company Shipping details entered successfully 
			<br>Click on <a href="http://localhost/bookkeeping/home.php">home</a> to redirect to home page 
			</h3>
		<?php			
			exit;
         }
         else
         {
            ?>
			
<center>
<div id="company-shipping-address-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td colspan="2"> <b><font size="4">Company Shipping Address</font></b></td>
</tr>
<tr>
<td>Warehouse No</td>
<td><input type="text" name="warehouseno" placeholder="Warehouse No" required /></td>
</tr>
<tr>
<td>Street 1</td>
<td><input type="text" name="street1" placeholder="Street 1" required /></td>
</tr>
<tr>
<td>Street 2</td>
<td><input type="text" name="street2" placeholder="Street 2" required /></td>
</tr>
<tr>
<td>City</td>
<td><input type="text" name="city" placeholder="City" required /></td>
</tr>
<tr>
<td>State</td>
<td><input type="text" name="state" placeholder="State" /></td>
</tr>
<tr>
<td>Zip Code</td>
<td><input type="text" name="zipcode" placeholder="Zip Code" /></td>
</tr>
<tr>
<td>Country</td>
<td><input type="text" name="country" placeholder="Country" /></td>
</tr>
<tr>
<td>Contact Person</td>
<td><input type="text" name="contactperson" placeholder="Contact Person" /></td>
</tr>
<tr>
<td>Telephone</td>
<td><input type="text" name="telephone" placeholder="Telephone" /></td>
</tr>
<tr>
<td>
<input name="CompanyShippingAddress" type="submit" id="CompanyShippingAddress" value="Submit Company Shipping Details">
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