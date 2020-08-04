<!DOCTYPE html>
<html>
<?php
 include('lb/connect.php');

 $id = isset($_REQUEST["id"]) ? $_REQUEST["id"] : 1;
 $id2 = isset($_REQUEST["id2"]) ? $_REQUEST["id2"] :2;
 //echo "id=[$id]";exit();
 $sql = "select * from anh where id={$id}";
 $sql2 = "select * from anh where id={$id2}";
 //echo "$sql2";exit();
 $data = select_one($sql);
 $data2 = select_one($sql2);
 //print_r($data2);exit();
 $sqltinmoi = "SELECT * from tinmoi where id > 0";
 $tinmoi = select_list($sqltinmoi);
 //print_r($tinmoi2);exit();
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>360-Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=7f20f7c0ef18781a8e0dcaae49e73934">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=ebd6f95904009a297a139802d395213f">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
    .dropdown-toggle::after{
        content: none;}
    a{
        color: black;
    }
    a:hover{
        text-decoration : none;
        color: #ff8c00 ;
    }
    .carousel-indicators li{
        width: 15px;
        height: 15px;
        border-radius: 50%;
    }
</style>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar" style="height: 90px;">
        <div class="container"><a class="navbar-brand logo" href="#" style="font-size: 20px;"><img style="width: 50px;height: 30px;" src="assets/img/admin-ajax-1.png?h=f280691f98342c30ee282393775d656a"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1" style="background-color: #ffffff;">
                <ul class="nav navbar-nav mx-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php" style="font-size: 11px;">TRANG CHỦ</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="assets/trang-new/new.php" style="color: rgb(0,0,0);font-size: 11px;">NEW</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="assets/trang-new/sale.php" style="color: rgb(0,0,0);font-size: 11px;">SALE</a></li>
                    <li class="nav-item" role="presentation">
<div class="nav-item dropdown" id="1-columna" style="height: 35px;padding: 8px;font-size: 12.8px;">
    <a data-toggle="dropdown" aria-expanded="false" class="dropdown-toggle" href="assets/trang-new/thoitrangnam.php" style="font-size: 11px;color: rgb(0,0,0);">
        <strong>THỜI TRANG NAM</strong>
    </a>
    <div role="menu" class="dropdown-menu" style="background-color: rgb(255,255,255); width: 780px;">
        <div class="row">
            <div class="col">
                <ul class="multi-column-dropdown">
                    <a class="dropdown-item" role="presentation" href="assets/trang-new/thoitrangnam/thoitrangnamao.php" style="border-bottom-width: 1.5px;border-bottom-style: solid;">Áo</a>
                </br>
                    <li><a class="dropdown-item" role="presentation" href="assets/trang-new/thoitrangnam/thoitrangnamao.php">Áo Sơ Mi</a></li>
                    <li><a class="dropdown-item" role="presentation" href="assets/trang-new/thoitrangnam/thoitrangnamao.php">Áo Phông</a></li>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamao.php">Áo Vest</a></li>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamao.php">Áo Polo Kiện</a></li>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamao.php">Áo Len,Nỉ</a></li>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamao.php">Áo Hoodie</a></li>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamao.php">Áo Khoác</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="multi-column-dropdown">
                    <a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamquan.php" style="border-bottom-width: 1.5px;border-bottom-style: solid;">Quần</a>
                </br>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamquan.php">Quần Âu</a></li>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamquan.php">Quần Jeans</a></li>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamquan.php">Quần Kaki</a></li>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamquan.php">Quần Short</a></li>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamquan.php">Quần Jogger</a></li>
                    <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam/thoitrangnamquan.php">Quần Nỉ</a></li>
                </ul>
            </div>
            <div class="col">
                <ul class="multi-column-dropdown">
                    <a class="dropdown-item" href="#" style="border-bottom-width: 1.5px;border-bottom-style: solid;">Phụ Kiện</a>
                </br>
                     <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam.php">Balo Túi Đeo</a></li>
                     <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam.php">Chéo</a></li>
                     <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam.php">Kính</a></li>
                     <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam.php">Mũ</a></li>
                     <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam.php">Dây Lưng</a></li>
                     <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam.php">Ví Da</a></li>               
                </ul>
            </div>
            <div class="col">
                <ul class="multi-column-dropdown">
                    <a class="dropdown-item" href="assets/trang-new/thoitrangnam.php" style="border-bottom-width: 1.5px;border-bottom-style: solid;">Giày Dép</a>
                </br>
                     <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam.php">Giày</a></li>
                     <li><a class="dropdown-item" href="assets/trang-new/thoitrangnam.php">Dép</a></li>              
                </ul>
            </div>
        </div>
    </div>
