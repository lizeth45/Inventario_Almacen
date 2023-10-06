<?php
	include('../conexion.php');
	$link = conectaDB();

	if(isset($_GET['loginUsername']) && isset($_GET['loginPassword'])){
		$nomUser = $_GET['loginUsername'];
		$userPass = $_GET['loginPassword'];

		$sql="SELECT COUNT(*) FROM USUARIOS WHERE nom_usr ='$nomUser' and pass ='$userPass'";
		$result = mysqli_query($link,$sql);

		$respuesta = 0;
		while($fila = mysqli_fetch_row($resultado)){
			$respuesta = $fila[0];
		}


		if($respuesta == 1 && $result == true){
			session_start();
			$_SESSION['login'] = "true";
			$_SESSION['nomusuario'] = $_GET['loginUsername'];
			echo json_encode(array('success' => 1));
		}else{
			echo json_encode(array('success' => 0));
		}

	} 	

// if($_GET['loginUsername'] == "admin" && $_GET['loginPassword']=="unach"){
// 	session_start();
// 	$_SESSION['login'] = "true";
// 	$_SESSION['nomusuario'] = $_GET['loginUsername'];
	
// 	//header("location: menu.php");
// 	echo json_encode(array('success' => 1));
// }
// else{
// 	//header("location: index.php");	
// 	echo json_encode(array('success' => 0));
// }	

?>
