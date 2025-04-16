<?php

if($_POST['name']){
    $name = $_POST['name'];

}else {
    $name = '';
}
if($_POST['email']){
    $email = $_POST['email'];

}else {
    $email = '';
}
if($_POST['phone']){
    $phone = $_POST['phone'];

}else {
    $phone = '';
}
if($_POST['subject']){
    $subject = $_POST['subject'];

}else {
    $subject = '';
}
if($_POST['message']){
    $message = $_POST['message'];

}else {
    $message = '';
}





$content = 'Name: ' . $name . '<br>';
$content .= 'Email: ' . $email . '<br>';
$content .= 'phone: ' . $phone . '<br>';
$content .= 'subject: ' . $subject . '<br>';
$content .= 'message: ' . $message . '<br>';

mail("sales@sepraexim.com","New Lead",$content);

echo '<h1>Thank You For Contacting, we will get back to you soon</h1>';

?>