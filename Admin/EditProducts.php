<?php
require_once("../database.php");
  if(isset($_GET['MaSP'])){
    $MaSP= $_GET['MaSP'];
    $sql = "select * from sanpham where MaSP='$MaSP'";
    $SPList=  executeResult($sql);
    if($SPList !=null && count($SPList) >0){
      $std = $SPList[0];
      $TenSP= $std['TenSP'];
      $GiaBan= $std['GiaBan'];
      $Loai= $std['Loai'];
      $TinhTrang= $std['TinhTrang'];
      $Anh= $std['Anh'];
      $GioiTinh= $std['GioiTinh'];
      $MoTa= $std['MoTa'];
      $Anh_hover= $std['Anh_hover'];
    }


  if(isset($_POST['masp'])){

    $TenSP= $_POST['TenSP'];

    $GiaBan= $_POST['GiaBan'];

    $Loai= $_POST['Loai'];

    $TinhTrang= $_POST['TinhTrang'];


    $GioiTinh= $_POST['GioiTinh'];

    $MoTa= $_POST['MoTa'];
    
    $file= $_FILES['Anh'];
    $Anh= $file['name'];
    move_uploaded_file($file['tmp_name'],'../images/preview/shop/'.$Anh);

    $file= $_FILES['Anh_hover'];
    $Anh_hover= $file['name'];
    move_uploaded_file($file['tmp_name'],'../images/preview/shop/'.$Anh_hover);

    //echo $MaSP ."  ". $TenSP ."  ". $GiaBan ."  ". $Loai ."  ". $TinhTrang ."  ". $GioiTinh ."  ". $MoTa;
    if( $MaSP!=='' && $TenSP !='' && $GiaBan!='' && $Loai !='' && $TinhTrang!='' &&  $GioiTinh!='' &&  $MoTa!='')
     {
        $sql= "update sanpham set TenSP='$TenSP',GiaBan='$GiaBan',Loai='$Loai',TinhTrang='$TinhTrang',Anh='$Anh',GioiTinh='$GioiTinh',MoTa='$MoTa',Anh_hover='$Anh_hover' where MaSP='$MaSP'";
        //echo $sql;
        execute($sql);
        header("Location:Products.php");
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
                        <h1 class="h3 mb-0 text-gray-800">Products</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div>
  <div class="container">
    <div class="panel panel-primary">
      <div class="panel-heading">
        <h3 class="panel-title">Sửa sản phẩm</h3>
      </div>
      <div class="panel-body">
            <form method="post" enctype="multipart/form-data">
               <div class="form-group">
                  <label>Mã sản phẩm</label>
                  <input  type="text" name="masp" id="masp" class="form-control" value="<?=$MaSP?>" readonly>
               </div>
               <div class="form-group">
                  <label>Tên sản phẩm</label> 
                  <input required="true" type="text" name="TenSP" id="TenSP" class="form-control" value="<?=$TenSP?>" >
               </div>
               <div class="form-group">  
                  <label>Giá bán</label>
                  <input required="true" onkeypress="return isNumber(event)" type="number" name="GiaBan" id="GiaBan" class="form-control" value="<?=$GiaBan?>" >
               </div>
               <div class="form-group">
                  <label>Loại</label>
                  <select class="form-control" name="Loai" id="Loai" >
                  <option value="<?=$Loai?>"><?=$Loai?></option>
                  <?php
                     $sql= 'select * from loaisp';
                     $LoaiList= executeResult($sql);
                     foreach ($LoaiList as $item) {
                         echo '<option value="'.$item['MaLoai'].'">'.$item['Loai'].'</option>';
                     }
                  ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>Tình trạng</label>
                  <select class="form-control" name="TinhTrang" id="TinhTrang">
                  <option value="<?=$TinhTrang?>"><?=$TinhTrang?></option>
                  <?php
                     $sql= 'select * from sanpham GROUP BY TinhTrang';
                     $TTList= executeResult($sql);
                     foreach ($TTList as $item) {
                         echo '<option value="'.$item['TinhTrang'].'">'.$item['TinhTrang'].'</option>';
                     }
                  ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>Ảnh  1</label>
                  <input type="file" name="Anh" id="Anh" class="form-control" placeholder="Upload ảnh" value="<?=$Anh?>">
               </div>
               <div class="form-group">
                  <label>Giới tính</label>
                  <select class="form-control" name="GioiTinh" id="GioiTinh">
                  <option value="<?=$GioiTinh?>"><?=$GioiTinh?></option>
                  <?php
                     $sql= 'select * from gioitinh';
                     $GTList= executeResult($sql);
                     foreach ($GTList as $item) {
                         echo '<option value="'.$item['MaGT'].'">'.$item['GioiTinh'].'</option>';
                     }
                  ?>
                  </select>
               </div>
               <div class="form-group">
                  <label>Mô tả</label>
                  <textarea class="form-control" rows="5" name="MoTa" id="MoTa"><?=$MoTa?></textarea>
               </div>
               <div class="form-group"> 
                  <label>Ảnh 2</label>  
                  <input  type="file" name="Anh_hover" id="Anh_hover" class="form-control" value="<?=$Anh_hover?>">
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
    <script>
	function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>
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