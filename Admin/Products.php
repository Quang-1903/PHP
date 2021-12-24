<?php
  require_once("../database.php");
  require_once("../pagesize.php");
?>
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
        
     </div>
    <div class="container">
         <div class="panel panel-primary">
            <div class="panel-heading">
                <form method="get">
                    <input type="text" name="search" class="form-control" style="margin-top: 15px;margin-bottom: 15px;" placeholder="Nhập tên sản phẩm cần tìm kiếm ..." >
                </form>
            </div>
            <button class="btn btn-success" onclick="window.open('Add_Products.php')">Add Product</button>
            <br/>
            <br/>
            <div class="panel-body">
                <table class="table table-hover table-bordered">
                    <tr>
                        <th>Product ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Image 1</th>
                        <th>Sex</th>
                        <th>Describe</th>
                        <th>Image 2</th>
                        <th>Time</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    //phan trang

                     $limit=6;
                     $page=1;
                     if(isset($_GET['page']))
                        {
                          $page = $_GET['page'];
                        }
                     if($page <=0)
                        {
                          $page=1;
                        }
                     $index=($page-1)*$limit;
                     $sql= 'select count(MaSP) as number from sanpham';
                     $result = executeResult($sql);
               
                     //var_dump($result);
               
                     if( $result !=null && count($result)>0)
                       {
                           $count= $result[0]['number'];
                       }
                     $number = ceil($count/$limit);
               

                     if(isset($_GET['search']) && $_GET['search']!=''){
                     $sql='select MaSP,TenSP,GiaBan,loaisp.Loai,TinhTrang,Anh,gioitinh.GioiTinh,MoTa,Anh_hover,NgayNhap FROM sanpham,gioitinh,loaisp WHERE sanpham.Loai= loaisp.MaLoai and sanpham.GioiTinh=gioitinh.MaGT and TenSP like "%'.$_GET['search'].'%"';
                     }
                     else{
                         $sql = 'SELECT MaSP,TenSP,GiaBan,loaisp.Loai,TinhTrang,Anh,gioitinh.GioiTinh,MoTa,Anh_hover,NgayNhap FROM sanpham,gioitinh,loaisp WHERE sanpham.Loai= loaisp.MaLoai and sanpham.GioiTinh=gioitinh.MaGT limit  '.$index.','.$limit;
                     }
                     
                     $result= executeResult($sql);
                     foreach($result as $row)
                     {
                        echo '<tr>
                                    <td>'.$row['MaSP'].'</td>
                                    <td>'.$row['TenSP'].'</td>
                                    <td>'.$row['GiaBan'].'</td>
                                    <td>'.$row['Loai'].'</td>
                                    <td>'.$row['TinhTrang'].'</td>
                                    <td><img src="../images/preview/shop/'.$row['Anh'].'" style="max-width:100px"/></td>
                                    <td>'.$row['GioiTinh'].'</td>
                                    <td>'.$row['MoTa'].'</td>
                                    <td><img src="../images/preview/shop/'.$row['Anh_hover'].'" style="max-width:100px"/></td>
                                    <td>'.$row['NgayNhap'].'</td>
                                    <td><button  class="btn btn-warning" onclick=\'window.open("EditProducts.php?MaSP='.$row['MaSP'].'","_self")\'>Edit</button></td>
                                    <td><button class="btn btn-danger" onclick="deleteSP(\''.$row['MaSP'].'\')">Delete</button></td>
                              </tr>';
                     }
                    ?>
                    
                </table>

            </div>
             <div class="row">
                     <?=paginarion($number,$page,'')?>
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
   <script type="text/javascript">
    function deleteSP(masp){
        
        option = confirm('Bạn có muốn  xóa sản phẩm mã '+ masp + ' ko? ' );
        //console.log(masp);
        if(!option)
        {
            return;
        }
        $.post('deleteProducts.php',{
            'masp':masp
        },function(data){
          location.reload();
        })
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