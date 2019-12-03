<?php 

// $mahasiswa = [
// 	[
// 		"nama" => "kresna",
// 		"nrp" => "173040129",
// 		"email" => "kresna_173040129@mail.unpas.ac.id"
// 	],
// 	[
// 		"nama" => "cinboy",
// 		"nrp" => "1730401200",
// 		"email" => "cinboy_1730401200@mail.unpas.ac.id"
// 	]
	

// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpmvc','root','');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
 ?>