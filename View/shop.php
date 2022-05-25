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
   <div id="content">
        <div class="container">
            <h5>KIẾN THỨC</h5>
            <div class ="row">
                <div class="col-md-4  col-3 col-lg-3">
                    <table class="table table-hover">
                        <table class="table table-hover " >
                            <thead style="background-color:  rgb(111, 221, 144);">
                            <tr>
                                
                                <th scope="col" style="height: 60px; color: white; "><h4>DANH MỤC SẢN PHẨM</h4></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                
                                <td style="height: 50px;">Rau củ</td>
                                
                            </tr>
                            <tr>
                                
                                <td style="height: 50px;">Hải sản</td>
                                
                            </tr>
                            <tr>
                                
                                <td style="height: 50px;">Trái cây</td>
                            
                            </tr>
                            <tr>
                                
                                <td style="height: 50px;">Thịt trứng</td>
                            
                            </tr>
                            <tr>
                                
                                <td style="height: 50px;">Đồ uống</td>
                            
                            </tr>
                            <tr>
                                
                                <td style="height: 50px;">Đồ khô</td>
                            
                            </tr>
                            </tbody>
                        </table>
                    </table>
                </div>
                <div class=" col-md-7 col-9 col-lg-9  ">
                    <div class="row " style="margin-left: 20px;">
                        <!--Vùng dữ liệu-->
                        <?php 
                                foreach($productList as $product) { ?>
                                    <div class="col-xs-2 col-3 col-lg-3 mb-4" >
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
                </div>    
            </div>
        </div>
    </div>
    
</div>
    <!--end content-->
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
            vimg.src = "img/" + "banner" + i +".jpg" ;
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