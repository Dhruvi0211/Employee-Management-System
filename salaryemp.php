<?php

require_once ('process/dbh.php');
$sql = "SELECT employee.id,employee.firstName,employee.lastName,employee_salary.bp,employee_salary.da,employee_salary.ta,employee_salary.hra,employee_salary.ma,employee_salary.bonus,employee_salary.PF,employee_salary.taxes,employee_salary.TDS,employee_salary.total from `employee`,`employee_salary` where employee.id=employee_salary.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Salary Table | EMPLOYEE ADMINISTRATION SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
</head>
<body>
	
	<header>
		<nav>
			<h1>EAS</h1>
			<ul id="navli">
				<li><a class="homeblack" href="aloginwel.php">HOME</a></li>
				
				<li><a class="homeblack" href="addemp.php">Add Employee</a></li>
				<li><a class="homeblack" href="viewemp.php">View Employee</a></li>
				<li><a class="homeblack" href="assign.php">Assign Project</a></li>
				<li><a class="homeblack" href="assignproject.php">Project Status</a></li>
				<li><a class="homered" href="salaryemp.php">Salary Table</a></li>
				<li><a class="homeblack" href="empleave.php">Employee Leave</a></li>
				<li><a class="homeblack" href="alogin.html">Log Out</a></li>
			</ul>
		</nav>
	</header>
	 
	<div class="divider"></div>
	<div id="divimg">
		
	</div>
	
	<table>
			<tr>
				<th align = "center">Emp. ID</th>
				<th align = "center">Name</th>
				<th align = "center">Basic Pay</th>
				<th align = "center">Dearness Allowance</th>
				<th align = "center">Travel Allowance</th>
				<th align = "center">House Rent Allowance</th>
				<th align = "center">Medical Allowance</th>
				<th align = "center">Bonus</th>
				<th align = "center">PF</th>
				<th align = "center">Professional Taxes</th>
				<th align = "center">TDS</th>
				<th align = "center">TotalSalary</th>	
			</tr>
			
			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>".$employee['id']."</td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";

					echo "<td>".$employee['bp']."</td>";
					echo "<td>".$employee['da']."</td>";
					echo "<td>".$employee['ta']."</td>";
					echo "<td>".$employee['hra']."</td>";
					echo "<td>".$employee['ma']."</td>";
					echo "<td>".$employee['bonus']." %</td>";
					echo "<td>".$employee['PF']." </td>";
					echo "<td>".$employee['taxes']." </td>";
					echo "<td>".$employee['TDS']." </td>";
					echo "<td>".$employee['total']."</td>";
					
					

				}


			?>
			
			</table>
</body>
</html>