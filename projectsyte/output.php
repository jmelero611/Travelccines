<html>
<body>



<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once "include/globals.inc.php";
require_once "include/sql_conn.inc.php";

$q_novaccine = 'SELECT ';
$q_vaccine = 'SELECT ';
$q_coun_rec = 'SELECT ';

echo "The origen country is " . $num_to_three[$_GET['oricoun']] . "<br>";
echo "The destination country is " . $num_to_three[$_GET['desticoun']] . "<br>";

if (isset($_GET['non-vacc-chec'])){
	echo "The option to show diseases that has no vaccine is on<br>";
	$q_novaccine .= '';
}
else {
	echo "The option to show diseases that has no vaccine is off<br>";
}
if (isset($_GET['research-check'])){
	echo "The option to show vaccines that are in research is on<br>";
}
else {
	echo "The option to show vaccines that are in research is off<br>";
}
if (isset($_GET['all-info-check'])){
	echo "The option to display all the information about the vaccines is on<br>";
}
else {
	echo "The option to display all the information about the vaccines is off<br>";
}
if (isset($_GET['recomm-check'])){
	echo "The option to display the health recommendations of the country is on<br>";
}
else {
	echo "The option to display the health recommendations of the country is off<br>";
}
$sample_output = mysqli_query($conn, "SELECT DISTINCT * from Country c , Country_has_Diseases cd WHERE c.idCountry = cd.idCountry AND c.idCountry = '" .$num_to_three[$_GET['desticoun']] ."';");
while($linea = mysqli_fetch_assoc($sample_output)){
	foreach ($linea as $key => $value){
		print "$key =>  $value<br>";
	}
}
?>
</body>
</html>
