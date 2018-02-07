
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

function mapa_del_pais($pais, $conn){
	$country = mysqli_query($conn, "SELECT DISTINCT c.map from Country c , Country_has_Diseases cd WHERE c.idCountry = cd.idCountry AND c.idCountry = '" .$pais ."';");
	while($linea = mysqli_fetch_assoc($country)){
		foreach ($linea as $key => $value){
			$country_map = substr($linea['map'], 7);
		}
	}
	$mapas = scandir( "maps");
	$map = preg_grep("/.*$country_map.*/", $mapas);
	$map = '<img src="'.'maps/'.$map[key($map)].'">';
	return $map;
}
function print_CRec_table($pais, $conn){
	print('<table><tr><th>Country Recomendations</th></tr>');
	$q_coun_rec = "SELECT r.CRecommendation, c.country_name FROM Country c, Country_has_Recommendations cr, Recommendations r WHERE c.idCountry = cr.idcountry AND cr.idCRecommendation = r.idCRecommendation AND c.idCountry = '" .$pais. "'" ;
	$coun_rec = mysqli_query($conn, $q_coun_rec .";");
	while($linea = mysqli_fetch_assoc($coun_rec)){
		foreach ($linea as $key => $value){
			print "<tr><td>".$linea['CRecommendation']."</td></tr>";
		}
	}
	print('</table>');
}
require_once "include/globals.inc.php";
require_once "include/sql_conn.inc.php";
?>

<!DOCTYPE html>
<html lang="en"><script type="text/javascript">window["_gaUserPrefs"] = { ioo : function() { return true; } }</script><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="static/logo.ico">

    <?php print("<title>All the iformation you want for ".$num_to_three[$_GET['desticoun']]."</title>")?>

    <!-- Bootstrap core CSS -->
    <link href="static/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/custom.css" rel="stylesheet">
    <link href="static/traveccines.css" rel="stylesheet">
  <style></style></head>
  <body>

    <header>
    	<?php include ('include/heading.php'); ?>
    </header>

    <div class="row myspacing mybg align-items-center">
        <div class="col-md-1 col-sm-1"></div>
        <div class="col-md-7 col-sm-6">
        <h1 class="white-text">Traveccines</h1>
        <p class="lead white-text">Beign safe while travelling is one click away from you.</p>
      </div>
      <div class="col-md-4 col-sm-5">
        <img class="img-fluid mx-auto" alt="logo" src="static/logo.png">
      </div>
    </div>
    <div class="container-fluid">

<?php
$q_vaccine = 'SELECT v.vaccine_name, v.disease_name, ';
$q_coun_rec = 'SELECT ';

echo "The origen country is " . $num_to_three[$_GET['oricoun']] . "<br>";
echo "The destination country is " . $num_to_three[$_GET['desticoun']] . "<br>";


if (isset($_GET['all-info-check'])){
	$q_vaccine .= 'v.vaccine_recomendations, s.Seffect_text ';
}

$q_vaccine .= "FROM Country c, Country_has_Diseases cd, Diseases d, S_effect s, Vaccines v, Vaccines_has_S_effect vs WHERE c.idCountry = cd.idCountry AND d.disease_name = cd.disease_name AND v.disease_name = d.disease_name AND v.vaccine_name = vs.vaccine_name AND vs.idEffect = s.idEffect AND c.idCountry = '".$num_to_three[$_GET['desticoun']]."' ";

if (!isset($_GET['research-check'])){
	echo "The option to show vaccines that are in research is on<br>";
	$q_vaccine .= "AND v.status = 'Licensed' ";
}
if (isset($_GET['recomm-check'])){
	print_CRec_table($num_to_three[$_GET['desticoun']], $conn);
}
if (!isset($_GET['non-vacc-chec'])){
	$q_vaccine .= "AND v.vaccine = 'yes'";
}
else {
	echo "The option to show diseases that has no vaccine is off<br>";
}
if ($_GET['oricoun']){
	$q_vaccine .= "AND cd.disease_name NOT IN ( SELECT cd.disease_name FROM Country_has_Diseases cd, Country c WHERE c.idCountry = '". $num_to_three[$_GET['oricoun']] ."' AND c.idCountry = cd.idCountry)";
}

print ($q_vaccine . ';<br><br>');
$map = mapa_del_pais($num_to_three[$_GET['desticoun']], $conn);
print($map)
?>
</div>
</body>
</html>

