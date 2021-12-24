<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(!empty($_POST)){
	if(isset($_POST['fullname'])){
  	$fullname= $_POST['fullname'];
  }
  if(isset($_POST['email'])){
  	$email= $_POST['email'];
  }
  if(isset($_POST['phone_number'])){
  	$phone_number= $_POST['phone_number'];
  }
   if(isset($_POST['address'])){
  	$address= $_POST['address'];
  }
  $order_date=date('Y-m-d H:i:s');

  $cart=[];
       						 if(isset($_SESSION['cart']))
       						 {
       						 	$cart=$_SESSION['cart'];
       						 }
   if($cart == null || count($cart)==0)
   {
   	header('Location:index.php');
   	die();
   }
  $sql = "insert into hoadon(fullname,phone_number,email,address,order_date) values('$fullname','$phone_number','$email','$address','$order_date')";
  execute($sql);

  $sql= "select * from hoadon where order_date='$order_date'";
  $order= executeSingleResult($sql);

  $orderMaHD = $order['MaHD'];
  foreach ($cart as $item) {
  	$MaSP= $item['MaSP'];
  	$SoLuong=$item['SoLuong'];
  	$GiaBan=$item['GiaBan'];
  	$sql = "insert into chitiethoadon(MaHD,MaSP,SoLuong,GiaBan) values('$orderMaHD','$MaSP','$SoLuong','$GiaBan')";
  	execute($sql);
  }
    //session_destroy();
    unset($_SESSION['cart']);

    //mail
    $sql= "select * from chitiethoadon where MaHD='$orderMaHD'";
    $str= executeResult($sql);
    $thongbao="";
    foreach($str as $row)
    {
         $thongbao = $thongbao. " Mã sản phẩm " .$row['MaSP']." số lượng ".$row['SoLuong'].", ";
    }
    
    
    
    include 'php/mail/library.php';
    require 'php/mail/vendor/autoload.php';
                  
     $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, "MINALO FASHION");
                    $mail->addAddress($email, 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');

                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = "Đơn hàng đã được đặt";
                    $mail->Body = "Bạn đã mua". "  ". $thongbao ."  " ."Cám ơn bạn đã mua hàng";
                    $mail->AltBody = "Cám ơn bạn đã mua hàng"; //None HTML
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            
            

    
    header('Location:complete.php');
   	die();
}