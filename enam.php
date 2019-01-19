<?php
$con = mysqli_connect("localhost","root","","arkademy5");
if(! $con ) {
	die('Could not connect: ' . mysqli_error());
}

$sql = 'SELECT `persons`.`id`, `persons`.`name`, `hobbies`.`name` AS "name_hobbies" FROM `persons` INNER JOIN `hobbies` ON `persons`.`id` = `hobbies`.`person_id`;';
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) { ?>
		<table border="1">
			<tr>
				<th>person_id</th>
				<th>name</th>
				<th>person_hobbies</th>
			</tr>
			<?php while($row = mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td><?php echo $row['id']; ?></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['name_hobbies']; ?></td>
			</tr>
		<?php } ?>
		</table>
<?php } else {
	echo "0 results";
}
mysqli_close($con);