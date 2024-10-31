<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('../yaml/Acceuil_yaml.yaml');
//print_array($data);

echo "<h1>".$data["Titre"]."</h1>\n";
echo "<h2>Identite</h2>\n";

foreach($data["Identite"] AS $Identite){
	echo "<p>".ucfirst($Identite["nom"])." : ".$Identite["Prenom"]." ".$Identite["Age"]."</p>\n";
}
echo "<h1>".$data["Accroche"]."</h1>\n";
echo "<h1>".$data["Presentation"]."</h1>\n";

?>