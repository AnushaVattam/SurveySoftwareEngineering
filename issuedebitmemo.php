<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Debit Memo To Vendor</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<?php

         if(isset($_POST['Debitmemo']))
         {
		$dbhost = 'localhost';
            $dbuser = 'vinod';
            $dbpass = 'vinu';
            $conn = new mysqli($dbhost, $dbuser, $dbpass, 'bookkeepingdb');
            
            			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				} 

		   
               $DebitMemoNo  = $_POST['debitmemono'];
               $IssueDate  = $_POST['issueDate'];
			   $POtoVendorNo = $_POST['potovendorno'];
			   $VendorLineNo = $_POST['vendorlineno'];
			   $RejectedQuantity = $_POST['Rejectedquantity'];
			   $RejectedUnitPrice = $_POST['Rejectedunitprice'];
			   $Status = $_POST['Status'];
			  
           
            
            $sql = "INSERT INTO debitmemotovendor ". "(debitmemono,issuedate, potovendorno, 
			vendorlineno,rejectedquantity,rejectedunitprice,status) ". "VALUES
			('$DebitMemoNo','$IssueDate','$POtoVendorNo','$VendorLineNo','$RejectedQuantity','$RejectedUnitPrice','$Status')";
               

            $retval = $conn->query($sql);
			
            
            if(! $retval )
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            
          $conn->close();
		  ?>
		  
			<h3>Debit memo details entered successfully 
			<br>Click on <a href="http://localhost/bookkeeping/home.php">home</a> to redirect to home page 
			</h3>
		<?php			
			exit;
         }
         else
         {
            ?>
			
<center>
<div id="Debit-Memo-to-Vendor-form">
<form method="post">
<table align="center" width="30%" border="0">
<tr>
<td colspan="2"> <b><font size="4">Debit Memo to Vendor</font></b></td>
</tr>
<tr>
<td>Debit to Memo no</td>
<td><input type="text" name="debitmemono" placeholder="Debit to Memo no" required /></td>
</tr>
<tr>
<td>Issue Date</td>
<td><input type="text" name="issueDate" placeholder="Issue Date" required /></td>
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
<td>Rejected Quantity</td>
<td><input type="text" name="Rejectedquantity" placeholder="Rejected Quantity" /></td>
</tr>
<tr>
<td>Rejected Unit Price</td>
<td><input type="text" name="Rejectedunitprice" placeholder="Rejected Unit Price" /></td>
</tr>
<tr>
<td>Status</td>
<td><input type="text" name="Status" placeholder="Status" /></td>
</tr>
<tr>
<td>
<input name="Debitmemo" type="submit" id="Debitmemo" value="Submit Debit Memo Details">

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