</div></li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-item dropdown" id="2-columnas" style="font-size: 12.8px;height: 35px;padding: 8px;color: rgb(0,0,0);"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="assets/trang-new/thoitrangkids.php" style="font-size: 11px;color: rgb(12,13,13);"><strong>THỜI TRANG KIDS</strong></a>
                            <div class="dropdown-menu multi-column columns-2" role="menu" style="background-color: rgb(255,255,255);">					<style>
						.navbar-nav .dropdown-menu{
							width: 630px;
						}
					</style>
					<div class="row">
			            <div class="col">
				            <ul class="multi-column-dropdown">
								<a class="dropdown-item" role="presentation" href="assets/trang-new/thoitrangkids/thoitrangkids-nam.php" style="border-bottom-width: 1.5px;border-bottom-style: solid;">Bé Trai</a>
							</br>
					            <li><a class="dropdown-item" role="presentation" href="assets/trang-new/thoitrangkids/thoitrangkids-nam.php">Áo</a></li>
					            <li><a class="dropdown-item" role="presentation" href="assets/trang-new/thoitrangkids/thoitrangkids-nam.php">Quần</a></li>
					            <li><a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nam.php">Bộ Đồ</a></li>
								<li><a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nam.php">Phụ Kiện</a></li>
								<li><a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nam.php">Giày Dép</a></li>
				            </ul>
			            </div>
			            <div class="col">
				            <ul class="multi-column-dropdown">
					            <a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nu.php" style="border-bottom-width: 1.5px;border-bottom-style: solid;">Bé Gái</a>
							</br>
								<li><a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nu.php">Áo</a></li>
					            <li><a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nu.php">Quần</a></li>
					            <li><a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nu.php">Bộ Đồ</a></li>
								<li><a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nu.php">Chân Váy</a></li>
								<li><a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nu.php">Váy</a></li>
								<li><a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nu.php">Phụ Kiện</a></li>
								<li><a class="dropdown-item" href="assets/trang-new/thoitrangkids/thoitrangkids-nu.php">Giày, Dép</a></li>
				            </ul>
						</div>
						<div class="col">
				            <ul class="multi-column-dropdown">
					            <a class="dropdown-item" href="assets/trang-new/thoitrangkids.php" style="border-bottom-width: 1.5px;border-bottom-style: solid;">Đồ chơi</a>
				            </ul>
			            </div>
		            </div></div>
                        </div>
                    </li>
                </ul><input type="url"><button class="btn btn-primary border rounded-0" type="button" style="height: 30px;font-size: 13px;opacity: 1;background-color: rgb(255,255,255);padding: 5px;color: rgb(0,0,0);filter: brightness(100%) contrast(100%);">Tim</button></div>
        </div>
    </nav>
    <main class="page landing-page">
        <section class="clean-block slider dark" style="padding-bottom: 50px;">
            <div class="container" style="padding-right: 0px;padding-left: 0px; max-width : 98%">
                <div class="carousel slide" data-ride="carousel" id="carousel-1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active"><img class="w-100 d-block" src="<?php echo $data['Img']?>" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="<?php echo $data2['Img']?>" alt="Slide Image"></div>
                        <div class="carousel-item"><img class="w-100 d-block" src="assets/img/bia2.jpg?h=df718b1b3bffd314fe3fe308c86df23e" alt="Slide Image"></div>
                    </div>
                    <div>
                        <!-- Start: Previous <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a>-->
                        <!-- End: Previous -->
                        <!-- Start: Next <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a>-->
                        <!-- End: Next -->
                    </div>
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-1" data-slide-to="1"></li>
                        <li data-target="#carousel-1" data-slide-to="2"></li>
                    </ol>
                </div>
            </div>
        </section>
        <section class="clean-block clean-info dark">
            <div class="container">
                <!-- Start: Pricing Table Style 01 -->
                <div class="row">
                    <div class="col-sm-4 col-md-4" style="padding-right: 0px;padding-left: 0px;">
                        <!-- Start: ml-overlay-image -->
                        <div class="ml-overlay-container"><img class="img-fluid" src="assets/img/phukien.jpg?h=b47176f9659a09b9f886df9d6ace8270"></div>
                        <!-- End: ml-overlay-image -->
                        <!-- Start: ml-overlay-image -->
                        <div class="ml-overlay-container" style="margin-top: 10px;"><img class="img-fluid" src="assets/img/giay.jpg?h=df0701c4aa5e835110057a48d01d5d28"></div>
                        <!-- End: ml-overlay-image -->
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <!-- Start: ml-overlay-image -->
                        <div class="ml-overlay-container"><img class="img-fluid" src="assets/img/lookbook.jpg?h=ff757247926f5439fdd5bc968b76b012"></div>
                        <!-- End: ml-overlay-image -->
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <!-- Start: ml-overlay-image -->
                        <div class="ml-overlay-container"><img class="img-fluid" src="assets/img/Mix-and-match.jpg?h=5442b0e960c0b1d2436b75f546836869"></div>
                        <!-- End: ml-overlay-image -->
                        <!-- Start: ml-overlay-image -->
                        <div class="ml-overlay-container" style="margin-top: 10px;"><img class="img-fluid" src="assets/img/tuyendung.jpg?h=89de15db055b1efb86cf8305a5c5ba0c"></div>
                        <!-- End: ml-overlay-image -->
                    </div>
                </div>
                <!-- End: Pricing Table Style 01 -->
            </div>
        </section><style>
    .text-center{
        text-align: left !important;
    }
