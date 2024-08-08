<?php
session_start();
include '../../app/excelwrite/core/init.php';
if(isset($_GET['section']) && isset($_GET['offset']) && isset($_GET['limit'])) {
    $offset = filter_input(INPUT_GET, 'offset', FILTER_VALIDATE_INT);
    $limit = filter_input(INPUT_GET, 'limit', FILTER_VALIDATE_INT);
    $datamode = $_GET['datamode'] ?? '';
    if(isset($_GET['status'])) {
        $status = match ($_GET['status']) {
            'open' => " and status = 'open'",
            'finished' => " and status = 'finished'",
            default => ''
        };
    }
    if(is_int($offset) && is_int($limit)) {
        $sectionclass = new $_GET['section'];
        if(isset($_GET['search'])) {
            $search = trim($_GET['search']) != '' ? $_GET['search'] : exit('Search box cannot be empty');
        }
        switch($_GET['section']) {
            case 'orders':
                if($datamode == 'writer') {
                    $sectiondata = $sectionclass->select("id, name, subject, substatus, status, DATE_FORMAT(expdate, '%a, %D %M, %Y') as expdate")->where("writerid=(select id from writer where userid=".$_SESSION['user']['id'].")".($status ?? '')." order by regdate desc limit $limit offset $offset");
                } else {
                    $sectiondata = $sectionclass->select("id, name, subject, substatus, status, DATE_FORMAT(expdate, '%a, %D %M, %Y') as expdate")->where("clientemail='".$_SESSION['user']['email']."'".($status ?? '')." order by regdate desc limit $limit offset $offset");
                }
            break;
            default:
            break;
        }
        if(is_array($sectiondata) && count($sectiondata)) {
            $response = [
                'response'=>'success',
                'data'=>$sectiondata
            ];
        } else {
            $response = [
                'response'=>false
            ];
        }
    }
}
if(isset($response)) {
    echo json_encode($response);
} else {
    echo json_encode(['response'=>false]);
}