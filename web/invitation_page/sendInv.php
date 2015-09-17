<?php
echo 'xxx';
require_once "Mail.php";

$plan = $_POST['Plan'];
if($plan == 'PLAN001') $dest = "Kyoto";
else if ($plan == 'PLAN002') $dest = "Hokkaido";
else if ($plan == 'PLAN003') $dest = "Okinawa";

$from = '<bangmay@gmail.com>';
$to = $_POST['Recipient'];
$subject = $_POST['Title'];
$body = "Let's travel to " . $dest;
$body_more = $_POST['Message'];

//papercut
/*
$headers = 'From: bangmay@gmail.com' . "\r\n" .
    'Reply-To: bangmay@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

$s = mail($to, $subject, $body . ' ' . $body_more, $headers);
print_r($s);
print_r($_POST);
*/

$headers = array(
    'From' => $from,
    'To' => $to,
    'Subject' => $subject
);


$smtp = Mail::factory('smtp', array(
        'host' => 'ssl://smtp.gmail.com',
        'port' => '465',
        'auth' => true,
        'username' => 'bangmay@gmail.com',
        'password' => ''
    ));

$mail = $smtp->send($to, $headers, $body . ' ' . $body_more);

print_r($mail);

if (PEAR::isError($mail)) {
    echo('<p>' . $mail->getMessage() . '</p>');
} else {
    echo('<p>Message successfully sent!</p>');
}


?>