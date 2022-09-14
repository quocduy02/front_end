<?php
session_start();
    if(!isset($_SESSION['cart'])){
        $_SESSION['cart'] = [];
    }
    if(isset($_POST['submit'])){
        //array(4) { ["nameproduct"]=> string(22) "Áo đá bóng MU 2022" ["price"]=> string(6) "199999" ["image"]=> string(13) "product-1.ipg" ["submit"]=> string(0) "" }
        $product = [$_POST['nameproduct'], $_POST['price'], $_POST['image']];
        $_SESSION['cart'][] = $product;
        var_dump($_SESSION['cart']);
    }
    //neu 2 sp dc add thi tang tong
    function pushToPage(){
        if(isset($_SESSION['cart'])){
            for($i = 0; $i < sizeof($_SESSION['cart']); $i++){

                echo $_SESSION['cart'][$i][0]."<br>";//ten
                echo $_SESSION['cart'][$i][1]."<br>";//gia
                echo $_SESSION['cart'][$i][2]."<br>";//hinh
                if($_SESSION['cart'][$i][2] == $_SESSION['cart'][$i][2]){
                    $count++;
                }
                echo "<td class='align-middle'><img src=".$_SESSION['cart'][$i][2]." style='width: 50px;'>".$_SESSION['cart'][$i][0]."</td>
                <td class='align-middle'>".$_SESSION['cart'][$i][1]."đ</td>
                <td class='align-middle'>
                    <div class='input-group quantity mx-auto' style='width: 100px;'>
                        <div class='input-group-btn'>
                            <button class='btn btn-sm btn-primary btn-minus' >
                            <i class='fa fa-minus'></i>
                            </button>
                        </div>
                        <input type='text' class='form-control form-control-sm bg-secondary text-center' value=".$count.">
                        <div class='input-group-btn'>
                            <button class='btn btn-sm btn-primary btn-plus'>
                                <i class='fa fa-plus'></i>
                            </button>
                        </div>
                    </div>
                </td>
                <td class='align-middle'>199.000đ</td>
                <td class='align-middle'><button class='btn btn-sm btn-primary'><i class='fa fa-times'></i></button></td>";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EShopper - Bootstrap Shop Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
      <!-- Topbar Start -->
      <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class=" row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold px-3 mr-1">BD</span>Sports</h1>
                </a>
            </div>
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Nhập sản phẩm cần tìm...">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3 col-6 text-right">
                <a href="" class="btn border" data-notify="0">
                    <i class="fas fa-user text-primary" ></i>
                    <span> Đăng nhập </span>
                </a>
                <a href="cart.html" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>
            </div>
        </div>
  
    <!-- Topbar End -->
   <!-- Navbar Start -->
   <div class="container-fluid">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                <h6 class="m-0" style="font-weight: bold; color: white;">Danh Mục Sản Phẩm</h6>
                <i class="fa fa-angle-down text-white"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                <div class="navbar-nav w-100 overflow-hidden" style="height: 287px">
                    <div class="nav-item dropdown">
                        <a href="./shop.html" class="nav-link" data-toggle="dropdown">Giày thể thao <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="" class="dropdown-item">Giày đá bóng cỏ nhân tạo </a>
                            <a href="" class="dropdown-item">Giày đá bóng cỏ tự nhiên</a>
                            <a href="" class="dropdown-item">Giày futsal</a>
                            <a href="" class="dropdown-item">Giày chạy bộ</a>
                        </div>
                    </div>
                    <a href="./shop.html" class="nav-item nav-link">Áo khoác thể thao</a>
                    <div class="nav-item dropdown">
                        <a href="./shop.html" class="nav-link" data-toggle="dropdown">Quần áo thể thao <i class="fa fa-angle-down float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                            <a href="./shop.html" class="dropdown-item">Quần áo câu lạc bộ</a>
                            <a href="./shop.html" class="dropdown-item">Quần áo đội tuyển</a>
                            <a href="./shop.html" class="dropdown-item">Quần áo đá bóng không logo</a>
                            <a href="./shop.html" class="dropdown-item">Quần áo dài tay</a>
                        </div>
                    </div>
                    <a href="./shop.html" class="nav-item nav-link">Phụ kiện thể thao</a>
                    <a href="./shop.html" class="nav-item nav-link">Đồ bơi</a>
                    <a href="./shop.html" class="nav-item nav-link">Cúp - Cờ lưu niệm</a>
                    <a href="./shop.html" class="nav-item nav-link">Dụng cụ tập thể thao </a>
                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">BD</span>Sports</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="index.html" class="nav-item nav-link active ">Trang Chủ</a>
                        <a href="" class="nav-item nav-link ">Giới Thiệu</a>
                        <a href="" class="nav-item nav-link ">Tin Tức</a>
                        <a href="" class="nav-item nav-link ">Khuyến Mãi</a>
                        <a href="" class="nav-item nav-link">Hệ Thống Cửa hàng</a>
                    </div>
                </div>
            </nav>
    </div>
</div>
<!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Giỏ Hàng</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Trang Chủ</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Giỏ Hàng</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Sản Phẩm</th>
                            <th>Giá Bán</th>
                            <th>Số lượng</th>
                            <th>Tổng Tiền</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <!--Display product-->
                        <tr>
                            <?php
                                pushToPage();
                            ?>
                            <!-- <td class="align-middle"><img src="img/product-1.jpg" alt="" style="width: 50px;"> Áo bóng đá MU 2022</td>
                            <td class="align-middle">$199.000đ</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">199.000đ</td>
                            <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td> -->
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Mã Giảm Giá">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Áp dụng mã Giảm Giá</button>
                        </div>
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Bảng tính tiền</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Giá</h6>
                            <h6 class="font-weight-medium">398.000đ</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Phí Vận Chuyển</h6>
                            <h6 class="font-weight-medium">20.000đ</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Tổng tiền</h5>
                            <h5 class="font-weight-bold">418.000đ</h5>
                        </div>
                        <button class="btn btn-block btn-primary my-3 py-3">Kiểm tra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold  border-white px-3 mr-1">BD</span>Sports</h1>
                </a>
                <p>Sản phẩm luôn đảm bảo chất lượng và đặt uy tín lên hàng đầu.</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>567 Lê Duẩn, BMT, DakLak</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>Support_bdSports.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>0793 553 033</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">VỀ CHÚNG TÔI</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Trang chủ</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Giới thiệu</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Tin Tức</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Khuyến mãi</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Hệ Thống Cửa Hàng</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">THÔNG TIN HỖ TRỢ</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.html"><i class="fa fa-angle-right mr-2"></i>Chính sách giao hàng</a>
                            <a class="text-dark mb-2" href="shop.html"><i class="fa fa-angle-right mr-2"></i>Chính sách bảo hành</a>
                            <a class="text-dark mb-2" href="detail.html"><i class="fa fa-angle-right mr-2"></i>Chính sách đổi trả sản phẩm</a>
                            <a class="text-dark mb-2" href="cart.html"><i class="fa fa-angle-right mr-2"></i>Chính sách bảo mật</a>
                            <a class="text-dark mb-2" href="checkout.html"><i class="fa fa-angle-right mr-2"></i>Hợp tác nhà cung cấp</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Ý KIẾN GÓP Ý</h5>
                        <form action="">
                            <div class="form-group">
                                <input type="text" class="form-control border-0 py-4" placeholder="Tên cua bạn ..." required="required" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control border-0 py-4" placeholder="Email của bạn ..."
                                    required="required" />
                            </div>
                            <div>
                                <button class="btn btn-primary btn-block border-0 py-3" style="font-weight: bold;" type="submit">XÁC NHẬN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">BD Sports </a> Được thiết kế bởi Quốc Duy và Đăng Bách
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>