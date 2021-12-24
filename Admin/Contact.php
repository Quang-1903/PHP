<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="Contact/fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Contact/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="Contact/css/style.css">  
</head>
    <body id="page-top">
    <?php
       require_once("headeAdmin.php");      
    ?>

       <div class="content">
    
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          

          <div class="row justify-content-center">
            <div class="col-md-6">
              
              <h3 class="heading mb-4">Let's talk about everything!</h3>
              <p>Send email for support customers</p>

              <p><img src="Contact/images/undraw-contact.svg" alt="Image" class="img-fluid"></p>


            </div>
            <div class="col-md-6">
              <?php
              use PHPMailer\PHPMailer\PHPMailer;
              use PHPMailer\PHPMailer\Exception;

              include 'Contact/php/upfile.php';
              $error="";
              if(isset($_GET['action']) && $_GET['action']== "send")
              {
                if(empty($_POST['email']))
                {
                  $error="Chưa nhập email";
                }elseif (empty($_POST['message'])) {
                  $error="Chưa nhập nội dung";
                }elseif (empty($_POST['subject'])) {
                  $error="Chưa nhập tiêu đề";
                }
                if (!empty($_FILES['file_upload']['name'][0])) {
                $uploadedFiles = $_FILES['file_upload'];
                $result = uploadFiles($uploadedFiles);
                if (!empty($result['errors'])) {
                    $error = $result['errors'];
                } else {
                    $uploadedFiles = $result['uploaded_files'];
                   }
                }
                if (empty($error)) {
                  include 'Contact/php/library.php';
                  require 'Contact/php/vendor/autoload.php';
                  
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
                    $mail->addAddress($_POST['email'], 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                    if (!empty($uploadedFiles)) {
                        foreach ($uploadedFiles as $file) {
                            $mail->addAttachment(realpath('.') . $file);
                        }
                    }

                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = $_POST['subject'];
                    $mail->Body = $_POST['message'];
                    $mail->AltBody = $_POST['message']; //None HTML
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
                <h1><?= !empty($error) ? $error : "Gửi email thành công" ?></h1>
                <a href = "Contact.php">Quay lại form gửi mail</a>
            </div>
        <?php } else {
            ?>
              <form class="mb-5" method="post" id="contactForm" name="contactForm" action="?action=send" enctype="multipart/form-data">
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input  type="email" class="form-control" name="email" id="email" placeholder="Email">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                  </div>
                </div>
                <div class="row"  >
                  <div class="col-md-12 form-group">
                    <input multiple type="file" class="form-control" name="file_upload[]" id="file_upload" placeholder="File"
                    value="">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 form-group">
                    <textarea class="form-control" name="message" id="message" cols="30" rows="7" placeholder="Write your message"></textarea>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-12">
                    <input type="submit" value="Send Mail" class="btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                  </div>
                </div>
              </form>

                <?php
                  }
                ?>

            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="Contact/js/jquery-3.3.1.min.js"></script>
    <script src="Contact/js/popper.min.js"></script>
    <script src="Contact/js/bootstrap.min.js"></script>
    <script src="Contact/js/jquery.validate.min.js"></script>
    <script src="Contact/js/main.js"></script>



     <?php
                require_once("footerAdmin.php");
             ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>