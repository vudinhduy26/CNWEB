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
$sql1 = "SELECT * FROM sanphamnam ORDER BY Idsanphamnam DESC limit 4";
$data1 = select_list($sql1);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $data['Tieude']?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=dee111124c6ff0d26bfa90b1e5d278ef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=a87a985d6fa0c6b2264ed3b6e4fc35bb">
    <link rel="stylesheet" href="assets/css/css.css">
    <link rel="stylesheet" href="assets/css/new.css">

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
                        <strong><?php echo $data['Tieude']?></strong>
                    </h2>
                    <a href="">Áo</a>
                    <a href="" style="margin-left: 3px ;">Giày Dép</a>
                    <a href="" style="margin-left: 3px ;">Phụ Kiện</a>
                    <a href="" style="margin-left: 3px ;">Quần</a>
                </div>
                <div class="content">
                    <div class="row">

                        <div class="col-md-4 col-lg-4 col-xl-3">
                            <a href=""><img style="width : 340px ; hight: 510px" src=<?php echo $data['Img1']?>
                                    alt=""></a>
                        </div>
                        <div class="col-md-3 col-lg-2 col-xl-2">

                        </div>
                        <div class="col">
                            <br>
                            <h4><?php echo $data['Tensanphamnam']?></h4>
                            <br>
                            <p style="color: red;"><?php echo $data['Giasanphamnam'];?>đ</p>
                            <br>
                            <div class="variations" cellspacing="0">
                                <div class="variant">
                                    <div class="label">
                                        <label for="pa_co">Cỡ</label>
                                    </div>
                                    <div class="value">
                                        <div class="variation-selector variation-select-label hidden"><select id="pa_co"
                                                class="wc-default-select" name="attribute_pa_co"
                                                data-attribute_name="attribute_pa_co">
                                                <option value="">Chọn một tùy chọn</option>
                                                <option value="28" class="attached enabled">28</option>
                                                <option value="29" class="attached enabled">29</option>
                                                <option value="30" class="attached enabled">30</option>
                                                <option value="31" class="attached enabled">31</option>
                                                <option value="32" class="attached enabled">32</option>
                                                <option value="33" class="attached enabled">33</option>
                                            </select></div>
                                        <div class="tawcvs-swatches" data-attribute_name="attribute_pa_co"><span
                                                class="swatch swatch-label swatch-28 selected" data-value="28">28<span
                                                    class="swatch__tooltip">28</span></span><span
                                                class="swatch swatch-label swatch-29" data-value="29">29<span
                                                    class="swatch__tooltip">29</span></span><span
                                                class="swatch swatch-label swatch-30" data-value="30">30<span
                                                    class="swatch__tooltip">30</span></span><span
                                                class="swatch swatch-label swatch-31" data-value="31">31<span
                                                    class="swatch__tooltip">31</span></span><span
                                                class="swatch swatch-label swatch-32" data-value="32">32<span
                                                    class="swatch__tooltip">32</span></span><span
                                                class="swatch swatch-label swatch-33" data-value="33">33<span
                                                    class="swatch__tooltip">33</span></span></div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <br>

                            <input type="text" style="width: 40px;">
                            <button onclick="myFunction()">Mua Hàng</button>

                            <div id="myDIV"
                                style="width: 50%;padding: 30px 0;text-align: center;background-color: #fffff;margin-top: 20px;border: 1px solid black; display : none;box-shadow: 1px 1px 3px 3px gray;">
                                <h6>PHIẾU ĐẶT HÀNG</h6>
                                <form style='font-size : 11px' action="xulymuahang.php" method="get">
                                <label for="">Tên SP : <input type="text" value='<?php echo $data['Tensanphamnam']?>' name='tensp' required><br></label>
                                <label for="">Số Lượng : <input type="text" name='soluong' required><br></label>
                                <label for="">Tên Người Mua : <input type="text" name='tennguoimua' required><br></label>
                                <label for="">Số ĐT : <input type="text" name='sodienthoai' required><br></label>
                                <label for="">Địa Chỉ : <input type="text" name='diachi' required><br></label>
                                    <br>
                                    <input type="submit" value="Xác Nhận">
                                </form>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row" style="margin-right: 0px; margin-left: 0px; display: block;">
                        <div class="tabs">
                            <div class="tabs__sidebar">
                                <button class="tabs__button tabs__button--active" data-for-tab="1">Mô Tả</button>
                                <button class="tabs__button" data-for-tab="2">Thông Tin Bổ Sung</button>
                                <button class="tabs__button" data-for-tab="3">Đánh Giá</button>
                            </div>
                            <div class="tabs__content tabs__content--active" data-tab="1">
                                <p>
                                    – Chất liệu: Vải cao cấp
                                </p>
                                <p> – Đặc tính: Mềm mại, co giãn tốt, có độ thấm hút mồ hôi và hút ẩm cao, thoáng mát.
                                </p>
                                <p>– Màu: trắng, đen</p>
                                <p>– Màu: trắng, đen</p>
                                <p>– Size: M – L – XL – XXL</p>
                                <p>+ Hướng dẫn sử dụng:
                                    – Giặt ở nhiệt độ bình thường, với đồ có màu tương tự.
                                    – Không được dùng hóa chất tẩy.
                                    – Hạn chế sử dụng máy sấy, ủi ở nhiệt độ bình thường.
                                    – Sản phẩm đã có mặt ở toàn bộ các cửa hàng trên hệ thống.</p>

                                <h4>HƯỚNG DẪN CHỌN SIZE</h4>

                                <p>Size M: 50-57kg / Cao 1m53 – 1m68</p>
                                <p>Size L: 58-64kg / Cao 1m57 – 1m70</p>
                                <p>Size XL: 65-70kg / Cao 1m66 – 1m76</p>
                                <p>Size XXL: 71-76kg / Cao 1m70 – 1m85.</p>
                                <p>Tùy mỗi người thích body hoặc vừa người thì tăng hoặc giảm 1 size, chỉ số trên là
                                    tương đối mặc thoải mái.</p>
                            </div>
                            <div class="tabs__content" data-tab="2">
                                <h4><?php echo $data['Tieude'];?></h4>
                                <p>
                                    <?php echo $data['Noidung'];?>
                                </p>
                            </div>
                            <div class="tabs__content" data-tab="3">
                                <h2>ĐÁNH GIÁ</h2>
                                <p>
                                    Chưa có đánh giá nào
                                </p>
                                <p>HÃY LÀ NGƯỜI ĐẦU TIÊN ĐÁNH GIÁ SẢN PHẨM “ÁO PHÔNG NAM APHCN040”</p>
                                <p>Chấm điểm</p>
                                <form action="">
                                    <p>Nhận Xét</p>
                                    <textarea name="nhanxet" id="" cols="102" rows="3"></textarea>
                                    <p>Tên</p>
                                    <input type="text" name="ten">
                                    <p>Email</p>
                                    <input type="text" name="email">
                                    <br>
                                    <br>
                                    <input type="submit" value="Gửi Đi">
                                </form>
                            </div>
                        </div>
                    </div>
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
                                        <?php foreach ($data1 as $sanphamlienquan) {
                                            echo '<div class="col-sm-3 col-md-3 item" style="margin-bottom: 4px;">
                                            <div class="frame show" style="width: 100%;height: 360px;">
                                                <a style="width : 100% ; height : auto; " class="action" href="thoitrangnam.php">
                                                    <img class="anh1" style="width: 100%;height: auto;"
                                                        src="'.$sanphamlienquan['Img1'].'" />
                                                    <img class="anh2" style="width: 100%;height: auto;"
                                                        src="'.$sanphamlienquan['Img2'].'" />
                                                </a>
                                                <div class="price-box">
                                                    <span class="special-price">
                                                        <span style="color: red;"
                                                            class="woocommerce-Price-amount amount">'.$sanphamlienquan['Giasanphamnam'].'<span
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