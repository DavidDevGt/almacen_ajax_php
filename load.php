<?php

require 'config.php';

$columns = ['no_emp', 'fecha_nacimiento', 'nombre', 'apellido', 'fecha_ingreso'];
$table = "empleados";

$campo = isset($_POST['campo']) ? $conn->real_escape_string($_POST['campo']) : null;

$where = '';

if ($campo != null) {
    $where = "WHERE (";

    $cont = count($columns);
    for ($i = 0; $i < $cont; $i++) {
        $where .= $columns[$i] . " LIKE '%". $campo . "%' OR ";
    }
    $where = substr_replace($where, "", -3);
    $where .= ")";
}

$sql = "SELECT " . implode(", ", $columns) . " FROM $table";
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
        $html .= '<td><a class="btn btn-success" href>Editar</a></td>';
        $html .= '<td><a class="btn btn-danger" href>Eliminar</a></td>';
        $html .= '<tr>';
    }
}else{
    $html .= '<tr>';
    $html .= '<td colspan="7">Sin resultados</td>';
    $html .= '</tr>';
}

echo json_encode($html, JSON_UNESCAPED_UNICODE);