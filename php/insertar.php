<?php
include("./cn.php");

$nombrePrograma = "";
$programaID = $_POST["programaAc"];
$titulo = $_POST["titulo"];
$desc = $_POST["descripcion"];
$img = $_POST["imagen"];

// Switch para saber de que programa se trata
switch ($programaID) {
    case 1:
        $nombrePrograma = "sistemas";
        break;
    case 2:
        $nombrePrograma = "alimentos";
        break;
    case 3:
        $nombrePrograma = "ambiental";
        break;
    case 4:
        $nombrePrograma = "metalurgica";
        break;
    case 5:
        $nombrePrograma = "mecatronica";
        break;
}

// echo "programa: $programaID";
// echo "<br>";
// echo "titulo: $titulo";
// echo "<br>";
// echo "descripcion: $desc";

if ($img) {
    $imgUrl = "img/$nombrePrograma/Logros/$img";
    // echo "<br>";
    // echo "url Imagen: $imgUrl";
    $insertar = "INSERT INTO logros(programa_id, titulo, descripcion, imagen) VALUES ('$programaID', '$titulo', '$desc', '$imgUrl')";
} else {
    $insertar = "INSERT INTO logros(programa_id, titulo, descripcion) VALUES ('$programaID', '$titulo', '$desc')";
}

$resultado = mysqli_query($con, $insertar);

if($resultado){
    echo "<script>
    alert('Se ha registrado el usuario con exito')
    window.history.go(-1)
    </script>";
} else {
    echo "<script>
    alert('No se pudo registrar')
    window.history.go(-1)
    </script>";
}
