<?php
ob_start();

//Add your information here
$recipient = "kate@o2owhynot.com,arch@holin.net.tw,jansson0319@gmail.com,sunny680811@gmail.com,anniehu0907@gmail.com,3q.tingtingchen@gmail.com"; //
// $successPage = "902180943728423926374.html";

//Don't edit anything below this line


//import form information
$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$job = $_POST['job'];
$address = $_POST['address'];
$number = $_POST['number'];
$amount = $_POST['amount'];
$email = $_POST['email'];
$city = $_POST['city'];
$time = $_POST['time'];
$date = $_POST['date'];
$cityarea = $_POST['cityarea'];
$message = $_POST['message'];
$subject = "禾林山之間-預約賞屋";
$subject="=?UTF-8?B?".base64_encode($subject)."?=";

$name=stripslashes($name);
$sex=stripslashes($sex);
$age=stripslashes($age);
$job=stripslashes($job);
$address=stripslashes($address);
$number=stripslashes($number);
$amount=stripslashes($amount);
$email=stripslashes($email);
$city=stripslashes($city);
$time=stripslashes($time);
$date=stripslashes($date);
$cityarea=stripslashes($cityarea);
// $message=stripslashes($message);
$content="=?UTF-8?B?".base64_encode($content)."?=";
$content=
"---禾林山之間--預約賞屋---". "\r\n". "\r\n".
	
	"姓名：".$email. "\r\n".
	"電話：".$number. "\r\n".
	"日期：".$date. "\r\n".
	"時間：".$time. "\r\n"
	;

/*
Simple form validation
check to see if an email and message were entered
*/

//if no message entered and no email entered print an error
if (empty($name) && empty($address) && empty($number)&& empty($email) && empty($message) && empty($amount) ){
echo "<meta http-equiv='Content-Type' content='text/html'; charset='utf-8'>";
echo "<script type='text/javascript'>";
echo "alert('請填寫資料才能送出!');";
echo "history.back()";
echo "</script>";
/*print "All No!!!";*/
/*No email address and no message was entered. <br>Please include an email and a message*/
}
// elseif (empty($name)){
// echo "<meta http-equiv='Content-Type' content='text/html'; charset='utf-8'>";
// echo "<script type='text/javascript'>";
// echo "alert('請填寫姓名!');";
// echo "history.back()";
// echo "</script>";
/*print "No name was entered.<br>Please include your <b>name</b>. <br>";*/
// }
// elseif (empty($address)){
// echo "<meta http-equiv='Content-Type' content='text/html'; charset='utf-8'>";
// echo "<script type='text/javascript'>";
// echo "alert('請填寫您的所在地區!');";
// echo "history.back()";
// echo "</script>";
// }
// elseif (empty($number)){
// echo "<meta http-equiv='Content-Type' content='text/html'; charset='utf-8'>";
// echo "<script type='text/javascript'>";
// echo "alert('請填寫電話!');";
// echo "history.back()";
// echo "</script>";
// }
//if no email entered send print an error
// elseif (empty($email)){
// echo "<meta http-equiv='Content-Type' content='text/html'; charset='utf-8'>";
// echo "<script type='text/javascript'>";
// echo "alert('請填寫email!');";
// echo "history.back()";
// echo "</script>";
// }
//if no message entered send print an error
// elseif (empty($message)){
// echo "<meta http-equiv='Content-Type' content='text/html'; charset='utf-8'>";
// echo "<script type='text/javascript'>";
// echo "alert('請填寫留言!');";
// echo "history.back()";
// echo "</script>";
// }
//if the form has both an email and a message
else {
	
// 当发送 HTML 电子邮件时，请始终设置 content-type
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html; charset=big5" . "\r\n";//utf-8
$headers .= 'From:$email' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

//mail the form contents
mail( "$recipient", "$subject", "$content", "From: $email" );

// header("content-type:text/html;charset=big5");
/*echo '<script> alert("傳送成功!!"); </script>';
header("Location: $successPage");*/

echo "<script type='text/javascript'>";
echo "alert('謝謝您的回覆，將儘速由專人與您聯絡！');";
echo "location.href='index.html';";
echo "</script>";
}

?>