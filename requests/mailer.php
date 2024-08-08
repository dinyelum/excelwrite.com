<?php
ob_start();
session_start();
include_once '../../app/excelwrite/core/init.php';
if(isset($_GET['id'])) {
    $id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    if(is_int($id)) {
        $userclass = new User;
        $userdetails = $userclass->select('firstname, email, hash')->where('id=:id and emailactive != 1', ['id'=>$id]);
        if(!count($userdetails)) {
            exit(json_encode(['response'=>false]));
        }
        $firstname = $userdetails[0]['firstname'];
        $to['email'] = $email = $userdetails[0]['email'];
        $hash = $userdetails[0]['hash'];
        $message['subject'] = 'Account Verification';
        $message['body'] = 
"<p>Hello $firstname,</p>
<p>Thank you for signing up! </p>

<p>Please click the link below to activate your account: <br>
https://excelwrite.com/account/verify?email=$email&hash=$hash</p>

<p>Best Regards.</p>";
            $message['alt'] = "Hello $firstname, Thank you for signing up! Please click the link below to activate your account: https://excelwrite.com/account/verify.php?email=$email&hash=$hash Best Regards.";
	        $from = [
				    'email'=>ENV['EMAIL_NOREPLY'],
				    'password'=>ENV['EMAIL_NOREPLY_PASS']
				    ];
        $generalclass = new General;
        $response = $generalclass->sendmail($to, $message, $from);
        if($response === true) {
            $_SESSION['resendcontrol'] = isset($_SESSION['resendcontrol']) ? ($_SESSION['resendcontrol'] + 1) : 1;
        }
    }
}
echo $response = json_encode(['response'=>$response ?? false]);