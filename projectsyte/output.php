
<?php
error_reporting(None);
ini_set('display_errors', 0);
function mapa_del_pais($pais, $conn){
    $country = mysqli_query($conn, "SELECT DISTINCT c.map from Country c , Country_has_Diseases cd WHERE c.idCountry = cd.idCountry AND c.idCountry = '" .$pais ."';");
    while($linea = mysqli_fetch_assoc($country)){
        foreach ($linea as $key => $value){
            $country_map = substr($linea['map'], 5);
        }
    }
    $mapas = scandir( "maps");
    $map = preg_grep("/.*$country_map.*/", $mapas);
    $map = '<img src="'.'maps/'.$map[key($map)].'">';
    return $map;
}
function Wiki($pais, $conn){
    $q_wiki = "SELECT w.* FROM Wiki w, Country c WHERE c.country_name = w.country_name AND c.idCountry = '" . $pais . "';";
    $mysql_handl = mysqli_query($conn, $q_wiki);
    if(isset($mysql_handl)){
        print '<div class="container myspacing"><div class="row" style="margin-left:0">';
        $map = mapa_del_pais($pais, $conn);
        print($map);
        while($linea = mysqli_fetch_assoc($mysql_handl)){
            if(!$linea['population']){
                $linea['population'] = 'Unknown';
            }
            if(!$linea['currency']){
                $linea['currency'] = 'Unknown';
            }
            if(!$linea['area']){
                $linea['area'] = 'Unknown';
            }
             print '<ul style="font-size: 1.3rem;"><li>Name : '. $linea['country_name'].'</li><li>Population : '.$linea['population'].'</li>
                <li>Area : '.$linea['area']. ' km<sup>2</sup></li><li>Currency : '.$linea['currency']. '</li>
                </ul>
            </div>
            </div>';
        }
    }

}
function print_CRec_table($pais, $conn){
    $q_coun_rec = "SELECT c.CRecommendations FROM Country c WHERE c.idCountry = '" .$pais. "';" ;
    $coun_rec = mysqli_query($conn, $q_coun_rec);
    while($linea = mysqli_fetch_assoc($coun_rec)){
        print($linea['CRecommendations']);
    }
}
function std_print_table($query, $conn, $head, $title){
    $mysql_handl = mysqli_query($conn, $query);
    if(mysqli_fetch_assoc($mysql_handl)){
        $mysql_handl = mysqli_query($conn, $query);
        print('<div class="container"><h3>'.$title.'</h3>');
        print('<table cellspacing="2" cellpadding="4" width="80%" class="table_info"><tr>');
        foreach($head as $h){
            print('<th>'.$h.'</th>');
        }
        while($linea = mysqli_fetch_assoc($mysql_handl)){
            print "<tr>";
            foreach ($linea as $key => $value){
                print "<td>".$value."</td>";
            }
            print "</tr>";
        }
        print('</table><br><br></div>');
    }
}
function vaccine_simple_hash($query, $conn){
    $mysql_handl = mysqli_query($conn, $query);
    $hash = Array();
    while($linea = mysqli_fetch_assoc($mysql_handl)){
        if (isset($hash[$linea['disease_name']])){
            if (!in_array($linea['vaccine_name'], $hash[$linea['disease_name']]['vaccines'])){
                array_push($hash[$linea['disease_name']]['vaccines'],$linea['vaccine_name']);
            }
        }else{
            $hash[$linea['disease_name']]['vaccines'] = [$linea['vaccine_name']];
            $hash[$linea['disease_name']]['Drecommendations'] = $linea['Drecommendations'];
            $hash[$linea['disease_name']]['Transmission'] = $linea['trans_name'];
        }
    }
    return $hash;
}

