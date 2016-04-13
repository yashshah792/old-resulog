<?PHP

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];
$to = "thatsyashhere@gmail.com";
$subject = "email from contact us";
$header = "From: Name" .$name . "Email" . $email;

if($name && $email && $msg){
    mail($to, $subject, $msg, $header);
}

header("Location: /index.html/#");
?>