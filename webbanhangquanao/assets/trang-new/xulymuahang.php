<?php
require_once('../../lb/connect.php');
$tensanpham = isset($_REQUEST['tensp']) ? $_REQUEST['tensp'] : "";
$soluong = isset($_REQUEST['soluong']) ? $_REQUEST['soluong'] : "";
$tennguoimua = isset($_REQUEST['tennguoimua']) ? $_REQUEST['tennguoimua'] : "";
$sodienthoai = isset($_REQUEST['sodienthoai']) ? $_REQUEST['sodienthoai'] : "";
$diachi = isset($_REQUEST['diachi']) ? $_REQUEST['diachi'] : "";

$data = array();
$data['Tensanpham'] = $tensanpham;
$data['Soluong'] = $soluong;
$data['Tennguoimua'] = $tennguoimua;
$data['Sodt'] = $sodienthoai;
$data['Diachi'] = $diachi;

$tbl = 'donhang';
$sql = data_to_sql_insert($tbl,$data);
$ret = exec_update($sql);

$sql1 = "SELECT * FROM sanphamnam ORDER BY Idsanphamnam DESC limit 4";
$data1 = select_list($sql1);
//print_r($data1);exit();
?>
<?php
if (isset($_GET['Id'])) { //nhan id de tu tao trang theo db
    require_once('../../lb/connect.php');
    $ID = $_GET['Id'];
    $sqll = "SELECT * FROM sanphamnam where Idsanphamnam = '$ID'";
    $data = select_one($sqll);
    //print_r($data);exit();
    //$result = mysqli_query($link, $sqll);
    //$row = mysqli_fetch_array($result);
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $tensanpham?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=dee111124c6ff0d26bfa90b1e5d278ef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=a87a985d6fa0c6b2264ed3b6e4fc35bb">
    <link rel="stylesheet" href="assets/css/css.css">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 90px;">
        <div class="container"><a class="navbar-brand logo" href="#" style="font-size: 20px;"><img
                    style="width: 50px;height: 30px;"
                    src="assets/img/admin-ajax-1.png?h=d4f6b23781af20d7538512652bd61348"></a><button
                data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle
                    navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="background-color: #ffffff;">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../../index.php"
                            style="font-size: 11px;color: rgb(0,0,0);">TRANG CHỦ</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="new.php"
                            style="color: rgb(0,0,0);font-size: 11px;">NEW</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="sale.php"
                            style="color: rgb(0,0,0);font-size: 11px;">SALE</a></li>
                    <li class="nav-item" role="presentation">
                        <style>
                            .dropdown-toggle::after {
                                content: none;
                            }

                            a {
                                color: black;
                            }

                            a:hover {
                                text-decoration: none;
                                color: #ff8c00;
                            }

                            .carousel-indicators li {
                                width: 15px;
                                height: 15px;
                                border-radius: 50%;
                            }
                        </style>
                        </style>
                        <div class="nav-item dropdown" id="1-columna"
                            style="height: 35px;padding: 8px;font-size: 12.8px;">
                            <a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"
                                href="thoitrangnam.php" style="font-size: 11px;color: rgb(0,0,0);">
                                <strong>THỜI TRANG NAM</strong>
                            </a>
                            <div role="menu" class="dropdown-menu"
                                style="background-color: rgb(255,255,255); width: 780px;">
                                <div class="row">
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" role="presentation"
                                                href="thoitrangnam/thoitrangnamao.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Áo</a>
                                            </br>
                                            <li><a class="dropdown-item" role="presentation"
                                                    href="thoitrangnam/thoitrangnamao.php">Áo Sơ Mi</a></li>
                                            <li><a class="dropdown-item" role="presentation"
                                                    href="thoitrangnam/thoitrangnamao.php">Áo Phông</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamao.php">Áo
                                                    Vest</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamao.php">Áo Polo
                                                    Kiện</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamao.php">Áo
                                                    Len,Nỉ</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamao.php">Áo
                                                    Hoodie</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamao.php">Áo
                                                    Khoác</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Quần</a>
                                            </br>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần
                                                    Âu</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần
                                                    Jeans</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần
                                                    Kaki</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần
                                                    Short</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần
                                                    Jogger</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần
                                                    Nỉ</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="thoitrangnam.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Phụ
                                                Kiện</a>
                                            </br>
                                            <li><a class="dropdown-item" href="thoitrangnam.php">Balo Túi Đeo</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam.php">Chéo</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam.php">Kính</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam.php">Mũ</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam.php">Dây Lưng</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam.php">Ví Da</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="thoitrangnam.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Giày
                                                Dép</a>
                                            </br>
                                            <li><a class="dropdown-item" href="thoitrangnam.php">Giày</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam.php">Dép</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-item dropdown" id="2-columnas"
                            style="font-size: 12.8px;height: 35px;padding: 8px;color: rgb(0,0,0);"><a
                                class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"
                                href="thoitrangkids.php" style="font-size: 11px;color: rgb(12,13,13);"><strong>THỜI
                                    TRANG KIDS</strong></a>
                            <div class="dropdown-menu multi-column columns-2" role="menu"
                                style="background-color: rgb(255,255,255);">
                                <style>
                                    .navbar-nav .dropdown-menu {
                                        width: 630px;
                                    }
                                </style>
                                <div class="row">
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" role="presentation"
                                                href="thoitrangkids/thoitrangkids-nam.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Bé
                                                Trai</a>
                                            </br>
                                            <li><a class="dropdown-item" role="presentation"
                                                    href="thoitrangkids/thoitrangkids-nam.php">Áo</a></li>
                                            <li><a class="dropdown-item" role="presentation"
                                                    href="thoitrangkids/thoitrangkids-nam.php">Quần</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nam.php">Bộ
                                                    Đồ</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nam.php">Phụ
                                                    Kiện</a></li>
                                            <li><a class="dropdown-item"
                                                    href="thoitrangkids/thoitrangkids-nam.php">Giày Dép</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Bé
                                                Gái</a>
                                            </br>
                                            <li><a class="dropdown-item"
                                                    href="thoitrangkids/thoitrangkids-nu.php">Áo</a></li>
                                            <li><a class="dropdown-item"
                                                    href="thoitrangkids/thoitrangkids-nu.php">Quần</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php">Bộ
                                                    Đồ</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php">Chân
                                                    Váy</a></li>
                                            <li><a class="dropdown-item"
                                                    href="thoitrangkids/thoitrangkids-nu.php">Váy</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php">Phụ
                                                    Kiện</a></li>
                                            <li><a class="dropdown-item"
                                                    href="thoitrangkids/thoitrangkids-nu.php">Giày, Dép</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="thoitrangkids.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Đồ
                                                chơi</a>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul><input type="url"><button class="btn btn-primary border rounded-0" type="button"
                    style="height: 30px;font-size: 13px;opacity: 1;background-color: rgb(255,255,255);padding: 5px;color: rgb(0,0,0);filter: brightness(100%) contrast(100%);">Tim</button>
            </div>
        </div>
    </nav>
    <main class="page catalog-page">
        <section class="clean-block clean-catalog dark">
            <div class="container">
                <div class="block-heading" style="color: rgb(0,0,0);">
                    <h2 class="text-info" style="font-size: 30px;color: rgb(0,0,0) !important;">
                        <strong><?php echo $data['Tensanpham']?></strong>
                    </h2>
                    <a href="">Áo</a>
                    <a href="" style="margin-left: 3px ;">Giày Dép</a>
                    <a href="" style="margin-left: 3px ;">Phụ Kiện</a>
                    <a href="" style="margin-left: 3px ;">Quần</a>
                </div>
                <div class="content">
                    <div class="row">
                         <div class='col'>
                           <p>BẠN ĐÃ ĐẶT HÀNH THÀNH CÔNG !!! CHÚNG TÔI SẼ LIÊN HỆ CHO BẠN SỚM NHẤT !!!</p>
                         </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-light navbar-expand-md">
                                <div class="container-fluid">
                                    <div class="collapse navbar-collapse order-2" id="navcol-1" style="border: 2px;">
                                    </div>
                                    <ul
                                        class="nav navbar-nav text-nowrap d-flex flex-row order-1 order-md-2 mx-md-auto">
                                        <li role="presentation" class="nav-item"><a class="navbar-brand" href="#">SẢN
                                                PHẨM LIÊN QUAN</a></li><button data-target="#navcol-1"
                                            data-toggle="collapse" class="navbar-toggler"><span class="sr-only">Toggle
                                                navigation</span><span class="navbar-toggler-icon"></span></button>
                                    </ul>
                                    <div class="order-3 ml-auto order-md-3 navbar-collapse collapse nav-content"
                                        style="border-top-width: 2px;border-top-style: solid;">
                                        <ul class="nav navbar-nav ml-auto">
                                            <li role="presentation" class="nav-item"></li>
                                            <li role="presentation" class="nav-item"></li>
                                            <li role="presentation" class="nav-item"></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            </br>
                            <div class="row" style="margin-right: 0px; margin-left: 0px;">
                                <div class="tabContainer">
                                    <div class="row articles"
                                        style="margin-bottom: 4px; margin-right: 0px; margin-left: 0px;">
                                        <?php foreach ($data1 as $sanphamlienqua) {
                                            echo '<div class="col-sm-3 col-md-3 item" style="margin-bottom: 4px;">
                                            <div class="frame show" style="width: 100%;height: 360px;">
                                                <a style="width : 100% ; height : auto; " class="action" href="thoitrangnam.php">
                                                    <img class="anh1" style="width: 100%;height: auto;"
                                                        src="'.$sanphamlienqua['Img1'].'" />
                                                    <img class="anh2" style="width: 100%;height: auto;"
                                                        src="'.$sanphamlienqua['Img2'].'" />
                                                </a>
                                                <div class="price-box">
                                                    <span class="special-price">
                                                        <span style="color: red;"
                                                            class="woocommerce-Price-amount amount">'.$sanphamlienqua['Giasanphamnam'].'<span
                                                                class="woocommerce-Price-currencySymbol">₫</span></span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>';
                                        }?>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            </div>
        </section>
    </main>
    <!-- Start: Corporate Footer Clean -->
    <footer class="page-footer" style="background-color: rgb(0,0,0);height: 350px;">
        <div class="container" style="background-color: #000000;">
            <div class="row">
                <div class="col-6 col-md-3">
                    <h4 style="font-size: 13px;font-family: Lora, serif;color: #ff8c00;">HỆ THỐNG CỦA HÀNG</h4>
                    <ul class="footer-links" style="color: rgb(212,217,222);">
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">242 Thái Hà - HN</a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">20 Dương Quảng Hàm - HN</a>
                        </li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">63 Đại Cồ Việt - HN</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 col-xl-4">
                    <h4 style="font-size: 13px;color: #ff8c00;">CHÍNH SÁCH VÀ QUY ĐỊNH CHUNG</h4>
                    <ul class="footer-links">
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Hướng dẫn mua hàng</a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Hình thức thanh toán</a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Quy định bảo mật thông tin</a>
                        </li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Chính sách và quy trình khiếu
                                nại</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-lg-6 col-xl-5" style="background-color: #000000;">
                    <h4 style="color: #ff8c00;font-size: 13px;">ĐỊA CHỈ</h4>
                    <ul class="footer-links">
                        <li><a href="#"></a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">CÔNG TY CỔ PHẦN THỜI TRANG
                                360</a></li>
                    </ul>
                    <ul class="footer-links">
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">VPGD: 37 Trung Kính - Trung Hòa
                                - Cầu Giấy - Hà Nội</a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Facebook thời trang nam :
                                360Boutique</a></li>
                        <li><a href="#" style="color: rgb(188,196,203);font-size: 14px;">Facebook thời Kids :
                                360Kids</a></li>
                    </ul>
                </div>
            </div>
            <div class="row" style="background-color: #000000;">
                <div class="col">
                    <p><br>Copyright © 2017&nbsp;<a href="http://www.360boutique.vn/">360boutique.</a> All Rights
                        Reserved<br><br></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- End: Corporate Footer Clean -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
    <script src="assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="assets/js/myScript.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myDIV")
            if (x.style.display === 'none') {
                x.style.display = 'block';
            } else {
                x.style.display = 'none';
            }
        }
    </script>
    <script>
        function setupTabs() {
            document.querySelectorAll(".tabs__button").forEach(button => {
                button.addEventListener("click", () => {
                    const sideBar = button.parentElement;
                    const tabsContainer = sideBar.parentElement;
                    const tabNumber = button.dataset.forTab;
                    const tabToActivate = tabsContainer.querySelector(
                        `.tabs__content[data-tab="${tabNumber}"]`);

                    sideBar.querySelectorAll(".tabs__button").forEach(button => {
                        button.classList.remove("tabs__button--active");
                    });

                    tabsContainer.querySelectorAll(".tabs__content").forEach(tab => {
                        tab.classList.remove("tabs__content--active");
                    });

                    button.classList.add("tabs__button--active");
                    tabToActivate.classList.add("tabs__content--active");
                });
            });
        }

        document.addEventListener("DOMContentLoaded", () => {
            setupTabs();
        });
    </script>
    <script>
        $(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 1800000,
                values: [0, 1800000],
                slide: function (event, ui) {
                    $("#amount").val(ui.values[0] + " ₫ - " + ui.values[1] + " ₫");
                }
            });
            $("#amount").val($("#slider-range").slider("values", 0) +
                " ₫ - " + $("#slider-range").slider("values", 1) + " ₫");
        });
    </script>
</body>

</html>