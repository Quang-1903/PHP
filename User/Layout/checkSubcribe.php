<?php
              use PHPMailer\PHPMailer\PHPMailer;
              use PHPMailer\PHPMailer\Exception;

              $error="";
                if(empty($_POST['subcribe']))
                {
                  $error="Chưa nhập email";
                }
                else {
                  include '../php/mail/library.php';
                  require '../php/mail/vendor/autoload.php';
                  
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
                    $mail->addAddress($_POST['subcribe'], 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = "Đăng kí thành công";
                    $mail->Body = "Bạn đã đăng kí theo dõi thành công, chúng tôi sẽ sớm gửi đến bạn các sản phẩm mới nhất";
                    $mail->AltBody = "Bạn đã đăng kí theo dõi thành công, chúng tôi sẽ sớm gửi đến bạn các sản phẩm mới nhất"; //None HTML
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    }
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }
            ?>
            
            <div class = "container">
                <?php
                  if(!empty($error))
                  {
                    echo '<h1>'.$error.'</h1>';
                    
                    echo '<a href = "../Index.php">Quay lại form gửi mail</a>';
                 
                  }
                  else
                  {
                    echo "Gửi email thành công";
                    header("Refresh:1; url=../Index.php");
                  }
                ?>
            </div>