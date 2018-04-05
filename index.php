<?php 
//including class and methods
include("class.online.php"); ?>		
<style type="text/css">
table {
  border-collapse: separate;
  border-spacing: 0;
}
th,
td {
  padding: 10px 15px;
}
thead {
  background: #395870;
  color: #fff;
}
th {
  font-weight: bold;
}
tbody tr:nth-child(even) {
  background: #f0f0f2;
}
td {
  border-bottom: 1px solid #cecfd5;
  border-right: 1px solid #cecfd5;
}
td:first-child {
  border-left: 1px solid #cecfd5;
}
table
{ 
margin-left: auto;
margin-right: auto;
}

</style>
<?php
if(isset($_POST))
{
		$stefan = new Online_Order();		

	
	
}
?>
<!-- html structure for test cases -->
<div style="text-align:center;">
<h1>Online Ordering</h1>
<form name="frm_order" method="post">
<table style="text-align:center;">
  <thead>
    <tr>
      <th scope="col" colspan="2">Order</th>
      <th scope="col">Date</th>
      <th scope="col">Type</th>
    </tr>
  </thead>
  <tbody>
    <tr>
       <td><input type="checkbox" name="ord_id[]" value="101"/></td>
	  <td><input type="hidden" name="ord_name" value="book"/>Book</td>
     
      <td>26 March 2018</td>
      <td><input type="hidden" name="status[101]" value="online" />Online</td>
    </tr>
    <tr>
       <td><input type="checkbox" name="ord_id[]" value="102"/></td>
	  <td><input type="hidden" name="ord_name" value="iphone7"/>Iphone 7</td>
     
      <td>26 March 2018</td>
      <td><input type="hidden" name="status[102]" value="digital" />Digital Media</td>
    </tr>
   <tr>
       <td><input type="checkbox" name="ord_id[]" value="103"/></td>
	  <td><input type="hidden" name="ord_name" value="service"/>Service</td>
     
      <td>26 March 2018</td>
      <td><input type="hidden" name="status[103]" value="subscription" />Service Subscription</td>
    </tr>
    <tr>
       <td><input type="checkbox" name="ord_id[]" value="104"/></td>
	  <td><input type="hidden" name="ord_name" value="shoes"/>Shoes</td>
     
      <td>26 March 2018</td>
      <td><input type="hidden" name="status[104]" value="physical" />Physical</td>
    </tr>
  
  </tbody>
  <tfoot>
    <tr>
	
      <td colspan="4"><input type="submit" Value="submit" name="Submit"/></td>
      
    </tr>
  </tfoot>
</table>
</form>
</div>