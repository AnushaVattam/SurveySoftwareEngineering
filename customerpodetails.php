<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer Purchase Order</title>
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>
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
<td>Customer PO Line No.</td>
<td><input type="text" name="customerPoLineNo" placeholder="Customer PO Line No." required /></td>
</tr>
<tr>
<td>Customer Part No.</td>
<td><input type="text" name="CustomerPartNo" placeholder="Customer Part No." required /></td>
</tr>
<tr>
<td>Product ID</td>
<td><input type="text" name="productId" placeholder="Product ID" required /></td>
</tr>
<tr>
<td>Order Quantity</td>
<td><input type="text" name="orderQuantity" placeholder="Order Quantity" required /></td>
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
<td>Required Date</td>
<td><input type="text" name="requiredDate" placeholder="mm/dd/yyyy" required /></td>
</tr>
<tr>
<td>Confirm Date</td>
<td><input type="text" name="confirmDate" placeholder="mm/dd/yyyy" required /></td>
</tr>
<tr>
<td>Order Status</td>
<td><input type="text" name="orderStatus" placeholder="Order Status" required /></td>
</tr>
<tr>
<td><a href="customerpodeliverydetails.php">Review Delivery Details</a></td>
</tr>
</table>
</form>
</div>
</center>
</body>
</html>