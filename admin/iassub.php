<!DOCTYPE html>
<?php
	require_once 'auth.php';
?>
<html lang = "eng">
	<head>
		<title>Student Attendance Record System</title>
		<?php include('header.php') ?>
	</head>
	<body>
		<?php include('nav_bar.php') ?>
		<div class = "container-fluid admin" >
			<div class = "alert alert-primary">IAas Student List</div>
			<div class = "modal fade" id = "delete" tabindex = "-1" role = "dialog" aria-labelledby = "myModallabel">
				
			</div>
			<div class = "well col-lg-12">
				<table id="table" class="table table-bordered table-striped">
					<thead>
						<tr>
							<th>Student Roll Number</th>
							<th>FirstName</th>
                            <th>LastName</th>
							<th>Subject</th>
						
            
						</tr>
					</thead>
					<tbody>
                        <?php
					$query =$conn->query("SELECT employee_no,firstname,lastname,position FROM `employee` where position ='IAas' " ) or die(mysqli_error($conn));
while ($fetch = $query->fetch_array()){
?>	
						<tr>
							<td><?php echo $fetch['employee_no']?></td>
							<td><?php echo htmlentities($fetch['firstname'])?></td>
                            <td><?php echo htmlentities($fetch['lastname'])?></td>
							<td><?php echo htmlentities($fetch['position'])?></td>
						</tr>
					<?php
						}
					?>	
					</tbody>
				</table>
			<br />
			<br />	
			<br />	
			</div>
		</div>
		
	</body>
	
</html>