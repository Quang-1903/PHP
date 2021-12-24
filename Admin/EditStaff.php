<?php
require_once("../database.php");
  if(isset($_GET['MaNV'])){
    $MaNV= $_GET['MaNV'];
    $sql = "select * from nhanvien where MaNV='$MaNV'";
    $SPList=  executeResult($sql);
    if($SPList !=null && count($SPList) >0){
      $std = $SPList[0];
      $HoTen= $std['HoTen'];
      $SDT= $std['SDT'];
      $DiaChi= $std['DiaChi'];
      $Luong= $std['Luong'];
    }


  if(isset($_POST['MaNV'])){

    $HoTen= $_POST['HoTen'];

    $SDT= $_POST['SDT'];

    $DiaChi= $_POST['DiaChi'];

    $Luong= $_POST['Luong'];

    if( $MaNV!=='' && $HoTen !='' && $SDT!='' && $DiaChi !='' && $Luong!='')
     {
        $sql= "update nhanvien set HoTen='$HoTen',SDT='$SDT',DiaChi='$DiaChi',Luong='$Luong' where MaNV='$MaNV'";
        //echo $sql;
        execute($sql);
        header("Location:Staff.php");
     }
    else
     {
      echo '<script language="javascript">';
      echo 'alert("Bạn chưa nhập đủ thông tin")';
      echo '</script>';
      
     }
  }

  
}
?>
<!DOCTYPE <html></html>
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

</head>

   <body id="page-top">
    <?php
       require_once("headeAdmin.php");      
    ?>
                    <!-- Begin Page Content -->
                <div class="container-fluid">
                        <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Staff</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Sửa thông tin nhân viên</h3>
      </div>
      <div class="panel-body">
            <form method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label>Mã nhân viên</label>
                  <input  type="text" name="MaNV" id="MaNV" class="form-control" value="<?=$MaNV?>" readonly>
               </div>
               <div class="form-group">
                  <label>Họ tên </label> 
                  <input required="true" type="text" name="HoTen" id="HoTen" class="form-control" value="<?=$HoTen?>" >
               </div>
               <div class="form-group">  
                  <label>SDT</label>
                  <input required="true" type="number" name="SDT" id="SDT" class="form-control" value="<?=$SDT?>" >
               </div>
               <div class="form-group">  
                  <label>Địa chỉ </label>
                  <input required="true" type="text" name="DiaChi" id="DiaChi" class="form-control" value="<?=$DiaChi?>" >
               </div>
               <div class="form-group">  
                  <label>Lương</label>
                  <input required="true" type="number" name="Luong" id="Luong" class="form-control" value="<?=$Luong?>" >
               </div>

                  <br/>
                  <button class="btn btn-success" >Lưu</button>
                  </div>
            </form> 
            <br/>    
      </div>
    </div>
      
    </div>
  </div>
                </div>
                <!-- /.container-fluid -->
                
            </div>
            <!-- End of Main Content -->
             
            <!-- Footer -->
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