<?php
session_start();
include '../../app/excelwrite/init.php';
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$tableclass = new $_GET['section'];
$columns = explode('_', base64_decode($_GET['datahash']));
$validcolumns = $tableclass->validate_columns($columns);
if(is_int($id) && !$tableclass->err) {
    $data = $tableclass->select(implode(', ', $columns))->where("id=$id");
    if(!is_array($data) || !count($data)) {
        $data = null;
    }
}
echo $response = json_encode($data ?? ['error'=>'An unknown error occured']);