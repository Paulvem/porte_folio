<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('../yaml/formation_yaml.yaml');

echo "<h1>".$data["Titre"]."</h1>\n";

foreach($data["Formation"] AS $Formation){
	echo "<p>".ucfirst($Formation["Nom"])." : ".$Formation["Année"]."</p>\n";
}