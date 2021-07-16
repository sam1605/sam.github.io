<!DOCTYPE html>
<?php 
	session_start();
	include 'connection.php';

	$q="select * from customers";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>
<html>
  <head>
    <meta name="viewport" content="width=device-width, inital-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="cuss.css" />
  </head>
  <body>
    <section class="header">
      <nav>
        <a class="logo" href="index.html"><img src="Images/logo3.png"/></a>
        <div class="nav-links">
          <ul>
          <li><a href="index.php">HOME</a></li>
            <li><a href="customer.php">CUSTOMERS</a></li>
            <li><a href="trans.php">TRANSACTIONS</a></li>
            <li><a href="About us.php">ABOUT US</a></li>
          </ul>
        </div>
      </nav>
      <div class="content">
          <h1>List Of Customers</h1>
          <h3 class="ins">Please Click on the Name of the Customer to Begin the Tranfer Process</h3>
          <table class="table">
            <thead style="color : black;">
                <tr>
                    <th class="text-center">S.No.</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Balance</th>
                </tr>
            </thead>
            <tbody>
		<tr align = center>
        
		<?php  
			while($row=mysqli_fetch_array($result)){
         ?>
		 
		<td><?php echo  $row["sno"]; ?></td>
		<?php echo "<td> <a href = 'transact.php?Name=$row[1]'>$row[1]</a></td>";?>
		<td><?php echo  $row["Amount"]; ?></td>
		<tr align = center>
		
		<?php }
		?>
		
		</tr>

        
	</tbody>
          </table>
      </div>
    </section>
  </body>
</html>