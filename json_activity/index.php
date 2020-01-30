<?php
$json = file_get_contents('http://school-temp.herokuapp.com/json_activity/data.php');	// JSON file link
$data = json_decode($json,true);							// Decoding
$list = $data['jets'];									// Assign to variable

?>
<!DOCTYPE html>
<html>
	<body style="font-family:Trebuchet MS">
		You are viewing in JSON mode || <a href="http://school-temp.herokuapp.com/"> XML Mode </a> / <a href="http://school-temp.herokuapp.com/json_activity/index.php"> JSON Mode </a>
<?php
foreach($list as $info){								// Make listing
?>

		<h3> <b> <?php echo $info['jet_Name']; ?> </b> - <?php echo $info['Manufacturer']; ?> </h3>
		<ul>
			<li> Type: <?php echo $info['jet_type']; ?> </li>
			<li> Aircraft Generation: <?php echo $info['Generation']; ?> </li>
			<li> Country: <?php echo $info['Country']; ?> </li>
		</ul>
	</body>
</html>
<?php
}
?>
