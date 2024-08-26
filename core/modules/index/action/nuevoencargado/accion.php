<?php
// print_r($_POST);
$jefe =  new EncargadosData();
foreach ($_POST as $k => $v) {
	$jefe->$k = $v;
	# code...
}
$alphabeth ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYZ1234567890_-";
$jefe->password =($_POST["password"]);
$jefe->Nuevo_Encargado();

Core::redir("index.php?view=encargados");

?>
