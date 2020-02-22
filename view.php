<?php
session_start();

 include('server.php'); 


$sql = 'SELECT * 
		FROM register';
		
$query = mysqli_query($db, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>

	<script type="text/javascript">
		function call1()
		{
			alert("You are now updated data");
		}
		function call2()
		{
			alert("You are now deleted data");
		}
	</script>
</head>
<body>
	

	<h1>Student Details</h1>
	<table class="data-table">
		<caption class="title"></caption>
		<thead>
			<tr>
				<th>Student Id</th>
				<th>Student Name</th>
				<th>Age</th>
				<th>Stream</th>
				<th>School</th>
				<th>Phone number</th>
				<th>Update</th>
				<th>Delete</th>
			</tr>
		</thead>
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{ ?>
			   <tr>
					<td> <?php echo $row['student_id'] ?></td>
					<td> <?php echo $row['student_name'] ?></td>
					<td> <?php echo $row['age'] ?> </td>
					<td> <?php echo $row['stream'] ?></td>
					<td> <?php echo $row['school'] ?></td>
					<td> <?php echo $row['phonenumber'] ?> </td>

				<form action="update.php" method="POST">
					<input type="hidden" name="student_id" value="<?php echo $row['student_id'] ?>">
					<input type="hidden" name="student_name" value="<?php echo $row['student_name'] ?>">
					<input type="hidden" name="age" value="<?php echo $row['age'] ?>">
					<input type="hidden" name="stream" value="<?php echo $row['stream'] ?>">
					<input type="hidden" name="school" value="<?php echo $row['school'] ?>">
					<input type="hidden" name="phonenumber" value="<?php echo $row['phonenumber'] ?>">

					<td> <input type="submit" name="update" value="Update"> </td>

				</form>

				<form action="delete.php" method="POST">
					<input type="hidden" name="student_id" value="<?php echo $row['student_id'] ?>">

					<td> <input type="submit" name="delete" value="Delete"> </td>
				</form>
					
				</tr>
			<?php
		}
		?>
		</tbody>
	
	</table>

</body>
</html>