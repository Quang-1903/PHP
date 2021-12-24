<?php
require_once("../database.php");
  if(isset($_GET['TenCty'])){
    $TenCty= $_GET['TenCty'];
    $sql = "select * from congty where TenCty='$TenCty'";
    $SPList=  executeResult($sql);
    if($SPList !=null && count($SPList) >0){
      $std = $SPList[0];
      $DiaChiCty= $std['DiaChiCty'];
      $SdtCty= $std['SdtCty'];
      
    }


  if(isset($_POST['TenCty'])){

    $DiaChiCty= $_POST['DiaChiCty'];

    $SdtCty= $_POST['SdtCty'];

    
    if( $TenCty!=='' && $DiaChiCty !='' && $SdtCty!='')
     {
        $sql= "update congty set DiaChiCty='$DiaChiCty',SdtCty='$SdtCty' where TenCty='$TenCty'";
        //echo $sql;
        execute($sql);
        header("Location:Company.php");
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

    <?php
       require_once("headeAdmin.php");      
    ?>
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Sửa thông tin công ty</h3>
      </div>
      <div class="panel-body">
            <form method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label>Tên công ty</label>
                  <input  type="text" name="TenCty" id="TenCty" class="form-control" value="<?=$TenCty?>" readonly>
               </div>
               <div class="form-group">
                  <label>Địa chỉ </label> 
                  <input required="true" type="text" name="DiaChiCty" id="DiaChiCty" class="form-control" value="<?=$DiaChiCty?>" >
               </div>
               <div class="form-group">  
                  <label>Số điện thoại</label>
                  <input required="true" type="number" name="SdtCty" id="SdtCty" class="form-control" value="<?=$SdtCty?>" >
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