<?php
require_once("../database.php");

$MaNV = $HoTen = $SDT = $DiaChi = $Luong = '';

if (isset($_POST['MaNV'])) {
  $MaNV = $_POST['MaNV'];
}

if (isset($_POST['HoTen'])) {
  $HoTen = $_POST['HoTen'];
}

if (isset($_POST['SDT'])) {
  $SDT = $_POST['SDT'];
}
if (isset($_POST['DiaChi'])) {
  $DiaChi = $_POST['DiaChi'];
}
if (isset($_POST['Luong'])) {
  $Luong = $_POST['Luong'];
}

$check = "SELECT COUNT(*) FROM nhanvien  WHERE MaNV='$MaNV'";

$result = executeSingleResult($check);
if ($result['COUNT(*)'] != 0) {
  echo '<script language="javascript">';
  echo 'alert("Mã nhân viên đã tồn tại")';
  echo '</script>';
} else {
  if ($MaNV !== '' && $HoTen != '' && $SDT != '' && $DiaChi != '' && $Luong != '') {
    //insert
    $sql = 'insert into nhanvien(MaNV,HoTen,SDT,DiaChi,Luong) values ("' . $MaNV . '","' . $HoTen . '","' . $SDT . '","' . $DiaChi . '","' . $Luong . '")';
    execute($sql);
    header("Location:Staff.php");
  } else {
    echo '<script language="javascript">';
    echo 'alert("Bạn chưa nhập đủ thông tin")';
    echo  'location.reload();';
    echo '</script>';
  }
}
?>
<!DOCTYPE <html>

</html>
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
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
      <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Thêm nhân viên</h3>
        </div>
        <div class="panel-body">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Mã nhân viên</label>
              <input required="true" type="text" name="MaNV" id="MaNV" class="form-control">
            </div>
            <div class="form-group">
              <label>Tên nhân viên</label>
              <input required="true" type="text" name="HoTen" id="HoTen" class="form-control">
            </div>
            <div class="form-group">
              <label>SDT</label>
              <input required="true" onkeypress="return isNumber(event)" type="number" name="SDT" id="SDT" class="form-control">
            </div>
            <div class="form-group">
              <label>Địa chỉ</label>
              <input required="true" type="text" name="DiaChi" id="DiaChi" class="form-control">
            </div>
            <div class="form-group">
              <label>Lương</label>
              <input required="true" onkeypress="return isNumber(event)" type="number" name="Luong" id="Luong" class="form-control">

              <br />
              <button class="btn btn-success">Thêm nhân viên</button>
            </div>

          </form>
          <br />
        </div>
      </div>

    </div>
  </div>
  </div>
  <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->

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