</style>
<section class="clean-block about-us">
    <div class="container">
        <div class="block-heading" style="margin-bottom: 10px;">
            <b><h3 class="text-info" style="font-size: 16px; color: black !important;">TIN MỚI</h3></b>
        </div>
            <div class="block-heading" style="height: 3px;width: auto;padding-top: 1px;background-color: #000000;margin-right: 0px;padding-right: 0px;"></div>
        <div class="row justify-content-center">
            <div class="col-sm-6 col-lg-4">
                <div class="card clean-card text-center">
                    <a href="assets/trang-new/tinmoi/tinmoi1.php?id=<?php echo $tinmoi[0]["id"]?>"><img class="card-img-top w-100 d-block" src="<?php echo $tinmoi[0]["img1"];?>" /></a>
                    <div class="card-body info">
                       <a href="assets/trang-new/tinmoi/tinmoi1.php?id=<?php echo $tinmoi[0]["id"]?>"><h4 class="card-title"><?php echo $tinmoi[0]["tieude"]?></h4></a> 
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card clean-card text-center">
                    <a href="assets/trang-new/tinmoi/tinmoi2.php?id=<?php echo $tinmoi[1]["id"]?>"><img class="card-img-top w-100 d-block" src="<?php echo $tinmoi[1]["img1"];?>" /></a>
                    <div class="card-body info">
                        <a href="assets/trang-new/tinmoi/tinmoi2.php?id=<?php echo $tinmoi[1]["id"]?>"><h4 class="card-title"><?php echo $tinmoi[1]["tieude"] ?></h4></a>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card clean-card text-center">
                    <a href="assets/trang-new/tinmoi/tinmoi3.php?id=<?php echo $tinmoi[2]["id"]?>"><img class="card-img-top w-100 d-block" src="<?php echo $tinmoi[2]["img1"]?>" /></a>
                    <div class="card-body info">
                        <a href="assets/trang-new/tinmoi/tinmoi3.php?id=<?php echo $tinmoi[2]["id"]?>"><h4 class="card-title"><?php echo $tinmoi[2]["tieude"] ?></h4></a>
                        <p class="card-text"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section></main>
    <!-- Start: Corporate Footer Clean -->
    <?php 
    include('footer.php')
    ?>
    <!-- End: Corporate Footer Clean -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/script.min.js?h=037c4117326bceadaedc2681de8afadc"></script>
</body>

</html>