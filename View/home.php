<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Happy Trade</title>
    
	<link rel="stylesheet" href="./Public/css/style1.css">
        
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <!-- Own Carousel -->
    <link rel="stylesheet" href="./Public/css/owl.carousel.css">
    <link rel="stylesheet" href="./Public/css/owl.theme.green.css">
     <!-- JQuery & Own Carousel -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./Public/js/owl.carousel.js"></script>
    <script src="./Public/js/web.js"></script>
</head>
<body onload="autoloadimg ()">
<?php include_once './View/inc/header.php'?>
   <!--end header-->
    <div id="wrapper">
        <div class="container">
            <h4 style="text-align: center; margin:30px 0px 30px 30px">Mua sản phẩm được lựa chọn từ vườn </h4>
            <div class="img-ctn">

                <div class="img-container">
                    <div class="img-a1">
                        <img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_cate_1.png"  class="over ">  
                        <div class="overplay">
                            <img src="./public/images/index_cate_1_hover.png"   > 
                        </div>
                    </div>
                    <a href="http://mauweb.monamedia.net/happytrade/danh-muc/rau-cu/">Rau củ</a>
                </div>
                <div class="img-container">
                    <div class="img-a1">
                        <img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_cate_2.png" class="over " > <br> 
                        <div class="overplay">
                            <img src="./public/images/index_cate_2_hover.png" > <br> 
                        </div>
                    </div>
                    <a href="http://mauweb.monamedia.net/happytrade/danh-muc/rau-cu/">Hải sản </a>
                </div>
                <div class="img-container">
                    <div class="img-a1">
                        <img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_cate_3.png"  class="over ">  
                        <div class="overplay">
                            <img src="./public/images/index_cate_3_hover.png"   > 
                        </div>
                    </div>
                    <a href="http://mauweb.monamedia.net/happytrade/danh-muc/rau-cu/">Trứng thịt </a>
                </div>
                <div class="img-container">
                    <div class="img-a1">
                        <img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_cate_4.png"  class="over ">  
                        <div class="overplay">
                            <img src="./public/images/index_cate_4_hover.png"   > 
                        </div>
                    </div>
                    <a href="http://mauweb.monamedia.net/happytrade/danh-muc/rau-cu/">Trái cây </a>
                </div>
                <div class="img-container">
                    <div class="img-a1">
                        <img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_cate_5.png"  class="over ">  
                        <div class="overplay">
                            <img src="./public/images/index_cate_5_hover.png"   > 
                        </div>
                    </div>
                    <a href="http://mauweb.monamedia.net/happytrade/danh-muc/rau-cu/">Đồ khô </a>
                </div>
                <div class="img-container">
                    <div class="img-a1">
                        <img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_cate_6.png"  class="over ">  
                        <div class="overplay">
                            <img src="./public/images/index_cate_6_hover.png"   > 
                        </div>
                    </div>
                    <a href="http://mauweb.monamedia.net/happytrade/danh-muc/rau-cu/">Đồ uống </a>
                </div>
            </div>
            <div class="clear"></div>  
            <h5 style="margin:30px 0px 30px 30px">CHƯƠNG TRÌNH KHUYẾN MÃI</h5>
            <div class="medium">
                <img src="./public/images/index_promotion_1_large.png">
                <img src="./public/images/index_promotion_2_large.jpg">
                <img src="./public/images/index_promotion_3_large.jpg">
                <img src="./public/images/index_promotion_4_large.png">
            </div>
            <h5 style="margin:30px 0px 30px 30px">SẢN PHẨM NỔI BẬT </h5>
            <div class="main" style="text-align: center;">
                <div class="box">
                        <div class="row " >
                            <!--Vùng dữ liệu-->
                            <?php 
                                foreach($productList as $product) { ?>
                                    <div class="col-xs-2 col-2 col-lg-2 mb-4" >
                                        <a href="single.php?id=<?php echo $product->id; ?>"> 
                                            <div class="card"  >
                                                <img src="<?php echo $product->image;?>" width="100%" height="200px">
                                                <div class="card-body">
                                                    <p style="color: black" ><?php echo $product->name; ?></p>
                                                    <b class="card-text  " style="color: orange"><?php echo $product->price; ?>đ</b>       
                                                    <a  class="btn btn-success" href="order.php?id=<?php echo $product->id; ?>">Thêm vào giỏ </a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>  
                                                        
                            <?php } ?>
                        </div>
                        <button type="button" class="btn btn-success" style="margin-left: 50px; ">Xem thêm</button>  
                </div>
            <div class="clear"></div>
            
            <h5 style="margin:30px 0px 30px 30px">Kết nối nhà vườn</h5>
            
            <div class="owl-carousel owl-theme" style="margin-left: 35px;">
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="border">
                            <img src="./public/images/logo-1.png "class="card-img-top p-1" alt="..." >

                         </div>
                        <div class="card-body">
                            <h6 class="">Công ty Thực Phẩm Tâm Minh</h6>
                            <p class="card-text">Công ty TNHH Thực phẩm Tâm Minh có sản xuất Bột nêm Ngưu ...</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="border">
                            <img src="./public/images/upload_2a9f0c359ba448c785490ea0c0ed3dc0_large.jpg" class="card-img-top p-1" alt="...">

                         </div>
                        <div class="card-body">
                            <h6 class="">Antofu Việt Nam</h6>
                            <p class="card-text">Antofu Việt Nam là công ty đầu tư 100% nguồn vốn ...</p>
                        </div>
                    </div>
                </div>
                
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="border">
                            <img src="./public/images/upload_183f92f8231a4662af441d7826971e1e_large.jpg" class="card-img-top p-1" alt="...">

                         </div>
                        <div class="card-body">
                            <h6 class="">An Mộc Farm</h6>
                            <p class="card-text">An Mộc Farm - trang trại thuần nông chuyên cung cấp ...</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="border">
                            <img src="./public/images/viet_nature_logotype_color_on_white2.png" class="card-img-top p-1" alt="...">

                         </div>
                        <div class="card-body">
                            <h6 class="">Công ty Thiên Nhiên Việt</h6>
                            <p class="card-text">Công ty TNHH xuất nhập khẩu Thiên Nhiên Việt chuyên ...</p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card border-0" style="width: 18rem;">
                        <div class="border">
                            <img src="./public/images/binca-vietnam-logo_large.png" class="card-img-top p-1" alt="...">

                         </div>
                        <div class="card-body">
                            <h6 class="">Binca Việt Nam</h6>
                            <p class="card-text">Chính thức bước vào thị trường Việt Nam vào năm 1998 ...</p>
                        </div>
                    </div>
                </div>  
                
                 
            </div>
            <h5 style="margin:30px 0px 30px 30px">Hành trình Organic bắt đầu từ đây</h5>
            <div class="row " style="margin-left: 10px; "  >
                <div class="col-md-3" >
                    <div class="border">
                        <img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_news_1.png" style="height: 60%; width: 100%;">

                    </div>
                    <div class="card-body">
                        <h6 style="margin-top: 20px; "><a href="#" >Làm thế nào để được chứng nhận hữu cơ ở Việt Nam?</a></h6>
                        <p>Chứng nhận hữu cơ là một tiêu chuẩn góp phần đảm bảo tính giá trị cho các sản phẩm hữu cơ.</p>
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="border">
                        <img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_news_2.jpg" style="height:  60%; width: 100%;">
                    </div>
                    <div class="card-body">
                        <h6 style="margin-top: 20px;"><a href="#">Giải đáp : Thực phẩm hữu cơ Organic là gì ?</a></h6>
                        <p>Thực phẩm organic hay còn gọi là thực phẩm hữu cơ đang ngày một phổ biến và tạo một cơn sốt trên thị trường hiện nay.</p>
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="border">
                        <img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_news_3.jpg"style="height:  60%; width: 100%;">
                  
                    </div>
                    <div class="card-body">
                        <h6 style="margin-top: 20px;"><a href="#">Nông nghiệp hữu cơ và thực trạng chứng nhận tại Việt Nam</a></h6>
                        <p>Là một mô hình nông nghiệp còn khá mới tại VN nhưng đã được áp dụng từ lâu ở những nước phát triển.</p>
                    </div>
                </div>
                <div class="col-md-3" >
                    <div class="border">
                        <img src="http://mauweb.monamedia.net/happytrade/wp-content/uploads/2019/05/index_news_4.jpg"style="height:  60%; width: 100%;"> 
                    </div>
                    <div class="card-body">
                        <h6 style="margin-top: 20px;"><a href="#">Tổng hợp những điều bạn cần biết về thực phẩm organic</a></h6>
                        <p>Thực phẩm hữu cơ – thực phẩm organic xuất hiện trong thời gian gần đây như là cứu cánh của nhiều bà nội trợ Việt Nam.</p>
                    </div>
                </div>
            </div>
             
                
            
        </div>
         
        
        
    </div>
    <!--end wrapper-->
    <?php include_once './View/inc/footer.php'?>
    <!--end footer-->
</body>
<script type="text/javascript">
    var vimg = document.getElementById("anhnen-a")
    var t ;
    var i = 1 ;
    function autoloadimg() {
        t = setInterval(function autoloadimg(){
            i++;
            if ( i > 3 ){
                i = 1;
            }
            vimg.src = "./public/images/" + "banner" + i +".jpg" ;
        }, 2000 )
    }
    $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                // loop:true,
                margin:0,
                nav:true,
                // items: 2,
                mouseDrag: true,
                touchDrag: true,
                pullDrag: true,
                dots: false,
                responsive:{
                    0:{
                        items:1
                    },
                    400: {
                        items:2
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:4
                    }
                }
            })
        });

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>     -->
   
</html>