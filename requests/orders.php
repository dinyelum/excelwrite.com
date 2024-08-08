<?php
session_start();
require "../../app/excelwrite/core/init.php";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // show($_POST);exit;
    $genclass = new General;
    switch($_POST['submit']) {
        case 'create':
            $response = $genclass->create(array_merge($_POST, $_FILES), 'orders');
            if($response===true) {
				$message['subject'] = 'New Order on your Website';
				$message['body'] = 
"<p>Hello Admin,<br>
This is to notify you about a new order on your website.</p>

<p>Order Summary:<br>
Order Id: ".$_POST['name']."<br>
Subject: ".$_POST['subject']."<br>
Pages: ".$_POST['pages']."<br>
Deadline: ".$_POST['expdate']."<br>
</p>

<p>Kindly login on your dashboard to view Order details:<br>
https://excelwrite.com/admin</p>

<p>Best Regards.</p>";
                $message['alt'] = "Hello Admin, this is to notify you about a new order on your website. Kindly login on your dashboard to view Order details: https://excelwrite.com/admin
                Best Regards.";
				$from = [
				    'email'=>ENV['EMAIL_NOREPLY'],
				    'password'=>ENV['EMAIL_NOREPLY_PASS']
				    ];
				$receiver['email'] = ENV['ADMIN_EMAIL_1'];
				$receiver['bcc'] = [ENV['ADMIN_EMAIL_2']];
				$genclass->sendmail($receiver, $message, $from);
				$receiver = [];
            }
            $success = 'Submitted Successfully. We will contact you within the next few hours.';
            if($response === true) {
                //message admin
            }
        break;
        // case 'Login':
        //     $response = $genclass->login($_POST, 'user', $setsession);
        //     $success = 'Login Successful';
        // break;
        case 'update':
            $response = $genclass->update_by_id_and_name('orders', ['rating'=>$_POST['rating'], 'review'=>$_POST['review']], [$_POST['id'], $_POST['name']]);
            $success = 'Review Submitted Successfully. Thank you.';
        break;
        default:
        break;
    }
}
if($response === true) {
    echo json_encode(['success'=>$success]);
} else {
    $response[1]['gen'] = $response[1]['gen'] ?? (isset($response[1]['name']) ? $response[1]['name'].'. Kindly refresh the page.' : '');
    echo json_encode($response[1]);
}