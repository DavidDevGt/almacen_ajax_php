<?php

require 'config.php';

$columns = ['no_emp', 'fecha_nacimiento', 'apellido', 'fecha_ingreso'];
$table = "empleados";

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

$sql = "SELECT " . implode(", ", $columns) . "FROM $table";
$resultado = $conn->query($sql);
$num_rows = $resultado->num_rows;

$html = '';

if($num_rows > 0){
    while($row = $resultado->fetch_assoc()) {
        $html .= '<tr>';
        $html .= '<td>'.$row['no_emp'].'</td>';
        $html .= '<td>'.$row['nombre'].'</td>';
        $html .= '<td>'.$row['apellido'].'</td>';
        $html .= '<td>'.$row['fecha_nacimiento'].'</td>';
        $html .= '<td>'.$row['fecha_ingreso'].'</td>';
        $html .= '<td><a href>Editar</a></td>';
        $html .= '<td><a href>Eliminar</a></td>';
        $html .= '<tr>';
    }
}else{
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '</td>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);