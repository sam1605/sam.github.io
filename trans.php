<!DOCTYPE html>
<?php 
	session_start();
	include 'connection.php';

	$q="select * from transactions";
	$result=mysqli_query($con,$q);
	$row_count=mysqli_num_rows($result);
?>
<html>
  <head>
    <meta name="viewport" content="with=device-width, inital-scale=1.0">
    <title>Bank of Interns</title>
    <link rel="stylesheet" href="tran.css" />
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
          <h1>List Of Recent Transactions</h1>
    <table >
	<thead>
		<th>SENDER NAME</th>
		<th>RECEIVER NAME</th>
		<th>AMOUNT</th>
    <th>Time</th>	
	</thead>
	<tbody class="transtable">
		<tr align = center>
      <?php  
			while($row=mysqli_fetch_array($result)){
        ?>
	<td><?php echo  $row["Sender"]; ?></td>
	<td><?php echo  $row["Reciever"]; ?></td>
	<td><?php echo  $row["Funds"]; ?></td>
  <td><?php echo  $row["Time"]; ?></td>
	<tr align = center>
	<?php }
	?>
	</tr>
	</tbody>
	</table>
      </div>