function vaccine_complete_hash($query, $conn){
    $mysql_handl = mysqli_query($conn, $query);
    $hash = Array();
    while($linea = mysqli_fetch_assoc($mysql_handl)){
        if (isset($hash[$linea['disease_name']])){
            if (isset($hash[$linea['disease_name']]['vaccines'][$linea['vaccine_name']])){
                if(!in_array( $linea['vaccine_recomendations'], $hash[$linea['disease_name']]['vaccines'][$linea['vaccine_name']]['vaccine_recomendations'])){
                    array_push($hash[$linea['disease_name']]['vaccines'][$linea['vaccine_name']]['vaccine_recomendations'], $linea['vaccine_recomendations']);
                }
                if(!in_array($linea['Seffect_text'], $hash[$linea['disease_name']]['vaccines'][$linea['vaccine_name']]['Side Effect'])){
                    array_push($hash[$linea['disease_name']]['vaccines'][$linea['vaccine_name']]['Side Effect'], $linea['Seffect_text']);
                }
            }else{
                $hash[$linea['disease_name']]['vaccines'][$linea['vaccine_name']] = array("vaccine_recomendations" => [$linea['vaccine_recomendations']], "Side Effect" =>[$linea['Seffect_text']]);
            }
        }else{
            $hash[$linea['disease_name']]['vaccines'] = array([$linea['vaccine_name']] => array("vaccine_recomendations" => [$linea['vaccine_recomendations']], "Side Effect" =>[$linea['Seffect_text']]));
            $hash[$linea['disease_name']]['Drecommendations'] = $linea['Drecommendations'];
            $hash[$linea['disease_name']]['Transmission'] = $linea['trans_name'];
        }
    }
    return $hash;
}
function print_simple_hash($query, $conn){
    $info_hash = vaccine_simple_hash($query, $conn);
    print('<div class="container"><h3>Vaccinable diseases</h3><table class="table_info"><thead><tr><th>Disease name</th><th>Vaccines</th><th>Transmission</th><th>Recommendations</th></tr></thead>');
    foreach($info_hash as $key => $value){
        print '<tr><td>'.$key.'</td><td><ul>';
        foreach ($value['vaccines'] as $vaccine) {
            print('<li>'.$vaccine.'</li>');
        }
        print('</ul></td><td style="font-size:0.8rem;">'. $value['Transmission'].'</td><td style="font-size:0.8rem;text-align:justify;text-justify: inter-word;width:55%;">'.$value['Drecommendations'].'</td></tr>');
    }
    print('</table></div>');
}
function print_complete_hash($query, $conn){
    $info_hash = vaccine_complete_hash($query, $conn);
    $count = 0;
    if($info_hash){
        print('<div class="container"><h3>Vaccinable diseases</h3><table class="table_info"><thead><tr><th style="width:10%;">Disease name</th><th style="width:15%;">Vaccines</th><th style="width:15%;">Transmission</th><th style="width:60%;">Recommendations</th></tr></thead>');
        foreach($info_hash as $key => $value){
            $count = $count + 1;
            print '<tr><td>'.$key.'</td><td><ul>';
            foreach ($value['vaccines'] as $vaccine => $information) {
                print('<li>'.$vaccine.'</li>');
            }
            print('<li>More information  <i id="show'.$count.'" class="show fa fa-plus-circle" where="'.$count.'" style="font-size:20px;"></i><i id="hide'.$count.'" class="hide fa fa-minus-circle" where="'.$count.'" style="font-size:20px;display:none;"></li></ul></td><td style="font-size:0.8rem;">'. $value['Transmission'].'</td><td style="font-size:0.8rem;text-align:justify;text-justify: inter-word;width:55%;">'.$value['Drecommendations'].'</td></tr>');
            print('<tr class="row'.$count.'" style="display: none;"><th>Vaccine</th><th colspan="2">Vaccine Recommendation</th><th >Side effects</th></tr>');
            foreach ($value['vaccines'] as $vaccine => $information) {
                print('<tr class="row'.$count.' inner" style="display: none;">');
                print('<td>'.$vaccine.'</td><td  colspan="2">'.$information["vaccine_recomendations"][0].'</td><td><ul>');
                foreach ($information['Side Effect'] as $sefect) {
                    print('<li>'. $sefect.'</li>');
                }
                print('</ul></tr>');
            }
        }
        print('</table></div>');
    } else {
        print('<h4 style="text-align:center;"><b><i>You should have all the vaccines you need already, from your country'."'s".' default vaccination schedule.</i></b></h4>');
    }
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

    <?php print("<title>All the information you want for ".$num_to_three[$_GET['desticoun']]."</title>")?>

    <!-- Bootstrap core CSS -->
    <link href="static/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="static/custom.css" rel="stylesheet">
    <link href="static/traveccines.css" rel="stylesheet">
    <link href="static/tables.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style></style></head>
  <body>

    <header>
        <?php include ('include/heading.php'); ?>
    </header>
<?php
if($_GET['desticoun'] == 10){
    exit('<br><div class="container"><h1 style="font-size:3rem;">We do not have information about the Antartica, Antartica is only for penguins anyway.</h1><br><br><img src="static/antartica.jpg" style="width:65%;margin-left:auto;margin-right:auto;display:block;"></div>');
}elseif($_GET['desticoun'] == 840){
    exit('<br><div class="container"><h1 style="font-size:2.5rem;">The great United States of America does not have those filthy diseases, but we do not want you to infest our country</h1><br><br><img src="static/sam.jpg" style="width:45%;margin-left:auto;margin-right:auto;display:block;"></div>');
}
if($_GET['oricoun']){
    print('<br><div class="container"><h1><b>Necessary prophylaxis information to travel from ' .$num_to_three[$_GET['oricoun']].' to '.$num_to_three[$_GET['desticoun']].'</b></h1></div>');
} else {
    print('<br><div class="container"><h1><b>Prophylaxis and health information of '.$num_to_three[$_GET['desticoun']].'</b></h1></div>');
}

Wiki($num_to_three[$_GET['desticoun']], $conn);
$q_vaccine = 'SELECT DISTINCT v.vaccine_name, v.disease_name, d.Drecommendations, t.trans_name ';
$q_track = ['Vaccine Name', 'Disease', 'Disease Recomendations', 'Transmission'];
if (isset($_GET['all-info-check'])){
    $q_vaccine .= ', v.vaccine_recomendations, s.Seffect_text ';
    array_push($q_track, 'Vaccine Recomendations', 'Side Effects');

}
$q_vaccine .= "FROM Country c, Country_has_Diseases cd, Diseases d, S_effect s, Vaccines v, Vaccines_has_S_effect vs, Transmission t, Diseases_has_Transmission dt WHERE c.idCountry = cd.idCountry AND d.disease_name = cd.disease_name AND v.disease_name = d.disease_name AND v.vaccine_name = vs.vaccine_name AND vs.idEffect = s.idEffect AND d.disease_name = dt.disease_name AND t.idTransmition = dt.idTransmission AND c.idCountry = '".$num_to_three[$_GET['desticoun']]."' ";
if (!isset($_GET['research-check'])){
    $q_vaccine .= "AND v.status = 'Licensed' ";
}
if (isset($_GET['recomm-check'])){
    print('<div class="container"><h3>Prophylactic Recommendations</h3>');
    print_CRec_table($num_to_three[$_GET['desticoun']], $conn);
    print('<br></div>');
}
if (!isset($_GET['non-vacc-chec'])){
    $q_vaccine .= "AND d.vaccine = 'yes' ";
} else {
    $q_non_vaccinable = "SELECT DISTINCT d.disease_name, t.trans_name FROM Country c, Country_has_Diseases cd, Diseases d, Transmission t, Diseases_has_Transmission dt WHERE c.idCountry = cd.idCountry AND d.disease_name = cd.disease_name AND d.vaccine = 'no' AND d.disease_name = dt.disease_name AND t.idTransmition = dt.idTransmission AND c.idCountry = '" .$num_to_three[$_GET['desticoun']]."';";
}
if ($q_non_vaccinable){
    std_print_table($q_non_vaccinable, $conn, ['Disease_name', 'Transmission'], 'Non-Vaccinable diseases');
}
if ($_GET['oricoun']){
    $q_vaccine .= "AND cd.disease_name NOT IN ( SELECT cd.disease_name FROM Country_has_Diseases cd, Country c WHERE c.idCountry = '". $num_to_three[$_GET['oricoun']] ."' AND c.idCountry = cd.idCountry)";
    $se_supone_tienes = "SELECT DISTINCT v.vaccine_name, v.disease_name FROM Country c, Country_has_Diseases cd, Diseases d, S_effect s, Vaccines v, Vaccines_has_S_effect vs WHERE c.idCountry = cd.idCountry AND d.disease_name = cd.disease_name AND v.disease_name = d.disease_name AND v.vaccine_name = vs.vaccine_name AND vs.idEffect = s.idEffect AND c.idCountry = '" . $num_to_three[$_GET['oricoun']] ."' AND cd.disease_name IN ( SELECT cd.disease_name FROM Country_has_Diseases cd, Country c WHERE c.idCountry = '". $num_to_three[$_GET['desticoun']] ."' AND c.idCountry = cd.idCountry) AND v.status = 'Licensed'";
    std_print_table($se_supone_tienes, $conn,['Vaccine Name','Disease'], 'Vaccines you may already have' );
}
if (isset($_GET['all-info-check'])){
#std_print_table($q_vaccine, $conn, $q_track);
#var_dump(vaccine_simple_hash($q_vaccine, $conn));
    print_complete_hash($q_vaccine, $conn);
} else {
    print_simple_hash($q_vaccine, $conn);
} 
?>
</div>
</body>
<!-- FOOTER -->
  <footer class="container myspacing">
    <p class="float-right"><a href="#">Back to top</a></p>
    <p>2017-2018 DBW Python Lovers.</p>
  </footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="static/jquery-3.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="static/popper.js"></script>
<script src="static/bootstrap.js"></script>
<!-- Custom Java script -->
<script src="static/tables.js"></script>
<script src="static/locura.js"></script>
<script src="static/locura2.js"></script>
</html>

</html>
