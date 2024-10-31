<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('../yaml/page_de_garde_yaml.yaml');
//print_array($data);

echo "<h1>".$data["Titre"]."</h1>\n";
echo "<h2>Identite</h2>\n";

foreach($data["Identite"] AS $Identite){
	echo "<p>".ucfirst($Identite["nom"])." : ".$Identite["Prenom"]." ".$Identite["Age"]."</p>\n";
}
?>