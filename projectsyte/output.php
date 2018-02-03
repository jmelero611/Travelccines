<html>
<body>
<?php
echo "The origen country is " . $_GET['oricoun'] . "<br>";
echo "The destination country is " . $_GET['desticoun'] . "<br>";
if (isset($_GET['non-vacc-chec'])){
	echo "The option to show diseases that has no vaccine is on<br>";
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
?>
</body>
</html>
