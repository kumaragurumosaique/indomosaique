<?php echo "o";
//get data from form 
$company=$_POST['company-name'] ;
$name = $_POST['name'];
$email= $_POST['email'];

$message= $_POST['message'];
$to = "kumaraguru@mosaique.link";
$subject = "Mail From website";
$txt = "Company =". $company . "\r\n Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>