<?php
require_once'../model/modelClient.php';
	if (isset($_POST['okC'])) {
		$cin = $_POST['recherche'];
		$Rech = findClientByCni($cni);
		if ($Rech) {
			header(location:)
		}
	}
?>