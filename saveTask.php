<?php

include('db.php');

if (isset($_POST['saveTask'])) {
  $nombre = $_POST['nombref'];
  $sucu = $_POST['sucursalf'];
  $ubicacion = $_POST['ubicacionf'];
  $tipo = $_POST['tipof'];
  $cantidad = $_POST['cantidadf'];
  $fecha = $_POST['fechaf'];
  $forma = $_POST['formaf'];
  $query = "INSERT INTO tbl_provedor(nombrePro, sucursal, ubiSucursal, tipoP, cantidadP, fechaS, formaP) VALUES ('$nombre', '$sucu', '$ubicacion', '$tipo', '$cantidad', '$fecha', '$forma')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'Guardado Correctamente';
  $_SESSION['message_type'] = 'success';
  header('Location: index.php');

}

?>