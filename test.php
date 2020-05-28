<?PHP
$sender = 'abhishekjain7204@GMAIL.COM';
$recipient = 'jainabhishek7204@yahoo.com';

$subject = "php mail test";
$message = "php test message";
$headers = 'From:' . $sender;

if (mail($recipient, $subject, $message, $headers, $sender))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>