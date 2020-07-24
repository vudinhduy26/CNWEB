<?php
if (isset($_GET['Mausac'])) { //kiem tra xem co ton tai gia tri cua muasac
    require_once('../../lb/connect.php');
    $mausac = $_GET['Mausac'];
    $sql = "SELECT * FROM sanphamnam , mausacnam Where mausacnam.Mausacsanpham = '$mausac'
    and sanphamnam.Idsanphamnam = mausacnam.Idsanphamnam";
    $data = select_list($sql);
    //print_r($data);exit();
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Sản phẩm nam <?php echo $data[0]['Mausacsanpham'];?></title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=dee111124c6ff0d26bfa90b1e5d278ef">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=a87a985d6fa0c6b2264ed3b6e4fc35bb">
    <link rel="stylesheet" href="assets/css/css.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 100px;">
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
                                            <a class="dropdown-item" role="presentation" href="thoitrangnam/thoitrangnamao.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Áo</a>
                                            </br>
                                            <li><a class="dropdown-item" role="presentation" href="thoitrangnam/thoitrangnamao.php">Áo Sơ Mi</a></li>
                                            <li><a class="dropdown-item" role="presentation" href="thoitrangnam/thoitrangnamao.php">Áo Phông</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamao.php">Áo Vest</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamao.php">Áo Polo Kiện</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamao.php">Áo Len,Nỉ</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamao.php">Áo Hoodie</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamao.php">Áo Khoác</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Quần</a>
                                            </br>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần Âu</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần Jeans</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần Kaki</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần Short</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần Jogger</a></li>
                                            <li><a class="dropdown-item" href="thoitrangnam/thoitrangnamquan.php">Quần Nỉ</a></li>
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
                                            <a class="dropdown-item" role="presentation" href="thoitrangkids/thoitrangkids-nam.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Bé
                                                Trai</a>
                                            </br>
                                            <li><a class="dropdown-item" role="presentation" href="thoitrangkids/thoitrangkids-nam.php">Áo</a></li>
                                            <li><a class="dropdown-item" role="presentation" href="thoitrangkids/thoitrangkids-nam.php">Quần</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nam.php">Bộ Đồ</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nam.php">Phụ Kiện</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nam.php">Giày Dép</a></li>
                                        </ul>
                                    </div>
                                    <div class="col">
                                        <ul class="multi-column-dropdown">
                                            <a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php"
                                                style="border-bottom-width: 1.5px;border-bottom-style: solid;">Bé
                                                Gái</a>
                                            </br>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php">Áo</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php">Quần</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php">Bộ Đồ</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php">Chân Váy</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php">Váy</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php">Phụ Kiện</a></li>
                                            <li><a class="dropdown-item" href="thoitrangkids/thoitrangkids-nu.php">Giày, Dép</a></li>
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
                    <h2 class="text-info" style="font-size: 30px;color: rgb(0,0,0) !important;"><strong>Sản Phẩm Màu <?php echo $data[0]['Mausacsanpham']?></strong>
                    </h2>
                </div>
                <div class="content">
                    <div class="row">
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

                            .ui-widget.ui-widget-content {
                                border: 1px solid #c5c5c5;
                            }

                            .ui-corner-all,
                            .ui-corner-bottom,
                            .ui-corner-right,
                            .ui-corner-br {
                                border-bottom-right-radius: 3px;
                            }

                            .ui-corner-all,
                            .ui-corner-bottom,
                            .ui-corner-left,
                            .ui-corner-bl {
                                border-bottom-left-radius: 3px;
                            }

                            .ui-corner-all,
                            .ui-corner-top,
                            .ui-corner-right,
                            .ui-corner-tr {
                                border-top-right-radius: 3px;
                            }

                            .ui-corner-all,
                            .ui-corner-top,
                            .ui-corner-left,
                            .ui-corner-tl {
                                border-top-left-radius: 3px;
                            }

                            .ui-widget-content {
                                border: 1px solid #dddddd;
                                background: #ffffff;
                                color: #0065ff;
                            }

                            .ui-slider-horizontal {
                                height: .8em;
                            }

                            .ui-slider {
                                position: relative;
                                text-align: left;
                            }

                            .ui-slider-horizontal .ui-slider-range {
                                top: 0;
                                height: 100%;
                            }

                            .ui-slider .ui-slider-range {
                                position: absolute;
                                z-index: 1;
                                font-size: .7em;
                                display: block;
                                border: 0;
                                background-position: 0 0;
                                background-color: #8d8a86;
                            }

                            .ui-widget-header {
                                border: 1px solid #dddddd;
                                background: #e9e9e9;
                                background-position-x: 0%;
                                background-position-y: 0%;
                                color: #333333;
                                font-weight: bold;
                            }

                            .ui-state-default,
                            .ui-widget-content .ui-state-default,
                            .ui-widget-header .ui-state-default,
                            .ui-button,
                            html .ui-button.ui-state-disabled:hover,
                            html .ui-button.ui-state-disabled:active {
                                border: 1px solid #c5c5c5;
                                background: #f6f6f6;
                                font-weight: normal;
                                color: #454545;
                            }

                            .ui-slider-horizontal .ui-slider-handle {
                                top: -.3em;
                                margin-left: -.6em;
                            }

                            .ui-slider .ui-slider-handle {
                                position: absolute;
                                z-index: 2;
                                width: 1.2em;
                                height: 1.2em;
                                cursor: default;
                                -ms-touch-action: none;
                                touch-action: none;
                                border-radius: 50%;
                                background-color: #ff8c00;
                            }

                            .loc:hover {
                                border-color: #ff8c00;
                                color: #ff8c00;
                            }

                            .show img {
                                max-width: 100%;
                                transition: all 1s;
                            }

                            .show .anh1 {
                                position: absolute;
                                opacity: 1;
                            }

                            .show:hover .anh1 {
                                opacity: 0;
                            }

                            .price-box {
                                position: absolute;
                                width: 110px;
                                height: 110px;
                                margin: auto;
                                top: 0;
                                bottom: 0;
                                left: 0;
                                right: 0;
                                z-index: 6;
                                color: #fff;
                                font-family: Montserrat, Arial, Helvetica, sans-serif;
                                font-weight: 700;
                                transition: all 0.4s ease;
                                opacity: 0;
                            }

                            .price-box:hover {
                                opacity: 1;
                            }

                            .price-box .special-price {
                                display: block;
                                font-size: 24px;
                                margin-top: 40px;
                            }

                            .frame {
                                border: none;
                            }

                            @media (max-width: 960px) {
                                img.anh1 {
                                    width: 83% !important;
                                    height: auto;
                                }
                            }

                            @media (max-width: 1010px) {
                                img.anh1 {
                                    width: 87% !important;
                                    height: auto;
                                }
                            }

                            @media (min-width: 1011px) {
                                img.anh1 {
                                    width: 90% !important;
                                    height: auto;
                                }
                            }

                            @media (max-width: 760px) {
                                img.anh1 {
                                    width: 89% !important;
                                    height: auto;
                                }
                            }
                        </style>
                        <div class="col-md-3">
                            <div class="card" style="height: 30px;">
                                <h1 class="text-left mb-0"
                                    style="height: 30px;font-size: 14px;background-color: #000000;color: rgb(255,255,255);padding: 5px;">
                                    <strong>TÙY CHỌN</strong></h1>
                            </div><br />
                            <div class="card">
                                <div class="card-body border rounded-0">
                                    <p class="card-text" style="font-size: 14px;"><strong>Danh Mục</strong></p>
                                    <ul>
                                        <a href="#">
                                            <li>Lookbook</li>
                                        </a>
                                        <a href="new.php">
                                            <li>New</li>
                                        </a>
                                        <a href="sale.php">
                                            <li>Sale</li>
                                        </a>
                                        <a href="#">
                                            <li>Sản phẩm</li>
                                        </a>
                                    </ul>
                                </div>
                                <div class="card-body border rounded-0">
                                    <p class="card-text" style="font-size: 14px;"><strong>LỌC GIÁ</strong></p>

                                    <div id="slider-range"
                                        class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="left: 0%; width: 99.8%;"></div>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 0%;"></span>
                                        <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 99.8%;"></span>
                                    </div>

                                    <p>
                                        <label for="amount">Giá:</label>
                                        <input type="text" id="amount" readonly
                                            style="border:0; color:#000000; font-weight:bold; font-size: 13px;">
                                    </p>
                                    <input type="button" class="loc" value="Lọc">
                                </div>
                                <div class="card-body border rounded-0">
                                    <p class="card-text" style="font-size: 14px;"><strong>MÀU SẮC</strong></p>
                                    <ul>
                                        <a href="mausac.php?Mausac=den">
                                            <li>Đen</li>
                                        </a>
                                        <a href="mausac.php?Mausac=do">
                                            <li>Đỏ</li>
                                        </a>
                                        <a href="mausac.php?Mausac=trang">
                                            <li>Trắng</li>
                                        </a>
                                        <a href="mausac.php?Mausac=bac">
                                            <li>Bạc</li>
                                        </a>
                                        <a href="mausac.php?Mausac=cam">
                                            <li>Cam</li>
                                        </a>
                                        <a href="mausac.php?Mausac=dodo">
                                            <li>Đỏ Đô</li>
                                        </a>
                                        <a href="mausac.php?Mausac=hong">
                                            <li>Hồng</li>
                                        </a>
                                        <a href="mausac.php?Mausac=nau">
                                            <li>Nâu</li>
                                        </a>
                                        <a href="mausac.php?Mausac=naudat">
                                            <li>Nâu Đất</li>
                                        </a>
                                        <a href="mausac.php?Mausac=tim">
                                            <li>Tím</li>
                                        </a>
                                        <a href="mausac.php?Mausac=vang">
                                            <li>Vàng</li>
                                        </a>
                                        <a href="mausac.php?Mausac=xam">
                                            <li>Xám</li>
                                        </a>
                                        <a href="">
                                            <li>Xám Nhạt</li>
                                        </a>
                                        <a href="">
                                            <li>Xanh Dương</li>
                                        </a>
                                        <a href="">
                                            <li>Xanh Da Trời</li>
                                        </a>
                                        <a href="">
                                            <li>Xanhh Đen</li>
                                        </a>
                                    </ul>
                                </div>
                                <div class="card-body border rounded-0">
                                    <p class="card-text" style="font-size: 14px;"><strong>KÍCH THƯỚC</strong></p>
                                    <ul>
                                        <a href="">
                                            <li>34</li>
                                        </a>
                                        <a href="">
                                            <li>XXXL</li>
                                        </a>
                                        <a href="">
                                            <li>XXXXL</li>
                                        </a>
                                        <a href="">
                                            <li>5</li>
                                        </a>
                                        <a href="">
                                            <li>7</li>
                                        </a>
                                        <a href="">
                                            <li>9</li>
                                        </a>
                                        <a href="">
                                            <li>11</li>
                                        </a>
                                        <a href="">
                                            <li>13</li>
                                        </a>
                                        <a href="">
                                            <li>6</li>
                                        </a>
                                        <a href="">
                                            <li>8</li>
                                        </a>
                                        <a href="">
                                            <li>10</li>
                                        </a>
                                        <a href="">
                                            <li>12</li>
                                        </a>
                                        <a href="">
                                            <li>70</li>
                                        </a>
                                        <a href="">
                                            <li>80</li>
                                        </a>
                                        <a href="">
                                            <li>90</li>
                                        </a>
                                        <a href="">
                                            <li>100</li>
                                        </a>
                                    </ul>
                                </div>
                            </div>
 
                        </div>
                        <div class="col-md-9">
                            <div class="tabContainer">
                                <div class="row">
                                    <div class="buttonContainer" style="margin-bottom: 10px;">
                                        <button onclick="showPanel(0,'#eee')">=</button>
                                        <button onclick="showPanel(1,'#eee')">-</button>
                                    </div>
                                </div>
                                <div class="tabPanel" style="background-color: white;">
                                    <div class="row articles" style="margin-bottom: 4px;">
                                      <?php
                                      foreach ($data as $mausacsanpham) {
                                          echo '<div class="col-sm-6 col-md-4 item" style="margin-bottom: 4px;">
                                          <div class="frame show" style="width: 100%;height: 360px;">
                                              <a style="width : 100% ; height : auto; " class="action" href="muahang.php?Id='.$mausacsanpham['Idsanphamnam'].'">
                                                  <img class="anh1" style="width: 15.8em;height: auto;"
                                                      src="'.$mausacsanpham['Img1'].'" />
                                                  <img class="anh2" style="width: 100%;height: auto;"
                                                      src="'.$mausacsanpham['Img2'].'" />
                                              </a>
                                              <div class="price-box">
                                                  <span class="special-price">
                                                      <span style="color: red;"
                                                          class="woocommerce-Price-amount amount">'.$mausacsanpham['Giasanphamnam'].'<span
                                                              class="woocommerce-Price-currencySymbol">₫</span></span>
                                                  </span>
                                              </div>
                                              <a href="muahang.php?id" style=""><p style="font-size : 12px">'.$mausacsanpham["Tensanphamnam"].'</p></a>
                                          </div>
                                      </div>';
                                      }
                                      ?>
                                        


                                    </div>

                                </div>
                                <div class="tabPanel" style="background-color: white;">
                                <?php
                                foreach ($data as $mausacsanphamtab) {
                                    echo '<div class="row articles" style="margin-bottom: 4px;">
                                    <div class="col-sm-6 col-md-4 item" style="margin-bottom: 4px;">
                                        <div class="frame show" style="width: 100%;height: 360px;">
                                            <a style="width : 100% ; height : auto; " class="action" href="muahang.php?Id='.$mausacsanphamtab['Idsanphamnam'].'">
                                                <img class="anh1" style="width: 15.8em;height: auto;"
                                                    src="'.$mausacsanphamtab['Img1'].'" />
                                                <img class="anh2" style="width: 100%;height: auto;"
                                                    src="'.$mausacsanphamtab['Img2'].'" />
                                            </a>
                                            <div class="price-box">
                                                <span class="special-price">
                                                    <span style="color: red;"
                                                        class="woocommerce-Price-amount amount">'.$mausacsanphamtab['Giasanphamnam'].'<span
                                                            class="woocommerce-Price-currencySymbol">₫</span></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="frame show" style="width: 100%;height: 360px;">
                                            <a style="width : 100% ; height : auto; " class="action" href="muahang.php?Id='.$mausacsanphamtab['Idsanphamnam'].'">
                                               '.$mausacsanphamtab['Tensanphamnam'].'
                                            </a> 
                                        </div>
                                    </div>
                                </div>';
                                }
                                ?>

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