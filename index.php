<!DOCTYPE html>
<html lang="zxx">
    <?php
    require 'connect.php';
    ?>
        <script>
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:2013664,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        </script>     
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="indexstyle.css">
    <title>NTLShop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">
    <!-- icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php include('include/header.php')?>
    <!-- Header Section End -->
    
    <!-- Hero Section Begin -->
    <div id="home">
    <section class="hero">
        <div class="hero__slider owl-carousel">
        <?php
                        $sql = "SELECT * FROM `image` WHERE vitri='slider'";
                                $result = $conn->query($sql);

                                While($row = $result ->fetch_assoc())
                                {
                                    $id = $row['id'];
                                    $vitri = $row['vitri'];
                                    $img = "admin/".$row['img'];
                                    $mota = $row['mota'];
                                    $explode_mota = explode('<$>', $mota);
                                ?> 
            <div class="hero__items set-bg" data-setbg="<?php echo "$img"?>">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-5 col-lg-7 col-md-8">
                            <div class="hero__text">
                                <h6><?php echo "$explode_mota[0]"?></h6>
                                <h2><?php echo "$explode_mota[1]"?></h2>
                                <p><?php echo "$explode_mota[2]"?></p>
                                <a href="shop.php" class="primary-btn">Shop now <span class="arrow_right"></span></a>
                                <div class="hero__social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    </div>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    
    <section class="banner spad">
        <div class="container">
            <div class="row">
                        <?php
                        $sql = "SELECT * FROM `image` WHERE vitri='img'";
                        $result = $conn->query($sql);
                        While($row = $result ->fetch_assoc())
                        {
                        $id = $row['id'];
                        $vitri = $row['vitri'];
                        $img = "admin/".$row['img'];
                        $mota = $row['mota'];
                        $explode_mota = explode('<$>', $mota);
                        ?>
                <div class="<?php switch ($id){
                        case 3: echo "col-lg-7 offset-lg-4";
                        break;
                        case 4: echo "col-lg-5";
                        break;
                        case 5: echo "col-lg-7";
                        break;
                        default;
                        break;}?>">
                    <div class="<?php switch ($id){
                        case 3: echo "banner__item";
                        break;
                        case 4: echo "banner__item banner__item--middle";
                        break;
                        case 5: echo "banner__item banner__item--last";
                        break;
                        default;
                        break;}
                        ?>">
                        <div class="<?php switch ($id){
                        case 3: echo "banner__item__pic";
                        break;
                        case 4: echo "banner__item__pic";
                        break;
                        case 5: echo "banner__item__pic";
                        break;
                        default;
                        break;}
                        ?>">
                            <img src="<?php echo $img ?>" alt="">
                        </div>
                        <div class="banner__item__text">
                            <h2><?php echo "$explode_mota[0]" ?></h2>
                            <?php switch ($id){
                            case 3: echo "<a href='shop-nam.php'>Shop now</a>";
                            break;
                            case 4: echo "<a href='shop-nu.php'>Shop now</a>";
                            break;
                            case 5: echo "<a href='shop.php'>Shop now</a>";
                            break;
                            default;
                            break;}
                            ?>
                            
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->    
    <!-- Product Section Begin -->
    <div id="hot"></div>
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="filter__controls">
                        <li class="active" data-filter="*">Best Sellers</li>
                        <li data-filter=".new-arrivals">New Arrivals</li>
                        <li data-filter=".hot-sales">Hot Sales</li>
                    </ul>
                </div>
            </div>
            <div class="row product__filter">
                <?php
                $sql = "SELECT * FROM sanpham LIMIT 8";
                $result = $conn->query($sql);

                While($row = $result ->fetch_assoc())
                {
                    $id = $row['id'];
                    $id_dmsp = $row['id_dmsp'];
                    $namesp= $row['namesp'];
                    $gia_moi = $row['gia_moi'];
                    $loai =$row['loai'];
                    $anhsp = "admin/".$row['anhsp'];
                    $infosp = $row['infosp'];
                    $Ngaytao= $row['Ngaytao'];
                ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix <?php  switch ($loai) {
                                case "New Arrivals":
                                  echo "new-arrivals";
                                  break;
                                case "Best Sellers":
                                  echo "";
                                  break;
                                case "Hot Sales":
                                     echo "hot-sales";
                                  break;
                              } ?>">
                    <div class="product__item <?php if($loai=='Hot Sales') echo "sale" ?>">
                        <div class="product__item__pic set-bg" data-setbg="<?php echo $anhsp ?>">
                        
                        <?php
                            switch ($loai) {
                                case "New Arrivals":
                                  echo "<span class=\"label\">New</span>";
                                  break;
                                case "Best Sellers":
                                  echo "<span class=\"label\">Hot</span>";
                                  break;
                                case "Hot Sales":
                                     echo "<span class=\"label\">Sale</span>";
                                  break;
                              }
                         ?>
                            <ul class="product__hover">
                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><?php echo $namesp ?></h6>
                            <a href="#" class="add-cart">+ Add To Cart</a>
                            <h5><?php echo number_format($gia_moi); ?>VNĐ</h5>
                        </div>
                    </div>
                </div>
                <?php
                }?>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
  
    <section class="spad">
        <div class="container">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Voucher</h2>
                    </div>
                </div>
                <?php 
                $sql = "SELECT * FROM `image` where id=10";
                $result = $conn->query($sql);
                While($row = $result ->fetch_assoc())
                {
                    $anh1= "admin/".$row['img'];
                }
                $sql = "SELECT * FROM `image` where id=11";
                $result = $conn->query($sql);
                While($row = $result ->fetch_assoc())
                {
                    $anh2= "admin/".$row['img'];
                }
                $sql = "SELECT * FROM `image` where id=12";
                $result = $conn->query($sql);
                While($row = $result ->fetch_assoc())
                {
                    $anh3= "admin/".$row['img'];
                }
                ?>
            <div class="row">
                        <?php
                        $sql = "SELECT * FROM `voucher`";
                        $result = $conn->query($sql);
                        While($row = $result ->fetch_assoc())
                        {
                        $id = $row['id'];
                        $namevc = $row['namevc'];
                        $nd= $row['noidungvc'];
                        $phantram= $row['phantramvc'];
                        ?>
                <div class="col-lg-4">
                <div class="wrapper">
                    <div class="card front-face">
                        <?php
                            switch ($id) {
                                case "1":
                                  echo '<img src="'; echo $anh1; echo '">';
                                  break;
                                case "2":
                                    echo '<img src="'; echo $anh2; echo '">';
                                  break;
                                case "3":
                                    echo '<img src="'; echo $anh3; echo '">';
                                  break;
                              }
                            ?>
                    </div>
                    <div class="card back-face">
                        <?php
                            switch ($id) {
                                case "1":
                                  echo '<img src="admin/upload/coupon2.png">';
                                  break;
                                case "2":
                                  echo '<img src="admin/upload/coupon.png">';
                                  break;
                                case "3":
                                     echo '<img src="admin/upload/coupon1.png">';
                                  break;
                              }
                        ?>
                        <div class="info">
                            <div class="title">
                            <?php echo $namevc ?></div>
                            <p>
                            <?php echo $nd ?><br>Số Lượng Còn: <?php echo $row['soluongvc']?></p>
                        </div>
                        <ul>
                        <?php
                            switch ($id) {
                                case "1":
                                  ?><button type="button" class="btn btn-outline  btn-floating btn-lg btn-clipboard" style="color:#0091ff;border-color:#0091ff;" data-clipboard-text="<?php echo $namevc ?>" ><i class="bi bi-clipboard2-check"></i></button><?php
                                  break;
                                case "2":
                                  ?><button type="button" class="btn btn-outline btn-floating btn-lg btn-clipboard" style="color:#7f4096;border-color:#7f4096;"  data-clipboard-text="<?php echo $namevc ?>" ><i class="bi bi-clipboard2-check"></i></button><?php
                                  break;
                                case "3":
                                  ?><button type="button" class="btn btn-outline btn-floating btn-lg btn-clipboard" style="color:#fe7a4d;border-color:#fe7a4d;" data-clipboard-text="<?php echo $namevc ?>" ><i class="bi bi-clipboard2-check"></i></button><?php
                              }
                        ?>
                        </ul>
                    </div>
                </div>
                </div>
                <?php
                }?>
            </div>
        </div>
    </section>
    <!-- Categories Section Begin -->
    <?php
                        $sql = "SELECT * FROM `image` WHERE vitri='slider2'";
                        $result = $conn->query($sql);
                        While($row = $result ->fetch_assoc())
                        {
                        $id = $row['id'];
                        $vitri = $row['vitri'];
                        $img = "admin/".$row['img'];
                        $mota = $row['mota'];
                        $explode_mota = explode('<$>', $mota);
                        ?>
    <section class="categories spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="categories__text">
                        <h2><br /> <span><?php echo "$explode_mota[0]" ?></span> <br /></h2>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="categories__hot__deal">
                        <img src="<?php echo $img ?>" alt="">
                        <div class="hot__deal__sticker">
                            <span><?php echo "$explode_mota[1]" ?></span>
                            <h5><?php echo "$explode_mota[2]" ?></h5>
                        </div>
                    </div><?php } ?>
                </div>
                <div class="col-lg-4 offset-lg-1">
                    <div class="categories__deal__countdown">
                        <span>Deal Of The Week</span>
                        <h2>Multi-pocket Chest Bag Black</h2>
                        <div class="categories__deal__countdown__timer" id="countdown">
                            <div class="cd-item">
                                <span>3</span>
                                <p>Days</p>
                            </div>
                            <div class="cd-item">
                                <span>1</span>
                                <p>Hours</p>
                            </div>
                            <div class="cd-item">
                                <span>50</span>
                                <p>Minutes</p>
                            </div>
                            <div class="cd-item">
                                <span>18</span>
                                <p>Seconds</p>
                            </div>
                        </div>
                        <a href="shop.php" class="primary-btn">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Instagram Section Begin -->
    <section class="instagram spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="instagram__pic">
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-1.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-2.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-3.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-4.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-5.jpg"></div>
                        <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-6.jpg"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="instagram__text">
                        <h2>Instagram</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                        <h3>#Male_Fashion</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Instagram Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Latest News</span>
                        <h2>Fashion New Trends</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
                            <h5>What Curling Irons Are The Best Ones</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                            <h5>Eternity Bands Do Last Forever</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                        <div class="blog__item__text">
                            <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>
                            <h5>The Health Benefits Of Sunglasses</h5>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Footer Section Begin -->
    <?php  include('include/footer.html'); ?>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->
    <div class="sh-side-options sh-side-options-pages">
        <div class="sh-side-options-container">
        <a href="#home" class="sh-side-options-item sh-accent-color ">
        <div class="sh-side-options-item-container ">
        <i class="icon icon-layers bi bi-house-door"></i>
        </div>
        <div class="sh-side-options-hover">
        Home
        </div>
        </a>
        <a  href="#hot" class="sh-side-options-item sh-accent-color">
        <div class="sh-side-options-item-container">
        <i class="icon icon-envelope bi bi-bag"></i>
        </div>
        <div class="sh-side-options-hover" style="white-space: nowrap;">
        Sản phẩm nổi<span></span>bật
        </div>
        </a>
        <a href="shop.php" class="sh-side-options-item sh-accent-color">
        <div class="sh-side-options-item-container">
        <i class="icon icon-bag bi bi-three-dots"></i>
        </div>
        <div class="sh-side-options-hover">
        Tất<span></span>cả
        </div>
        </a>
        <a href="about.html" class="sh-side-options-item sh-accent-color">
        <div class="sh-side-options-item-container">
        <i class="icon icon-question bi bi-hash"></i>
        </div>
        <div class="sh-side-options-hover" style="white-space: nowrap;">
        Về chúng<span></span>tôi
        </div>
        </a>
        <a target="blank" href="#" class="sh-side-options-item sh-accent-color">
        <div class="sh-side-options-item-container">
        <i class="icon icon-envelope bi bi-envelope"></i>
        </div>
        <div class="sh-side-options-hover" style="white-space: nowrap;">
        Phản<span></span>hồi<span>/ Liên hệ</span>
        </div>
        
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.0/clipboard.min.js"></script> <!-- coppy  -->
</body>
<script>

    let section = document.querySelectorAll('section');
    let navLinks = document.querySelectorAll('My-menubar nav a');
     window.onscroll = () =>{
      Selection.array.forEach(element => {
        let top = window.scrollY;
        let offset= element.offsetTop - 150;
        let hight = element.offsetHeight;
        let id = element.getAttribute('id');
        if(top >= offset && top<offset+height){
          navLinks.forEach(links =>{
            links.classList.remove('home');
            document.querySelector('nav a[href*=' + id +']').classList.add ('home');
          })
        }
        
      });
     }
  </script>   
  <!-- coppy  -->
  <script>$( document ).ready(function() {
   
   new ClipboardJS('.btn');
   
}); </script>
</html>